@extends('fe.masterview')
@section('tittle', 'HOME')

@section('main-content')
    @foreach ($products as $items)
        <div class="modal fade quick-view-product" id="quick-view-modal-{{ $items->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="far fa-times"></i></button>
                    </div>

                    <div class="modal-body">
                        <div class="single-product-thumb">
                            <div class="row">
                                <div class="col-lg-7 mb--40">
                                    <div class="row">
                                        <div class="col-lg-10 order-lg-2">
                                            <div
                                                class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                                @foreach ($items->images as $item)
                                                    <div class="thumbnail">
                                                        <img src="{{ asset('storage/upload/admin/productImg') }}/{{ $item->image }}"
                                                            alt="Product Images">
                                                        <div class="label-block label-right">
                                                            <div class="product-badget">20% OFF</div>
                                                        </div>
                                                        <div class="product-quick-view position-view">
                                                            <a href="{{ asset('storage/upload/admin/productImg') }}/{{ $item->image }}"
                                                                class="popup-zoom">
                                                                <i class="far fa-search-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-lg-2 order-lg-1">
                                            <div class="product-small-thumb small-thumb-wrapper">
                                                @foreach ($items->images as $item)
                                                    <div class="small-thumb-img">
                                                        <img src="{{ asset('storage/upload/admin/productImg') }}/{{ $item->image }}"
                                                            alt="thumb image">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 mb--40">
                                    <div class="single-product-content">
                                        <div class="inner">
                                            <div class="product-rating">
                                                <div class="star-rating">
                                                    <img src="{{ asset('assets') }}/fe/images/icons/rate.png"
                                                        alt="Rate Images">
                                                </div>
                                                <div class="review-link">
                                                    <a href="#">(<span>1</span> customer reviews)</a>
                                                </div>
                                            </div>
                                            <h3 class="product-title">{{ $items->name }}</h3>
                                            <del>{{ number_format($items->price) }} VND</del>
                                            <p class="price-amount">{{ number_format($items->sale_price) }} VND</p>

                                            <ul class="product-meta">
                                                <li><i class="fal fa-check"></i>In stock</li>
                                                <li><i class="fal fa-check"></i>Free delivery available</li>
                                                <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                            </ul>
                                            <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi
                                                pretium. Integer ante est, elementum eget magna. Pellentesque sagittis
                                                dictum libero, eu dignissim tellus.</p>

                                            <div class="product-variations-wrapper">

                                                <!-- Start Product Variation  -->
                                                <div class="product-variation">
                                                    <h6 class="title">Colors:</h6>
                                                    <div class="color-variant-wrapper">
                                                        <ul class="color-variant mt--0">
                                                            <li class="color-extra-01 active"><span><span
                                                                        class="color"></span></span>
                                                            </li>
                                                            <li class="color-extra-02"><span><span
                                                                        class="color"></span></span>
                                                            </li>
                                                            <li class="color-extra-03"><span><span
                                                                        class="color"></span></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- End Product Variation  -->

                                                <!-- Start Product Variation  -->
                                                <div class="product-variation">
                                                    <h6 class="title">Size:</h6>
                                                    <ul class="range-variant">
                                                        <li>xs</li>
                                                        <li>s</li>
                                                        <li>m</li>
                                                        <li>l</li>
                                                        <li>xl</li>
                                                    </ul>
                                                </div>
                                                <!-- End Product Variation  -->

                                            </div>

                                            <!-- Start Product Action Wrapper  -->
                                            <div class="product-action-wrapper d-flex-center">
                                                <!-- Start Quentity Action  -->
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                                <!-- End Quentity Action  -->

                                                <!-- Start Product Action  -->
                                                <ul class="product-action d-flex-center mb--0">
                                                    <li class="add-to-cart"><a href="cart.html"
                                                            class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a>
                                                    </li>
                                                </ul>
                                                <!-- End Product Action  -->

                                            </div>
                                            <!-- End Product Action Wrapper  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <main class="main-wrapper">
        <div class="axil-main-slider-area main-slider-style-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-sm-6">
                        <div class="main-slider-content">
                            <div class="slider-content-activation-one">
                                @foreach ($banner as $item)
                                    <div class="single-slide slick-slide">
                                        <span class="subtitle"><i class="fas fa-fire"></i> Ưu đãi hấp dẫn tuần này</span>
                                        <h1 class="title">{{ $item->name }}</h1>
                                        <div class="slide-action">
                                            <div class="shop-btn">
                                                <a href="shop.html" class="axil-btn btn-bg-white"><i
                                                        class="fal fa-shopping-cart"></i>Mua ngay</a>
                                            </div>
                                            <div class="item-rating">
                                                <div class="thumb">
                                                    <ul>
                                                        <li><img src="{{ asset('assets') }}/fe/images/others/author1.png"
                                                                alt="Author"></li>
                                                        <li><img src="{{ asset('assets') }}/fe/images/others/author2.png"
                                                                alt="Author"></li>
                                                        <li><img src="{{ asset('assets') }}/fe/images/others/author3.png"
                                                                alt="Author"></li>
                                                        <li><img src="{{ asset('assets') }}/fe/images/others/author4.png"
                                                                alt="Author"></li>
                                                    </ul>
                                                </div>
                                                <div class="content">
                                                    <span class="rating-icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fal fa-star"></i>
                                                    </span>
                                                    <span class="review-text">
                                                        <span>100+</span> đánh giá
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-6">
                        <div class="main-slider-large-thumb">
                            <div class="slider-thumb-activation-one axil-slick-dots">
                                {{-- @foreach ($banner as $item)
                                    <div class="single-slide slick-slide" data-sal-duration="1000">
                                        <img src="{{ asset('storage/upload/admin/products') }}/{{ $item->main_img }}"
                                            alt="Product">
                                        <div class="product-price">
                                            <span class="text">Chỉ từ</span>
                                            @if ($item->sale_price)
                                                <span class="price-amount">{{ number_format($item->sale_price) }} VND</span>
                                            @else
                                                <span class="price-amount">{{ number_format($item->price) }} VND</span>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach --}}
                                {{-- <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="600"
                                    data-sal-duration="1500">
                                    <img src="{{ asset('assets') }}/fe/images/product/product-39.png" alt="Product">
                                    <div class="product-price">
                                        <span class="text">Chỉ từ</span>
                                        <span class="price-amount">$49.00</span>
                                    </div>
                                </div> --}}
                                @foreach ($banner as $item)
                                    <div class="single-slide slick-slide">
                                        <img src="{{ asset('storage/upload/admin/products') }}/{{ $item->main_img }}"
                                            alt="Product">
                                        <div class="product-price">
                                            <span class="text">Chỉ từ</span>
                                            <span class="price-amount">$49.00</span>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="single-slide slick-slide">
                                    <div class="product-price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1"><img src="{{ asset('assets') }}/fe/images/others/shape-1.png" alt="Shape"></li>
                <li class="shape-2"><img src="{{ asset('assets') }}/fe/images/others/shape-2.png" alt="Shape"></li>
            </ul>
        </div>

        <!-- Start Categorie Area  -->
        <div class="axil-categorie-area bg-color-white axil-section-gapcommon">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-secondary"> <i class="far fa-tags"></i>Danh mục</span>
                    <h2 class="title">Hiển thị theo danh mục</h2>
                </div>
                <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                    @foreach ($categories as $item)
                        <div class="slick-single-layout">
                            <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200"
                                data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid"
                                        src="{{ asset('storage/upload/admin/categories') }}/{{ $item->image }}"
                                        alt="product categorie">
                                    <h6 class="cat-title">{{ $item->name }}</h6>
                                </a>
                            </div>
                            <!-- End .categrie-product -->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Categorie Area  -->

        <!-- Poster Countdown Area  -->
        <div class="axil-poster-countdown">
            <div class="container">
                <div class="poster-countdown-wrap bg-lighter">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="poster-countdown-content">
                                <div class="section-title-wrapper">
                                    <span class="title-highlighter highlighter-secondary"> <i
                                            class="fal fa-headphones-alt"></i> Đừng Bỏ Lỡ!!</span>
                                    <h2 class="title">Nâng cao trải nghiệm nghe nhạc của bạn</h2>
                                </div>
                                <div class="poster-countdown countdown mb--40"></div>
                                <a href="#" class="axil-btn btn-bg-primary">Thử ngay!</a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="poster-countdown-thumbnail">
                                <img src="{{ asset('assets') }}/fe/images/product/poster/poster-03.png"
                                    alt="Poster Product">
                                <div class="music-singnal">
                                    <div class="item-circle circle-1"></div>
                                    <div class="item-circle circle-2"></div>
                                    <div class="item-circle circle-3"></div>
                                    <div class="item-circle circle-4"></div>
                                    <div class="item-circle circle-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Poster Countdown Area  -->
        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Sản phẩm
                        của chúng tôi</span>
                    <h2 class="title">Khám phá các sản phẩm của chúng tôi</h2>
                </div>
                <div
                    class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="row row--15">
                            @foreach ($productSide1 as $item)
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                    <div class="axil-product product-style-one">
                                        <div class="thumbnail">
                                            <a href="{{ route('product.detail', $item) }}">
                                                <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                                    loading="lazy" class="main-img"
                                                    src="{{ asset('storage/upload/admin/products') }}/{{ $item->main_img }}"
                                                    alt="Product Images">
                                                <img class="hover-img"
                                                    src="{{ asset('storage/upload/admin/products') }}/{{ $item->main_img }}"
                                                    alt="Product Images">
                                            </a>
                                            @if ($item->sale_price)
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% Off</div>
                                                </div>
                                            @endif
                                            <div class="product-hover-action">
                                                <ul class="cart-action">
                                                    <li class="quickview"><a data-bs-toggle="modal"
                                                            data-bs-target="#quick-view-modal-{{ $item->id }}"><i
                                                                class="far fa-eye"></i></a>
                                                    </li>
                                                    <li class="select-option">
                                                        <a href="single-product.html">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                    </li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="far fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <div class="product-rating">
                                                    <span class="icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="rating-number">(64)</span>
                                                </div>
                                                <h5 class="title"><a href="single-product.html">{{ $item->name }}</a>
                                                </h5>
                                                @if ($item->sale_price)
                                                    <div class="product-price-variant">
                                                        <span class="price current-price">{{ $item->sale_price }}
                                                            VND</span>
                                                        <span class="price old-price">{{ $item->price }} VND</span>
                                                    </div>
                                                @else
                                                    <div class="product-price-variant">
                                                        <span class="price current-price">{{ $item->price }} VND</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="row row--15">
                            @foreach ($productSide2 as $item)
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                    <div class="axil-product product-style-one">
                                        <div class="thumbnail">
                                            <a href="{{ route('product.detail') }}">
                                                <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                                    loading="lazy" class="main-img"
                                                    src="{{ asset('storage/upload/admin/products') }}/{{ $item->main_img }}"
                                                    alt="Product Images">
                                                <img class="hover-img"
                                                    src="{{ asset('storage/upload/admin/products') }}/{{ $item->main_img }}"
                                                    alt="Product Images">
                                            </a>
                                            @if ($item->sale_price)
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% Off</div>
                                                </div>
                                            @endif
                                            <div class="product-hover-action">
                                                <ul class="cart-action">
                                                    <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view-modal"><i
                                                                class="far fa-eye"></i></a>
                                                    </li>
                                                    <li class="select-option">
                                                        <a href="single-product.html">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                    </li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="far fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <div class="product-rating">
                                                    <span class="icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="rating-number">(64)</span>
                                                </div>
                                                <h5 class="title"><a href="single-product.html">{{ $item->name }}</a>
                                                </h5>
                                                @if ($item->sale_price)
                                                    <div class="product-price-variant">
                                                        <span class="price current-price">{{ $item->sale_price }}
                                                            VND</span>
                                                        <span class="price old-price">{{ $item->price }} VND</span>
                                                    </div>
                                                @else
                                                    <div class="product-price-variant">
                                                        <span class="price current-price">{{ $item->price }} VND</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mt--20 mt_sm--0">
                        <a href="shop.html" class="axil-btn btn-bg-lighter btn-load-more">Xem tất cả sản phẩm</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Expolre Product Area  -->

        <!-- Start New Arrivals Product Area  -->
        <div class="axil-new-arrivals-product-area bg-color-white axil-section-gap pb--0">
            <div class="container">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i>Tuần
                            này</span>
                        <h2 class="title">Hàng mới về</h2>
                    </div>
                    <div
                        class="new-arrivals-product-activation slick-layout-wrapper--30 axil-slick-arrow  arrow-top-slide">
                        @foreach ($new as $item)
                            <div class="slick-single-layout">
                                <div class="axil-product product-style-two">
                                    <div class="thumbnail">
                                        <a href="single-product.html">
                                            <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500"
                                                src="{{ asset('storage/upload/admin/products') }}/{{ $item->main_img }}"
                                                alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">
                                                {{ number_format((1 - $item->sale_price / $item->price) * 100, 2) }}
                                                %
                                                OFF</div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant">
                                                    <li class="color-extra-01 active"><span><span
                                                                class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title"><a href="single-product.html">{{ $item->name }}</a></h5>
                                            <div class="product-price-variant">
                                                @if ($item->sale_price)
                                                    <del class="price old-price">{{ number_format($item->price) }}
                                                        VND</del>
                                                    <p class="price current-price">{{ number_format($item->sale_price) }}
                                                        VND</p>
                                                @else
                                                    <p class="price current-price">{{ number_format($item->price) }}
                                                        VND</p>
                                                @endif
                                            </div>
                                            <div class="product-hover-action">
                                                <ul class="cart-action">
                                                    <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view-modal-{{ $item->id }}"><i
                                                                class="far fa-eye"></i></a>
                                                    </li>
                                                    <li class="select-option"><a href="single-product.html">Thêm vào giỏ
                                                            hàng</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="far fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- End New Arrivals Product Area  -->

        <!-- Start Most Sold Product Area  -->
        <div class="axil-most-sold-product axil-section-gap">
            <div class="container">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper section-title-center">
                        <span class="title-highlighter highlighter-primary"><i class="fas fa-star"></i> Bán chạy
                            nhất</span>
                        <h2 class="title">Bán chạy nhất ở eTrade Store</h2>
                    </div>
                    <div class="row row-cols-xl-2 row-cols-1 row--15">
                        @foreach ($fearture as $item)
                            <div class="col">
                                <div class="axil-product-list">
                                    <div class="thumbnail" class="w-25">
                                        <a href="single-product.html">
                                            <img data-sal="zoom-in" data-sal-delay="100" data-sal-duration="1500"
                                                src="{{ asset('storage/upload/admin/products') }}/{{ $item->main_img }}"
                                                alt="Yantiti Leather Bags">
                                        </a>
                                    </div>
                                    <div class="product-content w-50 ">
                                        <div class="product-rating">
                                            <span class="rating-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fal fa-star"></i>
                                            </span>
                                            <span class="rating-number"><span>100+</span> Đánh giá</span>
                                        </div>
                                        <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                                        @if ($item->sale_price)
                                            <div class="product-price-variant">
                                                <p class="price current-price">{{ number_format($item->sale_price) }}
                                                    VND</p>
                                                <p class="price old-price">{{ number_format($item->price) }} VND</p>
                                            </div>
                                        @else
                                            <div class="product-price-variant">
                                                <p class="price current-price">{{ number_format($item->price) }}
                                                    VND</p>
                                            </div>
                                        @endif
                                        <div class="product-cart">
                                            <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                            <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End Most Sold Product Area  -->

        <!-- Start Why Choose Area  -->
        <div class="axil-why-choose-area pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper section-title-center">
                    <span class="title-highlighter highlighter-secondary"><i class="fal fa-thumbs-up"></i>Tại sao chọn
                        chúng tôi</span>
                    <h2 class="title">Tại sao mọi người lại chọn chúng tôi</h2>
                </div>
                <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 row--20">
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('assets') }}/fe/images/icons/service6.png" alt="Service">
                            </div>
                            <h6 class="title">Giao hàng nhanh &amp; bảo mật</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('assets') }}/fe/images/icons/service7.png" alt="Service">
                            </div>
                            <h6 class="title">Bảo đảm 100% về sản phẩm</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('assets') }}/fe/images/icons/service8.png" alt="Service">
                            </div>
                            <h6 class="title">Chính sách hoàn trả 24 giờ</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('assets') }}/fe/images/icons/service9.png" alt="Service">
                            </div>
                            <h6 class="title">Chính sách hoàn trả 24 giờ</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('assets') }}/fe/images/icons/service10.png" alt="Service">
                            </div>
                            <h6 class="title">Chất lượng chuyên nghiệp</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Area  -->


        <!-- Start Axil Product Poster Area  -->
        <div class="axil-poster">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb--30">
                        <div class="single-poster">
                            <a href="shop.html">
                                <img src="{{ asset('assets') }}/fe/images/product/poster/poster-01.png"
                                    alt="eTrade promotion poster">
                                <div class="poster-content">
                                    <div class="inner">
                                        <h3 class="title">Rich sound, <br> for less.</h3>
                                        <span class="sub-title">Collections <i class="fal fa-long-arrow-right"></i></span>
                                    </div>
                                </div>
                                <!-- End .poster-content -->
                            </a>
                        </div>
                        <!-- End .single-poster -->
                    </div>
                    <div class="col-lg-6 mb--30">
                        <div class="single-poster">
                            <a href="shop-sidebar.html">
                                <img src="{{ asset('assets') }}/fe/images/product/poster/poster-02.png"
                                    alt="eTrade promotion poster">
                                <div class="poster-content content-left">
                                    <div class="inner">
                                        <span class="sub-title">Ưu đãi 50% trong mùa đông</span>
                                        <h3 class="title">Get VR <br> Reality Glass</h3>
                                    </div>
                                </div>
                                <!-- End .poster-content -->
                            </a>
                        </div>
                        <!-- End .single-poster -->
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
