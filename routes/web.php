<?php


Route::get('/perfil', function () {
    return view('perfil');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sair', 'HomeController@sair')->name('sair');
