<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
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
        [
            'href' => '/images/favicon.ico',
            'rel' => 'icon',
            'type' => 'image/x-icon',
        ],
        'css/site.css',
        'assets/css/tailwind.css?v=1.2',
        'css/app.css',
        'css/tailwind-output.css?v=1.2'
    ];
    public $js = [];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
