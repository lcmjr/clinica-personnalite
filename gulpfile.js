var elixir = require('laravel-elixir'),
    gulp = require('gulp'),
    inlinesource = require('gulp-inline-source');

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
        'topo.css',
        'banner.css',
        'chamada.css',
        'contato.css',
        'doutor.css',
        'home.css',
        'menu.css',
        'rodape.css',
        'blog.css',
        'galeria.css'
    ]);
    mix.styles(['inline.css'],'public/css/inline.css');
    mix.scripts(['banner.js'],'public/js/banner.js');
    mix.scripts(['contato.js'],'public/js/contato.js');
    mix.scripts(['galeria.js'],'public/js/galeria.js');
    mix.scripts(['visible.js','padrao.js'],'public/js/padrao.js');
});

gulp.task("inline",function(){
    return gulp.src('resources/views/includes/principal.blade.php')
        .pipe(inlinesource())
        .pipe(gulp.dest('build/'));
});