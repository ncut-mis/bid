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
Route::get('/Account', 'HomeController@Account');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    Route::get('products'          , ['as' => 'admin.products.index' , 'uses' => 'AdminproductsController@index']);
    Route::get('products/create'   , ['as' => 'admin.products.create' , 'uses' => 'AdminproductsController@create']);
    Route::get('products/{id}/edit', ['as' => 'admin.products.edit'   , 'uses' => 'AdminproductsController@edit']);
    Route::patch('products/{id}'   , ['as' => 'admin.products.update' , 'uses' => 'AdminproductsController@update']);
    Route::post('products'         , ['as' => 'admin.products.store'  , 'uses' => 'AdminproductsController@store']);
    Route::delete('products/{id}'  , ['as' => 'admin.products.destroy', 'uses' => 'AdminproductsController@destroy']);
    Route::post('/user/icon-upload','AdminproductsController@iconUpload');
});

/*Route::get('product/{type}', function ($type) {
    return view('product.product');
});
*/
/*
Route::get('product/product','HomeController@Product');

Route::get('product/{id}', ['as' => 'product.index' , 'uses' => 'Productcontroller@index']);

Route::get('product/3c','HomeController@C');
Route::get('product/electric equipment','HomeController@Electricequipment');
Route::get('notice/system','HomeController@System');
Route::get('notice/activity','HomeController@Activity');
Route::get('/tasks', 'TaskController@index');
Route::post('/add', 'ProductController@create');
//   範例
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');
Route::get('/tracy' ,function (){throw new \Exception('Tracy works!');});
*/