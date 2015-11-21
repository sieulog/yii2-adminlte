<?php
namespace sieulog\adminlte;

use yii\web\AssetBundle;

/**
 * @author Nguyen Tuan Sieu <tuan@sieulog.com>
 * @since 1.0
 */
class FontAwesomeAssets extends AssetBundle
{
    public $sourcePath = '@bower/adminlte';
    public $js = [];
    public $css = [
        'themes/smoothness/jquery-ui.css',
    ];
    public $depends = [];
}
