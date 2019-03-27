@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="min-height: 1126.3px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Alunos
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
      <li class="active">Alunos</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header">
        <a href="{{route('aluno.cadastrar')}}"><div class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Novo</div></a>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <table class="table table-striped">
          <tbody>
            
            <tr>
              <th>Nome</th>
              <th>Telefone</th>
              <th style="text-align: center"><i class="glyphicon glyphicon-cog"></i></th>
            </tr> 

            @foreach($alunos as $aluno)           
              <tr>
                <td>{{$aluno->alu_nome}}</td>
                <td>{{$aluno->alu_telefone}}</td>
                <td style="text-align: center">
                  <a href="{{route('aluno.editar', $aluno->id)}}"> <div class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a> 
                  <a href="javascript: if(confirm('Apagar esse registro?')){ window.location.href = '{{ route('aluno.excluir', $aluno->id) }}' }"> <div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div></a>
                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>

  </section>
  <!-- /.content -->
</div>

@endsection