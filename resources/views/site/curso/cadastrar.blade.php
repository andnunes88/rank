@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Cadastrar Curso            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Curso</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">        

        <form action="{{route('curso.salvar')}}" method="post">

            {{ csrf_field() }}

            <div class="box box-danger">

                <div class="box-body">

                    <div class="form-group">
                      <label>Nome do Curso</label>
                      <input type="text" name="curso_nome" class="form-control" placeholder="Nome do curso" required>
                    </div> 

                    <div class="form-group">
                      <label>Valor do Curso</label>
                      <input type="text" name="curso_valor" class="form-control" placeholder="Valor do curso">
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

