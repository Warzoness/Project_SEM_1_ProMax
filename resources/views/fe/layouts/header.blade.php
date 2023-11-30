<a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
<header class="header axil-header header-style-1">

    <div class="axil-header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="header-top-dropdown">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="header-top-link">
                        @if (!Auth::user())
                            <ul class="quick-link">
                                <li><a href="{{ route('user.create') }}">Đăng ký</a></li>
                                <li><a href="{{ route('user.index') }}">Đăng nhập</a></li>
                            </ul>
                        @else
                            <ul class="quick-link">
                                <li>Xin chào, <strong class="text-danger">{{ Auth::user()->fullname }}</strong></li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Mainmenu Area  -->
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-brand">
                    <a href="{{ route('home.index') }}" class="logo logo-dark">
                        <img src="{{ asset('assets/fe/images/logo/logo.png') }}" alt="Site Logo">
                    </a>
                    <a href="{{ route('home.index') }}" class="logo logo-light">
                        <img src="{{ asset('assets/fe/images/logo/logo-light.png') }}" alt="Site Logo">
                    </a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav">
                        <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                        <div class="mobile-nav-brand">
                            <a href="index.html" class="logo">
                                <img src="{{ asset('assets/fe/images/logo.png') }}" alt="Site Logo">
                            </a>
                        </div>
                        <ul class="mainmenu">
                            <li class="menu-item">
                                <a href="{{ route('home.index') }}">Trang Chủ</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('fe-product.index') }}">Cửa hàng</a>
                            </li>

                            <li><a href="{{ route('home.about') }}">Giới thiệu</a></li>
                            <li class="menu-item">
                                <a href="{{ route('home.blogs') }}">Bài viết</a>
                            </li>
                            <li><a href="{{ route('home.contact') }}">Địa chỉ & liên hệ</a></li>
                        </ul>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-action">
                    <ul class="action-list">
                        <li class="axil-search">
                            <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                <i class="flaticon-magnifying-glass"></i>
                            </a>
                        </li>
                        <li class="wishlist">
                            <a href="{{ route('home.wishlist') }}">
                                <i class="flaticon-heart"></i>
                            </a>
                        </li>
                        <li class="shopping-cart">
                            <a href="{{ route('cart.index') }}" class="cart-dropdown-btn">
                                <span class="cart-count">{{ $cart->getTotalQuantity() }}</span>
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </li>
                        <li class="my-account">
                            <a href="javascript:void(0)">
                                <i class="flaticon-person"></i>
                            </a>
                            <div class="my-account-dropdown">
                                <ul>
                                    @if (Auth::user())
                                        <li>
                                            <a href="{{ route('home.myAccount') }}">Tài khoản của tôi</a>
                                        </li>
                                    @endif
                                    <li>
                                        <a href="#">Hỗ trợ</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('user.logout') }}">Đăng Xuất</a>
                                    </li>
                                </ul>
                                @if (!Auth::user())
                                    <div class="login-btn">
                                        <a href="{{ route('user.index') }}" class="axil-btn btn-bg-primary">Đăng
                                            nhập</a>
                                    </div>
                                    <div class="reg-footer text-center">Chưa có tài khoản? <a
                                            href="{{ route('user.create') }}" class="btn-link">ĐĂNG KÝ</a></div>
                                @endif
                            </div>
                        </li>
                        <li class="axil-mobile-toggle">
                            <button class="menu-btn mobile-nav-toggler">
                                <i class="flaticon-menu-2"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
