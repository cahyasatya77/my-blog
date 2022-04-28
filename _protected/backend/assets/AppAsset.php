<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/adminlte.min.css',
        'css/fontawesome-free/css/all.min.css',
    ];
    public $js = [
        'js/adminlte.min.js',
        'js/jquery.min.js',
        'js/bootstrap.bundle.min.js',
        // 'js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
