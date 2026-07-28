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

		                    <p class="text-sm font-semibold text-[#0f4c3a]">

		                        {{ jalali(now(), '%A، %d %B %Y') }}

		                    </p>

		                </div>

		            </div>

		            <!-- Refresh -->
		            <button
					    type="button"
					    onclick="window.location.reload()"
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

		                <a href="{{ route('admin.dashboard', ['days' => 1]) }}"
		                    class="px-5 py-2 rounded-xl transition
		                    {{ ($days ?? 1) == 1
		                        ? 'bg-[#0f4c3a] text-white'
		                        : 'border border-[#ebc9a270] hover:bg-[#FAF8F4]' }}">
		                    امروز
		                </a>

		                <a href="{{ route('admin.dashboard', ['days' => 7]) }}"
		                    class="px-5 py-2 rounded-xl transition
		                    {{ ($days ?? 1) == 7
		                        ? 'bg-[#0f4c3a] text-white'
		                        : 'border border-[#ebc9a270] hover:bg-[#FAF8F4]' }}">
		                    ۷ روز
		                </a>

		                <a href="{{ route('admin.dashboard', ['days' => 30]) }}"
		                    class="px-5 py-2 rounded-xl transition
		                    {{ ($days ?? 1) == 30
		                        ? 'bg-[#0f4c3a] text-white'
		                        : 'border border-[#ebc9a270] hover:bg-[#FAF8F4]' }}">
		                    ۳۰ روز
		                </a>

		                <a href="{{ route('admin.dashboard', ['days' => 90]) }}"
		                    class="px-5 py-2 rounded-xl transition
		                    {{ ($days ?? 1) == 90
		                        ? 'bg-[#0f4c3a] text-white'
		                        : 'border border-[#ebc9a270] hover:bg-[#FAF8F4]' }}">
		                    ۹۰ روز
		                </a>

		            </div>

		        </div>


		        <!-- Content -->
		        <div class="grid lg:grid-cols-12">

		            <!-- Chart -->
		            <div class="lg:col-span-9 p-8 border-b lg:border-b-0 lg:border-l border-[#ebc9a270]">

		                <div id="VisitorsChart"
		                    class="h-[430px] rounded-2xl border-2 border-dashed border-[#ebc9a270] bg-[#FAF8F4] flex items-center justify-center">

		                    <!-- <div class="text-center">

		                        <i data-lucide="chart-column-big"
		                            class="w-16 h-16 mx-auto text-[#a67c52]"></i>

		                        <h4 class="mt-4 font-semibold text-[#0f4c3a]">
		                            نمودار بازدید
		                        </h4>

		                        <p class="mt-2 text-sm text-gray-500">
		                            نمودار در مرحله بعد به ApexCharts متصل خواهد شد.
		                        </p>

		                    </div> -->

		                </div>

		            </div>


		            <!-- Stats -->
		            <div class="lg:col-span-3 p-8 bg-[#FCFBF8]">

		                <div class="space-y-5">

		                    <!-- Total Website -->
		                    <div class="rounded-2xl bg-white border border-[#ebc9a270] p-5">

		                        <div class="flex items-center justify-between">

		                            <span class="text-gray-500">
		                                بازدید کل سایت
		                            </span>

		                            <i data-lucide="eye"
		                                class="w-5 h-5 text-[#a67c52]"></i>

		                        </div>

		                        <h3 class="mt-4 text-4xl font-black text-[#0f4c3a]">

		                            {{ number_format($totalVisits) }}

		                        </h3>

		                        <p class="mt-2 text-sm text-green-600">

		                            بازه {{ $days }} روز اخیر

		                        </p>

		                    </div>


		                    <!-- Articles -->
		                    <div class="rounded-2xl bg-white border border-[#ebc9a270] p-5">

		                        <div class="flex items-center justify-between">

		                            <span class="text-gray-500">
		                                بازدید مقالات
		                            </span>

		                            <i data-lucide="activity"
		                                class="w-5 h-5 text-[#a67c52]"></i>

		                        </div>

		                        <h3 class="mt-4 text-4xl font-black text-[#0f4c3a]">

		                            {{ number_format($blogVisits) }}

		                        </h3>

		                        <p class="mt-2 text-sm text-gray-500">

		                            در بازه انتخاب شده

		                        </p>

		                    </div>


		                    <!-- Calculator -->
		                    <div class="rounded-2xl bg-white border border-[#ebc9a270] p-5">

		                        <div class="flex items-center justify-between">

		                            <span class="text-gray-500">
		                                بازدید ماشین حساب
		                            </span>

		                            <i data-lucide="bar-chart-3"
		                                class="w-5 h-5 text-[#a67c52]"></i>

		                        </div>

		                        <h3 class="mt-4 text-4xl font-black text-[#0f4c3a]">

		                            {{ number_format($calculatorVisits) }}

		                        </h3>

		                        <p class="mt-2 text-sm text-gray-500">

		                            در بازه انتخاب شده

		                        </p>

		                    </div>

		                </div>

		            </div>

		        </div>

		    </div>

		</section>
	<!-- ./Website Analytics -->

				<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
			<script>

				document.addEventListener('DOMContentLoaded', function () {

				    const options = {

				        chart: {
				            type: 'area',
				            height: 430,
				            toolbar: {
				                show: false
				            },
				            zoom: {
				                enabled: false
				            }
				        },

				        series: [{
				            name: 'بازدید',
				            data: @json($chartValues)
				        }],

				        xaxis: {
				            categories: @json($chartLabels)
				        },

				        stroke: {
				            curve: 'smooth',
				            width: 3
				        },

				        dataLabels: {
				            enabled: false
				        },

				        fill: {
				            type: 'gradient',
				            gradient: {
				                opacityFrom: 0.45,
				                opacityTo: 0.05
				            }
				        },

				        grid: {
				            borderColor: '#ebc9a270'
				        },

				        yaxis: {
				            min: 0
				        },

				        colors: ['#0f4c3a']

				    };

				    new ApexCharts(
				        document.querySelector("#VisitorsChart"),
				        options
				    ).render();

				});

			</script>


@endsection