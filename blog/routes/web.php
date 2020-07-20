<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('admin.index');
})->name('dashboard');

Route::group(["prefix"=>"/categori"],function(){
	Route::get('/','CategoryController@index')->name('categori');
	Route::get('/create','CategoryController@create')->name('categoriCreate');
	Route::post('/create','CategoryController@store')->name('categoriInsert');
	Route::get('/hapus/{id}','CategoryController@destroy');
	Route::get('/edit/{id}','CategoryController@edit');
	Route::put('/update/{id}','CategoryController@update');
});


Route::group(["prefix"=>"/article"],function(){
	Route::get('/','ArticleController@index')->name('article');
	Route::get('/create','ArticleController@create')->name('articleCreate');
	Route::post('/create','ArticleController@store')->name('articleInsert');
	Route::get('/hapus/{id}','ArticleController@destroy');
	Route::get('/edit/{id}','ArticleController@edit');
});