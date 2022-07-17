@extends('frontend.layouts.master')
@section('title', 'Contact Us')

@section('content')
    <main class="main contact-two">
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
                                {{ __('Contact') }}
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title text-center text-white">{{ __('Contact us') }}</h1>
                </div>
            </div>
        </div>


        <div class="container mb-4 mb-lg-1 mt-5">
            <div class="row ">
                <div class="col-md-6">
                    <h2 class="font1 font-weight-light ls-n-10"><strong>{{ __('Contact us') }}</strong></h2>

                    <form action="{{ route('storeContact', app()->getLocale()) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group required-field mb-2">
                                    <label for="contact-name">{{ __('Full name') }}</label>
                                    <input type="text" class="form-control" id="contact-name" name="name"
                                        required>
                                </div><!-- End .form-group -->
                            </div>

                            <div class="col-md-6">
                                <div class="form-group required-field mb-2">
                                    <label for="contact-email">{{ __('Email') }}</label>
                                    <input type="email" class="form-control" id="contact-email" name="email"
                                        required>
                                </div><!-- End .form-group -->
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group required-field mb-2">
                                    <label for="contact-name">{{ __('Subject') }}</label>
                                    <input type="text" class="form-control" id="contact-name" name="subject"
                                        required>
                                </div><!-- End .form-group -->
                            </div>

                            <div class="col-md-6">
                                <div class="form-group required-field mb-2">
                                    <label for="contact-email">{{ __('Phone') }}</label>
                                    <input type="text" class="form-control" id="contact-email" name="phone"
                                        required>
                                </div><!-- End .form-group -->
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <label for="contact-message">{{ __('Message') }}</label>
                            <textarea cols="30" rows="1" id="contact-message" class="form-control" name="message"
                                required></textarea>
                        </div><!-- End .form-group -->

                        <div class="form-footer mb-0">
                            <button type="submit" class="btn btn-primary font1">{{ __('Send Message') }}</button>
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-8 -->

                <div class="col-md-6">
                    <h2 class="contact-title font1 ls-n-10 text-primary"><strong>{{ __('Get in touch') }}</strong></h2>
                    <p>
                        {{ app()->getLocale()=='en'?$company->about:$company->bn_about }}
                    </p>

                    <hr class="mt-3 mb-0" />

                    <div class="contact-info mb-2">
                        <h2 class="contact-title font1 ls-n-10 text-primary"><strong>{{ __('The Office') }}</strong></h2>

                        <div class="porto-sicon-box d-flex align-items-center">
                            <div class="porto-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h3 class="porto-sicon-title font1 ls-n-10">
                                <strong>{{ __('Address') }}:</strong> {{ app()->getLocale()=='en'?$company->address:$company->bn_address }}
                            </h3>
                        </div>
                        <div class="porto-sicon-box d-flex align-items-center">
                            <div class="porto-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h3 class="porto-sicon-title font1 ls-n-10">
                                <strong>{{ __('Phone') }}:</strong> {{ app()->getLocale()=='en'?$company->phone_one:$company->bn_phone_one }}
                            </h3>
                        </div>
                        <div class="porto-sicon-box d-flex align-items-center">
                            <div class="porto-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h3 class="porto-sicon-title font1 ls-n-10">
                                <strong>{{ __('Phone') }}:</strong> {{ app()->getLocale()=='en'?$company->phone_two:$company->bn_phone_two }}
                            </h3>
                        </div>
                        
                        <div class="porto-sicon-box d-flex align-items-center">
                            <div class="porto-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h3 class="porto-sicon-title font1 ls-n-10">
                                <strong>{{ __('Customer Care:') }}</strong> {{ app()->getLocale()=='en'?$company->phone_three:$company->bn_phone_three }}
                            </h3>
                        </div>
                        <div class="porto-sicon-box d-flex align-items-center">
                            <div class="porto-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <h3 class="porto-sicon-title font1 ls-n-10">
                                <strong>{{ __('Email') }}:</strong> {{ $company->email }}
                            </h3>
                        </div>
                    </div><!-- End .contact-info -->
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </main>
@endsection
