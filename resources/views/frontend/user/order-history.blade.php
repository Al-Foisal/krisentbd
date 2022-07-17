@extends('frontend.layouts.master')
@section('title', 'Order history')

@section('content')
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <h1>{{ __('My Order History') }}</h1>
            </div>
        </div>
        <div class="container account-container custom-account-container">
            <div class="row">
                @include('frontend.user._nav')
                <div class="col-lg-9 order-lg-last order-1 ">
                    <div class="tab-pane fade show active">
                        <div class="order-content">
                            <h3 class="account-sub-title d-none d-md-block">
                                <i class="sicon-social-dropbox align-middle mr-3"></i>
                                {{ __('Orders') }}
                            </h3>
                            <div class="order-table-container text-center">
                                <table class="table table-order text-left">
                                    <thead>
                                        <tr>
                                            <th class="order-id">{{ __('Order Id') }}</th>
                                            <th class="order-date">{{ __('Date') }}</th>
                                            <th class="order-status">{{ __('Status') }}</th>
                                            <th class="order-price">{{ __('Total') }}</th>
                                            <th class="order-action">{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr class="product-row">
                                                <td>
                                                    <h5 class="product-title">
                                                        {{ '#' . $order->id }}
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5 class="product-title">
                                                        {{ $order->created_at }}
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5 class="product-title">
                                                        {{ $order->order_status }}
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5 class="product-title">
                                                        {{ $order->paid_amount }}
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5 class="product-title">
                                                        
                                                        <a href="{{ route('shop.invoice', [$order->id, app()->getLocale()]) }}"
                                                            class="btn btn-xs btn-info">{{ __('Invoice') }}</a>

                                                        @if ($order->status != 0 && $order->status == 1)
                                                            <form action="{{ route('shop.cancelOrder', [$order->id, app()->getLocale()]) }}"
                                                                method="post">
                                                                @csrf
                                                                <button type="submit"
                                                                    onclick="return(confirm('Are you sure want to cancel this order?'))"
                                                                    class="btn btn-danger"> {{ __('Cancel Order') }}
                                                                </button>
                                                            </form>
                                                        @endif
                                                    </h5>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if ($orders->count() <= 0)
                                            <tr>
                                                <td class="text-center p-0" colspan="5">
                                                    <p class="mb-5 mt-5">
                                                        {{ __('No Order has been made yet.') }}
                                                    </p>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                                <hr class="mt-0 mb-3 pb-2">
                                <a href="{{ route('shop.shop', app()->getLocale()) }}" class="btn btn-dark">{{ __('Go To Shop') }}</a>
                            </div>
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
