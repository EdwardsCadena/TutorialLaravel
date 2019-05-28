@extends('all.layouts')
@section('content')
    <div class="ui container">
        <div class="ui vertical stripe segment">
            <div class="ui text container">
                <div class="ui center aligned page text container">
                    <h1 class="ui header">Comandos de Laravel</h1>
                </div>
                <br>
                <p>
                    Entre las herramientas que Laravel nos proporciona para el desarrollo de aplicaciones se encuentra Artisan,
                    la interfaz de línea de comandos,
                    la cual es un medio para la interacción con la aplicación donde nosotros los "usuarios"
                    dan instrucciones en forma de línea de comandos.
                </p>
                <span>Para conocer el listado completo de los comandos disponibles ejecutamos en la consola dentro de la carpeta del proyecto
                la siguinete línea</span>
                <br>
                <ul>
                    <div class="ui secondary  segment">
                        <code>php artisan list</code>
                    </div>
                </ul>
                <br>
                <span>de inmediato en el cmd nos mostrara el listado completo de comandos que trae Laravel</span>
                <div class="sixteen wide column">
                    <img class="ui middle aligned image" src="img/artisanlist.png">
                </div>
                <div class="ui divider"></div>
                <div class="ui center aligned page text container">
                    <h3 class="ui header">Comando Make</h3>
                </div>
                <span>Make es una herramienta la cual nos permite crear o generar ciertos tipos de elementos tales
                como <b>controladores, seeder, auth, modelos etc... </b></span>
                <span>A continuacion dejo todos los posibles elementos que podemos crear</span>
                <div class="sixteen wide column">
                    <img class="ui middle aligned image" src="img/make.png">
                </div>
                <div class="ui divider"></div>
                <div class="ui center aligned page text container">
                    <h3 class="ui header">Comandos de uso común</h3>
                </div>
                <div class="ui segment">
                    <ul>
                        <li>Servidor Laravel</li>
                    </ul>
                    <span>Laravel por defecto trae su propio servidor el cual debemos encender antes para correr nuestra aplicaion,
                        lo podemos encender con el siguiente comando</span>

                    <ul>
                        <div class="ui secondary  segment">
                            <code>php artisan serve</code>
                        </div>
                    </ul>
                    <span>El cual al ejecutar ese comando nos saldra la siguiente linea</span>
                    <ul>
                        <div class="ui secondary  segment">
                            <code>Laravel development server started: http://127.0.0.1:8000
                            </code>
                        </div>
                    </ul>
                    <span>Nos indicara que el servidor ya se esta ejecutando.</span>
                    <span>Para detener el servidor debemos precionar en el cmd <b>Ctrl+C</b></span>
                </div>
                <br>
                <div class="ui segment">
                    <ul>
                        <li>Listado Completo de Rutas</li>
                    </ul>
                    <span>Para conocer que Rutas tenemos o estamos utilizando en el proyecto podemos utilizar cualquiera de
                    los siguientes comandos</span>
                    <ul>
                        <div class="ui secondary  segment">
                            <code>php artisan route:list</code>
                            <code>php artisan r:l</code>
                        </div>
                    </ul>
                    <span>Como resultado nos mostrará un listado de todas las rutas de la aplicación con la información sobre
                        el método HTTP, la URI, la acción, el nombre y los middleware definidos para cada ruta</span>
                    <br>
                    <div class="sixteen wide column">
                        <img class="ui middle aligned image" src="img/rutas.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
