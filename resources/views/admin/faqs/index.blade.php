@extends('layouts.admin')

@section('title', 'سوالات متداول')

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
                            سوالات متداول
                        </span>

                    </nav>

                    <!-- Heading -->

                    <div class="flex items-center gap-3">

                        <h1 class="text-4xl font-black text-[#0f4c3a]">

                            سوالات متداول

                        </h1>

                        <span class="px-3 py-1 rounded-full bg-[#ebc9a270] text-[#0f4c3a] text-sm font-bold">

                            {{ $faqs->total() }} سوال

                        </span>

                    </div>

                    <p class="mt-3 text-gray-500">

                        مدیریت، ایجاد، ویرایش و انتشار سوالات رایج کاربران

                    </p>

                </div>

                <!-- Action -->

                <div>

                    <a href="{{ route('admin.faqs.create') }}"
                        class="inline-flex items-center gap-3 rounded-2xl bg-[#0f4c3a] hover:bg-[#0b3d2f] text-white px-6 py-4 font-semibold transition shadow-md hover:shadow-lg">

                        <i data-lucide="plus" class="w-5 h-5"></i>

                        <span>

                            سوال جدید

                        </span>

                    </a>

                </div>

            </div>

        </section>
    <!-- ./PageHeader -->

    <!-- Toolbar -->
        <section class="px-8 pb-8">

            <div class="bg-white rounded-3xl border border-[#ebc9a270] p-6 shadow-sm">

                <div class="flex flex-col xl:flex-row xl:items-center gap-4">

                    <!-- Search -->

                    <form method="GET"
                          action="{{ route('admin.faqs.index') }}"
                          class="flex flex-col xl:flex-row xl:items-center gap-4 w-full">

                        {{-- Search --}}
                        <div class="relative flex-1">

                            <i data-lucide="search"
                               class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"></i>

                            <input
                                type="text"
                                name="search"
                                value="{{ request('search') }}"
                                placeholder="جستجوی سوال..."
                                class="w-full h-12 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] pr-12 pl-4 outline-none focus:border-[#0f4c3a] transition">

                        </div>

                        {{-- Category --}}
                        <div class="relative">

                            <i data-lucide="folder"
                               class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none"></i>

                            <select
                                name="category"
                                onchange="this.form.submit()"
                                class="appearance-none h-12 w-full xl:w-56 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] pr-12 pl-10 outline-none focus:border-[#0f4c3a] transition">

                                <option value="">همه دسته‌بندی‌ها</option>

                                @foreach($categories as $category)

                                    <option
                                        value="{{ $category->id }}"
                                        @selected(request('category') == $category->id)>

                                        {{ $category->name }}

                                    </option>

                                @endforeach

                            </select>

                            <i data-lucide="chevron-down"
                               class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none"></i>

                        </div>

                        {{-- Sort --}}
                        <div class="relative">

                            <i data-lucide="arrow-up-down"
                               class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none"></i>

                            <select
                                name="sort"
                                onchange="this.form.submit()"
                                class="appearance-none h-12 w-full xl:w-56 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] pr-12 pl-10 outline-none focus:border-[#0f4c3a] transition">

                                <option value="latest" @selected(request('sort')!='oldest')>
                                    جدیدترین
                                </option>

                                <option value="oldest" @selected(request('sort')=='oldest')>
                                    قدیمی‌ترین
                                </option>

                            </select>

                            <i data-lucide="chevron-down"
                               class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none"></i>

                        </div>

                    </form>

                    <!-- Counter -->

                    <div
                        class="flex items-center justify-center gap-2 h-12 px-5 rounded-2xl bg-[#ebc9a270] text-[#0f4c3a] font-bold whitespace-nowrap">

                        <i data-lucide="file-text" class="w-5 h-5"></i>

                        <span>

                            {{ $faqs->total() }} سوال

                        </span>

                    </div>

                </div>

            </div>

        </section>
    <!-- ./Toolbar -->

    <!-- FAQ List -->
        <section class="px-8 pb-8">

            <div class="space-y-5">

                @forelse($faqs as $faq)

                    <article class="bg-white border border-[#ebc9a270] rounded-3xl p-6 hover:shadow-lg transition">

                        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">


                            <!-- FAQ Info -->

                            <div class="flex-1">


                                <div class="flex flex-wrap items-center gap-3 mb-4">


                                    <!-- Categories -->

                                    @foreach($faq->categories as $category)

                                        <span class="px-3 py-1 rounded-full bg-[#ebc9a270] text-[#0f4c3a] text-sm font-semibold">

                                            {{ $category->name }}

                                        </span>

                                    @endforeach



                                    <!-- Status -->

                                    @if($faq->status === 'published')

                                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm font-semibold">

                                            منتشر شده

                                        </span>

                                    @else

                                        <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-sm font-semibold">

                                            پیش‌نویس

                                        </span>

                                    @endif


                                </div>



                                <!-- Question -->

                                <h2 class="text-2xl font-bold text-[#0f4c3a] leading-9 mb-3">

                                    {{ $faq->question }}

                                </h2>



                                <!-- Date -->

                                <div class="flex items-center gap-2 text-gray-500 text-sm">

                                    <i data-lucide="calendar-days" class="w-4 h-4"></i>

                                    <span>

                                        {{ $faq->published_at?->format('d F Y') ?? $faq->created_at->format('d F Y') }}

                                    </span>

                                </div>


                            </div>



                            <!-- Actions -->

                            <div class="flex items-center gap-3">


                                <!-- Edit -->

                                <a href="{{ route('admin.faqs.edit', $faq->id) }}"
                                   class="w-12 h-12 flex items-center justify-center rounded-2xl bg-[#FAF8F4] border border-[#ebc9a270] text-[#0f4c3a] hover:bg-[#0f4c3a] hover:text-white transition">

                                    <i data-lucide="square-pen" class="w-5 h-5"></i>

                                </a>



                                <!-- Delete -->

                                <button
                                    type="button"
                                    onclick='openDeleteModal("{{ $faq->id }}", @json($faq->question))'
                                    class="w-12 h-12 flex items-center justify-center rounded-2xl bg-red-50 border border-red-200 text-red-600 hover:bg-red-600 hover:text-white transition">

                                    <i data-lucide="trash-2" class="w-5 h-5"></i>

                                </button>


                            </div>


                        </div>

                    </article>


                @empty

                    <div class="bg-white rounded-3xl border border-[#ebc9a270] p-8 text-center text-gray-500">

                        هنوز سوالی ثبت نشده است.

                    </div>

                @endforelse


            </div>

        </section>
        <!-- ./FAQ List -->

    <!-- Pagination -->
        <section class="px-8 pb-10">

            <div class="bg-white border border-[#ebc9a270] rounded-3xl p-5">

                <div class="flex flex-col lg:flex-row items-center justify-between gap-6">


                    <!-- Info -->

                    <div class="text-sm text-gray-500">

                        نمایش

                        <span class="font-bold text-[#0f4c3a]">
                            {{ $faqs->firstItem() ?? 0 }}
                        </span>

                        تا

                        <span class="font-bold text-[#0f4c3a]">
                            {{ $faqs->lastItem() ?? 0 }}
                        </span>

                        از

                        <span class="font-bold text-[#0f4c3a]">
                            {{ $faqs->total() }}
                        </span>

                        سوال

                    </div>



                    <!-- Pagination -->

                    <div class="flex items-center gap-2">


                        {{-- Previous Button --}}

                        @if ($faqs->onFirstPage())

                            <button
                                disabled
                                class="flex items-center justify-center w-11 h-11 rounded-2xl border border-[#ebc9a270] bg-gray-100 text-gray-400">

                                <i data-lucide="chevron-right" class="w-5 h-5"></i>

                            </button>

                        @else

                            <a href="{{ $faqs->previousPageUrl() }}"
                                class="flex items-center justify-center w-11 h-11 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] text-[#0f4c3a] hover:bg-[#0f4c3a] hover:text-white transition">

                                <i data-lucide="chevron-right" class="w-5 h-5"></i>

                            </a>

                        @endif




                        {{-- Page Numbers --}}

                        @foreach ($faqs->getUrlRange(1, $faqs->lastPage()) as $page => $url)


                            @if ($page == $faqs->currentPage())

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

                        @if ($faqs->hasMorePages())

                            <a href="{{ $faqs->nextPageUrl() }}"
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
                    حذف سوال
                </h3>

                <p class="mt-4 text-center text-gray-600 leading-8">

                    شما در حال حذف سوال

                    <br>

                    <span id="deleteFaqQuestion" class="font-bold text-[#0f4c3a]"></span>

                    <br>

                    هستید.

                </p>

                <p class="mt-3 text-center text-red-500 text-sm">
                    این عملیات قابل بازگشت نیست.
                </p>


                <div class="mt-8 flex gap-3">


                    <button
                        id="cancelDelete"
                        type="button"
                        class="flex-1 h-12 rounded-2xl border border-[#ebc9a270] hover:bg-gray-50 transition">

                        انصراف

                    </button>



                    <form id="deleteFaqForm"
                          method="POST"
                          action=""
                          class="flex-1">

                        @csrf

                        @method('DELETE')


                        <button
                            id="confirmDelete"
                            type="submit"
                            class="w-full h-12 rounded-2xl bg-red-600 text-white hover:bg-red-700 transition">

                            حذف سوال

                        </button>

                    </form>


                </div>


            </div>

        </div>
    <!-- ./DeleteModal -->
    <script>

        function openDeleteModal(id, question)
        {
            document.getElementById('deleteFaqQuestion').innerText = question;


            document.getElementById('deleteFaqForm').setAttribute(
                'action',
                '/admin/faqs/' + id
            );


            const modal = document.getElementById('deleteModal');

            modal.classList.remove('hidden');

            modal.classList.add('flex');
        }



        function closeDeleteModal()
        {
            const modal = document.getElementById('deleteModal');

            modal.classList.add('hidden');

            modal.classList.remove('flex');
        }



        document
            .getElementById('cancelDelete')
            .addEventListener('click', function () {

                closeDeleteModal();

            });


    </script>
@endsection