<?php
//BAGIAN DEPAN
Route::get('/', function () {
    return view('welcome');
});


//UNTUK LOGIN
Auth::routes();


//MULAI APLIKASI

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pegawai', 'PegawaiController@index');


// Jabatan
Route::get('/jabatan', 'JabatanController@index');
Route::get('/jabatan/create', 'JabatanController@create');
Route::post('/jabatan/save', 'JabatanController@save');
Route::get('/jabatan/edit/{id}', 'JabatanController@edit');
Route::put('/jabatan/update/{id}', 'JabatanController@update');
Route::get('/jabatan/hapus/{id}', 'JabatanController@delete');

// Golongan
Route::get('/golongan', 'GolonganController@index');
Route::get('/golongan/create', 'GolonganController@create');
Route::post('/golongan/save', 'GolonganController@save');
Route::get('/golongan/edit/{id}', 'GolonganController@edit');
Route::put('/golongan/update/{id}', 'GolonganController@update');
Route::get('/golongan/hapus/{id}', 'GolonganController@delete');
