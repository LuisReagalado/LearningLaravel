<?php


Route::view('/','home')->name('home'); //Cuando va a la raíz "/" nos devuelve la vista home 'home'
Route::view('/Informacion','about')->name('about');


Route::resource('portafolio','ProjectController')->names('Projects')->parameters(['portafolio'=>'project']);

Route::view('/contacto','contact')->name('contact');
Route::post('contact','MessagesController@store')->name('messages.store');
//Route::apiResource('/portafolio','portfoliocontroller');
Auth::routes(['register' => false]);


