<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Global\AboutController;
use App\Http\Controllers\Global\ContactController;
use App\Http\Controllers\Global\UserController;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Route;

// Frontend Route
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/products', [ProductController::class, 'products'])->name('product.all');
Route::get('/product/{slug}', [ProductController::class, 'productDetails'])->name('product.details');
Route::get('contact-us', [ContactController::class, 'contactUs'])->name('contact-us');
Route::get('about-us', [AboutController::class, 'aboutUs'])->name('about-us');
Route::get('/wishlist', [WishlistController::class, 'wishlists'])->name('wishlist.all');
Route::get('/cart', [CartController::class, 'carts'])->name('cart.all');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/order-complete', [CheckoutController::class, 'orderComplete'])->name('checkout.order-complete');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/login-submit/{type}', [UserController::class, 'submit'])->name('login.submit');
Route::post('/news-letter', [UserController::class, 'newsLetter'])->name('news-letter');

// User Route
// Route::prefix('dashboard')->group(function () {
//     Route::post('/profile', [EmployeeController::class, 'submitProfile'])->name('');
// });

// Admin Route
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::prefix('product')->group(function () {
        Route::get('/all', [AdminProductController::class, 'all'])->name('admin.product.all');
        Route::get('/create', [AdminProductController::class, 'create'])->name('admin.product.create');
        Route::get('/edit/{id}', [AdminProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('/store', [AdminProductController::class, 'store'])->name('admin.product.store');
        Route::post('/update', [AdminProductController::class, 'update'])->name('admin.product.update');
        Route::post('/delete', [AdminProductController::class, 'delete'])->name('admin.product.delete');
    });

    Route::prefix('category')->group(function () {
        Route::get('/all', [CategoryController::class, 'all'])->name('admin.category.all');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::post('/update', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::post('/delete', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });

    Route::prefix('sub-category')->group(function () {
        Route::get('/all', [SubCategoryController::class, 'all'])->name('admin.sub-category.all');
        Route::get('/create', [SubCategoryController::class, 'create'])->name('admin.sub-category.create');
        Route::get('/edit/{id}', [SubCategoryController::class, 'edit'])->name('admin.sub-category.edit');
        Route::post('/store', [SubCategoryController::class, 'store'])->name('admin.sub-category.store');
        Route::post('/update', [SubCategoryController::class, 'update'])->name('admin.sub-category.update');
        Route::post('/delete', [SubCategoryController::class, 'delete'])->name('admin.sub-category.delete');
    });

    Route::prefix('brand')->group(function () {
        Route::get('/all', [BrandController::class, 'all'])->name('admin.brand.all');
        Route::get('/create', [BrandController::class, 'create'])->name('admin.brand.create');
        Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('admin.brand.edit');
        Route::post('/store', [BrandController::class, 'store'])->name('admin.brand.store');
        Route::post('/update', [BrandController::class, 'update'])->name('admin.brand.update');
        Route::post('/delete', [BrandController::class, 'delete'])->name('admin.brand.delete');
    });

    Route::prefix('coupon')->group(function () {
        Route::get('/all', [CouponController::class, 'all'])->name('admin.coupon.all');
        Route::get('/create', [CouponController::class, 'create'])->name('admin.coupon.create');
        Route::get('/edit/{id}', [CouponController::class, 'edit'])->name('admin.coupon.edit');
        Route::post('/store', [CouponController::class, 'store'])->name('admin.coupon.store');
        Route::post('/update', [CouponController::class, 'update'])->name('admin.coupon.update');
        Route::post('/delete', [CouponController::class, 'delete'])->name('admin.coupon.delete');
    });

    Route::prefix('user')->group(function () {
        Route::get('/all', [UserController::class, 'all'])->name('admin.user.all');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
        Route::post('/update', [UserController::class, 'update'])->name('admin.user.update');
        Route::post('/delete', [UserController::class, 'delete'])->name('admin.user.delete');
    });

    Route::prefix('order')->group(function () {
        Route::get('/all', [OrderController::class, 'all'])->name('admin.order.all');
        // Route::get('/create', [OrderController::class, 'create'])->name('admin.order.create');
        Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('admin.order.edit');
        Route::post('/update', [OrderController::class, 'update'])->name('admin.order.update');
        // Route::post('/delete', [OrderController::class, 'delete'])->name('admin.order.delete');
    });

    Route::prefix('system')->group(function () {
        Route::get('/change-password', [SystemController::class, 'changePassword'])->name('admin.change.password');
        Route::post('/update-password', [SystemController::class, 'updatePassword'])->name('admin.update.password');
        Route::get('/change-email', [SystemController::class, 'changeEmail'])->name('admin.change.email');
        Route::post('/update-email', [SystemController::class, 'updateEmail'])->name('admin.update.email');
        Route::get('/logo-fav', [SystemController::class, 'changeLogo'])->name('admin.change.logo');
        Route::post('/update-logo-fav', [SystemController::class, 'updateLogo'])->name('admin.update.logo');
        Route::get('/system-details', [SystemController::class, 'changeSystemDetails'])->name('admin.change.system');
        Route::post('/update-system', [SystemController::class, 'updateSystem'])->name('admin.update.system');
    });
});