<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FNotes</title>
    @include('partials.css')
</head>
<body>
    @include('partials.topnav')
    <div class="container">
        <br />
        @yield('content')
    </div>
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>