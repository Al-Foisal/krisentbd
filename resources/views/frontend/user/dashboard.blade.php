@extends('frontend.layouts.master')
@section('title', 'Dashboard')
@section('css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/vendor/simple-line-icons/css/simple-line-icons.min.css') }} ">
@endsection

@section('content')
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <h1>{{ __('My Dashboard Area') }}</h1>
            </div>
        </div>
        <div class="container account-container custom-account-container">
            <div class="row">
                @include('frontend.user._nav')
                <div class="col-lg-9 order-lg-last order-1 tab-content">
                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                        <div class="dashboard-content">
                            <p>
                                {{ __('Hello!') }}
                                <strong class="text-dark">{{ auth()->user()->name }}</strong>
                            </p>

                            <div class="mb-4"></div>
                            <div class="row row-lg">
                                <div class="col-6 col-md-4">
                                    <div class="feature-box text-center pb-4">
                                        <a href="{{ route('shop.orderHistory', app()->getLocale()) }}" class="link-to-tab">
                                            <i class="sicon-social-dropbox"></i>
                                        </a>
                                        <div class="feature-box-content">
                                            <h3>{{ __('Orders') }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="feature-box text-center pb-4">
                                        <a href="{{ route('shop.showProfile', app()->getLocale()) }}" class="link-to-tab">
                                            <i class="icon-user-2"></i>
                                        </a>
                                        <div class="feature-box-content p-0">
                                            <h3>{{ __('Profile') }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="feature-box text-center pb-4">
                                        <a href="{{ route('shop.wishlist', app()->getLocale()) }}">
                                            <i class="sicon-heart"></i>
                                        </a>
                                        <div class="feature-box-content">
                                            <h3>{{ __('Wishlist') }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="feature-box text-center pb-4">
                                        <form action="{{ route('shop.logout', app()->getLocale()) }}" method="post">
                                            @csrf
                                            <button type="submit" style="border: none;
                                            background: white;">
                                                <a>
                                                    <i class="sicon-logout"></i>
                                                </a>
                                                <div class="feature-box-content">
                                                    <h3>{{ __('Logout') }}</h3>
                                                </div>
                                            </button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End .row -->
                        </div>
                    </div>
                    <!-- End .tab-pane -->
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
