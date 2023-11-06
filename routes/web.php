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

Route::get('dosen', 'App\Http\Controllers\DosenController@index');

Route::get('show', 'App\Http\Controllers\DosenController@showBlog');
