const elixir = require('laravel-elixir');


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

elixir(mix => {
    mix.sass('app.scss')
       .styles([
           './node_modules/gentelella/build/css/custom.css',
           'resources/assets/css/theme.css'
        ], 'public/css/style.css')
        .copy('node_modules/angular/angular.js', 'resources/assets/js/dist/angular.js')
        .copy('node_modules/npm-angular-route/lib/angular-route.js', 'resources/assets/js/dist/angular-route.js')
        .webpack('resources/assets/js/app.js');
});
