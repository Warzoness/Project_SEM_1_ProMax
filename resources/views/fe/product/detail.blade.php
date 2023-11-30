@extends('fe.masterview')
@section('tittle', 'Chi tiết sản phẩm')
@section('main-content')

    <main class="main-wrapper">
        <div class="axil-single-product-area bg-color-white">
            <div class="single-product-thumb axil-section-gapcommon single-product-modern">
                <div class="container">
                    <form class="row row--20" action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="text" name="id" hidden value="{{ $product->id }}">
                        <div class="col-lg-6 mb--40">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-large-thumbnail-4 single-product-thumbnail axil-product">
                                        <div class="thumbnail">
                                            <img src="{{ asset('storage/upload/admin/products') }}/{{ $product->main_img }}"
                                                alt="Product Images">
                                        </div>
                                        @foreach ($imgProducts as $item)
                                            <div class="thumbnail">
                                                <img src="{{ asset('storage/upload/admin/productImg') }}/{{ $item->image }}"
                                                    alt="Product Images">
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div
                                        class="small-thumb-wrapper product-small-thumb-4 slick-layout-wrapper--10 axil-slick-arrow arrow-both-side">
                                        <div class="small-thumb-img">
                                            <img src="{{ asset('storage/upload/admin/products') }}/{{ $product->main_img }}"
                                                alt="samll-thumb">
                                        </div>
                                        @foreach ($imgProducts as $item)
                                            <div class="small-thumb-img">
                                                <img src="{{ asset('storage/upload/admin/productImg') }}/{{ $item->image }}"
                                                    alt="samll-thumb">
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    <h2 class="product-title">{{ $product->name }}</h2>
                                    <div class="product-rating">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="review-number">6,405</div>
                                        <div class="total-answerd">2 answered questions</div>
                                    </div>
                                    <div class="product-variations-wrapper">

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation product-size-variation">
                                        </div>
                                        <!-- End Product Variation  -->
                                        <!-- Start Product Variation  -->
                                        @if ($product->sale_price)
                                            <h6 class="title">Giá : <del>{{ number_format($product->price) }} VND</del>
                                            </h6>
                                            <h6 class="title">Giá Khuyến Mãi :
                                                <span>{{ number_format($product->sale_price) }}
                                                    VND</span>
                                            </h6>
                                        @else
                                            <h6 class="title">Giá : <span>{{ number_format($product->price) }}
                                                    VND</span>
                                            </h6>
                                        @endif
                                        <div class="product-variation">
                                            <h6 class="title">Màu:</h6>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant mt--0">
                                                    <li class="color-extra-01 active"><span><span
                                                                class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-04"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Product Variation  -->
                                        <div class="product-variation quantity-variant-wrapper">
                                            <h6 class="title">Số lượng: </h6>
                                            <div class="pro-qty"><input type="text" value="1" name="quantity"></div>
                                        </div>

                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper">

                                        <!-- Start Product Action  -->
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><button type="submit" name="action"
                                                    class="axil-btn btn-bg-primary"><i class="far fa-shopping-cart"></i>
                                                    Thêm vào giỏ</button></li>

                                        </ul>
                                        <!-- End Product Action  -->

                                    </div>
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End .single-product-thumb -->
            <div class="woocommerce-tabs wc-tabs-wrapper bg-lighter wc-tab-style-two">
                <div class="container">
                    <div class="section-title-wrapper section-title-border">
                        <h2 class="title">Chi tiết sản phẩm💥</h2>
                    </div>
                    <div class="tabs-wrap">
                        <ul class="nav tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="active" id="description-tab" data-bs-toggle="tab" href="#description"
                                    role="tab" aria-controls="description" aria-selected="true">Thông số kỹ thuật</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                                    aria-controls="reviews" aria-selected="false">Đánh giá</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="product-desc-wrapper">
                                    <div class="single-desc">
                                        <h5 class="title">
                                            Tính năng chính</h5>
                                        <div class="row">
                                            {!! $product->description !!}
                                        </div>

                                    </div>
                                    <!-- End .row -->
                                </div>
                                <!-- End .product-desc-wrapper -->
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="reviews-wrapper">
                                    <div class="row">
                                        <div class="col-lg-6 mb--40">
                                            <div class="axil-comment-area pro-desc-commnet-area">
                                                <h5 class="title">Đánh giá sản phẩm này</h5>
                                                <ul class="comment-list">
                                                    <!-- Start Single Comment  -->
                                                    @foreach ($comments as $item)
                                                        <li class="comment">
                                                            <div class="comment-body">
                                                                <div class="single-comment">
                                                                    <div class="comment-img">
                                                                        <img src="{{ asset('assets') }}/fe/images/blog/author-image-5.png"
                                                                            alt="Author Images">
                                                                    </div>
                                                                    <div class="comment-inner">
                                                                        <h6 class="commenter">
                                                                            <a class="hover-flip-item-wrapper"
                                                                                href="#">
                                                                                <span class="hover-flip-item">
                                                                                    <span
                                                                                        data-text="Rahabi Khan">{{ $item->fullname }}</span>
                                                                                </span>
                                                                            </a>
                                                                        </h6>
                                                                        <div class="comment-text">
                                                                            <p>“ {{ $item->comment }}” </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                    <!-- End Single Comment  -->
                                                </ul>
                                            </div>
                                            <!-- End .axil-commnet-area -->
                                        </div>
                                        <!-- End .col -->
                                        <div class="col-lg-6 mb--40">
                                            <!-- Start Comment Respond  -->
                                            <div class="comment-respond pro-des-commend-respond mt--0">
                                                <h5 class="title mb--30">Thêm đánh giá</h5>
                                                <p>Địa chỉ email của bạn sẽ không bị công khai. Các trường bắt buộc được
                                                    đánh dấu *</p>
                                                <div class="rating-wrapper d-flex-center mb--40">
                                                    Đánh giá của bạn <span class="require">*</span>
                                                    <div class="reating-inner ml--20">
                                                        <a href=""><i class="fal fa-star"></i></a>
                                                        <a href=""><i class="fal fa-star"></i></a>
                                                        <a href=""><i class="fal fa-star"></i></a>
                                                        <a href=""><i class="fal fa-star"></i></a>
                                                        <a href=""><i class="fal fa-star"></i></a>
                                                    </div>
                                                </div>

                                                <form action="{{ route('comment.add') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Ghi chú khác (tùy chọn)</label>
                                                                <textarea placeholder="Bình luận của bạn" name="comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>Tên <span class="require">*</span></label>
                                                                <input id="name" type="text" name="fullname"
                                                                    value="{{ Auth::user() ? Auth::user()->fullname : '' }}">
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $product->id }}">
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>Email <span class="require">*</span> </label>
                                                                <input id="email" type="email" name="email"
                                                                    value="{{ Auth::user() ? Auth::user()->email : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-submit">
                                                                <button type="submit" id="submit"
                                                                    class="axil-btn btn-bg-primary w-auto">Gửi đánh
                                                                    giá</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- End Comment Respond  -->
                                        </div>
                                        <!-- End .col -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product-features">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="single-features">
                                    <div class="icon">
                                        <i class="far fa-hand-holding-box"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Dễ dàng trả lại</h6>
                                        <p>Bất cứ khi nào bạn cũng có thể trả hàng mà không phải thanh toán gì</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-features">
                                    <div class="icon quality">
                                        <i class="fal fa-badge-check"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Dịch vụ chất lượng</h6>
                                        <p>Chúng tôi sẵn sàng cung cấp cho bạn dịch vụ chất lượng vì hạnh phúc của bạn</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-features">
                                    <div class="icon original">
                                        <i class="fal fa-box"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Sản phẩm gốc</h6>
                                        <p>Chúng tôi cung cấp cho bạn mỗi sản phẩm đều có nguồn gốc rõ ràng </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- woocommerce-tabs -->

        </div>
        <!-- Start Expolre Product Area  -->
        {{-- <div class="axil-new-arrivals-product-area fullwidth-container flash-sale-area section-gap-80-35">
            <div class="container ml--xxl-0">
                <div class="section-title-border slider-section-title">
                    <h2 class="title">Đã xem gần đây 💥</h2>
                </div>
                <div class="recently-viwed-activation slick-layout-wrapper--15 axil-slick-angle angle-top-slide">
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-eight">
                            <div class="thumbnail">
                                <a href="single-product-8.html">
                                    <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="800" loading="lazy"
                                        class="main-img"
                                        src="{{ asset('assets') }}/fe/images/product/fashion/product-26.png"
                                        alt="Product Images">
                                </a>
                                <div class="label-block label-left">
                                    <div class="product-badget sale">Giảm giá</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="select-option">
                                            <a href="single-product-8.html">
                                                <i class="far fa-shopping-cart"></i> Thêm vào giỏ hàng
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product-8.html">Kalrez® Spectrum™ 6375</a></h5>
                                    <div class="product-rating">
                                        <span class="icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span class="rating-number">6,400</span>
                                    </div>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$30.00</span>
                                        <span class="price current-price">$17.84</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-eight">
                            <div class="thumbnail">
                                <a href="single-product-8.html">
                                    <img data-sal="zoom-out" data-sal-delay="150" data-sal-duration="800" loading="lazy"
                                        class="main-img"
                                        src="{{ asset('assets') }}/fe/images/product/fashion/product-27.png"
                                        alt="Product Images">
                                </a>
                                <div class="label-block label-left">
                                    <div class="product-badget">GIẢM 20%</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="select-option">
                                            <a href="single-product-8.html">
                                                <i class="far fa-shopping-cart"></i> Thêm vào giỏ hàng
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product-8.html">Calvin Klein womens Solid Sheath
                                            With Chiffon Bell Sleeves Dress</a></h5>
                                    <div class="product-rating">
                                        <span class="icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span class="rating-number">6,400</span>
                                    </div>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$100.00</span>
                                        <span class="price current-price">$78.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-eight">
                            <div class="thumbnail">
                                <a href="single-product-8.html">
                                    <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy"
                                        class="main-img"
                                        src="{{ asset('assets') }}/fe/images/product/fashion/product-28.png"
                                        alt="Product Images">
                                </a>
                                <div class="label-block label-left">
                                    <div class="product-badget">BÁN CHẠY</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="select-option">
                                            <a href="single-product-8.html">
                                                <i class="far fa-shopping-cart"></i> Thêm vào giỏ hàng
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product-8.html">Gildan Men's Ultra Cotton T-Shirt,
                                            Style G2000,</a></h5>
                                    <div class="product-rating">
                                        <span class="icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span class="rating-number">6,400</span>
                                    </div>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$20.00</span>
                                        <span class="price current-price">$17.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-eight">
                            <div class="thumbnail">
                                <a href="single-product-8.html">
                                    <img data-sal="zoom-out" data-sal-delay="250" data-sal-duration="800" loading="lazy"
                                        class="main-img"
                                        src="{{ asset('assets') }}/fe/images/product/fashion/product-29.png"
                                        alt="Product Images">
                                </a>
                                <div class="label-block label-left">
                                    <div class="product-badget sold-out">HẾT HÀNG</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="select-option">
                                            <a href="single-product-8.html">
                                                <i class="far fa-shopping-cart"></i> Thêm vào giỏ hàng
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product-8.html">Essentials Men's Regular-Fit
                                            Short-Sleeve Crewneck T-Shirt</a></h5>
                                    <div class="product-rating">
                                        <span class="icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span class="rating-number">6,400</span>
                                    </div>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$12.00</span>
                                        <span class="price current-price">$5.22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-eight">
                            <div class="thumbnail">
                                <a href="single-product-8.html">
                                    <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="800" loading="lazy"
                                        class="main-img"
                                        src="{{ asset('assets') }}/fe/images/product/fashion/product-30.png"
                                        alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="select-option">
                                            <a href="single-product-8.html">
                                                <i class="far fa-shopping-cart"></i>Thêm vào giỏ hàng
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product-8.html">2.4G Remote Control Rc BB-8 Droid
                                            Football Robot</a></h5>
                                    <div class="product-rating">
                                        <span class="icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span class="rating-number">1,300</span>
                                    </div>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$100.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-eight">
                            <div class="thumbnail">
                                <a href="single-product-8.html">
                                    <img data-sal="zoom-out" data-sal-delay="150" data-sal-duration="800" loading="lazy"
                                        class="main-img"
                                        src="{{ asset('assets') }}/fe/images/product/fashion/product-31.png"
                                        alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="select-option">
                                            <a href="single-product-8.html">
                                                <i class="far fa-shopping-cart"></i> Thêm vào giỏ hàng
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product-8.html">Perfume Nat White Chocolate Flavor
                                            WONF (BD-10914)</a></h5>
                                    <div class="product-rating">
                                        <span class="icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span class="rating-number">2,300</span>
                                    </div>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$14.81</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-eight">
                            <div class="thumbnail">
                                <a href="single-product-8.html">
                                    <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy"
                                        class="main-img"
                                        src="{{ asset('assets') }}/fe/images/product/fashion/product-32.png"
                                        alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="select-option">
                                            <a href="single-product-8.html">
                                                <i class="far fa-shopping-cart"></i> Thêm vào giỏ hàng
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product-8.html">Women's Winter Mid Length Thick
                                            Warm Faux Lamb Wool.</a></h5>
                                    <div class="product-rating">
                                        <span class="icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span class="rating-number">50</span>
                                    </div>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$59.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-eight">
                            <div class="thumbnail">
                                <a href="single-product-8.html">
                                    <img data-sal="zoom-out" data-sal-delay="250" data-sal-duration="800" loading="lazy"
                                        class="main-img"
                                        src="{{ asset('assets') }}/fe/images/product/fashion/product-33.png"
                                        alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="select-option">
                                            <a href="single-product-8.html">
                                                <i class="far fa-shopping-cart"></i> Thêm vào giỏ hàng
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product-8.html">Ion8 One Touch Sport / Bike Water
                                            Bottle - Leakproof</a></h5>
                                    <div class="product-rating">
                                        <span class="icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span class="rating-number">652</span>
                                    </div>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Expolre Product Area  -->
        <div class="sale-banner-area mb-5">
            <div class="container">
                <div class="sale-banner-thumb">
                    <a href="shop.html"><img src="{{ asset('assets') }}/fe/images/banner/sale_banner.png"
                            alt="Sale Banner"></a>
                </div>
            </div>
        </div>

    </main>


@endsection
