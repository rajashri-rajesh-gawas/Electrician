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
        'css/bootstrap.css',
        'css/flexslider.css',
        'css/font-awesome.min.css',
        'css/simpleLightbox.css',
        'css/style.css',
        'css/bootstrap.min.css',
    ];
    public $js = [
        'js/bootstrap.js',
        'js/classie.js',
        'js/jarallax.js',
        'js/jquery.countup.js',
        'js/jquery.flexslider.js',
        'js/jquery.waypoints.min.js',
        'js/jquery-2.1.4.min.js',
        'js/main.js',
        'js/simpleLightbox.js',
        'js/SmoothScroll.min.js',
        'js/jquery-1.9.1.min.js',
        'js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
