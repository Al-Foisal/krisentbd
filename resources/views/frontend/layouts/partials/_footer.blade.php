<footer style="color: #fff;background: #01abec;">
    <div class="footer">
        <div class="container">
            <div class="footer-middle">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="demo22.html">
                            <img class="logo" src="{{ asset($company->logo) }}" alt="Logo" width="220"
                                height="80">
                        </a>
                        <div class="row text-light">
                            <div class="pr-sm-0">
                                <div class="contact-widget">
                                    <h4 class="widget-title">{{ __('Address') }}:</h4>
                                    {{ $company->address }}
                                </div>
                                <div class="contact-widget">
                                    <h4 class="widget-title">{{ __('Phone') }}:</h4>
                                    {{ $company->phone_one }}
                                </div>
                                <div class="contact-widget">
                                    <h4 class="widget-title">{{ __('Phone') }}:</h4>
                                    {{ $company->phone_two }}
                                </div>
                                <div class="contact-widget">
                                    <h4 class="widget-title">{{ __('Phone') }}:</h4>
                                    {{ __('Customer Care:') }} {{ $company->phone_three }}
                                </div>
                                <div class="contact-widget">
                                    <h4 class="widget-title">{{ __('Email') }}:</h4>
                                    {{ $company->email }}
                                </div>
                            </div>
                        </div>
                        <div class="social-icons mb-3 mb-lg-0">
                            @if (!empty($company->facebook))
                                <a href="{{ $company->facebook }}" class="social-icon social-facebook"
                                    target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            @endif
                            @if (!empty($company->twitter))
                                <a href="{{ $company->twitter }}" class="social-icon social-twitter" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            @endif
                            @if (!empty($company->linkedin))
                                <a href="{{ $company->linkedin }}" class="social-icon social-linkedin"
                                    target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            @endif
                            @if (!empty($company->youtube))
                                <a href="{{ $company->youtube }}" class="social-icon social-facebook"
                                    target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            @endif
                            @if (!empty($company->instagram))
                                <a href="{{ $company->instagram }}" class="social-icon social-twitter"
                                    target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            @endif
                            @if (!empty($company->pinterest))
                                <a href="{{ $company->pinterest }}" class="social-icon social-linkedin"
                                    target="_blank">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">{{ __('Useful Links') }}</h4>
                            <div class="row links link-lg link-parts">
                                <div class="link-part">
                                    <ul class="ml-3">
                                        <li>
                                            <a
                                                href="{{ route('shop.customer.dashboard', app()->getLocale()) }}">{{ __('My Account') }}</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{ route('companyHome', app()->getLocale()) }}">{{ __('Home') }}</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{ route('companyAbout', app()->getLocale()) }}">{{ __('About') }}</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{ route('companyService', app()->getLocale()) }}">{{ __('Our Services') }}</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{ route('gallery', app()->getLocale()) }}">{{ __('Gallery') }}</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{ route('companyDistributor', app()->getLocale()) }}">{{ __('Distributors') }}</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{ route('contact', app()->getLocale()) }}">{{ __('Contact us') }}</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{ route('shop.shop', app()->getLocale()) }}">{{ __('Shop') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">{{ __('Useful Links') }}</h4>
                            <div class="row links link-lg link-parts">
                                <div class="link-part">
                                    <ul class="ml-3">
                                        @foreach ($pages as $page)
                                            <li>
                                                <a
                                                    href="{{ route('page', [app()->getLocale(), $page->slug]) }}">
                                                    {{ app()->getLocale() == 'en' ? $page->title : $page->bn_title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" id="contact">
                        <div class="widget widget-sm">
                            <h4 class="widget-title">{{ __('Send Us a Message') }}</h4>
                            <form class="mb-0" action="{{ route('storeContact', app()->getLocale()) }}"
                                method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="mb-1" for="contact-email">
                                            {{ __('Full name') }}
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="contact-email" name="name"
                                            required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="mb-1" for="contact-email">
                                            {{ __('Email') }}
                                            <span class="required">*</span>
                                        </label>
                                        <input type="email" class="form-control" id="contact-email" name="email"
                                            required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="mb-1" for="contact-email">
                                            {{ __('Subject') }}
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="contact-email" name="subject"
                                            required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="mb-1" for="contact-email">
                                            {{ __('Phone') }}
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="contact-email" name="phone"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mb-1" for="contact-message">
                                        {{ __('Message') }}
                                        <span class="required">*</span>
                                    </label>
                                    <textarea cols="30" rows="3" id="contact-message" class="form-control" name="message" required></textarea>
                                </div>
                                <div class="form-footer mb-0">
                                    <button type="submit" class="btn btn-dark font-weight-normal">
                                        {{ __('Send Message') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-sm-flex align-items-center">
                <div class="footer-left">
                    <span class="footer-copyright">{{ __('Copyright') }} © {{ date('Y') }}
                        {{ config('app.name') }}, {{ __('All Right Reserved') }} |
                        {{ __('Design & Developed By') }} <a href="https://quicktech-ltd.com/">QuickTech
                            IT</a></span>
                </div>
                <div class="footer-right ml-auto mt-1 mt-sm-0">
                    <img src="{{ asset('images/payment.png') }}" alt="payment" width="200" height="27">
                </div>
            </div>
        </div>
        <!-- End .footer-bottom -->
    </div>
</footer>
