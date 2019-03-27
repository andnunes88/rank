<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use Auth;

class AlunoController extends Controller
{
    //
    public function index(){
    	
    	$alunos = Aluno::all();

    	return view('site.aluno.index', compact('alunos'));
    }

    public function cadastrarAluno(){

        return view('site.aluno.cadastrar');     
    }

    public function salvarAluno(Request $request){

    	$id_usuario = Auth::user()->id;

    	$dados = $request->all();
    	$aluno = new Aluno;
    	$aluno->usuario_id = $id_usuario;
    	$aluno->alu_nome = $dados['aluno_nome'];
        $aluno->alu_cpf = $dados['aluno_cpf'];
        $aluno->alu_telefone = $dados['aluno_telefone'];
        $aluno->alu_email = $dados['aluno_email'];
    	$aluno->save();

        \Session::flash('mensagem',['msg'=>'aluno cadastrada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('alunos');
    }

    public function editarAluno($id_aluno){

        $aluno = Aluno::find($id_aluno);

        return view('site.aluno.editar', compact('aluno'));     
    }    

    public function atualizarAluno(Request $request, $id_aluno){        

        $dados = $request->all();
        $id_usuario = Auth::user()->id;

        $aluno = Aluno::where('id',$id_aluno)->first(); 
        $aluno->usuario_id = $id_usuario;  
        $aluno->alu_nome = $dados['aluno_nome'];
        $aluno->alu_cpf = $dados['aluno_cpf'];
        $aluno->alu_telefone = $dados['aluno_telefone'];
        $aluno->alu_email = $dados['aluno_email'];
        $aluno->update();
       
        \Session::flash('mensagem',['msg'=>'aluno atualizada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('alunos');
       
    }

    public function excluirAluno($id_aluno){
        
        $aluno = Aluno::find($id_aluno);

        $aluno->delete();

        \Session::flash('mensagem',['msg'=>'aluno Excluida com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('alunos');
    }
}
