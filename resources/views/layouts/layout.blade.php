<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FNotes</title>
    @include('partials.assets.css')
</head>
<body class="grey lighten-3">
    @include('partials.components.topnav')
    <div class="container">
        <br />
        @yield('content')
    </div>
    @include('partials.components.footer')
    @include('partials.assets.scripts')
</body>
</html>