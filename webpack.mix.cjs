const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .webpackConfig({
      resolve: {
         extensions: ['.js', '.vue', '.json'],
         alias: {
            '@': __dirname + '/resources/js',
         },
      },
   });
