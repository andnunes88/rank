<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Categoria;
use App\Unidade;
use App\User;
use Auth;


class PerfilController extends Controller
{   
    

    public function index(){

        $id_usuario = Auth::user()->id;

        $usuario = User::find($id_usuario);

    	$categorias = Categoria::all();
    	$unidades =	Unidade::all();

    	return view('site.perfil.editar', compact('usuario', 'categorias', 'unidades')); 
    }

    public function atualizarPerfil(Request $request, $id_usuario){

        $dados = $request->all();
           	        
    	$usuario = User::find($id_usuario);       
    	
    	$usuario->name = $dados['nome'];
		$usuario->email = $dados['email'];	        

        if(isset($dados['senha'])){
           
            $usuario->password = Hash::make($dados['senha']);            
        }

        $usuario->telefone = $dados['telefone'];
        $usuario->frase = $dados['frase'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/perfil/".$id_usuario."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $usuario->foto = $diretorio.'/'.$nomeArquivo;
        }else{
            $usuario->foto = $usuario->foto;
        }

		$usuario->update();

		\Session::flash('mensagem',['msg'=>'Perfil atualizado com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('perfil');

		
    }
}
