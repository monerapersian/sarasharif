@extends('layouts.admin')

@section('title', 'ویرایش مقاله ')

@section('content')
	<!-- PageHeader -->
		<section class="px-8 pt-8 pb-6">

		    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

		        <!-- Title -->

		        <div>

		            <!-- Breadcrumb -->

		            <nav class="flex items-center gap-2 text-sm text-gray-500 mb-3">

		                <a href="#"
		                   class="hover:text-[#0f4c3a] transition">

		                    داشبورد

		                </a>

		                <i data-lucide="chevron-left" class="w-4 h-4"></i>

		                <a href="#"
		                   class="hover:text-[#0f4c3a] transition">

		                    مقالات

		                </a>

		                <i data-lucide="chevron-left" class="w-4 h-4"></i>

		                <span class="font-semibold text-[#0f4c3a]">

		                    ویرایش مقاله

		                </span>

		            </nav>

		            <!-- Heading -->

		            <div class="flex items-center gap-3 flex-wrap">

		                <h1 class="text-3xl font-black text-[#0f4c3a]">

		                    ویرایش مقاله

		                </h1>

		                <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm font-semibold">

		                    Draft

		                </span>

		            </div>

		            <p class="mt-3 text-gray-500 leading-7">

		                عنوان، تصویر، محتوای مقاله و اطلاعات سئو را وارد کنید و در پایان مقاله را منتشر نمایید.

		            </p>

		        </div>

		        <!-- Back Button -->

		        <div>

		            <a href="#"
		               class="inline-flex items-center gap-3 px-6 py-4 rounded-2xl border border-[#ebc9a270] bg-white text-[#0f4c3a] hover:bg-[#FAF8F4] transition shadow-sm">

		                <i data-lucide="arrow-right"></i>

		                <span class="font-semibold">

		                    بازگشت به لیست مقالات

		                </span>

		            </a>

		        </div>

		    </div>

		</section>
	<!-- ./PageHeader -->

	<!-- ArticleForm -->
		<section class="px-8 pb-8">

		    <div class="bg-white rounded-3xl border border-[#ebc9a270] shadow-sm p-8 space-y-8">


			    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="space-y-8">

				    @csrf
				    @method('PUT')
			        @if ($errors->any())
					    <div class="rounded-2xl bg-red-50 border border-red-200 p-5">
					        <ul class="space-y-2 text-red-600">
					            @foreach ($errors->all() as $error)
					                <li>• {{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif

			        <!-- ===================== -->
			        <!-- Title -->
			        <!-- ===================== -->

			        <div>

			            <label class="block text-[#0f4c3a] font-bold mb-3">

			                عنوان مقاله

			            </label>

			            <input type="text" name="title" value="{{ old('title', $post->title) }}" placeholder="عنوان مقاله را وارد کنید..." class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-5 outline-none focus:border-[#0f4c3a] transition">

			        </div>

			        <!-- ===================== -->
			        <!-- Slug -->
			        <!-- ===================== -->

			        <div>

			            <label class="block text-[#0f4c3a] font-bold mb-3">

			                لینک (Slug)

			            </label>

			            <div class="flex items-center rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] overflow-hidden">

			                <span class="px-5 text-gray-500 whitespace-nowrap">

			                    sarasharif.ir/blog/

			                </span>

			                <input
							    type="text"
							    name="slug"
							    value="{{ old('slug', $post->slug) }}"
							    placeholder="article-slug"
							    class="flex-1 h-14 bg-transparent outline-none px-4">

			            </div>

			        </div>

			        <!-- ===================== -->
			        <!-- Featured Image -->
			        <!-- ===================== -->

			        <div>

			            <label class="block text-[#0f4c3a] font-bold mb-3">

			                تصویر شاخص

			            </label>

			            <label
			            	id="image-upload-box"
			                class="flex flex-col items-center justify-center h-64 rounded-3xl border-2 border-dashed border-[#ebc9a270] bg-[#FAF8F4] cursor-pointer hover:border-[#0f4c3a] hover:bg-[#f8f5ef] transition p-5">

			                <i data-lucide="image-plus"
			                   class="w-10 h-10 text-[#a67c52] mb-4"></i>

							<!-- @if($post->featured_image)
							    <div class="mb-2">
							        <img
							            src="{{ asset('storage/' . $post->featured_image) }}"
							            alt="{{ $post->title }}"
							            class="w-56 rounded-2xl border border-[#ebc9a270] shadow-sm">
							    </div>
							@endif -->

							<div id="image-preview-container" class="{{ $post->featured_image ? '' : 'hidden' }}">
							    <img
							        id="image-preview"
							        src="{{ $post->featured_image ? asset('storage/'.$post->featured_image) : '' }}"
							        alt="{{ $post->title }}"
							        class="w-56 rounded-2xl border border-[#ebc9a270] shadow-sm mb-3">

							    <p
							        id="selected-image-name"
							        class="text-sm text-gray-500">
							        {{ $post->featured_image ? basename($post->featured_image) : '' }}
							    </p>

							    <p
							        id="image-selected-message"
							        class="hidden mt-2 text-sm font-medium text-green-600">
							        ✅ تصویر جدید انتخاب شد. پس از بروزرسانی مقاله ذخیره خواهد شد.
							    </p>
							</div>

			                <input
							    type="file"
							    id="featured_image"
							    name="featured_image"
							    accept="image/*"
							    class="hidden">

			            </label>

			        </div>

			        <!-- ===================== -->
			        <!-- Row -->
			        <!-- ===================== -->

			        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

			            <!-- Category -->

			            <div>

			                <label class="block text-[#0f4c3a] font-bold mb-3">

			                    دسته‌بندی

			                </label>

			                <select name="category"
							    class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-4 outline-none focus:border-[#0f4c3a]">

							    @foreach($categories as $category)
								    <option value="{{ $category->id }}"
								        {{ old('category', $post->categories->first()?->id) == $category->id ? 'selected' : '' }}>
								        {{ $category->name }}
								    </option>
								@endforeach

							</select>

			            </div>

			            <!-- Status -->

			            <div>

			                <label class="block text-[#0f4c3a] font-bold mb-3">

			                    وضعیت

			                </label>

			                <select name="status" 
			                    class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-4 outline-none focus:border-[#0f4c3a]">

			                    <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>
								    پیش‌نویس
								</option>

								<option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>
								    منتشر شده
								</option>

			                </select>

			            </div>

			            <!-- Publish Date -->

			            <div>

			                <label class="block text-[#0f4c3a] font-bold mb-3">

			                    تاریخ انتشار

			                </label>

			                <input
							    type="date"
							    name="published_at"
							    value="{{ old('published_at') }}"
							    class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-4 outline-none focus:border-[#0f4c3a]">

			            </div>

			        </div>

			        <!-- ===================== -->
			        <!-- Short Description -->
			        <!-- ===================== -->

			        <div>

			            <label class="block text-[#0f4c3a] font-bold mb-3">

			                توضیح کوتاه

			            </label>

			            <textarea
			            	name="excerpt"
			                rows="4"
			                placeholder="خلاصه‌ای از مقاله..."
			                class="w-full rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] p-5 outline-none focus:border-[#0f4c3a] resize-none">{{ old('excerpt', $post->excerpt) }}</textarea>

			        </div>

			        <!-- ===================== -->
			        <!-- Editor -->
			        <!-- ===================== -->

			        <div>

			            <label class="block text-[#0f4c3a] font-bold mb-3">

			                متن مقاله

			            </label>

			            <!-- Toolbar -->

			            <div class="flex flex-wrap items-center gap-2 bg-[#FAF8F4] border border-[#ebc9a270] rounded-t-2xl p-3">

			                <button class="w-10 h-10 rounded-xl hover:bg-white transition font-bold">
			                    B
			                </button>

			                <button class="w-10 h-10 rounded-xl hover:bg-white transition italic">
			                    I
			                </button>

			                <button class="px-3 h-10 rounded-xl hover:bg-white transition">
			                    H2
			                </button>

			                <button class="px-3 h-10 rounded-xl hover:bg-white transition">
			                    H3
			                </button>

			                <button class="w-10 h-10 rounded-xl hover:bg-white transition">
			                    •
			                </button>

			                <button class="w-10 h-10 rounded-xl hover:bg-white transition">
			                    "
			                </button>

			                <button class="w-10 h-10 rounded-xl hover:bg-white transition">

			                    <i data-lucide="image"></i>

			                </button>

			                <button class="w-10 h-10 rounded-xl hover:bg-white transition">

			                    <i data-lucide="link"></i>

			                </button>

			            </div>

			            <!-- Editor -->

			            <textarea
			            	name="content"
			                rows="18"
			                placeholder="متن کامل مقاله را اینجا بنویسید..."
			                class="w-full rounded-b-2xl border border-t-0 border-[#ebc9a270] bg-white p-6 outline-none resize-none leading-9">{{ old('content', $post->content) }}</textarea>

			        </div>

			        <!-- ===================== -->
					<!-- Action Buttons -->
					<!-- ===================== -->

					<div class="flex flex-wrap items-center justify-between gap-4 pt-6 border-t border-[#ebc9a270]">

					    <!-- Featured Article -->

					    <label class="inline-flex items-center gap-3 cursor-pointer select-none">

					    	<input
							    type="checkbox"
							    name="is_featured"
							    value="1"
							    {{ old('is_featured', $post->is_featured) ? 'checked' : '' }}
							    class="peer hidden">

					        <div class="w-6 h-6 rounded-lg border-2 border-[#a67c52] flex items-center justify-center transition peer-checked:bg-[#0f4c3a] peer-checked:border-[#0f4c3a] peer-checked:text-white text-transparent">

					            <i data-lucide="check" class="w-4 h-4 transition"></i>

					        </div>

					        <span class="font-semibold text-[#0f4c3a]">

					            مقاله ویژه

					        </span>

					    </label>

					    <!-- Buttons -->

					    <div class="flex flex-wrap items-center gap-4">

					        <!-- Save Draft -->

					        <!-- <button
					            type="button"
					            class="inline-flex items-center gap-2 px-6 h-12 rounded-2xl bg-[#a67c52] text-white hover:bg-[#8d6845] transition shadow-sm cursor-pointer">

					            <i data-lucide="save" class="w-5 h-5"></i>

					            ذخیره پیش‌نویس

					        </button> -->

					        <!-- Publish -->

					        <button
					            type="submit"
					            class="inline-flex items-center gap-2 px-8 h-12 rounded-2xl bg-[#0f4c3a] text-white hover:bg-[#14624a] transition shadow-lg shadow-[#0f4c3a]/20 cursor-pointer">

					            <i data-lucide="rocket" class="w-5 h-5"></i>

					            بروزرسانی مقاله

					        </button>

					    </div>

					</div>	
				</form>

		    </div>

		</section>
	<!-- ./ArticleForm -->
	<script>
		document.addEventListener('DOMContentLoaded', () => {

		    const input = document.getElementById('featured_image');
		    const previewContainer = document.getElementById('image-preview-container');
		    const preview = document.getElementById('image-preview');
		    const fileName = document.getElementById('selected-image-name');
		    const message = document.getElementById('image-selected-message');

		    input.addEventListener('change', function () {

		        if (!this.files.length) return;

		        const file = this.files[0];

		        fileName.textContent = file.name;

		        message.classList.remove('hidden');

		        preview.src = URL.createObjectURL(file);

		        previewContainer.classList.remove('hidden');

		    });

		});
	</script>
@endsection