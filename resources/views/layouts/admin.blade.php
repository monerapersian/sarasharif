<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	    @yield('title', 'پنل مدیریت')
	</title>
	<!-- StylsLinks & TailwindScripts -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

	<body class="bg-[#FAF8F4] text-gray-800 pb-18 lg:pb-0">

		<!-- AdminSidebar -->
			<aside id="sidebar" class="fixed top-0 right-0 h-screen w-72 bg-[#FAF8F4] border-l border-[#ebc9a270] flex flex-col transition-all duration-300 z-50">

			    <!-- Header -->

			    <div class="flex items-center justify-between h-20 px-6 border-b border-[#ebc9a270]">

			        <div id="logoArea" class="overflow-hidden transition-all duration-300">

			            <h2 class="text-2xl font-black text-[#0f4c3a] whitespace-nowrap">
			                سارا شریف
			            </h2>

			            <p class="text-xs text-[#a67c52] whitespace-nowrap">
			                پنل مدیریت
			            </p>

			        </div>

			        <button id="toggleSidebar"
			            class="w-10 h-10 rounded-xl bg-white border border-[#ebc9a270] hover:bg-[#0f4c3a] hover:text-white transition flex items-center justify-center flex-shrink-0">

			            <i id="toggleIcon" data-lucide="panel-right-close" class="w-5 h-5"></i>

			        </button>

			    </div>

			    <!-- Menu -->

			    <nav class="flex-1 overflow-y-auto px-3 py-5">

			        <ul class="space-y-2">

			            <li>

			                <a href="#"
			                    class="group flex items-center gap-4 rounded-2xl bg-[#0f4c3a] text-white px-4 py-3">

			                    <i data-lucide="layout-dashboard" class="w-6 h-6 shrink-0"></i>

			                    <span class="menu-text font-semibold whitespace-nowrap">

			                        داشبورد

			                    </span>

			                </a>

			            </li>

			            <li>

			                <a href="#"
			                    class="group flex items-center gap-4 rounded-2xl px-4 py-3 hover:bg-white hover:text-[#0f4c3a] transition">

			                    <i data-lucide="newspaper" class="w-6 h-6 shrink-0"></i>

			                    <span class="menu-text whitespace-nowrap">

			                        مقالات

			                    </span>

			                    <span class="menu-badge mr-auto text-xs bg-[#ebc9a270] text-[#0f4c3a] px-2 py-1 rounded-full">

			                        58

			                    </span>

			                </a>

			            </li>

			            <li>

			                <a href="#"
			                    class="group flex items-center gap-4 rounded-2xl px-4 py-3 hover:bg-white hover:text-[#0f4c3a] transition">

			                    <i data-lucide="circle-help" class="w-6 h-6 shrink-0"></i>

			                    <span class="menu-text whitespace-nowrap">

			                        سوالات متداول

			                    </span>

			                </a>

			            </li>

			            <li>

			                <a href="#"
			                    class="group flex items-center gap-4 rounded-2xl px-4 py-3 hover:bg-white hover:text-[#0f4c3a] transition">

			                    <i data-lucide="user-round" class="w-6 h-6 shrink-0"></i>

			                    <span class="menu-text whitespace-nowrap">

			                        درباره سارا

			                    </span>

			                </a>

			            </li>

			            <li>

			                <a href="#"
			                    class="group flex items-center gap-4 rounded-2xl px-4 py-3 hover:bg-white hover:text-[#0f4c3a] transition">

			                    <i data-lucide="image" class="w-6 h-6 shrink-0"></i>

			                    <span class="menu-text whitespace-nowrap">

			                        مدیریت تصاویر

			                    </span>

			                </a>

			            </li>

			            <li>

			                <a href="#"
			                    class="group flex items-center gap-4 rounded-2xl px-4 py-3 hover:bg-white hover:text-[#0f4c3a] transition">

			                    <i data-lucide="phone-call" class="w-6 h-6 shrink-0"></i>

			                    <span class="menu-text whitespace-nowrap">

			                        اطلاعات تماس

			                    </span>

			                </a>

			            </li>

			            <li>

			                <a href="#"
			                    class="group flex items-center gap-4 rounded-2xl px-4 py-3 hover:bg-white hover:text-[#0f4c3a] transition">

			                    <i data-lucide="settings" class="w-6 h-6 shrink-0"></i>

			                    <span class="menu-text whitespace-nowrap">

			                        تنظیمات

			                    </span>

			                </a>

			            </li>

			        </ul>

			    </nav>

			    <!-- Footer -->

			    <div class="border-t border-[#ebc9a270] p-3">

			        <a href="#"
			            class="flex items-center gap-4 rounded-2xl px-4 py-3 text-red-500 hover:bg-red-50 transition">

			            <i data-lucide="log-out" class="w-6 h-6 shrink-0"></i>

			            <span class="menu-text whitespace-nowrap">

			                خروج

			            </span>

			        </a>

			    </div>

			</aside>
		<!-- ./AdminSidebar -->

		<main id="mainContent" class="mr-72 transition-all duration-300">
			<x-admin.alert />
		    @yield('content')
		</main>

		


	    <!-- Scripts -->
	    	<script src="https://unpkg.com/lucide@latest"></script>

	    	<script>
			    lucide.createIcons();
			</script>

			<script>

				const sidebar = document.getElementById("sidebar");
				const main = document.getElementById("mainContent");
				const toggle = document.getElementById("toggleSidebar");
				const icon = document.getElementById("toggleIcon");

				const menuTexts = document.querySelectorAll(".menu-text");
				const menuBadges = document.querySelectorAll(".menu-badge");
				const menuLinks = document.querySelectorAll("#sidebar nav a,#sidebar .border-t a");
				const logoArea = document.getElementById("logoArea");

				function collapseSidebar(){

				    sidebar.classList.remove("w-72");
				    sidebar.classList.add("w-24");

				    menuTexts.forEach(el => el.classList.add("hidden"));
				    menuBadges.forEach(el => el.classList.add("hidden"));

				    logoArea.classList.add("hidden");

				    menuLinks.forEach(el => el.classList.add("justify-center"));

				    icon.setAttribute("data-lucide","panel-right-open");

				    lucide.createIcons();

				}

				function expandSidebar(){

				    sidebar.classList.remove("w-24");
				    sidebar.classList.add("w-72");

				    menuTexts.forEach(el => el.classList.remove("hidden"));
				    menuBadges.forEach(el => el.classList.remove("hidden"));

				    logoArea.classList.remove("hidden");

				    menuLinks.forEach(el => el.classList.remove("justify-center"));

				    icon.setAttribute("data-lucide","panel-right-close");

				    lucide.createIcons();

				}

				function checkScreen(){

				    if(window.innerWidth < 1024){

				        collapseSidebar();

				        main.classList.remove("mr-72");
				        main.classList.add("mr-24");

				    }else{

				        expandSidebar();

				        main.classList.remove("mr-24");
				        main.classList.add("mr-72");

				    }

				}

				checkScreen();

				let isMobile = window.innerWidth < 1024;

				window.addEventListener("resize",()=>{

				    const mobile = window.innerWidth < 1024;

				    if(mobile !== isMobile){

				        isMobile = mobile;

				        checkScreen();

				    }

				});

				toggle.addEventListener("click",()=>{

				    // Mobile
				    if(window.innerWidth < 1024){

				        if(sidebar.classList.contains("w-24")){

				            expandSidebar();

				        }else{

				            collapseSidebar();

				        }

				        return;

				    }

				    // Desktop
				    if(sidebar.classList.contains("w-72")){

				        collapseSidebar();

				        main.classList.remove("mr-72");
				        main.classList.add("mr-24");

				    }else{

				        expandSidebar();

				        main.classList.remove("mr-24");
				        main.classList.add("mr-72");

				    }

				});

			</script>

	</body>

</html>