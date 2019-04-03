<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{

    public function index(){
    	
    	$categorias = categoria::all();

    	return view('site.categoria.index', compact('categorias'));
    }

    public function cadastrarCategoria(){

        return view('site.categoria.cadastrar');     
    }

    public function salvarCategoria(Request $request){

    	$dados = $request->all();
    	$categoria = new Categoria;
    	$categoria->cat_nome = $dados['categoria_nome'];
        $categoria->cat_meta = $dados['categoria_meta'];
    	$categoria->save();

        \Session::flash('mensagem',['msg'=>'categoria cadastrada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('categorias');
    }

    public function editarCategoria($id_categoria){

        $categoria = categoria::find($id_categoria);

        return view('site.categoria.editar', compact('categoria'));     
    }    

    public function atualizarCategoria(Request $request, $id_categoria){        

        $dados = $request->all();

        $categoria = categoria::where('id',$id_categoria)->first();   
        $categoria->cat_nome = $dados['categoria_nome'];
        $categoria->cat_meta = $dados['categoria_meta'];
        $categoria->update();
       
        \Session::flash('mensagem',['msg'=>'categoria atualizada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('categorias');
       
    }

    public function excluirCategoria($id_categoria){
        
        $categoria = categoria::find($id_categoria);

        $categoria->delete();

        \Session::flash('mensagem',['msg'=>'categoria Excluida com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('categorias');
    }
}
