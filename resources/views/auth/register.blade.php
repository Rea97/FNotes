@extends('layout')
@section('content')
    <div class="row">
        <div class="col s12 l6 offset-l3">
            <div class="row">
                <div class="col s12 m12">
                    @include('partials.errors')
                    <div class="card-panel blue-grey darken-1 white-text">
                        <form method="POST" action="/auth/register">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" class="validate">
                                        <label for="name">Nombre</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" class="validate">
                                    <label for="email">E-mail</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="password" type="password" name="password" class="validate">
                                    <label for="password">Contraseña</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="password" type="password" name="password_confirmation" class="validate">
                                    <label for="password">Confirma la contraseña</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6 m10 l10 offset-s3 offset-m1 offset-l1">
                                    <button id="register" type="submit" class="btn waves-effect waves-light yellow darken-2">
                                        Unete!
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection