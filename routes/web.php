<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;

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
//     return view("login");
// });

Route::view("/login", "login");
Route::view("/layout", "layout");
Route::view("/sign_up", "registration.sign_up");
Route::view('/sign_in', 'registration.sign_in');
Route::view('/forgot_password', 'registration.forgot_password');
Route::post('create_user','UserController@create_user');
Route::post('login','UserController@login');

Route::get('sign_out', 'UserController@sign_out');

    Route::view("/", "home");





