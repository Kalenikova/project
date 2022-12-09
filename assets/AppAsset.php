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
        'css/aos.css',
        'css/bootstrap-datepicker.css',
        'css/bootstrap.min.css',
        'css/bootstrap.min.css.map',
        'css/jquery-ui.css',
        'css/jquery.fancybox.min.css',
        'css/magnific-popup.css',
        'css/mediaelementplayer.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/style.css',
        'css/bootstrap/bootstrap-grid.css',
        'css/bootstrap/bootstrap-reboot.css',
        'css/bootstrap/bootstrap.css',
        'css/main.css',
        'css/util.css',
        'css/about.css',
    ];
    public $js = [
        'js/aos.js',
        'js/bootstrap-datepicker.min.js',
        'js/bootstrap.min.js',
        'js/jquery-3.3.1.min.js',
        'js/jquery-migrate-3.0.0.js',
        'js/jquery-migrate-3.0.1.min.js',
        'js/jquery-ui.js',
        'js/jquery.animateNumber.min.js',
        'js/jquery.countdown.min.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.fancybox.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/jquery.stellar.min.js',
        'js/jquery.sticky.js',
        'js/jquery.waypoints.min.js',
        'js/main.js',
        'js/mediaelement-and-player.min.js',
        'js/owl.carousel.min.js',
        'js/opper.min.js',
        'js/slick.min.js',
        'js/typed.js',
        'js/main_1.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset'
    ];
}
