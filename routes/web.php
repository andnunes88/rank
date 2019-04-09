<?php


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){
    
# Vendedor
Route::get('/home', 'HomeController@index')->name('home');
    
# Perfil
Route::get('/perfil', 'PerfilController@index')->name('perfil');
Route::get('/perfil/novo', 'PerfilController@cadastrarPerfil')->name('perfil.cadastrar');
Route::post('/perfil/salvar/', 'PerfilController@salvarPerfil')->name('perfil.salvar');
Route::put('/perfil/atualizar/{id_usuario}', 'PerfilController@atualizarPerfil')->name('perfil.atualizar');
    
#Cursos
Route::get('/cursos', 'CursoController@index')->name('cursos');
Route::get('/curso/novo', 'CursoController@cadastrarCurso')->name('curso.cadastrar');
Route::post('/curso/salvar/', 'CursoController@salvarCurso')->name('curso.salvar');
Route::get('/curso/editar/{id_curso}', 'CursoController@editarCurso')->name('curso.editar');
Route::put('/curso/atualizar/{id_curso}', 'CursoController@atualizarCurso')->name('curso.atualizar');
Route::get('/curso/excluir/{id_curso}', 'CursoController@excluirCurso')->name('curso.excluir');

# Vendas
Route::get('/vendas', 'vendaController@index')->name('vendas');
Route::get('/venda/novo', 'vendaController@cadastrarVenda')->name('venda.cadastrar');
Route::post('/venda/salvar/', 'vendaController@salvarVenda')->name('venda.salvar');
Route::get('/venda/editar/{id_venda}', 'vendaController@editarVenda')->name('venda.editar');
Route::put('/venda/atualizar/{id_venda}', 'vendaController@atualizarVenda')->name('venda.atualizar');
Route::get('/venda/excluir/{id_venda}', 'vendaController@excluirVenda')->name('venda.excluir');

# Alunos
Route::get('/alunos', 'AlunoController@index')->name('alunos');
Route::get('/aluno/novo', 'AlunoController@cadastrarAluno')->name('aluno.cadastrar');
Route::post('/aluno/salvar/', 'AlunoController@salvarAluno')->name('aluno.salvar');
Route::get('/aluno/editar/{id_curso}', 'AlunoController@editarAluno')->name('aluno.editar');
Route::put('/aluno/atualizar/{id_curso}', 'AlunoController@atualizarAluno')->name('aluno.atualizar');
Route::get('/aluno/excluir/{id_curso}', 'AlunoController@excluirAluno')->name('aluno.excluir');

# Vendedores 
Route::get('/usuarios', 'VendedorController@index')->name('vendedores');
Route::get('/usuario/novo', 'VendedorController@cadastrarVendedor')->name('vendedor.cadastrar');
Route::post('/usuario/salvar/', 'VendedorController@salvarVendedor')->name('vendedor.salvar');
Route::get('/usuario/editar/{id_vendedor}', 'VendedorController@editarVendedor')->name('vendedor.editar');
Route::put('/usuario/atualizar/{id_vendedor}', 'VendedorController@atualizarVendedor')->name('vendedor.atualizar');
Route::get('/usuario/excluir/{id_vendedor}', 'VendedorController@excluirVendedor')->name('vendedor.excluir');

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
Route::get('/ranking-json/{id_categoria?}', 'RankingController@pegarTodasVendasJson')->name('ranking-json');
Route::get('/meta', 'RankingController@calculaMeta')->name('meta');

Route::get('/sair', 'HomeController@sair')->name('sair');

});