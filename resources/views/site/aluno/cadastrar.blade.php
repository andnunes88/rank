@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Cadastrar Aluno           
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Aluno</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">        

        <form action="{{route('aluno.salvar')}}" method="post">

            {{ csrf_field() }}

            <div class="box box-danger">

                <div class="box-body">

                    <div class="form-group">
                      <label>Nome do Aluno</label>
                      <input type="text" name="aluno_nome" class="form-control" placeholder="Nome do aluno" required>
                    </div> 

                    <div class="form-group">
                      <label>CPF</label>
                      <input type="text" name="aluno_cpf" class="form-control" placeholder="Valor do aluno">
                    </div>

                    <div class="form-group">
                      <label>Telefone</label>
                      <input type="text" name="aluno_telefone" class="form-control" placeholder="Valor do aluno">
                    </div>

                    <div class="form-group">
                      <label>E-Mail</label>
                      <input type="text" name="aluno_email" class="form-control" placeholder="Valor do aluno">
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

