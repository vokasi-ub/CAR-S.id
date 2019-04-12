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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'CategoryController@index');

Route::get('/edit/edit/{id_pesanan}','CategoryController@edit');

Route::post('/datakategori/update','CategoryController@update');

Route::get('/hapus/destroy/{id_pesanan}','CategoryController@destroy');

Route::get('searchpesanan', 'CategoryController@search');

Route::get('tambah','CategoryController@create');

Route::post('/pesanan/tambah','CategoryController@pesanan');



Route::get('/merk', 'MerkController@index');

Route::get('/edit/merk/{id_merek}','MerkController@edit');

Route::post('/merk/update','MerkController@update');

Route::get('tambahmerk','MerkController@create');

Route::post('/merk/tambah','MerkController@merk');

Route::get('/hapus/merk/{id_merek}','MerkController@destroy');

Route::get('searchmerk', 'MerkController@search');



Route::get('mobil', 'MobilController@index');

Route::get('/edit/mobil/{id_mobil}','MobilController@edit');

Route::post('/mobil/update','MobilController@update');

Route::get('tambahmobil','MobilController@create');

Route::post('/mobil/tambah','MobilController@mobil');

Route::get('/hapus/mobil/{id_mobil}','MobilController@destroy');

Route::get('searchmobil', 'MobilController@search');



Route::get('penyewaan', 'PenyewaanController@index');

Route::get('/edit/penyewa/{id_penyewaan}','PenyewaanController@edit');

Route::post('/penyewa/update','PenyewaanController@update');

Route::get('tambahpenyewa','PenyewaanController@create');

Route::post('/penyewa/tambah','PenyewaanController@penyewa');

Route::get('/hapus/penyewa/{id_penyewaan}','PenyewaanController@destroy');

Route::get('searchpenyewa', 'PenyewaanController@search');


Route::get('form', 'LoginController@index');

Route::post('/login/post','LoginController@ploginpost');

Route::get('logout', 'LoginController@logout');

