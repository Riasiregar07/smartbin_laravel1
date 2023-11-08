<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::controller(AuthController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/login', 'index');
    Route::post('/login', 'login')->name('login');
    // Tambah kan route untuk AuthController disini
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/dashboard', 'index')->name('dashboard');
    // Tambah kan route untuk AdminController disini
});

Route::controller(UserController::class)->group(function(){
    Route::get('/home', 'index')->name('home');
    // Tambah kan route untuk UserController disini
});