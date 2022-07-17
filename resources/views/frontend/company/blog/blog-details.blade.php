@extends('frontend.layouts.master')
@section('title', app()->getLocale() == 'en' ? $blog->name : $blog->bn_name)

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
                    <li class="breadcrumb-item" aria-current="page">{{ __('Blog') }}</li>
                    <li class="breadcrumb-item active" aria-current="page">{{ app()->getLocale() == 'en' ? $blog->name : $blog->bn_name }}</li>
                </ol>
            </div>
            <!-- End .container -->
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <article class="post single">
                        <div class="post-media">
                            <img src="{{ asset($blog->image) }}" alt="Post">
                        </div>
                        <!-- End .post-media -->
                        <div class="post-body">
                            <div class="post-date">
                                <span class="day">{{ $blog->created_at->format('d') }}</span>
                                <span class="month">{{ $blog->created_at->format('M') }}</span>
                            </div>
                            <!-- End .post-date -->
                            <h2 class="post-title">{{ app()->getLocale() == 'en' ? $blog->name : $blog->bn_name }}</h2>
                            <div class="post-meta">
                                <a href="#" class="hash-scroll">{{ $blog->blogComments->count() }} {{ __('Comments') }}</a>
                            </div>
                            <!-- End .post-meta -->
                            <div class="post-content">
                                {!! app()->getLocale() == 'en' ? $blog->details : $blog->bn_details !!}
                            </div>
                            <!-- End .post-content -->
                            <div class="widget">
                                <h4 class="widget-title">{{ __('Related Blog Tags') }}</h4>
                                <div class="tagcloud">
                                    @foreach ($blog->blogTags as $rbt)
                                        <a
                                            href="{{ route('tagBlog', [app()->getLocale(), $rbt]) }}">{{ app()->getLocale() == 'en' ? $rbt->name : $rbt->bn_name }}</a>
                                    @endforeach
                                </div>
                                <!-- End .tagcloud -->
                                <br>
                                <h4 class="widget-title">{{ __('Related Blog Categories') }}</h4>
                                <div class="tagcloud">
                                    @foreach ($blog->blogCategories as $rbc)
                                        <a
                                            href="{{ route('categoryBlog', [app()->getLocale(), $rbc]) }}">{{ app()->getLocale() == 'en' ? $rbc->name : $rbc->bn_name }}</a>
                                    @endforeach
                                </div>
                                <!-- End .tagcloud -->
                            </div>
                            <!-- End .post-share -->
                            <hr>
                            @foreach ($blog->blogComments as $comment)
                                @if ($comment->is_approved)
                                    <div class="post-author">
                                        <h3>
                                            <i class="far fa-user"></i>{{ __('Author') }}
                                        </h3>
                                        <figure>
                                            <a href="#">
                                                <img src="{{ asset('images/profile.png') }}" alt="author">
                                            </a>
                                        </figure>
                                        <div class="author-content">
                                            <h4>
                                                {{ $comment->name }}
                                            </h4>
                                            <p>
                                                {{ $comment->comment }}
                                            </p>
                                        </div>
                                        <!-- End .author.content -->
                                    </div>
                                @endif
                            @endforeach
                            <!-- End .post-author -->
                            <div class="comment-respond">
                                <h3>{{ __('Leave a Reply') }}</h3>
                                <form action="{{ route('companyBlogCommentStore', app()->getLocale()) }}" method="post">
                                    @csrf
                                    <p>{{ __('Your email address will not be published. Required fields are marked') }} *
                                    </p>
                                    <div class="form-group">
                                        <label class="text-dark">{{ __('Comments') }}*</label>
                                        <textarea cols="30" rows="1" class="form-control" required name="comment"></textarea>
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <label class="text-dark">{{ __('Full name') }}*</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <label class="text-dark">{{ __('Email') }}*</label>
                                        <input type="email" name="eamil" class="form-control" required>
                                    </div>
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                    <!-- End .form-group -->
                                    <!-- End .form-group-custom-control -->
                                    <div class="form-footer my-0">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            {{ __('Post Comment') }}
                                        </button>
                                    </div>
                                    <!-- End .form-footer -->
                                </form>
                            </div>
                            <!-- End .comment-respond -->
                        </div>
                        <!-- End .post-body -->
                    </article>
                    <!-- End .post -->
                </div>
                <!-- End .col-lg-9 -->
                <div class="sidebar-toggle custom-sidebar-toggle">
                    <i class="fas fa-sliders-h"></i>
                </div>
                <div class="sidebar-overlay"></div>
                <aside class="sidebar mobile-sidebar col-lg-3">
                    <div class="sidebar-wrapper" data-sticky-sidebar-options='{"offsetTop": 72}'>
                        <div class="widget widget-categories">
                            <h4 class="widget-title">{{ __('Blog Categories') }}</h4>
                            <ul class="list">
                                @foreach ($blogCategory as $bc)
                                    <li>
                                        <a href="{{ route('categoryBlog', [app()->getLocale(), $bc]) }}">
                                            {{ app()->getLocale() == 'en' ? $bc->name : $bc->bn_name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End .widget -->
                        <div class="widget">
                            <h4 class="widget-title">{{ __('Recent Posts') }}</h4>
                            <ul class="simple-post-list">
                                @foreach ($recentBlog as $rb)
                                    <li>
                                        <div class="post-media">
                                            <a href="{{ route('companyBlogDetails', [app()->getLocale(), $blog]) }}">
                                                <img src="{{ asset($rb->image) }}" alt="Post">
                                            </a>
                                        </div>
                                        <!-- End .post-media -->
                                        <div class="post-info">
                                            <a
                                                href="{{ route('companyBlogDetails', [app()->getLocale(), $blog]) }}">{{ Illuminate\Support\Str::words(app()->getLocale() == 'en' ? $rb->name : $rb->bn_name, 4, '...') }}</a>
                                            <div class="post-meta">
                                                {{ $rb->created_at->format('F d, Y') }}
                                            </div>
                                            <!-- End .post-meta -->
                                        </div>
                                        <!-- End .post-info -->
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End .widget -->
                        <div class="widget">
                            <h4 class="widget-title">{{ __('Blog Tags') }}</h4>
                            <div class="tagcloud">
                                @foreach ($blogTag as $bt)
                                    <a href="{{ route('tagBlog', [app()->getLocale(), $rbt]) }}">{{ app()->getLocale() == 'en' ? $bt->name : $bt->bn_name }}</a>
                                @endforeach
                            </div>
                            <!-- End .tagcloud -->
                        </div>
                        <!-- End .widget -->
                    </div>
                    <!-- End .sidebar-wrapper -->
                </aside>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </main>
@endsection
