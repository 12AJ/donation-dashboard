<?php

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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', [FirebaseController::class, 'index']);

// Route::get( '/', [LoginController::class , 'index']);
// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get( '/', [LoginController::class , 'index']);
Route::post( '/', [LoginController::class , 'checklogin']);
Route::get( '/loginsuccess',function () {
    return redirect('/dashboard');
});
// Route::get('/login', function () {
//     return view('login');
// });


