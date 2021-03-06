<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temporada;
use App\Venda;

class TemporadaController extends Controller {

    public $idTemporadaBD;

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

        $vendas = Venda::where('ven_temporada_id', $id_temporada)->get();

        if($vendas->count() > 0){
            \Session::flash('mensagem',['msg'=>'Não foi possivel excluir essa temporada. Existe venda registrada.','class'=>'alert alert-danger']);
        }else{

            $temporada->delete();

            \Session::flash('mensagem',['msg'=>'Temporada Excluida com sucesso!','class'=>'alert alert-success']);
        }        

        return redirect()->route('temporadas');
    }

    public function ativarTemporada($id_temporada){
        $temporadasAtiva = Temporada::where('status', 1)->get();
    
        foreach ($temporadasAtiva as $temporadaAtiva) {
            $this->idTemporadaBD = $temporadaAtiva->id;
        }

        if($temporadasAtiva->count() > 0) { //existe uma temporada ativa

            $this->atualizarDesativarTemporada($this->idTemporadaBD);

            $this->atualizarAtivarTemporada($id_temporada);

            $this->desativaTemporadaAtiva($id_temporada);

        } else {

            $this->atualizarAtivarTemporada($id_temporada);

        }

        return redirect()->route('temporadas');
        
    }

    private function atualizarAtivarTemporada($id_temporada){

        $temporada = Temporada::where('id', $id_temporada)->first();
        $temporada->status = 1;
        $temporada->update();

    }

    private function atualizarDesativarTemporada($id_temporada){

        $temporada = Temporada::where('id', $this->idTemporadaBD)->first();
        $temporada->status = 0;
        $temporada->update(); 
    }

    private function desativaTemporadaAtiva($id_temporada){
        
        $temporada = Temporada::where('id', $this->idTemporadaBD)->first();

        if(($temporada->status == 1) != null) {

            $this->atualizarDesativarTemporada($this->idTemporadaBD);
        }
    }
}
