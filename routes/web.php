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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/items', 'ItemController@store'); // menyimpan data
Route::get('/items', 'ItemController@index'); // menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id

*/
Route::get('/', function () {
    return view('layouts.welcome');
});
Route::get('/proyek', 'ProyekController@index');    //menampilkan isi data-data proyek
Route::get('/proyek/create','ProyekController@create'); //menampilkan halaman form
Route::post('/proyek', 'ProyekController@store');    //menampilkan isi data-data proyek
Route::get('/proyek/{id}','ProyekController@show');
Route::get('/proyek/{id}/edit', 'ProyekController@edit');     //untuk mengedit
Route::put('/proyek/{id}', 'ProyekController@update');      //menampilkan hasil edit
Route::delete('/proyek/{id}', 'ProyekController@destroy');

Route::get('/proyek/{id}/daftarkan-manager', 'KaryawanController@index');
Route::get('/proyek/{id}/daftarkan-manager/create', 'KaryawanController@create');
Route::post('/proyek/{id}/daftarkan-manager', 'KaryawanController@store');    
Route::delete('/proyek/{id}/daftarkan-manager', 'KaryawanController@destroy');