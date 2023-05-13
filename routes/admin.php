<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\OrderNoteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

    // Ecommerce
    Route::get('order/terminal', [OrderController::class, 'terminal'])->name('order.terminal');

    Route::resource('order', OrderController::class);
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('supplier', SupplierController::class);

    Route::resource('order_note', OrderNoteController::class);
    Route::resource('order_item', OrderItemController::class);

    // User and Members
    Route::resource('role', RoleController::class);
    Route::resource('staff', StaffController::class);
    Route::resource('user', UserController::class);


});
