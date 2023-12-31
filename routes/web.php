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
    return view('welcome');
});

Route::get('pertemuan1', function () {
	return view('pt1');
});
Route::get('pertemuan2', function () {
	return view('pt2');
});
Route::get('pertemuan3', function () {
	return view('pt3');
});
Route::get('linktree', function () {
	return view('linktree');
});
Route::get('pertemuan4', function () {
	return view('pt4');
});
Route::get('pertemuan5', function () {
	return view('pt5');
});
Route::get('pertemuan6', function () {
	return view('pt6');
});
Route::get('landing', function () {
	return view('ets');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('show', 'App\Http\Controllers\DosenController@showBlog');

Route::get('/dosen/{name}', 'App\Http\Controllers\DosenController@showName');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route CRUD NilaiKuliah
Route::get('/nilai','App\Http\Controllers\NilaiController@index');
Route::get('/nilai/tambahnilai','App\Http\Controllers\NilaiController@tambahNilai');
Route::post('/nilai/store','App\Http\Controllers\NilaiController@store');

//route CRUD Kopi
Route::get('/kopi','App\Http\Controllers\KopiController@index');
Route::post('/kopi/update','App\Http\Controllers\KopiController@update');
Route::get('/kopi/edit/{id}','App\Http\Controllers\KopiController@edit');
Route::get('/kopi/hapus/{id}','App\Http\Controllers\KopiController@hapus');
Route::get('/kopi/view/{id}','App\Http\Controllers\KopiController@view');

//route CRUD Kategori
Route::get('/kategori','App\Http\Controllers\KategoriController@index');
Route::get('/hasil','App\Http\Controllers\KategoriController@hasil');
