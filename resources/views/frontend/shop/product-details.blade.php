@extends('frontend.layouts.master')
@section('title', $product->name)

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
                    <li class="breadcrumb-item">{{ __('Product') }}</li>
                    <li class="breadcrumb-item active" aria-current="page">{{ app()->getLocale() == 'en' ? $product->name : $product->bn_name }}</li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="product-single-container product-single-default">
                <div class="row">
                    <div class="col-lg-5 col-md-6 product-single-gallery">
                        <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover" data-owl-options="{
                                                            'dots': false,
                                                            'nav': true,
                                                            'loop': true,
                                                            'autoPlay':false
                                                            }">
                                @foreach ($product->images as $image)
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{ asset($image->image) }}"
                                            data-zoom-image="{{ asset($image->image) }}" width="468" height="468"
                                            alt="product">
                                    </div>
                                @endforeach
                            </div>
                            <!-- End .product-single-carousel -->
                            <span class="prod-full-screen">
                                <i class="icon-plus"></i>
                            </span>
                        </div>
                        <div class="prod-thumbnail owl-dots">
                            @foreach ($product->images as $image)
                                <div class="owl-dot">
                                    <img src="{{ asset($image->image) }}" width="110" height="110"
                                        alt="product-thumbnail">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End .product-single-gallery -->
                    <div class="col-lg-7 col-md-6 product-single-details">
                        <h1 class="font1 product-title">{{ app()->getLocale() == 'en' ? $product->name : $product->bn_name }}</h1>

                        <hr class="short-divider">
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
                        @if ($product->colors->count() > 0 || $product->sizes->count() > 0)
                            <div class="product-filters-container">
                                @if ($product->colors->count() > 0)
                                    <input type="hidden" class="selected_color">
                                    <div class="product-single-filter">
                                        <label>{{ __('Color') }}:</label>
                                        <ul class="config-size-list config-color-list config-filter-list">
                                            @foreach ($product->colors as $color)
                                                <li class="">
                                                    <a class="filter-color border-0 "
                                                        style="background-color: {{ $color->color_code }};"
                                                        onclick="selected_color('{{ $color->color }}')"></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if ($product->sizes->count() > 0)
                                    <input type="hidden" class="selected_size">
                                    <div class="product-single-filter">
                                        <label>{{ __('Size') }}:</label>
                                        <ul class="config-size-list">
                                            @foreach ($product->sizes as $size)
                                                <li class="">
                                                    <a href="javascript:;" onclick="selected_size('{{ $size->size }}')"
                                                        class="d-flex align-items-center justify-content-center">{{ app()->getLocale()=='en'?$size->size:$size->bn_size }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="product-single-filter">
                                    <label></label>
                                    <a class="font1 text-uppercase clear-btn" href="#">{{ __('Clear') }}</a>
                                </div>
                                <!---->
                            </div>
                        @endif
                        <div class="product-action">
                            <div class="product-single-qty">
                                <input class="horizontal-quantity form-control selected_quantity" type="text">
                            </div>
                        @if($product->quantity > 0)
                            <!-- End .product-single-qty -->
                            <a onclick="add_to_cart({{ $product->id }})" class="btn add-cart mr-2"
                                style="background-color: #01abec;color: #ffffff;" title="Add to Cart">
                                {{ __('Add to Cart') }}
                            </a>
                            <a href="{{ route('shop.cart', app()->getLocale()) }}"
                                class="btn btn-gray view-cart d-none">{{ __('View cart') }}</a>
                        @else
                        <button type="button" class="btn btn-info btn-lg"> {{__('Out of stock')}}
                        @endif
                        </div>
                        <!-- End .product-action -->
                        <hr class="divider mb-0 mt-0">
                        <div class="product-single-share mb-3">
                            <a onclick="wishlist({{ $product->id }})" class="btn-icon-wish add-wishlist"
                                title="Add to Wishlist">
                                <i class="icon-wishlist-2"></i>
                                <span>
                                    {{ __('Add to Wishlist') }}
                                </span>
                            </a>
                        </div>
                        <!-- End .product single-share -->
                    </div>
                    <!-- End .product-single-details -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .product-single-container -->
            <div class="product-single-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content"
                            role="tab" aria-controls="product-desc-content" aria-selected="true">{{ __('Description') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content"
                            role="tab" aria-controls="product-tags-content" aria-selected="false">
                            {{ __('Additional Information') }}
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                        aria-labelledby="product-tab-desc">
                        <div class="product-desc-content">
                            {!! app()->getLocale()=='en'?$product->details:$product->bn_details !!}
                        </div>
                        <!-- End .product-desc-content -->
                    </div>
                    <!-- End .tab-pane -->
                    <div class="tab-pane fade" id="product-tags-content" role="tabpanel"
                        aria-labelledby="product-tab-tags">
                        <div class="product-desc-content">
                            {!! app()->getLocale()=='en'?$product->specification:$product->bn_specification !!}
                        </div>
                    </div>
                    <!-- End .tab-pane -->
                </div>
                <!-- End .tab-content -->
            </div>
            <!-- End .product-single-tabs -->
            <div class="products-section pt-0 pb-5">
                <h2 class="section-title font1 m-b-4">{{ __('Related products') }}</h2>
                <div class="row">
                    <div class="products-slider 5col owl-carousel owl-theme dots-top dots-small" data-owl-options="{
                                            'margin': 0,
                                            'dots': true
                                        }">
                        @foreach ($related_product as $related)
                            <div class="product-default p-4">
                                <figure>
                                    <a href="{{ route('shop.productDetails', [app()->getLocale(), $related->slug]) }}">
                                        <img src="{{ asset($related->images->first()->image) }}" width="320" height="400"
                                            alt="product">
                                    </a>
                                    @if ($related->discount > 0)
                                        <div class="label-group">
                                            <div class="product-label label-sale">-{{ app()->getLocale() == 'en' ? $product->discount : $product->bn_discount }}%</div>
                                        </div>
                                    @endif
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a
                                            href="{{ route('shop.productDetails', [app()->getLocale(), $related->slug]) }}">{{ app()->getLocale() == 'en' ? $related->name : $related->bn_name }}</a>
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
                        @endforeach
                    </div>
                    <!-- End .products-slider -->
                </div>
            </div>
            <!-- End .products-section -->
        </div>
        <!-- End .container -->
    </main>
@endsection
@section('js')
    <script>
        var color;
        var size;

        function selected_color(color) {
            $('.selected_color').val(color);
        }

        function selected_size(size) {
            $('.selected_size').val(size);
        }

        function add_to_cart(product_id) {

            var color = $('.selected_color').val();
            var size = $('.selected_size').val();
            

            $(document).ready(function(e) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                
                
                if(color == ''){
                    Toast.fire({
                        icon: 'error',
                        title: 'Select a color'
                    })
                    return;
                }
                if(size == ''){
                    Toast.fire({
                        icon: 'error',
                        title: 'Select a size'
                    })
                    return;
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var quantity = $('.selected_quantity').val();

                $.ajax({
                    method: 'POST',

                    url: "{{ asset('/') }}shop/add-to-cart",
                    data: {
                        id: product_id,
                        quantity: quantity,
                        color: color,
                        size: size
                    },
                    cache: false,
                    success: function(response) {
                        //  window.location.reload();
                        if (response.status === 'success') {


                            

                            Toast.fire({
                                icon: 'success',
                                title: 'Product added to cart successfully'
                            })


                            $('.total_cart_items').html(response.cart_count);

                            // // $('.test').html('This is for test');
                            // $('.productImage_ajax').attr("src", response.productImage);
                            // $('.productTotalPrice_ajax').html(response.productTotalPrice);
                            // $('.total_price_ajax').html(response.total);

                        }

                    },
                    async: false,
                    error: function(error) {

                    }
                })
            })

        }

        function wishlist(product_id) {


            $(document).ready(function(e) {


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',

                    url: "{{ asset('/') }}shop/add-to-wishlist",
                    data: {
                        id: product_id,
                    },
                    cache: false,
                    success: function(response) {
                        //  window.location.reload();
                        if (response.status == 1) {


                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'error',
                                title: 'Product already added to wishlist!!'
                            })


                        } else if (response.status == 2) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'success',
                                title: 'Product added to wishlist!!'
                            })
                            $('.total_wishlist_items').html(response.wishlist_count);
                        } else if (response.status == 3) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'error',
                                title: 'Please login first!!'
                            })
                        }

                    },
                    async: false,
                    error: function(error) {

                    }
                })
            })

        }
    </script>
@endsection
