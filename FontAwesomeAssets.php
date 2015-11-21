<?php
namespace sieulog\adminlte;

use yii\web\AssetBundle;

/**
 * @author Nguyen Tuan Sieu <tuan@sieulog.com>
 * @since 1.0
 */
class FontAwesomeAssets extends AssetBundle
{
    public $sourcePath = '@bower/fontawesome';
    public $js = [];
    public $css = [
        'css/font-awesome.css',
    ];
    public $depends = [];
}
