<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- StylsLinks -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /StyleLinks -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
</head>

    <body class="bg-[#FAF8F4] text-gray-800 pb-18 lg:pb-0">

        <!-- Login -->
            <section class="min-h-screen bg-[#FAF8F4] flex">

                <!-- Left Side -->
                <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden bg-[#0f4c3a]">

                    <!-- Decorative -->
                    <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-[#a67c52]/20 blur-3xl"></div>

                    <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full bg-white/5 blur-3xl"></div>

                    <div class="relative z-10 flex flex-col justify-center px-20 text-white">

                        <span class="inline-flex items-center gap-2 bg-white/10 px-5 py-2 rounded-full w-fit">

                            <i data-lucide="shield-check"></i>

                            پنل مدیریت

                        </span>

                        <h1 class="text-5xl font-black mt-8 leading-tight">

                            پنل مدیریت
                            
                            سارا شریف

                        </h1>

                        <p class="mt-8 text-lg leading-9 text-[#ebc9a2]">

                            مدیریت مقالات، دسته‌بندی‌ها، صفحات سایت و
                            محاسبه‌گر حقوق و دستمزد از طریق پنل اختصاصی.

                        </p>

                        <div class="mt-14 space-y-5">

                            <div class="flex items-center gap-4">

                                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center">

                                    <i data-lucide="newspaper"></i>

                                </div>

                                <span>

                                    مدیریت مقالات

                                </span>

                            </div>

                            <div class="flex items-center gap-4">

                                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center">

                                    <i data-lucide="calculator"></i>

                                </div>

                                <span>

                                    مدیریت محاسبه‌گر حقوق

                                </span>

                            </div>

                            <div class="flex items-center gap-4">

                                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center">

                                    <i data-lucide="chart-column"></i>

                                </div>

                                <span>

                                    مشاهده آمار سایت

                                </span>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Right Side -->
                <div class="w-full lg:w-1/2 flex items-center justify-center px-6 py-12">

                    <div class="w-full max-w-md">

                        <div class="bg-white rounded-[32px] border border-[#ebc9a270] shadow-xl p-10">

                            <div class="text-center mb-10">

                                <div class="w-20 h-20 mx-auto rounded-full bg-[#FAF8F4] flex items-center justify-center mb-6">

                                    <i data-lucide="lock-keyhole"
                                        class="w-10 h-10 text-[#0f4c3a]"></i>

                                </div>

                                <h2 class="text-3xl font-black text-[#0f4c3a]">
                                    ورود به پنل
                                </h2>

                                <p class="text-gray-500 mt-3">
                                    لطفاً اطلاعات ورود خود را وارد کنید.
                                </p>

                            </div>

                            @if (session('status'))
                                <div
                                    class="mb-6 rounded-2xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}" class="space-y-6">

                                @csrf

                                <!-- Email -->
                                <div>

                                    <label for="email" class="block mb-3 font-semibold text-[#0f4c3a]">
                                        ایمیل
                                    </label>

                                    <div class="relative">

                                        <i data-lucide="user-round"
                                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5"></i>

                                        <input
                                            id="email"
                                            name="email"
                                            type="email"
                                            value="{{ old('email') }}"
                                            required
                                            autofocus
                                            autocomplete="username"
                                            class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] pr-12 pl-4 outline-none focus:border-[#0f4c3a]"
                                            placeholder="ایمیل خود را وارد کنید">

                                    </div>

                                    @error('email')
                                        <p class="mt-2 text-sm text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                                <!-- Password -->
                                <div>

                                    <label for="password" class="block mb-3 font-semibold text-[#0f4c3a]">
                                        رمز عبور
                                    </label>

                                    <div class="relative">

                                        <i data-lucide="lock"
                                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5"></i>

                                        <input
                                            id="password"
                                            name="password"
                                            type="password"
                                            required
                                            autocomplete="current-password"
                                            class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] pr-12 pl-4 outline-none focus:border-[#0f4c3a]"
                                            placeholder="********">

                                    </div>

                                    @error('password')
                                        <p class="mt-2 text-sm text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                                <!-- Remember -->
                                <div class="flex items-center justify-between">

                                    <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer">

                                        <input
                                            id="remember_me"
                                            name="remember"
                                            type="checkbox"
                                            class="rounded border-gray-300 text-[#0f4c3a] focus:ring-[#0f4c3a]">

                                        مرا به خاطر بسپار

                                    </label>

                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"
                                            class="text-[#a67c52] hover:text-[#0f4c3a] text-sm transition">

                                            فراموشی رمز عبور

                                        </a>
                                    @endif

                                </div>

                                <!-- Button -->
                                <button
                                    type="submit"
                                    class="w-full h-14 rounded-2xl bg-[#0f4c3a] text-white font-bold hover:bg-[#8b6743] transition sharif-bold cursor-pointer">

                                    ورود به پنل

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </section>


        <!-- Scripts -->
            <script src="https://unpkg.com/lucide@latest"></script>

            <script>
                lucide.createIcons();
            </script>

    </body>

</html>