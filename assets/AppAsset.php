<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        "./css/bootstrap.css",
        "./css/all.min.css",
        "./css/main.css",
        "./css/owl.carousel.css",
        "./css/owl.theme.default.css",
        "./css/aaaa.css",

    ];
    public $js = [
        "./js/function.carusel.js",
        "./js/bootstrap.js",
        "./js/bootstrap.min.js",
        "./js/menu.js",
        "./js/popup.js",
        "./js/jquery.js",
        "./js/owl.carousel.js",
        "./js/carusel.offers.js",
        "./js/search.event.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
