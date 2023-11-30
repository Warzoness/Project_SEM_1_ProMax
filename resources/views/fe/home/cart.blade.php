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
                    <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
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
                                    @foreach ($cartItems as $key => $value)
                                        <tr>
                                            <td class="product-remove">
                                                <form action="{{ route('cart.remove', $value['product_id']) }}">
                                                    @csrf
                                                    <button> X </button>
                                                </form>
                                            </td>
                                            <td class="product-thumbnail"><a href="single-product-2.html"><img
                                                        src="{{ asset('storage/upload/admin/products') }}/{{ $value['image'] }}"
                                                        alt="Digital Product"></a></td>
                                            <td class="product-title"><a href="single-product.html">{{ $value['name'] }}</a>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                {{ number_format($value['price']) }}
                                                <span class="currency-symbol">VND</span>
                                            </td>
                                            <td class="product-quantity" data-title="Qty">
                                                <div class="pro-qty">
                                                    <input type="number" class="quantity-input qty"
                                                        data-id="{{ $value['product_id'] }}"
                                                        value="{{ $value['quantity'] }}" name="quantity">
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Subtotal">
                                                {{ number_format($value['price'] * $value['quantity']) }}
                                                VND
                                            </td>
                                        </tr>
                                    @endforeach
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
                                <a href="{{ route('cart.index') }}" class="axil-btn btn-outline">Cập nhật giỏ hàng</a>
                            </div>
                        </div>

                    </form>
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                            <div class="axil-order-summery mt--80">
                                <h5 class="title mb--20">Tóm tắt hóa đơn</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table mb--30">
                                        <tbody>
                                            <tr class="order-subtotal">
                                                <td>Tổng tiền</td>
                                                <td>{{ number_format($cart->getTotalPrice()) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tổng số sản phẩm</td>
                                                <td>{{ $cart->getTotalQuantity() }}</td>
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
        </form>
        <!-- End Cart Area  -->

    </main>
@endsection

<script>
    $('.qty').onchange(() => {
        alert('okok');
    })
</script>
