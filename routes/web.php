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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/trang-chu', 'HomeController@index')->name('home');
Route::get('/category/{title_sale}', 'HomeController@category')->name('category');
Route::get('/chi-tiet/{title_sale}', 'HomeController@detail')->name('detail');
Route::get('/getDetailAjax', 'HomeController@getDetailAjax')->name('getDetailAjax');
Route::get('/addCartAjax', 'OrderController@addCartAjax')->name('addCartAjax');
Route::get('/gio-hang', 'OrderController@cartTop')->name('cartTop');
Auth::routes();
Route::get('/addWishlistAjax', 'WishlistController@addWishlistAjax')->name('addWishlistAjax');
Route::get('/danh-sach-yeu-thich', 'WishlistController@getListWishList')->name('getListWishList');
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',[
        'as'=>'dashboard',
        'uses'=>'ProductController@getDashboard'
    ]);
    Route::group(['prefix'=>'product'],function(){
        Route::get('list',[
            'as'=>'listProduct',
            'uses'=>'ProductController@getProduct'
        ]);
        Route::get('add',[
            'as'=>'addProduct',
            'uses'=>'ProductController@getAddProduct'
        ]);
        Route::post('add',[
            'as'=>'add',
            'uses'=>'ProductController@postAddProduct'
        ]);
    });
    Route::group(['prefix'=>'category'],function(){
        Route::get('list',[
            'as'=>'listCategory',
            'uses'=>'CategoryController@getListCategory'
        ]);
        Route::get('add',[
            'as'=>'addCategory',
            'uses'=>'CategoryController@getAddCategory'
        ]);
        Route::post('add',[
            'as'=>'add',
            'uses'=>'CategoryController@postAddCategory'
        ]);
    });
});