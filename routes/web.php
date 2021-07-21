<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function (){
    Route::get('/', 'DashboardController@index')->name('/');

    //Categories
Route::get('category', 'CategoryController@index')->name('category');
Route::get('category/create', 'CategoryController@create')->name('category.create');
Route::post('category', 'CategoryController@store')->name('category.store');
Route::get('category/edit/{category}', 'CategoryController@edit')->name('category.edit');
Route::put('category', 'CategoryController@update')->name('category.update');
Route::delete('category', 'CategoryController@delete')->name('category.delete');

    //posts 
Route::get('post', 'PostController@index')->name('post');
Route::get('post/create', 'PostController@create')->name('post.create');
Route::post('post', 'PostController@store')->name('post.store');
Route::get('post/edit/{post}', 'PostController@edit')->name('post.edit');
Route::put('post', 'PostController@update')->name('post.update');
Route::delete('post', 'PostController@delete')->name('post.delete');

});



