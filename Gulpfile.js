var  elixir = require('laravel-elixir');
var gulp = require('gulp');/*var Promise = require('es6-promise').Promise;*/
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');

var dest = {
    css: 'public/dist/css/',
    js: 'public/dist/js/',
    images: 'public/dist/images/',
    views: 'public/dist/views'
};

var bowerCss = [
    'bower_components/AlertifyJS/build/css/alertify.css',
    'bower_components/AlertifyJS/build/css/themes/semantic.css'
];

gulp.task('componentsCss', function() {
    return gulp.src(bowerCss)
        .pipe(autoprefixer('last 15 version'))
        .pipe(minifycss())
        .pipe(concat('components.min.css'))
        .pipe(gulp.dest(dest.css));
});

var bowerJs = [
    'bower_components/AlertifyJS/build/alertify.js'
];

gulp.task('componentsJs', function() {
    return gulp.src(bowerJs)
        .pipe(concat('components.min.js'))
        .pipe(gulp.dest(dest.js));
});

gulp.task('componentsJs2', function() {
    return gulp.src(bowerJs)
        .pipe(concat('components.min.js'))
        .pipe(gulp.dest(dest.js));
});

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
    mix.scripts('./bower_components/AlertifyJS/build/alertify.js', 'public/assets/js/alertify.js');
    mix.styles('./bower_components/AlertifyJS/build/css/alertify.css', 'public/assets/css/alertify.css');
    mix.styles('./bower_components/AlertifyJS/build/css/themes/semantic.css', 'public/assets/css/themes/semantic.css');
    mix.browserSync({proxy: 'localhost:8000'});
//  mix.task('default', 'componentsJs' );

});

//gulp.task('default', ['componentsCss','componentsJs']); buscar como utilizarlo con con el copy
