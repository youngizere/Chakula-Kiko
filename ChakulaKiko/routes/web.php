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

Route::get('/', function () {
    return view('frontend/home');
});

Route::get('/contact', function () {
    return view('frontend/contactus');
});

Route::get('/ourservices', function () {
    return view('frontend/ourservices');
});

Route::get('/products', function () {
    return view('frontend/products');
});

Route::get('/farmer/orders', function () {
    return view('adminend/examples/orders');
});

Route::get('/farmer/profile', function () {
    return view('adminend/examples/profile');
});

Route::get('/farmer/addproduct', function () {
    return view('adminend/examples/addproduct');
});
