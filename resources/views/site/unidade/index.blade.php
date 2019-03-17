@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="min-height: 1126.3px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Unidade
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
			<li class="active">Unidade</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="box">
			<div class="box-header">
				<a href="{{route('unidade.cadastrar')}}"><div class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Novo</div></a>
			</div>
			<!-- /.box-header -->
			<div class="box-body no-padding">
				<table class="table table-striped">
					<tbody>
						
						<tr>
							<th>Nome</th>
							<th style="text-align: center"><i class="glyphicon glyphicon-cog"></i></th>
						</tr> 

						@foreach($unidades as $unidade)           
							<tr>
								<td>{{$unidade->uni_nome}}</td>
								<td style="text-align: center">
									<a href="{{route('unidade.editar', $unidade->id)}}"> <div class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a> 
									<a href="javascript: if(confirm('Apagar esse registro?')){ window.location.href = '{{ route('unidade.excluir', $unidade->id) }}' }"> <div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div></a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>

	</section>
	<!-- /.content -->
</div>

@endsection