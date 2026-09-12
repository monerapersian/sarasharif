
	<!-- Calculator Form -->
		<section class="py-16 bg-slate-50">

		    <div class="container mx-auto px-6">

		        <div class="max-w-6xl mx-auto">

		            <!-- Card -->
		            <div class="bg-white rounded-[32px] shadow-xl border border-slate-200 overflow-hidden">

		                <!-- Header -->
		                <div class="bg-[#0f4c3a] px-8 py-6">

		                    <div class="flex items-center gap-4">

		                        <div class="w-14 h-14 rounded-2xl bg-[#a67c52]/20 flex items-center justify-center">

		                            <i data-lucide="notepad-text" class="w-7 h-7 text-[#d8c2a7]"></i>

		                        </div>

		                        <div>

		                            <h2 class="text-2xl font-bold text-white">
		                                اطلاعات مورد نیاز
		                            </h2>

		                            <p class="text-white/70 mt-1">
		                                لطفاً اطلاعات زیر را تکمیل کنید تا حقوق شما محاسبه شود.
		                            </p>

		                        </div>

		                    </div>

		                </div>

		                <!-- Body -->
		                <div class="p-8 lg:p-10">

		                    <div class="grid lg:grid-cols-2 gap-8">

		                        <!-- تاریخ شروع همکاری -->
		                        <div>

		                            <label class="mb-3 flex items-center gap-2 font-semibold text-slate-700">
		                                <i data-lucide="calendar-check-2" class="w-8 h-8 text-[#d8c2a7]"></i>
		                                تاریخ شروع همکاری
		                            </label>

		                            <div class="grid grid-cols-2 gap-4">

		                                <select
		                                    id="startMonth"
		                                    class="w-full rounded-2xl border border-slate-300 px-5 py-3 focus:border-[#0f4c3a] focus:ring-4 focus:ring-[#0f4c3a]/10 outline-none transition">

		                                    <option value="فروردین">فروردین</option>
		                                    <option value="اردیبهشت">اردیبهشت</option>
		                                    <option value="خرداد">خرداد</option>
		                                    <option value="تیر">تیر</option>
		                                    <option value="مرداد">مرداد</option>
		                                    <option value="شهریور">شهریور</option>
		                                    <option value="مهر">مهر</option>
		                                    <option value="آبان">آبان</option>
		                                    <option value="آذر">آذر</option>
		                                    <option value="دی">دی</option>
		                                    <option value="بهمن">بهمن</option>
		                                    <option value="اسفند">اسفند</option>

		                                </select>

		                                <select
		                                    id="startYear"
		                                    class="w-full rounded-2xl border border-slate-300 px-5 py-3 focus:border-[#0f4c3a] focus:ring-4 focus:ring-[#0f4c3a]/10 outline-none transition">

		                                    <option value="1405">1405</option>
		                                    <option value="1404">1404</option>
		                                    <option value="1403">1403</option>
		                                    <option value="1402">1402</option>
		                                    <option value="1401">1401</option>
		                                    <option value="1400">1400</option>
		                                    <option value="1399">1399</option>
		                                    <option value="1398">1398</option>
		                                    <option value="1397">1397</option>
		                                    <option value="1396">1396</option>
		                                    <option value="1395">1395</option>
		                                    <option value="1394">1394</option>
		                                    <option value="1393">1393</option>
		                                    <option value="1392">1392</option>
		                                    <option value="1391">1391</option>
		                                    <option value="1390">1390</option>
		                                    <option value="1389">1389</option>
		                                    <option value="1388">1388</option>
		                                    <option value="1387">1387</option>
		                                    <option value="1386">1386</option>
		                                    <option value="1385">1385</option>

		                                </select>

		                            </div>

		                        </div>

		                        <!-- وضعیت تاهل -->
		                        <div>

		                            <label class="mb-3 flex items-center gap-2 font-semibold text-slate-700">
		                                <i data-lucide="heart-handshake" class="w-8 h-8 text-[#d8c2a7]"></i>
		                                وضعیت تاهل
		                            </label>

		                            <select
		                                id="maritalStatus"
		                                class="w-full rounded-2xl border border-slate-300 px-5 py-3 focus:border-[#0f4c3a] focus:ring-4 focus:ring-[#0f4c3a]/10 outline-none transition">

		                                <option value="مجرد">مجرد</option>
		                                <option value="متاهل">متاهل</option>

		                            </select>

		                        </div>

		                        <!-- تعداد فرزند -->
		                        <div>

		                            <label class="mb-3 flex items-center gap-2 font-semibold text-slate-700">
		                                <i data-lucide="baby" class="w-8 h-8 text-[#d8c2a7]"></i>
		                                تعداد فرزندان
		                            </label>

		                            <input
		                                id="childrenCount"
		                                type="number"
		                                value="0"
		                                min="0"
		                                class="w-full rounded-2xl border border-slate-300 px-5 py-3 focus:border-[#0f4c3a] focus:ring-4 focus:ring-[#0f4c3a]/10 outline-none transition">

		                        </div>

		                        <!-- ماه محاسبه -->
		                        <div>

		                            <label class="mb-3 flex items-center gap-2 font-semibold text-slate-700">
		                                <i data-lucide="calendar-1" class="w-8 h-8 text-[#d8c2a7]"></i>
		                                ماه مورد محاسبه
		                            </label>

		                            <select
		                                id="calculationMonth"
		                                class="w-full rounded-2xl border border-slate-300 px-5 py-3 focus:border-[#0f4c3a] focus:ring-4 focus:ring-[#0f4c3a]/10 outline-none transition">

		                                <option value="فروردین">فروردین</option>
		                                <option value="اردیبهشت">اردیبهشت</option>
		                                <option value="خرداد">خرداد</option>
		                                <option value="تیر">تیر</option>
		                                <option value="مرداد">مرداد</option>
		                                <option value="شهریور">شهریور</option>
		                                <option value="مهر">مهر</option>
		                                <option value="آبان">آبان</option>
		                                <option value="آذر">آذر</option>
		                                <option value="دی">دی</option>
		                                <option value="بهمن">بهمن</option>
		                                <option value="اسفند">اسفند</option>

		                            </select>

		                        </div>

		                        <!-- پایه حقوق -->
		                        <div class="lg:col-span-2">

		                            <label class="mb-3 flex items-center gap-2 font-semibold text-slate-700">
		                                <i data-lucide="banknote-check" class="w-8 h-8 text-[#d8c2a7]"></i>
		                                پایه حقوق روزانه
		                            </label>

		                            <input
		                                id="dailySalary"
		                                type="number"
		                                value="5541850"
		                                min="5541850"
		                                class="w-full rounded-2xl border border-slate-300 px-5 py-3 focus:border-[#0f4c3a] focus:ring-4 focus:ring-[#0f4c3a]/10 outline-none transition">

		                        </div>

		                    </div>

		                    <!-- Options -->
		                    <div class="mt-10 border-t pt-8">

		                        <div class="grid md:grid-cols-2 gap-5">

		                            <label class="flex items-center gap-4 cursor-pointer">

		                                <input
		                                    id="calculateSeniority"
		                                    type="checkbox"
		                                    checked
		                                    class="w-5 h-5 accent-[#0f4c3a]">

		                                <span class="font-medium text-slate-700">
		                                    محاسبه سنوات
		                                </span>

		                            </label>

		                            <label class="flex items-center gap-4 cursor-pointer">

		                                <input
		                                    id="calculateFamily"
		                                    type="checkbox"
		                                    checked
		                                    class="w-5 h-5 accent-[#0f4c3a]">

		                                <span class="font-medium text-slate-700">
		                                    محاسبه حق همسر و اولاد
		                                </span>

		                            </label>

		                        </div>

		                    </div>

		                    <!-- Button -->
		                    <div class="mt-10 text-center">

		                        <button
		                            id="calculateSalaryBtn"
		                            type="button"
		                            class="inline-flex items-center gap-3 bg-[#0f4c3a] hover:bg-[#14624b] text-white px-10 py-4 rounded-2xl text-lg font-bold shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 sharif-bold cursor-pointer">

		                            <i data-lucide="calculator" class="w-8 h-8 text-[#d8c2a7]"></i>

		                            محاسبه حقوق

		                        </button>

		                    </div>

		                </div>

		            </div>

		        </div>

		    </div>

		</section>
	<!-- ./Calculator Form -->

	<!-- Salary Slip -->
		<section id="salarySlipSection" class="py-16 bg-[#FAF8F4] hidden">

		    <div class="container mx-auto px-6">

		        <div class="max-w-5xl mx-auto">

		            <!-- Success Message -->
		            <div id="salarySuccess"
		                 class="mb-6 hidden bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-2xl px-5 py-4 flex items-center gap-3">

		                <i data-lucide="circle-check-big" class="w-6 h-6 text-emerald-600"></i>

		                <span class="font-semibold">
		                    حقوق شما با موفقیت محاسبه شد و فیش حقوقی صادر گردید.
		                </span>

		            </div>

		            <!-- Slip Card -->
		            <div id="salary-slip"
		                 class="bg-white rounded-[32px] border border-[#ebc9a270] shadow-xl overflow-hidden">

		                <!-- Header -->
		                <div class="bg-[#0f4c3a] px-8 py-8">

		                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

		                        <div class="flex items-center gap-5">

		                            <div class="w-20 h-20 rounded-3xl bg-[#a67c52]/20 flex items-center justify-center">

		                                <i data-lucide="receipt" class="w-10 h-10 text-[#d8c2a7]"></i>

		                            </div>

		                            <div>

		                                <h2 class="text-3xl sharif-bold text-white mb-2">
		                                    فیش حقوق و دستمزد
		                                </h2>

		                                <p class="text-[#d8c2a7]">
		                                    سارا شریف | مشاور مالی، مالیاتی و حقوق و دستمزد
		                                </p>

		                            </div>

		                        </div>

		                        <div class="bg-white/10 rounded-2xl px-5 py-4 text-center">

		                            <p class="text-white/70 text-sm mb-1">
		                                سال محاسبه
		                            </p>

		                            <h3 id="slipYear"
		                                class="text-white text-2xl font-bold">
		                                1405
		                            </h3>

		                        </div>

		                    </div>

		                </div>

		                <!-- Body -->
		                <div class="p-8 lg:p-10">

		                    <!-- Info -->
		                    <div class="grid md:grid-cols-2 gap-5">

		                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-5">

		                            <p class="text-slate-500 text-sm mb-2">
		                                ماه محاسبه
		                            </p>

		                            <div class="flex items-center gap-3">

		                                <i data-lucide="calendar-range" class="w-5 h-5 text-[#a67c52]"></i>

		                                <span id="slipMonth" class="font-bold text-slate-700 text-lg">
		                                    شهریور 1405
		                                </span>

		                            </div>

		                        </div>

		                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-5">

		                            <p class="text-slate-500 text-sm mb-2">
		                                تاریخ صدور
		                            </p>

		                            <div class="flex items-center gap-3">

		                                <i data-lucide="calendar-check-2" class="w-5 h-5 text-[#a67c52]"></i>

		                                <span id="slipDate" class="font-bold text-slate-700 text-lg">
		                                    1405/06/01
		                                </span>

		                            </div>

		                        </div>

		                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-5">

		                            <p class="text-slate-500 text-sm mb-2">
		                                تاریخ شروع همکاری
		                            </p>

		                            <div class="flex items-center gap-3">

		                                <i data-lucide="briefcase-business" class="w-5 h-5 text-[#a67c52]"></i>

		                                <span id="slipStartDate" class="font-bold text-slate-700 text-lg">
		                                    مهر 1404
		                                </span>

		                            </div>

		                        </div>

		                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-5">

		                            <p class="text-slate-500 text-sm mb-2">
		                                وضعیت خانوادگی
		                            </p>

		                            <div class="flex items-center gap-3">

		                                <i data-lucide="users-round" class="w-5 h-5 text-[#a67c52]"></i>

		                                <span id="slipFamily" class="font-bold text-slate-700 text-lg">
		                                    مجرد - بدون فرزند
		                                </span>

		                            </div>

		                        </div>

		                    </div>

		                    <!-- Final Salary -->
		                    <div class="mt-8 bg-[#0f4c3a] rounded-[28px] p-8 text-white">

		                        <p class="text-[#d8c2a7] text-lg mb-3">
		                            مبلغ قابل پرداخت
		                        </p>

		                        <h2 id="netSalary"
		                            class="text-4xl lg:text-5xl sharif-bold mb-3">
		                            0 تومان
		                        </h2>

		                        <p class="text-white/70">
		                            مبلغ نهایی پس از اعمال مزایا، بیمه و مالیات
		                        </p>

		                    </div>

		                    <!-- Earnings -->
		                    <div class="mt-10">

		                        <div class="flex items-center gap-3 mb-5">

		                            <div class="w-11 h-11 rounded-xl bg-emerald-100 flex items-center justify-center">

		                                <i data-lucide="arrow-up-circle"
		                                   class="w-6 h-6 text-emerald-600"></i>

		                            </div>

		                            <h3 class="text-xl sharif-bold text-emerald-700">
		                                درآمدها و مزایا
		                            </h3>

		                        </div>

		                        <div class="overflow-hidden rounded-3xl border border-[#ebc9a270]">

		                            <table class="w-full text-right">

		                                <tbody class="divide-y divide-slate-200 text-slate-700">

		                                    <tr class="bg-white">
		                                        <td class="px-6 py-4 font-medium">
		                                            پایه حقوق
		                                        </td>
		                                        <td id="grossSalaryValue"
		                                            class="px-6 py-4 text-left font-bold">
		                                            0
		                                        </td>
		                                    </tr>

		                                    <tr class="bg-slate-50">
		                                        <td class="px-6 py-4 font-medium">
		                                            حق تأهل
		                                        </td>
		                                        <td id="spouseValue"
		                                            class="px-6 py-4 text-left font-bold">
		                                            0
		                                        </td>
		                                    </tr>

		                                    <tr class="bg-white">
		                                        <td class="px-6 py-4 font-medium">
		                                            حق اولاد
		                                        </td>
		                                        <td id="childrenValue"
		                                            class="px-6 py-4 text-left font-bold">
		                                            0
		                                        </td>
		                                    </tr>

		                                    <tr class="bg-slate-50">
		                                        <td class="px-6 py-4 font-medium">
		                                            پایه سنوات
		                                        </td>
		                                        <td id="seniorityValue"
		                                            class="px-6 py-4 text-left font-bold">
		                                            0
		                                        </td>
		                                    </tr>

		                                    <tr class="bg-[#0f4c3a]/5">
		                                        <td class="px-6 py-5 text-[#0f4c3a] sharif-bold text-lg">
		                                            جمع درآمدها
		                                        </td>
		                                        <td id="totalIncome"
		                                            class="px-6 py-5 text-left text-[#0f4c3a] sharif-bold text-lg">
		                                            0
		                                        </td>
		                                    </tr>

		                                </tbody>

		                            </table>

		                        </div>

		                    </div>

		                    <!-- Deductions -->
		                    <div class="mt-12">

		                        <div class="flex items-center gap-3 mb-5">

		                            <div class="w-11 h-11 rounded-xl bg-red-100 flex items-center justify-center">

		                                <i data-lucide="arrow-down-circle"
		                                   class="w-6 h-6 text-red-600"></i>

		                            </div>

		                            <h3 class="text-xl sharif-bold text-red-600">
		                                کسورات
		                            </h3>

		                        </div>

		                        <div class="overflow-hidden rounded-3xl border border-[#ebc9a270]">

		                            <table class="w-full text-right">

		                                <tbody class="divide-y divide-slate-200 text-slate-700">

		                                    <tr class="bg-white">
		                                        <td class="px-6 py-4 font-medium">
		                                            حق بیمه سهم کارگر
		                                        </td>
		                                        <td id="insuranceValue"
		                                            class="px-6 py-4 text-left font-bold text-red-600">
		                                            0
		                                        </td>
		                                    </tr>

		                                    <tr class="bg-slate-50">
		                                        <td class="px-6 py-4 font-medium">
		                                            مالیات حقوق
		                                        </td>
		                                        <td id="taxValue"
		                                            class="px-6 py-4 text-left font-bold text-red-600">
		                                            0
		                                        </td>
		                                    </tr>

		                                    <tr class="bg-red-50">
		                                        <td class="px-6 py-5 sharif-bold text-red-700 text-lg">
		                                            جمع کسورات
		                                        </td>
		                                        <td id="totalDeduction"
		                                            class="px-6 py-5 text-left sharif-bold text-red-700 text-lg">
		                                            0
		                                        </td>
		                                    </tr>

		                                </tbody>

		                            </table>

		                        </div>

		                    </div>

		                    <!-- Summary -->
		                    <div class="grid md:grid-cols-3 gap-5 mt-12">

		                        <div class="rounded-3xl bg-[#FAF8F4] border border-[#ebc9a270] p-6 text-center">

		                            <i data-lucide="wallet"
		                               class="w-10 h-10 mx-auto mb-3 text-[#0f4c3a]"></i>

		                            <p class="text-slate-500 text-sm mb-2">
		                                حقوق ناخالص
		                            </p>

		                            <h3 id="summaryGross"
		                                class="text-xl sharif-bold text-[#0f4c3a]">
		                                0
		                            </h3>

		                        </div>

		                        <div class="rounded-3xl bg-red-50 border border-red-100 p-6 text-center">

		                            <i data-lucide="shield-minus"
		                               class="w-10 h-10 mx-auto mb-3 text-red-600"></i>

		                            <p class="text-slate-500 text-sm mb-2">
		                                مجموع کسورات
		                            </p>

		                            <h3 id="summaryDeduction"
		                                class="text-xl sharif-bold text-red-600">
		                                0
		                            </h3>

		                        </div>

		                        <div class="rounded-3xl bg-[#0f4c3a] p-6 text-center">

		                            <i data-lucide="badge-dollar-sign"
		                               class="w-10 h-10 mx-auto mb-3 text-[#d8c2a7]"></i>

		                            <p class="text-[#d8c2a7] text-sm mb-2">
		                                خالص دریافتی
		                            </p>

		                            <h3 id="summaryNet"
		                                class="text-2xl sharif-bold text-white">
		                                0
		                            </h3>

		                        </div>

		                    </div>

		                    <!-- Footer -->
		                    <div class="mt-12 pt-8 border-t border-[#ebc9a270]">

		                        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">

		                            <div>

		                                <h4 class="font-bold text-[#0f4c3a] mb-2">
		                                    صادرکننده فیش
		                                </h4>

		                                <p class="text-slate-600">
		                                    سارا شریف — مشاور مالی، مالیاتی و حقوق و دستمزد
		                                </p>

		                                <p class="text-sm text-slate-400 mt-2">
		                                    این فیش به صورت خودکار توسط سامانه محاسبه حقوق صادر شده است.
		                                </p>

		                            </div>

		                            <div class="flex items-center gap-2 text-[#0f4c3a] font-semibold">

		                                <i data-lucide="badge-check" class="w-5 h-5"></i>

		                                معتبر برای استفاده شخصی

		                            </div>

		                        </div>

		                    </div>

		                </div>

		            </div>

		            <!-- Download Button -->
		            <div class="mt-8 text-center">

		                <button id="downloadSlipBtn"
		                        class="inline-flex items-center gap-3 bg-[#0f4c3a] hover:bg-[#14624b] text-white px-10 py-4 rounded-2xl sharif-bold shadow-lg hover:shadow-xl transition cursor-pointer">

		                    <i data-lucide="download" class="w-6 h-6 text-[#d8c2a7]"></i>

		                    دانلود فیش حقوقی (PNG)

		                </button>

		            </div>

		        </div>

		    </div>

		</section>
	<!-- ./Salary Slip -->
	<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
	<script>
	    document.addEventListener('DOMContentLoaded', () => {

	        /*
	        |--------------------------------------------------------------------------
	        | حقوق و دستمزد سال ۱۴۰۵
	        |--------------------------------------------------------------------------
	        */

	        const SALARY_1405 = {

	            // حداقل دستمزد روزانه
	            minimumDailyWage: 5541850,

	            // حق تأهل ماهانه
	            marriageAllowance: 5000000,

	            // حق اولاد برای هر فرزند
	            // 3 × حداقل مزد روزانه
	            childAllowance: 16625550,

	            // بیمه سهم کارگر
	            insuranceRate: 0.07,

	            // سقف معافیت مالیاتی ماهانه
	            taxExemption: 400000000,

	            /*
	            |--------------------------------------------------------------------------
	            | جدول موقت پایه سنوات تجمیعی ۱۴۰۵
	            |--------------------------------------------------------------------------
	            | مبلغ به صورت ریال در روز است.
	            |
	            | نکته:
	            | این اعداد فعلاً بر اساس جدولی که پیدا کردیم قرار داده شده‌اند
	            | و بعداً می‌توانی اعداد دقیق‌تر را جایگزین کنی.
	            |--------------------------------------------------------------------------
	            */

	            seniorityTable: {

	                0: 0,

	                1: 166667,

	                2: 302967,

	                3: 436947,

	                4: 600403,

	                5: 798184,

	                6: 980142,

	                7: 1143906,

	                8: 1275733,

	                9: 1384264,

	                10: 1504088,

	                11: 1583026,

	                12: 1673014,

	                13: 1725661,

	                14: 1761041,

	                15: 1793471,

	                16: 1821234,

	                17: 1850658,

	                18: 1870336,

	                19: 1890997,

	                20: 1912693
	            }
	        };


	        /*
	        |--------------------------------------------------------------------------
	        | تعداد روزهای ماه
	        |--------------------------------------------------------------------------
	        */

	        const monthDays = {

	            'فروردین': 31,
	            'اردیبهشت': 31,
	            'خرداد': 31,
	            'تیر': 31,
	            'مرداد': 31,
	            'شهریور': 31,

	            'مهر': 30,
	            'آبان': 30,
	            'آذر': 30,
	            'دی': 30,
	            'بهمن': 30,
	            'اسفند': 29

	        };


	        /*
	        |--------------------------------------------------------------------------
	        | شماره ماه‌های شمسی
	        |--------------------------------------------------------------------------
	        */

	        const monthNumbers = {

	            'فروردین': 1,
	            'اردیبهشت': 2,
	            'خرداد': 3,
	            'تیر': 4,
	            'مرداد': 5,
	            'شهریور': 6,
	            'مهر': 7,
	            'آبان': 8,
	            'آذر': 9,
	            'دی': 10,
	            'بهمن': 11,
	            'اسفند': 12

	        };


	        /*
	        |--------------------------------------------------------------------------
	        | تبدیل اعداد به فرمت فارسی
	        |--------------------------------------------------------------------------
	        */

	        function formatNumber(number) {

	            return new Intl.NumberFormat('fa-IR').format(
	                Math.round(number)
	            );

	        }


	        /*
	        |--------------------------------------------------------------------------
	        | نمایش مبلغ به تومان
	        |--------------------------------------------------------------------------
	        |
	        | تمام محاسبات داخلی ریالی هستند.
	        | در فیش مبلغ به تومان نمایش داده می‌شود.
	        |
	        */

	        function formatToman(number) {

	            return formatNumber(number / 10) + ' تومان';

	        }


	        /*
	        |--------------------------------------------------------------------------
	        | محاسبه مالیات پلکانی ۱۴۰۵
	        |--------------------------------------------------------------------------
	        */

	        function calculateTax(taxableSalary) {

	            const income = Math.max(0, taxableSalary);

	            if (income <= SALARY_1405.taxExemption) {
	                return 0;
	            }

	            let tax = 0;


	            // پله اول: 400 تا 800 میلیون ریال
	            if (income > 400000000) {

	                const amount =
	                    Math.min(income, 800000000) -
	                    400000000;

	                if (amount > 0) {
	                    tax += amount * 0.10;
	                }
	            }


	            // پله دوم: 800 میلیون تا 1 میلیارد ریال
	            if (income > 800000000) {

	                const amount =
	                    Math.min(income, 1000000000) -
	                    800000000;

	                if (amount > 0) {
	                    tax += amount * 0.15;
	                }
	            }


	            // پله سوم: 1 تا 1.2 میلیارد ریال
	            if (income > 1000000000) {

	                const amount =
	                    Math.min(income, 1200000000) -
	                    1000000000;

	                if (amount > 0) {
	                    tax += amount * 0.20;
	                }
	            }


	            // پله چهارم: 1.2 تا 1.4 میلیارد ریال
	            if (income > 1200000000) {

	                const amount =
	                    Math.min(income, 1400000000) -
	                    1200000000;

	                if (amount > 0) {
	                    tax += amount * 0.25;
	                }
	            }


	            // پله پنجم: بالاتر از 1.4 میلیارد ریال
	            if (income > 1400000000) {

	                const amount =
	                    income - 1400000000;

	                tax += amount * 0.30;
	            }


	            return Math.round(tax);

	        }


	        /*
	        |--------------------------------------------------------------------------
	        | دریافت عناصر فرم
	        |--------------------------------------------------------------------------
	        */

	        const dailySalaryInput =
	            document.getElementById('dailySalary');

	        const startMonthInput =
	            document.getElementById('startMonth');

	        const startYearInput =
	            document.getElementById('startYear');

	        const maritalStatusInput =
	            document.getElementById('maritalStatus');

	        const childrenCountInput =
	            document.getElementById('childrenCount');

	        const calculationMonthInput =
	            document.getElementById('calculationMonth');

	        const calculateSeniorityInput =
	            document.getElementById('calculateSeniority');

	        const calculateFamilyInput =
	            document.getElementById('calculateFamily');

	        const calculateSalaryBtn =
	            document.getElementById('calculateSalaryBtn');


	        /*
	        |--------------------------------------------------------------------------
	        | عناصر فیش
	        |--------------------------------------------------------------------------
	        */

	        const salarySlipSection =
	            document.getElementById('salarySlipSection');

	        const salarySuccess =
	            document.getElementById('salarySuccess');

	        const slipYear =
	            document.getElementById('slipYear');

	        const slipMonth =
	            document.getElementById('slipMonth');

	        const slipStartDate =
	            document.getElementById('slipStartDate');

	        const slipFamily =
	            document.getElementById('slipFamily');

	        const netSalary =
	            document.getElementById('netSalary');

	        const grossSalaryValue =
	            document.getElementById('grossSalaryValue');

	        const spouseValue =
	            document.getElementById('spouseValue');

	        const childrenValue =
	            document.getElementById('childrenValue');

	        const seniorityValue =
	            document.getElementById('seniorityValue');

	        const totalIncome =
	            document.getElementById('totalIncome');

	        const insuranceValue =
	            document.getElementById('insuranceValue');

	        const taxValue =
	            document.getElementById('taxValue');

	        const totalDeduction =
	            document.getElementById('totalDeduction');

	        const summaryGross =
	            document.getElementById('summaryGross');

	        const summaryDeduction =
	            document.getElementById('summaryDeduction');

	        const summaryNet =
	            document.getElementById('summaryNet');


	        /*
	        |--------------------------------------------------------------------------
	        | محاسبه حقوق
	        |--------------------------------------------------------------------------
	        */

	        if (calculateSalaryBtn) {

	            calculateSalaryBtn.addEventListener('click', () => {


	                /*
	                |--------------------------------------------------------------------------
	                | دریافت اطلاعات
	                |--------------------------------------------------------------------------
	                */

	                let dailySalary =
	                    parseInt(dailySalaryInput?.value || 0);

	                const startMonth =
	                    startMonthInput?.value || 'فروردین';

	                const startYear =
	                    parseInt(startYearInput?.value || 1405);

	                const maritalStatus =
	                    maritalStatusInput?.value || 'مجرد';

	                let childrenCount =
	                    parseInt(childrenCountInput?.value || 0);

	                const calculationMonth =
	                    calculationMonthInput?.value || 'فروردین';


	                /*
	                |--------------------------------------------------------------------------
	                | مقدارهای پیش‌فرض
	                |--------------------------------------------------------------------------
	                */

	                if (
	                    !dailySalary ||
	                    dailySalary < SALARY_1405.minimumDailyWage
	                ) {

	                    dailySalary =
	                        SALARY_1405.minimumDailyWage;

	                    if (dailySalaryInput) {
	                        dailySalaryInput.value = dailySalary;
	                    }

	                }


	                if (
	                    isNaN(childrenCount) ||
	                    childrenCount < 0
	                ) {

	                    childrenCount = 0;

	                }


	                /*
	                |--------------------------------------------------------------------------
	                | تعداد روزهای ماه
	                |--------------------------------------------------------------------------
	                */

	                const days =
	                    monthDays[calculationMonth] || 30;


	                /*
	                |--------------------------------------------------------------------------
	                | پایه حقوق
	                |--------------------------------------------------------------------------
	                */

	                const baseSalary =
	                    dailySalary * days;


	                /*
	                |--------------------------------------------------------------------------
	                | حق تأهل و اولاد
	                |--------------------------------------------------------------------------
	                */

	                let marriageAllowance = 0;

	                let childrenAllowance = 0;


	                if (calculateFamilyInput?.checked) {

	                    /*
	                    | حق تأهل
	                    */

	                    if (maritalStatus === 'متاهل') {

	                        marriageAllowance =
	                            SALARY_1405.marriageAllowance;

	                    }


	                    /*
	                    | حق اولاد
	                    */

	                    childrenAllowance =
	                        childrenCount *
	                        SALARY_1405.childAllowance;

	                }


	                /*
	                |--------------------------------------------------------------------------
	                | محاسبه سنوات تجمیعی
	                |--------------------------------------------------------------------------
	                */

	                let seniority = 0;

	                let seniorityYears = 0;

	                let seniorityDaily = 0;


	                if (calculateSeniorityInput?.checked) {

	                    /*
	                    |--------------------------------------------------------------------------
	                    | محاسبه تعداد ماه‌های سابقه
	                    |--------------------------------------------------------------------------
	                    */

	                    const startMonthNumber =
	                        monthNumbers[startMonth] || 1;

	                    const calculationMonthNumber =
	                        monthNumbers[calculationMonth] || 1;


	                    let totalMonths =
	                        (
	                            (1405 - startYear) * 12
	                        ) +
	                        (
	                            calculationMonthNumber -
	                            startMonthNumber
	                        );


	                    /*
	                    |--------------------------------------------------------------------------
	                    | اگر هنوز تاریخ شروع همکاری نرسیده باشد
	                    |--------------------------------------------------------------------------
	                    */

	                    if (totalMonths < 0) {
	                        totalMonths = 0;
	                    }


	                    /*
	                    |--------------------------------------------------------------------------
	                    | تعداد سال کامل سابقه
	                    |--------------------------------------------------------------------------
	                    */

	                    seniorityYears =
	                        Math.floor(totalMonths / 12);


	                    /*
	                    |--------------------------------------------------------------------------
	                    | دریافت پایه سنوات تجمیعی
	                    |--------------------------------------------------------------------------
	                    |
	                    | مثال:
	                    |
	                    | 1 سال  → 166,667 ریال روزانه
	                    | 2 سال  → 302,967 ریال روزانه
	                    | 10 سال → 1,504,088 ریال روزانه
	                    |
	                    */

	                    if (
	                        seniorityYears > 0
	                    ) {

	                        /*
	                        | اگر سابقه بیشتر از آخرین ردیف جدول باشد،
	                        | فعلاً از آخرین مقدار جدول استفاده می‌کنیم.
	                        */

	                        const maxSeniorityYear =
	                            Math.max(
	                                ...Object.keys(
	                                    SALARY_1405.seniorityTable
	                                ).map(Number)
	                            );


	                        const applicableYear =
	                            Math.min(
	                                seniorityYears,
	                                maxSeniorityYear
	                            );


	                        seniorityDaily =
	                            SALARY_1405.seniorityTable[
	                                applicableYear
	                            ] || 0;


	                        /*
	                        | پایه سنوات ماه مورد نظر
	                        */

	                        seniority =
	                            seniorityDaily *
	                            days;

	                    }

	                }


	                /*
	                |--------------------------------------------------------------------------
	                | جمع درآمدها
	                |--------------------------------------------------------------------------
	                */

	                const grossSalary =
	                    baseSalary +
	                    marriageAllowance +
	                    childrenAllowance +
	                    seniority;


	                /*
	                |--------------------------------------------------------------------------
	                | بیمه
	                |--------------------------------------------------------------------------
	                */

	                const insurance =
	                    Math.round(
	                        grossSalary *
	                        SALARY_1405.insuranceRate
	                    );


	                /*
	                |--------------------------------------------------------------------------
	                | حقوق مشمول مالیات
	                |--------------------------------------------------------------------------
	                */

	                const taxableSalary =
	                    Math.max(
	                        0,
	                        grossSalary -
	                        insurance
	                    );


	                /*
	                |--------------------------------------------------------------------------
	                | مالیات
	                |--------------------------------------------------------------------------
	                */

	                const tax =
	                    calculateTax(taxableSalary);


	                /*
	                |--------------------------------------------------------------------------
	                | مجموع کسورات
	                |--------------------------------------------------------------------------
	                */

	                const totalDeductions =
	                    insurance +
	                    tax;


	                /*
	                |--------------------------------------------------------------------------
	                | خالص دریافتی
	                |--------------------------------------------------------------------------
	                */

	                const net =
	                    Math.max(
	                        0,
	                        grossSalary -
	                        totalDeductions
	                    );


	                /*
	                |--------------------------------------------------------------------------
	                | اطلاعات فیش
	                |--------------------------------------------------------------------------
	                */

	                if (slipYear) {

	                    slipYear.textContent =
	                        '۱۴۰۵';

	                }


	                if (slipMonth) {

	                    slipMonth.textContent =
	                        `${calculationMonth} ۱۴۰۵`;

	                }


	                if (slipStartDate) {

	                    slipStartDate.textContent =
	                        `${startMonth} ${startYear}`;

	                }


	                /*
	                |--------------------------------------------------------------------------
	                | وضعیت خانوادگی
	                |--------------------------------------------------------------------------
	                */

	                if (slipFamily) {

	                    if (
	                        calculateFamilyInput?.checked
	                    ) {

	                        if (
	                            maritalStatus === 'متاهل'
	                        ) {

	                            slipFamily.textContent =
	                                `متأهل - ${formatNumber(childrenCount)} فرزند`;

	                        } else {

	                            slipFamily.textContent =
	                                `مجرد - ${formatNumber(childrenCount)} فرزند`;

	                        }

	                    } else {

	                        slipFamily.textContent =
	                            'محاسبه نشده';

	                    }

	                }


	                /*
	                |--------------------------------------------------------------------------
	                | درآمدها
	                |--------------------------------------------------------------------------
	                */

	                if (grossSalaryValue) {

	                    grossSalaryValue.textContent =
	                        formatToman(baseSalary);

	                }


	                if (spouseValue) {

	                    spouseValue.textContent =
	                        formatToman(marriageAllowance);

	                }


	                if (childrenValue) {

	                    childrenValue.textContent =
	                        formatToman(childrenAllowance);

	                }


	                if (seniorityValue) {

	                    seniorityValue.textContent =
	                        formatToman(seniority);

	                }


	                if (totalIncome) {

	                    totalIncome.textContent =
	                        formatToman(grossSalary);

	                }


	                /*
	                |--------------------------------------------------------------------------
	                | کسورات
	                |--------------------------------------------------------------------------
	                */

	                if (insuranceValue) {

	                    insuranceValue.textContent =
	                        formatToman(insurance);

	                }


	                if (taxValue) {

	                    taxValue.textContent =
	                        formatToman(tax);

	                }


	                if (totalDeduction) {

	                    totalDeduction.textContent =
	                        formatToman(totalDeductions);

	                }


	                /*
	                |--------------------------------------------------------------------------
	                | خلاصه
	                |--------------------------------------------------------------------------
	                */

	                if (summaryGross) {

	                    summaryGross.textContent =
	                        formatToman(grossSalary);

	                }


	                if (summaryDeduction) {

	                    summaryDeduction.textContent =
	                        formatToman(totalDeductions);

	                }


	                if (summaryNet) {

	                    summaryNet.textContent =
	                        formatToman(net);

	                }


	                if (netSalary) {

	                    netSalary.textContent =
	                        formatToman(net);

	                }


	                /*
	                |--------------------------------------------------------------------------
	                | نمایش فیش
	                |--------------------------------------------------------------------------
	                */

	                salarySlipSection?.classList.remove('hidden');

	                salarySuccess?.classList.remove('hidden');


	                /*
	                |--------------------------------------------------------------------------
	                | فعال‌سازی Lucide
	                |--------------------------------------------------------------------------
	                */

	                if (typeof lucide !== 'undefined') {

	                    lucide.createIcons();

	                }


	                /*
	                |--------------------------------------------------------------------------
	                | اسکرول نرم به فیش
	                |--------------------------------------------------------------------------
	                */

	                setTimeout(() => {

	                    salarySlipSection?.scrollIntoView({
	                        behavior: 'smooth',
	                        block: 'start'
	                    });

	                }, 100);

	            });

	        }

	        /*
			|--------------------------------------------------------------------------
			| دانلود فیش حقوقی به صورت PNG
			|--------------------------------------------------------------------------
			*/

			const downloadSlipBtn =
			    document.getElementById('downloadSlipBtn');

			if (downloadSlipBtn) {

			    downloadSlipBtn.addEventListener('click', async () => {

			        const slip =
			            document.getElementById('salary-slip');

			        if (!slip) {
			            return;
			        }

			        /*
			        | جلوگیری از چند بار کلیک
			        */

			        downloadSlipBtn.disabled = true;

			        const originalText =
			            downloadSlipBtn.innerHTML;

			        downloadSlipBtn.innerHTML = `
			            <i data-lucide="loader-circle"
			               class="w-6 h-6 text-[#d8c2a7] animate-spin"></i>
			            در حال آماده‌سازی فیش...
			        `;

			        if (typeof lucide !== 'undefined') {
			            lucide.createIcons();
			        }

			        try {

			            const canvas = await html2canvas(slip, {

			                scale: 2,

			                useCORS: true,

			                backgroundColor: '#ffffff',

			                logging: false

			            });


			            /*
			            |--------------------------------------------------------------------------
			            | تبدیل Canvas به PNG
			            |--------------------------------------------------------------------------
			            */

			            const image =
			                canvas.toDataURL('image/png');


			            /*
			            |--------------------------------------------------------------------------
			            | ساخت لینک دانلود
			            |--------------------------------------------------------------------------
			            */

			            const link =
			                document.createElement('a');

			            link.download =
			                'fish-hoghooghi-1405.png';

			            link.href =
			                image;


			            /*
			            |--------------------------------------------------------------------------
			            | شروع دانلود
			            |--------------------------------------------------------------------------
			            */

			            document.body.appendChild(link);

			            link.click();

			            link.remove();


			        } catch (error) {

			            console.error(
			                'خطا در تولید فیش حقوقی:',
			                error
			            );

			            alert(
			                'متأسفانه دانلود فیش حقوقی انجام نشد. لطفاً دوباره تلاش کنید.'
			            );

			        } finally {

			            /*
			            |--------------------------------------------------------------------------
			            | برگرداندن دکمه به حالت اولیه
			            |--------------------------------------------------------------------------
			            */

			            downloadSlipBtn.disabled = false;

			            downloadSlipBtn.innerHTML =
			                originalText;

			            if (typeof lucide !== 'undefined') {
			                lucide.createIcons();
			            }

			        }

			    });

			}
	    });
	</script>