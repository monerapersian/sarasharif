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


                            {{-- Home --}}
                            <li>
                                <a href="{{ route('home') }}"
                                   class="flex items-center gap-2 transition
                                   {{ request()->routeIs('home') 
                                        ? 'text-[#a67c52]' 
                                        : 'text-[#0f4c3a] hover:text-[#a67c52]' }}">

                                    <i data-lucide="house"></i>

                                    <span>
                                        صفحه اصلی
                                    </span>

                                </a>
                            </li>



                            {{-- Blog --}}
                            <li>
                                <a href="{{ route('blog') }}"
                                   class="flex items-center gap-2 transition
                                   {{ request()->routeIs('blog') || request()->routeIs('blog.show') 
                                        ? 'text-[#a67c52]' 
                                        : 'text-[#0f4c3a] hover:text-[#a67c52]' }}">

                                    <i data-lucide="book-open"></i>

                                    <span>
                                        مقالات
                                    </span>

                                </a>
                            </li>



                            {{-- About --}}
                            <li>
                                <a href="{{ route('about') }}"
                                   class="flex items-center gap-2 transition
                                   {{ request()->routeIs('about') 
                                        ? 'text-[#a67c52]' 
                                        : 'text-[#0f4c3a] hover:text-[#a67c52]' }}">

                                    <i data-lucide="user-round"></i>

                                    <span>
                                        درباره سارا شریف
                                    </span>

                                </a>
                            </li>



                            {{-- Contact --}}
                            <li>
                                <a href="{{ route('contact') }}"
                                   class="flex items-center gap-2 transition
                                   {{ request()->routeIs('contact') 
                                        ? 'text-[#a67c52]' 
                                        : 'text-[#0f4c3a] hover:text-[#a67c52]' }}">

                                    <i data-lucide="phone"></i>

                                    <span>
                                        تماس با ما
                                    </span>

                                </a>
                            </li>



                            {{-- Calculator --}}
                            <li>
                                <a href="{{ route('calculator') }}"
                                   class="flex items-center gap-2 px-4 py-2 rounded-xl transition
                                   {{ request()->routeIs('calculator')
                                        ? 'bg-[#a67c52] text-white'
                                        : 'bg-[#0f4c3a] text-white hover:bg-[#a67c52]' }}">

                                    <i data-lucide="calculator"></i>

                                    <span>
                                        محاسبه‌گر حقوق
                                    </span>

                                </a>
                            </li>


                        </ul>
                    </nav>

                </div>

            </div>

        </header>
        <script>

                let lastScroll = 0;

                const navbar = document.getElementById("navbar");

                window.addEventListener("scroll", () => {

                    const currentScroll = window.pageYOffset;

                    if (currentScroll <= 0) {
                        navbar.style.transform = "translateY(0)";
                        return;
                    }

                    if (currentScroll > lastScroll) {

                        navbar.style.transform = "translateY(-100%)";

                    } else {

                        navbar.style.transform = "translateY(0)";

                    }

                    lastScroll = currentScroll;

                });

            </script>
    <!-- ./Navbar -->

    <!-- MobileNav -->
        <header id="mobileHeader" class="lg:hidden fixed top-0 left-0 right-0 z-50 bg-white border-b border-[#ebc9a270] transition-all duration-300">

            <div class="container mx-auto px-4 h-18 flex items-center gap-4 py-2">

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
        <script>

                let lastMobileScroll = 0;

                const mobileHeader = document.getElementById("mobileHeader");

                window.addEventListener("scroll", () => {

                    const currentScroll = window.pageYOffset;

                    if (currentScroll <= 0) {
                        mobileHeader.style.transform = "translateY(0)";
                        return;
                    }

                    if (currentScroll > lastMobileScroll) {

                        mobileHeader.style.transform = "translateY(-100%)";

                    } else {

                        mobileHeader.style.transform = "translateY(0)";

                    }

                    lastMobileScroll = currentScroll;

                });

            </script>
    <!-- ./MobileNav -->
    <!-- BtmNavMobile -->
        <nav class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-[#ebc9a270] shadow-[0_-5px_20px_rgba(0,0,0,.08)] z-50">

            <div class="grid grid-cols-5 h-18 py-2">


                {{-- Home --}}
                <a href="{{ route('home') }}"
                   class="flex flex-col justify-center items-center text-[#0f4c3a] hover:text-[#a67c52]
                   {{ request()->routeIs('home') 
                        ? 'text-[#a67c52]' 
                        : 'text-[#0f4c3a] hover:text-[#a67c52]' }}">

                    <i data-lucide="house" class="w-6 h-6"></i>

                    <span class="text-xs mt-1">
                        خانه
                    </span>

                </a>



                {{-- Blog --}}
                <a href="{{ route('blog') }}"
                   class="flex flex-col justify-center items-center text-[#0f4c3a] hover:text-[#a67c52]
                   {{ request()->routeIs('blog') || request()->routeIs('blog.show')
                        ? 'text-[#a67c52]' 
                        : 'text-[#0f4c3a] hover:text-[#a67c52]' }}">

                    <i data-lucide="book-open" class="w-6 h-6"></i>

                    <span class="text-xs mt-1">
                        مقالات
                    </span>

                </a>




                {{-- Calculator --}}
                <a href="{{ route('calculator') }}"
                   class="flex flex-col justify-center items-center
                   {{ request()->routeIs('calculator')
                        ? 'text-[#a67c52]'
                        : 'text-[#a67c52]' }}">

                    <div class="w-12 h-12 rounded-full bg-[#0f4c3a] text-white flex items-center justify-center -mt-8 shadow-xl">

                        <i data-lucide="calculator" class="w-6 h-6"></i>

                    </div>

                    <span class="text-xs mt-1">
                        محاسبه‌گر
                    </span>

                </a>




                {{-- About --}}
                <a href="{{ route('about') }}"
                   class="flex flex-col justify-center items-center text-[#0f4c3a] hover:text-[#a67c52]
                   {{ request()->routeIs('about')
                        ? 'text-[#a67c52]' 
                        : 'text-[#0f4c3a] hover:text-[#a67c52]' }}">

                    <i data-lucide="user-round" class="w-6 h-6"></i>

                    <span class="text-xs mt-1">
                        درباره
                    </span>

                </a>




                {{-- Contact --}}
                <a href="{{ route('contact') }}"
                   class="flex flex-col justify-center items-center text-[#0f4c3a] hover:text-[#a67c52]
                   {{ request()->routeIs('contact')
                        ? 'text-[#a67c52]' 
                        : 'text-[#0f4c3a] hover:text-[#a67c52]' }}">

                    <i data-lucide="phone" class="w-6 h-6"></i>

                    <span class="text-xs mt-1">
                        تماس
                    </span>

                </a>


            </div>

        </nav>
    <!-- ./BtmNavMobile -->