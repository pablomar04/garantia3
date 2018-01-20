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