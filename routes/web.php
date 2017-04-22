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
/*Route::get('product/{type}', function ($type) {
    return view('product.product');
});
*/
Route::get('product/product','HomeController@Product');

Route::get('product/{id}', ['as' => 'product.index' , 'uses' => 'Productcontroller@index']);

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

/*   範例*/
//Route::resource('task','TaskController');
Route::resource('tasks','TaskController');
/*Route::get('/task', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');
//Route::get('/tracy' ,function (){throw new \Exception('Tracy works!');});
