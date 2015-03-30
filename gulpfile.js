var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */
var bower = '/vendor/bower/';

elixir(function(mix) {

    mix.styles([
        'materialize/bin/materialize.css'
    ], 'public/css/vendor.css', 'vendor/bower');


    mix.scripts([
        'jquery/dist/jquery.js',
    	'gmaps/gmaps.js',
    	'humane/humane.js',
    	'skeuocard/javascripts/skeuocard.js',
    	'materialize/bin/materialize.js'
    ], 'public/js/main.js', 'vendor/bower/');

    mix.sass('app.sass');

});
