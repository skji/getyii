<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/global.css',
//        'css/font-awesome.min.css',
//        'css/prettyPhoto.css',
//        'css/animate.css',
//        'css/main.css',
        'css/site.css',
    ];

    public $js = [
//        'js/bootstrap.min.js',
//        'js/jquery.prettyPhoto.js',
//        'js/jquery.isotope.min.js',
//        'js/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}