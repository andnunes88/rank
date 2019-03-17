@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Editar Unidade           
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Unidade</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">     

        <form action="{{route('unidade.atualizar', $unidade->id)}}" method="post">

            {{ csrf_field() }}

            <div class="box box-danger">

                <div class="box-body">

                    <div class="form-group">
                      <label>Nome da Unidade</label>
                      <input type="text" name="unidade_nome" class="form-control" placeholder="Nome da unidade" value="{{$unidade->uni_nome}}">
                    </div> 

                    <!-- Esse imput hidden é importante para o metódio put funcionar-->
                    <input type="hidden" name="_method" value="put">             

                </div>
                <!-- /.box-body -->

                <div class="box-footer text-center">
                    <!-- botão salvar -->
                    <button type="submit" class="btn btn-primary btn-flat">Salvar</button>            
                    <!-- /.botão salvar -->                    
                </div>
                <!-- /.box-footer --> 
             
            </div>
            <!-- /.box -->   
            

        </form>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

