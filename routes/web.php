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

Route::redirect('/', 'recepcion');

Route::get('/clientes', function(){
	return view('clients.index');
});

/*Route::get('/recepcion', function(){
	return view('receptions.index');
});*/

Route::get('/tecnicos', function(){
	return view('technicals.index');
});

Route::resource('clients', 'ClientController', ['except' => 'create', 'edit']);
Route::resource('technicals', 'TechnicalController', ['except' => 'create', 'edit']);
Route::resource('recepcion', 'ReceptionController');