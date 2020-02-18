<?php


Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
//Route::get('/portafolio','portfoliocontroller')->name('portafolio');

Route::view('/contact','contact')->name('contact');

//Route::view('/','home',['nombre' -> 'luis']);
//Route::get('/',function(){
//	$nombre="luis";
//	return view('home')->with('nombre',$nombre);
//})->name('home');