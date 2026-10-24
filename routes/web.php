<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, "home"]);
Route::get('/keranjang', [WebsiteController::class, "keranjang"]);
Route::get('/checkout', [WebsiteController::class, "checkout"]);
Route::get('/login', [WebsiteController::class, "login"]);
Route::get('/register', [WebsiteController::class, "register"]);