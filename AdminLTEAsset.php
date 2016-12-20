<?php

namespace BomCMS\AdminLTE;

use yii\web\AssetBundle;

class AdminLTEAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bomcms/adminlte/assets';

    public $css = [
        'css/font-awesome.css',
        'css/skins/skin-blue-light.css',
        'css/AdminLTE.css'
    ];

    public $js = [
        'js/jquery.slimscroll.min.js',
        'js/app.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}