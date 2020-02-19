<?php


Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::get('/portafolio','portfoliocontroller@index')->name('portafolio');

Route::view('/contact','contact')->name('contact');
Route::post('contact','MessagesController@store');
//Route::apiResource('/portafolio','portfoliocontroller');