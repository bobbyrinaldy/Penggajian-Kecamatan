<?php
//BAGIAN DEPAN
Route::get('/', function () {
    return view('welcome');
});


//UNTUK LOGIN
Auth::routes();

Route::group(['middleware' => 'auth'], function()
{
  //MULAI APLIKASI

  Route::get('/home', 'HomeController@index')->name('home');

  // Pegawai
  Route::get('/pegawai', 'PegawaiController@index');
  Route::get('/pegawai/search/{nip}', 'PegawaiController@search');
  Route::get('/pegawai/create', 'PegawaiController@create');
  Route::post('/pegawai/save', 'PegawaiController@save');
  Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
  Route::put('/pegawai/update/{id}', 'PegawaiController@update');
  Route::get('/pegawai/hapus/{id}', 'PegawaiController@delete');

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

  // Gaji
  Route::get('/gaji', 'GajiController@index');
  Route::get('/gaji/create', 'GajiController@create');
  Route::post('/gaji/save', 'GajiController@save');
  Route::get('/gaji/edit/{id}', 'GajiController@edit');
  Route::put('/gaji/update/{id}', 'GajiController@update');
  Route::get('/gaji/hapus/{id}', 'GajiController@delete');

  //Potongan
  Route::get('/potongan', 'PotonganController@index');
  Route::get('/potongan/create', 'PotonganController@create');
  Route::post('/potongan/save', 'PotonganController@save');
  Route::get('/potongan/edit/{id}', 'PotonganController@edit');
  Route::put('/potongan/update/{id}', 'PotonganController@update');
  Route::get('/potongan/print/{id}', 'PotonganController@print');
  Route::get('/potongan/hapus/{id}', 'PotonganController@delete');


  //Laporan
  Route::get('/laporan/slip_gaji', 'LaporanController@indexSlip');
});
