const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

//  elixir(mix => {
//      mix.sass('app.scss')
//        .webpack('app.js');
//  });
elixir(function (mix) {

    'use strict';

    mix.sass('app.scss');

    mix.webpack(
        './resources/assets/js/app.js',
        './public/dist'
    );

    mix.version('css/app.css');

});
