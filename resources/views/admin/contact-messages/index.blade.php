@extends('layouts.admin')

@section('title', 'درخواست مشاوره')

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

                        <span class="text-[#0f4c3a] font-semibold">

                            درخواست های مشاوره

                        </span>

                    </nav>

                    <!-- Heading -->

                    <div class="flex items-center gap-3">

                        <h1 class="text-4xl font-black text-[#0f4c3a]">

                            پیام‌های تماس

                        </h1>

                        <span class="px-3 py-1 rounded-full bg-[#ebc9a270] text-[#0f4c3a] text-sm font-bold">

                            {{ $messages->total() }} پیام

                        </span>

                    </div>

                    <p class="mt-3 text-gray-500">

                        مدیریت و بررسی پیام‌های ارسال شده از فرم تماس وب‌سایت

                    </p>

                </div>

                <!-- Action -->

                <div>

                    <div
                        class="inline-flex items-center gap-3 rounded-2xl bg-[#FAF8F4] border border-[#ebc9a270] text-[#0f4c3a] px-6 py-4 font-semibold">

                        <i data-lucide="mail" class="w-5 h-5"></i>

                        <span>

                            {{ $messages->where('is_read', false)->count() }} پیام خوانده‌نشده

                        </span>

                    </div>

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
                    action="{{ route('admin.contact-messages.index') }}">

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
                                placeholder="جستجو بر اساس نام، تلفن، ایمیل یا موضوع..."
                                class="w-full h-12 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] pr-12 pl-4 outline-none focus:border-[#0f4c3a] transition">

                        </div>

                        <!-- Status -->

                        <div class="relative">

                            <i
                                data-lucide="mail-open"
                                class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none"></i>

                            <select
                                name="status"
                                onchange="document.getElementById('filterForm').submit()"
                                class="appearance-none h-12 w-full xl:w-56 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] pr-12 pl-10 outline-none focus:border-[#0f4c3a] transition">

                                <option value="">همه پیام‌ها</option>

                                <option
                                    value="unread"
                                    {{ request('status') == 'unread' ? 'selected' : '' }}>

                                    خوانده نشده

                                </option>

                                <option
                                    value="read"
                                    {{ request('status') == 'read' ? 'selected' : '' }}>

                                    خوانده شده

                                </option>

                            </select>

                            <i
                                data-lucide="chevron-down"
                                class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none"></i>

                        </div>

                        <!-- Counter -->

                        <div
                            class="flex items-center justify-center gap-2 h-12 px-5 rounded-2xl bg-[#ebc9a270] text-[#0f4c3a] font-bold whitespace-nowrap">

                            <i data-lucide="mail" class="w-5 h-5"></i>

                            <span>

                                {{ $messages->total() }} پیام

                            </span>

                        </div>

                    </div>

                </form>

            </div>

        </section>
    <!-- ./Toolbar -->

    <!-- MessagesList -->
        <section class="px-8 pb-8">

            <div class="space-y-5">

                @forelse($messages as $message)

                    <article class="bg-white border border-[#ebc9a270] rounded-3xl p-6 hover:shadow-lg transition">

                        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

                            <!-- Message Info -->

                            <div class="flex-1">

                                <div class="flex flex-wrap items-center gap-3 mb-4">

                                    @if($message->is_read)

                                        <span class="message-status-badge px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm font-semibold">

                                            خوانده شده

                                        </span>

                                    @else

                                        <span class="message-status-badge px-3 py-1 rounded-full bg-red-100 text-red-700 text-sm font-semibold">

                                            خوانده نشده

                                        </span>

                                    @endif

                                    @if($message->subject)

                                        <span class="px-3 py-1 rounded-full bg-[#ebc9a270] text-[#0f4c3a] text-sm font-semibold">

                                            {{ $message->subject }}

                                        </span>

                                    @endif

                                </div>

                                <h2 class="text-2xl font-bold text-[#0f4c3a] leading-9 mb-4">

                                    {{ $message->name }}

                                </h2>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-sm text-gray-600">

                                    <div class="flex items-center gap-2">

                                        <i data-lucide="mail" class="w-4 h-4"></i>

                                        <span>

                                            {{ $message->email ?: 'ایمیل ثبت نشده' }}

                                        </span>

                                    </div>

                                    <div class="flex items-center gap-2">

                                        <i data-lucide="phone" class="w-4 h-4"></i>

                                        <span>

                                            {{ $message->phone }}

                                        </span>

                                    </div>

                                    <div class="flex items-center gap-2 md:col-span-2">

                                        <i data-lucide="calendar-days" class="w-4 h-4"></i>

                                        <span>

                                            {{ jalali($message->created_at, '%Y/%m/%d H:i') }}

                                        </span>

                                    </div>

                                </div>

                                <p class="mt-5 text-gray-500 leading-8">

                                    {{ Str::limit($message->message, 120, '...') }}

                                </p>

                            </div>

                            <!-- Actions -->

                            <div class="flex items-center gap-3">

                                <button
                                    type="button"
                                    class="view-message-btn w-12 h-12 flex items-center justify-center rounded-2xl bg-[#FAF8F4] border border-[#ebc9a270] text-[#0f4c3a] hover:bg-[#0f4c3a] hover:text-white transition"
                                    title="مشاهده پیام"

                                    data-id="{{ $message->id }}"
                                    data-read="{{ $message->is_read ? 1 : 0 }}"

                                    data-name="{{ $message->name }}"
                                    data-email="{{ $message->email ?: 'ایمیل ثبت نشده' }}"
                                    data-phone="{{ $message->phone }}"
                                    data-subject="{{ $message->subject ?: 'بدون موضوع' }}"
                                    data-date="{{ jalali($message->created_at, '%Y/%m/%d H:i') }}"
                                    data-message="{{ e($message->message) }}"
                                    data-status="{{ $message->is_read ? 'خوانده شده' : 'خوانده نشده' }}">

                                    <i data-lucide="eye" class="w-5 h-5"></i>

                                </button>

                                <form action="{{ route('admin.contact-messages.destroy', $message) }}"
                                      method="POST"
                                      class="delete-message-form">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="button"
                                        class="delete-message-btn w-12 h-12 flex items-center justify-center rounded-2xl bg-red-50 border border-red-200 text-red-600 hover:bg-red-600 hover:text-white transition"
                                        data-title="{{ $message->name }}"
                                        title="حذف پیام">

                                        <i data-lucide="trash-2" class="w-5 h-5"></i>

                                    </button>

                                </form>

                            </div>

                        </div>

                    </article>

                @empty

                    <div class="bg-white border border-[#ebc9a270] rounded-3xl p-10 text-center text-gray-500">

                        هنوز هیچ پیام تماسی ثبت نشده است.

                    </div>

                @endforelse

            </div>

        </section>
    <!-- ./MessagesList -->

    <!-- Pagination -->
        <section class="px-8 pb-10">

            <div class="bg-white border border-[#ebc9a270] rounded-3xl p-5">

                <div class="flex flex-col lg:flex-row items-center justify-between gap-6">

                    <!-- Info -->

                    <div class="text-sm text-gray-500">

                        نمایش

                        <span class="font-bold text-[#0f4c3a]">
                            {{ $messages->firstItem() ?? 0 }}
                        </span>

                        تا

                        <span class="font-bold text-[#0f4c3a]">
                            {{ $messages->lastItem() ?? 0 }}
                        </span>

                        از

                        <span class="font-bold text-[#0f4c3a]">
                            {{ $messages->total() }}
                        </span>

                        پیام

                    </div>

                    <!-- Pagination -->

                    <div class="flex items-center gap-2">

                        {{-- Previous Button --}}

                        @if ($messages->onFirstPage())

                            <button
                                disabled
                                class="flex items-center justify-center w-11 h-11 rounded-2xl border border-[#ebc9a270] bg-gray-100 text-gray-400">

                                <i data-lucide="chevron-right" class="w-5 h-5"></i>

                            </button>

                        @else

                            <a href="{{ $messages->previousPageUrl() }}"
                                class="flex items-center justify-center w-11 h-11 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] text-[#0f4c3a] hover:bg-[#0f4c3a] hover:text-white transition">

                                <i data-lucide="chevron-right" class="w-5 h-5"></i>

                            </a>

                        @endif



                        {{-- Page Numbers --}}

                        @foreach ($messages->getUrlRange(1, $messages->lastPage()) as $page => $url)

                            @if ($page == $messages->currentPage())

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

                        @if ($messages->hasMorePages())

                            <a href="{{ $messages->nextPageUrl() }}"
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
        <div id="deleteModal"
            class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm">

            <div class="w-full max-w-md mx-4 rounded-3xl bg-white p-8 shadow-2xl">

                <div class="flex justify-center mb-5">

                    <div class="w-16 h-16 rounded-full bg-red-100 flex items-center justify-center">

                        <i data-lucide="triangle-alert" class="w-8 h-8 text-red-600"></i>

                    </div>

                </div>

                <h3 class="text-2xl font-bold text-center text-[#0f4c3a]">

                    حذف پیام

                </h3>

                <p class="mt-4 text-center text-gray-600 leading-8">

                    شما در حال حذف پیام

                    <br>

                    <span id="deleteMessageTitle" class="font-bold text-[#0f4c3a]"></span>

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

                        حذف پیام

                    </button>

                </div>

            </div>

        </div>
    <!-- ./DeleteModal -->

    <!-- ViewMessageModal -->
        <div
            id="viewMessageModal"
            class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/50 backdrop-blur-sm">

            <div class="w-full max-w-3xl rounded-3xl bg-white shadow-2xl overflow-hidden max-h-[90vh] flex flex-col">

                <!-- Header -->

                <div class="flex items-center justify-between px-8 py-6 bg-[#0f4c3a] text-white">

                    <div class="flex items-center gap-3">

                        <i data-lucide="mail-open" class="w-6 h-6"></i>

                        <h3 class="text-2xl font-bold">

                            مشاهده پیام

                        </h3>

                    </div>

                    <button
                        id="closeViewMessage"
                        class="w-10 h-10 rounded-xl hover:bg-white/10 flex items-center justify-center transition">

                        <i data-lucide="x" class="w-6 h-6"></i>

                    </button>

                </div>

                <!-- Body -->

                <div class="p-8 space-y-8 flex-1 overflow-hidden">

                    <!-- اطلاعات -->

                    <div class="grid md:grid-cols-2 gap-5">

                        <div>

                            <p class="text-sm text-gray-500 mb-1">

                                نام فرستنده

                            </p>

                            <p id="viewName"
                               class="font-bold text-lg text-[#0f4c3a]"></p>

                        </div>

                        <div>

                            <p class="text-sm text-gray-500 mb-1">

                                وضعیت

                            </p>

                            <p id="viewStatus"
                               class="font-bold"></p>

                        </div>

                        <div>

                            <p class="text-sm text-gray-500 mb-1">

                                ایمیل

                            </p>

                            <p id="viewEmail"
                               class="text-gray-700 break-all"></p>

                        </div>

                        <div>

                            <p class="text-sm text-gray-500 mb-1">

                                تلفن

                            </p>

                            <p id="viewPhone"
                               class="text-gray-700"></p>

                        </div>

                        <div class="md:col-span-2">

                            <p class="text-sm text-gray-500 mb-1">

                                موضوع

                            </p>

                            <p id="viewSubject"
                               class="font-semibold text-[#0f4c3a]"></p>

                        </div>

                        <div class="md:col-span-2">

                            <p class="text-sm text-gray-500 mb-1">

                                تاریخ ارسال

                            </p>

                            <p id="viewDate"
                               class="text-gray-700"></p>

                        </div>

                    </div>

                    <!-- متن پیام -->

                    <div>

                        <p class="font-bold text-[#0f4c3a] mb-3">

                            متن پیام

                        </p>

                        <div
                            id="viewMessage"
                            class="rounded-2xl bg-[#FAF8F4] border border-[#ebc9a270] p-6 leading-9 text-gray-700 whitespace-pre-wrap h-32 overflow-y-auto">
                        </div>

                    </div>

                </div>

                <!-- Footer -->

                <div class="px-8 py-6 border-t border-[#ebc9a270] flex justify-end">

                    <button
                        id="closeViewMessageBottom"
                        class="px-6 py-3 rounded-2xl bg-[#0f4c3a] text-white hover:bg-[#0b3d2f] transition">

                        بستن

                    </button>

                </div>

            </div>

        </div>
    <!-- ./ViewMessageModal -->

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            /*
            |--------------------------------------------------------------------------
            | Delete Modal
            |--------------------------------------------------------------------------
            */

            const deleteModal = document.getElementById('deleteModal');
            const deleteTitle = document.getElementById('deleteMessageTitle');
            const confirmDeleteBtn = document.getElementById('confirmDelete');
            const cancelDeleteBtn = document.getElementById('cancelDelete');

            let currentForm = null;

            document.querySelectorAll('.delete-message-btn').forEach(button => {

                button.addEventListener('click', () => {

                    currentForm = button.closest('form');

                    deleteTitle.textContent = `«${button.dataset.title}»`;

                    deleteModal.classList.remove('hidden');
                    deleteModal.classList.add('flex');

                    cancelDeleteBtn.focus();

                });

            });

            confirmDeleteBtn.addEventListener('click', () => {

                if (currentForm) {
                    currentForm.submit();
                }

            });

            cancelDeleteBtn.addEventListener('click', closeDeleteModal);

            deleteModal.addEventListener('click', e => {

                if (e.target === deleteModal) {
                    closeDeleteModal();
                }

            });

            function closeDeleteModal() {

                deleteModal.classList.remove('flex');
                deleteModal.classList.add('hidden');

                currentForm = null;

            }


            /*
            |--------------------------------------------------------------------------
            | View Message Modal
            |--------------------------------------------------------------------------
            */

            const viewModal = document.getElementById('viewMessageModal');

            const closeViewTop = document.getElementById('closeViewMessage');
            const closeViewBottom = document.getElementById('closeViewMessageBottom');

            const viewName = document.getElementById('viewName');
            const viewStatus = document.getElementById('viewStatus');
            const viewEmail = document.getElementById('viewEmail');
            const viewPhone = document.getElementById('viewPhone');
            const viewSubject = document.getElementById('viewSubject');
            const viewDate = document.getElementById('viewDate');
            const viewMessage = document.getElementById('viewMessage');

            document.querySelectorAll('.view-message-btn').forEach(button => {

                button.addEventListener('click', () => {

                    viewName.textContent = button.dataset.name;
                    viewEmail.textContent = button.dataset.email;
                    viewPhone.textContent = button.dataset.phone;
                    viewSubject.textContent = button.dataset.subject;
                    viewDate.textContent = button.dataset.date;
                    viewMessage.textContent = button.dataset.message;

                    viewStatus.textContent = button.dataset.status;

                    if (button.dataset.status === 'خوانده شده') {

                        viewStatus.className = 'font-bold text-green-600';

                    } else {

                        viewStatus.className = 'font-bold text-red-600';

                    }

                    viewModal.classList.remove('hidden');
                    viewModal.classList.add('flex');

                    /*
                    |--------------------------------------------------------------------------
                    | Mark As Read
                    |--------------------------------------------------------------------------
                    */

                    if (button.dataset.read === '0') {

                        fetch(`/admin/contact-messages/${button.dataset.id}/read`, {

                            method: 'PATCH',

                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            }

                        })
                        .then(response => {

                            if (!response.ok) {
                                throw new Error();
                            }

                            return response.json();

                        })
                        .then(() => {

                            button.dataset.read = '1';
                            button.dataset.status = 'خوانده شده';

                            viewStatus.textContent = 'خوانده شده';
                            viewStatus.className = 'font-bold text-green-600';

                            const article = button.closest('article');

                            const badge = article.querySelector('.message-status-badge');

                            if (badge) {

                                badge.textContent = 'خوانده شده';

                                badge.className =
                                    'message-status-badge px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm font-semibold';

                            }

                        })
                        .catch(error => {

                            console.error('Mark As Read Error:', error);

                        });

                    }

                });

            });

            closeViewTop.addEventListener('click', closeViewModal);
            closeViewBottom.addEventListener('click', closeViewModal);

            viewModal.addEventListener('click', e => {

                if (e.target === viewModal) {
                    closeViewModal();
                }

            });

            function closeViewModal() {

                viewModal.classList.remove('flex');
                viewModal.classList.add('hidden');

            }


            /*
            |--------------------------------------------------------------------------
            | ESC Key
            |--------------------------------------------------------------------------
            */

            document.addEventListener('keydown', e => {

                if (e.key === 'Escape') {

                    closeDeleteModal();
                    closeViewModal();

                }

            });

        });
    </script>

@endsection