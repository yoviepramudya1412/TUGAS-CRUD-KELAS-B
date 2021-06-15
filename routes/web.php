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
Route::get('/calonsiswa','CalonsiswaController@index')->name('calonsiswa.index-calon');
Route::get('/calonsiswa/create','CalonsiswaController@create')->name('calonsiswa.create');
Route::post('/calonsiswa','CalonsiswaController@store')->name('calonsiswa.store');
//untuk hapus calon siswa 
Route::get('/hapussiswa/{calonsiswa}','CalonsiswaController@delete')->name('calonsiswa.delete');
//untuk menampilkan data berdasarkan id di view form edit
Route::get('/calonsiswa/{calonsiswa}/edit',"CalonsiswaController@viewform");

//untuk proses edit 
Route::patch('/calonsiswa/{calonsiswa}','CalonsiswaController@prosesEdit');

//routing tampil 1 data dengan parameter dan alias
Route::get('/calonsiswa/{calonsiswa}','CalonsiswaController@show')->name('calonsiswa.detail');





