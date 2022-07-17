@extends('frontend.layouts.master')
@section('title', 'Welcome to')

@section('content')
    {{-- {{  Illuminate\Support\Facades\App::currentLocale() }}
{{  $language }} --}}
    <main class="main">
        <!-- main slider starts -->
        <section class="entire-banner">
            <div class="owl-carousel owl-theme show-nav-hover slide-animate" data-owl-options="{
                                                                            'dots': false,
                                                                            'nav': true,
                                                                            'loop': true,
                                                                            'autoPlay':true
                                                                            }">
                @foreach ($company_slider as $slider)
                    <div class="banner banner2">
                        <figure>
                            <img width="1920" height="580" src="{{ asset($slider->image) }}"
                                style="background:#d8dce5;min-height:36rem;" alt="banner">
                        </figure>
                    </div>
                @endforeach
            </div>
        </section>
        <!-- main slider ends -->
        <!-- 6-product view area starts -->
        <section class="most-viewed-products appear-animate" data-animation-name="fadeInUpShorter"
            data-animation-delay="200">
            <div class="container">
                <div class="d-flex justify-content-between ls-n-10 pb-3 m-b-4">
                    <h2 class="section-title">{{ __('Our Products') }}</h2>
                    <a href="{{ route('shop.shop', app()->getLocale()) }}" class="btn btn-outline-info btn-sm"
                        style="padding: 10px 10px 0 10px;
                                                                                    font-size: revert;
                                                                                    font-weight: lighter;
                                                                                    border-radius: 3px;">{{ __('VIEW ALL PRODUCTS') }}</a>
                </div>
                <div class="row">
                    <div class="products-slider 5col owl-carousel owl-theme owl-nav-outisde show-nav-hover nav-image-center custom-nav"
                        data-owl-options="{
                                                                                    'margin': 0,
                                                                                    'nav': true
                                                                                    }">
                        @foreach ($products as $product)
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
                                <!--<div class="category-wrap">-->
                                <!--    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish">-->
                                <!--        <i class="icon-heart"></i>-->
                                <!--    </a>-->
                                <!--</div>-->
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
                                <div class="product-action">
                                    
                                    <a href="{{ route('shop.productDetails',[app()->getLocale(),$product->slug]) }}" class="btn btn-block btn-sm" style="background-color:#01abec;color:white;"><span>{{__('Buy Now') }}</span></a>
                                    
                                </div>
                            </div>
                            <!-- End .product-details -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- 6-product view area ends -->
        <section class="blog-section mt-8 mb-4">
            <div class="container">
                <h3 class="text-center appear-animate" data-animation-name="fadeInUp">
                    {{ __('Our Products Services') }}
                </h3>
                <div class="row">
                    @foreach ($services as $service)
                        <article class="post col-sm-6 col-md-3">
                            <div class="post-media">
                                <a href="{{ route('companyServiceDetails', [app()->getLocale(), $service->id]) }}">
                                    <img src="{{ asset($service->image) }}" alt="Post" width="225" height="280">
                                </a>
                            </div>
                            <!-- End .post-media -->
                            <div class="post-body">
                                <h2 class="post-title">
                                    <a href="{{ route('companyServiceDetails', [app()->getLocale(), $service->id]) }}">
                                        {{ app()->getLocale() == 'en' ? $service->title : $service->bn_title }} </a>
                                </h2>
                                <div class="post-content">
                                    @if(app()->getLocale() == 'en')
                                        {{ Illuminate\Support\Str::words(strip_tags($service->details), 10, '...') }}
                                        @else
                                        {!! Illuminate\Support\Str::words($service->bn_details, 10, '...') !!}
                                        @endif
                                </div>
                                <!-- End .post-content -->
                            </div>
                            <!-- End .post-body -->
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end /. of service area -->
        <!-- Testimonials starts -->
        <section class="testimonial-section mt-8">

            <h3 class="text-center appear-animate" data-animation-name="fadeInUp">
                {{ __('What People Says About us') }}
            </h3>
            <div class="testimonial-bg" data-parallax="{'speed': 2, 'enableOnMobile': true}"
                data-image-src="{{ asset('frontend/images/elements/testimonial/parallax.jpg') }}">
                <div class="container">
                    <div class="owl-carousel owl-theme owl-dots-simple mb-4 mb-lg-0 appear-animate" data-owl-options="{
                                                                            'loop': true,
                                                                            'autoPlay': true,
                                                                            'dots': true,
                                                                            'margin': 20,
                                                                            'responsive': null
                                                                        }" data-animation-name="fadeInRightShorter"
                        data-animation-delay="200">
                        @foreach ($testimonials as $test)
                            <div class="testimonial testimonial-type1 blockquote-both inner-blockquote owner-center">
                                <div class="testimonial-owner">
                                    <div>
                                        <figure>
                                            <img src="{{ asset($test->image) }}" width="62" height="62" alt="client">
                                        </figure>
                                        <blockquote class="text-white">
                                            <p class="text-white">
                                                {{ app()->getLocale() == 'en' ? $test->details : $test->bn_details }}
                                            </p>
                                        </blockquote>
                                        <strong
                                            class="testimonial-title text-white">{{ app()->getLocale() == 'en' ? $test->name : $test->bn_name }}</strong>
                                        <span
                                            class="text-white">{{ app()->getLocale() == 'en' ? $test->designation : $test->bn_designation }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial ends -->
        <section class="color-section mt-5">

            <h3 class="text-center appear-animate" data-animation-name="fadeInUp">
                {{ __('Our Success') }}
            </h3>
            <div class="container mt-5">
                <!-- <h3>With Icons</h3> -->
                <div class="row text-center">
                    <div class="col-md-3">
                        <i class="far fa-chart-bar text-primary" style="font-size: 3.5rem;"></i>
                        <h3 class="count-to text-primary mb-0" style="font-size: 5rem;" data-fromvalue="0"
                            data-tovalue="{{ $counter->one_count }}"
                            data-duration="3000" data-delimiter="," data-append="+">0</h3>
                        <p style="font-size: 2rem;">
                            {{ app()->getLocale() == 'en' ? $counter->one_title : $counter->bn_one_title }}</p>
                    </div>
                    <div class="col-md-3">
                        <i class="far fa-chart-bar text-primary" style="font-size: 3.5rem;"></i>
                        <h3 class="count-to text-primary mb-0" style="font-size: 5rem;" data-fromvalue="0"
                            data-tovalue="{{  $counter->two_count }}"
                            data-duration="3000" data-delimiter="," data-append="+">0</h3>
                        <p style="font-size: 2rem;">
                            {{ app()->getLocale() == 'en' ? $counter->two_title : $counter->bn_two_title }}</p>
                    </div>
                    <div class="col-md-3">
                        <i class="far fa-chart-bar text-primary" style="font-size: 3.5rem;"></i>
                        <h3 class="count-to text-primary mb-0" style="font-size: 5rem;" data-fromvalue="0"
                            data-tovalue="{{ $counter->three_count }}"
                            data-duration="3000" data-delimiter="," data-append="+">0</h3>
                        <p style="font-size: 2rem;">
                            {{ app()->getLocale() == 'en' ? $counter->three_title : $counter->bn_three_title }}</p>
                    </div>
                    <div class="col-md-3">
                        <i class="far fa-chart-bar text-primary" style="font-size: 3.5rem;"></i>
                        <h3 class="count-to text-primary mb-0" style="font-size: 5rem;" data-fromvalue="0"
                            data-tovalue="{{ $counter->four_count }}"
                            data-duration="3000" data-delimiter="," data-append="+">0</h3>
                        <p style="font-size: 2rem;">
                            {{ app()->getLocale() == 'en' ? $counter->four_title : $counter->bn_four_title }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /. end of counter area -->
        <div class="blog-section blog-type3 bg-gray pt-5">

            <h3 class="text-center appear-animate" data-animation-name="fadeInUp">
                {{ __('Our Blog And Latest News') }}
            </h3>
            <div class="container text-center mt-7">
                <!-- <h3 class="text-center appear-animate" data-animation-name="fadeInUpShorter"
                                                                                    data-animation-delay="200">Post Style2</h3> -->
                <div class="owl-carousel owl-theme mb-4 pb-2 text-left appear-animate" data-animation-name="fadeInUpShorter"
                    data-animation-delay="500" data-owl-options="{
                                                                                    'loop': true,
                                                                                    'margin': 20,
                                                                                    'autoHeight': true,
                                                                                    'autoplay': true,
                                                                                    'items': 2,
                                                                                    'nav': true,
                                                                                    'responsive': {
                                                                                        '0': {
                                                                                            'items': 1
                                                                                        },
                                                                                        '576': {
                                                                                            'items': 3
                                                                                        }
                                                                                    }
                                                                                }">
                    @foreach ($blogs as $blog)
                        <article class="post">
                            <div class="post-box">
                                <div class="post-media">
                                    <a href="{{ route('companyBlogDetails', [app()->getLocale(), $blog]) }}">
                                        <img src="{{ asset($blog->image) }}" width="354" height="181" alt="Post">
                                    </a>
                                </div>
                                <!-- End .post-media -->
                                <div class="post-body">
                                    <div class="post-meta">
                                        <span class="meta-date">
                                            <i class="far fa-calendar-alt"></i>
                                            {{ $blog->created_at->format('F d, Y') }}
                                        </span>
                                        <span class="meta-author">
                                            <i class="far fa-user"></i>
                                            {{ __('Author') }}
                                            <a href="#" title="Posts by {{ $blog->author }}"
                                                rel="author">{{ $blog->author }}</a>
                                        </span>
                                        <span class="meta-comments">
                                            <i class="far fa-comments"></i>
                                            <a href="#"
                                                title="Comment on Lorem ipsum dolor sit amet">{{ $blog->blogComments->count() }}
                                                {{ __('Comments') }}</a>
                                        </span>
                                    </div>
                                    <h2 class="post-title">
                                        <a
                                            href="{{ route('companyBlogDetails', [app()->getLocale(), $blog]) }}">{{ app()->getLocale() == 'en' ? $blog->name : $blog->bn_name }}</a>
                                    </h2>
                                    <div class="post-content">
                                        {!! \Illuminate\Support\Str::words(app()->getLocale() == 'en' ? $blog->details : $blog->bn_details, '50', '...') !!}
                                        <br>
                                        <a href="{{ route('companyBlogDetails', [app()->getLocale(), $blog]) }}"
                                            class="read-more">{{ __('Read more') }}...</a>
                                    </div>
                                    <!-- End .post-content -->
                                </div>
                                <!-- End .post-body -->
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End .blog-type2 -->
    </main>
@endsection
