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
        'banner.css',
        'chamada.css',
        'contato.css',
        'doutor.css',
        'home.css',
        'menu.css',
        'rodape.css',
        'topo.css'
    ]);
    mix.styles(['small.css']);
    mix.task('inline');
});

gulp.task("inline",function(){
    return gulp.src('resources/views/includes/principal.blade.php')
        .pipe(inlinesource())
        .pipe(gulp.dest('build/'));
});