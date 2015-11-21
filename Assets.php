<?php
namespace sieulog\adminlte;

use yii\web\AssetBundle;

/**
 * @author Nguyen Tuan Sieu <tuan@sieulog.com>
 * @since 1.0
 */
class Assets extends AssetBundle
{
    public $sourcePath = '@bower/AdminLTE';
    public $js = [
        'dist/js/app.min.js',
    ];
    public $css = [
        'dist/css/AdminLTE.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\BootstrapAsset',
        'yii\web\BootstrapPluginAsset',
        'sieulog\adminlte\FontAwesomeAsset'
    ];
}
