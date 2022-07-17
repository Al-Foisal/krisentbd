@extends('frontend.layouts.master')
@section('title', 'Our Blogs')

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
                                {{ __('Blog') }}
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title text-center text-white">{{ __('Our Blogs') }}</h1>
                </div>
            </div>
        </div>
        <div class="blog-section blog-type3  mt-8">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-sm-6 col-md-4">
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
                                                <a href="#" title="Posts by {{ app()->getLocale() == 'en' ? $blog->author : $blog->bn_author }}"
                                                    rel="author">{{ app()->getLocale() == 'en' ? $blog->author : $blog->bn_author }}</a>
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
                                            {!! Illuminate\Support\Str::words(app()->getLocale() == 'en' ? $blog->details : $blog->bn_details, 50, '...') !!}
                                            <br>
                                            <a href="{{ route('companyBlogDetails', [app()->getLocale(), $blog]) }}"
                                                class="read-more">{{ __('Read more') }}...</a>
                                        </div>
                                        <!-- End .post-content -->
                                    </div>
                                    <!-- End .post-body -->
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <!-- End .owl-carousel -->
            </div>
        </div>
    </main>
@endsection
