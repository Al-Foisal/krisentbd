@extends('frontend.layouts.master')
@section('title', 'About Us')

@section('content')
    <main class="main">
        <div class="category-banner-container bg-gray">
            <div class="category-banner banner text-uppercase"
                style="background: no-repeat 60%/cover url({{ asset('frontend/images/elements/page-header.jpg') }});">
                <div class="container position-relative">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav text-white">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="{{ route('companyHome', app()->getLocale()) }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('About') }}
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title text-center text-white">{{ __('About Us') }}</h1>
                </div>
            </div>
        </div>
        <div class="pt-3">
            <div class="container mt-7">
                @foreach ($abouts as $key => $about)
                    <div class="bg-white">
                        @if($key%2==0)
                        <div class="d-flex justify-content-start p-5">
                            <figure class="">
                                <img src="{{ asset($about->image) }}" width="250" height="250" alt="product">
                            </figure>
                            <div class="ml-5">
                                <h3 class="mb-3">
                                    {{ app()->getLocale() == 'en' ? $about->title : $about->bn_title }}
                                </h3>
                                <div>
                                    {!! app()->getLocale() == 'en' ? $about->details : $about->bn_details !!}
                                </div>
                            </div>
                            <!-- End .product-details -->
                        </div>
                        @else
                        <div class="d-flex justify-content-end">
                            <div class=" text-right mr-5">
                                <h3 class="mb-3">
                                    {{ app()->getLocale() == 'en' ? $about->title : $about->bn_title }}
                                </h3>
                                <!-- End .product-container -->
                                <p class="">
                                    {!! app()->getLocale() == 'en' ? $about->details : $about->bn_details !!}
                                </p>
                            </div>
                            <!-- End .product-details -->
                            <figure class="">
                                <img src="{{ asset($about->image) }}" width="250" height="250" alt="product">
                            </figure>
                        </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <section class="brands-section">
            <div class="container">
                <h2 class="section-title font-weight-bold text-dark line-height-1 ls-10 pb-4 mb-5 mt-5">
                    {{ __('Our Clients') }}
                </h2>
                <div class="brands-slider owl-carousel owl-theme images-center mb-6" data-owl-options="{
                        'margin': 30,
                        'responsive': {
                            '991': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5
                            }
                        }
                    }">
                    @foreach ($clients as $client)
                        <img src="{{ asset($client->image) }}" width="200" height="50" alt="brand">
                    @endforeach
                </div>
                <!-- End .brands-slider -->
            </div>
        </section>
        </div>

    @endsection
