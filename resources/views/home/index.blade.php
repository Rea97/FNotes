@extends('layout')
@section('content')
    <div class="row">
        <div class="col s12 m12 l8 offset-l2">
            <br />
            <!--  Cuando sea la primera visita del usuario, no mostrar barra de busqueda y en su lugar
                mostrar solo la tarjeta de bienvenida -->
            @include('home.partials.search')
            <br />
            @if (count($notes) === 0)
                @include('home.partials.welcome')
            @endif
        </div>
    </div>
    @if (count($notes) > 0)
        @include('home.partials.notes')
        @include('home.partials.fixedbutton')
    @endif
    @include('home.partials.create-note')
@endsection