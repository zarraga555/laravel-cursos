<div class="container">
    {{ dump(request()->url()) }}
    {{ dump(request()->path()) }}
    {{ dump(request()->routeIs('blogs'))}}
    <nav class="navbar navbar-expand-lg navbar-light bg-faded ">
        <span class="navbar-brand mb-0 h1" >Logo</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                {{-- ***************************** --}}
                {{-- {{ dump(request()->url()) }}
                {{ dump(request()->path()) }}
                {{ dump(request()->routeIs('blogs'))}} --}}
                {{-- ********************************************** --}}
                {{-- ESTO INDICA SI ES TRUE O FALSE EN LA URL SI ES LA MISMA URL --}}
                {{-- <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href= "/"> Inicio </a></li>
                <li class="{{ request()->routeIs('blogs') ? 'active' : '' }}"><a href= "/blogs"> Blog </a></li>
                <li class="{{ request()->routeIs('servicio') ? 'active' : '' }}"><a href= "/servicio"> Servicio </a></li>
                <li class="{{ request()->routeIs('soporte') ? 'active' : '' }}"><a href= "/soporte"> Soporte </a></li>
                <li class="{{ request()->routeIs('contacto') ? 'active' : '' }}"><a href= "/contacto"> Contacto </a></li> --}}
                {{-- ***************************************************************************** --}}
                {{-- Para usar esta configuracion creamos un archivo en la carpeta app helpers.php --}}
                {{-- Abrimos el archivo coomposer.json y agregamos "files": ["app/helpers.php"] en --}}
                {{-- autoload, de ahi nos dirigimos a nuestra terminal y escribimos este comando  --}}
                {{-- composer dumpautoload y regarga el navegador --}}
                <li class=" nav-item {{ setActive('home') }}"><a href= "/" class="nav-link"> Inicio </a></li>
                <li class=" nav-item {{ setActive('portafolio') }}"><a href= "/portafolio" class="nav-link"> Portafolio </a></li>
                <li class=" nav-item {{ setActive('servicio') }}"><a href= "/servicio" class="nav-link"> Servicio </a></li>
                <li class=" nav-item {{ setActive('soporte') }}"><a href= "/soporte" class="nav-link"> Soporte </a></li>
                <li class=" nav-item {{ setActive('contacto') }}"><a href= "/contacto" class="nav-link"> Contacto </a></li>
                @guest
                    <li class=" nav-item {{ setActive('login') }}"><a href= "/login" class="nav-link"> Login </a></li>
                @else
                    <li class=" nav-item "><a href= "#" class="nav-link" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> Logout </a></li>
                @endguest
            </ul>
        </div>
    </nav>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
