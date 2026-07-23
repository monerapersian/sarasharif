<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Services\ImageOptimizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    protected $imageOptimizer;

    public function __construct(ImageOptimizer $imageOptimizer)
    {
        $this->imageOptimizer = $imageOptimizer;
    }

    public function index(Request $request)
    {
        $categories = Category::all();

        $posts = Post::with('categories')

            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where(function ($q) use ($request) {
                    $q->where('title', 'like', '%' . $request->search . '%')
                      ->orWhere('excerpt', 'like', '%' . $request->search . '%');
                });
            })

            ->when($request->filled('category'), function ($query) use ($request) {
                $query->whereHas('categories', function ($q) use ($request) {
                    $q->where('categories.id', $request->category);
                });
            })

            ->when($request->sort === 'oldest', function ($query) {
                $query->oldest();
            }, function ($query) {
                $query->latest();
            })

            ->paginate(10)
            ->withQueryString();

        return view('admin.posts.index', compact('posts', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'required|max:255',
            'slug'           => 'required|max:255|unique:posts,slug',
            'featured_image' => 'nullable|image|max:10240',
            'excerpt'        => 'nullable',
            'content'        => 'required',
            'status'         => 'required|in:draft,published',
            'category'       => 'required|exists:categories,id',
            'is_featured'    => 'nullable|boolean',
            'published_at'   => 'nullable|date',
        ]);

        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $this->imageOptimizer
                ->optimize($request->file('featured_image'), 'posts');
        }

        $validated['is_featured'] = $request->boolean('is_featured');

        $post = Post::create($validated);

        $post->categories()->attach($request->category);

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'مقاله با موفقیت ایجاد شد.');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title'          => 'required|max:255',
            'slug'           => 'required|max:255|unique:posts,slug,' . $post->id,
            'featured_image' => 'nullable|image|max:10240',
            'excerpt'        => 'nullable',
            'content'        => 'required',
            'status'         => 'required|in:draft,published',
            'category'       => 'required|exists:categories,id',
            'is_featured'    => 'nullable|boolean',
            'published_at'   => 'nullable|date',
        ]);

        if ($request->hasFile('featured_image')) {

            // حذف تصویر قبلی
            if ($post->featured_image && Storage::disk('public')->exists($post->featured_image)) {
                Storage::disk('public')->delete($post->featured_image);
            }

            // ذخیره تصویر جدید
            $validated['featured_image'] = $this->imageOptimizer
                ->optimize($request->file('featured_image'), 'posts');
        }

        $validated['is_featured'] = $request->boolean('is_featured');

        $post->update($validated);

        $post->categories()->sync([$request->category]);

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'مقاله با موفقیت بروزرسانی شد.');
    }

    public function destroy(Post $post)
    {
        // حذف تصویر از Storage
        if ($post->featured_image && Storage::disk('public')->exists($post->featured_image)) {
            Storage::disk('public')->delete($post->featured_image);
        }

        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'مقاله حذف شد.');
    }
}