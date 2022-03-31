<?php

use App\Http\Controllers\ItemsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/dashboard', 'admin.dashboard');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::resource('items', ItemsController::class);

Route::resource('order', OrderController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
