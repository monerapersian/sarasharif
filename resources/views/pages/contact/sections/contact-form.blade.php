<!-- Contact -->
	<section class="py-20 bg-slate-50">

	    <div class="container mx-auto px-6">

	        <!-- Title -->

	        <div class="text-center max-w-3xl mx-auto mb-16">

	            <span class="inline-flex items-center gap-2 text-[#a67c52] font-semibold">

	                <span class="w-2 h-2 rounded-full bg-[#a67c52]"></span>

	                ارتباط با سارا شریف

	            </span>

	            <h2 class="mt-4 text-3xl lg:text-5xl font-black text-[#0f4c3a]">

	                همیشه آماده پاسخگویی هستم

	            </h2>

	            <p class="mt-6 text-slate-600 leading-9">

	                از طریق فرم زیر یا اطلاعات تماس، سوالات و درخواست‌های خود را
	                ارسال کنید.

	            </p>

	        </div>

	        <div class="grid lg:grid-cols-12 gap-10">

	            <!-- ========================= -->
	            <!-- Contact Info -->
	            <!-- ========================= -->

	            <aside class="lg:col-span-4 space-y-5">

	                <!-- Phone -->

	                <div class="rounded-3xl bg-white p-6 shadow-sm border border-slate-200 hover:shadow-xl transition">

	                    <div class="flex items-start gap-4">

	                        <div class="w-14 h-14 rounded-2xl bg-[#0f4c3a]/10 flex items-center justify-center">

	                            <i data-lucide="phone" class="w-7 h-7 text-[#a67c52]"></i>

	                        </div>

	                        <div>

	                            <h3 class="font-bold text-[#0f4c3a]">

	                                شماره تماس

	                            </h3>

	                            <p class="mt-2 text-slate-600">

	                                {{ $sara->phone }}

	                            </p>

	                        </div>

	                    </div>

	                </div>

	                <!-- Email -->

	                <div class="rounded-3xl bg-white p-6 shadow-sm border border-slate-200 hover:shadow-xl transition">

	                    {{ $sara->email }}

	                </div>

	                <!-- Website -->

	                <div class="rounded-3xl bg-white p-6 shadow-sm border border-slate-200 hover:shadow-xl transition">

	                    www.sarasharif.ir

	                </div>

	                <!-- Working Hours -->

	                <div class="rounded-3xl bg-[#0f4c3a] text-white p-6">

	                    <h3 class="font-bold">

	                        ساعات پاسخگویی

	                    </h3>

	                    <p class="mt-4 leading-8 text-white/80">

	                        شنبه تا چهارشنبه

	                        ۹ الی ۱۷

	                    </p>

	                </div>

	            </aside>

	            <!-- ========================= -->
	            <!-- Contact Form -->
	            <!-- ========================= -->

	            <div class="lg:col-span-8">

	                <div class="rounded-[36px] bg-white border border-slate-200 shadow-xl p-8 lg:p-10">

	                    @if(session('success'))

	                        <div class="mb-6 rounded-2xl bg-green-100 text-green-700 px-5 py-4">

	                            {{ session('success') }}

	                        </div>

	                    @endif

	                    <form action="{{ route('contact.store') }}" method="POST">

	                        @csrf

	                        <div class="grid md:grid-cols-2 gap-6">

	                            <!-- Name -->

	                            <div class="ss-field">

	                                <label class="flex items-center mb-3 font-semibold text-slate-700 ss-label">

	                                    <i data-lucide="user"></i>

	                                    نام و نام خانوادگی

	                                </label>

	                                <input
	                                    type="text"
	                                    name="name"
	                                    value="{{ old('name') }}"
	                                    class="ss-input"
	                                    placeholder="نام خود را وارد کنید">

	                                @error('name')
	                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
	                                @enderror

	                            </div>

	                            <!-- Mobile -->

	                            <div class="ss-field">

	                                <label class="flex items-center mb-3 font-semibold text-slate-700 ss-label">

	                                    <i data-lucide="smartphone"></i>

	                                    شماره موبایل

	                                </label>

	                                <input
	                                    type="text"
	                                    name="phone"
	                                    value="{{ old('phone') }}"
	                                    class="ss-input"
	                                    placeholder="شماره تماس خود را وارد کنید">

	                                @error('phone')
	                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
	                                @enderror

	                            </div>

	                            <!-- Email -->

	                            <div class="ss-field">

	                                <label class="flex items-center mb-3 font-semibold text-slate-700 ss-label">

	                                    <i data-lucide="at-sign"></i>

	                                    ایمیل

	                                </label>

	                                <input
	                                    type="email"
	                                    name="email"
	                                    value="{{ old('email') }}"
	                                    class="ss-input"
	                                    placeholder="ایمیل خود را وارد کنید">

	                                @error('email')
	                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
	                                @enderror

	                            </div>

	                            <!-- Subject -->

	                            <div class="ss-field">

	                                <label class="flex items-center mb-3 font-semibold text-slate-700 ss-label">

	                                    <i data-lucide="file-type"></i>

	                                    موضوع

	                                </label>

	                                <input
	                                    type="text"
	                                    name="subject"
	                                    value="{{ old('subject') }}"
	                                    class="ss-input"
	                                    placeholder="موضوع پیام را وارد کنید">

	                                @error('subject')
	                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
	                                @enderror

	                            </div>

	                        </div>

	                        <!-- Message -->

	                        <div class="mt-6 ss-field">

	                            <label class="flex items-center mb-3 font-semibold text-slate-700 ss-label">

	                                <i data-lucide="scroll-text"></i>

	                                متن پیام

	                            </label>

	                            <textarea
	                                name="message"
	                                rows="7"
	                                class="ss-input resize-none py-2 h-32"
	                                placeholder="پیام خود را وارد کنید">{{ old('message') }}</textarea>

	                            @error('message')
	                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
	                            @enderror

	                        </div>

	                        <!-- Button -->

	                        <button
	                            type="submit"
	                            class="mt-8 px-10 py-4 rounded-2xl bg-[#0f4c3a] hover:bg-[#14614b] text-white font-bold transition sharif-bold">

	                            ارسال پیام

	                        </button>

	                    </form>

	                </div>

	            </div>

	        </div>

	    </div>

	</section>
<!-- ./Contact -->