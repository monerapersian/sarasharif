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
		                            <!-- <svg xmlns="http://www.w3.org/2000/svg"
		                                 class="w-7 h-7 text-[#d8c2a7]"
		                                 fill="none"
		                                 viewBox="0 0 24 24"
		                                 stroke="currentColor">

		                                <path stroke-linecap="round"
		                                      stroke-linejoin="round"
		                                      stroke-width="1.5"
		                                      d="M9 7h6M9 11h6m-6 4h2m6-10H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7l-4-4z"/>

		                            </svg> -->

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

		                                <select class="w-full rounded-2xl border border-slate-300 px-5 py-3 focus:border-[#0f4c3a] focus:ring-4 focus:ring-[#0f4c3a]/10 outline-none transition">

		                                    <option>فروردین</option>
		                                    <option>اردیبهشت</option>
		                                    <option>خرداد</option>
		                                    <option>تیر</option>
		                                    <option>مرداد</option>
		                                    <option>شهریور</option>
		                                    <option>مهر</option>
		                                    <option>آبان</option>
		                                    <option>آذر</option>
		                                    <option>دی</option>
		                                    <option>بهمن</option>
		                                    <option>اسفند</option>

		                                </select>

		                                <select class="w-full rounded-2xl border border-slate-300 px-5 py-3 focus:border-[#0f4c3a] focus:ring-4 focus:ring-[#0f4c3a]/10 outline-none transition">

		                                    <option>1405</option>
		                                    <option>1404</option>
		                                    <option>1403</option>
		                                    <option>1402</option>
		                                    <option>1401</option>

		                                </select>

		                            </div>

		                        </div>

		                        <!-- وضعیت تاهل -->
		                        <div>

		                            <label class="mb-3 flex items-center gap-2 font-semibold text-slate-700">
		                                <i data-lucide="heart-handshake" class="w-8 h-8 text-[#d8c2a7]"></i>
		                                 وضعیت تاهل
		                            </label>

		                            <select class="w-full rounded-2xl border border-slate-300 px-5 py-3 focus:border-[#0f4c3a] focus:ring-4 focus:ring-[#0f4c3a]/10 outline-none transition">

		                                <option>مجرد</option>
		                                <option>متاهل</option>

		                            </select>

		                        </div>

		                        <!-- تعداد فرزند -->
		                        <div>

		                            <label class="mb-3 flex items-center gap-2 font-semibold text-slate-700">
		                                <i data-lucide="baby" class="w-8 h-8 text-[#d8c2a7]"></i>
		                                 تعداد فرزندان
		                            </label>

		                            <input type="number"
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

		                            <select class="w-full rounded-2xl border border-slate-300 px-5 py-3 focus:border-[#0f4c3a] focus:ring-4 focus:ring-[#0f4c3a]/10 outline-none transition">

		                                <option>فروردین</option>
		                                <option>اردیبهشت</option>
		                                <option>خرداد</option>
		                                <option>تیر</option>
		                                <option>مرداد</option>
		                                <option>شهریور</option>
		                                <option>مهر</option>
		                                <option>آبان</option>
		                                <option>آذر</option>
		                                <option>دی</option>
		                                <option>بهمن</option>
		                                <option>اسفند</option>

		                            </select>

		                        </div>

		                        <!-- پایه حقوق -->
		                        <div class="lg:col-span-2">

		                            <label class="mb-3 flex items-center gap-2 font-semibold text-slate-700">
		                                <i data-lucide="banknote-check" class="w-8 h-8 text-[#d8c2a7]"></i>
		                                 پایه حقوق روزانه
		                            </label>

		                            <input type="number"
		                                   value="5541850"
		                                   class="w-full rounded-2xl border border-slate-300 px-5 py-3 focus:border-[#0f4c3a] focus:ring-4 focus:ring-[#0f4c3a]/10 outline-none transition">

		                        </div>

		                    </div>

		                    <!-- Options -->
		                    <div class="mt-10 border-t pt-8">

		                        <div class="grid md:grid-cols-2 gap-5">

		                            <label class="flex items-center gap-4 cursor-pointer">

		                                <input type="checkbox"
		                                       checked
		                                       class="w-5 h-5 accent-[#0f4c3a]">

		                                <span class="font-medium text-slate-700">
		                                    محاسبه سنوات
		                                </span>

		                            </label>

		                            <label class="flex items-center gap-4 cursor-pointer">

		                                <input type="checkbox"
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

		                        <button class="inline-flex items-center gap-3 bg-[#0f4c3a] hover:bg-[#14624b] text-white px-10 py-4 rounded-2xl text-lg font-bold shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 sharif-bold cursor-pointer">

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