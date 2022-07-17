<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\Auth\AdminForgotPasswordController;
use App\Http\Controllers\Backend\Auth\AdminLoginController;
use App\Http\Controllers\Backend\Auth\AdminRegistrationController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\BlogTagController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\ColorController;
use App\Http\Controllers\Backend\CompanyInfoController;
use App\Http\Controllers\Backend\CompanySliderController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DistributorController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\GeneralController;
use App\Http\Controllers\Backend\MainMenu\CategoryController;
use App\Http\Controllers\Backend\MainMenu\ChildcategoryController;
use App\Http\Controllers\Backend\MainMenu\SubcategoryController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\ShippingChargeController;
use App\Http\Controllers\Backend\SizeController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Common\BlogCommentController;
use App\Http\Controllers\Common\ContactController;
use App\Http\Controllers\Common\CounterController;
use App\Http\Controllers\Common\OrderController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\WishlistController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
 Route::get('/cc', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>All Config cleared</h1>';
});
Route::get('/', function () {
    return redirect(app()->getLocale());
});
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    // App::setLocale(app()->getLocale());
    Route::controller(FrontendController::class)->group(function () {
        Route::get('/', 'companyHome')->name('companyHome');
        Route::get('/page/{slug}', 'page')->name('page');
        Route::get('/about-us', 'companyAbout')->name('companyAbout');
        Route::get('/our-services', 'companyService')->name('companyService');
        Route::get('/our-service-details/{id}', 'companyServiceDetails')->name('companyServiceDetails');
        Route::get('/gallery', 'gallery')->name('gallery');
        Route::get('/our-blogs', 'companyBlog')->name('companyBlog');
        Route::get('/our-blog-details/{id}', 'companyBlogDetails')->name('companyBlogDetails');
        Route::get('/category-blog/{id}', 'categoryBlog')->name('categoryBlog');
        Route::get('/tag-blog/{id}', 'tagBlog')->name('tagBlog');
        Route::post('/store-comments', 'companyBlogCommentStore')->name('companyBlogCommentStore');
        Route::get('/distributors', 'companyDistributor')->name('companyDistributor');
        Route::get('/all-distributors/{type}', 'companyAllDistributors')->name('companyAllDistributors');
        Route::get('/contact', 'contact')->name('contact');
        Route::post('/store-contact', 'storeContact')->name('storeContact');
    });

    Route::controller(CartController::class)->prefix('/shop')->as('shop.')->group(function () {
        //cart
        Route::get('/cart', 'cart')->name('cart');
        Route::post('/update-cart', 'updateCart')->name('updateCart');
        Route::get('/remove-from-cart/{rowId}', 'removeFromCart')->name('removeFromCart');
        Route::get('/destroy-cart', 'destroyCart')->name('destroyCart');
    });

    Route::controller(ShopController::class)->prefix('/shop')->as('shop.')->group(function () {
        Route::get('/', 'shop')->name('shop');
        Route::get('/f/{category}/{sub?}/{child?}', 'categoryProduct')->name('categoryProduct');
        Route::get('/products/{product}', 'productDetails')->name('productDetails');
        Route::get('/search/', 'search')->name('search');
    });

    Route::middleware('auth')->prefix('/shop')->as('shop.')->group(function () {
        //user dashboard
        Route::get('/user/dashboard', [ShopController::class, 'customerDashboard'])->name('customer.dashboard');

        //wishlist
        Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
        // Route::post('/add-to-wishlist', [WishlistController::class, 'addToWishlist']);
        Route::get('/remove-from-wishlist/{id}', [WishlistController::class, 'removeFromWishlist'])->name('removeFromWishlist');

        //user profile
        Route::get('/user-profile', [ProfileController::class, 'showProfile'])->name('showProfile');
        Route::post('/store-user-profile/{id}', [ProfileController::class, 'storeProfile'])->name('storeProfile');

        //checkout
        Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');

        

        //place order
        Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('placeOrder');
        Route::get('/order-history', [OrderController::class, 'customerOrderHistory'])->name('orderHistory');
        Route::post('/cancel-order/{id}', [OrderController::class, 'customerCancelOrder'])->name('cancelOrder');
        Route::get('/customer-invoice/{id}', [OrderController::class, 'customerInvoice'])->name('invoice');
        Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');

    });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
});

Route::prefix('/shop')->as('shop.')->group(function () {
    //adding shipping charge by ajax request
    Route::post('/add-to-cart', [CartController::class, 'addToCart']);
    Route::post('/add-to-wishlist', [WishlistController::class, 'addToWishlist']);
    Route::post('/add-shipping-charge', [CartController::class, 'addshippingCharge']);
});

Route::middleware('auth')->prefix('/shop')->as('shop.')->group(function () {
});
require __DIR__ . '/auth.php';
















