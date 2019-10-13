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


Route::group(['prefix'=>'products'], function (){
   Route::get('/user','ProductController@userHome')->name('user.index') ;
   Route::get('/','ProductController@index')->name('products.index');
   Route::get('/create','ProductController@create')->name('products.create');
   Route::post('/create','ProductController@store')->name('products.store');
   Route::get('/{id}/edit','ProductController@edit')->name('products.edit');
   Route::post('/{id}/edit','ProductController@update')->name('products.update');
   Route::get('{id}/destroy','ProductController@destroy')->name('products.destroy');
   Route::get('/show/{id}','ProductController@show')->name('show.product');
});
//show san pham cho user
Route::get('/',function (){
   return view('webPage');
})->name('webPage');

//page quan ly cua admin
Route::get('/admin', function (){
   return view('admin.adminPage');
})->name('admin.page');

Route::get('/login', 'LoginController@showLogin')->name('login.index');
Route::post('/login', 'LoginController@login');
