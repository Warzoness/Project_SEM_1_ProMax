@extends('admin.masterview')


@section('main-content')
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <div class="card adaptable-card">

                    <div class="card-body">
                        <div class="lg:flex items-center justify-between mb-4">
                            <h3 class="mb-4 lg:mb-0">Categories</h3>
                            <div>
                                <a href="{{ route('category.create') }}" class="btn btn-solid">Add new category</a>
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                            <table id="product-list-data-table" class="table-default table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Parent Category</th>
                                        <th>Product Quantity</th>
                                        <th>Brand</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $item)
                                        <tr>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img class="avatar-img avatar-rounded"
                                                            src="{{ asset('assets') }}/img/logo/{{ $item->image }}"
                                                            loading="lazy">
                                                    </span>
                                                    <span class="ml-2 rtl:mr-2 font-semibold">{{ $item->name }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="capitalize">{{ $item->parent->name ?? 'N/A' }}</span>
                                            </td>
                                            <td>
                                                {{ $item->products ? $item->products->count() : 0 }}
                                            </td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img class="avatar-img avatar-rounded"
                                                            src="{{ asset('assets') }}/img/logo/{{ $item->brand->logo }}"
                                                            loading="lazy">
                                                    </span>
                                                    <span class="ml-2 rtl:mr-2 font-semibold">{{ $item->brand->name }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    @if ($item->status == 1)
                                                        <span class="badge-dot bg-emerald-500"></span>
                                                        <span class="capitalize font-semibold text-emerald-500">In
                                                            Stock</span>
                                                    @elseif($item->status == 0)
                                                        <span class="badge-dot bg-red-500"></span>
                                                        <span class="capitalize font-semibold text-red-500">Out Of
                                                            Stock</span>
                                                    @else
                                                        <span class="badge-dot bg-amber-500"></span>
                                                        <span class="capitalize font-semibold text-amber-500">Limited</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex justify-end text-lg items-center">
                                                    <span class="cursor-pointer p-2 hover:text-indigo-600">
                                                        <svg stroke="currentColor" fill="none" stroke-width="2"
                                                            viewBox="0 0 24 24" aria-hidden="true" height="1em"
                                                            width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="cursor-pointer p-2 hover:text-red-500">
                                                        <svg stroke="currentColor" fill="none" stroke-width="2"
                                                            viewBox="0 0 24 24" aria-hidden="true" height="1em"
                                                            width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="cursor-pointer p-2 hover:text-yellow-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" aria-hidden="true" class="w-6 h-6">
                                                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z"></path>
                                                            <path fill-rule="evenodd"
                                                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </span>
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
