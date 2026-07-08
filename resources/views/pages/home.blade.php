@extends('layouts.app')

@section('title', 'سارا شریف')

@section('content')
    <!-- Hero -->
        <section class="relative min-h-screen flex items-center overflow-hidden pt-20 lg:pt-0">

            <!-- Background Shapes -->
            <div class="absolute top-20 right-0 w-96 h-96 bg-[#ebc9a270] rounded-full blur-3xl"></div>

            <div class="absolute bottom-0 left-0 w-80 h-80 bg-[#0f4c3a20] rounded-full blur-3xl"></div>

            <div class="container mx-auto px-6">

                <div class="grid lg:grid-cols-2 gap-16 items-center">

                    <!-- Content -->
                    <!-- Image -->
                    <div class="flex justify-center">

                        <div class="relative">

                            <!-- Decorative Border -->
                            <div
                                class="absolute inset-0 rounded-full border-[12px] border-[#a67c52] scale-110">
                            </div>

                            <!-- Photo Area -->
                            <div class="w-80 h-80 lg:w-[450px] lg:h-[450px] rounded-full bg-white shadow-2xl border-8 border-white overflow-hidden flex items-center justify-center">
                                <!-- <img src="{{ asset('img/hero.jpg') }}" alt="سارا شریف" class="w-full h-full object-cover"> -->
                                <!-- Replace With Image -->
                                <span class="text-[#a67c52] text-lg">
                                    تصویر سارا شریف
                                </span>

                            </div>

                        </div>

                    </div>
                    <div class="text-center lg:text-right">

                        <span class="inline-block px-4 py-2 rounded-full bg-[#ebc9a270] text-[#0f4c3a] font-medium mb-6">
                            مشاور مالی و مالیاتی
                        </span>

                        <h1 class="text-5xl lg:text-7xl font-black leading-tight text-[#0f4c3a]">
                            سارا شریف
                        </h1>

                        <h2 class="mt-5 text-xl lg:text-2xl text-[#a67c52] font-semibold">
                            حسابدار، کارشناس امور مالیاتی و تامین اجتماعی
                        </h2>

                        <p class="mt-8 text-gray-600 leading-8 max-w-xl mx-auto lg:mx-0">
                            ارائه خدمات تخصصی حسابداری، مشاوره مالیاتی، بیمه و
                            تامین اجتماعی برای شرکت‌ها، سازمان‌ها و کسب‌وکارهای
                            در حال رشد.
                        </p>

                        <div class="mt-10 flex flex-wrap justify-center lg:justify-start gap-4">

                            <a href="#" class="bg-[#0f4c3a] text-white px-8 py-4 rounded-2xl hover:bg-[#a67c52] transition-all duration-300">
                                مشاوره رایگان
                            </a>

                            <a href="#" class="border-2 border-[#0f4c3a] text-[#0f4c3a] px-8 py-4 rounded-2xl hover:bg-[#0f4c3a] hover:text-white transition-all duration-300">
                                مشاهده مقالات
                            </a>

                        </div>

                    </div>

                    

                </div>

            </div>

        </section>
    <!-- ./Hero -->

    <!-- Features -->
        <section class="py-24 bg-[#FAF8F4]">

            <div class="container mx-auto px-6">

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Feature 1 -->
                    <div
                        class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-[#ebc9a270] text-center flex flex-col items-center">

                        <div
                            class="w-16 h-16 rounded-2xl bg-[#ebc9a270] flex items-center justify-center mb-6 group-hover:scale-110 transition">

                            <i data-lucide="calculator"
                                class="w-8 h-8 text-[#0f4c3a]"></i>

                        </div>

                        <h3 class="text-xl font-bold text-[#0f4c3a] leading-9">
                            مسلط به فرمول های بهای تمام شده
                        </h3>

                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-[#ebc9a270] text-center flex flex-col items-center">

                        <div
                            class="w-16 h-16 rounded-2xl bg-[#ebc9a270] flex items-center justify-center mb-6 group-hover:scale-110 transition">

                            <i data-lucide="briefcase-business"
                                class="w-8 h-8 text-[#0f4c3a]"></i>

                        </div>

                        <h3 class="text-xl font-bold text-[#0f4c3a] leading-9">
                            بیش از ۱۰ سال سابقه فعالیت رسمی
                        </h3>

                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-[#ebc9a270] text-center flex flex-col items-center">

                        <div
                            class="w-16 h-16 rounded-2xl bg-[#ebc9a270] flex items-center justify-center mb-6 group-hover:scale-110 transition">

                            <i data-lucide="building-2"
                                class="w-8 h-8 text-[#0f4c3a]"></i>

                        </div>

                        <h3 class="text-xl font-bold text-[#0f4c3a] leading-9">
                            مسلط به اسقرار نرم افزارهای حسابداری
                        </h3>

                    </div>

                </div>

            </div>

        </section>
    <!-- ./Features -->

    <!-- Salary Calculator Banner -->
        <section class="py-12">

            <div class="container mx-auto px-6">

                <div class="relative overflow-hidden rounded-[32px] bg-[#0f4c3a] p-10 lg:p-14">

                    <!-- Background Shapes -->
                    <div class="absolute -top-16 -right-16 w-56 h-56 rounded-full bg-[#a67c52]/20"></div>

                    <div class="absolute -bottom-20 -left-20 w-72 h-72 rounded-full bg-[#a67c52]/20"></div>

                    <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8">

                        <!-- Content -->
                        <div class="text-center lg:text-right">

                            <div class="flex justify-center lg:justify-start mb-5">

                                <div class="w-16 h-16 rounded-full bg-white/10 backdrop-blur flex items-center justify-center">

                                    <i data-lucide="calculator"
                                       class="w-8 h-8 text-[#ebc9a2]"></i>

                                </div>

                            </div>

                            <h2 class="text-3xl lg:text-4xl font-black text-white leading-relaxed">
                                محاسبه آنلاین حقوق، بیمه،
                                مالیات و مزایا
                            </h2>

                            <p class="mt-4 text-[#ebc9a2] text-lg">
                                تنها در چند ثانیه حقوق و دستمزد کارکنان را به صورت دقیق محاسبه کنید.
                            </p>

                        </div>

                        <!-- Button -->
                        <div>

                            <a href="/calculator" class="inline-flex items-center gap-3 bg-[#104e2b] hover:bg-[#426752] text-white px-8 py-4 rounded-2xl text-lg font-bold transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-black/20" style="font-family: 'sharifBold';">

                                <i data-lucide="arrow-left"></i>

                                ورود به محاسبه‌گر

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    <!-- ./Salary Calculator Banner -->

    <!-- Blog Section -->
        <section class="py-24 bg-[#FAF8F4]">

            <div class="container mx-auto px-6">

                <!-- Header -->
                <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-14">

                    <div class="text-center md:text-right">

                        <span class="text-[#a67c52] font-semibold">
                            بیشتر بدانید
                        </span>

                        <h2 class="text-4xl font-black text-[#0f4c3a] mt-2">
                            آخرین مقالات حسابداری، مالیاتی و تامین اجتماعی
                        </h2>

                    </div>

                    <a href="#"
                       class="px-6 py-3 rounded-xl border-2 border-[#0f4c3a] text-[#0f4c3a] hover:bg-[#0f4c3a] hover:text-white transition">

                        مقاله‌های بیشتر

                    </a>

                </div>

                <!-- Articles -->
                <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">

                    <!-- Card -->
                    <article class="relative group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-[#ebc9a270]">

                        <div class="overflow-hidden">

                            <img src="img/maliat.jpg"
                                 alt=""
                                 class="w-full h-56 object-cover group-hover:scale-105 transition duration-500">

                        </div>

                        <div class="p-6">

                            <h3 class="text-xl font-bold text-[#0f4c3a] leading-8 mb-4">
                                راهنمای کامل ارسال اظهارنامه مالیاتی در سال جدید
                            </h3>

                            <p class="text-gray-600 leading-7 text-sm mb-6">
                                آشنایی با مراحل ثبت و ارسال اظهارنامه مالیاتی،
                                مدارک مورد نیاز و نکات مهمی که باید قبل از ارسال
                                بدانید...
                            </p>

                            <a href="#"
                               class="block w-full text-center bg-[#0f4c3a] text-white py-3 rounded-xl hover:bg-[#a67c52] transition">

                                مطالعه مقاله

                            </a>

                        </div>

                        <span class="absolute top-4 right-4 bg-[#a67c52] text-white px-3 py-1 rounded-full text-xs">
                            مالیات
                        </span>

                    </article>

                    <!-- Card -->
                    <article class="relative group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-[#ebc9a270]">

                        <div class="overflow-hidden">

                            <img src="img/tamin-blog.webp"
                                 alt=""
                                 class="w-full h-56 object-cover group-hover:scale-105 transition duration-500">

                        </div>

                        <div class="p-6">

                            <h3 class="text-xl font-bold text-[#0f4c3a] leading-8 mb-4">
                                قوانین جدید بیمه تامین اجتماعی برای کارفرمایان
                            </h3>

                            <p class="text-gray-600 leading-7 text-sm mb-6">
                                بررسی آخرین تغییرات بیمه تامین اجتماعی و
                                تاثیر آن بر شرکت‌ها، کارفرمایان و کارکنان...
                            </p>

                            <a href="#"
                               class="block w-full text-center bg-[#0f4c3a] text-white py-3 rounded-xl hover:bg-[#a67c52] transition">

                                مطالعه مقاله

                            </a>

                        </div>
                        <span class="absolute top-4 right-4 bg-[#a67c52] text-white px-3 py-1 rounded-full text-xs">
                            تامین اجتماعی
                        </span>

                    </article>

                    <!-- Card -->
                    <article class="relative group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-[#ebc9a270]">

                        <div class="overflow-hidden">

                            <img src="img/cal.jpg"
                                 alt=""
                                 class="w-full h-56 object-cover group-hover:scale-105 transition duration-500">

                        </div>

                        <div class="p-6">

                            <h3 class="text-xl font-bold text-[#0f4c3a] leading-8 mb-4">
                                نکات کلیدی حسابداری برای کسب‌وکارهای نوپا
                            </h3>

                            <p class="text-gray-600 leading-7 text-sm mb-6">
                                مهم‌ترین اصول حسابداری و مدیریت مالی که
                                استارتاپ‌ها و کسب‌وکارهای تازه‌تأسیس باید بدانند...
                            </p>

                            <a href="#"
                               class="block w-full text-center bg-[#0f4c3a] text-white py-3 rounded-xl hover:bg-[#a67c52] transition">

                                مطالعه مقاله

                            </a>

                        </div>
                        <span class="absolute top-4 right-4 bg-[#a67c52] text-white px-3 py-1 rounded-full text-xs">
                            حسابداری
                        </span>

                    </article>

                    <!-- Card -->
                    <article class="relative group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-[#ebc9a270]">

                        <div class="overflow-hidden">

                            <img src="img/hidden-maliat.jpg"
                                 alt=""
                                 class="w-full h-56 object-cover group-hover:scale-105 transition duration-500">

                        </div>

                        <div class="p-6">

                            <h3 class="text-xl font-bold text-[#0f4c3a] leading-8 mb-4">
                                نحوه محاسبه حقوق و دستمزد کارکنان
                            </h3>

                            <p class="text-gray-600 leading-7 text-sm mb-6">
                                آموزش محاسبه حقوق، اضافه‌کاری، مالیات،
                                بیمه و سایر مزایای کارکنان به زبان ساده...
                            </p>

                            <a href="#"
                               class="block w-full text-center bg-[#0f4c3a] text-white py-3 rounded-xl hover:bg-[#a67c52] transition">

                                مطالعه مقاله

                            </a>

                        </div>
                        <span class="absolute top-4 right-4 bg-[#a67c52] text-white px-3 py-1 rounded-full text-xs">
                            مالیات
                        </span>

                    </article>

                </div>

            </div>

        </section>
    <!-- ./Blog Section -->
@endsection