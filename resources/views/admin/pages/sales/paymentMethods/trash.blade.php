@extends('admin.masterview')

@section('title')
    <title>Admin | Bán Hàng | Phương Thức Thanh Toán</title>
@endsection

@section('main-content')
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <div class="card adaptable-card">
                    <h1 class="text-center">THÙNG RÁC NHÃN HÀNG</h1>
                    <div class="card-body">

                        <div class="overflow-x-auto">
                            <table id="product-list-data-table" class="table-default table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Tên Phương Thức Thanh Toán</th>
                                        <th>Hình Ảnh Logo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trashes as $item)
                                        <tr>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="rtl:mr-2 font-semibold">
                                                        {{ $item->name }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/upload/admin/paymentMethods') }}/{{ $item->logo }}"
                                                    alt="" width="100px">
                                            </td>

                                            <td>
                                                <div class="flex justify-end text-lg align-center items-center gap-3">
                                                    <a href="{{ route('paymentMethods.restore', $item->id) }}">
                                                        <i class="fa-solid fa-recycle fa-lg" style="color: #3f7be4;"
                                                            title="Restore"></i>
                                                    </a>
                                                    <form action="{{ route('paymentMethods.forceDelete', $item->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="show-alert-force-delete" type="submit">
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
@endsection
