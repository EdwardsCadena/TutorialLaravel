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
