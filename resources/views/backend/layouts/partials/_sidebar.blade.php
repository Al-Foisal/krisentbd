<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset($company->logo) ?? '' }}" alt="admin" class="brand-image  elevation-3" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset(auth()->guard('admin')->user()->image) }}" class="img-circle elevation-2" alt="AI">
            </div>
            <div class="info">
                <a href="{{ route('admin.dashboard') }}"
                    class="d-block">{{ auth()->guard('admin')->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                {{-- admin --}}
                @if (auth()->guard('admin')->user()->admin === 1)
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">
                                Admin
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview nav-header">
                            <li class="nav-item">
                                <a href="{{ route('admin.adminList') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Admin List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.createAdmin') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Create New Admin</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.customerList') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Customer</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif


                {{-- Ecommerce slider --}}
                @if (auth()->guard('admin')->user()->slider === 1)
                    <li class="nav-item">
                        <a href="{{ route('admin.allSlider') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>
                                Ecommerce Slider
                            </p>
                        </a>
                    </li>
                @endif

                {{-- category --}}
                @if (auth()->guard('admin')->user()->main_menu === 1)
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">
                                Main Menu
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview nav-header">
                            <li class="nav-item">
                                <a href="{{ route('admin.category') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.subcategory') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Subcategory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.childcategory') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Childcategory</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- product --}}
                @if (auth()->guard('admin')->user()->product === 1)
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">
                                Product
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview nav-header">
                            <li class="nav-item">
                                <a href="{{ route('admin.index') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>All Products</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.createProduct') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Creater Products</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.sizes.index') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Sizes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.colors.index') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Colors</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.brands.index') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Brand</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.showShippingCharge') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Shipping Charge</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- coupon --}}
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.coupons.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>
                            Coupon
                        </p>
                    </a>
                </li> --}}

                {{-- order --}}
                @if (auth()->guard('admin')->user()->order_history === 1)
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">
                                Order
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview nav-header">
                            <li class="nav-item">
                                <a href="{{ route('admin.cancelOrder') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Canceled Order</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.pendingOrder') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Pending Order</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.confirmOrder') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Confirm Order</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.shippedOrder') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Shipped Order</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- about --}}
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.counter') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p class="text">Counter</p>
                    </a>
                </li> --}}
                @if (auth()->guard('admin')->user()->company_info === 1)
                    <li class="nav-item">
                        <a href="{{ route('admin.abouts.index') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">About Us</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.services.index') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">Our Services</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.testimonials.index') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">Testimonials</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.clients.index') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">Our Clients</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.galleries.index') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">Gallery</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i></i>
                            <p class="text">
                                Blog
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview nav-header">
                            <li class="nav-item">
                                <a href="{{ route('admin.blogs.index') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i></i>
                                    <p>Blog List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.blogs.create') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i></i>
                                    <p>Create New Blog</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.comments') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i></i>
                                    <p>Blog Comments</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.blog-tags.index') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i></i>
                                    <p>Create Blog Tag</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.blog-categories.index') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i></i>
                                    <p>Create Blog Category</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.showContact') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">Contact</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.counter') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">Counter</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.distributors.index') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">Distributor</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.allCompanySlider') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">Company Slider</p>
                        </a>
                    </li>

                    {{-- company info --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p class="text">
                                Company Info
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview nav-header">
                            <li class="nav-item">
                                <a href="{{ route('admin.showCompanyInfo') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Company Information</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.pageList') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Pages</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
