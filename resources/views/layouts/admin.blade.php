<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Garantías Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{URL::to('/usuario/create')}}">Nuevo usuario</a></li>
            <li><a href="{{URL::to('/usuario')}}">Mostrar usuarios</a></li>            
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Orden <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{URL::to('/orden/create')}}">Nueva orden</a></li>
            <li><a href="{{URL::to('/orden')}}">Mostrar ordenes</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reclamo<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Nuevo Reclamo</a></li>
            <li><a href="#">Mostrar reclamos</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lote<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Nuevo lote</a></li>
            <li><a href="#">Mostrar lotes</a></li>
          </ul>
        </li>
        <li><a href="#">Desvío</a></li>
        <li><a href="#">Rechazo</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Consultas</a></li>
        <li><a href="#">Garantia</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div id="wrapper">

    <div class="container">

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>
    </div>

    {!!Html::script('js/jquery-3.2.1.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}

</body>

</html>

