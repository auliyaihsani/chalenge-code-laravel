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

Route::get('/', function () {
    $kriminalitas = App\Kriminalitas::orderBy('id', 'desc')->paginate('20');
    return view('welcome')->withKriminalitas($kriminalitas);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kriminal',  'KriminalitasController');
