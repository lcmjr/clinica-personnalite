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
    mix.styles([
        'padrao.css',
        'banner.css',
        'chamada.css',
        'contato.css',
        'doutor.css',
        'home.css',
        'menu.css',
        'rodape.css',
        'topo.css'
    ]);
});
