@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="min-height: 1126.3px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Vendedores registrados
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
      <li class="active">Temporada</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header">
        <a href="{{route('vendedor.cadastrar')}}"><div class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Novo</div></a>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <table class="table table-striped">
          <tbody>
          <tr>
            <th>Nome</th>
            <th>Unidade</th>
            <th>Categoria</th>
            <th style="text-align: center"><i class="glyphicon glyphicon-cog"></i></th>
          </tr>



        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>

</section>
<!-- /.content -->
</div>

@endsection