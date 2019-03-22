@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Perfil
			
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Perfil</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">      

    <form action="{{route('perfil.atualizar', $usuario->id)}}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

         {{ method_field('PUT') }}

        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Dados do Perfil</h3>
            </div>
             <div class="box-body">

                 <div class="form-group">
                     <label>Nome </label>
                     <input type="text" name="nome" class="form-control" value="{{$usuario->name}}">
                 </div>

                 <div class="form-group">
                     <label>CPF </label>
                     <input type="text" name="cpf" class="form-control" value="{{$usuario->cpf}}">
                 </div>

                 <div class="form-group">
                     <label>Nova Senha </label>
                     <input type="password" name="senha" class="form-control" value="">                     
                 </div>                    			

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Mais Informações</h3>
            </div>        		

            <div class="box-body">

            <!-- foto Picker -->
            <div class="form-group">
                  <label for="exampleInputFile">Foto do Perfil</label>
                  <input type="file" name="imagem">

                  <p class="help-block">Escolha uma foto para seu perfil</p>
            </div>
            <!-- /.form group -->

            <!-- phone mask -->
            <div class="form-group">
                <label>Telefone:</label>

                <div class="input-group">
                   <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" name="telefone" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group --> 

            <!-- frase -->
            <div class="form-group">
                  <label>Uma Frase que te inspira</label>
                  <textarea name="frase" class="form-control" rows="3" placeholder="Digite uma frase que te inspira"></textarea>
                </div>
            <!-- /.form frase -->

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->       

        <!-- botão salvar -->
        <button type="submit" class="btn btn-block btn-primary btn-flat">Salvar</button>        	
        <!-- /.botão salvar -->

    </form>  

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

