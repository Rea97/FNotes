@extends('layout')

@section('content')
    <div class="row">
        <div class="col s12 m12 l8 offset-l2">
            <br />
            <!--  Cuando sea la primera visita del usuario, no mostrar barra de busqueda y en su lugar
                mostrar solo la tarjeta de bienvenida -->
            @include('home.partials.search')
            <br />
            @if (count($notes) === 0 && !$search)
                @include('home.partials.welcome')
            @elseif (count($notes) === 0 && $search)
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel yellow darken-2">
                            <span class="white-text">
                                <h5>
                                    <i>No se han encontrado resultados, intenta ser menos especifico en los parametros de tú búsqueda, ó si lo prefieres, puedes <a href="{{ url('/home') }}">Ver todas las notas</a></i>
                                </h5>
                            </span>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @if (count($notes) > 0)
        @include('home.partials.notes')
        @include('home.partials.fixedbutton')
    @endif
    @include('home.partials.create-note')
@endsection