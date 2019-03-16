@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Ranking
			<small>West group</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
			<li class="active">Here</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <!-- Content Header (Page header) -->

        <div class="col-md-12">

        	<div class="box box-danger">
        		<div class="box-header">
        			<h3 class="box-title">Dados do Perfil</h3>
        		</div>
        		<div class="box-body">

        			<div class="form-group">
	                  <label>Nome </label>
	                  <input type="text" class="form-control" placeholder="Nome ...">
	                </div>

	                <div class="form-group">
	                  <label>CPF </label>
	                  <input type="text" class="form-control" placeholder="Nome ...">
	                </div>
					
					<!-- Categoria dd/mm/yyyy -->
	                <div class="form-group">
	                  <label>Categoria </label>
	                  <input type="text" class="form-control" placeholder="Nome ...">
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
        				<input type="text" class="form-control my-colorpicker1 colorpicker-element">
        			</div>
        			<!-- /.form group -->

        			<!-- Date dd/mm/yyyy -->
        			<div class="form-group">
        				<label>Data de Nascimento</label>

        				<div class="input-group">
        					<div class="input-group-addon">
        						<i class="fa fa-calendar"></i>
        					</div>
        					<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
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
        					<input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
        				</div>
        				<!-- /.input group -->
        			</div>
        			<!-- /.form group -->        			

        			<!-- time Picker -->
        			<div class="bootstrap-timepicker">
        				<div class="form-group">
        					<label>Unidade</label>

        					<div class="input-group">
        						<input type="text" class="form-control timepicker">

        						<div class="input-group-addon">
        							<i class="fa fa-clock-o"></i>
        						</div>
        					</div>
        					<!-- /.input group -->
        				</div>
        				<!-- /.form group -->
        			</div>

        			<!-- frase -->
        			<div class="form-group">
        				<label>Um frase que te representa</label>

        				<div class="input-group my-colorpicker2 colorpicker-element">
        					<input type="text" class="form-control">

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
			<button type="button" class="btn btn-block btn-primary btn-flat">Salvar</button>        	
        	<!-- /.botão salvar -->

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

