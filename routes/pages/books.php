<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->prefix('books')->as('books.')->group(function () {
  Route::get('/index', [BookController::class, 'index'])->name('index');
  Route::get('/create', [BookController::class, 'create'])->name('create');
  Route::post('/store', [BookController::class, 'store'])->name('store');

  Route::prefix('category')->as('category.')->group(function () {
    Route::get('/index', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
  });
});
