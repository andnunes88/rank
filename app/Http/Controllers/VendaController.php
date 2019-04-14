<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use Auth;
use App\User;
use App\Temporada;

class VendaController extends Controller
{
    public function index(){
    	
        $id_usuario_logado = Auth::user()->id;

    	$vendas = Venda::where('ven_vendedor_id', $id_usuario_logado)->get();

    	return view('site.venda.index', compact('vendas'));
    }

    public function cadastrarVenda(){

        return view('site.venda.cadastrar');     
    }

    public function salvarVenda(Request $request){

        $temporada_ativa = Temporada::where('status', 1)->first();

        if($temporada_ativa != null){        

            $id_usuario_logado = Auth::user()->id;

            $vendedor = User::find($id_usuario_logado);      
            
        	$dados = $request->all();
        	$venda = new Venda;
        	$venda->ven_vendedor_id = $vendedor->id;
            $venda->ven_unidade_id = $vendedor->unidade_id;          
            $venda->ven_categoria_id = $vendedor->categoria_id;                      
            $venda->ven_temporada_id = $temporada_ativa->id;                      
            $venda->ven_aluno = $dados['aluno_nome'];
            $venda->ven_telefone = $dados['aluno_telefone'];
            $venda->ven_email = $dados['aluno_email'];        
            $venda->ven_valor = $dados['aluno_valor'];        
            $venda->ven_data = new \DateTime();        
        	$venda->save();

        }else{
            \Session::flash('mensagem',['msg'=>'Não foi possivel registrar sua venda. Não existe temporada ativa!','class'=>'alert alert-danger']);

            return redirect()->route('vendas');
        }

        \Session::flash('mensagem',['msg'=>'Venda cadastrada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('vendas');
    }

    public function editarVenda($id_venda){

        $venda = Venda::find($id_venda);

        return view('site.venda.editar', compact('venda'));     
    }    

    public function atualizarVenda(Request $request, $id_venda){        

        $dados = $request->all();

        $venda = Venda::where('id',$id_venda)->first();   
        $venda->ven_aluno = $dados['aluno_nome'];
        $venda->ven_telefone = $dados['aluno_telefone'];
        $venda->ven_email = $dados['aluno_email'];        
        $venda->ven_valor = $dados['aluno_valor']; 
        $venda->update();
       
        \Session::flash('mensagem',['msg'=>'Venda atualizada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('vendas');
       
    }

    public function excluirvenda($id_venda){
        
        $venda = Venda::find($id_venda);

        $venda->delete();

        \Session::flash('mensagem',['msg'=>'Venda excluida com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('vendas');
    }
}
