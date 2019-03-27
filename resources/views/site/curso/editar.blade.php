@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Editar Curso            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Editar Curso</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">        

        <form action="{{route('curso.atualizar', $curso->id)}}" method="post">

            {{ csrf_field() }}

            {{ method_field('PUT') }}

            <div class="box box-danger">

                <div class="box-body">

                    <div class="form-group">
                      <label>Nome do Curso</label>
                      <input type="text" name="curso_nome" class="form-control" placeholder="Nome do curso" value="{{$curso->cur_nome}}" required>
                    </div> 

                    <div class="form-group">
                      <label>Valor do Curso</label>
                      <input type="text" name="curso_valor" class="form-control" placeholder="Valor do curso" value="{{$curso->cur_valor}}">
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

