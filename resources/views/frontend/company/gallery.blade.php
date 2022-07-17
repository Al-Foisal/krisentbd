@extends('frontend.layouts.master')
@section('title', 'Our Gallery')

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
                                {{ __('Gallery') }}
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title text-center text-white">{{ __('Our Gallery') }}</h1>
                </div>
            </div>
        </div>
        <section class="hover-section container mt-8">
            @php
                $i = 1;
            @endphp
            <div class="row">
                @foreach ($gallery as $image)
                    @if ($i == 1)
                        <div class="col-md-4 col-6">
                            <div class="banner overlay-effect1 mb-3">
                                <figure>
                                    <img src="{{ asset($image->image) }}" width="1920" alt="element-banner"
                                        height="1080" />
                                </figure>
                                <div class="banner-layer banner-layer-middle text-center">
                                    <h3 class=" text-white mb-0">
                                        {{ app()->getLocale() == 'en' ? $image->title : $image->bn_title }}</h3>
                                </div>
                            </div>
                        </div>
                    @elseif($i == 2)
                        <div class="col-md-4 col-6">
                            <div class="banner overlay-effect3 mb-3">
                                <figure>
                                    <img src="{{ asset($image->image) }}" width="1920" alt="element-banner"
                                        height="1080" />
                                </figure>
                                <div class="banner-layer banner-layer-middle text-center">
                                    <h3 class=" text-white mb-0">{{ app()->getLocale() == 'en' ? $image->title : $image->bn_title }}</h3>
                                </div>
                            </div>
                        </div>
                    @elseif($i == 3)
                        <div class="col-md-4 col-6">
                            <div class="banner overlay-effect2 mb-3">
                                <figure>
                                    <img src="{{ asset($image->image) }}" width="1920" alt="element-banner"
                                        height="1080" />
                                </figure>
                                <div class="banner-layer banner-layer-middle text-center">
                                    <h3 class=" text-white mb-0">{{ app()->getLocale() == 'en' ? $image->title : $image->bn_title }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif
                    @php
                        $i++;
                        if ($i == 4) {
                            $i = 1;
                        }
                    @endphp
                @endforeach
            </div>
        </section>
    </main>
@endsection