//backend
Route::prefix('/admin')->name('admin.')->middleware('guest:admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/store-login', [AdminLoginController::class, 'storeLogin'])->name('storeLogin');

    //forgot password
    Route::get('/q/admin/forgot-password', [AdminForgotPasswordController::class, 'create'])->name('forgotPassword');
    Route::post('/q/admin/forgot-password', [AdminForgotPasswordController::class, 'store'])->name('storeForgotPassword');
});

Route::prefix('/admin')->as('admin.')->middleware('auth:admin')->group(function () {
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    //admin management
    Route::controller(AdminRegistrationController::class)->middleware('admin')->group(function () {
        Route::get('/admin-list', 'adminList')->name('adminList');
        Route::get('/create-admin', 'createAdmin')->name('createAdmin');
        Route::post('/store-admin', 'storeAdmin')->name('storeAdmin');
        Route::get('/edit-admin/{admin}', 'editAdmin')->name('editAdmin');
        Route::post('/update-admin/{admin}', 'updateAdmin')->name('updateAdmin');
        Route::post('/admin/active-admin/{admin}', 'activeAdmin')->name('activeAdmin');
        Route::post('/admin/inactive-admin/{admin}', 'inactiveAdmin')->name('inactiveAdmin');
        Route::delete('/delete-admin/{admin}', 'deleteAdmin')->name('deleteAdmin');
        //customer
        Route::get('/customer-list', 'customerList')->name('customerList');
    });

    //ecommerce slider
    Route::controller(SliderController::class)->middleware('slider')->group(function () {
        Route::get('/slider', 'allSlider')->name('allSlider');
        Route::get('/create-slider', 'createSlider')->name('createSlider');
        Route::post('/store-slider', 'storeSlider')->name('storeSlider');
        Route::get('/edit-slider/{slider}', 'editSlider')->name('editSlider');
        Route::put('/update-slider/{slider}', 'updateSlider')->name('updateSlider');
        Route::delete('/delete-slider/{slider}', 'deleteSlider')->name('deleteSlider');
    });

    //main menu
    Route::middleware('main_menu')->group(function () {
        //category
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/category', 'category')->name('category');
            Route::get('/create-category', 'createCategory')->name('createCategory');
            Route::post('/store-category', 'storeCategory')->name('storeCategory');
            Route::get('/edit-category/{id}', 'editCategory')->name('editCategory');
            Route::patch('/update-category/{id}', 'updateCategory')->name('updateCategory');
            Route::post('/active-category/{id}', 'activeCategory')->name('activeCategory');
            Route::post('/inactive-category/{id}', 'inactiveCategory')->name('inactiveCategory');
        });

        //subcategory
        Route::controller(SubcategoryController::class)->group(function () {
            Route::get('/subcategory', 'subcategory')->name('subcategory');
            Route::get('/create-subcategory', 'createSubcategory')->name('createSubcategory');
            Route::post('/store-subcategory', 'storeSubcategory')->name('storeSubcategory');
            Route::get('/edit-subcategory/{id}', 'editSubcategory')->name('editSubcategory');
            Route::patch('/update-subcategory/{id}', 'updateSubcategory')->name('updateSubcategory');
            Route::post('/active-subcategory/{id}', 'activeSubcategory')->name('activeSubcategory');
            Route::post('/inactive-subcategory/{id}', 'inactiveSubcategory')->name('inactiveSubcategory');
        });

        //childcategory
        Route::controller(ChildcategoryController::class)->group(function () {
            Route::get('/childcategory', 'childcategory')->name('childcategory');
            Route::get('/create-childcategory', 'createChildcategory')->name('createChildcategory');
            Route::post('/store-childcategory', 'storeChildcategory')->name('storeChildcategory');
            Route::get('/edit-childcategory/{id}', 'editChildcategory')->name('editChildcategory');
            Route::patch('/update-childcategory/{id}', 'updateChildcategory')->name('updateChildcategory');
            Route::post('/active-childcategory/{id}', 'activeChildcategory')->name('activeChildcategory');
            Route::post('/inactive-childcategory/{id}', 'inactiveChildcategory')->name('inactiveChildcategory');
            Route::delete('/delete-childcategory/{id}', 'deleteChildcategory')->name('deleteChildcategory');
        });
    });
    //product, color, size, brand, product-images, shipping-charge route
    Route::middleware('product')->group(function () {
        //product
        Route::controller(ProductController::class)->group(function () {
            Route::get('/products', 'index')->name('index');
            Route::get('/create-product', 'createProduct')->name('createProduct');
            Route::post('/store-product', 'storeProduct')->name('storeProduct');
            Route::get('/edit-product/{id}', 'editProduct')->name('editProduct');
            Route::patch('/update-product/{id}', 'updateProduct')->name('updateProduct');
            Route::post('/active-product/{id}', 'activeProduct')->name('activeProduct');
            Route::post('/inactive-product/{id}', 'inactiveProduct')->name('inactiveProduct');
            Route::get('/edit-product-image/{id}', 'editProductImage')->name('editProductImage');
            Route::put('/update-product-image', 'updateProductImage')->name('updateProductImage');
            Route::delete('/delete-product/{id}', 'deleteProduct')->name('deleteProduct');
        });

        //size and color and brand
        Route::resource('/sizes', SizeController::class)->except(['show']);
        Route::resource('/colors', ColorController::class)->except(['show']);
        Route::resource('/brands', BrandController::class)->except(['show']);

        //shipping Charge
        Route::controller(ShippingChargeController::class)->group(function () {
            Route::get('/shipping-charge', 'showShippingCharge')->name('showShippingCharge');
            Route::post('/store-shipping-charge', 'storeShippingCharge')->name('storeShippingCharge');
        });

        // coupon
        // Route::resource('/coupons', CouponController::class)->except(['show', 'edit', 'update']);
    });
    //order
    Route::controller(OrderController::class)->middleware('order_history')->group(function () {
        Route::get('/cancel-order', 'cancelOrder')->name('cancelOrder');
        Route::get('/pending-order', 'pendingOrder')->name('pendingOrder');
        Route::post('/order-confirm-for-customer/{id}', 'orderConfirmForCustomer')->name('orderConfirmForCustomer');
        Route::get('/confirm-order', 'confirmOrder')->name('confirmOrder');
        Route::post('/order-shipped-for-customer/{id}', 'orderShippedForCustomer')->name('orderShippedForCustomer');
        Route::get('/shipped-order', 'shippedOrder')->name('shippedOrder');
        Route::get('/admin-invoice/{id}', 'invoice')->name('invoice');
    });

    // company details
    Route::middleware('company_info')->group(function () {
        Route::resource('/abouts', AboutController::class);
        Route::resource('/services', ServiceController::class);
        Route::resource('/galleries', GalleryController::class);

        Route::resource('/blogs', BlogController::class);
        Route::post('/blogs/set-front/{id}', [BlogController::class, 'showFront'])->name('blogs.showFront');
        Route::post('/blogs/remove-front/{id}', [BlogController::class, 'removeFront'])->name('blogs.removeFront');
        Route::resource('/blog-categories', BlogCategoryController::class);
        Route::resource('/blog-tags', BlogTagController::class);
        Route::resource('/distributors', DistributorController::class);
        Route::resource('/testimonials', TestimonialController::class);
        Route::resource('/clients', ClientController::class);

        //comments
        Route::get('/comments', [BlogCommentController::class, 'blogComments'])->name('comments');
        Route::put('/comments/approve/{comment}', [BlogCommentController::class, 'approveComments'])->name('comments.approve');

        //company slider
        Route::controller(CompanySliderController::class)->group(function () {
            Route::get('/company-slider', 'allSlider')->name('allCompanySlider');
            Route::get('/create-company-slider', 'createSlider')->name('createCompanySlider');
            Route::post('/store-company-slider', 'storeSlider')->name('storeCompanySlider');
            Route::get('/edit-company-slider/{slider}', 'editSlider')->name('editCompanySlider');
            Route::put('/update-company-slider/{slider}', 'updateSlider')->name('updateCompanySlider');
            Route::delete('/delete-company-slider/{slider}', 'deleteSlider')->name('deleteCompanySlider');
        });

        //counter
        Route::get('/counter', [CounterController::class, 'counter'])->name('counter');
        Route::post('/counter/store', [CounterController::class, 'storeCounter'])->name('storeCounter');

        //contact
        Route::get('/contact', [ContactController::class, 'showContact'])->name('showContact');
        Route::delete('/contact/{contact}', [ContactController::class, 'deleteContact'])->name('deleteContact');

        //company info
        Route::controller(CompanyInfoController::class)->group(function () {
            Route::get('/company-info', 'showCompanyInfo')->name('showCompanyInfo');
            Route::post('/store-company-info', 'storeCompanyInfo')->name('storeCompanyInfo');
        });
        //pages
        Route::controller(PageController::class)->group(function () {
            Route::get('/pages', 'pageList')->name('pageList');
            Route::get('/create-pages', 'pageCreate')->name('pageCreate');
            Route::post('/store-pages', 'pageStore')->name('pageStore');
            Route::get('/edit-pages/{page}', 'pageEdit')->name('pageEdit');
            Route::put('/update-pages/{page}', 'pageUpdate')->name('pageUpdate');
            Route::delete('/delete-pages/{page}', 'pageDelete')->name('pageDelete');
            Route::post('/active-pages/{page}', 'pageActive')->name('pageActive');
            Route::post('/inactive-pages/{page}', 'pageInactive')->name('pageInactive');
        });
    });
});
//ajax route
Route::get('/get-subcategory/{id}', [GeneralController::class, 'getSubcategory']);
Route::get('/get-childcategory/{category_id}/{subcategory_id}', [GeneralController::class, 'getChildcategory']);
