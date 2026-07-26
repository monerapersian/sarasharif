<!-- Pagination -->
	@if ($posts->hasPages())

		<section class="pb-24 bg-[#FAF8F4]">

		    <div class="container mx-auto px-6">

		        <div class="border-t border-[#ebc9a270] pt-12">

		            <nav class="flex flex-wrap justify-center items-center gap-3">

		                {{-- Previous --}}
		                @if ($posts->onFirstPage())

		                    <span
		                        class="flex items-center gap-2 px-5 py-3 rounded-xl border border-[#ebc9a270] bg-gray-100 text-gray-400 cursor-not-allowed">

		                        <i data-lucide="chevron-right" class="w-5 h-5"></i>

		                        قبلی

		                    </span>

		                @else

		                    <a href="{{ $posts->previousPageUrl() }}"
		                        class="flex items-center gap-2 px-5 py-3 rounded-xl border border-[#ebc9a270] bg-white text-[#0f4c3a] hover:bg-[#0f4c3a] hover:text-white hover:border-[#0f4c3a] transition-all duration-300">

		                        <i data-lucide="chevron-right" class="w-5 h-5"></i>

		                        قبلی

		                    </a>

		                @endif


		                @php
		                    $current = $posts->currentPage();
		                    $last = $posts->lastPage();
		                @endphp


		                {{-- First Page --}}
		                @if($current > 3)

		                    <a href="{{ $posts->url(1) }}"
		                        class="w-12 h-12 flex items-center justify-center rounded-xl bg-white border border-[#ebc9a270] text-[#0f4c3a] hover:bg-[#a67c52] hover:text-white transition">

		                        1

		                    </a>

		                @endif


		                {{-- Left Dots --}}
		                @if($current > 4)

		                    <span class="px-2 text-gray-400 font-bold">

		                        ...

		                    </span>

		                @endif


		                {{-- Around Current --}}
		                @for($i = max(1, $current-1); $i <= min($last, $current+1); $i++)

		                    @if($i == $current)

		                        <span
		                            class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#0f4c3a] text-white font-bold shadow-lg shadow-[#0f4c3a]/20">

		                            {{ $i }}

		                        </span>

		                    @else

		                        <a href="{{ $posts->url($i) }}"
		                            class="w-12 h-12 flex items-center justify-center rounded-xl bg-white border border-[#ebc9a270] text-[#0f4c3a] hover:bg-[#a67c52] hover:text-white hover:border-[#a67c52] transition-all duration-300">

		                            {{ $i }}

		                        </a>

		                    @endif

		                @endfor


		                {{-- Right Dots --}}
		                @if($current < $last-3)

		                    <span class="px-2 text-gray-400 font-bold">

		                        ...

		                    </span>

		                @endif


		                {{-- Last Page --}}
		                @if($current < $last-2)

		                    <a href="{{ $posts->url($last) }}"
		                        class="w-12 h-12 flex items-center justify-center rounded-xl bg-white border border-[#ebc9a270] text-[#0f4c3a] hover:bg-[#a67c52] hover:text-white transition">

		                        {{ $last }}

		                    </a>

		                @endif


		                {{-- Next --}}
		                @if($posts->hasMorePages())

		                    <a href="{{ $posts->nextPageUrl() }}"
		                        class="flex items-center gap-2 px-5 py-3 rounded-xl border border-[#ebc9a270] bg-white text-[#0f4c3a] hover:bg-[#0f4c3a] hover:text-white hover:border-[#0f4c3a] transition-all duration-300">

		                        بعدی

		                        <i data-lucide="chevron-left" class="w-5 h-5"></i>

		                    </a>

		                @else

		                    <span
		                        class="flex items-center gap-2 px-5 py-3 rounded-xl border border-[#ebc9a270] bg-gray-100 text-gray-400 cursor-not-allowed">

		                        بعدی

		                        <i data-lucide="chevron-left" class="w-5 h-5"></i>

		                    </span>

		                @endif

		            </nav>

		        </div>

		    </div>

		</section>

	@endif
<!-- ./Pagination -->