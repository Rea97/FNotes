<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FNotes</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-wrapper light-blue darken-4">
            <a href="{{ url('/') }}" class="brand-logo center">FNotes</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ url('auth/login') }}">Inicia sesión</a></li>
                <li><a href="{{ url('auth/register') }}">Registrarse</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <br />
        @yield('content')
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
</body>
</html>