<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('barang','BarangController@data_barang');
Route::get('input_barang','BarangController@input_barang');
Route::post('simpan_barang','BarangController@simpan_barang');
Route::get('update_barang/{id}','BarangController@update_barang');
Route::post('ubah_barang','BarangController@ubah_barang');
Route::get('delete_barang/{id}','BarangController@delete_barang');
Route::get('stok_barang','BarangController@stok_barang');
Route::get('input_stok','BarangController@input_stok');
Route::post('simpan_stok','BarangController@simpan_stok');
Route::get('user','UserController@data_user');