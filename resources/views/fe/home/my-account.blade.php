@extends('masterview')
@section('tittle','Tài khoản của tôi')
@section('main-content')
    
<div class="header-top-campaign">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="header-campaign-activation axil-slick-arrow arrow-both-side header-campaign-arrow">
                    <div class="slick-slide">
                        <div class="campaign-content">
                            <p>STUDENT NOW GET 10% OFF : <a href="#">GET OFFER</a></p>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="campaign-content">
                            <p>STUDENT NOW GET 10% OFF : <a href="#">GET OFFER</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<!-- End Header -->

<main class="main-wrapper">
<!-- Start Breadcrumb Area  -->
<div class="axil-breadcrumb-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="inner">
                    <ul class="axil-breadcrumb">
                        <li class="axil-breadcrumb-item"><a href="{{route('home.index')}}">Trang Chủ</a></li>
                        <li class="separator"></li>
                        <li class="axil-breadcrumb-item active" aria-current="page">Tài khoản của tôi</li>
                    </ul>
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="inner">
                    <div class="bradcrumb-thumb">
                        <img src="assets/images/product/product-45.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Area  -->

<!-- Start My Account Area  -->
<div class="axil-dashboard-area axil-section-gap">
    <div class="container">
        <div class="axil-dashboard-warp">
            <div class="axil-dashboard-author">
                <div class="media">
                    <div class="thumbnail">
                        <img src="assets/images/product/author1.png" alt="Hello Annie">
                    </div>
                    <div class="media-body">
                        <h5 class="title mb-0">Xin chào Annie</h5>
                        <span class="joining-date">Thành viên của eTrade từ T9 2020 </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-4">
                    <aside class="axil-dashboard-aside">
                        <nav class="axil-dashboard-nav">
                            <div class="nav nav-tabs" role="tablist">
                                <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-dashboard" role="tab" aria-selected="true"><i class="fas fa-th-large"></i>Bảng điều khiển</a>
                                <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-orders" role="tab" aria-selected="false"><i class="fas fa-shopping-basket"></i>Các đơn hàng</a>
                                <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-address" role="tab" aria-selected="false"><i class="fas fa-home"></i>Địa chỉ</a>
                                <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-account" role="tab" aria-selected="false"><i class="fas fa-user"></i>Thông tin tài khoản</a>
                                <a class="nav-item nav-link" href="sign-in.html"><i class="fal fa-sign-out"></i>Đăng xuất</a>
                            </div>
                        </nav>
                    </aside>
                </div>
                <div class="col-xl-9 col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel">
                            <div class="axil-dashboard-overview">
                                <div class="welcome-text">Xin chào Annie (không phải <span>Annie?</span> <a href="sign-in.html">Đăng xuất</a>)</div>
                                <p>Từ bảng điều khiển tài khoản của mình, bạn có thể xem các đơn đặt hàng gần đây, quản lý địa chỉ giao hàng và thanh toán cũng như chỉnh sửa mật khẩu và chi tiết tài khoản của mình.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-orders" role="tabpanel">
                            <div class="axil-dashboard-order">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Mã đơn hàng</th>
                                                <th scope="col">Ngày</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Tổng</th>
                                                <th scope="col">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">#6523</th>
                                                <td>September 10, 2020</td>
                                                <td>Processing</td>
                                                <td>$326.63 for 3 items</td>
                                                <td><a href="#" class="axil-btn view-btn">Xem</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#6523</th>
                                                <td>September 10, 2020</td>
                                                <td>On Hold</td>
                                                <td>$326.63 for 3 items</td>
                                                <td><a href="#" class="axil-btn view-btn">Xem</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#6523</th>
                                                <td>September 10, 2020</td>
                                                <td>Processing</td>
                                                <td>$326.63 for 3 items</td>
                                                <td><a href="#" class="axil-btn view-btn">Xem</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#6523</th>
                                                <td>September 10, 2020</td>
                                                <td>Processing</td>
                                                <td>$326.63 for 3 items</td>
                                                <td><a href="#" class="axil-btn view-btn">Xem</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#6523</th>
                                                <td>September 10, 2020</td>
                                                <td>Processing</td>
                                                <td>$326.63 for 3 items</td>
                                                <td><a href="#" class="axil-btn view-btn">Xem</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-address" role="tabpanel">
                            <div class="axil-dashboard-address">
                                <p class="notice-text">Các địa chỉ sau sẽ được sử dụng trên trang thanh toán theo mặc định.</p>
                                <div class="row row--30">
                                    <div class="col-lg-6">
                                        <div class="address-info mb--40">
                                            <div class="addrss-header d-flex align-items-center justify-content-between">
                                                <h4 class="title mb-0">Địa chỉ giao hàng</h4>
                                                <a href="#" class="address-edit"><i class="far fa-edit"></i></a>
                                            </div>
                                            <ul class="address-details">
                                                <li>Tên: Annie Mario</li>
                                                <li>Email: annie@example.com</li>
                                                <li>Sđt: 1234 567890</li>
                                                <li class="mt--30">7398 Smoke Ranch Road <br>
                                                Las Vegas, Nevada 89128</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="address-info">
                                            <div class="addrss-header d-flex align-items-center justify-content-between">
                                                <h4 class="title mb-0">Địa chỉ thanh toán</h4>
                                                <a href="#" class="address-edit"><i class="far fa-edit"></i></a>
                                            </div>
                                            <ul class="address-details">
                                                <li>Tên: Annie Mario</li>
                                                <li>Email: annie@example.com</li>
                                                <li>Sđt: 1234 567890</li>
                                                <li class="mt--30">7398 Smoke Ranch Road <br>
                                                Las Vegas, Nevada 89128</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-account" role="tabpanel">
                            <div class="col-lg-9">
                                <div class="axil-dashboard-account">
                                    <form class="account-details-form">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Tên</label>
                                                    <input type="text" class="form-control" value="Annie">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Họ</label>
                                                    <input type="text" class="form-control" value="Mario">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mb--40">
                                                    <label>Quốc gia/vùng</label>
                                                    <select class="select2">
                                                        <option value="1">United Kindom (UK)</option>
                                                        <option value="1">United States (USA)</option>
                                                        <option value="1">United Arab Emirates (UAE)</option>
                                                        <option value="1">Australia</option>
                                                    </select>
                                                    <p class="b3 mt--10">Đây sẽ là cách tên của bạn được hiển thị trong phần tài khoản và trong phần đánh giá</p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <h5 class="title">Thay đổi mật khẩu</h5>
                                                <div class="form-group">
                                                    <label>Mật khẩu</label>
                                                    <input type="password" class="form-control" value="123456789101112131415">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mật khẩu mới</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Xác nhận mật khẩu mới</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group mb--0">
                                                    <input type="submit" class="axil-btn" value="Lưu thay đổi">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
    
@endsection