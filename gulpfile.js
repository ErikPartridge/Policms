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

elixir(function(mix) {

    mix.sass('app.sass');

    mix.styles([
    	'uikit/cssuikit.css',
        'animsition/dist/css/animsition.css',
    	'app.css'
    ], 'public/css/main.css', 'vendor/bower');

    mix.scripts([
        'jquery/dist/jquery.js',
    	'gmaps/gmaps.js',
    	'humane/humane.js',
    	'skeuocard/javascripts/skeuocard.js',
    	'uikit/js/uikit.js',
        'animsition/dist/js/jquery.animsition.js'
    ], 'public/js/main.js', 'vendor/bower/');

    mix.styles([
        'bootstrap/css/bootstrap.css',
        'bootstrap-wysiwyg/style.css'
    ], 'public/css/text-editor.css', 'vendor/bower/');

    mix.scripts([
        'jquery/dist/jquery.js',
        'bootstrap/js/bootstrap.js',
        'bootstrap-wysiwyg/js/bootstrap-wysiwyg.js'
    ], 'public/js/text-editor.js', 'vendor/bower/');
});
