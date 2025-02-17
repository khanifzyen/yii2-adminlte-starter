<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'themes/adminlte/css/adminlte.min.css', // Atau adminlte.css jika belum di-minify
        'https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css',
        'https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css',
        'https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css',
        'https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
    ];
    public $js = [
        'themes/adminlte/js/adminlte.min.js', // Atau adminlte.js jika belum di-minify
        'https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js',
        'https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js',
        'https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset', // Jika Anda menggunakan Bootstrap 5
    ];
}
