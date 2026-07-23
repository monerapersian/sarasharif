@extends('layouts.admin')

@section('title', 'درباره سارا')

@section('content')

    <form action="{{ route('admin.sara-information.update') }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <!-- PageHeader -->
            <section class="px-8 pt-8 pb-6">

                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

                    <!-- Title -->

                    <div>

                        <!-- Breadcrumb -->

                        <nav class="flex items-center gap-2 text-sm text-gray-500 mb-3">

                            <a href="#"
                               class="hover:text-[#0f4c3a] transition">

                                داشبورد

                            </a>

                            <i data-lucide="chevron-left" class="w-4 h-4"></i>

                            <span class="font-semibold text-[#0f4c3a]">

                                درباره سارا

                            </span>

                        </nav>

                        <!-- Heading -->

                        <div class="flex items-center gap-3 flex-wrap">

                            <h1 class="text-4xl font-black text-[#0f4c3a]">

                                درباره سارا

                            </h1>

                            <span class="px-3 py-1 rounded-full bg-[#ebc9a270] text-[#0f4c3a] text-sm font-semibold">

                                اطلاعات پروفایل

                            </span>

                        </div>

                        <p class="mt-3 text-gray-500 leading-7 max-w-2xl">

                            اطلاعات معرفی، تصویر، سوابق و راه‌های ارتباطی سارا شریف را از این بخش مدیریت کنید. تغییرات پس از ذخیره، در تمام بخش‌های سایت اعمال خواهد شد.

                        </p>

                    </div>

                    <!-- Save Shortcut -->

                    <div>

                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 px-6 h-12 rounded-2xl bg-[#0f4c3a] text-white hover:bg-[#14624a] transition shadow-lg shadow-[#0f4c3a]/20 cursor-pointer">

                            <i data-lucide="save" class="w-5 h-5"></i>

                            ذخیره تغییرات

                        </button>

                    </div>

                </div>

            </section>
        <!-- ./PageHeader -->

        <!-- ProfileCard -->
            <section class="px-8 pb-8">

                <div class="bg-white rounded-3xl border border-[#ebc9a270] shadow-sm p-8">

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                        <!-- ================================= -->
                        <!-- Profile Image -->
                        <!-- ================================= -->

                        <div class="flex flex-col items-center">

                            <!-- Current Image -->

                            <div class="w-52 h-52 rounded-3xl overflow-hidden border-4 border-[#ebc9a270] bg-[#FAF8F4]">

                                @if($saraInformation->profile_image)

                                    <img
                                        id="profile-preview"
                                        src="{{ asset('storage/' . $saraInformation->profile_image) }}"
                                        alt="سارا شریف"
                                        class="w-full h-full object-cover">

                                @else

                                    <div
                                        id="profile-preview"
                                        class="w-full h-full flex items-center justify-center bg-[#FAF8F4]">

                                        <i
                                            id="profile-placeholder-icon"
                                            data-lucide="image"
                                            class="w-16 h-16 text-gray-400">
                                        </i>

                                    </div>

                                @endif

                            </div>

                            <!-- Upload -->

                            <label
                                class="mt-6 inline-flex items-center gap-2 px-5 h-12 rounded-2xl bg-[#0f4c3a] text-white hover:bg-[#14624a] transition cursor-pointer shadow">

                                <i data-lucide="upload" class="w-5 h-5"></i>

                                تغییر تصویر

                                <input
                                    id="profile-image"
                                    type="file"
                                    name="profile_image"
                                    class="hidden"
                                    accept="image/*">

                            </label>

                            <p class="mt-3 text-xs text-gray-500 text-center">

                                فرمت‌های مجاز: JPG، PNG، WEBP

                            </p>

                        </div>

                        <!-- ================================= -->
                        <!-- Profile Information -->
                        <!-- ================================= -->

                        <div class="lg:col-span-2 space-y-6">

                            <!-- Goal -->

                            <div>

                                <label class="block font-bold text-[#0f4c3a] mb-3">

                                    هدف سارا

                                </label>

                                <input
                                    type="text"
                                    name="goals"
                                    value="{{ old('goals', $saraInformation->goals) }}"
                                    placeholder="مثلاً: ساده‌سازی مفاهیم مالی و مالیاتی"
                                    class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-5 outline-none focus:border-[#0f4c3a] transition">
                                @error('goals')
                                    <p class="mt-2 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <!-- Field -->

                            <div>

                                <label class="block font-bold text-[#0f4c3a] mb-3">

                                    حوزه فعالیت

                                </label>

                                <input
                                    type="text"
                                    name="activities"
                                    value="{{ old('activities', $saraInformation->activities) }}"
                                    placeholder="مثلاً: حسابداری، مالیات، بیمه"
                                    class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-5 outline-none focus:border-[#0f4c3a] transition">
                                @error('activities')
                                    <p class="mt-2 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <!-- Expertise -->

                            <div>

                                <label class="block font-bold text-[#0f4c3a] mb-3">

                                    تخصص

                                </label>

                                <input
                                    type="text"
                                    name="specializations"
                                    value="{{ old('specializations', $saraInformation->specializations) }}"
                                    placeholder="مثلاً: مشاور مالیاتی و تامین اجتماعی"
                                    class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-5 outline-none focus:border-[#0f4c3a] transition">
                                @error('specializations')
                                    <p class="mt-2 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                        </div>

                    </div>

                </div>

            </section>
        <!-- ./ProfileCard -->

        <!-- AboutForm -->
            <section class="px-8 pb-8">

                <div class="bg-white rounded-3xl border border-[#ebc9a270] shadow-sm p-8">

                    <!-- Section Title -->

                    <div class="mb-8">

                        <h2 class="text-2xl font-bold text-[#0f4c3a]">

                            معرفی

                        </h2>

                        <p class="mt-2 text-gray-500">

                            اطلاعات معرفی سارا شریف را ویرایش کنید.

                        </p>

                    </div>

                    <div class="space-y-8">

                        <!-- Title -->

                        <div>

                            <label class="block text-[#0f4c3a] font-bold mb-3">

                                عنوان معرفی

                            </label>

                            <input
                                type="text"
                                name="intro_title"
                                value="{{ old('intro_title', $saraInformation->intro_title) }}"
                                placeholder="مثلاً: درباره سارا شریف"
                                class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-5 outline-none focus:border-[#0f4c3a] transition">
                            @error('intro_title')
                                <p class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                        <!-- About -->

                        <div>

                            <label class="block text-[#0f4c3a] font-bold mb-3">

                                متن معرفی

                            </label>

                            <textarea
                                name="intro_text"
                                rows="10"
                                placeholder="متن کامل معرفی سارا شریف را وارد کنید..."
                                class="w-full rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] p-5 outline-none resize-none leading-9 focus:border-[#0f4c3a] transition">{{ old('intro_text', $saraInformation->intro_text) }}</textarea>
                            @error('intro_text')
                                <p class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                        <!-- Experience -->

                        <div>

                            <label class="block text-[#0f4c3a] font-bold mb-3">

                                سابقه کار

                            </label>

                            <div class="relative max-w-xs">

                                <input
                                    type="number"
                                    name="experience_years"
                                    value="{{ old('experience_years', $saraInformation->experience_years) }}"
                                    min="0"
                                    placeholder="0"
                                    class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] pl-16 pr-5 outline-none focus:border-[#0f4c3a] transition">
                                @error('experience_years')
                                    <p class="mt-2 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <span
                                    class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-500 font-medium">

                                    سال

                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </section>
        <!-- ./AboutForm -->

        <!-- ContactInformation -->
            <section class="px-8 pb-8">

                <div class="bg-white rounded-3xl border border-[#ebc9a270] shadow-sm p-8">

                    <!-- Section Header -->

                    <div class="mb-8">

                        <h2 class="text-2xl font-bold text-[#0f4c3a]">

                            اطلاعات تماس

                        </h2>

                        <p class="mt-2 text-gray-500">

                            راه‌های ارتباطی نمایش داده شده در سایت را مدیریت کنید.

                        </p>

                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                        <!-- Phone -->

                        <div>

                            <label class="flex items-center gap-2 mb-3 font-bold text-[#0f4c3a]">

                                <i data-lucide="phone" class="w-5 h-5 text-[#a67c52]"></i>

                                شماره تماس

                            </label>

                            <input
                                type="tel"
                                name="phone"
                                value="{{ old('phone', $saraInformation->phone) }}"
                                placeholder="09123456789"
                                class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-5 outline-none focus:border-[#0f4c3a] transition">
                            @error('phone')
                                <p class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                        <!-- Email -->

                        <div>

                            <label class="flex items-center gap-2 mb-3 font-bold text-[#0f4c3a]">

                                <i data-lucide="mail" class="w-5 h-5 text-[#a67c52]"></i>

                                ایمیل

                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email', $saraInformation->email) }}"
                                placeholder="info@sarasharif.ir"
                                class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-5 outline-none focus:border-[#0f4c3a] transition">
                            @error('email')
                                <p class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                        <!-- WhatsApp -->

                        <div>

                            <label class="flex items-center gap-2 mb-3 font-bold text-[#0f4c3a]">

                                <i data-lucide="message-circle" class="w-5 h-5 text-[#a67c52]"></i>

                                شماره واتساپ

                            </label>

                            <input
                                type="tel"
                                name="whatsapp"
                                value="{{ old('whatsapp', $saraInformation->whatsapp) }}"
                                placeholder="989123456789+"
                                class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-5 outline-none focus:border-[#0f4c3a] transition">
                            @error('whatsapp')
                                <p class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                        <!-- Instagram -->

                        <div>

                            <label class="flex items-center gap-2 mb-3 font-bold text-[#0f4c3a]">

                                <i data-lucide="instagram" class="w-5 h-5 text-[#a67c52]"></i>

                                آدرس اینستاگرام

                            </label>

                            <div class="flex items-center rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] overflow-hidden">

                                <span class="px-5 text-gray-500 whitespace-nowrap">

                                    instagram.com/

                                </span>

                                <input
                                    type="text"
                                    name="instagram_username"
                                    value="{{ old('instagram_username', $saraInformation->instagram_username) }}"
                                    placeholder="username"
                                    class="flex-1 h-14 bg-transparent outline-none px-4">
                                @error('instagram_username')
                                    <p class="mt-2 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                        </div>

                    </div>

                </div>

            </section>
        <!-- ./ContactInformation -->

        <!-- ActionButtons -->
            <section class="px-8 pb-10">

                <div class="bg-white rounded-3xl border border-[#ebc9a270] shadow-sm p-6">

                    <div class="flex flex-col sm:flex-row items-center justify-between gap-5">

                        <!-- Info -->

                        <div class="flex items-center gap-3 text-gray-500">

                            <i data-lucide="info" class="w-5 h-5 text-[#a67c52]"></i>

                            <span class="text-sm">

                                پس از ذخیره، تغییرات در تمام بخش‌های سایت اعمال خواهد شد.

                            </span>

                        </div>

                        <!-- Save Button -->

                        <button
                            type="submit"
                            class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-8 h-12 rounded-2xl bg-[#0f4c3a] text-white font-semibold hover:bg-[#14624a] transition shadow-lg shadow-[#0f4c3a]/20 cursor-pointer sharif-bold">

                            <i data-lucide="save" class="w-5 h-5"></i>

                            ذخیره تغییرات

                        </button>

                    </div>

                </div>

            </section>
        <!-- ./ActionButtons -->
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const input = document.getElementById('profile-image');
            const preview = document.getElementById('profile-preview');

            if (!input || !preview) return;

            input.addEventListener('change', function (e) {

                const file = e.target.files[0];

                if (!file) return;

                const reader = new FileReader();

                reader.onload = function (event) {

                    if (preview.tagName.toLowerCase() === 'img') {

                        preview.src = event.target.result;

                    } else {

                        preview.innerHTML = '';

                        const img = document.createElement('img');

                        img.src = event.target.result;
                        img.className = 'w-full h-full object-cover';

                        preview.appendChild(img);
                    }

                };

                reader.readAsDataURL(file);

            });

        });
    </script>
@endsection