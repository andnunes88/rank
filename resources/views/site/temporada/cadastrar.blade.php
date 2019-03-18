@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Cadastrar Temporada            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Temporada</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">        

        <form action="{{route('temporada.salvar')}}" method="post">

            {{ csrf_field() }}

            <div class="box box-danger">

                <div class="box-body">

                    <div class="form-group">
                      <label>Nome da Temporada</label>
                      <input type="text" name="temporada_nome" class="form-control" placeholder="Nome da Temporada">
                    </div>

                    <div class="form-group">
                      <label>Data Inicio</label>
                      <input type="date" name="data_inicio" class="form-control" placeholder="Data de inicio">
                    </div> 

                    <div class="form-group">
                      <label>Data Fim</label>
                      <input type="date" name="data_fim" class="form-control" placeholder="Data Fim">
                    </div>              

                </div>

                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <!-- botão salvar -->
                    <input type="submit" class="btn btn-primary btn-flat" value="Salvar">                        
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

