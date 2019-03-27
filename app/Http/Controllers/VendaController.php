<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;

class VendaController extends Controller
{
    public function index(){
    	
    	$vendas = Venda::all();

    	return view('site.venda.index', compact('vendas'));
    }

    public function cadastrarVenda(){

        return view('site.venda.cadastrar');     
    }

    public function salvarVenda(Request $request){

    	$dados = $request->all();
    	$venda = new Venda;
    	$venda->cat_nome = $dados['venda_nome'];
    	$venda->save();

        \Session::flash('mensagem',['msg'=>'venda cadastrada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('vendas');
    }

    public function editarVenda($id_venda){

        $venda = Venda::find($id_venda);

        return view('site.venda.editar', compact('venda'));     
    }    

    public function atualizarvenda(Request $request, $id_venda){        

        $dados = $request->all();

        $venda = Venda::where('id',$id_venda)->first();   
        $venda->cat_nome = $dados['venda_nome'];
        $venda->update();
       
        \Session::flash('mensagem',['msg'=>'venda atualizada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('vendas');
       
    }

    public function excluirvenda($id_venda){
        
        $venda = Venda::find($id_venda);

        $venda->delete();

        \Session::flash('mensagem',['msg'=>'venda Excluida com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('vendas');
    }
}
