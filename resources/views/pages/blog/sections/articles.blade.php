	<!-- Articles -->
		<section class="py-20 bg-[#FAF8F4]">

		    <div class="container mx-auto px-6">

		        <!-- Header -->
		        <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-12">

		            <div>

		                <h2 class="text-3xl font-black text-[#0f4c3a]">
		                    آخرین مقالات
		                </h2>

		                <p class="text-gray-500 mt-2">

						    نمایش

						    <span class="font-bold text-[#0f4c3a]">
						        {{ $posts->firstItem() ?? 0 }}
						    </span>

						    تا

						    <span class="font-bold text-[#0f4c3a]">
						        {{ $posts->lastItem() ?? 0 }}
						    </span>

						    از

						    <span class="font-bold text-[#0f4c3a]">
						        {{ $posts->total() }}
						    </span>

						    مقاله

						</p>

		            </div>

		            <button class="flex items-center gap-2 border border-[#ebc9a270] rounded-xl px-5 py-3 hover:border-[#0f4c3a] transition">

		                <i data-lucide="arrow-up-down" class="w-4 h-4"></i>

		                جدیدترین

		            </button>

		        </div>

		        <!-- Grid -->
				<div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">

				    @forelse($posts as $post)

				        <article class="group flex flex-col bg-white rounded-[28px] overflow-hidden border border-[#ebc9a270] hover:shadow-2xl transition duration-500">

				            <!-- Image -->
				            <div class="relative overflow-hidden">

				                <img
				                    src="{{ $post->featured_image ? asset('storage/' . $post->featured_image) : asset('images/article-placeholder.jpg') }}"
				                    alt="{{ $post->title }}"
				                    class="w-full h-64 object-cover group-hover:scale-105 transition duration-700">

				                @if($post->categories->isNotEmpty())
				                    <span class="absolute top-5 right-5 bg-[#a67c52] text-white text-xs px-4 py-2 rounded-full">
				                        {{ $post->categories->first()->name }}
				                    </span>
				                @endif

				            </div>

				            <!-- Body -->
				            <div class="flex flex-col flex-1 p-7">

				                <!-- Meta -->
				                <div class="flex justify-between text-sm text-gray-500 mb-5">

				                    <span class="flex items-center gap-2">
				                        <i data-lucide="clock-3" class="w-4 h-4"></i>
				                        ۷ دقیقه
				                    </span>

				                    <span class="flex items-center gap-2">
				                        <i data-lucide="calendar-days" class="w-4 h-4"></i>
				                        {{ optional($post->published_at)->format('Y/m/d') }}
				                    </span>

				                </div>

				                <!-- Title -->
				                <h3 class="text-2xl font-bold text-[#0f4c3a] leading-9 mb-5 group-hover:text-[#a67c52] transition">
				                    {{ $post->title }}
				                </h3>

				                <!-- Description -->
				                <p class="flex-1 text-gray-600 leading-8 mb-8">
				                    {{ $post->excerpt }}
				                </p>

				                <!-- Button -->
				                <a href="{{ route('blog.show', $post->slug) }}"
				                    class="flex justify-center items-center gap-3 w-full bg-[#0f4c3a] hover:bg-[#8b6743] text-white rounded-2xl py-4 transition-all duration-300">

				                    مطالعه مقاله

				                    <i data-lucide="arrow-left" class="group-hover:-translate-x-1 transition"></i>

				                </a>

				            </div>

				        </article>

				    @empty

				        <div class="md:col-span-2 xl:col-span-3">

				            <div class="bg-white border border-[#ebc9a270] rounded-3xl p-12 text-center">

				                <h3 class="text-2xl font-bold text-[#0f4c3a]">
				                    مقاله‌ای یافت نشد
				                </h3>

				                <p class="text-gray-500 mt-4">
				                    نتیجه‌ای برای جستجو یا فیلتر انتخاب‌شده وجود ندارد.
				                </p>

				            </div>

				        </div>

				    @endforelse

				</div>

		    </div>

		</section>
	<!-- ./Articles -->