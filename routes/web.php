<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Mail;
use App\Mail\Order;
use Illuminate\Http\Request;

Route::get('/', function () {
	return view('index');
});

Route::post('/contact-order', function(Request $request) {
	Mail::send(new Order($request->all()));
	return back()->with(['contact-form-success' => 'Успешно отправлена заявка']);
});



Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
	Route::group(['as' => 'storehouse.', 'prefix' => 'storehouse'], function() {
		Route::get('/index', 'StorehouseController@index')->name('index');
		Route::get('/create', 'StorehouseController@create')->name('create');
		Route::put('/store', 'StorehouseController@store')->name('store');
		Route::get('/edit/{id}', 'StorehouseController@edit')->name('edit');
		Route::post('/update/{id}', 'StorehouseController@update')->name('update');
		Route::get('/delete/{id}', 'StorehouseController@delete')->name('delete');
	});
});
