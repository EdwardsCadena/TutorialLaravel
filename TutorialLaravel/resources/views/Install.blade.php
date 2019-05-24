@extends('all.layouts')

@section('content')
<div class="container">
    <div class="ui center aligned page text container ">
        <h1>Instalacion de Laravel</h1>
    </div>
    <div class="ui vertical striped segment">
        <div class="ui text container">
            <div class="ui center aligned page text container ">
                <p>Laravel utiliza <b>Composer</b> para gestionar sus dependencias. Asegurate de tener
                Composer en tu sistema antes de utilzar Laravel.</p>
            </div>
            <br>
            <div class="ui center aligned page text container ">
                <h3>Instalacion de Composer</h3>
            </div>
            <div class="ui attached segment">
                <img class="ui centered medium image" style="width: 150px; height: 150px;" src="img/logo-composer.png">
                <p>Composer es un administrador de paquetes a nivel de aplicación para el lenguaje de programación PHP que proporciona
                    un formato estándar para administrar las dependencias del software PHP y las bibliotecas requeridas.
                </p>
                <div class="ui center aligned page container">
                    <a href="https://getcomposer.org/download/">
                    <button class="ui inverted green button " type="submit" > Descargar Composer</button>
                    </a>
                </div>
            </div>
            <p>
                Si por algun motivo ya instalamos <b>Composer</b> con el siguiten comando podemos saber que version tenemos.
                <ul>
                <div class="ui segment">
                    <code>composer -v</code>
                </div>
                </ul>
                Ya ejecutado el comado en el cmd nos debe salir la siguiente pantalla ya con el <b>Composer</b> installado.

            </p>
            <div class="ui huge image">
                <img src="img/composer.png">
            </div>

            <div class="ui center aligned page text container ">
                <br>
                <h2>Instalacion de Laravel global</h2>
            </div>
            <br>
            <p>Ahora vamos a instalar <b>Laravel</b> globalmente en el equipo.</p>
            <ul>
                 <div class="ui segment">
                    <code>composer global require laravel/installer</code>
                 </div>
            </ul>

            <p>Ya instalado <b>Laravel</b> en el equipo ya podremos empezar a crear nuestros proyectos.</p>

        </div>
    </div>
</div>
@stop
