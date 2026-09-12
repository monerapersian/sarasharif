@extends('layouts.admin')

@section('title', 'اضافه کردن مقاله')

@section('content')
	<!-- PageHeader -->
		<section class="px-5 pt-8 pb-6">

		    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

		        <!-- Title -->

		        <div>

		            <!-- Breadcrumb -->

		            <nav class="flex items-center gap-2 text-sm text-gray-500 mb-3">

		                <a href="{{ route('admin.dashboard') }}"
		                   class="hover:text-[#0f4c3a] transition">

		                    داشبورد

		                </a>

		                <i data-lucide="chevron-left" class="w-4 h-4"></i>

		                <a href="{{ route('admin.posts.index') }}"
		                   class="hover:text-[#0f4c3a] transition">

		                    مقالات

		                </a>

		                <i data-lucide="chevron-left" class="w-4 h-4"></i>

		                <span class="font-semibold text-[#0f4c3a]">

		                    افزودن مقاله جدید

		                </span>

		            </nav>

		            <!-- Heading -->

		            <div class="flex items-center gap-3 flex-wrap">

		                <h1 class="text-3xl font-black text-[#0f4c3a]">

		                    افزودن مقاله جدید

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

		            <a href="{{ route('admin.posts.index') }}"
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
		<section class="px-5 pb-8">

		    <div class="bg-white rounded-3xl border border-[#ebc9a270] shadow-sm p-8 space-y-8">


			    <form action="{{ route('admin.posts.store') }}"
			          method="POST"
			          enctype="multipart/form-data"
			          class="space-y-8">

			        @csrf
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

			            <input type="text" name="title" value="{{ old('title') }}" placeholder="عنوان مقاله را وارد کنید..." class="w-full h-14 rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] px-5 outline-none focus:border-[#0f4c3a] transition">

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
							    value="{{ old('slug') }}"
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
			                class="flex flex-col items-center justify-center h-64 rounded-3xl border-2 border-dashed border-[#ebc9a270] bg-[#FAF8F4] cursor-pointer hover:border-[#0f4c3a] hover:bg-[#f8f5ef] transition">

			                <i data-lucide="image-plus"
			                   class="w-14 h-14 text-[#a67c52] mb-4"></i>

			                <h3 class="font-bold text-[#0f4c3a] mb-2">

			                    تصویر را انتخاب کنید

			                </h3>

			                <p class="text-sm text-gray-500">

			                    یا فایل را اینجا رها کنید

			                </p>

			                <p id="selected-image-name" class="mt-4 text-sm text-gray-500">
							    هنوز تصویری انتخاب نشده است.
							</p>

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
							        <option
							            value="{{ $category->id }}"
							            {{ old('category') == $category->id ? 'selected' : '' }}>
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

			                    <option value="draft">پیش‌نویس</option>

								<option value="published">منتشر شود</option>

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
			                class="w-full rounded-2xl border border-[#ebc9a270] bg-[#FAF8F4] p-5 outline-none focus:border-[#0f4c3a] resize-none">{{ old('excerpt') }}</textarea>

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
			                class="w-full rounded-b-2xl border border-t-0 border-[#ebc9a270] bg-white p-6 outline-none resize-none leading-9">{{ old('content') }}</textarea>

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
							    {{ old('is_featured') ? 'checked' : '' }}
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

					        <button
					            type="button"
					            class="inline-flex items-center gap-2 px-6 h-12 rounded-2xl bg-[#a67c52] text-white hover:bg-[#8d6845] transition shadow-sm cursor-pointer">

					            <i data-lucide="save" class="w-5 h-5"></i>

					            ذخیره پیش‌نویس

					        </button>

					        <!-- Publish -->

					        <button
					            type="submit"
					            class="inline-flex items-center gap-2 px-8 h-12 rounded-2xl bg-[#0f4c3a] text-white hover:bg-[#14624a] transition shadow-lg shadow-[#0f4c3a]/20 cursor-pointer">

					            <i data-lucide="rocket" class="w-5 h-5"></i>

					            انتشار مقاله

					        </button>

					    </div>

					</div>	
				</form>

		    </div>

		</section>
	<!-- ./ArticleForm -->
	<script>
		document.addEventListener('DOMContentLoaded', function () {

		    const input = document.getElementById('featured_image');
		    const fileName = document.getElementById('selected-image-name');

		    input.addEventListener('change', function () {

		        if (this.files.length) {
		            fileName.textContent = this.files[0].name;
		            fileName.classList.remove('text-gray-500');
		            fileName.classList.add('text-[#0f4c3a]', 'font-semibold');
		        } else {
		            fileName.textContent = 'هنوز تصویری انتخاب نشده است.';
		            fileName.classList.remove('text-[#0f4c3a]', 'font-semibold');
		            fileName.classList.add('text-gray-500');
		        }

		    });

		});
	</script>
@endsection