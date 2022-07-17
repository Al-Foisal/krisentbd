
@extends('frontend.layouts.master')
@section('title', 'Forgot password')

@section('content')
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <h1>{{ __('My Account') }}</h1>
            </div>
        </div>

        <div class="container login-container">
            <div class="row">
                <div class="alert alert-gray p-4">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div style="width:40%;margin:auto;">
                            <div class="heading mb-1">
                                
                            </div>

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <label for="login-email">
                                    {{ __('Email') }}
                                    <span class="required">*</span>
                                </label>
                                <input type="email" class="form-input form-wide" id="login-email" name="email" required
                                    autofocus />
                                <button type="submit" class="btn btn-dark btn-md w-100">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End .main -->
@endsection
