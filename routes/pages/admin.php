<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Grouping dengan prefix dan name "admin."
Route::middleware(['auth', 'role:user'])->prefix('admin')->as('admin.')->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');


  include_once "books.php";
  include_once "users.php";
});
