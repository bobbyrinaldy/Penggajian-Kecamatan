<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pegawai', 'PegawaiController@index');



Route::get('/jabatan', 'JabatanController@index');


Route::get('/jabatan/create', 'JabatanController@create');
Route::post('/jabatan/save', 'JabatanController@save');



Route::get('/golongan', 'GolonganController@index');
