@extends('frontend.layouts.master')
@section('title', 'Login to start your session')

@section('content')
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <h1>{{ __('My Account') }}</h1>
            </div>
        </div>

        <div class="container login-container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div style="width:40%;margin:auto;">
                            <div class="heading mb-1">
                                <h2 class="title">{{ __('Log in') }}</h2>
                            </div>

                            <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                                @csrf
                                <label for="login-email">
                                    {{ __('Email') }}
                                    <span class="required">*</span>
                                </label>
                                <input type="email" class="form-input form-wide" id="login-email" name="email" required
                                    autofocus />

                                <label for="login-password">
                                    {{ __('Password') }}
                                    <span class="required">*</span>
                                </label>
                                <input type="password" class="form-input form-wide" id="login-password" name="password"
                                    required />

                                <div class="form-footer">
                                    <div class=" mb-0">
                                        <a href="{{ route('register', app()->getLocale()) }}">
                                            <label class=" mb-0"
                                                for="lost-password">{{ __('Join with us!') }}</label>
                                        </a>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"
                                            class="forget-password text-dark form-footer-right">{{ __('Forgot your password?') }}</a>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-dark btn-md w-100">
                                    {{ __('Log in') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End .main -->
@endsection
