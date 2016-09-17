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
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" class="validate">
                                        <label for="name">Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" class="validate">
                                    <label for="email">E-mail</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" name="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" name="password_confirmation" class="validate">
                                    <label for="password">Confirm password</label>
                                </div>
                            </div>
                            <button id="register" type="submit" class="btn waves-effect waves-light">
                                Sign up!
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection