@extends('layouts.layout')

@section('content')
    <h1>Cuenta</h1>
    @include('partials.components.errors')
    <div class="row">
        <div class="col s12 l6">
            <div class="card">
                <div class="card-image">
                    <img src="{{ Auth::user()->profile_picture ?? '/imgs/default.gif' }}">
                    {{-- TODO Generar un helper que retorne la url ya procesada, deberá llevar por parametros id de usuario y nombre de foto, en caso no de enocntrar nada, retornar una ruta de imagen generica --}}
                    <span class="card-title yellow-text">{{ Auth::user()->name }}</span>
                </div>
                <div class="card-content">
                    <form action="{{ url('/account/photo') }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Foto de perfil</span>
                                <input type="file" name="photo">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div><br>
                        <button id="actualizar-imagen" type="submit" class="waves-effect waves-light btn-flat right"><i class="material-icons right">cloud</i>Actualizar imagen</button>
                    </form>
                    <form action="{{ url('/account/photo/') }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button id="eliminar-imagen" type="submit" class="waves-effect waves-light btn-flat right"><i class="material-icons right">delete</i>Eliminar imagen</button><br>
                    </form>
                </div>
            </div>
        </div>
        <div class="col s12 l6">
            <div class="card-panel teal">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
            </div>
        </div>
        <div class="col s12 l6">
            <div class="card-panel teal">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
            </div>
        </div>
    </div>
@endsection
