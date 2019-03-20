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

    <form action="{{route('perfil.salvar')}}" method="post">

        {{ csrf_field() }}

        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Dados do Perfil</h3>
            </div>
             <div class="box-body">

                 <div class="form-group">
                     <label>Nome </label>
                     <input type="text" name="nome" class="form-control" placeholder="Nome ...">
                 </div>

                 <div class="form-group">
                     <label>CPF </label>
                     <input type="text" name="cpf" class="form-control" placeholder="Nome ...">
                 </div>

                <!-- Unidade -->
                <div class="form-group">
                      <label>Unidade</label>
                      <select class="form-control" name="unidade">
                        @foreach($unidades as $unidade)
                            <option value="{{$unidade->id}}">{{$unidade->uni_nome}}</option>
                        @endforeach
                       
                      </select>
                </div>
                <!-- /.categoria group --> 

                <!-- Categoria -->
                <div class="form-group">
                      <label>Categoria</label>
                      <select class="form-control" name="categoria">
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->cat_nome}}</option>
                        @endforeach

                      </select>
                </div>
                <!-- /.categoria group -->      			

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
                <label>Foto:</label>
                <input type="text" name="foto" class="form-control my-colorpicker1 colorpicker-element">
            </div>
            <!-- /.form group -->

            <!-- Date dd/mm/yyyy -->
            <div class="form-group">
                <label>Data de Nascimento</label>

                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="data" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                </div>
                <!-- /.input group -->
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
                <label>Um frase que te representa</label>

                <div class="input-group my-colorpicker2 colorpicker-element">
                   <input type="text" name="frase" class="form-control">

                   <div class="input-group-addon">
                      <i></i>
                  </div>
                </div>
              <!-- /.input group -->
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

