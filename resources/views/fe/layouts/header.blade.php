<a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
<header class="header axil-header header-style-1">

    <div class="axil-header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="header-top-dropdown">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tiếng Việt
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Tiếng Việt</a></li>
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Spanish</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                VND
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">VND</a></li>
                                <li><a class="dropdown-item" href="#">USD</a></li>
                                <li><a class="dropdown-item" href="#">EUR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="header-top-link">
                        <ul class="quick-link">
                            <li><a href="#">Trợ giúp</a></li>
                            <li><a href="{{ route('home.sign-up') }}">Đăng ký</a></li>
                            <li><a href="{{ route('home.sign-in') }}">Đăng nhập</a></li>
                        </ul>
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
                        <img src="assets/images/logo/logo.png" alt="Site Logo">
                    </a>
                    <a href="{{ route('home.index') }}" class="logo logo-light">
                        <img src="assets/images/logo/logo-light.png" alt="Site Logo">
                    </a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav">
                        <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                        <div class="mobile-nav-brand">
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo/logo.png" alt="Site Logo">
                            </a>
                        </div>
                        <ul class="mainmenu">
                            <li class="menu-item">
                                <a href="{{ route('home.index') }}">Trang Chủ</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('fe-product.index') }}">Cửa hàng</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Trang</a>
                                <ul class="axil-submenu">
                                    <li><a href="{{ route('home.wishlist') }}">Wishlist</a></li>
                                    <li><a href="{{ route('home.cart') }}">Cart</a></li>
                                    <li><a href="{{ route('home.checkout') }}">Checkout</a></li>
                                    <li><a href="{{ route('home.myAccount') }}">Account</a></li>
                                    <li><a href="{{ route('home.sign-up') }}">Sign Up</a></li>
                                    <li><a href="{{ route('home.sign-in') }}">Sign In</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                    <li><a href="reset-password.html">Reset Password</a></li>
                                    <li><a href="{{ route('home.privacy-policy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ route('home.terms-of-service') }}">Terms Of Service</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
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
                            <a href="{{ route('home.cart') }}" class="cart-dropdown-btn">
                                <span class="cart-count">3</span>
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </li>
                        <li class="my-account">
                            <a href="javascript:void(0)">
                                <i class="flaticon-person"></i>
                            </a>
                            <div class="my-account-dropdown">
                                <ul>
                                    <li>
                                        <a href="{{ route('home.myAccount') }}">Tài khoản của tôi</a>
                                    </li>
                                    <li>
                                        <a href="#">Hỗ trợ</a>
                                    </li>
                                    <li>
                                        <a href="#">Ngôn ngữ</a>
                                    </li>
                                </ul>
                                <div class="login-btn">
                                    <a href="{{ route('home.sign-in') }}" class="axil-btn btn-bg-primary">Đăng
                                        nhập</a>
                                </div>
                                <div class="reg-footer text-center">Chưa có tài khoản? <a
                                        href="{{ route('home.sign-up') }}" class="btn-link">ĐĂNG KÝ</a></div>
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
