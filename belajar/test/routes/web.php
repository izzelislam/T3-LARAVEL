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
|s
*/

Route::view("/","Home.index" );
Route::get("/home/nama/{nama}","HomeController@index");
route::view("rute/name","Menu.index")->name("nama");

Route::group(["prefix"=>"/menu"], function(){
	Route::view("/article","Menu.Article");
	Route::view("/news","Menu.News");
	Route::get("/rtn","MenuController@index");
});
