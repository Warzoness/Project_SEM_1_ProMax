@extends('fe.masterview')
@section('tittle', 'Tài khoản của tôi')
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
                                <li class="axil-breadcrumb-item"><a href="{{ route('home.index') }}">Trang Chủ</a></li>
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
                                <img src="assets/images/product/author1.png" alt="Hello {{ Auth::user()->fullname }}">
                            </div>
                            <div class="media-body">
                                <h5 class="title mb-0">Xin chào {{ Auth::user()->fullname }}</h5>
                                <span class="joining-date">Thành viên của eTrade từ {{ Auth::user()->created_at }} </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                            <aside class="axil-dashboard-aside">
                                <nav class="axil-dashboard-nav">
                                    <div class="nav nav-tabs" role="tablist">
                                        <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-dashboard"
                                            role="tab" aria-selected="true"><i class="fas fa-th-large"></i>Bảng điều
                                            khiển</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-orders" role="tab"
                                            aria-selected="false"><i class="fas fa-shopping-basket"></i>Các đơn hàng</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-address" role="tab"
                                            aria-selected="false"><i class="fas fa-home"></i>Địa chỉ</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-account" role="tab"
                                            aria-selected="false"><i class="fas fa-user"></i>Thông tin tài khoản</a>
                                        <a class="nav-item nav-link" href="sign-in.html"><i class="fal fa-sign-out"></i>Đăng
                                            xuất</a>
                                    </div>
                                </nav>
                            </aside>
                        </div>
                        <div class="col-xl-9 col-md-8">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel">
                                    <div class="axil-dashboard-overview">
                                        <div class="welcome-text">Xin chào {{ Auth::user()->fullname }}
                                        </div>
                                        <p>Từ bảng điều khiển tài khoản của mình, bạn có thể xem các đơn đặt hàng gần đây,
                                            quản lý địa chỉ giao hàng và thanh toán cũng như chỉnh sửa mật khẩu và chi tiết
                                            tài khoản của mình.</p>
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
                                                    @foreach ($orders as $item)
                                                        <tr>
                                                            <th scope="row">#6523</th>
                                                            <td>{{ $item->created_at }}</td>
                                                            @if ($item->status == 1)
                                                                <td>Chờ Xác Nhận</td>
                                                            @elseif ($item->status == 0)
                                                                <td>Đã Xác Nhận</td>
                                                            @else
                                                                <td>Đã Hủy</td>
                                                            @endif
                                                            <td>{{ number_format($item->total_price) }} VND</td>
                                                            <td><a href="#" class="axil-btn view-btn">Xem</a></td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-address" role="tabpanel">
                                    <div class="axil-dashboard-address">
                                        <p class="notice-text">Các địa chỉ sau sẽ được sử dụng trên trang thanh toán theo
                                            mặc định.</p>
                                        <div class="row row--30">
                                            <div class="col-lg-6">
                                                <div class="address-info mb--40">
                                                    <div
                                                        class="addrss-header d-flex align-items-center justify-content-between">
                                                        <h4 class="title mb-0">Địa chỉ giao hàng</h4>
                                                        <a href="#" class="address-edit"><i
                                                                class="far fa-edit"></i></a>
                                                    </div>
                                                    <ul class="address-details">
                                                        <li>Tên: {{ Auth::user()->fullname }}</li>
                                                        <li>{{ Auth::user()->email }}</li>
                                                        <li>Sđt: {{ Auth::user()->phone }}</li>
                                                        <li class="mt--30">{{ Auth::user()->address }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-account" role="tabpanel">
                                    <div class="col-lg-9">
                                        <div class="axil-dashboard-account">
                                            <form class="account-details-form"
                                                action="{{ route('user.update', Auth::user()) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Họ Tên</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ Auth::user()->fullname }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>SĐT</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ Auth::user()->phone }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ Auth::user()->email }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <h5 class="title">Thay đổi mật khẩu</h5>
                                                        <div class="form-group">
                                                            <label>Mật khẩu</label>
                                                            <input type="password" class="form-control" name="password"
                                                                value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Mật khẩu mới</label>
                                                            <input type="password" class="form-control"
                                                                name="newPassword">
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
