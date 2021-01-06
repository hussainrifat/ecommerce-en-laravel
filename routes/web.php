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
Route::post('create_user','UserController@createUser');
Route::post('login','UserController@login');

Route::post('reset_password','UserController@resetPassword');

Route::get('sign_out', 'UserController@signOut');

// Route::view("/", "home");
Route::get('data','productController@cartList' );

// Admin Dashboard
Route::view("/admin_dashboard", "admin.admin_dashboard");

// Admin Product Pages
Route::get("/admin_product", "ProductController@allProduct");
Route::get('add_product','ProductController@addProduct');
Route::post('add_new_product','ProductController@addNewProduct');
Route::get('edit_product/{id}','ProductController@editProduct');
Route::post('update_product/{id}','ProductController@updateProduct');


// Admin Category Pages
Route::view("/add_category", "admin.add_category");
Route::get('all_category','ProductController@allCategory');
Route::post('add_new_category','ProductController@addNewCategory');
Route::post('add_to_cart','ProductController@addToCart');
Route::post('remove_from_cart','ProductController@removeFromCart');


// Customer Dashboard
Route::get('/','CustomerController@viewCustomerHome');
Route::get('/product_view/{id}','CustomerController@showProductView');
Route::view('/checkout','customer.checkout');
Route::view('/payment','CustomerController@address');


Route::post('payment','CustomerController@payment');
Route::post('order_confirmation','CustomerController@order');







