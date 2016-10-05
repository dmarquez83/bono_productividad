var  elixir = require('laravel-elixir');
/*var Promise = require('es6-promise').Promise;*/

elixir(function(mix) {
    mix.sass('app.scss')
        .styles([
        'style_pruebas_gulp.css',
        'nav.css'
    ], 'public/assets/css/app.css', 'resources/assets/css/')
        .copy('resources/assets/global/', 'public/assets/global/')
        .copy('resources/assets/layouts', 'public/assets/layouts/')
        .copy('resources/assets/pages/', 'public/assets/pages/')
        .copy('resources/assets/js/', 'public/assets/js/');
        //.scripts('resources/assets/js/admin/delete.js', 'public/assets/js/admin/delete.js')
        //.scripts('resources/assets/js/admin/app.js', 'public/assets/js/admin/app.js');

    mix.scripts('./bower_components/angular/angular.min.js', 'public/assets/js/angular.min.js');
    mix.browserSync({proxy: 'localhost:8000'});
});
