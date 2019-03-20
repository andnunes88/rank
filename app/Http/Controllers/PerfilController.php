<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Unidade;
use App\User;

class PerfilController extends Controller
{
    //
    public function index(){
    	return view('site.perfil.index');
    }

    public function cadastrarPerfil(){

    	$categorias = Categoria::all();
    	$unidades =	Unidade::all();

    	return view('site.perfil.cadastrar', compact('categorias', 'unidades')); 
    }

    public function salvarPerfil(Request $request){

    	$dados = $request->all();
    	
    	$usuario = New User();
    	
    	$usuario->name = "Anderson Albuquerque";
		$usuario->cpf = "122.291.467-00";
		$usuario->unidade = "2";
		$usuario->categoria = "1";
		$usuario->password = bcrypt("mudar@123");
		
		$usuario->save();

		\Session::flash('mensagem',['msg'=>'Novo cadastro realizado com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('unidades');

		//$usuario->foto = "aaa";
		//$usuario->data = "2019-03-19";
		//$usuario->telefone = "2197443082";
		//$usuario->frase = "aaa";

    }
}
