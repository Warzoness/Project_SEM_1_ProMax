@extends('admin.masterview')

@section('title')
    <title>Admin | Bán Hàng | Quản Lý Sản Phẩm</title>
@endsection


@section('main-content')
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <div class="card adaptable-card">
                    <div class="card-body">
                        <div class="lg:flex items-center justify-between mb-4">
                            <h3 class="mb-4 lg:mb-0">Tất Cả Sản Phẩm</h3>
                            <div class="flex-wrap inline-flex xl:flex items-center gap-2">
                                <a class="btn btn-default mr-2 bg-rose-600 hover:bg-rose-500 active:bg-rose-700 text-white"
                                    href="{{ route('etproducts.create') }}">
                                    <span class="flex items-center justify-center gap-2">
                                        <span class="text-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 4.5v15m7.5-7.5h-15"></path>
                                            </svg>
                                        </span>
                                        <span>Thêm Mới Sản Phẩm</span>
                                    </span>
                                </a>
                                <a class="btn btn-two-tune" href="{{ route('etproducts.trashIndex') }}">
                                    <span class="flex items-center justify-center gap-2">
                                        <span class="text-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>Thùng Rác</span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                            <table id="product-list-data-table" class="table-default table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Loại Sản Phẩm</th>
                                        <th>Giá</th>
                                        <th>Giá Khuyến Mãi</th>
                                        <th>Màu</th>
                                        <th>Loại</th>
                                        <th>Trạng Thái</th>
                                        <th>Số Lượng</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($etproducts as $item)
                                        <tr>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img class="avatar-img avatar-rounded"
                                                            src="{{ asset('storage/upload/admin/products') }}/{{ $item->image }}">
                                                    </span>
                                                    <span class="ml-2 rtl:mr-2 font-semibold">{{ $item->name }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>{{ $item->product->name ?? '' }}</span>
                                            </td>
                                            <td>
                                                <span class="capitalize">{{ $item->price }}</span>
                                            </td>
                                            <td>
                                                <span class="capitalize">{{ $item->sale_price }}</span>
                                            </td>
                                            <td>
                                                <span>{{ $item->color }}</span>
                                            </td>
                                            <td>
                                                <span>{{ $item->type }}</span>
                                            </td>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    @if ($item->tag == 1)
                                                        <span class="badge-dot bg-emerald-500"></span>
                                                        <span class="capitalize font-semibold text-emerald-500">
                                                            Nổi Bật
                                                        </span>
                                                    @elseif($item->tag == 0)
                                                        <span class="badge-dot bg-red-500"></span>
                                                        <span class="capitalize font-semibold text-red-500">Thông
                                                            Thường</span>
                                                    @else
                                                        <span class="badge-dot bg-amber-500"></span>
                                                        <span
                                                            class="capitalize font-semibold text-amber-500">Trending</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <span>{{ $item->quantity }}</span>
                                            </td>
                                            <td>
                                                <div class="flex justify-end text-lg align-center items-center gap-3">
                                                    <a href="{{ route('etproducts.edit', $item) }}">
                                                        <i class="fa-regular fa-pen-to-square fa-lg" style="color: #8d6102;"
                                                            title="Chỉnh Sửa"></i>
                                                    </a>
                                                    <form action="{{ route('etproducts.destroy', $item) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="show-alert-delete-box">
                                                            <i class="fa-solid fa-circle-xmark fa-lg"
                                                                style="color: #c31d1d;" title="Chuyển vào thùng rác"></i>
                                                        </button>
                                                    </form>
                                                    <a href="">
                                                        <i class="fa-solid fa-circle-info fa-lg" style="color: #0ea01f;"
                                                            title="Thông tin trên kệ"></i>
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
