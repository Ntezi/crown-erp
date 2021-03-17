<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $sourcePath = '@web';
    public $css = [
        'css/custom.css',
    ];
    public $js = [
        'js/datatables.js',
        'js/datepicker.js'
    ];
    public $depends = [
        'common\assets\SmartAdminAsset',
    ];
}
