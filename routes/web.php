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

Route::get('/add', 'HomeController@addproduct');
Route::get('/type', 'HomeController@type');
Route::get('type/create', 'HomeController@createtype');
Route::get('type/edit', 'HomeController@createtype');
Route::get('type/delete', 'HomeController@createtype');


Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    Route::get('products'          , ['as' => 'admin.products.index' , 'uses' => 'AdminproductsController@index']);
    Route::get('products/create'   , ['as' => 'admin.products.create' , 'uses' => 'AdminproductsController@create']);
    Route::get('products/{id}/edit', ['as' => 'admin.products.edit'   , 'uses' => 'AdminproductsController@edit']);
    Route::patch('products/{id}'   , ['as' => 'admin.products.update' , 'uses' => 'AdminproductsController@update']);
    Route::post('products'         , ['as' => 'admin.products.store'  , 'uses' => 'AdminproductsController@store']);
    Route::delete('products/{id}'  , ['as' => 'admin.products.destroy', 'uses' => 'AdminproductsController@destroy']);
    Route::get('categories'          , ['as' => 'admin.categories.index' , 'uses' => 'AdminCategoryController@index']);
    Route::get('categories/create'   , ['as' => 'admin.categories.create' , 'uses' => 'AdminCategoryController@create']);
    Route::get('categories/{id}/edit', ['as' => 'admin.categories.edit'   , 'uses' => 'AdminCategoryController@edit']);
    Route::patch('categories/{id}'   , ['as' => 'admin.categories.update' , 'uses' => 'AdminCategoryController@update']);
    Route::post('categories'         , ['as' => 'admin.categories.store'  , 'uses' => 'AdminCategoryController@store']);
    Route::delete('categories/{id}'  , ['as' => 'admin.categories.destroy', 'uses' => 'AdminCategoryController@destroy']);
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
<<<<<<< HEAD
//Route::post('/type', 'TypeController@addtype');

/*   範例
=======
//   範例
>>>>>>> origin/master
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');
Route::get('/tracy' ,function (){throw new \Exception('Tracy works!');});
*/

//後台
/*Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    Route::get('categories'          , ['as' => 'admin.categories.index' , 'uses' => 'AdminCategoryController@index']);
    Route::get('categories/create'   , ['as' => 'admin.categories.create' , 'uses' => 'AdminCategoryController@create']);
    Route::get('categories/{id}/edit', ['as' => 'admin.categories.edit'   , 'uses' => 'AdminCategoryController@edit']);
    Route::patch('categories/{id}'   , ['as' => 'admin.categories.update' , 'uses' => 'AdminCategoryController@update']);
    Route::post('categories'         , ['as' => 'admin.categories.store'  , 'uses' => 'AdminCategoryController@store']);
    Route::delete('categories/{id}'  , ['as' => 'admin.categories.destroy', 'uses' => 'AdminCategoryController@destroy']);
});
