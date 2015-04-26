<?php

namespace voskobovich\materialize;

use yii\web\AssetBundle;


/**
 * Asset bundle for the widgets css files.
 *
 * @author Vitaly Voskobovich <vitaly@voskobovich.com>
 * @since 1.0
 */
class MaterializeWidgetAsset extends AssetBundle
{
    public $sourcePath = '@vendor/voskobovich/yii2-materialize/assets';
    public $css = [
        'css/yii2-materialize-widgets.css',
    ];
    public $depends = [
        'voskobovich\materialize\MaterializeAsset',
    ];
}