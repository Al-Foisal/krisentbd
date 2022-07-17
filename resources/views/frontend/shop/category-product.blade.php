@extends('frontend.layouts.master')
@section('title', 'Category Product')

@section('content')
    <main class="main">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('shop.shop', app()->getLocale()) }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a
                            href="{{ route('shop.categoryProduct', [app()->getLocale(), $category->slug]) }}">{{ app()->getLocale() == 'en' ? $category->name : $category->bn_name }}</a>
                    </li>
                    @if ($sub !== null)
                        <li class="breadcrumb-item @if ($child == null) {{ ' active' }} @endif">
                            <a
                                @if ($child == null) {{ '' }} @else href="{{ route('shop.categoryProduct', [app()->getLocale(), $category->slug, $subcategory->slug]) }}" @endif>{{ app()->getLocale() == 'en' ? $subcategory->name : $subcategory->bn_name }}</a>
                        </li>
                    @endif
                    @if ($child)
                        <li class="breadcrumb-item active" aria-current="page">{{ app()->getLocale() == 'en' ? $childcategory->name : $childcategory->bn_name }}</li>
                    @endif
                </ol>
                <hr>
            </nav>
            <div class="row main-content">
                <div class="col-lg-12">
                    {{-- <div class="category-banner banner">
                        <figure>
                            <img style="max-height: 250px;" src="../assets/ss1.jpg">
                        </figure>
                    </div> --}}
                    <nav class="toolbox sticky-header mt-2" data-sticky-options="{'mobile': true}">
                        <div class="toolbox-left">
                            <div class="toolbox-item toolbox-sort">
                                <div class="dropdown mr-1">
                                    <button type="button" class="btn btn-light dropdown-toggle" id="dropdownMenuOffset"
                                        data-toggle="dropdown" aria-expanded="false" data-offset="10,20">
                                        {{ __('Sort Product by Price') }}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                        <a class="dropdown-item" style="font-size: 15px;"
                                            href="{{ route('shop.categoryProduct', [app()->getLocale(),$category->slug,$subcategory->slug ?? null,$childcategory->slug ?? null,'order' => '']) }}">{{ __('Default Sort') }}</a>
                                        <a class="dropdown-item" style="font-size: 15px;"
                                            href="{{ route('shop.categoryProduct', [app()->getLocale(),$category->slug,$subcategory->slug ?? null,$childcategory->slug ?? null,'order' => 'ASC']) }}">{{ __('Sort by Price: Low to High') }}</a>
                                        <a class="dropdown-item" style="font-size: 15px;"
                                            href="{{ route('shop.categoryProduct', [app()->getLocale(),$category->slug,$subcategory->slug ?? null,$childcategory->slug ?? null,'order' => 'DESC']) }}">{{ __('Sort by Price: High to Low') }}</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .toolbox-item -->
                        </div>
                        <!-- End .toolbox-left -->
                    </nav>
                    <div class="row divide-line no-gutters m-0">
                        @foreach ($products as $product)
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default p-4">
                                    <figure class="">
                                        <a
                                            href="{{ route('shop.productDetails', [app()->getLocale(), $product->slug]) }}">
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
                                        {{-- <div class="category-wrap">
                                            <a href="wishlist.html" title="Wishlist" class="btn-icon-wish">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </div> --}}
                                        <h3 class="product-title">
                                            <a
                                                href="{{ route('shop.productDetails', [app()->getLocale(), $product->slug]) }}">{{ app()->getLocale() == 'en' ? $product->name : $product->bn_name }}</a>
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
