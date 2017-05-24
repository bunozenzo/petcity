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
        'css/styles.css',
        'css/jquery-ui.css',
        'vendors/css/bootstrap.min.css',
        'css/AdminLTE.css',
        'css/_all-skins.min.css',
        'font-awesome/css/font-awesome.min.css'
    ];
    public $js = [
        'vendors/js/bootstrap.min.js',
        'js/main.js',
        'js/jquery-ui.js',
        'tinymce/tinymce.min.js',
        'js/app.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
