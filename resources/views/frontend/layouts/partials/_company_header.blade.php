<header class="header">
    <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
        <div class="container">
            <div class="header-left">
                <a href="{{ route('companyHome', app()->getLocale()) }}" class="logo">
                    <img src="{{ asset($company->logo) }}" alt="Logo" width="111" height="44">
                </a>
                <div class="header-col">
                    <div
                        class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                        <a href="#" class="search-toggle" role="button">
                            <i class="icon-search-3"></i>
                        </a>
                        <form action="{{ route('shop.search', app()->getLocale()) }}" method="get">
                            <div class="header-search-wrapper">
                                <input type="text" class="form-control" name="search" id="q"
                                    placeholder="I'm searching for..." required>
                                <!-- End .select-custom -->
                                <button class="btn icon-magnifier" title="search" type="submit"></button>
                            </div>
                            <!-- End .header-search-wrapper -->
                        </form>
                    </div>
                    <!-- End .header-search -->
                </div>
            </div>
            <div class="header-right ml-0 ml-lg-auto">
                <a href="{{ route('shop.customer.dashboard', app()->getLocale()) }}"
                    class="header-icon d-md-block d-none mr-0">
                    <div class="header-user">
                        <i class="icon-user-2"></i>
                        <div class="header-userinfo">
                            <span class="d-inline-block line-height-1 ls-10">{{ __('Hello!') }}</span>
                            @auth
                                <h4 class="font1 mb-0">{{ strtok(auth()->user()->name, ' ') }}</h4>
                            @else
                                <h4 class="font1 mb-0">{{ __('My Account') }}</h4>
                            @endauth
                        </div>
                    </div>
                </a>
                <a href="{{ route('shop.wishlist', app()->getLocale()) }}" class="header-icon">
                    <i class="icon-wishlist-2"></i>
                </a>
                <div class="dropdown cart-dropdown">
                    <a href="{{ route('shop.cart', app()->getLocale()) }}" title="Cart">
                        <i class="minicart-icon"></i>
                        <span class="cart-count badge-circle total_cart_items">{{ Cart::count() }}</span>
                    </a>
                    <!-- End .dropdown-menu -->
                </div>
                <!-- End .dropdown -->
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-header" data-sticky-options="{'mobile': false, 'offset': 684}">
        <div class="container">
            <div class="header-center">
                <button class="mobile-menu-toggler" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <nav class="main-nav d-none d-lg-flex flex-wrap pt-3 pb-3">
                    <ul class="menu">
                        <li class="active">
                            <a href="{{ route('companyHome', app()->getLocale()) }}">{{ __('Home') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('companyAbout', app()->getLocale()) }}">{{ __('About') }}</a>
                        </li>
                        <li>
                            <a
                                href="{{ route('companyService', app()->getLocale()) }}">{{ __('Our Services') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('gallery', app()->getLocale()) }}">{{ __('Gallery') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('companyBlog', app()->getLocale()) }}">{{ __('Blog') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('shop.shop', app()->getLocale()) }}">{{ __('Shop') }}</a>
                        </li>
                        <li>
                            <a
                                href="{{ route('companyDistributor', app()->getLocale()) }}">{{ __('Distributors') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('contact', app()->getLocale()) }}">{{ __('Contact us') }}</a>
                        </li>
                        <li>
                        <a href="#">{{__('Language')}}</a>
                        <ul>
                        @if (count(config('app.languages')) > 1)
                            <li>
                                    @foreach (config('app.languages') as $langLocale => $langName)
                                        <a class="dropdown-item"
                                            href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ __(strtoupper($langLocale)) }}
                                            ({{ $langName }})
                                        </a>
                                    @endforeach
                            </li>
                        @endif
                        </ul>
                        </li>
                    </ul>
                </nav>
                <!-- <div class="header-dropdowns ml-auto">
                <a href="#" class="link-seller font-weight-bold d-none d-sm-block">Become a Seller</a>
            </div> -->
            </div>
        </div>
    </div>
</header>
