@extends('layouts.admin')

@section('title', 'داشبورد')

@section('content')

	<!-- Dashboard Header -->
		<section class="px-6 lg:px-10 py-8">

		    <!-- Breadcrumb -->
		    <nav class="flex items-center gap-2 text-sm text-gray-500 mb-6">

		        <a href="#" class="hover:text-[#0f4c3a] transition">
		            پنل مدیریت
		        </a>

		        <i data-lucide="chevron-left" class="w-4 h-4"></i>

		        <span class="text-[#0f4c3a] font-semibold">
		            داشبورد
		        </span>

		    </nav>

		    <!-- Header -->
		    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-8">

		        <!-- Left -->
		        <div>

		            <div class="flex flex-wrap items-center gap-4">

		                

		                <!-- Title -->

		                <div>

		                    <div class="flex flex-wrap items-center gap-3">
		                    	<!-- Icon -->

				                <div
				                    class="w-16 h-16 rounded-3xl bg-[#0f4c3a] text-white flex items-center justify-center shadow-lg shrink-0">

				                    <i data-lucide="layout-dashboard"
				                        class="w-8 h-8"></i>

				                </div>

		                        <h1
		                            class="text-3xl lg:text-4xl font-black text-[#0f4c3a]">

		                            داشبورد

		                        </h1>

		                        <!-- Status -->

		                        <span
		                            class="inline-flex items-center gap-2 bg-green-100 text-green-700 border border-green-200 px-4 py-2 rounded-full text-sm font-semibold">

		                            <span
		                                class="w-2.5 h-2.5 rounded-full bg-green-500 animate-pulse"></span>

		                            سایت آنلاین

		                        </span>

		                    </div>

		                    <p
		                        class="mt-3 text-gray-500 leading-8">

		                        خوش آمدید 👋

		                        مدیریت کامل وب‌سایت
		                        <span class="font-semibold text-[#0f4c3a]">

		                            سارا شریف

		                        </span>

		                        از این بخش انجام می‌شود.

		                    </p>

		                </div>

		            </div>

		        </div>

		        <!-- Right -->

		        <div
		            class="flex flex-col sm:flex-row gap-4">

		            <!-- Date -->

		            <div
		                class="bg-white border border-[#ebc9a270] rounded-2xl px-5 py-4 flex items-center gap-3 shadow-sm">

		                <div
		                    class="w-11 h-11 rounded-xl bg-[#FAF8F4] flex items-center justify-center">

		                    <i data-lucide="calendar-days"
		                        class="w-5 h-5 text-[#a67c52]"></i>

		                </div>

		                <div>

		                    <p class="text-xs text-gray-400">

		                        تاریخ امروز

		                    </p>

		                    <p
		                        class="text-sm font-semibold text-[#0f4c3a]">

		                        شنبه، ۲۰ تیر ۱۴۰۵

		                    </p>

		                </div>

		            </div>

		            <!-- Refresh -->

		            <button
		                class="group bg-[#0f4c3a] hover:bg-[#0c3d2f] text-white rounded-2xl px-7 py-4 flex items-center justify-center gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl cursor-pointer">

		                <i data-lucide="refresh-cw"
		                    class="w-5 h-5 transition-transform duration-500 group-hover:rotate-180"></i>

		                <span>

		                    بروزرسانی آمار

		                </span>

		            </button>

		        </div>

		    </div>

		</section>
	<!-- ./Dashboard Header -->


	<!-- QuickActions -->
		<section class="px-6 lg:px-10 mb-10">

		    <div class="bg-white rounded-3xl border border-[#ebc9a270] shadow-sm overflow-hidden">

		        <!-- Header -->

		        <div class="p-8 border-b border-[#ebc9a270]">

		            <h2 class="text-2xl font-bold text-[#0f4c3a]">

		                دسترسی سریع

		            </h2>

		            <p class="mt-2 text-gray-500">

		                پرکاربردترین بخش‌های مدیریت وب‌سایت

		            </p>

		        </div>

		        <!-- Actions -->

		        <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 p-8">

		            <!-- Action -->

		            <a href="#"
		               class="group rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:border-[#0f4c3a] hover:bg-white hover:shadow-lg">

		                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#0f4c3a] text-white transition group-hover:bg-[#a67c52]">

		                    <i data-lucide="square-pen" class="w-8 h-8"></i>

		                </div>

		                <h3 class="mt-5 font-bold text-[#0f4c3a]">

		                    مقالات

		                </h3>

		                <p class="mt-2 text-sm text-gray-500">

		                    مدیریت مقالات

		                </p>

		            </a>

		            <!-- Action -->

		            <a href="#"
		               class="group rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:border-[#0f4c3a] hover:bg-white hover:shadow-lg">

		                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#0f4c3a] text-white transition group-hover:bg-[#a67c52]">

		                    <i data-lucide="circle-help" class="w-8 h-8"></i>

		                </div>

		                <h3 class="mt-5 font-bold text-[#0f4c3a]">

		                    سوال متداول

		                </h3>

		                <p class="mt-2 text-sm text-gray-500">

		                    افزودن سوال جدید

		                </p>

		            </a>

		            <!-- Action -->

		            <a href="#"
		               class="group rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:border-[#0f4c3a] hover:bg-white hover:shadow-lg">

		                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#0f4c3a] text-white transition group-hover:bg-[#a67c52]">

		                    <i data-lucide="user-round" class="w-8 h-8"></i>

		                </div>

		                <h3 class="mt-5 font-bold text-[#0f4c3a]">

		                    درباره سارا

		                </h3>

		                <p class="mt-2 text-sm text-gray-500">

		                    ویرایش اطلاعات شخصی

		                </p>

		            </a>

		            <!-- Action -->

		            <a href="#"
		               class="group rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:border-[#0f4c3a] hover:bg-white hover:shadow-lg">

		                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#0f4c3a] text-white transition group-hover:bg-[#a67c52]">

		                    <i data-lucide="image" class="w-8 h-8"></i>

		                </div>

		                <h3 class="mt-5 font-bold text-[#0f4c3a]">

		                    تصاویر

		                </h3>

		                <p class="mt-2 text-sm text-gray-500">

		                    بارگذاری و حذف تصاویر

		                </p>

		            </a>

		            <!-- Action -->

		            <a href="#"
		               class="group rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:border-[#0f4c3a] hover:bg-white hover:shadow-lg">

		                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#0f4c3a] text-white transition group-hover:bg-[#a67c52]">

		                    <i data-lucide="phone-call" class="w-8 h-8"></i>

		                </div>

		                <h3 class="mt-5 font-bold text-[#0f4c3a]">

		                    اطلاعات تماس

		                </h3>

		                <p class="mt-2 text-sm text-gray-500">

		                    شماره، ایمیل و آدرس

		                </p>

		            </a>

		            <!-- Action -->

		            <a href="#"
		               class="group rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:border-[#0f4c3a] hover:bg-white hover:shadow-lg">

		                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#0f4c3a] text-white transition group-hover:bg-[#a67c52]">

		                    <i data-lucide="settings" class="w-8 h-8"></i>

		                </div>

		                <h3 class="mt-5 font-bold text-[#0f4c3a]">

		                    تنظیمات سایت

		                </h3>

		                <p class="mt-2 text-sm text-gray-500">

		                    مدیریت تنظیمات عمومی

		                </p>

		            </a>

		        </div>

		    </div>

		</section>
	<!-- ./QuickActions -->

	<!-- Website Analytics -->
		<section class="px-6 lg:px-10 mb-10">

		    <div class="bg-white rounded-3xl border border-[#ebc9a270] shadow-sm overflow-hidden">

		        <!-- Header -->
		        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 p-8 border-b border-[#ebc9a270]">

		            <div>

		                <h2 class="text-2xl font-bold text-[#0f4c3a]">

		                    آمار بازدید وب‌سایت

		                </h2>

		                <p class="mt-2 text-gray-500">

		                    بررسی روند بازدید کاربران از وب‌سایت سارا شریف

		                </p>

		            </div>

		            <div class="flex flex-wrap gap-2">

		                <button class="px-5 py-2 rounded-xl bg-[#0f4c3a] text-white">
		                    7 روز
		                </button>

		                <button class="px-5 py-2 rounded-xl border border-[#ebc9a270] hover:bg-[#FAF8F4] transition">
		                    30 روز
		                </button>

		                <button class="px-5 py-2 rounded-xl border border-[#ebc9a270] hover:bg-[#FAF8F4] transition">
		                    90 روز
		                </button>

		                <button class="px-5 py-2 rounded-xl border border-[#ebc9a270] hover:bg-[#FAF8F4] transition">
		                    1 سال
		                </button>

		            </div>

		        </div>

		        <!-- Content -->

		        <div class="grid lg:grid-cols-12">

		            <!-- Chart -->

		            <div class="lg:col-span-9 p-8 border-b lg:border-b-0 lg:border-l border-[#ebc9a270]">

		                <div id="VisitorsChart"
		                    class="h-[430px] rounded-2xl border-2 border-dashed border-[#ebc9a270] bg-[#FAF8F4] flex items-center justify-center">

		                    <div class="text-center">

		                        <i data-lucide="chart-column-big"
		                            class="w-16 h-16 mx-auto text-[#a67c52]"></i>

		                        <h4 class="mt-4 font-semibold text-[#0f4c3a]">

		                            نمودار بازدید

		                        </h4>

		                        <p class="mt-2 text-sm text-gray-500">

		                            ApexCharts در این قسمت قرار خواهد گرفت.

		                        </p>

		                    </div>

		                </div>

		            </div>

		            <!-- Live Stats -->

		            <div class="lg:col-span-3 p-8 bg-[#FCFBF8]">

		                <div class="space-y-5">

		                    <!-- Total -->

		                    <div class="rounded-2xl bg-white border border-[#ebc9a270] p-5">

		                        <div class="flex items-center justify-between">

		                            <span class="text-gray-500">

		                                کل بازدید

		                            </span>

		                            <i data-lucide="eye"
		                                class="w-5 h-5 text-[#a67c52]"></i>

		                        </div>

		                        <h3 class="mt-4 text-4xl font-black text-[#0f4c3a]">

		                            42,850

		                        </h3>

		                        <p class="mt-2 text-sm text-green-600">

		                            ▲ 18٪ رشد

		                        </p>

		                    </div>

		                    <!-- Visitors -->

		                    <div class="rounded-2xl bg-white border border-[#ebc9a270] p-5">

		                        <div class="flex items-center justify-between">

		                            <span class="text-gray-500">

		                                کاربران فعال

		                            </span>

		                            <i data-lucide="activity"
		                                class="w-5 h-5 text-[#a67c52]"></i>

		                        </div>

		                        <h3 class="mt-4 text-4xl font-black text-[#0f4c3a]">

		                            126

		                        </h3>

		                        <p class="mt-2 text-sm text-gray-500">

		                            در ۳۰ دقیقه اخیر

		                        </p>

		                    </div>

		                    <!-- Average -->

		                    <div class="rounded-2xl bg-white border border-[#ebc9a270] p-5">

		                        <div class="flex items-center justify-between">

		                            <span class="text-gray-500">

		                                میانگین روزانه

		                            </span>

		                            <i data-lucide="bar-chart-3"
		                                class="w-5 h-5 text-[#a67c52]"></i>

		                        </div>

		                        <h3 class="mt-4 text-4xl font-black text-[#0f4c3a]">

		                            1,380

		                        </h3>

		                        <p class="mt-2 text-sm text-gray-500">

		                            میانگین بازدید روزانه

		                        </p>

		                    </div>

		                </div>

		            </div>

		        </div>

		    </div>

		</section>
	<!-- ./Website Analytics -->

	<!-- Recent Activity -->
		<section class="px-6 lg:px-10 mb-10">

		    <div class="bg-white rounded-3xl border border-[#ebc9a270] shadow-sm overflow-hidden">

		        <!-- Header -->

		        <div class="flex items-center justify-between p-8 border-b border-[#ebc9a270]">

		            <div>

		                <h2 class="text-2xl font-bold text-[#0f4c3a]">

		                    فعالیت‌های اخیر

		                </h2>

		                <p class="mt-2 text-gray-500">

		                    آخرین تغییرات انجام شده 

		                </p>

		            </div>

		            <a href="#"
		               class="text-[#0f4c3a] hover:text-[#a67c52] transition font-semibold flex items-center gap-2">

		                مشاهده همه

		                <i data-lucide="arrow-left" class="w-5 h-5"></i>

		            </a>

		        </div>

		        <!-- Timeline -->

		        <div class="relative p-8">

		            <!-- Line -->

		            <div class="absolute right-[43px] top-10 bottom-10 w-px bg-[#ebc9a270]"></div>

		            <div class="space-y-10">

		                <!-- Item -->

		                <div class="relative flex gap-6">

		                    <div class="relative z-10 w-6 h-6 rounded-full bg-[#0f4c3a] border-4 border-white shadow"></div>

		                    <div class="flex-1">

		                        <div class="flex items-center gap-3 flex-wrap">

		                            <span class="font-bold text-[#0f4c3a]">

		                                مقاله جدید منتشر شد

		                            </span>

		                            <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full">

		                                مقاله

		                            </span>

		                        </div>

		                        <p class="mt-2 text-gray-600">

		                            مقاله
		                            <strong>راهنمای مالیات بر ارزش افزوده</strong>
		                            با موفقیت منتشر شد.

		                        </p>

		                        <p class="mt-2 text-sm text-gray-400">

		                            ۱۰ دقیقه پیش

		                        </p>

		                    </div>

		                </div>

		                <!-- Item -->

		                <div class="relative flex gap-6">

		                    <div class="relative z-10 w-6 h-6 rounded-full bg-[#a67c52] border-4 border-white shadow"></div>

		                    <div class="flex-1">

		                        <div class="flex items-center gap-3 flex-wrap">

		                            <span class="font-bold text-[#0f4c3a]">

		                                اطلاعات تماس بروزرسانی شد

		                            </span>

		                            <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full">

		                                تماس

		                            </span>

		                        </div>

		                        <p class="mt-2 text-gray-600">

		                            شماره تماس و آدرس ایمیل تغییر کردند.

		                        </p>

		                        <p class="mt-2 text-sm text-gray-400">

		                            ۱ ساعت پیش

		                        </p>

		                    </div>

		                </div>

		                <!-- Item -->

		                <div class="relative flex gap-6">

		                    <div class="relative z-10 w-6 h-6 rounded-full bg-blue-500 border-4 border-white shadow"></div>

		                    <div class="flex-1">

		                        <div class="flex items-center gap-3 flex-wrap">

		                            <span class="font-bold text-[#0f4c3a]">

		                                سوال متداول جدید

		                            </span>

		                            <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full">

		                                FAQ

		                            </span>

		                        </div>

		                        <p class="mt-2 text-gray-600">

		                            سوال
		                            <strong>مالیات مشاغل چگونه محاسبه می‌شود؟</strong>
		                            اضافه شد.

		                        </p>

		                        <p class="mt-2 text-sm text-gray-400">

		                            دیروز

		                        </p>

		                    </div>

		                </div>

		                <!-- Item -->

		                <div class="relative flex gap-6">

		                    <div class="relative z-10 w-6 h-6 rounded-full bg-pink-500 border-4 border-white shadow"></div>

		                    <div class="flex-1">

		                        <div class="flex items-center gap-3 flex-wrap">

		                            <span class="font-bold text-[#0f4c3a]">

		                                تصویر سارا شریف تغییر کرد

		                            </span>

		                            <span class="bg-pink-100 text-pink-700 text-xs px-3 py-1 rounded-full">

		                                رسانه

		                            </span>

		                        </div>

		                        <p class="mt-2 text-gray-600">

		                            تصویر جدید پروفایل بارگذاری شد.

		                        </p>

		                        <p class="mt-2 text-sm text-gray-400">

		                            ۲ روز پیش

		                        </p>

		                    </div>

		                </div>

		            </div>

		        </div>

		    </div>

		</section>
	<!-- ./Recent Activity -->


@endsection