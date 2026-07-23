<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $faqs = Faq::with('categories')

            ->when($request->filled('search'), function ($query) use ($request) {

                $query->where('question', 'like', '%' . $request->search . '%');

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


        return view('admin.faqs.index', compact('faqs', 'categories'));
    }



    public function create()
    {
        $categories = Category::all();

        return view('admin.faqs.create', compact('categories'));
    }



    public function store(Request $request)
    {
        $validated = $request->validate([

            'question' => [
                'required',
                'string',
                'max:255'
            ],

            'answer' => [
                'required',
                'string'
            ],

            'categories' => [
                'required',
                'array'
            ],

            'categories.*' => [
                'exists:categories,id'
            ],

            'status' => [
                'required',
                'in:draft,published'
            ],

            'published_at' => [
                'nullable',
                'date'
            ],

        ]);



        $faq = Faq::create([

            'question' => $validated['question'],

            'answer' => $validated['answer'],

            'status' => $validated['status'],

            'published_at' => $validated['published_at'] ?? null,

        ]);



        $faq->categories()->sync($validated['categories']);



        return redirect()

            ->route('admin.faqs.index')

            ->with('success', 'سوال متداول با موفقیت ایجاد شد.');
    }



    public function show(Faq $faq)
    {
        //
    }



    public function edit(Faq $faq)
    {
        $categories = Category::all();

        $faq->load('categories');

        return view('admin.faqs.edit', compact('faq', 'categories'));
    }



    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([

            'question' => [
                'required',
                'string',
                'max:255'
            ],

            'answer' => [
                'required',
                'string'
            ],

            'categories' => [
                'required',
                'array'
            ],

            'categories.*' => [
                'exists:categories,id'
            ],

            'status' => [
                'required',
                'in:draft,published'
            ],

            'published_at' => [
                'nullable',
                'date'
            ],

        ]);



        $faq->update([

            'question' => $validated['question'],

            'answer' => $validated['answer'],

            'status' => $validated['status'],

            'published_at' => $validated['published_at'] ?? null,

        ]);



        $faq->categories()->sync($validated['categories']);



        return redirect()

            ->route('admin.faqs.index')

            ->with('success', 'سوال متداول با موفقیت ویرایش شد.');
    }



    public function destroy(Faq $faq)
    {
        $faq->categories()->detach();

        $faq->delete();


        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'سوال متداول حذف شد.');
    }
}