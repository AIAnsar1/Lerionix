<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\TestController;

;
use Illuminate\Support\Facades\Route;








Route::prefix('/')->group( function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
});



Route::get('test', [TestController::class, 'index']);