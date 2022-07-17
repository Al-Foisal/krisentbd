@extends('frontend.layouts.master')
@section('title', 'Our Service')

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
                                {{ __('Services') }}
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title text-center text-white">{{ __('Our Products Services') }}</h1>
                </div>
            </div>
        </div>
        <section class="blog-section mt-8 mb-4">
            <div class="container">
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-sm-6 col-md-3">
                            <article class="post">
                                <div class="post-media">
                                    <a href="{{ route('companyServiceDetails', [app()->getLocale(), $service->id]) }}">
                                        <img src="{{ asset($service->image) }}" alt="Post" width="225" height="280">
                                    </a>
                                </div>
                                <!-- End .post-media -->
                                <div class="post-body">
                                    <h2 class="post-title">
                                        <a
                                            href="{{ route('companyServiceDetails', [app()->getLocale(), $service->id]) }}">{{ app()->getLocale() == 'en' ? $service->title : $service->bn_title }}</a>
                                    </h2>
                                    <div class="post-content">
                                        @if(app()->getLocale() == 'en')
                                        {{ Illuminate\Support\Str::words(strip_tags($service->details), 10, '...') }}
                                        @else
                                        {!! Illuminate\Support\Str::words($service->bn_details, 50, '...') !!}
                                        @endif
                                    </div>
                                    <!-- End .post-content -->
                                </div>
                                <!-- End .post-body -->
                            </article>
                            <!-- End .post -->
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
