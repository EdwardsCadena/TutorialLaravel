@extends('all.layouts')
@section('content')
<div class="ui container">
   <div class="ui vertical stripe segment">
      <div class="ui text container">
          <div class="ui center aligned page text container">
              <h1 class="ui header">Creacion de Proyectos</h1>
          </div>
          <span>Para crear un proyecto en Laravel hay dos tipos de comandos:</span>
          <br>
          <br>
          <ul>
              <li>Creacion con composer</li>
          </ul>
          <ul>
              <div class="ui secondary segment">
                  <code>composer create-project laravel/laravel nombre.del.proyecto</code>
              </div>
          </ul>
          <span>Con este linea de comando se va a crear el proyecto, sin embargo, este proceso puede durar cierto tiempo
          lo cual puede retrasar nuestro progreso sobre la aplicacion. </span>
          <span> Por otro lado, este comando nos permitira instalar la version que queramos de Laravel en nuestro proyecto con la siguiente extencion </span>
          <ul>
              <div class="ui secondary segment">
                  <code>composer create-project laravel/laravel nombre.del.proyecto "5.3.*"</code>
              </div>
          </ul>
          <span>Ya con la extecion <b>"5.3.*"</b> instalara la version deseada por ustedes </span>
          <br>
          <br>
          <ul>
              <li>Creacion con Laravel</li>
          </ul>
          <span>Como lo indicado en el proceso de instalacion, cuando instalamos laravel de forma global
          en el equipo. Permite que a la hora de crear un proyecto sea de mayor rapidez.</span>
          <ul>
              <div class="ui secondary segment">
                  <code>laravel new nombre.proyecto</code>
              </div>
          </ul>
          <span>Sin embargo, con este comando instalamos la ultima version que este manejando <b>Laravel</b> en el momento</span>
          <div class="ui divider"></div>
          <div class="ui piled segment">
              <p>Por otro lado, algo clave para desarrollar eficientemente es tener un editor de texto o IDE bien configurado que nos
                  facilite el trabajo de escribir el código de nuestra aplicación. Hay dos grandes grupos: IDE (Entorno de Desarrollo Integrado)
                  y editores de texto. La diferencia principal es que los primeros vienen por defecto con múltiples herramientas como: autocompletado
                  inteligente, resaltado de sintaxis, sistema de control de versiones, debugger, entre otras herramientas configuradas y listas para
                  empezar a trabajar.  En cambio, los editores de texto son más ligeros y no vienen
                  con todas las herramientas u opciones listas por defecto, sino que debes instalarlas y configurarlas por medio de plugins y extensiones.</p>
              <p>Entre los IDEs para PHP tenemos a: PHPStorm, Zend Studio, Eclipse, NetBeans, Aptana Studio, etc.
                  Entre los editores de texto están: Sublime Text, Atom, Visual Studio Code, NotePad++, etc. </p>
          </div>
      </div>
   </div>
</div>
@stop
