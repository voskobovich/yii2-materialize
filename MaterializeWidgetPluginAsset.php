<?php

namespace voskobovich\materialize;

use yii\web\AssetBundle;


/**
 * Asset bundle for the widgets js files.
 *
 * @author Vitaly Voskobovich <vitaly@voskobovich.com>
 * @since 1.0
 */
class MaterializeWidgetPluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/voskobovich/yii2-materialize/assets';
    public $js = [
        'js/yii2-materialize-widgets.js',
    ];
    public $depends = [
        'voskobovich\materialize\MaterializePluginAsset',
    ];
}