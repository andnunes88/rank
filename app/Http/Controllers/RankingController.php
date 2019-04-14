<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use Illuminate\Support\Facades\DB;
use App\Categoria;
use App\User;
use App\Temporada;

class RankingController extends Controller
{
    //
    public function index(){
    	
    	$vendas = $this->pegarTodasVendas();
        
        $categorias = Categoria::all(); 

    	return view('site.ranking.index', compact('vendas', 'categorias'));
    }

    public function pegarTodasVendas(){

        $temporada = Temporada::where('status', 1)->first();               
    	
        if($temporada == null){

            $vendas = DB::table('vendas')
                ->select('users.name', 'users.foto','unidades.uni_nome', 'categorias.cat_meta', DB::raw('SUM(vendas.ven_valor) as total_vendas'))
                ->join('users', 'users.id', 'vendas.ven_vendedor_id')
                ->join('unidades', 'unidades.id', 'vendas.ven_unidade_id')
                ->join('categorias', 'categorias.id', 'users.categoria_id')
                ->groupBy('ven_vendedor_id')
                ->orderBy('total_vendas', 'DESC')
                ->get();

                \Session::flash('mensagem',['msg'=>'Nenhuma temporada Cadastrada ou Ativa','class'=>'alert alert-warning']);
            
        }else{

            $vendas = DB::table('vendas')
                ->select('users.name', 'users.foto','unidades.uni_nome', 'categorias.cat_meta', DB::raw('SUM(vendas.ven_valor) as total_vendas'))
                ->join('users', 'users.id', 'vendas.ven_vendedor_id')
                ->join('unidades', 'unidades.id', 'vendas.ven_unidade_id')
                ->join('categorias', 'categorias.id', 'users.categoria_id')
                ->Where('ven_temporada_id', $temporada->id)
                ->groupBy('ven_vendedor_id')
                ->orderBy('total_vendas', 'DESC')
                ->get();

        }
              
        return $vendas;        

    }

    public function pegarTodasVendasJson($id_categoria = null){
        
        $temporada = Temporada::where('status', 1)->first();

        if($id_categoria != null){

            $vendas = DB::table('vendas')
                ->select('users.name', 'users.foto','unidades.uni_nome', 'categorias.cat_meta', DB::raw('SUM(vendas.ven_valor) as total_vendas'))
                ->join('users', 'users.id', 'vendas.ven_vendedor_id')
                ->join('unidades', 'unidades.id', 'vendas.ven_unidade_id')
                ->join('categorias', 'categorias.id', 'users.categoria_id')
                ->Where('ven_categoria_id', $id_categoria)
                ->Where('ven_temporada_id', $temporada->id)
                ->groupBy('ven_vendedor_id')
                ->orderBy('total_vendas', 'DESC')
                ->get(); 

               return $vendas;            

        }else{

            return $vendas = DB::table('vendas')
                ->select('users.name', 'users.foto','unidades.uni_nome', 'categorias.cat_meta', DB::raw('SUM(vendas.ven_valor) as total_vendas'))
                ->join('users', 'users.id', 'vendas.ven_vendedor_id')
                ->join('unidades', 'unidades.id', 'vendas.ven_unidade_id')
                ->join('categorias', 'categorias.id', 'users.categoria_id')
                ->Where('ven_temporada_id', $temporada->id)
                ->groupBy('ven_vendedor_id')
                ->orderBy('total_vendas', 'DESC')
                ->get();

        }

    }

}
