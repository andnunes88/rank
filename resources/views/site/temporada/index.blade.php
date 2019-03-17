@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="min-height: 1126.3px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Temporada
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
                <a href="{{route('categoria.cadastrar')}}"><div class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Novo</div></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th>Nome</th>
                  <th>Data Início</th>
                  <th>Data Fim</th>
                  <th style="text-align: center"><i class="glyphicon glyphicon-cog"></i></th>
                </tr>            
                <tr>
                  <td>Verão</td>
                  <td>01/01/2019</td>
                  <td>31/03/2019</td>
                  <td style="text-align: center">
                    <a href="#"> <div class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a> 
                    <a href="#"> <div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div></a>
                    </td>
                </tr>
                <tr>
                  <td>Primavera</td>
                  <td>01/04/2019</td>
                  <td>31/06/2019</td>
                  <td style="text-align: center">
                    <a href="#"> <div class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a> 
                    <a href="#"> <div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div></a>
                    </td>
                </tr>
                <tr>
                  <td>Inverno</td>
                  <td>01/07/2019</td>
                  <td>31/09/2019</td>
                  <td style="text-align: center">
                    <a href="#"> <div class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a> 
                    <a href="#"> <div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div></a>
                    </td>
                </tr>
                <tr>
                  <td>Outono</td>
                  <td>01/10/2019</td>
                  <td>31/12/2019</td>
                  <td style="text-align: center">
                    <a href="#"> <div class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a> 
                    <a href="#"> <div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div></a>
                    </td>
                </tr>               
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>

    </section>
    <!-- /.content -->
  </div>

@endsection