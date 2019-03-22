@extends('layouts.app')

@section('content')

   <div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Perfil
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>        
        <li class="active">Perfil</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"> 

          
          <div class="box-title">
            <button class="btn btn-success">editar</button>
          </div> <br>         
       

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Rio de Janeiro</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Vendas Realizadas</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Ranking</b> <a class="pull-right">543</a>
                </li>

              </ul>
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box --> 

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border text-center">
              <h3 class="box-title">Sobre mim</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
              <strong><i class="fa fa-phone margin-r-5"></i> Telefone</strong>

              <p class="text-muted">
                (21) 2222-3333
              </p>

              <hr>
     
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Frase de inspiração</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
       

    </section>
    <!-- /.content -->
  </div>

@endsection