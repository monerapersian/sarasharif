<!-- Previous & Next -->
	<section class="py-10 bg-[#FAF8F4]">

	    <div class="container mx-auto px-6">

	        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-8">

	            {{-- Previous --}}
	            @if($previousPost)

	                <a href="{{ route('blog.show', $previousPost->slug) }}"
	                   class="group bg-white rounded-[28px] border border-[#ebc9a270] p-8 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">

	                    <div class="flex items-center gap-3 text-[#a67c52] mb-6">

	                        <div class="w-12 h-12 rounded-xl bg-[#FAF8F4] flex items-center justify-center">

	                            <i data-lucide="arrow-right"></i>

	                        </div>

	                        <span class="font-medium">
	                            مقاله قبلی
	                        </span>

	                    </div>

	                    <h3 class="text-2xl font-bold text-[#0f4c3a] leading-loose group-hover:text-[#a67c52] transition">

	                        {{ $previousPost->title }}

	                    </h3>

	                </a>

	            @else

	                <div class="bg-white rounded-[28px] border border-[#ebc9a270] p-8 opacity-60">

	                    <div class="flex items-center gap-3 text-gray-400 mb-6">

	                        <div class="w-12 h-12 rounded-xl bg-[#FAF8F4] flex items-center justify-center">

	                            <i data-lucide="arrow-right"></i>

	                        </div>

	                        <span>مقاله قبلی</span>

	                    </div>

	                    <h3 class="text-xl text-gray-400">
	                        مقاله قبلی وجود ندارد.
	                    </h3>

	                </div>

	            @endif


	            {{-- Next --}}
	            @if($nextPost)

	                <a href="{{ route('blog.show', $nextPost->slug) }}"
	                   class="group bg-white rounded-[28px] border border-[#ebc9a270] p-8 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">

	                    <div class="flex justify-end items-center gap-3 text-[#a67c52] mb-6">

	                        <span class="font-medium">
	                            مقاله بعدی
	                        </span>

	                        <div class="w-12 h-12 rounded-xl bg-[#FAF8F4] flex items-center justify-center">

	                            <i data-lucide="arrow-left"></i>

	                        </div>

	                    </div>

	                    <h3 class="text-2xl font-bold text-[#0f4c3a] text-right leading-loose group-hover:text-[#a67c52] transition">

	                        {{ $nextPost->title }}

	                    </h3>

	                </a>

	            @else

	                <div class="bg-white rounded-[28px] border border-[#ebc9a270] p-8 opacity-60">

	                    <div class="flex justify-end items-center gap-3 text-gray-400 mb-6">

	                        <span>مقاله بعدی</span>

	                        <div class="w-12 h-12 rounded-xl bg-[#FAF8F4] flex items-center justify-center">

	                            <i data-lucide="arrow-left"></i>

	                        </div>

	                    </div>

	                    <h3 class="text-xl text-right text-gray-400">
	                        مقاله بعدی وجود ندارد.
	                    </h3>

	                </div>

	            @endif

	        </div>

	    </div>

	</section>
<!-- ./Previous & Next -->