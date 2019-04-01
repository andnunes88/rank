@extends('layouts.app')

@section('content')
<style>
	.img-ranking{
		width: 25px;
		height: 25px;
		border-radius: 50%;
	}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Ranking 
			
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Ranking</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">

		<div class="box">
      <div class="box-header">
        <h3 class="box-title">Vendedores </h3>

        <select id="select-categoria">
          <option value="">Categoria</option>

          @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->cat_nome}}</option>
          @endforeach

        </select>

      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <table class="table table-condensed">
          
            <thead>
              <tr>
                <th>Posição</th>
                <th>Nome</th>
                <th>Meta</th>
                <th style="width: 40px">Vendas</th>
                
              </tr>
            </thead>

            <tbody id="lista-vendedores">

              @php
                $posicao = 1;
              @endphp

            @foreach($vendas as $venda) 
            
              <tr> 
                <td>{{$posicao}} º</td>               
                <td>
                  <img src="dist/img/user2-160x160.jpg" class="img-ranking" alt="imgagem do vendedor">
                  {{$venda->ven_vendedor_nome}}
                </td>
                <td>
                  <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-light-blue" style="width: 70%"></div>
                  </div>
                </td>
                <td><span class="badge bg-light-blue">{{$venda->total_vendas}}</span></td>
                <td>
                  
                    <span class="badge bg-light-blue"></span>
                  
                </td>            
              </tr>

              @php
                $posicao++;
              @endphp

            @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@push('js')
    
    <!-- ranking JS -->      
    <script src="{{ asset('js/ranking.js') }}"></script>    

@endpush