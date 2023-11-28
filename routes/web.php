<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SantriController;
use App\Models\Santri;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard')->middleware('auth');
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/santri', [SantriController::class, 'index'])->name('santri')->middleware('auth');
Route::get('/santri/{id}/edit', [SantriController::class, 'edit'])->name('santri.edit');
Route::put('/santri/{id}/edit', [SantriController::class, 'update'])->name('santri.store');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'doLogin'])->name('dologin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
