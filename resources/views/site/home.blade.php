@extends('layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Painel de controle		
		</h1>
		<ol class="breadcrumb">
			<li class="active"><i class="fa fa-dashboard"></i> Inicio</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->       
        <div class="col-md-12">

        	<div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <a href="{{route('ranking')}}">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-trophy"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Ranking</span>
                    <span class="info-box-number">Geral</span>
                  </div>
                  <!-- /.info-box-content -->
                </a>
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <a href="{{route('vendas')}}">
                <span class="info-box-icon bg-yellow"><i class="fa fa-shopping-bag"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Registrar</span>
                  <span class="info-box-number">Venda</span>
                </div>
                <!-- /.info-box-content -->
                </a>
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            @can('gerente')
            
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <a href="{{route('vendedores')}}">
                    <span class="info-box-icon bg-green"><i class="fa fa-user-plus"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Lista</span>
                      <span class="info-box-number">Usuários</span>
                    </div>
                    <!-- /.info-box-content -->
                  </a>
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

            @endcan

          </div>

        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @endsection


