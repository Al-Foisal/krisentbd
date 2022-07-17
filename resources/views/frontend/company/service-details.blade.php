@extends('frontend.layouts.master')
@section('title', app()->getLocale() == 'en' ? $service->title : $service->bn_title)

@section('content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('companyHome', app()->getLocale()) }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">{{ __('Services') }}</li>
                <li class="breadcrumb-item" aria-current="page">{{ app()->getLocale() == 'en' ? $service->title : $service->bn_title }}</li>
            </ol>
        </div>
        <!-- End .container -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <article class="post single">
                    <div class="post-media">
                        <img src="{{ asset($service->image) }}" alt="Post">
                    </div>
                    <!-- End .post-media -->
                    <div class="post-body">
                        <h2 class="post-title mb-5">{{ app()->getLocale() == 'en' ? $service->title : $service->bn_title }}</h2>
                        <!-- End .post-meta -->
                        <div class="post-content">
                            {!! app()->getLocale() == 'en' ? $service->details : $service->bn_details !!}
                        </div>
                        <!-- End .post-content -->
                    </div>
                    <!-- End .post-body -->
                </article>
                <!-- End .post -->
            </div>
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
@endsection