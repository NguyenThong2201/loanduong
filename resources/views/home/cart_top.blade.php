@extends('layouts.pagedetail')
@section('content')
<!-- Main Content - start -->
<main>
    <section class="container stylization maincont">
        <ul class="b-crumbs">
            <li>
                <a href="index.html">
                    Trang Chủ
                </a>
            </li>
            <li>
                <span>Giỏ Hàng</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Giỏ Hàng</span></h1>
        <!-- Cart Items - start -->
        @if(session()->has('cartNew'))
        <form action="#">
            <div class="cart-items-wrap">
                <table class="cart-items">
                    <thead>
                    <tr>
                        <td class="cart-image">Photo</td>
                        <td class="cart-ttl">Products</td>
                        <td class="cart-price">Price</td>
                        <td class="cart-quantity">Quantity</td>
                        <td class="cart-summ">Summ</td>
                        <td class="cart-del">&nbsp;</td>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach(session()->get('cartNew')['list_product'] as $items)
                        <tr>
                            <td class="cart-image">
                                <a href="{{ route('detail', $items->title_sale) }}">
                                    <img src="/page/image/product/{{$items->image}}" alt="Similique delectus totam">
                                </a>
                            </td>
                            <td class="cart-ttl">
                                <a href="{{ route('detail', $items->title_sale) }}">{{ $items->title }}</a>
                                <p>Color: Red</p>
                                <p>Size: XS</p>
                            </td>
                            <td class="cart-price">
                                <b>{{ number_format($items->unit_price)}}đ</b>
                            </td>
                            <td class="cart-quantity">
                                <p class="cart-qnt">
                                    <input value="1" type="text">
                                    <a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
                                    <a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
                                </p>
                            </td>
                            <td class="cart-summ">
                                <b>$220</b>
                                <p class="cart-forone">unit price <b>$220</b></p>
                            </td>
                            <td class="cart-del">
                                <a href="#" class="cart-remove"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <ul class="cart-total">
                <li class="cart-summ">TOTAL: <b>$815</b></li>
            </ul>
            <div class="cart-submit">
                <div class="cart-coupon">
                    <input placeholder="your coupon" type="text">
                    <a class="cart-coupon-btn" href="#"><img src="/home/img/ok.png" alt="your coupon"></a>
                </div>
                <a href="#" class="cart-submit-btn">Checkout</a>
                <a href="#" class="cart-clear">Clear cart</a>
            </div>
        </form>
        <!-- Cart Items - end -->
        @else
            (Giỏ hàng đang trống)
            <a href="{{ route('home') }}">Về trang chủ</a>
        @endif

    </section>
</main>
<!-- Main Content - end -->
@endsection