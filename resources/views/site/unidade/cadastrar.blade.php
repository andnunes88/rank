@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Cadastrar Unidade            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Unidade</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">        

        <form action="{{route('unidade.salvar')}}" method="post">

            {{ csrf_field() }}

            <div class="box box-danger">

                <div class="box-body">

                    <div class="form-group">
                      <label>Nome da Unidade</label>
                      <input type="text" name="unidade_nome" class="form-control" placeholder="Nome da unidade" required>
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

