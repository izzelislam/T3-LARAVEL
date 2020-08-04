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
Route::get('/Anggota/create','AnggotaController@create')->name('create');
Route::post('/Anggota/store','AnggotaController@store')->name('store');
Route::get('/Anggota/edit/{id}','AnggotaController@edit')->name('edit');
Route::put('/Anggota/update/{id}','AnggotaController@update')->name('update');
Route::delete('/Anggota/delete/{id}','AnggotaController@delete')->name('delete');

Route::get('/Buku','BukuController@index');
Route::get('/Buku/create','BukuController@create')->name('bukuCreate');
Route::post('/Buku/store','BukuController@store')->name('bukuStore');
Route::get('/Buku/edit/{id}','BukuController@edit');
Route::put('/Buku/update/{id}','BukuController@update');
Route::delete('/Buku/delete/{id}','BukuController@delete');

route::get('/',function(){
	return view('welcome');
});

Route::get('/Petugas','PetugasController@index');
Route::get('/Petugas/create','PetugasController@create')->name('petugasCreate');
Route::post('/Petugas/store','PetugasController@store')->name('petugasStore');
Route::get('/Petugas/edit/{id}','PetugasController@edit');
Route::put('/Petugas/update/{id}','PetugasController@update');
Route::delete('/Petugas/delete/{id}','PetugasController@delete');

Route::get('/Peminjaman','PeminjamanController@index');
Route::get('/Peminjaman/create','PeminjamanController@create');
Route::post('/Peminjaman/store','PeminjamanController@store');
Route::get('/Peminjaman/edit/{id}','PeminjamanController@edit');
Route::put('/Peminjaman/update/{id}','PeminjamanController@update');
Route::delete('/Peminjaman/delete/{id}','PeminjamanController@delete');

Route::get('/Pengembalian','PengembalianController@index');
Route::get('/Pengembalian/create','PengembalianController@create');
Route::post('/Pengembalian/store','PengembalianController@store');
Route::get('/Pengembalian/edit/{id}','PengembalianController@edit');
Route::put('/Pengembalian/update/{id}','PengembalianController@update');
Route::delete('/Pengembalian/delete/{id}','PengembalianController@delete');

Route::get('/login','AuthController@login');
Route::post('/login-proses','AuthController@loginProses');
Route::get('/daftar','AuthController@daftar');
Route::post('/daftar-proses','AuthController@daftarProses');
Route::get('/keluar','AuthController@keluar');