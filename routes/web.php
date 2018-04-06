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

Route::get('trangchu',[
    'as' => 'trang_chu',
    'uses'=>'PageController@getIndex'
]);
Route::get('register',[
    'as'=>'dang_ki',
    'uses' => 'PageController@getRegister'
]);
Route::post('register',[
    'as'=>'dang_ki',
    'uses'=>'PageController@postRegister'
]);
Route::get('login',[
    'as'=>'dang_nhap',
    'uses' => 'PageController@getLogin'
]);
Route::post('login',[
    'as'=>'dang_nhap',
    'uses'=>'PageController@postLogin'
]);
Route::get('logout',[
    'as'=>'dangxuat',
    'uses' => 'PageController@getLogout'
]);
Route::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getSearch'
]);
Route::get('chi-tiet-san-pham{id}',[
    'as'=>'detail',
    'uses'=>'PageController@getDetailFood'
]);
Route::get('typefood',[
    'as'=>'typefood',
    'uses'=>'PageController@getTypeFood'
]); 
Route::get('shoppingcart',[
    'as'=>'shoppingcart',
    'uses'=>'PageController@getShoppingCart'
]);