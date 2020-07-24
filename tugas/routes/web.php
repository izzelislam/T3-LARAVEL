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

Route::get('/Anggota','AnggotaController@index');
Route::get('/Anggota/create','AnggotaController@create');
Route::post('/Anggota/store','AnggotaController@store');
Route::get('/Anggota/edit/{id}','AnggotaController@edit');
Route::put('/Anggota/update/{id}','AnggotaController@update');
Route::delete('/Anggota/delete/{id}','AnggotaController@delete');