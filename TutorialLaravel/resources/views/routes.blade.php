@extends('all.layouts')
@section('content')
<div class="ui vertical stripe segment">
    <div class="ui text container">
        <div class="ui center aligned page text container">
            <h1>Rutas</h1>
        </div>
        <div class="ui segment">
            <img class="ui small left floated image" src="img/web.png">
            <p>Las rutas de nuestra aplicación aplicación se tienen que definir en el fichero routes/web.php. Este es el punto centralizado para la
            definición de rutas y cualquier ruta no definida en este fichero no será válida, generado una excepción (lo que devolverá un error 404).</p>
        </div>
        <h2>Rutas y sus distintos metodos</h2>
        <p>Las rutas, además de definir la URL de la petición, también indican el método con el cual se ha de hacer dicha petición.
            Los dos métodos más utilizados y que empezaremos viendo son las peticiones tipo GET y tipo POST.
            Por ejemplo, para definir una petición tipo GET tendríamos que añadir el siguiente código a nuestro fichero routes.php:</p>
       <div class="ui secondary segment">
        <texttarea >
        <p>Route::get('/', function()</p>
            <p> {</p>
            <p> return '¡Hola mundo!';</p>
            <p> });</p>
        </texttarea>
       </div>
        <p>Para definir una ruta tipo POST se realizaría de la misma forma pero cambiando el verbo GET por POST:</p>
        <div class="ui secondary segment">
            <texttarea >
                <p>Route::post('/', function()</p>
                <p> {</p>
                <p> return '¡Hola mundo!';</p>
                <p> });</p>
            </texttarea>
        </div>
        <p>De la misma forma podemos definir rutas para peticiones tipo PUT o DELETE cambiando el verbo GET o POST por alguno de los ya mencionados</p>
        <h3>Rutas Basicas</h3>
    </div>
</div>

@stop
