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
    return view('welcome');
});

Route::get('/home', [IndexController::class,'home']);
// Route::get('/about', [IndexController::class,'about']);

Route::get('/about.blade.php', function () {
    return view('about');
});

Route::get('/doctors.blade.php', function () {
    return view('doctors');
});

Route::get('/contact.blade.php', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});