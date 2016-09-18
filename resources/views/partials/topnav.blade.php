<nav>
    <div class="nav-wrapper indigo darken-4">
        <ul id="cuenta" class="dropdown-content">
            <li><a href="#!">Cuenta</a></li>
            <li><a href="#!">two</a></li>
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
                    Menú
                </a>
            </li>
            @endif
        </ul>
        <ul class="side-nav" id="mobile-demo">
            @if (! Auth::check())
            <li><a href="{{ url('auth/login') }}">Inicia sesión</a></li>
            <li><a href="{{ url('auth/register') }}">Registro</a></li>
            @else
            <li><a href="#!">Cuenta</a></li>
            <li><a href="#!">two</a></li>
            <li><a href="{{ url('auth/logout') }}">Salir</a></li>
            @endif
        </ul>
    </div>
  </nav>