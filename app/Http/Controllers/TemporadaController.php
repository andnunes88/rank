<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temporada;

class TemporadaController extends Controller
{
    //
    public function index() {
    	
    	$temporadas = Temporada::all();

        return view('site.temporada.index', compact('temporadas'));
    }

    public function cadastrarTemporada(){

        return view('site.temporada.cadastrar');     
    }

    public function salvarTemporada(Request $request){

    	$dados = $request->all();

    	$temporada = new Temporada;
    	$temporada->tem_nome = $dados['temporada_nome'];
    	$temporada->tem_dataInicio = $dados['data_inicio'];
    	$temporada->tem_dataFim = $dados['data_fim'];   	

    	$temporada->save();

        \Session::flash('mensagem',['msg'=>'Temporada cadastrada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('temporadas');
    }

    public function editarTemporada($id_temporada){

        $temporada = Temporada::find($id_temporada);

        return view('site.temporada.editar', compact('temporada'));     
    }

    public function atualizarTemporada(Request $request, $id_temporada){        

        $dados = $request->all();

        $temporada = Temporada::where('id', $id_temporada)->first();   
        $temporada->tem_nome = $dados['temporada_nome'];
    	$temporada->tem_dataInicio = $dados['data_inicio'];
    	$temporada->tem_dataFim = $dados['data_fim'];  
        $temporada->update();
       
        \Session::flash('mensagem',['msg'=>'Temporada atualizada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('temporadas');
       
    }

    public function excluirTemporada($id_temporada){
        
        $temporada = Temporada::find($id_temporada);

        $temporada->delete();

        \Session::flash('mensagem',['msg'=>'Temporada Excluida com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('temporadas');
    }
}
