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
                         <div class="axil-shop-sidebar">
                             <div class="d-lg-none">
                                 <button class="sidebar-close filter-close-btn"><i class="fas fa-times"></i></button>
                             </div>
                             <div class="toggle-list product-categories active">
                                 <h6 class="title">DANH MỤC</h6>
                                 <div class="shop-submenu">
                                     <ul>
                                         <li class="current-cat"><a href="#">Sun Care</a></li>
                                         <li><a href="#">Night Care</a></li>
                                         <li><a href="#">Treatments</a></li>
                                         <li><a href="#">Moisturizers</a></li>
                                         <li><a href="#">Eye Care</a></li>
                                         <li><a href="#">Masks</a></li>
                                         <li><a href="#">Featured</a></li>
                                         <li><a href="#">On Sale</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="toggle-list product-categories product-gender active">
                                 <h6 class="title">GIỚI TÍNH</h6>
                                 <div class="shop-submenu">
                                     <ul>
                                         <li class="chosen"><a href="#">Nam (40)</a></li>
                                         <li><a href="#">Nữ (56)</a></li>
                                         <li><a href="#">Cả Nam và Nữ (18)</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="toggle-list product-color active">
                                 <h6 class="title">MÀU SẮC</h6>
                                 <div class="shop-submenu">
                                     <ul>
                                         <li class="chosen"><a href="#" class="color-extra-01"></a></li>
                                         <li><a href="#" class="color-extra-02"></a></li>
                                         <li><a href="#" class="color-extra-03"></a></li>
                                         <li><a href="#" class="color-extra-04"></a></li>
                                         <li><a href="#" class="color-extra-05"></a></li>
                                         <li><a href="#" class="color-extra-06"></a></li>
                                         <li><a href="#" class="color-extra-07"></a></li>
                                         <li><a href="#" class="color-extra-08"></a></li>
                                         <li><a href="#" class="color-extra-09"></a></li>
                                         <li><a href="#" class="color-extra-10"></a></li>
                                         <li><a href="#" class="color-extra-11"></a></li>
                                     </ul>
                                 </div>
                             </div>

                             <div class="toggle-list product-size active">
                                 <h6 class="title">KÍCH THƯỚC</h6>
                                 <div class="shop-submenu">
                                     <ul>
                                         <li class="chosen"><a href="#">XS</a></li>
                                         <li><a href="#">S</a></li>
                                         <li><a href="#">M</a></li>
                                         <li><a href="#">L</a></li>
                                         <li><a href="#">XL</a></li>
                                         <li><a href="#">XXL</a></li>
                                         <li><a href="#">3XL</a></li>
                                         <li><a href="#">4XL</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="toggle-list product-price-range active">
                                 <h6 class="title">GIÁ</h6>
                                 <div class="shop-submenu">
                                     <ul>
                                         <li class="chosen"><a href="#">30</a></li>
                                         <li><a href="#">5000</a></li>
                                     </ul>
                                     <form action="#" class="mt--25">
                                         <div id="slider-range"></div>
                                         <div class="flex-center mt--20">
                                             <span class="input-range">giá: </span>
                                             <input type="text" id="amount" class="amount-range" readonly>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                             <button class="axil-btn btn-bg-primary">Đặt lại</button>
                         </div>
                         <!-- End .axil-shop-sidebar -->
                     </div>
                     <div class="col-lg-9">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="axil-shop-top mb--40">
                                     <div
                                         class="category-select align-items-center justify-content-lg-end justify-content-between">
                                         <!-- Start Single Select  -->
                                         <span class="filter-results">Hiển thị 1-12 trên 84 kết quả</span>
                                         <select class="single-select">
                                             <option>Sắp xếp theo mới nhất</option>
                                             <option>Sắp xếp theo cũ nhất</option>
                                             <option>Sắp xếp theo tên</option>
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
                             <div class="col-xl-4 col-sm-6">
                                 <div class="axil-product product-style-one mb--30">
                                     <div class="thumbnail">
                                         <a href="{{ route('product.detail') }}">
                                             <img src="{{ asset('assets') }}/fe/images/product/electric/product-01.png"
                                                 alt="Product Images">
                                         </a>
                                         <div class="label-block label-right">
                                             <div class="product-badget">10% OFF</div>
                                         </div>
                                         <div class="product-hover-action">
                                             <ul class="cart-action">
                                                 <li class="wishlist"><a href="wishlist.html"><i
                                                             class="far fa-heart"></i></a></li>
                                                 <li class="select-option"><a href="cart.html">Thêm vào giỏ hàng</a></li>
                                                 <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                         data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="product-content">
                                         <div class="inner">
                                             <h5 class="title"><a href="single-product.html">3D™ wireless headset</a>
                                             </h5>
                                             <div class="product-price-variant">
                                                 <span class="price current-price">$30</span>
                                                 <span class="price old-price">$30</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single Product  -->
                             <div class="col-xl-4 col-sm-6">
                                 <div class="axil-product product-style-one mb--30">
                                     <div class="thumbnail">
                                         <a href="single-product.html">
                                             <img src="{{ asset('assets') }}/fe/images/product/electric/product-02.png"
                                                 alt="Product Images">
                                         </a>
                                         <div class="product-hover-action">
                                             <ul class="cart-action">
                                                 <li class="wishlist"><a href="wishlist.html"><i
                                                             class="far fa-heart"></i></a></li>
                                                 <li class="select-option"><a href="cart.html">Thêm vào giỏ hàng</a></li>
                                                 <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                         data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="product-content">
                                         <div class="inner">
                                             <h5 class="title"><a href="single-product.html">Media remote</a></h5>
                                             <div class="product-price-variant">
                                                 <span class="price current-price">$40</span>
                                                 <span class="price old-price">$50</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single Product  -->
                             <div class="col-xl-4 col-sm-6">
                                 <div class="axil-product product-style-one mb--30">
                                     <div class="thumbnail">
                                         <a href="single-product.html">
                                             <img src="{{ asset('assets') }}/fe/images/product/electric/product-03.png"
                                                 alt="Product Images">
                                         </a>
                                         <div class="label-block label-right">
                                             <div class="product-badget">25% OFF</div>
                                         </div>
                                         <div class="product-hover-action">
                                             <ul class="cart-action">
                                                 <li class="wishlist"><a href="wishlist.html"><i
                                                             class="far fa-heart"></i></a></li>
                                                 <li class="select-option"><a href="cart.html">Thêm vào giỏ hàng</a></li>
                                                 <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                         data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="product-content">
                                         <div class="inner">
                                             <h5 class="title"><a href="single-product.html">HD camera</a></h5>
                                             <div class="product-price-variant">
                                                 <span class="price current-price">$45</span>
                                                 <span class="price old-price">$60</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single Product  -->
                             <div class="col-xl-4 col-sm-6">
                                 <div class="axil-product product-style-one mb--30">
                                     <div class="thumbnail">
                                         <a href="single-product.html">
                                             <img src="{{ asset('assets') }}/fe/images/product/electric/product-04.png"
                                                 alt="Product Images">
                                         </a>
                                         <div class="label-block label-right">
                                             <div class="product-badget">5% OFF</div>
                                         </div>
                                         <div class="product-hover-action">
                                             <ul class="cart-action">
                                                 <li class="wishlist"><a href="wishlist.html"><i
                                                             class="far fa-heart"></i></a></li>
                                                 <li class="select-option"><a href="cart.html">Thêm vào giỏ hàng</a></li>
                                                 <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                         data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="product-content">
                                         <div class="inner">
                                             <h5 class="title"><a href="single-product.html">Guys Bomber Jacket</a></h5>
                                             <div class="product-price-variant">
                                                 <span class="price current-price">$50</span>
                                                 <span class="price old-price">$60</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single Product  -->
                             <div class="col-xl-4 col-sm-6">
                                 <div class="axil-product product-style-one mb--30">
                                     <div class="thumbnail">
                                         <a href="single-product.html">
                                             <img src="{{ asset('assets') }}/fe/images/product/electric/product-05.png"
                                                 alt="Product Images">
                                         </a>
                                         <div class="product-hover-action">
                                             <ul class="cart-action">
                                                 <li class="wishlist"><a href="wishlist.html"><i
                                                             class="far fa-heart"></i></a></li>
                                                 <li class="select-option"><a href="cart.html">Thêm vào giỏ hàng</a></li>
                                                 <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                         data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="product-content">
                                         <div class="inner">
                                             <h5 class="title"><a href="single-product.html">Level 20 RGB Cherry</a></h5>
                                             <div class="product-price-variant">
                                                 <span class="price current-price">$38</span>
                                                 <span class="price old-price">$50</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single Product  -->
                             <div class="col-xl-4 col-sm-6">
                                 <div class="axil-product product-style-one mb--30">
                                     <div class="thumbnail">
                                         <a href="single-product.html">
                                             <img src="{{ asset('assets') }}/fe/images/product/electric/product-06.png"
                                                 alt="Product Images">
                                         </a>
                                         <div class="label-block label-right">
                                             <div class="product-badget">5% OFF</div>
                                         </div>
                                         <div class="product-hover-action">
                                             <ul class="cart-action">
                                                 <li class="wishlist"><a href="wishlist.html"><i
                                                             class="far fa-heart"></i></a></li>
                                                 <li class="select-option"><a href="cart.html">Thêm vào giỏ hàng</a></li>
                                                 <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                         data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="product-content">
                                         <div class="inner">
                                             <h5 class="title"><a href="single-product.html">Level 20 RGB Cherry</a></h5>
                                             <div class="product-price-variant">
                                                 <span class="price current-price">$25</span>
                                                 <span class="price old-price">$40</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single Product  -->
                             <div class="col-xl-4 col-sm-6">
                                 <div class="axil-product product-style-one mb--30">
                                     <div class="thumbnail">
                                         <a href="single-product.html">
                                             <img src="{{ asset('assets') }}/fe/images/product/electric/product-07.png"
                                                 alt="Product Images">
                                         </a>
                                         <div class="label-block label-right">
                                             <div class="product-badget">15% OFF</div>
                                         </div>
                                         <div class="product-hover-action">
                                             <ul class="cart-action">
                                                 <li class="wishlist"><a href="wishlist.html"><i
                                                             class="far fa-heart"></i></a></li>
                                                 <li class="select-option"><a href="cart.html">Thêm vào giỏ hàng</a></li>
                                                 <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                         data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="product-content">
                                         <div class="inner">
                                             <h5 class="title"><a href="single-product.html">Logitech Streamcam</a></h5>
                                             <div class="product-price-variant">
                                                 <span class="price current-price">$15</span>
                                                 <span class="price old-price">$20</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single Product  -->
                             <div class="col-xl-4 col-sm-6">
                                 <div class="axil-product product-style-one mb--30">
                                     <div class="thumbnail">
                                         <a href="single-product.html">
                                             <img src="{{ asset('assets') }}/fe/images/product/electric/product-08.png"
                                                 alt="Product Images">
                                         </a>
                                         <div class="product-hover-action">
                                             <ul class="cart-action">
                                                 <li class="wishlist"><a href="wishlist.html"><i
                                                             class="far fa-heart"></i></a></li>
                                                 <li class="select-option"><a href="cart.html">Thêm vào giỏ hàng</a></li>
                                                 <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                         data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="product-content">
                                         <div class="inner">
                                             <h5 class="title"><a href="single-product.html">Bass Meets Clarity</a></h5>
                                             <div class="product-price-variant">
                                                 <span class="price current-price">$60</span>
                                                 <span class="price old-price">$80</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single Product  -->
                             <div class="col-xl-4 col-sm-6">
                                 <div class="axil-product product-style-one mb--30">
                                     <div class="thumbnail">
                                         <a href="single-product.html">
                                             <img src="{{ asset('assets') }}/fe/images/product/electric/product-02.png"
                                                 alt="Product Images">
                                         </a>
                                         <div class="label-block label-right">
                                             <div class="product-badget">30% OFF</div>
                                         </div>
                                         <div class="product-hover-action">
                                             <ul class="cart-action">
                                                 <li class="wishlist"><a href="wishlist.html"><i
                                                             class="far fa-heart"></i></a></li>
                                                 <li class="select-option"><a href="cart.html">Thêm vào giỏ hàng</a></li>
                                                 <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                         data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="product-content">
                                         <div class="inner">
                                             <h5 class="title"><a href="single-product.html">Media remote</a></h5>
                                             <div class="product-price-variant">
                                                 <span class="price current-price">$40</span>
                                                 <span class="price old-price">$50</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single Product  -->
                         </div>
                         <div class="text-center pt--20">
                             <a href="#" class="axil-btn btn-bg-lighter btn-load-more">Xem thêm</a>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- End .container -->
         </div>
     </main>

 @endsection
