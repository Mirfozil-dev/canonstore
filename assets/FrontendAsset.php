<?php


namespace app\assets;

use yii\web\AssetBundle;


class FrontendAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/site.css',
        'https://unpkg.com/swiper/swiper-bundle.css',
        'https://unpkg.com/swiper/swiper-bundle.min.css',
        "./css/bootstrap.css",
        "./css/all.min.css",
        "./css/main.css",
        "./scss/main.css",
        "./css/owl.carousel.css",
        "./css/owl.theme.default.css",
        "./css/aaaa.css",

    ];
    public $js = [
        "./js/jquery.js",
        "./js/function.carusel.js",
        'https://unpkg.com/swiper/swiper-bundle.min.js',
        'https://unpkg.com/swiper/swiper-bundle.js',
        "./js/bootstrap.js",
        "./js/bootstrap.min.js",
        "./js/menu.js",
        "./js/popup.js",
        "./js/owl.carousel.js",
        "./js/carusel.offers.js",
        "./js/search.event.js",
        './js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}