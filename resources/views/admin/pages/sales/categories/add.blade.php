@extends('admin.masterview')

@section('title')
    <title>Admin | Bán Hàng | Thêm Mới Danh Mục</title>
@endsection

@section('main-content')
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <h3 class="mb-4">Thêm Mới Danh Mục</h3>
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-container vertical">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                            <div class="lg:col-span-2">
                                <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                    <div class="card-body">
                                        <h5>Thông Tin Cơ Bản</h5>
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2">Tên Danh Mục</label>
                                            <div>
                                                <input class="input" type="text" name="name"
                                                    placeholder="Điền tên danh mục tại đây.." id="title"
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

                                        <input class="input" type="text" name="slug" id="slug" hidden>
                                    </div>
                                </div>

                                <div class="card adaptable-card pb-6 py-4 ">
                                    <div class="card-body">
                                        <h5>Phần Liên Quan</h5>
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2">Tên Danh Mục Cha</label>
                                            <div>
                                                <select class="input js-example-basic-single" style="padding: 10px"
                                                    name="parent_id">
                                                    <option value="">Đây Là Danh Mục Cha</option>
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}">
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-1">
                                <div class="card adaptable-card mb-4">
                                    <div class="card-body">
                                        <h5>Ảnh Danh Mục</h5>
                                        <p class="mb-6">Thêm mới ảnh mô tả cho danh mục</p>
                                        <div class="form-item vertical">
                                            <div>
                                                <div class="upload upload-draggable hover:border-primary-600">
                                                    <input class="upload-input draggable" type="file"
                                                        onchange="showImg(this,'preview')" name="photo">
                                                    <div class="my-16 text-center">
                                                        <img src="" id="preview" alt="" class="mx-auto">
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

                            </div>
                        </div>
                        <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-end py-4">
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
                img.src = reader.result;
            }
        }
    </script>


    <script src="{{ asset('assets') }}/vendors/ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor1');
    </script>
@endsection
<script src="{{ asset('assets') }}/js/myJs.js"></script>
