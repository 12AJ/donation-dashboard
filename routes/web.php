<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use views\login;

use App\Http\Controllers\FirebaseController;
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

// Route::get('/dashboard', [FirebaseController::class, 'index']);
// Route::get('/loginsuccess', [FirebaseController::class, 'adminlogin']);

// Route::get( '/', [LoginController::class , 'index']);
// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get( '/', [FirebaseController::class , 'index1']);
Route::post( '/', [FirebaseController::class , 'checklogin']);
// Route::get( '/login',function () {
//     return redirect('/loginsuccess');
// });
// Route::get('/login', function () {
//     return view('login');
// });


