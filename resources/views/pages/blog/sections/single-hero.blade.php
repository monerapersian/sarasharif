<!-- Hero -->
	<section class="pt-24 pb-10 relative overflow-hidden bg-[#FAF8F4]">

	    <!-- Background Shapes -->
	    <div class="absolute top-0 right-0 w-96 h-96 bg-[#ebc9a270] rounded-full blur-3xl"></div>
	    <div class="absolute bottom-0 left-0 w-80 h-80 bg-[#0f4c3a]/5 rounded-full blur-3xl"></div>

	    <div class="container mx-auto px-6 relative z-10">

	        <div class="max-w-4xl mx-auto text-center">

	            <!-- Category -->
	            <span class="inline-flex items-center gap-2 bg-[#0f4c3a] text-white px-5 py-2 rounded-full text-sm">

	                <i data-lucide="folder-open" class="w-4 h-4"></i>

	                {{ optional($post->categories->first())->name }}

	            </span>

	            <!-- Title -->
	            <h1 class="text-2xl lg:text-4xl font-black text-[#0f4c3a] leading-[1.7] mt-8">

	                {{ $post->title }}

	            </h1>

	            <!-- Description -->
	            <p class="text-xl text-gray-600 leading-loose mt-8">

	                {{ $post->excerpt }}

	            </p>

	            <!-- Meta -->
	            <div class="flex flex-wrap justify-center gap-8 mt-10 text-gray-500">

	                <span class="flex items-center gap-2">

	                    <i data-lucide="calendar-days" class="w-5 h-5"></i>

	                    {{ optional($post->published_at)->format('Y/m/d') }}

	                </span>

	                <span class="flex items-center gap-2">

	                    <i data-lucide="clock-3" class="w-5 h-5"></i>

	                    ۷ دقیقه مطالعه

	                </span>

	                <span class="flex items-center gap-2">

	                    <i data-lucide="eye" class="w-5 h-5"></i>

	                    --

	                </span>

	            </div>

	        </div>

	    </div>

	</section>
<!-- ./Hero -->