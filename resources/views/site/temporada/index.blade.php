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
        <a href="{{route('temporada.cadastrar')}}"><div class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Novo</div></a>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <table class="table table-striped">
          <tbody><tr>
            <th>Nome</th>
            <th>Data Início</th>
            <th>Data Fim</th>
            <th>Status</th>
            <th style="text-align: center"><i class="glyphicon glyphicon-cog"></i></th>
          </tr>

          @foreach($temporadas as $temporada)            
            <tr>         
              <td>{{$temporada->tem_nome}}</td>              
              <td>{{ date('d/m/Y', strtotime($temporada->tem_dataInicio)) }}</td>
              <td>{{ date('d/m/Y', strtotime($temporada->tem_dataFim)) }}</td>
              <td>{{ $temporada->status == 1 ? 'Ativo' : 'Inativo' }}</td>
              <td style="text-align: center">
                <a href="{{route('temporada.ativar', $temporada->id)}}"> <div class="btn btn-sm btn-success"><i class="glyphicon glyphicon-ok"></i></div></a>

                <a href="{{route('temporada.editar', $temporada->id)}}"> <div class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a> 
                  <a href="javascript: if(confirm('Apagar esse registro?')){ window.location.href = '{{ route('temporada.excluir', $temporada->id) }}' }"> <div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div></a>
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