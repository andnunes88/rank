@extends('layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Categorias			
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Categorias</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content"> 
				
		<div class="box">
			<div class="box-header">
				<a href="{{route('categoria.cadastrar')}}"><div class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Novo</div></a>
			</div>
			<!-- /.box-header -->
			<div class="box-body no-padding">
				<table class="table table-striped">
					<tbody>
						<tr>
							<th>Categorias</th>
							<th style="text-align: center"><i class="glyphicon glyphicon-cog"></i></th>
						</tr>

						@foreach ($categorias as $categoria)
						
						    <tr>
							    <td>{{$categoria->cat_nome}}</td>

								<td style="text-align: center">
									<a href="{{route('categoria.editar', $categoria->id)}}"> <div class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a> 
									<a href="javascript: if(confirm('Apagar esse registro?')){ window.location.href = '{{ route('categoria.excluir', $categoria->id) }}' }"> <div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div></a>
                                </td>
						   </tr>

						@endforeach 

					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->	

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection