<nav>
    <div class="nav-wrapper indigo darken-4">
        <a href="{{ url('/') }}" class="brand-logo center fn-title">
            <i class="material-icons">assignment</i>
            F-Notes
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            @if (! Auth::check())
            <li><a href="{{ url('auth/login') }}">Inicia sesión</a></li>
            <li><a href="{{ url('auth/register') }}">Registrarse</a></li>
            @else
            <li><a href="{{ url('auth/logout') }}">Salir</a></li>
            @endif
        </ul>
    </div>
</nav>