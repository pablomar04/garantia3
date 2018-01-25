<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Garantías Admin</title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/signin.css')!!}
</head>

<body>
<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Garantías Admin</h2>
         <label for="inputEmail" class="sr-only">Dirección de correo</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Dirección de correo" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>

    </div> <!-- /container -->

    {!!Html::script('js/jquery-3.2.1.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}

</body>

</html>
