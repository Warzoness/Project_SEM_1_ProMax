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
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="axil-checkout-notice">
                                <div class="axil-toggle-box">
                                    <div class="toggle-bar"><i class="fas fa-user"></i> Về trang khách hàng? <a
                                            href="javascript:void(0)" class="toggle-btn">Nhấn vào đây để đăng nhập <i
                                                class="fas fa-angle-down"></i></a>
                                    </div>
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
                                <div class="axil-toggle-box">
                                    <div class="toggle-bar"><i class="fas fa-pencil"></i> Đã có mã? <a
                                            href="javascript:void(0)" class="toggle-btn">Nhấn vào đây để nhập mã <i
                                                class="fas fa-angle-down"></i></a>
                                    </div>

                                    <div class="axil-checkout-coupon toggle-open">
                                        <p>Nếu bạn có mã, vui lòng điền xuống dưới.</p>
                                        <div class="input-group">
                                            <input placeholder="Nhập mã" type="text">
                                            <div class="apply-btn">
                                                <button type="submit" class="axil-btn btn-bg-primary">Áp dụng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="axil-checkout-billing">
                                <h4 class="title mb--40">Chi tiết hóa đơn</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tên <span>*</span></label>
                                            <input type="text" id="first-name" placeholder="Adam">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Họ <span>*</span></label>
                                            <input type="text" id="last-name" placeholder="John">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Tên công ty</label>
                                    <input type="text" id="company-name">
                                </div>
                                <div class="form-group">
                                    <label>Quốc gia/vùng <span>*</span></label>
                                    <select id="Region">
                                        <option value="3">Australia</option>
                                        <option value="4">England</option>
                                        <option value="6">New Zealand</option>
                                        <option value="5">Switzerland</option>
                                        <option value="1">United Kindom (UK)</option>
                                        <option value="2">United States (USA)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ <span>*</span></label>
                                    <input type="text" id="address1" class="mb--15" placeholder="Số nhà và tên đường">
                                    <input type="text" id="address2"
                                        placeholder="Căn hộ, dãy phòng, đơn vị, v.v. (tùy chọn)">
                                </div>
                                <div class="form-group">
                                    <label>Thành phố <span>*</span></label>
                                    <input type="text" id="town">
                                </div>
                                <div class="form-group">
                                    <label>Quốc gia</label>
                                    <input type="text" id="country">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại <span>*</span></label>
                                    <input type="tel" id="phone">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ email <span>*</span></label>
                                    <input type="email" id="email">
                                </div>
                                <div class="form-group input-group">
                                    <input type="checkbox" id="checkbox1" name="account-create">
                                    <label for="checkbox1">Tạo tài khoản</label>
                                </div>
                                <div class="form-group different-shippng">
                                    <div class="toggle-bar">
                                        <a href="javascript:void(0)" class="toggle-btn">
                                            <input type="checkbox" id="checkbox2" name="diffrent-ship">
                                            <label for="checkbox2">Giao đến địa chỉ khác?</label>
                                        </a>
                                    </div>
                                    <div class="toggle-open">
                                        <div class="form-group">
                                            <label>Quốc gia/vùng <span>*</span></label>
                                            <select id="Region">
                                                <option value="3">Australia</option>
                                                <option value="4">England</option>
                                                <option value="6">New Zealand</option>
                                                <option value="5">Switzerland</option>
                                                <option value="1">United Kindom (UK)</option>
                                                <option value="2">United States (USA)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Địa chỉ <span>*</span></label>
                                            <input type="text" id="address1" class="mb--15"
                                                placeholder="Số nhà và tên đường">
                                            <input type="text" id="address2"
                                                placeholder="Căn hộ, dãy phòng, đơn vị, v.v. (tùy chọn)">
                                        </div>
                                        <div class="form-group">
                                            <label>Thành phố <span>*</span></label>
                                            <input type="text" id="town">
                                        </div>
                                        <div class="form-group">
                                            <label>Quốc gia</label>
                                            <input type="text" id="country">
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại <span>*</span></label>
                                            <input type="tel" id="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ghi chú khác(tùy chọn)</label>
                                    <textarea id="notes" rows="2"
                                        placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt để giao hàng"></textarea>
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
                                                <th>Tổng phụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="order-product">
                                                <td>Commodo Blown Lamp <span class="quantity">x1</span></td>
                                                <td>$117.00</td>
                                            </tr>
                                            <tr class="order-product">
                                                <td>Commodo Blown Lamp <span class="quantity">x1</span></td>
                                                <td>$198.00</td>
                                            </tr>
                                            <tr class="order-subtotal">
                                                <td>Subtotal</td>
                                                <td>$117.00</td>
                                            </tr>
                                            <tr class="order-shipping">
                                                <td colspan="2">
                                                    <div class="shipping-amount">
                                                        <span class="title">Phương thức giao hàng</span>
                                                        <span class="amount">$35.00</span>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio1" name="shipping" checked>
                                                        <label for="radio1">Miễn phí</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio2" name="shipping">
                                                        <label for="radio2">Local</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio3" name="shipping">
                                                        <label for="radio3">Flat rate</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <td>Tổng</td>
                                                <td class="order-total-amount">$323.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="order-payment-method">
                                    <div class="single-payment">
                                        <div class="input-group">
                                            <input type="radio" id="radio4" name="payment">
                                            <label for="radio4">Chuyển khoản trực tiếp</label>
                                        </div>
                                        <p>Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử
                                            dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn đặt hàng của bạn
                                            sẽ không được vận chuyển cho đến khi tiền đã được xóa trong tài khoản của chúng
                                            tôi.</p>
                                    </div>
                                    <div class="single-payment">
                                        <div class="input-group">
                                            <input type="radio" id="radio5" name="payment">
                                            <label for="radio5">Thanh toán khi giao hàng</label>
                                        </div>
                                        <p>Thanh toán bằng tiền mặt khi giao hàng.</p>
                                    </div>
                                    <div class="single-payment">
                                        <div class="input-group justify-content-between align-items-center">
                                            <input type="radio" id="radio6" name="payment" checked>
                                            <label for="radio6">Paypal</label>
                                            <img src="assets/images/others/payment.png" alt="Paypal payment">
                                        </div>
                                        <p>Thanh toán qua PayPal, bạn có thể thanh toán bằng thẻ tín dụng nếu bạn không có
                                            tài khoản PayPal.</p>
                                    </div>
                                </div>
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
