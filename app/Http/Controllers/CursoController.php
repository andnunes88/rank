<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function index(){
    	
    	$cursos = Curso::all();

    	return view('site.curso.index', compact('cursos'));
    }

    public function cadastrarcurso(){

        return view('site.curso.cadastrar');     
    }

    public function salvarCurso(Request $request){

    	$dados = $request->all();
    	$curso = new Curso;
    	$curso->cur_nome = $dados['curso_nome'];
        $curso->cur_valor = $dados['curso_valor'];
    	$curso->save();

        \Session::flash('mensagem',['msg'=>'Curso cadastrada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('cursos');
    }

    public function editarCurso($id_curso){

        $curso = Curso::find($id_curso);

        return view('site.curso.editar', compact('curso'));     
    }    

    public function atualizarCurso(Request $request, $id_curso){        

        $dados = $request->all();

        $curso = curso::where('id',$id_curso)->first();   
        $curso->cur_nome = $dados['curso_nome'];
        $curso->cur_valor = $dados['curso_valor'];
        $curso->update();
       
        \Session::flash('mensagem',['msg'=>'curso atualizada com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('cursos');
       
    }

    public function excluirCurso($id_curso){
        
        $curso = Curso::find($id_curso);

        $curso->delete();

        \Session::flash('mensagem',['msg'=>'curso Excluida com sucesso!','class'=>'alert alert-success']);

        return redirect()->route('cursos');
    }
}
