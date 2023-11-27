@extends('admin.masterview')
@section('title')
    <title>Admin | Thêm mới admin</title>
@endsection

@section('main-content')
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto h-full">
                <div class="card adaptable-card h-full">
                    <div class="card-body h-full">
                        <div id="form-section" class="grid lg:grid-cols-5 xl:grid-cols-3 2xl:grid-cols-5 gap-4 h-full">
                            <div class="2xl:col-span-4 lg:col-span-3 xl:col-span-2">
                                <div id="personal-information-section" class="content-section">
                                    <div class="mb-8">
                                        <h3 class="mb-2">Thông tin cá nhân</h3>
                                    </div>
                                    <form action="{{ route('account.register') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-container vertical">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Họ Và Tên</label>
                                                <div>
                                                    <input class="input" type="text" name="fullname" autocomplete="off"
                                                        value="">
                                                </div>
                                            </div>
                                            @error('fullname')
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
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Địa chỉ email</label>
                                                <div>
                                                    <input class="input" type="email" name="email" autocomplete="off"
                                                        value="">
                                                </div>
                                            </div>
                                            @error('email')
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
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Mật khẩu</label>
                                                <div>
                                                    <input class="input" type="text" name="password" autocomplete="off"
                                                        value="">
                                                </div>
                                            </div>
                                            @error('password')
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
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Địa chỉ</label>
                                                <div>
                                                    <input class="input" type="text" name="address" autocomplete="off"
                                                        value="">
                                                </div>
                                            </div>
                                            @error('address')
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
                                            <div class="md:grid grid-cols-2 gap-4">
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Giới Tính</label>
                                                    <select class="input" name="sex">
                                                        <option value="M">Nam</option>
                                                        <option value="F">Nữ</option>
                                                        <option value="O">Khác</option>
                                                    </select>
                                                </div>
                                                @error('sex')
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
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Số Điện Thoại</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input class="input" type="text" name="phone"
                                                                autocomplete="off" value="" inputmode="numeric">
                                                        </div>
                                                    </div>
                                                    @error('phone')
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

                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Ảnh Đại Diện</label>
                                                    <div>
                                                        <div class="upload upload-draggable hover:border-primary-600">
                                                            <input class="upload-input draggable" type="file"
                                                                onchange="showImg(this,'preview')" name="photo">
                                                            <div class="my-16 text-center">
                                                                <img src="" id="preview" alt=""
                                                                    class="mx-auto">
                                                                <p class="font-semibold">
                                                                    <span class="text-gray-800 dark:text-white">Kéo thả ảnh
                                                                        vào
                                                                        đây, hoặc</span>
                                                                    <span class="text-blue-500">browse</span>
                                                                </p>
                                                                <p class="mt-1 opacity-60 dark:text-white">Hỗ trợ: jpeg,
                                                                    png
                                                                </p>
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


                                            {{-- role --}}

                                            <input type="text" hidden value="0" name="role">
                                            <div class="flex justify-start gap-2">
                                                <button class="btn btn-solid" type="submit">Thêm Mới</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('customJs')
    <script src="{{ asset('assets') }}/js/pages/kyc-form.js"></script>
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
    </script>
@endsection
