@extends('layouts.admin')


@section('content')
    <!-- PageHeader -->
        <section class="px-8 pt-8 pb-6">

            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

                <!-- Title -->

                <div>

                    <!-- Breadcrumb -->

                    <nav class="flex items-center gap-2 text-sm text-gray-500 mb-3">

                        <a href="{{ route('admin.dashboard') }}"
                           class="hover:text-[#0f4c3a] transition">

                            داشبورد

                        </a>

                        <i data-lucide="chevron-left" class="w-4 h-4"></i>

                        <a href="{{ route('admin.faqs.index') }}"
                           class="hover:text-[#0f4c3a] transition">

                            سوالات

                        </a>

                        <i data-lucide="chevron-left" class="w-4 h-4"></i>

                        <span class="font-semibold text-[#0f4c3a]">

                            افزودن سوال جدید

                        </span>

                    </nav>

                    <!-- Heading -->

                    <div class="flex items-center gap-3 flex-wrap">

                        <h1 class="text-3xl font-black text-[#0f4c3a]">

                            افزودن سوال جدید

                        </h1>

                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm font-semibold">

                            Draft

                        </span>

                    </div>

                    <p class="mt-3 text-gray-500 leading-7">

                        سوال، جواب و اطلاعات سئو را وارد کنید و در پایان منتشر نمایید.

                    </p>

                </div>

                <!-- Back Button -->

                <div>

                    <a href="{{ route('admin.faqs.index') }}"
                       class="inline-flex items-center gap-3 px-6 py-4 rounded-2xl border border-[#ebc9a270] bg-white text-[#0f4c3a] hover:bg-[#FAF8F4] transition shadow-sm">

                        <i data-lucide="arrow-right"></i>

                        <span class="font-semibold">

                            بازگشت به لیست سوالات

                        </span>

                    </a>

                </div>

            </div>

        </section>
    <!-- ./PageHeader -->

    <!-- ArticleForm -->
        <section class="px-8 pb-8">
            <form action="{{ route('admin.faqs.update', $faq->id) }}" method="POST">

            @csrf
            @method('PUT')

                <div class="bg-white rounded-3xl border border-[#ebc9a270] shadow-sm p-8 space-y-8">

                    <!-- ===================== -->
                    <!-- Title -->
                    <!-- ===================== -->

                    <div>

                        <label class="block text-[#0f4c3a] font-bold mb-3">

                            سوال

                        </label>

                        <input type="text" name="question"
                            value="{{ old('question', $faq->question) }}"
                            placeholder="متن سوال را وارد کنید..."
                            class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-5 outline-none focus:border-[#0f4c3a] transition">

                    </div>

                    <!-- ===================== -->
                    <!-- Row -->
                    <!-- ===================== -->

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                        <!-- Category -->

                        <div>

                            <label class="block text-[#0f4c3a] font-bold mb-3">

                                دسته‌بندی

                            </label>

                            <select
                                name="categories[]"
                                class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-4 outline-none focus:border-[#0f4c3a]">


                            @foreach($categories as $category)

                                <option 
                                value="{{ $category->id }}"
                                {{ $faq->categories->contains($category->id) ? 'selected' : '' }}
                                >

                                {{ $category->name }}

                                </option>

                            @endforeach


                            </select>

                        </div>

                        <!-- Status -->

                        <div>

                            <label class="block text-[#0f4c3a] font-bold mb-3">

                                وضعیت

                            </label>

                            <select
                                name="status"
                                class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-4 outline-none focus:border-[#0f4c3a]">


                                <option value="draft"
                                    {{ $faq->status == 'draft' ? 'selected' : '' }}>
                                    پیش‌نویس
                                </option>


                                <option value="published"
                                    {{ $faq->status == 'published' ? 'selected' : '' }}>
                                    منتشر شده
                                </option>


                            </select>

                        </div>

                        <!-- Publish Date -->

                        <div>

                            <label class="block text-[#0f4c3a] font-bold mb-3">

                                تاریخ انتشار

                            </label>

                            <input
                                type="date"
                                name="published_at"
                                value="{{ old('published_at') }}"
                                class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-4 outline-none focus:border-[#0f4c3a]">

                        </div>

                    </div>

                    <!-- ===================== -->
                    <!-- Editor -->
                    <!-- ===================== -->

                    <div>

                        <label class="block text-[#0f4c3a] font-bold mb-3">

                            متن پاسخ

                        </label>

                        <!-- Toolbar -->

                        <div class="flex flex-wrap items-center gap-2 bg-[#FAF8F4] border border-[#ebc9a270] rounded-t-2xl p-3">

                            <button class="w-10 h-10 rounded-xl hover:bg-white transition font-bold">
                                B
                            </button>

                            <button class="w-10 h-10 rounded-xl hover:bg-white transition italic">
                                I
                            </button>

                            <button class="px-3 h-10 rounded-xl hover:bg-white transition">
                                H2
                            </button>

                            <button class="px-3 h-10 rounded-xl hover:bg-white transition">
                                H3
                            </button>

                            <button class="w-10 h-10 rounded-xl hover:bg-white transition">
                                •
                            </button>

                            <button class="w-10 h-10 rounded-xl hover:bg-white transition">
                                "
                            </button>

                            <button class="w-10 h-10 rounded-xl hover:bg-white transition">

                                <i data-lucide="image"></i>

                            </button>

                            <button class="w-10 h-10 rounded-xl hover:bg-white transition">

                                <i data-lucide="link"></i>

                            </button>

                        </div>

                        <!-- Editor -->

                        <textarea
                            name="answer"
                            rows="18"
                            placeholder="متن کامل پاسخ را وارد کنید..."
                            class="w-full rounded-b-2xl border border-t-0 border-[#ebc9a270] bg-white p-6 outline-none resize-none leading-9">{{ old('answer', $faq->answer) }}</textarea>

                    </div>

                    <!-- ===================== -->
                    <!-- Action Buttons -->
                    <!-- ===================== -->

                    <div class="flex flex-wrap items-center justify-between gap-4 pt-6 border-t border-[#ebc9a270]">

                        <!-- Buttons -->

                        <div class="flex flex-wrap items-center gap-2"> 

                            <!-- Publish -->

                            <button
                                type="submit"
                                class="inline-flex items-center gap-2 px-8 h-12 rounded-2xl bg-[#0f4c3a] text-white hover:bg-[#14624a] transition shadow-lg shadow-[#0f4c3a]/20 cursor-pointer">

                                <i data-lucide="rocket" class="w-5 h-5"></i>

                                انتشار سوال

                            </button>

                        </div>

                    </div>

                </div>
            </form>
        </section>
    <!-- ./ArticleForm -->
@endsection