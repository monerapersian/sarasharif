@extends('layouts.admin')

@section('title', 'مدیریت مقالات')

@section('content')

    <!-- PageHeader -->
        <section class="px-8 pt-8 pb-6">

            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

                <!-- Title -->

                <div>

                    <!-- Breadcrumb -->

                    <nav class="flex items-center gap-2 text-sm text-gray-500 mb-3">

                        <a href="#" class="hover:text-[#0f4c3a] transition">
                            داشبورد
                        </a>

                        <i data-lucide="chevron-left" class="w-4 h-4"></i>

                        <span class="text-[#0f4c3a] font-semibold">
                            مقالات
                        </span>

                    </nav>

                    <!-- Heading -->

                    <div class="flex items-center gap-3">

                        <h1 class="text-4xl font-black text-[#0f4c3a]">

                            مقالات

                        </h1>

                        <span class="px-3 py-1 rounded-full bg-[#ebc9a270] text-[#0f4c3a] text-sm font-bold">

                            {{ $posts->total() }} مقاله

                        </span>

                    </div>

                    <p class="mt-3 text-gray-500">

                        مدیریت، ایجاد، ویرایش و انتشار مقالات وب‌سایت

                    </p>

                </div>

                <!-- Action -->

                <div>

                    <a href="#"
                        class="inline-flex items-center gap-3 rounded-2xl bg-[#0f4c3a] hover:bg-[#0b3d2f] text-white px-6 py-4 font-semibold transition shadow-md hover:shadow-lg">

                        <i data-lucide="plus" class="w-5 h-5"></i>

                        <span>

                            مقاله جدید

                        </span>

                    </a>

                </div>

            </div>

        </section>
    <!-- ./PageHeader -->

    <!-- Toolbar -->
        <section class="px-8 pb-8">

            <div class="bg-white rounded-3xl border border-[#ebc9a270] p-6 shadow-sm">

                <form
                    id="filterForm"
                    method="GET"
                    action="{{ route('admin.posts.index') }}">

                    <div class="flex flex-col xl:flex-row xl:items-center gap-4">

                        <!-- Search -->

                        <div class="relative flex-1">

                            <i
                                data-lucide="search"
                                class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none"></i>

                            <input
                                type="text"
                                name="search"
                                value="{{ request('search') }}"
                                placeholder="جستجوی مقاله..."
                                class="w-full h-12 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] pr-12 pl-4 outline-none focus:border-[#0f4c3a] transition">

                        </div>

                        <!-- Category -->

                        <div class="relative">

                            <i
                                data-lucide="folder"
                                class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none"></i>

                            <select
                                name="category"
                                onchange="document.getElementById('filterForm').submit()"
                                class="appearance-none h-12 w-full xl:w-56 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] pr-12 pl-10 outline-none focus:border-[#0f4c3a] transition">

                                <option value="">همه دسته‌بندی‌ها</option>

                                @foreach($categories as $category)

                                    <option
                                        value="{{ $category->id }}"
                                        {{ request('category') == $category->id ? 'selected' : '' }}>

                                        {{ $category->name }}

                                    </option>

                                @endforeach

                            </select>

                            <i
                                data-lucide="chevron-down"
                                class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none"></i>

                        </div>

                        <!-- Sort -->

                        <div class="relative">

                            <i
                                data-lucide="arrow-up-down"
                                class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none"></i>

                            <select
                                name="sort"
                                onchange="document.getElementById('filterForm').submit()"
                                class="appearance-none h-12 w-full xl:w-56 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] pr-12 pl-10 outline-none focus:border-[#0f4c3a] transition">

                                <option
                                    value="latest"
                                    {{ request('sort', 'latest') == 'latest' ? 'selected' : '' }}>

                                    جدیدترین

                                </option>

                                <option
                                    value="oldest"
                                    {{ request('sort') == 'oldest' ? 'selected' : '' }}>

                                    قدیمی‌ترین

                                </option>

                            </select>

                            <i
                                data-lucide="chevron-down"
                                class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none"></i>

                        </div>

                        <!-- Counter -->

                        <div
                            class="flex items-center justify-center gap-2 h-12 px-5 rounded-2xl bg-[#ebc9a270] text-[#0f4c3a] font-bold whitespace-nowrap">

                            <i data-lucide="file-text" class="w-5 h-5"></i>

                            <span>

                                {{ $posts->total() }} مقاله

                            </span>

                        </div>

                    </div>

                </form>

            </div>

        </section>
    <!-- ./Toolbar -->

    <!-- ArticlesList -->
        <section class="px-8 pb-8">

            <div class="space-y-5">

                <!-- Article Card -->

                @forelse($posts as $post)

                    <article class="bg-white border border-[#ebc9a270] rounded-3xl p-6 hover:shadow-lg transition">

                        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

                            <div class="flex-1">

                                <div class="flex flex-wrap items-center gap-3 mb-4">

                                    @foreach($post->categories as $category)
                                        <span class="px-3 py-1 rounded-full bg-[#ebc9a270] text-[#0f4c3a] text-sm font-semibold">
                                            {{ $category->name }}
                                        </span>
                                    @endforeach

                                    @if($post->status === 'published')
                                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm font-semibold">
                                            منتشر شده
                                        </span>
                                    @else
                                        <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-sm font-semibold">
                                            پیش‌نویس
                                        </span>
                                    @endif

                                </div>

                                <h2 class="text-2xl font-bold text-[#0f4c3a] leading-9 mb-3">
                                    {{ $post->title }}
                                </h2>

                                <div class="flex items-center gap-2 text-gray-500 text-sm">

                                    <i data-lucide="calendar-days" class="w-4 h-4"></i>

                                    <span>
                                        {{ optional($post->published_at)->format('Y/m/d') ?? '---' }}
                                    </span>

                                </div>

                            </div>

                            <div class="flex items-center gap-3">

                                <a href="{{ route('admin.posts.edit',$post) }}"
                                   class="w-12 h-12 flex items-center justify-center rounded-2xl bg-[#FAF8F4] border border-[#ebc9a270] text-[#0f4c3a] hover:bg-[#0f4c3a] hover:text-white transition">

                                    <i data-lucide="square-pen" class="w-5 h-5"></i>

                                </a>

                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="delete-post-form">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="button"
                                        class="delete-post-btn w-12 h-12 flex items-center justify-center rounded-2xl bg-red-50 border border-red-200 text-red-600 hover:bg-red-600 hover:text-white transition"
                                        data-title="{{ $post->title }}">

                                        <i data-lucide="trash-2" class="w-5 h-5"></i>

                                    </button>

                                </form>

                            </div>

                        </div>

                    </article>

                    @empty

                    <div class="bg-white border border-[#ebc9a270] rounded-3xl p-10 text-center text-gray-500">

                        هنوز مقاله‌ای ثبت نشده است.

                    </div>

                @endforelse

            </div>

        </section>
    <!-- ./ArticlesList -->

    <!-- Pagination -->
        <section class="px-8 pb-10">

            <div class="bg-white border border-[#ebc9a270] rounded-3xl p-5">

                <div class="flex flex-col lg:flex-row items-center justify-between gap-6">

                    <!-- Info -->

                    <div class="text-sm text-gray-500">

                        نمایش

                        <span class="font-bold text-[#0f4c3a]">
                            {{ $posts->firstItem() ?? 0 }}
                        </span>

                        تا

                        <span class="font-bold text-[#0f4c3a]">
                            {{ $posts->lastItem() ?? 0 }}
                        </span>

                        از

                        <span class="font-bold text-[#0f4c3a]">
                            {{ $posts->total() }}
                        </span>

                        مقاله

                    </div>

                    <!-- Pagination -->

                    <div class="flex items-center gap-2">


                        {{-- Previous Button --}}

                        @if ($posts->onFirstPage())

                            <button
                                disabled
                                class="flex items-center justify-center w-11 h-11 rounded-2xl border border-[#ebc9a270] bg-gray-100 text-gray-400">

                                <i data-lucide="chevron-right" class="w-5 h-5"></i>

                            </button>

                        @else

                            <a href="{{ $posts->previousPageUrl() }}"
                                class="flex items-center justify-center w-11 h-11 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] text-[#0f4c3a] hover:bg-[#0f4c3a] hover:text-white transition">

                                <i data-lucide="chevron-right" class="w-5 h-5"></i>

                            </a>

                        @endif



                        {{-- Page Numbers --}}

                        @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)


                            @if ($page == $posts->currentPage())

                                <span
                                    class="flex items-center justify-center w-11 h-11 rounded-2xl bg-[#0f4c3a] text-white font-bold">

                                    {{ $page }}

                                </span>


                            @else

                                <a href="{{ $url }}"
                                    class="flex items-center justify-center w-11 h-11 rounded-2xl border border-[#ebc9a270] hover:bg-[#FAF8F4] transition">

                                    {{ $page }}

                                </a>

                            @endif


                        @endforeach



                        {{-- Next Button --}}

                        @if ($posts->hasMorePages())

                            <a href="{{ $posts->nextPageUrl() }}"
                                class="flex items-center justify-center w-11 h-11 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] text-[#0f4c3a] hover:bg-[#0f4c3a] hover:text-white transition">

                                <i data-lucide="chevron-left" class="w-5 h-5"></i>

                            </a>

                        @else

                            <button
                                disabled
                                class="flex items-center justify-center w-11 h-11 rounded-2xl border border-[#ebc9a270] bg-gray-100 text-gray-400">

                                <i data-lucide="chevron-left" class="w-5 h-5"></i>

                            </button>

                        @endif
                    </div>

                </div>

            </div>

        </section>
    <!-- ./Pagination -->

    <!-- DeleteModal -->
        <div
            id="deleteModal"
            class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm">

            <div class="w-full max-w-md mx-4 rounded-3xl bg-white p-8 shadow-2xl">

                <div class="flex justify-center mb-5">
                    <div class="w-16 h-16 rounded-full bg-red-100 flex items-center justify-center">
                        <i data-lucide="triangle-alert" class="w-8 h-8 text-red-600"></i>
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-center text-[#0f4c3a]">
                    حذف مقاله
                </h3>

                <p class="mt-4 text-center text-gray-600 leading-8">
                    شما در حال حذف مقاله
                    <br>
                    <span id="deletePostTitle" class="font-bold text-[#0f4c3a]"></span>
                    <br>
                    هستید.
                </p>

                <p class="mt-3 text-center text-red-500 text-sm">
                    این عملیات قابل بازگشت نیست.
                </p>

                <div class="mt-8 flex gap-3">

                    <button
                        id="cancelDelete"
                        class="flex-1 h-12 rounded-2xl border border-[#ebc9a270] hover:bg-gray-50 transition">
                        انصراف
                    </button>

                    <button
                        id="confirmDelete"
                        class="flex-1 h-12 rounded-2xl bg-red-600 text-white hover:bg-red-700 transition">
                        حذف مقاله
                    </button>

                </div>

            </div>

        </div>
    <!-- ./DeleteModal -->

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const modal = document.getElementById('deleteModal');
            const title = document.getElementById('deletePostTitle');
            const confirmBtn = document.getElementById('confirmDelete');
            const cancelBtn = document.getElementById('cancelDelete');

            let currentForm = null;

            document.querySelectorAll('.delete-post-btn').forEach(button => {

                button.addEventListener('click', () => {

                    currentForm = button.closest('form');

                    title.textContent = `«${button.dataset.title}»`;

                    modal.classList.remove('hidden');
                    modal.classList.add('flex');

                    cancelBtn.focus();

                });

            });

            cancelBtn.addEventListener('click', closeModal);

            modal.addEventListener('click', function (e) {

                if (e.target === modal) {
                    closeModal();
                }

            });

            document.addEventListener('keydown', function (e) {

                if (e.key === 'Escape') {
                    closeModal();
                }

            });

            confirmBtn.addEventListener('click', function () {

                if (currentForm) {
                    currentForm.submit();
                }

            });

            function closeModal() {

                modal.classList.remove('flex');
                modal.classList.add('hidden');

                currentForm = null;

            }

        });
    </script>

@endsection