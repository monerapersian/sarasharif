<!-- Search & Filters -->
	<section id="articles" class="py-14 bg-white border-y border-[#ebc9a270]">

	    <div class="container mx-auto px-6">

	        <!-- Search -->
	        <div class="max-w-3xl mx-auto">

	            <form action="{{ route('blog') }}" method="GET">

	                @if(request('category'))
	                    <input
	                        type="hidden"
	                        name="category"
	                        value="{{ request('category') }}">
	                @endif

	                <div class="relative">

	                    <i data-lucide="search"
	                        class="absolute right-6 top-1/2 -translate-y-1/2 w-6 h-6 text-gray-400"></i>

	                    <input
	                        type="text"
	                        name="search"
	                        value="{{ request('search') }}"
	                        placeholder="عنوان مقاله، موضوع یا کلمه کلیدی را جستجو کنید..."
	                        class="w-full h-16 rounded-2xl bg-[#FAF8F4] border border-[#ebc9a270] pr-16 pl-6 text-lg outline-none transition-all duration-300 focus:border-[#0f4c3a] focus:ring-4 focus:ring-[#0f4c3a]/10">

	                </div>

	            </form>

	        </div>

	        <!-- Filters -->
	        <div class="flex flex-wrap justify-center gap-4 mt-10">

	            {{-- همه --}}
	            <a
	                href="{{ route('blog', request()->except('category')) }}"
	                class="px-6 py-3 rounded-full transition-all duration-300
	                {{ request()->filled('category')
	                    ? 'bg-white border border-[#ebc9a270] text-[#0f4c3a] hover:bg-[#a67c52] hover:text-white hover:border-[#a67c52]'
	                    : 'bg-[#0f4c3a] text-white shadow-lg shadow-[#0f4c3a]/10' }}">

	                همه

	            </a>

	            @foreach($categories as $category)

	                <a
	                    href="{{ route('blog', array_merge(request()->except('page'), ['category' => $category->slug])) }}"
	                    class="px-6 py-3 rounded-full transition-all duration-300
	                    {{ request('category') == $category->slug
	                        ? 'bg-[#0f4c3a] text-white shadow-lg shadow-[#0f4c3a]/10'
	                        : 'bg-white border border-[#ebc9a270] text-[#0f4c3a] hover:bg-[#a67c52] hover:text-white hover:border-[#a67c52]' }}">

	                    {{ $category->name }}

	                </a>

	            @endforeach

	        </div>

	    </div>

	</section>
<!-- ./Search & Filters -->