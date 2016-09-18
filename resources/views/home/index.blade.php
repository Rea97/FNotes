@extends('layout')
@section('content')
    <div class="row">
        <div class="col s12 m12 l8 offset-l2">
            <br />
            <!--  Cuando sea la primera visita del usuario, no mostrar barra de busqueda y en su lugar
                mostrar solo la tarjeta de bienvenida -->
            <nav class="white">
                <div class="nav-wrapper">
                  <form action="note" method="GET">
                    <div class="input-field">
                        <!-- En placeholder poner frases aleatorias de bienvenida como facebook -->
                        <input name="search" id="search" type="search" placeholder="Realiza una busqueda" autofocus>
                        <label for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                  </form>
                </div>
            </nav>
            <br />

            @include('home.partials.welcome')
            @include('home.partials.create-note')
        </div>
    </div>
@endsection