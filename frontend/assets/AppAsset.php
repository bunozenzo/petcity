<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
        'css/menu.css',
        'css/jquery-ui.css',
        'vendors/css/bootstrap.min.css',
        'font-awesome/css/font-awesome.min.css'
    ];
    public $js = [
        'vendors/js/bootstrap.min.js',
        'js/jquery-ui.js',
        'https://code.jquery.com/ui/1.12.1/jquery-ui.js',
        'js/jquery.elevatezoom.js',
        'js/main.js',
        'js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
