@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Cadastrar categoria           
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">categoria</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">        

        <form action="{{route('categoria.salvar')}}" method="post">

            {{ csrf_field() }}

            <div class="box box-danger">

                <div class="box-body">

                    <div class="form-group">
                      <label>Nome da categoria</label>
                      <input type="text" name="categoria_nome" class="form-control" placeholder="Ex: Diamante" required>
                    </div>  

                    <div class="form-group">
                      <label>Meta da categoria</label>
                      <input type="text" name="categoria_meta" class="form-control" placeholder="Ex: 680.000,00" required>
                    </div>             

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

