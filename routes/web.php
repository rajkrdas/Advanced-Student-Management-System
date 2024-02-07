<?php

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
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'showLoginForm']);

Route::get('/', [LoginController::class, 'showLoginForm'])->middleware('guest');

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/welcomeAdmin', function () {
    return view('welcomeAdmin');
});

Route::get('/welcomeStudent', function () {
    return view('welcomeStudent');
});

Route::get('/welcomeTeacher', function () {
    return view('welcomeTeacher');
});


Route::get('/studentRegistration', function () {
    return view('studentRegistration');
});


