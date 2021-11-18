<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/logout',  [LoginController::class, 'logout'])->name('logout');
Route::get('/login',  [LoginController::class, 'index'])->name('login');
Route::post('/login',  [LoginController::class, 'login'])->name('login');
Route::get('/registro',  [RegisterController::class, 'index'])->name('register');
Route::post('/registro',  [RegisterController::class, 'register'])->name('register');

Route::get('minha-conta', [PerfilController::class, 'conta'])->name('conta');


Route::get('/', function () {
    return view('home');
})->name('home')->middleware('auth');
