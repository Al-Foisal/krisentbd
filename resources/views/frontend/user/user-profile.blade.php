@extends('frontend.layouts.master')
@section('title', 'User profile')

@section('content')
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <h1>{{ __('My Profile') }}</h1>
            </div>
        </div>
        <div class="container account-container custom-account-container">
            <div class="row">
                @include('frontend.user._nav')
                <div class="col-lg-9 order-lg-last order-1 ">
                    <div class="tab-pane fade show active">
                        <div class="address account-content mt-0 pt-2">
                            <h4 class="title mb-3">{{ __('Shipping Address') }}</h4>
                            <form class="mb-2" action="{{ route('shop.storeProfile', [auth()->user()->id, app()->getLocale()]) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>
                                                {{ __('User Image') }}
                                            </label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        @if (!empty($user->userAddress->image))
                                            <img src="{{ asset($user->userAddress->image ?? '') }}" alt="Client image"
                                                height="100px" width="100px">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>
                                                {{ __('Full name') }}
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control"
                                                value="{{ $user->userAddress->name ?? auth()->user()->name }}"
                                                name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Phone') }}<abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="phone" value="{{ $user->userAddress->phone ?? '' }}"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-1 pb-2">
                                    <label>
                                        {{ __('Email') }}</abbr>
                                    </label>
                                    <input type="text" class="form-control" name="email"
                                        value="{{ auth()->user()->email }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('City') }}
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="text" name="city" value="{{ $user->userAddress->city ?? '' }}"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Area') }}
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="text" name="area" value="{{ $user->userAddress->area ?? '' }}"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Zip / Postal Code') }}
                                    </label>
                                    <input type="text" name="zip_code" value="{{ $user->userAddress->zip_code ?? '' }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="order-comments">{{ __('Address') }}<abbr class="required"
                                            title="required">*</abbr></label>
                                    <textarea class="form-control" name="address"
                                        required>{{ $user->userAddress->address ?? '' }}</textarea>
                                </div>
                                <div class="form-footer mb-0">
                                    <div class="form-footer-right">
                                        <button type="submit" class="btn btn-dark py-4">
                                            {{ __('Save Address') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End .tab-pane -->
                </div>
                <!-- End .tab-content -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
        <div class="mb-5"></div>
        <!-- margin -->
    </main>
@endsection
