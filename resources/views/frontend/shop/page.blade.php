@extends('frontend.layouts.master')
@section('title', app()->getLocale() == 'en' ? $page->title : $page->bn_title)

@section('content')
    <main class="main about">

        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('companyHome',app()->getLocale()) }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ app()->getLocale() == 'en' ? $page->title : $page->bn_title }}</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="about-section">
            <div class="container">
                <h2 class="subtitle">{{ app()->getLocale() == 'en' ? $page->title : $page->bn_title }}</h2>
                {!! app()->getLocale() == 'en' ? $page->details : $page->bn_details !!}
            </div><!-- End .container -->
        </div><!-- End .about-section -->
    </main>
@endsection
