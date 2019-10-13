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


use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'products'], function (){
    Route::get('/search','ProductController@search')->name('products.search');
   Route::get('/user','ProductController@userHome')->name('user.index') ;
   Route::get('/','ProductController@index')->name('products.index');
   Route::get('/create','ProductController@create')->name('products.create');
   Route::post('/create','ProductController@store')->name('products.store');
   Route::get('/{id}/edit','ProductController@edit')->name('products.edit');
   Route::post('/{id}/edit','ProductController@update')->name('products.update');
   Route::get('{id}/destroy','ProductController@destroy')->name('products.destroy');
   Route::get('/show/{id}','ProductController@show')->name('show.product');
});

Route::group(['prefix'=>'blogs'], function (){
   Route::get('/','BlogController@index')->name('blogs.index');
   Route::get('/create','BlogController@create')->name('blogs.create');
   Route::post('/create','BlogController@store')->name('blogs.store');
   Route::get('/{id}/edit','BlogController@edit')->name('blogs.edit');
   Route::post('/{id}/edit','BlogController@update')->name('blogs.update');
   Route::get('/{id}/destroy','BlogController@destroy')->name('blogs.destroy');
//    Route::get('/page', 'BlogController@userBlog');

});

Route::get('/nn',function (){
   return view('user.blog');
});


//show san pham cho user
Route::get('/','BlogController@userBlog')->name('webPage');

//page quan ly cua admin
Route::get('/admin', function (){
   return view('admin.adminPage');
})->name('admin.page');

Route::get('/login', 'LoginController@showLogin')->name('login.index');
Route::post('/login', 'LoginController@login');