<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Unidade;
use App\User;

class VendedorController extends Controller
{
    //
    public function index(){

    	return view('site.vendedor.index');
    }

    public function cadastrarVendedor(){

    	$categorias = Categoria::all();
    	$unidades =	Unidade::all();

    	return view('site.vendedor.cadastrar', compact('categorias', 'unidades')); 
    }

    public function salvarVendedor(Request $request){

    	$dados = $request->all();
    	
    	$usuario = New User();
    	
    	$usuario->name = $dados['nome'];
		$usuario->cpf = $dados['cpf'];
		$usuario->unidade = $dados['unidade'];
		$usuario->categoria = $dados['categoria'];
		$usuario->password = bcrypt("mudar@123");
		$usuario->tipo = 'vendedor';
		
		$usuario->save();

		\Session::flash('mensagem',['msg'=>'Novo Vendedor cadastrado com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('vendedores');

    }
}
