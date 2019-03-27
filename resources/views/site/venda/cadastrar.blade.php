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
                     <input type="text" name="nome" class="form-control" placeholder="Nome do aluno" required>
                 </div>

                 <div class="form-group">
                     <label>Data </label>
                     <input type="date" name="email" class="form-control" required>
                 </div> 

                  <div class="form-group">
                     <label>Total </label>
                     <input type="text" name="total" class="form-control" placeholder="Total da venda" required>
                 </div>


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
