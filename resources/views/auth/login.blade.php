@extends('layout')
@section('content')
    <div class="row">
        <div class="col s12 l6 offset-l3">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel blue-grey darken-1 white-text">
                        <form method="POST" action="{{ url('/auth/login') }}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="input-field col l12 s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input
                                        id="email"
                                        type="email"
                                        name="email"
                                        class="validate"
                                        value="{{ old('email') }}">
                                    <label for="email">Email</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input
                                        id="pass"
                                        type="password"
                                        name="password">
                                    <label for="pass">Password</label>
                                </div>
                            </div>
                            <div>
                                <p>
                                  <input type="checkbox" id="remember" name="remember" />
                                  <label for="remember">Remember me</label>
                                </p>
                            </div>
                            <div>
                                <button type="submit" class="waves-effect waves-light btn">
                                    Sign in!
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection