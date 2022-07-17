
@extends('frontend.layouts.master')
@section('title', 'Reset password')

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
                                <h2 class="title">{{ __('Reset Password') }}</h2>
                            </div>

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                
                                <label for="login-email">
                                    {{ __('Email') }}
                                    <span class="required">*</span>
                                </label>
                                <input type="email" class="form-input form-wide" value="{{ old('email', $request->email) }}" id="login-email" name="email" required />

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

                                
                                <button type="submit" class="btn btn-dark btn-md w-100">
                                    {{ __('Reset Password') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End .main -->
@endsection
