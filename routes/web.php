<?php

use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Admin\CRM\CustomerController;
use App\Http\Controllers\Admin\CRM\MainController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\Sales\BrandsController;
use App\Http\Controllers\Admin\Sales\CategoriesController;
use App\Http\Controllers\Admin\Sales\ColorsController;
use App\Http\Controllers\Admin\Sales\EachTypeProductsController;
use App\Http\Controllers\Admin\Sales\OrdersController;
use App\Http\Controllers\Admin\Sales\PaymentMethodsController;
use App\Http\Controllers\Admin\Sales\ProductsController;
use App\Http\Controllers\Fe\CartsController;
use App\Http\Controllers\Fe\CheckoutsController;
use App\Http\Controllers\Fe\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fe\CategoryController; 
use App\Http\Controllers\Fe\HomeController; 
use App\Http\Controllers\Fe\ProductController; 

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
 //Account
 Route::get('accounts',[AdminAccountController::class,'logonIndex'])->name('logon.index');
 Route::post('accounts',[AdminAccountController::class,'logon'])->name('logon');


Route::prefix('admin')->group(function () {
    //account
    Route::get('accounts',[AdminAccountController::class,'logout'])->name('admin.logout');
    Route::resource('account',AdminAccountController::class);
    Route::post('accounts',[AdminAccountController::class,'new'])->name('account.register');
    Route::put('accounts/{user}',[AdminAccountController::class,'updatePassword'])->name('accounts.updatePassword');


    Route::get('masterview',[ProjectController::class,'masterview'])->name('admin.masterview');
    // Du Am
    Route::prefix('project')->group(function () {
        Route::get('/dashboard-project',[ProjectController::class,'projectDashboard'])->name('project.dashboard');
        Route::get('/project-list',[ProjectController::class,'projectList'])->name('project.projectList');
        Route::get('/scrum-board',[ProjectController::class,'scrumBoard'])->name('project.scrumBoard');
        Route::get('/issue',[ProjectController::class,'issue'])->name('project.issue');
    });
    // Khach Hang
    Route::prefix('crm')->group(function () {
        Route::get('/calendar',[MainController::class,'calendar'])->name('crm.calendar');
        Route::resource('customer', CustomerController::class);
    });
    
    // Ban Hang
    Route::prefix('sales')->group(function () {
        // Màu Sắc
        Route::resource('colors',ColorsController::class);
        Route::get('/color/trash',[ColorsController::class,'trash'])->name('color.trashIndex');
        Route::get('/color/restore/{id}',[ColorsController::class,'restore'])->name('color.restore');
        Route::delete('/color/{id}/forceDelete',[ColorsController::class,'forceDelete'])->name('color.forceDelete');

        // Danh Mục
        Route::resource('category', CategoriesController::class);
        Route::get('/categories/trash',[CategoriesController::class,'trash'])->name('categories.trashIndex');
        Route::get('/categories/restore/{id}',[CategoriesController::class,'restore'])->name('categories.restore');
        Route::delete('/categories/{id}/forceDelete',[CategoriesController::class,'forceDelete'])->name('categories.forceDelete');
        //Loại Sản Phẩm

        Route::resource('products', ProductsController::class);
        Route::get('/product/trash',[ProductsController::class,'trash'])->name('products.trashIndex');
        Route::get('/product/restore/{id}',[ProductsController::class,'restore'])->name('products.restore');
        Route::delete('/product/{id}/forceDelete',[ProductsController::class,'forceDelete'])->name('products.forceDelete');
        Route::get('/product/detail/{id}',[ProductsController::class,'detail'])->name('products.detail');
        //Nhãn Hiệu
        Route::resource('brands', BrandsController::class);
        Route::get('/brand/trash',[BrandsController::class,'trash'])->name('brands.trashIndex');
        Route::get('/brand/restore/{id}',[BrandsController::class,'restore'])->name('brands.restore');
        Route::delete('/brand/forceDelete/{id}',[BrandsController::class,'forceDelete'])->name('brands.forceDelete');
        // Phương Thức Thanh Toán
        Route::resource('paymentMethods', PaymentMethodsController::class);
        Route::get('/paymentMethod/trash',[PaymentMethodsController::class,'trash'])->name('paymentMethods.trashIndex');
        Route::get('/paymentMethod/restore/{id}',[PaymentMethodsController::class,'restore'])->name('paymentMethods.restore');
        Route::delete('/paymentMethod/forceDelete/{id}',[PaymentMethodsController::class,'forceDelete'])->name('paymentMethods.forceDelete');
    });
});

Route::post('/orders',[OrdersController::class,'add'])->name('orders.add');


Route::post('user',[UserController::class,'login'])->name('login');
Route::get('user',[UserController::class,'logout'])->name('user.logout');

Route::get('/cart-index',[CartsController::class,'index'])->name('cart.index');
Route::post('/add-cart',[CartsController::class,'add'])->name('cart.add');
Route::get('/remove-cart/{id}',[CartsController::class,'remove'])->name('cart.remove');
// Route::post('/update-cart',[CartsController::class,'update'])->name('cart.update');

Route::prefix('website')->group(function(){
    Route::resource('user',UserController::class);
    Route::get('/trang-chu', [HomeController::class, 'index'])->name('home.index');
    Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('home.about');
    Route::get('/blogs', [HomeController::class, 'blog'])->name('home.blogs');
    Route::get('/blog-detail', [HomeController::class, 'blogDetail'])->name('home.blog-detail');
    Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
    Route::get('/tai-khoan-cua-toi', [HomeController::class, 'myAccount'])->name('home.myAccount');
    Route::get('/danh-sach-uoc', [HomeController::class, 'wishList'])->name('home.wishlist');
    Route::get('/gio-hang', [HomeController::class, 'cart'])->name('home.cart');
    Route::get('/thanh-toan',[HomeController::class,'checkout'])->name('home.checkout');
    
    Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('home.privacy-policy');
    Route::get('/terms-of-service', [HomeController::class, 'termsOfService'])->name('home.terms-of-service');

    Route::resource('fe-category', CategoryController::class);
    Route::resource('fe-product', ProductController::class);
    Route::get('/chi-tiet-san-pham/{slug}', [ProductController::class,'detail'])->name('product.detail');

    Route::get('/masterview',[Controller::class,'masterview'])->name('okok');

});