<?php

Route::view('/','pages.home');
Route::view('about-us', "pages.about");
Route::view('contact-us', "pages.contact");

Route::get('customer', 'CustomerController@index');
Route::get('customers/create', 'CustomerController@create');
Route::post('customer', 'CustomerController@store');
Route::get('customers/{customer}', 'CustomerController@show');
Route::get('customers/{customer}/edit', 'CustomerController@edit');
Route::patch('customers/{customer}', 'CustomerController@update');


