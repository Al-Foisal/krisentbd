@extends('frontend.layouts.master')
@section('title', 'Welcome to our shopping area')

@section('content')
<style>
    .left-banner {
        width: 25%;
        float: left;
    }
    .right-banner {
        width: 100%;
        float: left;
    }
    .home-slide img {
        min-height: 0;
    }
    @media (min-width: 992px){
        .right-banner {
            width: 75%;
            float: left;
        }
    }
</style>
    <main class="main">
        <section class="intro-section">
            <div class="container">
                <div class="row">
                    <div class="left-banner"></div>
                    <div class="right-banner">
                        <div class="home-slider slide-animate owl-carousel owl-theme custom-nav">
                            @foreach ($slider as $slid)
                            <div class="home-slide home-slide-1 banner">
                                <img
                                    src="{{ asset($slid->image) }}"
                                    alt="slider image"
                                    width="772"
                                    height="434"
                                >
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="most-viewed-products appear-animate" data-animation-name="fadeInUpShorter"
            data-animation-delay="200">
            <div class="container">
                <h4 class="text-uppercase heading-bottom-border mt-4">{{ __('Products for you') }}</h4>
                <div class="row mt-2 divide-line">
                    <!-- product 1 -->
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="product-default">
                                <figure class="pt-3">
                                    <a href="{{ route('shop.productDetails',[app()->getLocale(), $product->slug]) }}">
                                        <img src="{{ asset($product->images->first()->image) }}" alt="product" width="400"
                                            height="320">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="{{ route('shop.productDetails',[app()->getLocale(), $product->slug]) }}">
                                            {{ app()->getLocale() == 'en' ? $product->name : $product->bn_name }}
                                        </a>
                                    </h3>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        @if ($product->discount > 0)
                                            <span
                                                class="product-price">৳{{ app()->getLocale() == 'en' ? number_format($product->discount_price, 2) : $product->bn_discount_price.'.০০' }}</span>
                                            <span
                                                class="old-price">৳{{ app()->getLocale() == 'en' ? number_format($product->selling, 2) : $product->bn_selling.'.০০' }}</span>
                                        @else
                                            <span
                                                class="product-price">৳{{ app()->getLocale() == 'en' ? number_format($product->selling, 2) : $product->bn_selling.'.০০' }}</span>
                                        @endif
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <!-- End .product-default -->
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="row mt-5 mb-5" style="    display: flex;
        justify-content: center;">
            {{ $products->links() }}
        </div>
    </main>
@endsection
