<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FNotes</title>
    @include('partials.css')
</head>
<body class="grey lighten-3">
    @include('partials.topnav')
    <div class="container">
        <br />
        @yield('content')
    </div>
    @include('partials.footer')
    @include('partials.scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $(".button-collapse").sideNav();
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('#boton-modal').leanModal();
          });
    </script>
</body>
</html>