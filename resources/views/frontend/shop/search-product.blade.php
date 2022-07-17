@extends('frontend.layouts.master')
@section('title', 'Searched Product')

@section('content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('shop.shop', app()->getLocale()) }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">{{ __('Search') }}</li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $_GET['search'] ?? '' }}</li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="row main-content">
                <div class="col-lg-12">
                    {{-- <div class="category-banner banner">
                        <figure>
                            <img style="max-height: 250px;" src="../assets/ss1.jpg">
                        </figure>
                    </div> --}}
                    {{-- <nav class="toolbox sticky-header mt-2" data-sticky-options="{'mobile': true}">
                        <div class="toolbox-left">
                            <div class="toolbox-item toolbox-sort">
                                <div class="dropdown mr-1">
                                    <button type="button" class="btn btn-light dropdown-toggle"
                                        id="dropdownMenuOffset" data-toggle="dropdown" aria-expanded="false"
                                        data-offset="10,20">
                                        Sort Product by Price
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                        <a class="dropdown-item" style="font-size: 15px;"
                                            href="{{ route('shop.categoryProduct', [$category->slug,$subcategory->slug ?? null,$childcategory->slug ?? null,'order' => '']) }}">Default Sort</a>
                                        <a class="dropdown-item" style="font-size: 15px;"
                                            href="{{ route('shop.categoryProduct', [$category->slug,$subcategory->slug ?? null,$childcategory->slug ?? null,'order' => 'ASC']) }}">Sort
                                            by price: low to high</a>
                                        <a class="dropdown-item" style="font-size: 15px;"
                                            href="{{ route('shop.categoryProduct', [$category->slug,$subcategory->slug ?? null,$childcategory->slug ?? null,'order' => 'DESC']) }}">Sort
                                            by price: high to low</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .toolbox-item -->
                        </div>
                        <!-- End .toolbox-left -->
                    </nav> --}}
                    <div class="row divide-line no-gutters m-0">
                        @foreach ($products as $product)
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default p-4">
                                    <figure class="">
                                        <a href="{{ route('shop.productDetails', [app()->getLocale(),$product->slug]) }}">
                                            <img src="{{ asset($product->images->first()->image ?? '') }}" width="217"
                                                height="217" alt="product">
                                        </a>
                                        @if ($product->discount > 0)
                                        <div class="label-group">
                                            <div class="product-label label-hot">
                                                -{{ app()->getLocale() == 'en' ? $product->discount : $product->bn_discount }}%
                                            </div>
                                        </div>
                                        @endif
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <a href="wishlist.html" title="Wishlist" class="btn-icon-wish">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </div>
                                        <h3 class="product-title">
                                            <a
                                                href="{{ route('shop.productDetails', [app()->getLocale(),$product->slug]) }}">{{ app()->getLocale() == 'en' ? $product->name : $product->bn_name }}</a>
                                        </h3>
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
                            </div>
                        @endforeach
                    </div>
                    <!-- End .row -->
                    <nav class="toolbox toolbox-pagination">
                        <ul class="pagination toolbox-item">
                            {{ $products->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
        <div class="mb-4"></div>
        <!-- margin -->
    </main>
@endsection
