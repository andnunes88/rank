<?php


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Auth::routes();

# Vendedor
Route::get('/home', 'HomeController@index')->name('home');

#Unidades
Route::get('/unidade', 'UnidadeController@index')->name('unidade');
Route::get('/unidade/novo', 'UnidadeController@cadastrarUnidade')->name('unidade.cadastrar');
Route::post('/unidade/salvar/', 'UnidadeController@salvarUnidade')->name('unidade.salvar');
Route::get('/unidade/editar/{id_unidade}', 'UnidadeController@editarUnidade')->name('unidade.editar');
Route::put('/unidade/atualizar/{id_unidade}', 'UnidadeController@atualizarUnidade')->name('unidade.atualizar');
Route::get('/unidade/excluir/{id_unidade}', 'UnidadeController@excluirUnidade')->name('unidade.excluir');

#Categorias
Route::get('/ranking', 'HomeController@sair')->name('sair');

#ranking
Route::get('/sair', 'HomeController@sair')->name('sair');
