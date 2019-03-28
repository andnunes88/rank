@extends('layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Registrar Nova Venda
			
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Vendedor</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">      

    <form action="{{route('venda.salvar')}}" method="post">

        {{ csrf_field() }}

        <div class="box box-danger">

             <div class="box-body">

                 <div class="form-group">
                     <label>Aluno </label>
                     <input type="text" name="aluno_nome" class="form-control" placeholder="Nome do aluno" required>
                 </div>

                 <div class="form-group">
                     <label>Telefone </label>
                     <input type="text" name="aluno_telefone" class="form-control" placeholder="Telefone do aluno" required>
                     
                 </div>

                 <div class="form-group">
                     <label>E-mail </label>
                     <input type="email" name="aluno_email" class="form-control" placeholder="E-mail do aluno" required>
                 </div>           

                <div class="input-group">
                    <span class="input-group-addon">R$</span>
                    <input type="text" class="form-control" name="aluno_valor" placeholder="Preço da venda" required>
                    <span class="input-group-addon">.00</span>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->      

        <!-- botão salvar -->
        <button type="submit" class="btn btn-block btn-primary btn-flat">Registrar Venda</button>        	
        <!-- /.botão salvar -->

    </form>  

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
