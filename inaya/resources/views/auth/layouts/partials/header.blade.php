<header class="header" id="jump">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="{{url('/')}}"><img src="images/Logo.png" alt="" width="260" /></a> </div>
        <div class="collapse navbar-collapse hidden-xs">
          <a href="https://weather.com/es-ES/tiempo/hoy/l/37.21,-7.40?par=google" style="position:absolute; margin-top:1em;margin-left:10em;">
            <label id="ubicacion"></label> a <label id="temperatura-valor"> </label><img id="icono-animado" src="" alt="" height="128" width="128">
          </a>
          <ul class="nav navbar-nav navbar-right" style="margin-top: 3.4em; display:inline">
              <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="formulario.html">Locales</a></li>
              <li><a href="{{route('como_llegar') }}">Como llegar</a></li>
              <li><a href="formulario.html">Eventos</a></li>
              @if (Route::has('login'))
                      @auth
                          <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                      @else
                          <li><a href="{{ route('login') }}">Iniciar sesion</a></li>
                      @endauth
              @endif
          </ul>
        </div>
      </div>
    </nav>
  </header>