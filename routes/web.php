<?php

use App\Http\Controllers\login;
use App\Http\Controllers\welcome;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/login',[login::class,'halamanlogin'])->name('login');
Route::get('/welcome',[welcome::class,'homepage'])->name('home');
Route::post('/postlogin',[welcome::class,'postlogin'])->name('postlogin');