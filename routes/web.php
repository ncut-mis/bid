<?php

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

// 認證路由...
Route::auth();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home.home');
});
Route::get('hello/{name?}', function($name = 'Everybody') {
    return 'Hello, '.$name;
});
Route::get('/shoppingcart', function () {
    return view('shoppingcart.shoppingcart');
});
Route::get('/Account', function () {
    return view('Account.account');
});
Route::get('product/{type}', function ($type) {
    return view('product.product');
});


Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');
Route::get('/tracy' ,function (){throw new \Exception('Tracy works!');});
