
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{!! $titulo !!}</title>
    <link rel="icon" href="img/laravel.ico">
</head>
<body>

<div class="ui attached orange inverted stackable  menu">
    <div class="ui container">
        <a class="item" href="{{route('route.home')}}">
            <i class="laravel icon"></i> Inicio
        </a>
        <a class="item" href="{{route('route.requisitos')}}">
            <i class="grid exclamation triangle icon"></i> Requerimientos
        </a>
        <a class="item" href="{{route('route.instalacion')}}">
            <i class="download icon"></i> Instalacion
        </a>
        <div class="ui simple dropdown item">
            Tutoriales
            <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item" href="{{route('route.comandos')}}"><i class="edit icon"></i> Comandos CMD de laravel</a>
                <a class="item"><i class="globe icon"></i> Crear un proyecto</a>
                <a class="item"><i class="settings icon"></i> Routes en laravel</a>
                <a class="item"><i class="settings icon"></i> Controladores</a>
            </div>
        </div>

    </div>
</div>
<br>
    @yield('content')


<link type="text/css" rel="stylesheet" href="css/app.css">
<link rel="stylesheet" type="text/css" href="Semantic-UI/semantic.min.css">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="Semantic-UI/semantic.min.js"></script>
</body>
</html>

