@extends('frontend.layouts.master')
@section('title', 'Our Distributors')

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
                                {{ __('Distributors') }}
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title text-center text-white">{{ __('Our Distributors') }}</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mt-5 mb-5">
                <div class="cta-border cta-outline cyan mt-6">
                    <div class="row cta-simple">
                        <div class="col-md-12 d-flex justify-content-between">
                            <h3 class="font-weight-normal text-left">
                                <b>{{ __('Super') }}</b> {{ __('Dealer') }}!
                            </h3>
                            <h3 class="font-weight-normal text-left"><a
                                    href="{{ route('companyAllDistributors', [app()->getLocale(), 1]) }}">
                                    {{ __('View All') }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($super as $sd)
                    <div class="card col-sm-6 col-md-3 p-3">
                        <img src="{{ asset($sd->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ app()->getLocale() == 'en' ? $sd->name : $sd->bn_name }}</h5>
                            <p class="card-text">
                                {{ app()->getLocale() == 'en' ? $sd->details : $sd->bn_details }}
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fas fa-phone pr-3" style="color: #01abec;"></i> {{ app()->getLocale() == 'en' ? $sd->phone : $sd->bn_phone }}
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="fas fa-envelope pr-3" style="color: #01abec;"></i>
                                <p>{{ $sd->email }}</p>
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="fas fa-map-marker-alt pr-3" style="color: #01abec;"></i>
                                <p>{{ app()->getLocale() == 'en' ? $sd->address : $sd->bn_address }}</p>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="mt-5 mb-5">
                <div class="cta-border cta-outline cyan mt-6">
                    <div class="row cta-simple">
                        <div class="col-md-12 d-flex justify-content-between">
                            <h3 class="font-weight-normal text-left">
                                <b>{{ __('Main') }}</b> {{ __('Dealer') }}!
                            </h3>
                            <h3 class="font-weight-normal text-left">
                                <a href="{{ route('companyAllDistributors', [app()->getLocale(), 2]) }}">
                                    {{ __('View All') }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($main as $md)
                    <div class="card col-sm-6 col-md-3 p-3">
                        <img src="{{ asset($md->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ app()->getLocale() == 'en' ? $md->name : $md->bn_name }}</h5>
                            <p class="card-text">
                                {{ app()->getLocale() == 'en' ? $md->details : $md->bn_details }}
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fas fa-phone pr-3" style="color: #01abec;"></i> {{ app()->getLocale() == 'en' ? $md->phone : $md->bn_phone }}
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="fas fa-envelope pr-3" style="color: #01abec;"></i>
                                <p>{{ $md->email }}</p>
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="fas fa-map-marker-alt pr-3" style="color: #01abec;"></i>
                                <p>{{ app()->getLocale() == 'en' ? $md->address : $md->bn_address }}</p>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="mt-5 mb-5">
                <div class="cta-border cta-outline cyan mt-6">
                    <div class="row cta-simple">
                        <div class="col-md-12 d-flex justify-content-between">
                            <h3 class="font-weight-normal text-left">
                                <b>{{ __('Sub') }}</b> {{ __('Dealer') }}!
                            </h3>
                            <h3 class="font-weight-normal text-left">
                                <a href="{{ route('companyAllDistributors', [app()->getLocale(), 3]) }}">
                                    {{ __('View All') }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($sub as $subd)
                    <div class="card col-sm-6 col-md-3 p-3">
                        <img src="{{ asset($subd->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ app()->getLocale() == 'en' ? $subd->name : $subd->bn_name }}</h5>
                            <p class="card-text">
                                {{ app()->getLocale() == 'en' ? $subd->details : $subd->bn_details }}
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fas fa-phone pr-3" style="color: #01abec;"></i>
                                {{ app()->getLocale() == 'en' ? $subd->phone : $subd->bn_phone }}
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="fas fa-envelope pr-3" style="color: #01abec;"></i>
                                <p>{{ $subd->email }}</p>
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="fas fa-map-marker-alt pr-3" style="color: #01abec;"></i>
                                <p>{{ app()->getLocale() == 'en' ? $subd->address : $subd->bn_address }}</p>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
