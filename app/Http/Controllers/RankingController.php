<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use Illuminate\Support\Facades\DB;
use App\Categoria;
use App\User;

class RankingController extends Controller
{
    //
    public function index(){
    	
    	$vendas = $this->pegarTodasVendas();
        
        $categorias = Categoria::all(); 

    	return view('site.ranking.index', compact('vendas', 'categorias'));
    }

    public function pegarTodasVendas(){
    	
        $vendas = DB::table('vendas')
            ->select('users.name', 'users.foto' , 'users.meta', DB::raw('SUM(vendas.ven_valor) as total_vendas'))
            ->join('users', 'users.id', 'vendas.ven_vendedor_id')
            ->groupBy('ven_vendedor_id')
            ->orderBy('total_vendas', 'DESC')
            ->get();

          
       return $vendas;    

    }

    public function pegarTodasVendasJson($id_categoria = null){
        
        if($id_categoria != null){

            return $vendas = DB::table('vendas')
                ->select('*', DB::raw('SUM(vendas.ven_valor) as total_vendas'))
                ->Where('ven_categoria_id', $id_categoria)
                ->groupBy('ven_vendedor_id')
                ->orderBy('total_vendas', 'DESC')
                ->get();            

        }else{

            return $vendas = DB::table('vendas')
                ->select('*', DB::raw('SUM(vendas.ven_valor) as total_vendas'))
                ->groupBy('ven_vendedor_id')
                ->orderBy('total_vendas', 'DESC')
                ->get();

        }

    }

    public function calculaMeta(){
        return $vendas = DB::table('vendas')
                ->select(DB::raw('SUM((ven_valor / meta_mensal) * 100) as percentual_meta'))
                ->join('users', 'users.id', '=', 'ven_vendedor_id')
                ->groupBy('ven_vendedor_id')
                ->get(); 
    }


}
