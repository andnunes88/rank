@extends('layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Categorias
			<small>Registradas</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Categorias</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->       

        <div class="row">
            
            <div class="col-md-6">
                <a href="{{route('categoria.cadastrar')}}"><div class="btn btn-success">Novo</div></a>
            </div>
            <br> <br>
            
        </div>     
        
		<div class="row">	
		
			<div class="col-md-6">
				
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Westgroup</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<table class="table table-condensed">
							<tbody>
								<tr>
									<th style="width: 10px">#</th>
									<th>categorias</th>
									<th>Ação</th>
								</tr>

								@foreach ($categorias as $categoria)
								
								    <tr>
									   <td>{{$categoria->id}}</td>
									   <td>{{$categoria->cat_nome}}</td>

    									<td>
    										<a href="{{route('categoria.editar', $categoria->id)}}"> <div class="btn btn-warning">Editar</div></a> 
    										<a href="{{route('categoria.excluir', $categoria->id)}}"> <div class="btn btn-danger"> Excluir</div></a>
                                        </td>
								   </tr>

								@endforeach 

							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		
		</div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection