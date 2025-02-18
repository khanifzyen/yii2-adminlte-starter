<?php

namespace frontend\themes\adminlte;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/adminlte/assets';
    public $css = [
        'css/adminlte.min.css', // Atau adminlte.css jika belum di-minify
        'https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css',
        'https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css',
        'https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css',
        'https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
    ];
    public $js = [
        'js/adminlte.min.js', // Atau adminlte.js jika belum di-minify
        'js/overlayscrollbars_config.js',
        'js/shortable_config.js',
        //'/themes/adminlte/js/chart_config.js',
        '/themes/adminlte/js/vectormap_config.js',
        'https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js',
        'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js',
        'https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js',
        'https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js',
        'https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js',
        'https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}
