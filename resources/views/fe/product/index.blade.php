 @extends('fe.masterview')
 @section('tittle', 'SHOP')
 <!-- End Header -->
 @section('main-content')
     <main class="main-wrapper">
         <!-- Start Breadcrumb Area  -->
         <div class="axil-breadcrumb-area">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-lg-6 col-md-8">
                         <div class="inner">
                             <ul class="axil-breadcrumb">
                                 <li class="axil-breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                 <li class="separator"></li>
                                 <li class="axil-breadcrumb-item active" aria-current="page">Sản phẩm</li>
                             </ul>
                             <h1 class="title">Khám phá tất cả các sản phẩm</h1>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-4">
                         <div class="inner">
                             <div class="bradcrumb-thumb">
                                 <img src="{{ asset('assets') }}/fe/images/product/product-45.png" alt="Image">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- End Breadcrumb Area  -->

         <!-- Start Shop Area  -->
         <div class="axil-shop-area axil-section-gap bg-color-white">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-3">
                         <form class="axil-shop-sidebar" method="POST" action="">
                             @csrf
                             <div class="d-lg-none">
                                 <button class="sidebar-close filter-close-btn"><i class="fas fa-times"></i></button>
                             </div>
                             <div class="toggle-list product-categories active">
                                 <h6 class="title">DANH MỤC</h6>
                                 <div class="shop-submenu">
                                     <ul>
                                         @foreach ($categories as $item)
                                             <li>
                                                 <div class="single-payment">
                                                     <div class="input-group justify-content-between align-items-center">
                                                         @if ($id != '')
                                                             <input type="radio" id="radio{{ $item->id }}"
                                                                 value="{{ $item->id }}" name="radio"
                                                                 {{ $item->id == $id ? 'checked' : '' }}>
                                                         @else
                                                             <input type="radio" id="radio{{ $item->id }}"
                                                                 value="{{ $item->id }}" name="radio">
                                                         @endif
                                                         <label for="radio{{ $item->id }}">{{ $item->name }}</label>
                                                     </div>
                                                 </div>
                                             </li>
                                         @endforeach
                                     </ul>
                                 </div>
                             </div>
                             <div class="toggle-list product-categories product-gender active">
                                 <h6 class="title">TAG</h6>
                                 <div class="shop-submenu">
                                     <ul>
                                         <li class=""><a href="#">Thông Thường</a></li>
                                         <li><a href="#">Đang Giảm Giá</a></li>
                                         <li><a href="#">Nổi Bật</a></li>
                                         <li><a href="#">Trending</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="toggle-list product-price-range active">
                                 <h6 class="title">GIÁ</h6>
                                 <div class="shop-submenu">
                                     <div action="#" class="mt--25">
                                         <div id="slider-range"></div>
                                         <div class="flex-center mt--20">
                                             <span class="input-range">giá: </span>
                                             <input type="text" id="amount" class="amount-range" name="price_search"
                                                 readonly>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <button type="submit" class="axil-btn btn-bg-primary">Tìm</button>
                         </form>
                         <!-- End .axil-shop-sidebar -->
                     </div>
                     <div class="col-lg-9">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="axil-shop-top mb--40">
                                     <div
                                         class="category-select align-items-center justify-content-lg-end justify-content-between">
                                         <!-- Start Single Select  -->
                                         <span class="filter-results">Hiển thị 1-12 trên {{ $products->count() }} kết
                                             quả</span>
                                         <select class="single-select">
                                             <option id="newest">
                                                 <a href="{{ route('sortByNewest') }}">Sắp xếp theo
                                                     mới nhất
                                                 </a>
                                             </option>
                                             <option>Sắp xếp theo cũ nhất</option>
                                             <option>Sắp xếp theo giá</option>
                                         </select>
                                         <!-- End Single Select  -->
                                     </div>
                                     <div class="d-lg-none">
                                         <button class="product-filter-mobile filter-toggle"><i class="fas fa-filter"></i>
                                             FILTER</button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- End .row -->
                         <div class="row row--15">
                             @foreach ($products as $item)
                                 <form class="col-xl-4 col-sm-6" method="POST" action="{{ route('cart.add') }}">
                                     @csrf
                                     <input type="number" name="quantity" hidden value="1">
                                     <input type="text" name="id" hidden value="{{ $item->id }}">
                                     <div class="axil-product product-style-one mb--30">
                                         <div class="thumbnail">
                                             <a href="{{ route('product.detail', $item->slug) }}">
                                                 <img src="{{ asset('storage/upload/admin/products') }}/{{ $item->main_img }}"
                                                     alt="Product Images">
                                             </a>
                                             @if ($item->sale_price)
                                                 <div class="label-block label-right">
                                                     <div class="product-badget">
                                                         {{ number_format((1 - $item->sale_price / $item->price) * 100, 2) }}%
                                                         OFF</div>
                                                 </div>
                                             @endif
                                             <div class="product-hover-action">
                                                 <ul class="cart-action">
                                                     <li class="wishlist"><a href="wishlist.html"><i
                                                                 class="far fa-heart"></i></a></li>
                                                     <li class="select-option">
                                                         <a href=""><button class="text-white"
                                                                 style="background: transparent" type="submit"
                                                                 href="{{ route('cart.add') }}">
                                                                 Thêm vào giỏ hàng
                                                             </button>
                                                         </a>
                                                     </li>
                                                     <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                             data-bs-target="#quick-view-modal-{{ $item->id }}"><i
                                                                 class="far fa-eye"></i></a>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                         <div class="product-content text-center ">
                                             <div class="inner">
                                                 <h5 class=""><a
                                                         href="{{ route('product.detail', $item->slug) }}">{{ $item->name }}</a>
                                                 </h5>
                                                 <div class="product-price-variant">
                                                     @if ($item->sale_price)
                                                         <del>{{ number_format($item->price) }} VND</del>
                                                         <br>
                                                         <strong>{{ number_format($item->sale_price) }} VND</strong>
                                                     @else
                                                         <strong>{{ number_format($item->price) }} VND</strong>
                                                     @endif
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </form>
                             @endforeach
                             <!-- End Single Product  -->
                         </div>
                         <div class="d-flex justify-content-center" style="font-size: 20px">
                             {{ $products->links() }}
                         </div>
                     </div>

                 </div>

             </div>
             <!-- End .container -->
         </div>
     </main>

 @endsection
