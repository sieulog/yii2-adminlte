<?php
namespace sieulog\adminlte;

use yii\web\AssetBundle;

/**
 * @author Nguyen Tuan Sieu <tuan@sieulog.com>
 * @since 1.0
 */
class Assets extends AssetBundle
{
    public $sourcePath = '@bower/ionicons';
    public $js = [];
    public $css = [
        'themes/smoothness/jquery-ui.css',
    ];
    public $depends = [];
}
