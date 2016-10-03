@extends('layouts.layout')

@section('content')
    <h1>Cuenta</h1>
    <div class="row">
        <div class="col s12 l6">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('/imgs/profile.jpg') }}">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
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
