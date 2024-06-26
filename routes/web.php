<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Products
    Route::resource('products', ProductController::class);

    // Cashier
    Route::get('/cashier', [CashierController::class, 'index'])->name('cashier.index');
    Route::post('/cashier/checkout', [CashierController::class, 'checkout'])->name('cashier.checkout');

    // Reports
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
});


