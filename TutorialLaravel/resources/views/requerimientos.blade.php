@extends('all.layouts')

@section('content')
<div class="ui container">
    <div class="ui vertical stripe segment">
        <div class="ui text container">
            <div class="ui center aligned page text container">
            <h1 class="ui header">Requisitos del Sistema</h1>
            </div>
            <br>
            <p>
                El marco de Laravel tiene algunos requisitos del sistema. Todos estos requisitos son cumplidos por la máquina virtual <b>Laravel Homestead</b> ,
                por lo que es altamente recomendable que utilice Homestead como su entorno de desarrollo local de Laravel.
            </p>
            <p>
                Sin embargo, si no está utilizando <b>Homestead</b>, deberá asegurarse de que su servidor cumpla con los siguientes requisitos:
            </p>
            <ul>
                <li>PHP >= 7.1.3</li>
                <li>OpenSSL PHP Extension</li>
                <li>PDO PHP Extension</li>
                <li>Mbstring PHP Extension</li>
                <li>Tokenizer PHP Extension</li>
                <li>XML PHP Extension</li>
                <li>Ctype PHP Extension</li>
                <li>JSON PHP Extension</li>
                <li>BCMath PHP Extension</li>
            </ul>
            <br>
            <div class="ui centered aligned page text container fluid">
                <h2>Como saber si mi sistema posee estos paquetes </h2>
            </div>
            <br>
            <p>Por defecto su sistema operativo ya trae los siguientes paquetes preinstalados</p>
            <ul>
                <li>OpenSSL PHP Extension</li>
                <li>PDO PHP Extension</li>
                <li>Mbstring PHP Extension</li>
                <li>Tokenizer PHP Extension</li>
                <li>JSON PHP Extension</li>
            </ul>
            <br>
            <p>Ahora os enseñare a saber si su Sistema posee estos paquetes </p>
            <pre><h4>Comando PHP</h4></pre>
            <p>Ahora para saber si su sistema trae por defecto php vamos hacer la siguiente consulta</p>
            <p>Vamos a abrir el cmd del sistema para abrirlo hay diferentes formas</p>
            <div class="ui segment">
                <img class="ui small left floated image" src="img/reque/simbolo.png">
                <p>Primera forma.</p>
                 <p>Abrimos la ventana de Windows y escribimos simbolo del sistema o si ya lo desean pueden esrcibir cmd estos dos comandos funcionan igual</p>
            </div>
            <div class="ui segment">
                <img class="ui small right  floated image" src="img/reque/r.png">
                <p>Segunda forma</p>
                <p> Comensando oprimiendo la tecla windows+r</p>
                <p>El cual nos va abrir la siguiente venta y escribimos cmd</p>
            </div>
            <p>Ya teniendo la ventana cmd abierta como lo muestra la siguiente imagen</p>
            <div class="ui large centered image  page">
            <img src="img/reque/cmd.png">
            </div>

            <p>Ahora vamos a escribri el siguiente comando</p>
            <ul>
                <div class="ui segment">
                    <code>php -v</code>
                </div>
            </ul>
            <p>Al oprimir enter les debera aparecer el siguiente</p>
            <img src="img/reque/version.png" class="ui big image" alt="">
            <br>
            <p>Si ya el sistema posee un <CODE> PHP </CODE> menor al requqerido puedo utilizar cualquiera de las sihuiente opciones: </p>
            <div class="ui vertical stripe quote segment">
                <div class="ui equal width stackable internally celled grid">
                    <div class="center aligned row">
                        <div class="column">
                            <h3>XAMPP</h3>
                            <a href="https://www.apachefriends.org/es/index.html">Descargar xampp</a>
                        </div>
                        <div class="column">
                            <h3>LARAGON</h3>
                            <a href="https://laragon.org">
                                Descargar Laragon
                            </a>
                        </div>
                        <div class="column">
                            <h3>YARN</h3>
                            <a href="https://yarnpkg.com/es-ES/">
                                Actulizar o Instalar PHP
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <p>Ya instalando ya sea Laragon o Xampp trabanjan desde el comando cdm de ellos,
                por defento estos programas ya traen PHP 7
            </p>
        </div>
    </div>


</div>
@stop
