<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        // مقاله منتخب
        $featuredPost = Post::with('categories')
            ->where('status', 'published')
            ->where('is_featured', true)
            ->orderByDesc('published_at')
            ->first();

        // دسته‌بندی‌ها
        $categories = Category::orderBy('name')->get();

        // لیست مقالات
        $posts = Post::with('categories')
            ->where('status', 'published')

            // جستجو
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where(function ($q) use ($request) {
                    $q->where('title', 'like', '%' . $request->search . '%')
                      ->orWhere('excerpt', 'like', '%' . $request->search . '%');
                });
            })

            // فیلتر دسته‌بندی
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->whereHas('categories', function ($q) use ($request) {
                    $q->where('slug', $request->category);
                });
            })

            // مرتب‌سازی بر اساس تاریخ انتشار
            ->orderByDesc('published_at')

            ->paginate(9)
            ->withQueryString();

        return view('pages.blog.index', compact(
            'featuredPost',
            'categories',
            'posts'
        ));
    }

    public function show($slug)
    {
        $post = Post::with('categories')
            ->where('status', 'published')
            ->where('slug', $slug)
            ->firstOrFail();

        // مقاله قبلی
        $previousPost = Post::where('status', 'published')
            ->where('published_at', '<', $post->published_at)
            ->orderByDesc('published_at')
            ->first();

        // مقاله بعدی
        $nextPost = Post::where('status', 'published')
            ->where('published_at', '>', $post->published_at)
            ->orderBy('published_at')
            ->first();

        // شناسه دسته‌بندی‌های مقاله
        $categoryIds = $post->categories->pluck('id');

        // کلمات مهم عنوان
        $titleWords = collect(preg_split('/\s+/u', $post->title))
            ->filter(fn ($word) => mb_strlen($word) >= 3)
            ->values();

        // مقالات مرتبط
        $relatedQuery = Post::with('categories')
            ->where('status', 'published')
            ->where('id', '!=', $post->id)
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            });

        // اولویت به عنوان‌های مشابه
        foreach ($titleWords as $word) {
            $relatedQuery->orderByRaw(
                "CASE WHEN title LIKE ? THEN 0 ELSE 1 END",
                ["%{$word}%"]
            );
        }

        $relatedPosts = $relatedQuery
            ->orderByDesc('published_at')
            ->take(3)
            ->get();

        // اگر کمتر از 3 مقاله پیدا شد، با آخرین مقالات تکمیل کن
        if ($relatedPosts->count() < 3) {

            $morePosts = Post::with('categories')
                ->where('status', 'published')
                ->where('id', '!=', $post->id)
                ->whereNotIn('id', $relatedPosts->pluck('id'))
                ->orderByDesc('published_at')
                ->take(3 - $relatedPosts->count())
                ->get();

            $relatedPosts = $relatedPosts->concat($morePosts);
        }

        return view('pages.blog.single', compact(
            'post',
            'previousPost',
            'nextPost',
            'relatedPosts'
        ));
    }
}