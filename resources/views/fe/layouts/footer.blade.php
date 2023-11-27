<div class="axil-newsletter-area axil-section-gap pt--0">
    <div class="container">
        <div class="etrade-newsletter-wrapper bg_image bg_image--5">
            <div class="newsletter-content">
                <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Bản tin</span>
                <h2 class="title mb--40 mb_sm--30">Nhận cập nhật hàng tuần</h2>
                <div class="input-group newsletter-form">
                    <div class="position-relative newsletter-inner mb--15">
                        <input placeholder="example@gmail.com" type="text">
                    </div>
                    <button type="submit" class="axil-btn mb--15">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End .container -->
</div>

<div class="service-area">
    <div class="container">
        <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="{{ asset('assets') }}/fe/images/icons/service1.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Giao hàng nhanh &amp; bảo mật</h6>
                        <p>Nói về dịch vụ của bạn.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="{{ asset('assets') }}/fe/images/icons/service2.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Bảo đảm hoàn tiền</h6>
                        <p>Trong vòng 10 ngày.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="{{ asset('assets') }}/fe/images/icons/service3.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Chính sách hoàn trả 24h</h6>
                        <p>Không câu hỏi</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="{{ asset('assets') }}/fe/images/icons/service4.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Hỗ trợ chuyên nghiệp</h6>
                        <p>Hỗ trợ 24/7.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Start Footer Area  -->
<footer class="axil-footer-area footer-style-2">
    <!-- Start Footer Top Area  -->
    <div class="footer-top separator-top">
        <div class="container">
            <div class="row">
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Hỗ trợ</h5>
                        <!-- <div class="logo mb--30">
                        <a href="index.html">
                            <img class="light-logo" src="assets/images/logo/logo.png" alt="Logo Images">
                        </a>
                    </div> -->
                        <div class="inner">
                            <p>238 Hoàng Quốc Việt, <br>
                                Cổ Nhuế, Bắc Từ Liêm, <br>
                                Hà Nội, Việt Nam.
                            </p>
                            <ul class="support-list-item">
                                <li><a href="mailto:example@domain.com"><i class="fal fa-envelope-open"></i>
                                        example@domain.com</a></li>
                                <li><a href="tel:(+01)850-315-5862"><i class="fal fa-phone-alt"></i> (+01)
                                        850-315-5862</a></li>
                                <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Tài khoản</h5>
                        <div class="inner">
                            <ul>
                                <li><a href="{{ route('home.myAccount') }}">Tài khoản của tôi</a></li>
                                <li><a href="{{ route('home.sign-up') }}">Đăng nhập / Đăng ký</a></li>
                                <li><a href="{{ route('home.cart') }}">Giỏ hàng</a></li>
                                <li><a href="{{ route('home.wishlist') }}">Yêu thích</a></li>
                                <li><a href="{{ route('fe-product.index') }}">Cửa hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Truy cập nhanh</h5>
                        <div class="inner">
                            <ul>
                                <li><a href="{{ route('home.privacy-policy') }}">Chính sách bảo mật</a></li>
                                <li><a href="{{ route('home.terms-of-service') }}">Điều khoản dịch vụ</a></li>
                                <li><a href="#">Câu hỏi thường gặp</a></li>
                                <li><a href="{{ route('home.contact') }}">Liên hệ</a></li>
                                <li><a href="{{ route('home.about') }}">Giới thiệu</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Tải ứng dụng</h5>
                        <div class="inner">
                            <span>Tiết kiệm $3 với app & người mới</span>
                            <div class="download-btn-group">
                                <div class="qr-code">
                                    <img src="assets/images/others/qr.png" alt="Axilthemes">
                                </div>
                                <div class="app-link">
                                    <a href="#">
                                        <img src="assets/images/others/app-store.png" alt="App Store">
                                    </a>
                                    <a href="#">
                                        <img src="assets/images/others/play-store.png" alt="Play Store">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
            </div>
        </div>
    </div>
    <!-- End Footer Top Area  -->
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-default separator-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4">
                    <div class="social-share">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="copyright-left d-flex flex-wrap justify-content-center">
                        <ul class="quick-link">
                            <li>© 2023. All rights reserved by <a target="_blank" href="">VMC</a>.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div
                        class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                        <span class="card-text">Chỉ chấp nhận</span>
                        <ul class="payment-icons-bottom quick-link">
                            <li><img src="assets/images/icons/cart/cart-1.png" alt="paypal cart"></li>
                            <li><img src="assets/images/icons/cart/cart-2.png" alt="paypal cart"></li>
                            <li><img src="assets/images/icons/cart/cart-5.png" alt="paypal cart"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>
<!-- End Footer Area  -->
