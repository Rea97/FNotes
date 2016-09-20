var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles(['materialize/materialize.min.css',
        'materialize/icon.css',
        'main.css'
    ], 'public/css/app.css');
});

elixir(function(mix) {
    mix.scripts(['jquery.js',
        'main.js',
        'materialize.min.js'
    ], 'public/js/app.js');
});

elixir(function(mix) {
    mix.version([
        'css/app.css',
        'js/app.js'
    ]);
});