@extends('admin.masterview')

@section('title')
    <title>Admin | Bán Hàng | Thêm Sản Phẩm</title>
@endsection

@section('main-content')
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <h3 class="mb-4">Thêm Mới Sản Phẩm</h3>
                <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-container vertical">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                            <div class="lg:col-span-2">
                                <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                    <div class="card-body">
                                        <h5>Thông Tin Cơ Bản</h5>
                                        <p class="mb-6"></p>
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2">Tên Sản Phẩm</label>
                                            <div>
                                                <input class="input" type="text" value="{{ $product->name }}"
                                                    name="name" autocomplete="off"
                                                    placeholder="Điền tên sản phẩm tại đây" id="title"
                                                    onkeyup="ChangeToSlug()">
                                            </div>
                                            @error('name')
                                                <div class="alert alert-dismissible fade show alert-danger">
                                                    <div class="alert-content">
                                                        <div>{{ $message }}</div>
                                                    </div>
                                                    <button type="button" data-bs-dismiss="alert">
                                                        <span class="close-btn">
                                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                                viewBox="0 0 20 20" aria-hidden="true" height="1em"
                                                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            @enderror
                                        </div>

                                        <input class="input" type="text" name="slug" id="slug"
                                            value="{{ $product->slug }}" autocomplete="off" placeholder="" hidden>
                                        <div class="card adaptable-card pb-6 py-4 ">
                                            <div class="card-body">
                                                <h5></h5>
                                                <p class="mb-6"></p>
                                            </div>
                                        </div>
                                        <h5>Mô Tả Sản Phẩm </h5>
                                        <br>
                                        <div>
                                            <textarea name="description" id="editor1" cols="30" rows="10">{{ $product->description }}</textarea>
                                        </div>
                                        @error('description')
                                            <div class="alert alert-dismissible fade show alert-danger">
                                                <div class="alert-content">
                                                    <div>{{ $message }}</div>
                                                </div>
                                                <button type="button" data-bs-dismiss="alert">
                                                    <span class="close-btn">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                    <div class="card-body">
                                        <h5>Giá cả</h5>
                                        <p class="mb-6">Giá và Giá khuyến mãi cho sản phẩm</p>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="col-span-1">
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Giá Gốc</label>
                                                    <div>
                                                        <span class="input-wrapper undefined">
                                                            <div class="input-suffix-start"> VND</div>
                                                            <input class="input pl-8" type="text" name="price"
                                                                autocomplete="off" placeholder="Nhập giá gốc"
                                                                value="{{ $product->price }}" inputmode="numeric">
                                                        </span>
                                                    </div>
                                                    @error('price')
                                                        <div class="alert alert-dismissible fade show alert-danger">
                                                            <div class="alert-content">
                                                                <div>{{ $message }}</div>
                                                            </div>
                                                            <button type="button" data-bs-dismiss="alert">
                                                                <span class="close-btn">
                                                                    <svg stroke="currentColor" fill="currentColor"
                                                                        stroke-width="0" viewBox="0 0 20 20" aria-hidden="true"
                                                                        height="1em" width="1em"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-span-1">
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Giá Khuyến Mãi</label>
                                                    <div>
                                                        <span class="input-wrapper undefined">
                                                            <div class="input-suffix-start"> VND</div>
                                                            <input class="input pl-8" type="text" name="sale_price"
                                                                autocomplete="off" placeholder="Nhập giá khuyến mãi"
                                                                value="{{ $product->sale_price }}" inputmode="numeric">
                                                        </span>
                                                    </div>
                                                    @error('sale_price')
                                                        <div class="alert alert-dismissible fade show alert-danger">
                                                            <div class="alert-content">
                                                                <div>{{ $message }}</div>
                                                            </div>
                                                            <button type="button" data-bs-dismiss="alert">
                                                                <span class="close-btn">
                                                                    <svg stroke="currentColor" fill="currentColor"
                                                                        stroke-width="0" viewBox="0 0 20 20"
                                                                        aria-hidden="true" height="1em" width="1em"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-span-1">
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Số Lượng</label>
                                                    <div>
                                                        <span class="input-wrapper undefined">
                                                            <input class="input" type="number" name="quantity"
                                                                autocomplete="off"
                                                                placeholder="Nhập vào số lượng trong kho"
                                                                value="{{ $product->quantity }}" inputmode="numeric">
                                                        </span>
                                                    </div>
                                                </div>
                                                @error('quantity')
                                                    <div class="alert alert-dismissible fade show alert-danger">
                                                        <div class="alert-content">
                                                            <div>{{ $message }}</div>
                                                        </div>
                                                        <button type="button" data-bs-dismiss="alert">
                                                            <span class="close-btn">
                                                                <svg stroke="currentColor" fill="currentColor"
                                                                    stroke-width="0" viewBox="0 0 20 20" aria-hidden="true"
                                                                    height="1em" width="1em"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card adaptable-card pb-6 py-4 ">
                                    <div class="card-body">
                                        <h5></h5>
                                        <p class="mb-6"></p>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="col-span-1">
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Danh Mục</label>
                                                    <div>
                                                        <select class="input js-example-basic-single" name="category_id">
                                                            @foreach ($categories as $item)
                                                                <option value="{{ $item->id }}"
                                                                    {{ $item->id == $product->category_id ? 'selected' : '' }}>
                                                                    {{ $item->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-1">
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Nhãn Hàng</label>
                                                    <div>
                                                        <select class="input js-example-basic-single" name="brand_id">
                                                            @foreach ($brands as $item)
                                                                <option value="{{ $item->id }}"
                                                                    {{ $item->id == $product->brand_id ? 'checked' : '' }}>
                                                                    {{ $item->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-1">
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Tag</label>
                                                    <div>
                                                        <select class="input js-example-basic-single" name="tag">
                                                            <option value="0"
                                                                {{ $item->tag == 0 ? 'selected' : '' }}>Normal</option>
                                                            <option value="1"
                                                                {{ $item->tag == 1 ? 'selected' : '' }}>Trending</option>
                                                            <option value="2"
                                                                {{ $item->tag == 2 ? 'selected' : '' }}>Should Try</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="col-span-1">
                                                <div class="form-item vertical gap-2">
                                                    <label class="checkbox-label">
                                                        <input class="checkbox" type="checkbox" name="fearture"
                                                            value="1" {{ $product->fearture == 1 ? 'checked' : '' }}>
                                                        <span>Fearture</span>
                                                    </label>
                                                </div>
                                                <div class="form-item vertical gap-2">
                                                    <div class="form-item vertical gap-2">
                                                        <label class="checkbox-label">
                                                            <input class="checkbox" type="checkbox" name="banner"
                                                                value="1"
                                                                {{ $product->banner == 1 ? 'checked' : '' }}>
                                                            <span>Banner</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-1">
                                <div class="card adaptable-card mb-4">
                                    <div class="card-body">
                                        <h5>Ảnh Chính Của Sản Phẩm</h5>
                                        <div class="form-item vertical">
                                            <div>
                                                <div class="upload upload-draggable hover:border-primary-600">
                                                    <input class="upload-input draggable" type="file"
                                                        onchange="showImg(this,'main-image-preview')" name="photo">
                                                    <div class="my-16 text-center">
                                                        <img src="{{ asset('storage/upload/admin/products') }}/{{ $product->main_img }}"
                                                            id="main-image-preview" alt="" class="mx-auto">
                                                        <p class="font-semibold">
                                                            <span class="text-gray-800 dark:text-white">Kéo thả ảnh vào
                                                                đây, hoặc</span>
                                                            <span class="text-blue-500">browse</span>
                                                        </p>
                                                        <p class="mt-1 opacity-60 dark:text-white">Hỗ trợ: jpeg, png</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('photo')
                                                <div class="alert alert-dismissible fade show alert-danger">
                                                    <div class="alert-content">
                                                        <div>{{ $message }}</div>
                                                    </div>
                                                    <button type="button" data-bs-dismiss="alert">
                                                        <span class="close-btn">
                                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                                viewBox="0 0 20 20" aria-hidden="true" height="1em"
                                                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card adaptable-card mb-4">
                                    <div class="card-body">
                                        <h5 class="mb-6">Thêm mới 1 hoặc nhiều ảnh cho sản phẩm</h5>
                                        <div class="form-item vertical">
                                            <div>
                                                <input class="upload-input draggable" name="photos[]" type="file"
                                                    onchange="preview(this)" multiple>
                                                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4"
                                                    id="sub-image-preview">
                                                    <div class="upload-draggable hover:border-primary-600 min-h-fit">
                                                        <div
                                                            class="max-w-full flex flex-col px-4 py-2 justify-center items-center">
                                                            <p
                                                                class="font-semibold text-center text-gray-800 dark:text-white">
                                                                Tải Lên </p>
                                                        </div>
                                                    </div>
                                                    @foreach ($imgProducts as $item)
                                                        <div class="group relative rounded border p-2 flex">

                                                            {{ array_push($sub_img, $item->image) }}

                                                            <img class="rounded max-h-[140px] max-w-full"
                                                                src="{{ asset('storage/upload/admin/productImg') }}/{{ $item->image }}"
                                                                alt="image-1">
                                                            <div
                                                                class="absolute inset-2 bg-gray-900/[.7] group-hover:flex hidden text-xl items-center justify-center">
                                                                <span
                                                                    class="text-gray-100 hover:text-gray-300 cursor-pointer p-1.5">
                                                                    <svg stroke="currentColor" fill="currentColor"
                                                                        stroke-width="0" viewBox="0 0 20 20"
                                                                        aria-hidden="true" height="1em" width="1em"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>
                                                                <span
                                                                    class="text-gray-100 hover:text-gray-300 cursor-pointer p-1.5"
                                                                    id="close-img-btn">
                                                                    <svg stroke="currentColor" fill="currentColor"
                                                                        stroke-width="0" viewBox="0 0 20 20"
                                                                        aria-hidden="true" height="1em" width="1em"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-between py-4">
                            <div class="md:flex items-center">
                                <button class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" type="button">Loại Bỏ</button>
                                <button class="btn btn-solid btn-sm" type="submit">
                                    <span class="flex items-center justify-center">
                                        <span class="text-lg">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 1024 1024" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M893.3 293.3L730.7 130.7c-7.5-7.5-16.7-13-26.7-16V112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V338.5c0-17-6.7-33.2-18.7-45.2zM384 184h256v104H384V184zm456 656H184V184h136v136c0 17.7 14.3 32 32 32h320c17.7 0 32-14.3 32-32V205.8l136 136V840zM512 442c-79.5 0-144 64.5-144 144s64.5 144 144 144 144-64.5 144-144-64.5-144-144-144zm0 224c-44.2 0-80-35.8-80-80s35.8-80 80-80 80 35.8 80 80-35.8 80-80 80z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="ltr:ml-1 rtl:mr-1">Lưu</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
@section('customJs')
    <!-- Other Vendors JS -->
    <script src="{{ asset('assets') }}/vendors/quill/quill.min.js"></script>

    <!-- Page js -->
    <script src="{{ asset('assets') }}/js/pages/new-product.js"></script>

    <script type="">
        function showImg(input, target) {
            let file = input.files[0];
            let reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = function() {
                let img = document.getElementById(target);
                // can also use "this.result"
                img.src = reader.result;
            }
        }

        function preview(elem, output = '') {
            let i = 0;
            Array.from(elem.files).map((file) => {
                const blobUrl = window.URL.createObjectURL(file)
                output +=
                    `<div class="group relative rounded border p-2 flex">
                        <img class="rounded max-h-[140px] max-w-full"
                            src="${blobUrl}" alt="image-1">
                        <div
                            class="absolute inset-2 bg-gray-900/[.7] group-hover:flex hidden text-xl items-center justify-center">
                            <span
                                class="text-gray-100 hover:text-gray-300 cursor-pointer p-1.5">
                                <svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 20 20" aria-hidden="true"
                                    height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                         clip-rule="evenodd"></path>
                                 </svg>
                             </span>
                             <span
                                class="text-gray-100 hover:text-gray-300 cursor-pointer p-1.5" id="close-img-btn">
                                <svg stroke="currentColor" fill="currentColor"
                                stroke-width="0" viewBox="0 0 20 20"
                                aria-hidden="true" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                                 </svg>
                            </span>
                        </div>
                     </div>`
            })
            document.getElementById('sub-image-preview').innerHTML += output
        }
    </script>
    <script src="{{ asset('assets') }}/vendors/ckeditor/ckeditor.js"></script>
    <script src="vendors/quill/quill.min.js"></script>
    <!-- Page js -->
    <script src="js/pages/product-edit.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
@endsection
<script src="{{ asset('assets') }}/js/myJs.js"></script>
