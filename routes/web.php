<?php

use App\Http\Controllers\{MainController, OrderController};
use App\Http\Controllers\TestController;

use Illuminate\Support\Facades\Route;








Route::prefix('/')->group( function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
    Route::post('/order', [MainController::class, 'order'])->name('order');
});



