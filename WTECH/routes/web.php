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
use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\AddGameController;
use App\Http\Controllers\EditGameController;

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

Route::get("/products/{platform}", [ProductsController::class, "platform"]) -> name("product-platform");

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

Route::delete('/cart/{id}', [CartProductController::class, 'destroy'])->name('cart.destroy');

// odkazy ku ktorym pristup ma len admin
Route::middleware(['auth', 'admin'])->namespace('App\Http\Controllers\AdminProductsController')->group(function () {
    Route::get("/adminproducts", [AdminProductsController::class, "index"]) -> name("adminproducts");

    Route::get("/adminproducts", [AdminProductsController::class, "filterProducts"]) -> name("adminproducts-filter");

    Route::delete("/adminproducts/{id}", [AdminProductsController::class, "deleteProduct"]) -> name("admin-delete");

    Route::get("/addgame", [AddGameController::class, "index"]) -> name("admin-add");

    Route::post("/addgame", [AddGameController::class, "add"]) -> name("admin-save");

    Route::get("/editgame/{id}", [EditGameController::class, "index"]) -> name("admin-edit");

    Route::post("/editgame/{id}", [EditGameController::class, "edit"]) -> name("admin-edit-save");
}

