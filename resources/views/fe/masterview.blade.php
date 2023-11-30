<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Oct 2023 08:13:31 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('tittle')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/fe/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fe/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/fe/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/fe/css/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/fe/css/vendor/slick.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/fe/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/fe/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/fe/css/vendor/sal.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/fe/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/fe/css/vendor/base.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/fe/css/style.min.css">

</head>


<body class="sticky-header newsletter-popup-modal">

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

    @include('fe.layouts.header')
    @yield('main-content')
    <!-- Product Quick View Modal Start -->

    <!-- Product Quick View Modal End -->

    <!-- Header Search Modal End -->
    <div class="header-search-modal" id="header-search-modal">
        <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
        <div class="header-search-wrap">
            <div class="card-header">
                <form action="#">
                    <div class="input-group">
                        <input type="search" class="form-control" name="prod-search" id="prod-search"
                            placeholder="Write Something....">
                        <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="search-result-header">
                    <h6 class="title">24 Result Found</h6>
                    <a href="shop.html" class="view-all">View All</a>
                </div>
                <div class="psearch-results">
                    <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img src="{{ asset('assets') }}/fe/images/product/electric/product-09.png"
                                    alt="Yantiti Leather Bags">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <span class="rating-icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </span>
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img src="{{ asset('assets') }}/fe/images/product/electric/product-09.png"
                                    alt="Yantiti Leather Bags">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <span class="rating-icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </span>
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Search Modal End -->


    <div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Xem giỏ hàng nhanh</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="cart-body">
                <ul class="cart-item-list">
                    @foreach ($cartItems as $key => $item)
                        <li class="cart-item">
                            <div class="item-img">
                                <a href="single-product.html"><img
                                        src="{{ asset('storage/upload/admin/products') }}/{{ $item['image'] }}"
                                        alt="Commodo Blown Lamp"></a>
                                <form action="{{ route('cart.remove', $item['product_id']) }}">
                                    @csrf
                                    <button class="close-btn" type="submit"><i class="fas fa-times"></i></button>
                                </form>
                            </div>
                            <div class="item-content">
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
                                <h3 class="item-title"><a href="single-product-3.html">{{ $item['name'] }}</a></h3>
                                <div class="item-price">{{ number_format($item['price']) }} VND</div>
                                <div class="pro-qty item-quantity">
                                    <input type="number" class="quantity-input" value="{{ $item['quantity'] }}">
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Tổng:</span>
                    <span class="subtotal-amount">{{ number_format($cart->getTotalPrice()) }} VND</span>
                </h3>
                <div class="group-btn">
                    <a href="{{ route('cart.index') }}" class="axil-btn btn-bg-primary viewcart-btn">Xem giỏ hàng</a>
                    <a href="{{ route('home.checkout') }}" class="axil-btn btn-bg-secondary checkout-btn">Thanh
                        toán</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Offer Modal Start -->

    <div class="closeMask"></div>
    @include('fe.layouts.footer')
    @include('sweetalert::alert')


    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets') }}/fe/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets') }}/fe/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets') }}/fe/js/vendor/popper.min.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/slick.min.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/js.cookie.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/jquery.style.switcher.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/jquery-ui.min.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/jquery.ui.touch-punch.min.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/jquery.countdown.min.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/sal.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/counterup.js"></script>
    <script src="{{ asset('assets') }}/fe/js/vendor/waypoints.min.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets') }}/fe/js/main.js"></script>

</body>


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Oct 2023 08:14:14 GMT -->

</html>
