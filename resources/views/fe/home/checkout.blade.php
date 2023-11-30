@extends('fe.masterview')
@section('tittle', 'Thanh toán')
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

    <main class="main-wrapper">

        <!-- Start Checkout Area  -->
        <div class="axil-checkout-area axil-section-gap">
            <div class="container">
                <div class="axil-checkout-notice">
                    <div class="axil-toggle-box">
                        @if (!Auth::user())
                            <div class="toggle-bar"><i class="fas fa-user"></i> Về trang khách hàng? <a
                                    href="javascript:void(0)" class="toggle-btn">Nhấn vào đây để đăng nhập <i
                                        class="fas fa-angle-down"></i></a>
                            </div>
                        @endif
                        <div class="axil-checkout-login toggle-open">
                            <p>Nếu bạn chưa đăng nhập, vui lòng đăng nhập trước.</p>
                            <div class="signin-box">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group mb--0">
                                    <button type="submit" class="axil-btn btn-bg-primary submit-btn">Đăng
                                        nhập</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <form action="{{ route('orders.add') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="axil-checkout-billing">
                                <h4 class="title mb--40">Chi tiết hóa đơn</h4>

                                <div class="form-group">
                                    <label>Họ Tên</label>
                                    <input type="text" id="company-name"
                                        value="{{ Auth::user() ? Auth::user()->fullname : '' }}" name="fullname">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ nhận <span>*</span></label>
                                    <input type="text" id="address1" class="mb--15"
                                        value="{{ Auth::user() ? Auth::user()->address : '' }}" name="address">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại <span>*</span></label>
                                    <input type="tel" id="phone"
                                        value="{{ Auth::user() ? Auth::user()->phone : '' }}" name="phone">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ email <span>*</span></label>
                                    <input type="email" id="email"
                                        value="{{ Auth::user() ? Auth::user()->email : '' }}" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Ghi chú khác(tùy chọn)</label>
                                    <textarea id="notes" rows="2"
                                        placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt để giao hàng" name="note-checkout"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="axil-order-summery order-checkout-summery">
                                <h5 class="title mb--20">Hóa đơn của bạn</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table">
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <th>Giá</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cartItems as $key => $item)
                                                <tr class="order-product">
                                                    <td>{{ $item['name'] }} <span class="quantity"> x
                                                            {{ $item['quantity'] }}</span></td>
                                                    <td>{{ number_format($item['price'] * $item['quantity']) }} VND</td>
                                                </tr>
                                            @endforeach
                                            <tr class="order-total">
                                                <td>Tổng</td>
                                                <td class="order-total-amount">{{ number_format($cart->getTotalPrice()) }}
                                                    VND</td>
                                            </tr>
                                            <input type="hidden" name="total_price" value="{{ $cart->getTotalPrice() }}">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="order-payment-method">
                                    <div class="single-payment">
                                        <div class="input-group justify-content-between align-items-center">
                                            <input type="radio" id="radi" name="paymentMethod_id" value="5"
                                                checked>
                                            <label for="radi">Thanh toán khi nhận hàng</label>
                                        </div>
                                        <p>Thanh toán qua shipper tại nơi nhận hàng</p>
                                    </div>
                                    @foreach ($paymentMethods as $item)
                                        <div class="single-payment">
                                            <div class="input-group justify-content-between align-items-center">
                                                <input type="radio" id="radio{{ $item->id }}" name="paymentMethod_id"
                                                    value="{{ $item->id }}">
                                                <label for="radio{{ $item->id }}">{{ $item->name }}</label>
                                                <img width="100px"
                                                    src="{{ asset('storage/upload/admin/paymentMethods') }}/{{ $item->logo }}"
                                                    alt="Paypal payment">
                                            </div>
                                            <p>Thanh toán qua {{ $item->name }}</p>
                                        </div>
                                    @endforeach


                                </div>
                                <br>
                                <button type="submit" class="axil-btn btn-bg-primary checkout-btn">Thanh toán</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Checkout Area  -->

    </main>
@endsection
