@extends('layouts.app')

@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Cadastro de Novo vendedor
			
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Vendedor</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">      

    <form action="{{route('vendedor.salvar')}}" method="post">

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

                  <div class="form-group">
                     <label>Senha Padrão </label>
                     <input type="text" name="senha" class="form-control" placeholder="mudar@123">
                 </div>               

                <!-- Unidade -->
                <div class="form-group">
                      <label>Unidade</label>
                      <select class="form-control" name="unidade">
                        <option value="">Escolher Unidade</option>
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
                        <option value="">Escolher Categoria</option>
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

        <!-- botão salvar -->
        <button type="submit" class="btn btn-block btn-primary btn-flat">Salvar</button>        	
        <!-- /.botão salvar -->

    </form>  

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

