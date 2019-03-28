<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    //
    public function index(){
    	
    	$vendas = $this->pegarTodasVendas();

    	return view('site.ranking.index', compact('vendas'));
    }

    public function pegarTodasVendas(){
    	
    	return $vendas = DB::table('vendas')
    		->select('*', DB::raw('SUM(vendas.ven_valor) as total_vendas'))
    		->groupBy('ven_vendedor_id')
    		->orderBy('ven_valor', 'ASC')
    		->get();

    }
}
