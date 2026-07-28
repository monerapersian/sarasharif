@if($featuredPost)

	<!-- Featured Article -->
		<section class="py-24 bg-[#FAF8F4]">

		    <div class="container mx-auto px-6">

		        <!-- Section Title -->
		        <div class="mb-10">

		            <span
		                class="inline-flex items-center gap-2 bg-[#ebc9a270] text-[#0f4c3a] px-4 py-2 rounded-full text-sm font-semibold">

		                <i data-lucide="star" class="w-4 h-4"></i>

		                مقاله منتخب هفته

		            </span>

		        </div>

		        <!-- Card -->
		        <article
		            class="group bg-white rounded-[32px] overflow-hidden border border-[#ebc9a270] shadow-sm hover:shadow-2xl transition-all duration-500">

		            <div class="grid lg:grid-cols-2">

		                <!-- Image -->
		                <div class="relative overflow-hidden">

		                    @if($featuredPost->featured_image)

		                        <img
		                            src="{{ asset('storage/' . $featuredPost->featured_image) }}"
		                            alt="{{ $featuredPost->title }}"
		                            class="w-full h-full min-h-[420px] object-cover group-hover:scale-105 transition duration-700">

		                    @endif

		                    <!-- Category -->
		                    @if($featuredPost->categories->isNotEmpty())

		                        <span
		                            class="absolute top-6 right-6 bg-[#a67c52] text-white px-4 py-2 rounded-full text-sm">

		                            {{ $featuredPost->categories->first()->name }}

		                        </span>

		                    @endif

		                </div>

		                <!-- Content -->
		                <div class="p-10 lg:p-14 flex flex-col justify-center">

		                    <!-- Meta -->
		                    <div class="flex flex-wrap gap-6 text-sm text-gray-500 mb-6">

		                        <span class="flex items-center gap-2">

		                            <i data-lucide="calendar-days" class="w-4 h-4"></i>
		                            
		                            {{ jalali($featuredPost->published_at ?? $featuredPost->created_at, '%Y/%m/%d') }}

		                        </span>

		                    </div>

		                    <!-- Title -->
		                    <h2 class="text-4xl font-black text-[#0f4c3a] leading-relaxed">

		                        {{ $featuredPost->title }}

		                    </h2>

		                    <!-- Description -->
		                    <p class="mt-8 text-gray-600 leading-9">

		                        {{ $featuredPost->excerpt }}

		                    </p>

		                    <!-- Button -->
		                    <div class="mt-10">

		                        <a href="{{ route('blog.show', $featuredPost->slug) }}"
		                            class="inline-flex items-center gap-3 bg-[#0f4c3a] hover:bg-[#8b6743] text-white px-8 py-4 rounded-2xl transition-all duration-300 hover:-translate-y-1">

		                            مطالعه مقاله

		                            <i data-lucide="arrow-left"></i>

		                        </a>

		                    </div>

		                </div>

		            </div>

		        </article>

		    </div>

		</section>
	<!-- ./Featured Article -->

@endif