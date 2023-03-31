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

Route::get('/','LandingController@index')->name('beranda');
Route::get('/data pengaduan','pengaduanController@index')->name('data pengaduan');

// Route::get('/beranda', function () {
//     return view('welcome');
// });
// Untuk Route.
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/register', 'registerController@register')->name('register');

Route::get('/login','LoginController@login')->name('login');
Route::get('/logout','LoginController@logout');
Route::middleware(['auth'])->group(function(){
  Route::get('/beranda','BerandaController@index')->name('beranda')->middleware('auth');

//pengaduan
Route::get('/pengaduan', 'PengaduanController@index');
Route::get('/pengaduan/create', 'PengaduanController@create');
Route::Post('/pengaduan/store', 'PengaduanController@store');
Route::get('/pengaduan/destroy/{id_pengaduan}', 'PengaduanController@destroy');
Route::get('/pengaduan/edit/{id_pengaduan}', 'PengaduanController@edit');
Route::Put('/pengaduan/update/{id_pengaduan}', 'PengaduanController@update');
Route::get('/pengaduan/detail/{id_pengaduan}', 'PengaduanController@show');


//tanggapan
Route::get('/tanggapan', 'tanggapanController@index');
Route::get('/tanggapan/create', 'tanggapanController@create');
Route::Post('/tanggapan/store', 'tanggapanController@store');
Route::get('/tanggapan/destroy/{id_tanggapan}', 'tanggapanController@destroy');
Route::get('/tanggapan/edit/{id_tanggapan}', 'tanggapanController@edit');
Route::get('/tanggapan/update/{id_tanggapan}', 'tanggapanController@update');
Route::get('/tanggapan/detail/{id_tanggapan}', 'tanggapanController@show');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/beranda', 'berandaController@index');

});


//login&regis
Route::get('/logins', 'LoginController@login')->name('login');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/register', 'LoginController@register')->name('register');
Route::post('/simpanregister','LoginController@simpanregister')->name('simpanregister');

Route::post('/getkabupaten', 'LoginController@getkabupaten')->name('getkabupaten');
Route::post('/getkecamatan', 'LoginController@getkecamatan')->name('getkecamatan');
Route::post('/getdesa', 'LoginController@getdesa')->name('getdesa');

//cetak
Route::get('/pengaduan/cetak_pdf/{id_pengaduan}', 'PengaduanController@cetak_pdf');
// Route::get('/cetak_pdf/{id_pengaduan}','PengaduanController@cetak_pdf')->name('cetak-pengaduan-pertanggal');