@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Editar Usuário			
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Usuário</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">      

    <form action="{{route('vendedor.atualizar', $vendedor->id)}}" method="post">

        {{ csrf_field() }}

        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Dados do Perfil</h3>
            </div>
             <div class="box-body">

                 <div class="form-group">
                     <label>Nome </label>
                     <input type="text" name="nome" class="form-control" placeholder="Nome ..." value="{{$vendedor->name}}">
                 </div>

                 <div class="form-group">
                     <label>CPF </label>
                     <input type="text" name="cpf" class="form-control" placeholder="Nome ..." value="{{$vendedor->cpf}}">
                 </div>

                <!-- Tipo -->
                <div class="form-group">
                      <label>Tipo de usuário</label>
                      <select class="form-control" name="tipo">                        
                            <option value="">Escolher Tipo</option>                        
                            <option value="vendedor">Gerente</option>                 
                            <option value="gerente">Vendedor</option>                                    
                      </select>
                </div>
                <!-- /.tipo group -->              

                <!-- Unidade -->
                <div class="form-group">
                      <label>Unidade</label>
                      <select class="form-control" name="unidade">
                        <option value="">Escolher Unidade</option>
                        @foreach($unidades as $unidade)
                            <option value="{{$unidade->id}}" {{ isset($vendedor->unidade_id) &&  ($vendedor->unidade_id == $unidade->id) ? 'selected' : ''}}> {{$unidade->uni_nome}}</option>
                        @endforeach
                       
                      </select>
                </div>
                <!-- /.categoria group --> 

                <!-- Categoria -->
                <div class="form-group">
                      <label>Categoria</label>
                      <select class="form-control" name="categoria">
                        <option value="">Escolher Categoria</option>

                        @foreach($categorias as $categoria)
                           
                            <option value="{{$categoria->id}}" {{ isset($vendedor->categoria_id) &&  ($vendedor->categoria_id == $categoria->id) ? 'selected' : ''}}> {{$categoria->cat_nome}}</option>

                        @endforeach

                      </select>
                </div>
                <!-- /.categoria group -->  

                <!-- Esse imput hidden é importante para o metódio put funcionar-->
                <input type="hidden" name="_method" value="put">      			

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->      

        <!-- botão salvar -->
        <button type="submit" class="btn btn-block btn-primary btn-flat">Atualizar</button>        	
        <!-- /.botão salvar -->

    </form>  

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

