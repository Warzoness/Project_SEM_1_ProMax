@extends('admin.masterview')

@section('title')
    <title>Admin | Sales | Categories Recycle Bin</title>
@endsection


@section('main-content')
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <div class="card adaptable-card">
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ route('products.index') }}">
                                <button class="btn btn-default mr-2">
                                    <span class="flex items-center justify-center gap-2">
                                        <span class="text-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 9.75L14.25 12m0 0l2.25 2.25M14.25 12l2.25-2.25M14.25 12L12 14.25m-2.58 4.92l-6.375-6.375a1.125 1.125 0 010-1.59L9.42 4.83c.211-.211.498-.33.796-.33H19.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25h-9.284c-.298 0-.585-.119-.796-.33z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>Trở về trang sản phẩm</span>
                                    </span>
                                </button>
                            </a>
                        </div>
                        <div class="lg:flex items-center justify-center mb-4">
                            <h1 class="mb-4 lg:mb-0">Thùng Rác Sản Phẩm</h1>
                        </div>

                        <div class="overflow-x-auto">
                            <table id="product-list-data-table" class="table-default table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>Danh Mục</th>
                                        <th>Số Lượng</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trash as $item)
                                        <tr>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img class="avatar-img avatar-rounded"
                                                            src="{{ asset('storage/public/admin/products') }}/{{ $item->image }}">
                                                    </span>
                                                    <span class="ml-2 rtl:mr-2 font-semibold">{{ $item->name }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $item->category->name }}
                                            </td>

                                            <td>
                                                {{ $item->products ? $item->products->count() : 0 }}
                                            </td>
                                            <td>
                                                <div class="flex justify-end text-lg align-center items-center gap-3">
                                                    <a href="{{ route('products.restore', $item->id) }}">
                                                        <i class="fa-solid fa-recycle fa-lg" style="color: #3f7be4;"
                                                            title="Restore"></i>
                                                    </a>
                                                    <form action="{{ route('products.forceDelete', $item->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="show-alert-force-delete-product" type="submit">
                                                            <i class="fa-solid fa-circle-xmark fa-lg"
                                                                style="color: #c31d1d;" title="Delete"></i>
                                                        </button>
                                                    </form>
                                                    <a href="">
                                                        <i class="fa-solid fa-circle-info fa-lg" style="color: #0ea01f;"
                                                            title="Info"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
@section('customJs')
    <!-- Other Vendors JS -->
    <script src="{{ asset('assets') }}/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/datatables/dataTables.custom-ui.min.js"></script>

    <!-- Page js -->
    <script src="{{ asset('assets') }}/js/pages/product-list.js"></script>
    <script src="{{ asset('assets') }}/vendor/sweetalert.all.js"></script>
@endsection
