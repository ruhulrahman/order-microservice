<?php
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth.memcached')->group(function () {
    // Route::get('/orders', [OrderController::class, 'index']);
    Route::apiResource('orders', OrderController::class);
});
