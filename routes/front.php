<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::prefix('front')->as('front.')->group(function () {
  Route::get('/index', [FrontController::class, 'index'])->name('index');
});
