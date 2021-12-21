<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\UserController;

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

Route::any('/logout',  [LoginController::class, 'logout'])->name('logout');
Route::get('/login',  [LoginController::class, 'index'])->name('login');
Route::post('/login',  [LoginController::class, 'login'])->name('login');
Route::get('/registro',  [RegisterController::class, 'index'])->name('register');
Route::post('/registro',  [RegisterController::class, 'register'])->name('register');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('minha-conta', [PerfilController::class, 'conta'])->name('conta');


Route::get('/', [SiteController::class, 'index'])->name('home')->middleware('auth');
Route::get('/layouts', [SiteController::class, 'layouts'])->name('layouts')->middleware('auth');
Route::get('/game', [SiteController::class, 'game'])->name('game')->middleware('auth');
Route::get('/plugins', [SiteController::class, 'plugins'])->name('plugins')->middleware('auth');
Route::get('/plugin-detail', [SiteController::class, 'pluginDetail'])->name('plugins.detail')->middleware('auth');

Route::get('layout', [LayoutsController::class, 'index'])->name('layout')->middleware('auth');
Route::post('layout-store', [LayoutsController::class, 'store'])->name('layout.store')->middleware('auth');

Route::get('perfil', [UserController::class, 'index'])->name('perfil')->middleware('auth');

Route::get('admin', [PainelController::class, 'index'])->name('admin.home');

Route::get('admin/layouts', [PainelController::class, 'layouts']);

Route::post('webhook', [NotifyController::class, 'webhook']);

Route::post('name-alt/{id}', [UserController::class, 'nameAlt'])->name('perfil.alt.name')->middleware('auth');
Route::post('password-alt/{id}', [UserController::class, 'password'])->name('perfil.alt.password')->middleware('auth');
Route::post('freelance/{id}', [UserController::class, 'freelancer'])->name('perfil.alt.freelancer')->middleware('auth');


Route::get('/vip', function () {

    return view('site.vip');
})->middleware('auth');

Route::get('/politicas', function () {
    return view('site.politicas');
});
Route::get('/curso', function () {
    return view('site.video');
});
// Route::get('/me', function () {
//     return view('site.me');
// });
