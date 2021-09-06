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
        // 'css/site.css',
        'back/assets/css/normalize.min.css',
        'back/assets/css/cs-skin-elastic.css',
        'back/assets/css/style.css',
        'back/assets/css/font-awesome.min.css',
        'back/assets/css/themify-icons.css',
        'back/assets/css/pe-icon-7-stroke.min.css',
        'back/assets/css/flag-icon.min.css',
        'back/assets/css/weather-icons.css',
        'back/assets/css/jquery.fancybox.min.css',

    ];
    public $js = [
        'back/assets/js/jquery.min.js',
        'back/assets/js/main.js',
        'back/assets/js/jquery.fancybox.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
