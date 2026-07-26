<!-- CoverImage -->
	<section class="pb-12 bg-[#FAF8F4]">

	    <div class="container mx-auto px-6">

	        <div class="max-w-6xl mx-auto">

	            <img
	                src="{{ $post->featured_image ? asset('storage/' . $post->featured_image) : asset('images/article-placeholder.jpg') }}"
	                alt="{{ $post->title }}"
	                class="w-full h-[260px] md:h-[450px] lg:h-[550px] object-cover rounded-[36px] shadow-2xl border border-[#ebc9a270]">

	        </div>

	    </div>

	</section>
<!-- ./CoverImage -->

<!-- Article -->
	<section class="bg-[#FAF8F4] pb-20">

	    <div class="container mx-auto px-6">

	        <article class="max-w-6xl mx-auto bg-white rounded-[36px] border border-[#ebc9a270] shadow-sm p-8 md:p-14">

	            <div
	                class="prose prose-lg max-w-none
	                       prose-headings:text-[#0f4c3a]
	                       prose-headings:font-black
	                       prose-p:leading-[2.4]
	                       prose-li:leading-[2.4]
	                       prose-strong:text-[#0f4c3a]
	                       prose-a:text-[#a67c52]
	                       prose-img:rounded-2xl
	                       prose-img:shadow-lg">

	                {!! $post->content !!}

	            </div>

	        </article>

	    </div>

	</section>
<!-- ./Article -->