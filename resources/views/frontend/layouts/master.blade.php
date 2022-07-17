<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="">
    <meta name="author" content="SW-THEMES">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset($company->favicon??'') }}">
    
    <!-- Plugins CSS File -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/demo22.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css') }}">
    @yield('css')
</head>

<body>
    <div class="page-wrapper">
        @includeWhen($is_company ?? false, 'frontend.layouts.partials._company_header')
        @includeWhen($is_shop ?? false, 'frontend.layouts.partials._shop_header')
        <!-- End .header -->
        @yield('content')
        <!-- End .main -->
        <style>
            label {
                color: #ffffff;
            }

            .btn-dark {
                background-color: #01abec;
                border: 1px solid #ffffff;
            }

            .btn-dark:hover {
                border: none;
                color: #01abec;
                background-color: #ffffff;
            }

        </style>
        @include('frontend.layouts.partials._footer')
    </div>
    <!-- End .page-wrapper -->
    <!--<div class="loading-overlay">-->
    <!--    <div class="bounce-loader">-->
    <!--        <div class="bounce1"></div>-->
    <!--        <div class="bounce2"></div>-->
    <!--        <div class="bounce3"></div>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->
    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close">
                <i class="fa fa-times"></i>
            </span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    
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
                    <li class="active">
                        <a href="{{ route('companyHome', app()->getLocale()) }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('companyAbout', app()->getLocale()) }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('companyService', app()->getLocale()) }}">Services</a>
                    </li>
                    <li>
                        <a href="{{ route('gallery', app()->getLocale()) }}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{ route('companyBlog', app()->getLocale()) }}">Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('companyDistributor', app()->getLocale()) }}">Distributors</a>
                    </li>
                    <li>
                        <a href="{{ route('contact', app()->getLocale()) }}">contact</a>
                    </li>
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('shop.categoryProduct', [app()->getLocale(), $category->slug]) }}">
                                {{ $category->name }}
                            </a>
                            @if ($category->subcategories->count() > 0)
                                <ul>
                                    @foreach ($category->subcategories->where('status', 1) as $sub)
                                        <li>
                                            <a
                                                href="{{ route('shop.categoryProduct', [app()->getLocale(), $category->slug, $sub->slug]) }}">{{ $sub->name }}</a>
                                            @if ($sub->childcategories->count() > 0)
                                                <ul>
                                                    @foreach ($sub->childcategories->where('status', 1) as $child)
                                                        <li>
                                                            <a
                                                                href="{{ route('shop.categoryProduct', [app()->getLocale(), $category->slug, $sub->slug, $child->slug]) }}">
                                                                {{ $child->name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
                <ul class="mobile-menu">
                    <li>
                        <a href="{{ route('shop.customer.dashboard', app()->getLocale()) }}">My Account</a>
                    </li>
                    <li>
                        <a href="{{ route('shop.wishlist', app()->getLocale()) }}">My Wishlist</a>
                    </li>
                    <li>
                        <a href="{{ route('shop.cart', app()->getLocale()) }}">Cart</a>
                    </li>
                    
                </ul>
            </nav>
            <!-- End .mobile-nav -->
            <form class="search-wrapper mb-2" action="{{ route('shop.search', app()->getLocale()) }}" method="get">
                <input type="text" class="form-control mb-0" name="search" placeholder="Search..." required>
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>
            <div class="social-icons">
                <a href="{{ $company->facebook }}" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                <a href="{{ $company->twitter }}" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                <a href="{{ $company->instagram }}" class="social-icon social-instagram icon-instagram" target="_blank"></a>
            </div>
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->
    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="{{ route('companyHome', app()->getLocale()) }}">
                <i class="icon-home"></i>
                Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{ route('shop.shop', app()->getLocale()) }}" class="">
                <i class="icon-bars"></i>
                Shop
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{ route('shop.wishlist', app()->getLocale()) }}" class="">
                <i class="icon-wishlist-2"></i>
                Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{ route('shop.customer.dashboard', app()->getLocale()) }}" class="">
                <i class="icon-user-2"></i>
                Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{ route('shop.cart', app()->getLocale()) }}" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle total_cart_items">{{ Cart::count() }}</span>
                </i>
                Cart
            </a>
        </div>
    </div>
    
        <a id="scroll-top" href="#top" title="Top" role="button">
            <i class="icon-angle-up"></i>
        </a>
    <style>
    @import url("https://fonts.googleapis.com/css?family=Roboto");

.floating-container {
  position: fixed;
  width: 100px;
  height: 100px;
  bottom: 0;
  right: 0;
  margin: 35px 25px;
}

.floating-container:hover {
  height: 300px;
}

.floating-container:hover .floating-button {
  box-shadow: 0 10px 25px rgba(44, 179, 240, 0.6);
  -webkit-transform: translatey(5px);
  transform: translatey(5px);
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.floating-container .floating-button {
  position: absolute;
  width: 60px;
  height: 60px;
  background: #2cb3f0;
  bottom: 0;
  border-radius: 50%;
  left: 0;
  right: 0;
  margin: auto;
  color: white;
  line-height: 70px;
  text-align: center;
  font-size: 23px;
  z-index: 100;
  box-shadow: 0 10px 25px -5px rgba(44, 179, 240, 0.6);
  cursor: pointer;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
/**/

.floating-container:hover .floating-button1 {
  box-shadow: 0 10px 25px rgb(65 210 81);
  -webkit-transform: translatey(5px);
  transform: translatey(5px);
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.floating-container .floating-button1 {
  position: absolute;
  width: 60px;
  height: 60px;
  background: rgb(65 210 81);
  bottom: 70px;
  border-radius: 50%;
  left: 0;
  right: 0;
  margin: auto;
  color: white;
  line-height: 70px;
  text-align: center;
  font-size: 23px;
  z-index: 100;
  box-shadow: 0 10px 25px -5px rgba(44, 179, 240, 0.6);
  cursor: pointer;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.floating-container:hover .floating-button2 {
  box-shadow: 0 10px 25px #00b7f7;
  -webkit-transform: translatey(5px);
  transform: translatey(5px);
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.floating-container .floating-button2 {
  position: absolute;
  width: 60px;
  height: 60px;
  background: #00b7f7;
  bottom: 140px;
  border-radius: 50%;
  left: 0;
  right: 0;
  top:100;
  margin: auto;
  color: white;
  line-height: 70px;
  text-align: center;
  font-size: 23px;
  z-index: 100;
  box-shadow: 0 10px 25px -5px rgba(44, 179, 240, 0.6);
  cursor: pointer;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
    </style>
    <!-- partial:index.partial.html -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <div class="floating-container">
            <a href="tel:01722276177">
                <div class="floating-button1">
                    <i class="material-icons">
                        phone
                    </i>
                </div>
            </a>
            <a href="https://wa.me/message/JGNOUI5ZZUF7M1">
                <div class="floating-button2">
                    <i class="material-icons">
                        whatsapp
                    </i>
                </div>
            </a>
            <div id="fb-root"></div>
            <!-- Your Chat plugin code -->
            <div id="fb-customer-chat" class="fb-customerchat"></div>
        </div>
        <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "908007636065611");
            chatbox.setAttribute("attribution", "biz_inbox");
        </script>
        <!-- Your SDK code -->
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml            : true,
                version          : 'v13.0'
            });
            };
            
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- partial -->
    <!-- Plugins JS File -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.min.js') }}"></script>
    <script src="{{ asset('frontend/js/optional/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery-numerator.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('frontend/js/main.min.js') }}"></script>
    @include('sweetalert::alert')
    @yield('js')
</body>

</html>
