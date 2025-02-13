<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class AdminLTEAsset extends AssetBundle
{
    public $basePath = '@frontend/themes/adminlte';
    // public $baseUrl = '@web/themes/adminlte';
    public $css = [
        'css/adminlte.min.css',
    ];
    public $js = [
        'js/adminlte.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
