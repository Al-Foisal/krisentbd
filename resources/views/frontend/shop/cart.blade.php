@extends('frontend.layouts.master')
@section('title', 'Cart')

@section('content')
    <main class="main">
        <div class="container">
            <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                <li class="disabled">
                    <a>{{ __('Shopping Cart') }}</a>
                </li>
            </ul>
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table-container">
                        <form action="{{ route('shop.updateCart', app()->getLocale()) }}" method="post">
                            @csrf
                            <table class="table table-cart">
                                <thead>
                                    <tr>
                                        <th class="thumbnail-col">{{ __('Image') }}</th>
                                        <th class="product-col">{{ __('Product') }}</th>
                                        <th class="product-col">{{ __('Color') }}</th>
                                        <th class="product-col">{{ __('Size') }}</th>
                                        <th class="price-col">{{ __('Price') }}</th>
                                        <th class="qty-col">{{ __('Quantity') }}</th>
                                        <th class="text-right">{{ __('Subtotal') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $cart)
                                        <tr class="product-row">
                                            <td>
                                                <figure class="product-image-container">
                                                    <a class="product-image">
                                                        <img src="{{ asset($cart->options->image) }}" alt="product">
                                                    </a>
                                                    <a href="{{ route('shop.removeFromCart', [app()->getLocale(), $cart->rowId]) }}"
                                                        class="btn-remove icon-cancel" title="Remove Product"></a>
                                                </figure>
                                            </td>
                                            <td class="product-col">
                                                <h5 class="product-title">
                                                    <a>{{ $cart->name }}</a>
                                                </h5>
                                            </td>
                                            <td>{{ $cart->options->color }}</td>
                                            <td>{{ $cart->options->size }}</td>
                                            <td>{{ $cart->price }}</td>
                                            <td>
                                                <div class="product-single-qty">
                                                    <input class="horizontal-quantity form-control"
                                                        value="{{ $cart->qty }}" type="number" name="quantity[]">
                                                    <input type="hidden" name="row_id[]" value="{{ $cart->rowId }}">
                                                </div>
                                                <!-- End .product-single-qty -->
                                            </td>
                                            <td class="text-right">
                                                <span class="subtotal-price">৳{{ $cart->price * $cart->qty }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="clearfix">
                                            <div class="float-left">
                                                <a href="{{ route('shop.destroyCart', app()->getLocale()) }}"
                                                    class="btn btn-danger btn-update-cart">
                                                    {{ __('Destroy Cart') }}
                                                </a>
                                                <button type="submit" class="btn btn-shop btn-update-cart">
                                                    {{ __('Update Cart') }}
                                                </button>
                                            </div>
                        </form>
                        <!-- End .float-left -->
                        <div class="float-right">
                            {{-- @if (session()->has('coupon'))
                            @else
                                <div class="cart-discount">
                                    <form action="" method="post">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" name="coupon_code" class="form-control form-control-sm"
                                                placeholder="Coupon Code">
                                            <div class="input-group-append">
                                                <button class="btn btn-sm" type="submit">
                                                    Apply
                                                    Coupon
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End .input-group -->
                                    </form>
                                </div>
                            @endif --}}
                        </div>
                        <!-- End .float-right -->
                        </td>
                        </tr>
                        </tfoot>
                        </table>
                    </div>
                    <!-- End .cart-table-container -->
                </div>
                <!-- End .col-lg-8 -->
                <div class="col-lg-4">
                    <div class="cart-summary">
                        <h3>{{ __('Total Cart Calculation') }}</h3>
                        <table class="table table-totals">
                            <tbody>
                                <tr>
                                    <td>{{ __('Total') }}</td>
                                    <td>৳{{ number_format($total, 2) }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Subtotal') }}</td>
                                    <td>৳{{ number_format($subtotal, 2) }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Discount') }}</td>
                                    <td>৳{{ number_format($discount, 2) }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Additional Charge') }}</td>
                                    <td>৳{{ number_format($additional_charge, 2) }}</td>
                                </tr>
                                {{-- @if (session()->has('coupon'))
                                    <tr>
                                        <td>Coupon<a title="remove this coupon" href=""
                                                class="text-danger">X</a></td>
                                        <td>৳{{ number_format(Session::get('coupon')['discount'], 2) }}</td>
                                    </tr>
                                @endif --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>{{ __('Paid Amount') }}</td>
                                    <td>৳{{ number_format($paid_amount, 2) }}</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="checkout-methods">
                            <a href="{{ route('shop.checkout', app()->getLocale()) }}" class="btn btn-block btn-dark">
                                {{ __('Proceed to Checkout') }}
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End .cart-summary -->
                </div>
                <!-- End .col-lg-4 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
        <div class="mb-6"></div>
        <!-- margin -->
    </main>
@endsection
