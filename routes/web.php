<?php

Route::view('/','pages.home');
Route::view('about', "pages.about");

Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');

//Route::view('contact', "pages.contact");

/*
Route::get('customers', 'CustomersController@index');
Route::get('customers/create', 'CustomersController@create');
Route::post('customers', 'CustomersController@store');
Route::get('customers/{customer}', 'CustomersController@show');
Route::get('customers/{customer}/edit', 'CustomersController@edit');
Route::patch('customers/{customer}', 'CustomersController@update');
Route::delete('customers/{customer}', 'CustomersController@destroy');*/

Route::resource('customers', 'CustomersController');

