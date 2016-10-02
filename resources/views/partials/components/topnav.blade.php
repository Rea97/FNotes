<nav>
    <div class="nav-wrapper indigo darken-4">
        <ul id="cuenta" class="dropdown-content">
            <li><a href="{{ url('/account') }}">Mi cuenta</a></li>
            <li><a href="#!">Ajustes</a></li>
            <li class="divider"></li>
            <li><a href="{{ url('auth/logout') }}">Salir</a></li>
        </ul>
        <a href="{{ url('/') }}" class="brand-logo center fn-title">
            <i class="material-icons">assignment</i>
            F-Notes
        </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">
            <i class="material-icons">menu</i>
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            @if (! Auth::check())
                <li><a href="{{ url('auth/login') }}">Inicia sesión</a></li>
                <li><a href="{{ url('auth/register') }}">Registro</a></li>
            @else
                <li>
                    <a href="#!" data-activates="cuenta" class="dropdown-button">
                        <i class="material-icons right">account_circle</i>
                        {{ Auth::user()->name }}
                    </a>
                </li>
            @endif
        </ul>
        <ul class="side-nav" id="mobile-demo">
            @if (! Auth::check())
                <li><a href="{{ url('auth/login') }}">Inicia sesión</a></li>
                <li><a href="{{ url('auth/register') }}">Registro</a></li>
            @else
                <div class="grey-text">
                    <i class="large material-icons center">account_circle</i>
                </div>
                <div class="divider"></div>
                <li>
                    <a href="{{ url('/account') }}">Mi cuenta</a>
                </li>
                <li>
                    <a href="#!">Ajustes</a>
                </li>
                <li>
                    <a href="{{ url('auth/logout') }}">Salir</a>
                </li>
            @endif
        </ul>
    </div>
  </nav>