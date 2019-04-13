@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Editar Temporada            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Editar Temporada</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">        

        <form action="{{route('temporada.atualizar', $temporada->id)}}" method="post">

            {{ csrf_field() }}

            <div class="box box-danger">

                <div class="box-body">

                    <div class="form-group">
                      <label>Nome da Temporada</label>
                      <input type="text" name="temporada_nome" class="form-control" value="{{$temporada->tem_nome}}">
                    </div>

                    <div class="form-group">
                      <label>Data Inicio</label>
                      <input type="date" name="data_inicio" class="form-control" value="{{ $temporada->tem_dataInicio}}">
                    </div> 

                    <div class="form-group">
                      <label>Data Fim</label>
                      <input type="date" name="data_fim" class="form-control" value="{{$temporada->tem_dataFim}}">
                    </div>

                    <!-- Esse imput hidden é importante para o metódio put funcionar-->
                    <input type="hidden" name="_method" value="put">                

                </div>

                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <!-- botão salvar -->
                    <input type="submit" class="btn btn-primary btn-flat" value="Atualizar">                        
                    <!-- /.botão salvar -->
                </div>
             
            </div>
            <!-- /.box -->                

        </form>       

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

