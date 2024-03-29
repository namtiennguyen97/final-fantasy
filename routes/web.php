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
    Route::get('/count','ProductController@count')->name('count.product');

});

Route::group(['prefix'=>'blogs'], function (){
   Route::get('/','BlogController@index')->name('blogs.index');
   Route::get('/create','BlogController@create')->name('blogs.create');
   Route::post('/create','BlogController@store')->name('blogs.store');
   Route::get('/{id}/edit','BlogController@edit')->name('blogs.edit');
   Route::post('/{id}/edit','BlogController@update')->name('blogs.update');
   Route::get('/{id}/destroy','BlogController@destroy')->name('blogs.destroy');
   Route::get('/show/{id}','BlogController@show')->name('blogs.show');

//    Route::get('/page', 'BlogController@userBlog');

});




//show san pham cho user
Route::get('/','BlogController@userBlog')->name('webPage');

//page quan ly cua admin
Route::get('/admin', 'CompactController@getCompact')->name('admin.page');

Route::get('/login', 'LoginController@showLogin')->name('login.index');
Route::post('/login', 'LoginController@login');


//package
Route::group(['prefix'=>'packages'],function (){
   Route::get('/','PackageController@index')->name('packages.index');
   Route::get('/create','PackageController@create')->name('packages.create');
   Route::post('/create','PackageController@store')->name('packages.store');
   Route::get('/{id}/edit','PackageController@edit')->name('packages.edit');
   Route::post('/{id}/edit','PackageController@update')->name('packages.update');
    Route::post('/{id}/coppy','PackageController@addCoppy')->name('packages.coppy');
   Route::get('/{id}/destroy','PackageController@destroy')->name('packages.destroy');
   Route::get('/show/{id}','PackageController@show')->name('packages.show');


});

Route::group(['prefix'=>'announment'], function (){
   Route::get('/','AnnounementController@index')->name('announment.index');
   Route::get('/create','AnnounementController@create')->name('announment.create');
   Route::post('/create','AnnounementController@store')->name('announment.store');
   Route::get('/{id}/edit','AnnounementController@edit')->name('announment.edit');
   Route::post('/{id}/edit','AnnounementController@update')->name('announment.update');
   Route::get('/{id}/destroy','AnnounementController@destroy')->name('announment.destroy');
});





