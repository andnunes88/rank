@extends('layouts.app')

@section('content')
<style>
	.img-ranking{
		width: 25px;
		height: 25px;
		border-radius: 50%;
	}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Ranking Geral
			
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Ranking</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">

		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Vendedores </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tbody><tr>
                  <th style="width: 10px">Posição</th>
                  <th>Nome</th>
                  <th>Meta</th>
                  <th style="width: 40px">%</th>
                </tr>

                <tr>
                  <td>2.</td>
                  <td>
					<img src="dist/img/user2-160x160.jpg" class="img-ranking" alt="imgagem do vendedor">
                  Ciclano</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar bg-light-blue" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">70%</span></td>
                </tr>

                <tr>
                  <td>1.</td>
                  <td>
					<img src="dist/img/user2-160x160.jpg" class="img-ranking" alt="imgagem do vendedor">
                  Fulano</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar bg-light-blue" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">55%</span></td>
                </tr>

                <tr>
                  <td>3.</td>
                  <td>
					<img src="dist/img/user2-160x160.jpg" class="img-ranking" alt="imgagem do vendedor">
                  Beltrano</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
