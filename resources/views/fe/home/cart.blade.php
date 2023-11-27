@extends('fe.masterview')
@section('tittle', 'Giỏ hàng')
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

        <!-- Start Cart Area  -->
        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="axil-product-cart-wrap">
                    <div class="product-table-heading">
                        <h4 class="title">Giỏ hàng của bạn</h4>
                        <a href="#" class="cart-clear">Clear Shoping Cart</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table axil-product-table axil-cart-table mb--40">
                            <thead>
                                <tr>
                                    <th scope="col" class="product-remove"></th>
                                    <th scope="col" class="product-thumbnail">Sản phẩm</th>
                                    <th scope="col" class="product-title"></th>
                                    <th scope="col" class="product-price">Giá</th>
                                    <th scope="col" class="product-quantity">Số lượng</th>
                                    <th scope="col" class="product-subtotal">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i
                                                class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="single-product.html"><img
                                                src="{{ asset('assets') }}/fe/images/product/electric/product-01.png"
                                                alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="single-product.html">Wireless PS Handler</a></td>
                                    <td class="product-price" data-title="Price"><span
                                            class="currency-symbol">$</span>124.00</td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span
                                            class="currency-symbol">$</span>275.00</td>
                                </tr>
                                <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i
                                                class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="single-product-2.html"><img
                                                src="{{ asset('assets') }}/fe/images/product/electric/product-02.png"
                                                alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="single-product-2.html">Gradient Light Keyboard</a>
                                    </td>
                                    <td class="product-price" data-title="Price"><span
                                            class="currency-symbol">$</span>124.00</td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span
                                            class="currency-symbol">$</span>275.00</td>
                                </tr>
                                <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i
                                                class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="single-product-3.html"><img
                                                src="{{ asset('assets') }}/fe/images/product/electric/product-03.png"
                                                alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="single-product-3.html">HD CC Camera</a></td>
                                    <td class="product-price" data-title="Price"><span
                                            class="currency-symbol">$</span>124.00</td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span
                                            class="currency-symbol">$</span>275.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-update-btn-area">
                        <div class="input-group product-cupon">
                            <input placeholder="Nhập mã giảm giá" type="text">
                            <div class="product-cupon-btn">
                                <button type="submit" class="axil-btn btn-outline">Apply</button>
                            </div>
                        </div>
                        <div class="update-btn">
                            <a href="#" class="axil-btn btn-outline">Cập nhật giỏ hàng</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                            <div class="axil-order-summery mt--80">
                                <h5 class="title mb--20">Tóm tắt hóa đơn</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table mb--30">
                                        <tbody>
                                            <tr class="order-subtotal">
                                                <td>Tổng tiền</td>
                                                <td>$117.00</td>
                                            </tr>
                                            <tr class="order-shipping">
                                                <td>Vận chuyển</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio1" name="shipping" checked>
                                                        <label for="radio1">Miễn phí</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio2" name="shipping">
                                                        <label for="radio2">Local: $35.00</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio3" name="shipping">
                                                        <label for="radio3">Flat rate: $12.00</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="order-tax">
                                                <td>Thuế</td>
                                                <td>$8.00</td>
                                            </tr>
                                            <tr class="order-total">
                                                <td>Tổng</td>
                                                <td class="order-total-amount">$125.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="checkout.html" class="axil-btn btn-bg-primary checkout-btn">Tiến hành thanh
                                    toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cart Area  -->

    </main>
@endsection
