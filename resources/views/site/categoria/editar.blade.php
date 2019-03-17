@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Editar categoria           
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">categoria</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">        

            <form action="{{route('categoria.atualizar', $categoria->id)}}" method="post">

                {{ csrf_field() }}

                <div class="box box-danger">

                    <div class="box-body">

                        <div class="form-group">
                          <label>Nome da categoria</label>
                          <input type="text" name="categoria_nome" class="form-control" placeholder="Nome da categoria" value="{{$categoria->cat_nome}}">
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

