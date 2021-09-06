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
        'front/css/style.css',
        'front/vendor/bootstrap/css/bootstrap.min.css',
        'front/vendor/icofont/icofont.min.css',
        'front/vendor/boxicons/css/boxicons.min.css',
        'front/vendor/animate.css/animate.min.css',
        'front/vendor/venobox/venobox.css',
        'front/vendor/owl.carousel/assets/owl.carousel.min.css',
        'front/vendor/aos/aos.css',

    ];
    public $js = [
        'front/vendor/jquery/jquery.min.js',
        'front/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'front/vendor/jquery.easing/jquery.easing.min.js',
        'front/vendor/php-email-form/validate.js',
        'front/vendor/jquery-sticky/jquery.sticky.js',
        'front/vendor/isotope-layout/isotope.pkgd.min.js',
        'front/vendor/venobox/venobox.min.js',
        'front/vendor/waypoints/jquery.waypoints.min.js',
        'front/vendor/owl.carousel/owl.carousel.min.js',
        'front/vendor/aos/aos.js',
        'front/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
