<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->prefix('users')->as('users.')->group(function () {
  Route::get('/index', [UserController::class, 'index'])->name('index');
});
