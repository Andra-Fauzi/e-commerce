<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, "home"]);
Route::get('/keranjang', [WebsiteController::class, "keranjang"]);
Route::get('/checkout', [WebsiteController::class, "checkout"]);
Route::get('/login', [WebsiteController::class, "login"]);
Route::get('/register', [WebsiteController::class, "register"]);
Route::get("/produk/{id}", [WebsiteController::class, "produk"]);
Route::get("/produk_produk", [WebsiteController::class, "produk_produk"]);
Route::get("/katalog", [WebsiteController::class, "katalog"]);

Route::post('/login', [AuthController::class, "login"]);
Route::post('/register', [AuthController::class, "register"]);