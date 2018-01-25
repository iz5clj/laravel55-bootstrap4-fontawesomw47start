let mix = require('laravel-mix');

mix.scripts([
    'node_modules/jquery/dist/jquery.js', // This file is necessary
    'node_modules/popper.js/dist/umd/popper.js', // This file is necessary 
    //'node_modules/bootstrap/js/dist/alert.js',
    'node_modules/bootstrap/js/dist/button.js',
    //'node_modules/bootstrap/js/dist/carousel.js',
    //'node_modules/bootstrap/js/dist/collapse.js',
    //'node_modules/bootstrap/js/dist/dropdown.js',
    'node_modules/bootstrap/js/dist/modal.js',
    //'node_modules/bootstrap/js/dist/popover.js',
    //'node_modules/bootstrap/js/dist/scrollspy.js',
    //'node_modules/bootstrap/js/dist/tab.js',
    'node_modules/bootstrap/js/dist/tooltip.js',
    'node_modules/bootstrap/js/dist/util.js', // This file is necessary for all the other modules
    //'node_modules/bootstrap/dist/js/bootstrap.js', // this is th full version
    'resources/assets/js/scripts.js'
], 'public/js/scripts.js')
.sass('resources/assets/sass/styles.scss', 'public/css')
.version();

mix.browserSync({
    proxy: 'l55b4.local',
    notify: false
});
