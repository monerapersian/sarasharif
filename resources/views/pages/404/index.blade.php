@extends('layouts.app')

@section('content')
	<!-- 404 -->
		<section class="min-h-screen bg-[#FAF8F4] flex items-center py-24 relative overflow-hidden">

		    <!-- Background Shapes -->
		    <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-[#ebc9a270] blur-3xl opacity-70"></div>

		    <div class="absolute -bottom-32 -left-32 w-80 h-80 rounded-full bg-[#0f4c3a]/5 blur-3xl"></div>

		    <div class="container mx-auto px-6 relative z-10">

		        <div class="max-w-3xl mx-auto text-center">

		            <!-- Illustration -->
		            <div class="w-44 h-44 mx-auto rounded-full bg-white border border-[#ebc9a270] shadow-lg flex items-center justify-center mb-10">

		                <i data-lucide="file-search"
		                   class="w-20 h-20 text-[#a67c52]"></i>

		            </div>

		            <!-- 404 -->
		            <h1 class="text-7xl md:text-8xl font-black text-[#0f4c3a]">

		                404

		            </h1>

		            <!-- Title -->
		            <h2 class="text-3xl font-black text-[#0f4c3a] mt-8">

		                صفحه مورد نظر پیدا نشد

		            </h2>

		            <!-- Description -->
		            <p class="text-lg text-gray-600 leading-9 mt-6">

		                ممکن است آدرس وارد شده اشتباه باشد یا صفحه حذف شده باشد.
		                از طریق دکمه‌های زیر به بخش‌های اصلی سایت برگردید.

		            </p>

		            <!-- Buttons -->
		            <div class="flex flex-wrap justify-center gap-4 mt-10">

		                <a href="/"
		                   class="inline-flex items-center gap-3 bg-[#0f4c3a] text-white px-8 py-4 rounded-2xl hover:bg-[#8b6743] transition">

		                    <i data-lucide="house"></i>

		                    صفحه اصلی

		                </a>

		                <a href="/articles"
		                   class="inline-flex items-center gap-3 border border-[#ebc9a270] bg-white text-[#0f4c3a] px-8 py-4 rounded-2xl hover:bg-[#a67c52] hover:text-white hover:border-[#a67c52] transition">

		                    <i data-lucide="book-open"></i>

		                    مقالات

		                </a>

		            </div>

		            <!-- Search -->
		            <div class="mt-14">

		                <div class="relative max-w-xl mx-auto">

		                    <i data-lucide="search"
		                       class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400"></i>

		                    <input
		                        type="text"
		                        placeholder="جستجو در مقالات..."

		                        class="w-full h-16 rounded-2xl bg-white border border-[#ebc9a270] pr-14 pl-5 outline-none focus:border-[#0f4c3a]">

		                </div>

		            </div>

		        </div>

		    </div>

		</section>
	<!-- ./404 -->

@endsection