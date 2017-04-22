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

Route::get('/','HomeController@Welcome');
Route::get('/home','HomeController@Home');
Route::get('/shoppingcart','HomeController@Shoppingcart');
Route::get('/edit', 'HomeController@type');
Route::get('/Account', 'HomeController@Account');
Route::get('product/product','HomeController@Product');
Route::get('product/3c','HomeController@C');
Route::get('product/electric equipment','HomeController@Electricequipment');
Route::get('notice/system','HomeController@System');
Route::get('notice/activity','HomeController@Activity');

Route::group(['prefix' => 'account'], function() {
    Route::get('/', ['as' => 'account.dashboard.index', 'uses' => 'AccountDashboardController@index']);

    Route::get('users'          , ['as' => 'account.users.index' , 'uses' => 'AccountusersController@index']);
    Route::get('users/{id}/edit', ['as' => 'account.users.edit'   , 'uses' => 'AccountusersController@edit']);
    Route::patch('users/{id}'   , ['as' => 'account.users.update' , 'uses' => 'AccountusersController@update']);
    Route::delete('users/{id}'  , ['as' => 'account.users.destroy', 'uses' => 'AccountusersController@destroy']);
});


Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    Route::get('products'          , ['as' => 'admin.products.index' , 'uses' => 'AdminproductsController@index']);
    Route::get('products/create'   , ['as' => 'admin.products.create' , 'uses' => 'AdminproductsController@create']);
    Route::get('products/{id}/edit', ['as' => 'admin.products.edit'   , 'uses' => 'AdminproductsController@edit']);
    Route::patch('products/{id}'   , ['as' => 'admin.products.update' , 'uses' => 'AdminproductsController@update']);
    Route::post('products'         , ['as' => 'admin.products.store'  , 'uses' => 'AdminproductsController@store']);
    Route::delete('products/{id}'  , ['as' => 'admin.products.destroy', 'uses' => 'AdminproductsController@destroy']);
});