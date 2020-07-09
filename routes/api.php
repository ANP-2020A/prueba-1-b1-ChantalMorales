<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');


Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('customers', 'CustomerController@index');
    Route::get('customers/{customer}', 'CustomerController@show');
    Route::post('customers', 'CustomerController@store');
    Route::put('customers/{customer}', 'CustomerController@update');
    Route::delete('customers/{customer}', 'CustomerController@delete');
    Route::post('products', 'ProductController@store');
    Route::put('products/{product}', 'ProductController@update');
    Route::put('products/statusProduct/{product}', 'ProductController@delete');
 });
