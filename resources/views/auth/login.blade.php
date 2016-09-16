@extends('layout')
@section('content')
    <div class="row">
        <div class="col s12 m10 l8 offset-l2">
            <div class="card-panel blue-grey darken-1">
                <form method="POST" action="{{ url('/auth/login') }}">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="input-field col l12 s-l1">
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
                          <label for="remember">Recordarme</label>
                        </p>
                    </div>
                    <div>
                        <button type="submit" class="waves-effect waves-light btn">button</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection