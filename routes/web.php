<?php


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

# Vendedor
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/perfil', 'PerfilController@index')->name('perfil');

#Unidades
Route::get('/unidades', 'UnidadeController@index')->name('unidades');
Route::get('/unidade/novo', 'UnidadeController@cadastrarUnidade')->name('unidade.cadastrar');
Route::post('/unidade/salvar/', 'UnidadeController@salvarUnidade')->name('unidade.salvar');
Route::get('/unidade/editar/{id_unidade}', 'UnidadeController@editarUnidade')->name('unidade.editar');
Route::put('/unidade/atualizar/{id_unidade}', 'UnidadeController@atualizarUnidade')->name('unidade.atualizar');
Route::get('/unidade/excluir/{id_unidade}', 'UnidadeController@excluirUnidade')->name('unidade.excluir');

#Categorias
Route::get('/categorias', 'CategoriaController@index')->name('categorias');
Route::get('/categoria/novo', 'CategoriaController@cadastrarCategoria')->name('categoria.cadastrar');
Route::post('/categoria/salvar/', 'CategoriaController@salvarCategoria')->name('categoria.salvar');
Route::get('/categoria/editar/{id_categoria}', 'CategoriaController@editarCategoria')->name('categoria.editar');
Route::put('/categoria/atualizar/{id_categoria}', 'CategoriaController@atualizarCategoria')->name('categoria.atualizar');
Route::get('/categoria/excluir/{id_categoria}', 'CategoriaController@excluirCategoria')->name('categoria.excluir');

#Temporada
Route::get('/temporadas', 'TemporadaController@index')->name('temporadas');

#ranking
Route::get('/ranking', 'RankingController@index')->name('ranking');

Route::get('/sair', 'HomeController@sair')->name('sair');
