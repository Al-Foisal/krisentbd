<div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
    <h2 class="text-uppercase">{{ __('My Account') }}</h2>
    <ul class="nav nav-tabs list flex-column mb-0" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('shop.customer.dashboard', app()->getLocale()) }}">{{ __('Dashboard') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('shop.orderHistory', app()->getLocale()) }}">{{ __('Orders') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('shop.showProfile', app()->getLocale()) }}">{{ __('Profile') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('shop.wishlist', app()->getLocale()) }}">{{ __('Wishlist') }}</a>
        </li>
        <li class="nav-item">
            {{-- <a class="nav-link" href="{{ route('shop.logout') }}">Logout</a> --}}
        </li>
    </ul>
</div>
