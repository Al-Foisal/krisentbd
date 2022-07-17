@extends('frontend.layouts.master')
@section('title', 'Rgister to stay with us')

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
                                <h2 class="title">{{ __('Register') }}</h2>
                            </div>

                            <form method="POST" action="{{ route('register', app()->getLocale()) }}">
                                @csrf
                                <label for="login-email">
                                    {{ __('Name') }}
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input form-wide" id="login-email" name="name" required autofocus />

                                <label for="login-email">
                                    {{ __('Email') }}
                                    <span class="required">*</span>
                                </label>
                                <input type="email" class="form-input form-wide" id="login-email" name="email" required />

                                <label for="login-password">
                                    {{ __('Password') }}
                                    <span class="required">*</span>
                                </label>
                                <input type="password" class="form-input form-wide" id="login-password" name="password" required />

                                <label for="login-password">
                                    {{ __('Confirm Password') }}
                                    <span class="required">*</span>
                                </label>
                                <input type="password" class="form-input form-wide" id="login-password" name="password_confirmation" required />

                                

                                <div class="form-footer">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request', app()->getLocale()) }}"
                                            class="forget-password text-dark form-footer-right">{{ __('Already registered?') }}</a>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-dark btn-md w-100">
                                    {{ __('Register') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End .main -->
@endsection