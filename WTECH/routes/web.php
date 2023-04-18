<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get('/home', function () {
    return view('homepage');
})->name('home');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/success', function () {
    return view('success');
})->name('success');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/check', [LoginController::class, 'check'])->name('check');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');