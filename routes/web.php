<?php

Route::get('/teste', function () {
    
   		$usuario = new App\User();
        $usuario->name = 'admin';
        $usuario->email = 'admin@admin';
        $usuario->password = Hash::make('123456');
        $usuario->save();
    
});

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

# Vendedor
Route::get('/home', 'HomeController@index')->name('home');

# Perfil
Route::get('/perfil', 'PerfilController@index')->name('perfil');
Route::get('/perfil/novo', 'PerfilController@cadastrarPerfil')->name('perfil.cadastrar');
Route::post('/perfil/salvar/', 'PerfilController@salvarPerfil')->name('perfil.salvar');

# Vendedores 
Route::get('/vendedores', 'VendedorController@index')->name('vendedores');
Route::get('/vendedor/novo', 'VendedorController@cadastrarVendedor')->name('vendedor.cadastrar');
Route::post('/vendedor/salvar/', 'VendedorController@salvarVendedor')->name('vendedor.salvar');

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
Route::get('/temporada/novo', 'TemporadaController@cadastrarTemporada')->name('temporada.cadastrar');
Route::post('/temporada/salvar/', 'TemporadaController@salvarTemporada')->name('temporada.salvar');
Route::get('/temporada/editar/{id_temporada}', 'TemporadaController@editarTemporada')->name('temporada.editar');
Route::put('/temporada/atualizar/{id_categoria}', 'TemporadaController@atualizarTemporada')->name('temporada.atualizar');
Route::get('/temporada/excluir/{id_categoria}', 'TemporadaController@excluirTemporada')->name('temporada.excluir');

#ranking
Route::get('/ranking', 'RankingController@index')->name('ranking');

Route::get('/sair', 'HomeController@sair')->name('sair');
