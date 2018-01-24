let mix = require('laravel-mix');

mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/popper.js/dist/umd/popper.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'resources/assets/js/be.js'
], 'public/js/be.js')
.sass('resources/assets/sass/be.scss', 'public/css')
.version();

mix.browserSync({
    proxy: 'mdb.local',
    notify: false
});
