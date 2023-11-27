@extends('admin.masterview')

@section('title')
    <title>Admin | Tài Khoản | Cài Đặt Tài Khoản</title>
@endsection

@section('main-content')
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <div class="flex items-center justify-between mb-4">
                    <h3>Cài Đặt Tài Khoản</h3>
                </div>
                <div class="card adaptable-card">
                    <div class="card-body">
                        <div class="tabs">
                            <div role="tablist" class="tab-list tab-list-underline">
                                <button class="tab-nav tab-nav-underline active" data-bs-toggle="tab"
                                    data-bs-target="#tab-profile" role="tab" aria-selected="true" tabindex="0">
                                    Hồ Sơ
                                </button>
                                <button class="tab-nav tab-nav-underline" data-bs-toggle="tab"
                                    data-bs-target="#tab-password" role="tab" aria-selected="false" tabindex="0">
                                    Mật Khẩu
                                </button>
                            </div>
                            <div class="tab-content px-4 py-6">
                                <div class="tab-pane fade show active" id="tab-profile" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <form action="{{ route('account.update', Auth::user()) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-container vertical">
                                            <div>
                                                <h5>Tổng Quan</h5>
                                            </div>
                                            <div
                                                class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                <div class="font-semibold">Họ Tên</div>
                                                <div class="col-span-2">
                                                    <div class="form-item vertical mb-0 max-w-[700px]">
                                                        <label class="form-label"></label>
                                                        <div>
                                                            <span class="input-wrapper">
                                                                <div class="input-suffix-start">
                                                                    <svg stroke="currentColor" fill="none"
                                                                        stroke-width="2" viewBox="0 0 24 24"
                                                                        aria-hidden="true" class="text-xl" height="1em"
                                                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <input class="input pl-8" type="text" name="fullname"
                                                                    autocomplete="off" placeholder="Name"
                                                                    value="{{ $user->fullname }}">
                                                            </span>
                                                        </div>
                                                        @error('fullname')
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
                                            </div>
                                            <div
                                                class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                <div class="font-semibold">Email</div>
                                                <div class="col-span-2">
                                                    <div class="form-item vertical mb-0 max-w-[700px]">
                                                        <label class="form-label"></label>
                                                        <div>
                                                            <span class="input-wrapper">
                                                                <div class="input-suffix-start">
                                                                    <svg stroke="currentColor" fill="none"
                                                                        stroke-width="2" viewBox="0 0 24 24"
                                                                        aria-hidden="true" class="text-xl" height="1em"
                                                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <input class="input pl-8" type="email" name="email"
                                                                    autocomplete="off" placeholder="Email"
                                                                    value="{{ $user->email }}">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    @error('email')
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
                                            <div
                                                class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                <div class="font-semibold">Avatar</div>
                                                <div class="col-span-2">
                                                    <div class="form-item vertical mb-0 max-w-[700px]">
                                                        <label class="form-label"></label>
                                                        <div class="upload upload-draggable hover:border-primary-600">
                                                            <input class="upload-input draggable" type="file"
                                                                onchange="showImg(this,'preview')" name="photo">
                                                            <div class="my-16 text-center">
                                                                <img src="{{ asset('storage/upload/admin/avatars') }}/{{ $user->avatar }}"
                                                                    id="preview" alt="" class="mx-auto">
                                                                <p class="font-semibold">
                                                                    <span class="text-gray-800 dark:text-white">Drop your
                                                                        image
                                                                        here, or</span>
                                                                    <span class="text-blue-500">browse</span>
                                                                </p>
                                                                <p class="mt-1 opacity-60 dark:text-white">Support: jpeg,
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
                                            <div class="grid md:grid-cols-3 gap-4 py-8 items-center">
                                                <div class="font-semibold">Vai Trò</div>
                                                <div class="col-span-2">
                                                    <div class="form-item vertical mb-0 max-w-[700px]">
                                                        <label class="form-label"></label>
                                                        <div>
                                                            <span class="input-wrapper">
                                                                <div class="input-suffix-start">
                                                                    <svg stroke="currentColor" fill="none"
                                                                        stroke-width="2" viewBox="0 0 24 24"
                                                                        aria-hidden="true" class="text-xl" height="1em"
                                                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <input class="input pl-8" type="text"
                                                                    autocomplete="off" placeholder="Title"
                                                                    value="Admin">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid md:grid-cols-3 gap-4 py-8 items-center">
                                                <div class="font-semibold">Số Điện Thoại</div>
                                                <div class="col-span-2">
                                                    <div class="form-item vertical mb-0 max-w-[700px]">
                                                        <label class="form-label"></label>
                                                        <div>
                                                            <span class="input-wrapper">
                                                                <div class="input-suffix-start">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" aria-hidden="true"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <input class="input pl-8" type="text" name="phone"
                                                                    autocomplete="off" placeholder="Title"
                                                                    value="{{ $user->phone }}">
                                                            </span>
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
                                            </div>
                                            <div class="grid md:grid-cols-3 gap-4 py-8 items-center">
                                                <div class="font-semibold">Giới Tính</div>
                                                <div class="col-span-2">
                                                    <div class="form-item vertical mb-0 max-w-[700px]">
                                                        <select class="input" name="sex">
                                                            <option value="M"
                                                                {{ $user->sex == 'M' ? 'selected' : '' }}>Nam</option>
                                                            <option value="F"
                                                                {{ $user->sex == 'F' ? 'selected' : '' }}>Nữ</option>
                                                            <option value="O"
                                                                {{ $user->sex == 'O' ? 'selected' : '' }}>Khác</option>
                                                        </select>
                                                    </div>
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
                                            </div>
                                            <div class="grid md:grid-cols-3 gap-4 py-8 items-center">
                                                <div class="font-semibold">Địa Chỉ</div>
                                                <div class="col-span-2">
                                                    <div class="form-item vertical mb-0 max-w-[700px]">
                                                        <label class="form-label"></label>
                                                        <div>
                                                            <span class="input-wrapper">
                                                                <div class="input-suffix-start">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" aria-hidden="true"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <input class="input pl-8" type="text" name="address"
                                                                    autocomplete="off" placeholder="Title"
                                                                    value="{{ $user->address }}">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('address')
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
                                            <div class="flex mt-4 ltr:justify-end gap-2">
                                                <button class="btn btn-default" type="button">
                                                    Reset
                                                </button>
                                                <button class="btn btn-solid" type="submit">
                                                    Sửa
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab-password" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    <form action="{{ route('accounts.updatePassword', Auth::user()) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-container vertical">
                                            <div>
                                                <h5>Mật khẩu</h5>
                                                <p>Nhập mật khẩu cũ và mới để đổi mật khẩu</p>
                                            </div>
                                            <div
                                                class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                <div class="font-semibold">Mật Khẩu Hiện Tại</div>
                                                <div class="col-span-2">
                                                    <div class="form-item vertical mb-0 max-w-[700px]">
                                                        <label class="form-label"></label>
                                                        <div>
                                                            <input class="input" type="password" name="password"
                                                                autocomplete="off" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                <div class="font-semibold">Mật Khẩu Mới</div>
                                                <div class="col-span-2">
                                                    <div class="form-item vertical mb-0 max-w-[700px]">
                                                        <label class="form-label"></label>
                                                        <div>
                                                            <input class="input" type="password" name="newPassword"
                                                                autocomplete="off" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('newPassword')
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
                                            <div
                                                class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                <div class="font-semibold">Nhập Lại Mật Khẩu Mới</div>
                                                <div class="col-span-2">
                                                    <div class="form-item vertical mb-0 max-w-[700px]">
                                                        <label class="form-label"></label>
                                                        <div>
                                                            <input class="input" type="password"
                                                                name="confirmNewPassword" autocomplete="off"
                                                                value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 flex ltr:justify-end gap-2">
                                                <button class="btn btn-default" type="button">Reset</button>
                                                <button class="btn btn-solid" type="submit">Update Password</button>
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
