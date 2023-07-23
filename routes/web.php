<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\droitController;

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

Route::get('/', [UserController::class, 'index'])->name('home');

Route::post('/connexion', [UserController::class, 'store'])->name('connexion');

Route::get('/password_reset', [UserController::class, 'indexpassword_reset'])->name('indexpassword_reset');

Route::post('/password_reset', [UserController::class, 'resetPassword'])->name('password_reset');

Route::get('/user/create',[UserController::class,'inscription'])->name('inscription');

Route::post('/user/create',[UserController::class,'register'])->name('register');

Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');

Route::get('/Deconnecter',[UserController::class,'logout'])->name('Deconnecter');

Route::get('/find_mail',[UserController::class,'find_mail'])->name('find_mail');

Route::post('/find_mail',[UserController::class,'find_mail'])->name('find_mail');

Route::get('/verify_mail',[UserController::class,'verify_mail'])->name('verify_mail');

Route::post('/verify_mail',[UserController::class,'verify_mail'])->name('verify_mail');

Route::get('/user/attribution',[UserController::class,"attribution"]);

Route::post('/user/attribution',[droitController::class,"registerattribution"])->name("registerattribution");

Route::get('/site/search',[SiteController::class,'search'])->name('searche_site');
