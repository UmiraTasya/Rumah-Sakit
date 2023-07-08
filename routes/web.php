<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
    return view('auth.login');
});

Route::get('/beranda', [IndexController::class,'beranda']);
// Route::get('/about', [IndexController::class,'about']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/doctors', function () {
    return view('doctors');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/homeadmin', function () {
    return view('homeadmin');
});

Route::get('/addemails', function () {
    return view('addemails');
});

Route::get('/appointmentsadmin', function () {
    return view('appointmentsadmin');
});

Route::get('/add-doctors', function () {
    return view('add-doctors');
});

Route::get('/logout', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');
