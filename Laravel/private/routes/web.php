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

Route::get('/votingOnline', function () {
    return view('templates.default');
});

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});
Route::get('/sekilas_pandang', function(){
	return view('projek.sekilas_pandang');
});

Route::get('/input_data_pemilih', function () {
    return view('projek.input_data_pemilih');
});

Route::get('/input_data_calon', function () {
    return view('projek.input_data_calon');
});

Route::get('/report', function () {
    return view('projek.report');
});
/*Route::get('karyawan1',function(){
	$karyawan=['Munawar','Budi Santoso','Widya Ningrum','Unggul Jaya'];
	return view('pages.karyawan',compact('karyawan'));
});*/

Route::get('karyawan','BelajarController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
