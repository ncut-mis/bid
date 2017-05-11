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


Route::group(['prefix' => 'bids'], function() {
    Route::get('/', ['as' => 'bids.dashboard.index', 'uses' => 'BidsController@index']);
});

Route::group(['prefix' => 'store'], function() {
    Route::get('/' , ['as' => 'storevalue.dashboard.index', 'uses' => 'StoreValueDashboardController@index']);
    
    Route::get('storevalue/{id}'             ,['as' => 'storevalue.index'    ,'uses' => 'StoreValueController@index']);
    Route::get('storevalue/{id}/create'      ,['as' => 'storevalue.create'   ,'uses' => 'StoreValueController@create']);
     Route::patch('storevalue/{id}/create'   , ['as' => 'storevalue.create' , 'uses' => 'StoreValueController@create']);
    Route::post('storevalue/{id}'         , ['as' => 'storevalue.store'  , 'uses' => 'StoreValueController@store']);
    Route::patch('storevalue/{id}', ['as' => 'storevalue.store'  , 'uses' => 'StoreValueController@store']);
});

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
    Route::get('report',['as' => 'admin.report.index', 'uses' => 'AdminReportController@index']);
    Route::get('report/create',['as' => 'admin.report.create', 'uses' => 'AdminReportController@create']);


    Route::post('/user/icon-upload','AdminproductsController@iconUpload');

    Route::get('auctions'          , ['as' => 'admin.auctions.index' , 'uses' => 'AdminauctionsController@index']);
    Route::get('auctions/{id}/create'   , ['as' => 'admin.auctions.create' , 'uses' => 'AdminauctionsController@create']);
    Route::patch('auctions/{id}/create'   , ['as' => 'admin.auctions.create' , 'uses' => 'AdminauctionsController@create']);
    Route::get('auctions/{id}/edit', ['as' => 'admin.auctions.edit'   , 'uses' => 'AdminauctionsController@edit']);
    Route::patch('auctions/{id}'   , ['as' => 'admin.auctions.update' , 'uses' => 'AdminauctionsController@update']);
    Route::post('auctions/{id}', ['as' => 'admin.auctions.store'  , 'uses' => 'AdminauctionsController@store']);
    Route::patch('auctions/{id}', ['as' => 'admin.auctions.store'  , 'uses' => 'AdminauctionsController@store']);
    Route::delete('auctions/{id}'  , ['as' => 'admin.auctions.destroy', 'uses' => 'AdminauctionsController@destroy']);
});

Route::get('importExport', 'MaatwebsiteDemoController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');

