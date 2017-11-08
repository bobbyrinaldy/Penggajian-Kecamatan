<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/jabatan', 'JabatanController@index');
Route::get('/golongan', 'GolonganController@index');
