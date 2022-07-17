@extends('frontend.layouts.master')
@section('title', 'Wishlist')

@section('content')
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <h1>{{ __('Wishlist') }}</h1>
            </div>
        </div>
        <div class="container account-container custom-account-container">
            <div class="row">
                @include('frontend.user._nav')
                <div class="col-lg-9 order-lg-last order-1 tab-content">
                    <div class="container">
                        <div class="wishlist-title">
                            <h2 class="p-2">{{ __('My Wishlist') }}</h2>
                        </div>
                        <div class="wishlist-table-container">
                            <table class="table table-wishlist mb-0">
                                <thead>
                                    <tr>
                                        <th class="thumbnail-col"></th>
                                        <th class="product-col">{{ __('Product') }}</th>
                                        <th class="price-col">{{ __('Price') }}</th>
                                        <th class="status-col">{{ __('Stock Status') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlists as $wishlist)
                                        @foreach ($wishlist->products as $product)
                                            <tr class="product-row">
                                                <td>
                                                    <figure class="product-image-container">
                                                        <a href="{{ route('shop.productDetails', [app()->getLocale(), $product->slug]) }}"
                                                            class="product-image">
                                                            <img src="{{ asset($product->images->first()->image ?? '') }}"
                                                                alt="product">
                                                        </a>
                                                        <a href="{{ route('shop.removeFromWishlist', [app()->getLocale(), $wishlist->id]) }}"
                                                            class="btn-remove icon-cancel" title="Remove Product"></a>
                                                    </figure>
                                                </td>
                                                <td>
                                                    <h5 class="product-title">
                                                        <a
                                                            href="{{ route('shop.productDetails', [app()->getLocale(), $product->slug]) }}">{{ $product->name }}</a>
                                                    </h5>
                                                </td>
                                                <td class="price-box">
                                                    {{ $product->discount === null ? $product->selling : $product->discount_price }}
                                                </td>
                                                <td>
                                                    @if ($product->quantity > 0 && $product->status === 1)
                                                        <span class="stock-status">{{ __('In stock') }}</span>
                                                    @else
                                                        <span class="stock-status">{{ __('Out of stock') }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- End .cart-table-container -->
                    </div>
                </div>
                <!-- End .tab-content -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
        <div class="mb-5"></div>
        <!-- margin -->
    </main>
@endsection
