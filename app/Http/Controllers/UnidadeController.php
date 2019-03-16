<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;


class UnidadeController extends Controller
{
    //
    public function index(){
    	
    	$unidades = Unidade::all();

    	return view('site.unidade.index', compact('unidades'));
    }

    public function cadastrarUnidade(){

        return view('site.unidade.cadastrar');     
    }

    public function salvarUnidade(Request $request){

    	$dados = $request->all();
    	$unidade = new Unidade;
    	$unidade->uni_nome = $dados['unidade_nome'];
    	$unidade->save();

        \Session::flash('mensagem',['msg'=>'Unidade cadastrada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('unidades');
    }

    public function editarUnidade($id_unidade){

        $unidade = Unidade::find($id_unidade);

        return view('site.unidade.editar', compact('unidade'));     
    }    

    public function atualizarUnidade(Request $request, $id_unidade){        

        $dados = $request->all();

        $unidade = Unidade::where('id',$id_unidade)->first();   
        $unidade->uni_nome = $dados['unidade_nome'];
        $unidade->update();
       
        \Session::flash('mensagem',['msg'=>'Unidade atualizada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('unidades');
       
    }

    public function excluirUnidade($id_unidade){
        
        $unidade = Unidade::find($id_unidade);

        $unidade->delete();

        \Session::flash('mensagem',['msg'=>'Unidade Excluida com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('unidades');
    }
}
