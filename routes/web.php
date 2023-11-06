<?php

use App\Http\Controllers\Admin\CRM\CustomerController;
use App\Http\Controllers\Admin\CRM\MainController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\Sales\BrandsController;
use App\Http\Controllers\Admin\Sales\CategoriesController;
use App\Http\Controllers\Admin\Sales\ProductsController;
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

Route::prefix('admin')->group(function () {
    Route::get('masterview',[ProjectController::class,'masterview'])->name('admin.masterview');
    Route::prefix('project')->group(function () {
        Route::get('/dashboard-project',[ProjectController::class,'projectDashboard'])->name('project.dashboard');
        Route::get('/project-list',[ProjectController::class,'projectList'])->name('project.projectList');
        Route::get('/scrum-board',[ProjectController::class,'scrumBoard'])->name('project.scrumBoard');
        Route::get('/issue',[ProjectController::class,'issue'])->name('project.issue');
    });

    Route::prefix('crm')->group(function () {
        Route::get('/calendar',[MainController::class,'calendar'])->name('crm.calendar');
        Route::resource('customer', CustomerController::class);
    });
    

    Route::prefix('sales')->group(function () {
        Route::resource('category', CategoriesController::class);
        Route::get('/categories/trash',[CategoriesController::class,'trash'])->name('categories.trashIndex');
        Route::get('/categories/restore/{id}',[CategoriesController::class,'restore'])->name('categories.restore');
        Route::delete('/categories/{id}/forceDelete',[CategoriesController::class,'forceDelete'])->name('categories.forceDelete');

        //
        Route::resource('products', ProductsController::class);

        //
        Route::resource('brands', BrandsController::class);
        Route::get('brands/trash',[BrandsController::class,'trash'])->name('brands.trashIndex');
        Route::get('brands/restore',[BrandsController::class,'restore'])->name('brands.restore');
        Route::get('brands/forceDelete',[BrandsController::class,'forceDelete'])->name('brands.forceDelete');
        
    });
});