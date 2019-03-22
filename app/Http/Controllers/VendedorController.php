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

        $usuarios = User::all();
       
       	return view('site.vendedor.index', compact('usuarios'));
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
        $usuario->tipo = $dados['tipo'];
		$usuario->unidade_id = $dados['unidade'];
		$usuario->categoria_id = $dados['categoria'];
		$usuario->password = bcrypt("mudar@123");
        $usuario->foto = 'img/no-photo.png';
				
		$usuario->save();

		\Session::flash('mensagem',['msg'=>'Novo Vendedor cadastrado com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('vendedores');

    }

    public function editarVendedor($id_vendedor){
        
        $categorias = Categoria::all();
        $unidades = Unidade::all();
        $vendedor = User::find($id_vendedor);        
      
        return view('site.vendedor.editar', compact('categorias', 'unidades', 'vendedor'));     
    }    

    public function atualizarVendedor(Request $request, $id_vendedor){        

        $dados = $request->all();
        
        $usuario = User::find($id_vendedor);

        $usuario->name = $dados['nome'];
        $usuario->cpf = $dados['cpf'];
        $usuario->tipo = $dados['tipo'];
        $usuario->unidade_id = $dados['unidade'];
        $usuario->categoria_id = $dados['categoria'];
        $usuario->password = bcrypt("mudar@123");
                
        $usuario->update();
       
        \Session::flash('mensagem',['msg'=>'Vendedor atualizado com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('vendedores');
       
    }

    public function excluirVendedor($id_vendedor){
        
        $usuario = User::find($id_vendedor);

        $usuario->delete();

        \Session::flash('mensagem',['msg'=>'Vendedor Excluido com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('vendedores');
    }
}
