<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartProductController;
use App\Http\Controllers\ProductPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", [HomeController::class, "index"]) -> name("home");

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get("/products", [ProductsController::class, "index"]) -> name("products");

Route::get('/filtered-products', [ProductsController::class, 'filteredProducts']) -> name("filter");

Route::get("/productpage/{title}", [ProductPageController::class, "index"]) -> name("productpage");

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/success', function () {
    return view('success');
})->name('success');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/check', [LoginController::class, 'check'])->name('check');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/cart', [CartProductController::class, 'index'])->name('cart');

Route::post('/cart', [CartProductController::class, 'store'])->name('cart');

Route::get('/search', [SearchController::class, 'search'])->name('search');
