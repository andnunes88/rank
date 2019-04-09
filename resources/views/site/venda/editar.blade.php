@extends('layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Editar Venda
			
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Editar Vendedor</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">      

    <form action="{{route('venda.atualizar', $venda->id)}}" method="post">

        {{ csrf_field() }}

        {{ method_field('PUT') }}

        <div class="box box-danger">

             <div class="box-body">

                 <div class="form-group">
                     <label>Aluno </label>
                     <input type="text" name="aluno_nome" class="form-control" placeholder="Nome do aluno" required value="{{$venda->ven_aluno}}">
                 </div>

                 <div class="form-group">
                     <label>Telefone </label>
                     <input type="text" name="aluno_telefone" class="form-control" placeholder="Telefone do aluno" required value="{{$venda->ven_telefone}}">
                     
                 </div>

                 <div class="form-group">
                     <label>E-mail </label>
                     <input type="email" name="aluno_email" class="form-control" placeholder="E-mail do aluno" required value="{{$venda->ven_email}}">
                 </div> 

                 <div class="form-group">
                     <label>Valor </label>
                     <input type="text" name="aluno_valor" class="form-control" placeholder="Total da venda" required value="{{$venda->ven_valor}}">
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
