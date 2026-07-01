    <!-- Navbar -->
        <header id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-[#fff] backdrop-blur-md border-b border-[#ebc9a270] transition-all duration-300 hidden lg:block fixed top-0 left-0 right-0 z-50">

            <div class="container mx-auto px-6">

                <div class="flex items-center justify-between h-20">

                    <!-- Logo -->
                    <a href="#" class="text-2xl font-bold text-[#0f4c3a]">
                        سارا شریف
                    </a>

                    <!-- Menu -->
                    <nav>
                        <ul class="flex items-center gap-8">

                            @foreach ($menu as $item)
                                <li>
                                    <a href="{{ $item['url'] }}"
                                       class="flex items-center gap-2 text-[#0f4c3a] hover:text-[#a67c52] transition {{ request()->path() === trim($item['url'], '/') ? 'text-[#a67c52]' : 'text-[#0f4c3a]' }}">

                                        <i data-lucide="{{ $item['icon'] }}"></i>

                                        <span>{{ $item['title'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                                <li>
                                    <a href="#"
                                        class="flex items-center gap-2 bg-[#0f4c3a] text-white px-4 py-2 rounded-xl hover:bg-[#a67c52] transition">
                                        <i data-lucide="calculator"></i>
                                        <span>محاسبه‌گر حقوق</span>
                                    </a>
                                </li>

                        </ul>
                    </nav>

                </div>

            </div>

        </header>
    <!-- ./Navbar -->
    
    <!-- MobileNav -->
        <header id="mobileHeader" class="lg:hidden fixed top-0 left-0 right-0 z-50 bg-white border-b border-[#ebc9a270] transition-all duration-300">

            <div class="container mx-auto px-4 h-18 flex items-center gap-4">

                <h1 class="text-xl font-bold text-[#0f4c3a] whitespace-nowrap">
                    سارا شریف
                </h1>

                <div class="flex-1 relative">

                    <i data-lucide="search"
                       class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"></i>

                    <input
                        type="text"
                        placeholder="جستجو..."

                        class="w-full rounded-xl bg-[#FAF8F4] border border-[#ebc9a270] py-3 pr-10 pl-4 outline-none focus:border-[#0f4c3a]">

                </div>

            </div>

        </header>
    <!-- ./MobileNav -->

    <!-- BtmNavMobile -->
    <nav class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-[#ebc9a270] shadow-[0_-5px_20px_rgba(0,0,0,.08)] z-50">

        <div class="grid grid-cols-5 h-18">

            <a href="#" class="flex flex-col justify-center items-center text-[#0f4c3a] hover:text-[#a67c52]">

                <i data-lucide="house" class="w-6 h-6"></i>

                <span class="text-xs mt-1">خانه</span>

            </a>

            <a href="#" class="flex flex-col justify-center items-center text-[#0f4c3a] hover:text-[#a67c52]">

                <i data-lucide="book-open"></i>

                <span class="text-xs mt-1">مقالات</span>

            </a>

            <a href="#" class="flex flex-col justify-center items-center text-[#a67c52]">

                <div class="w-12 h-12 rounded-full bg-[#0f4c3a] text-white flex items-center justify-center -mt-8 shadow-xl">

                    <i data-lucide="calculator"></i>

                </div>

                <span class="text-xs mt-1">
                    محاسبه‌گر
                </span>

            </a>

            <a href="#" class="flex flex-col justify-center items-center text-[#0f4c3a] hover:text-[#a67c52]">

                <i data-lucide="user-round"></i>

                <span class="text-xs mt-1">درباره</span>

            </a>

            <a href="#" class="flex flex-col justify-center items-center text-[#0f4c3a] hover:text-[#a67c52]">

                <i data-lucide="phone"></i>

                <span class="text-xs mt-1">تماس</span>

            </a>

        </div>

    </nav>
<!-- ./BtmNavMobile -->