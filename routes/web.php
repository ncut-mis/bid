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
Route::get('/shoppingcart', function () {
    return view('shoppingcart.shoppingcart');
});
Route::get('/Account', function () {
    return view('Account.account');
});
/*Route::get('product/{type}', function ($type) {
    return view('product.product');
});
*/
Route::get('product/product', function () {
    return view('product.product');
});
Route::get('product/3c', function () {
    return view('product.3c');
});
Route::get('product/electric equipment', function () {
    return view('product.electric equipment');
});
Route::get('notice/system', function () {
    return view('notice.system');
});
Route::get('notice/activity', function () {
    return view('notice.activity');
});


Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');
Route::get('/tracy' ,function (){throw new \Exception('Tracy works!');});
