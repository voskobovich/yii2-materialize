<?php

namespace voskobovich\materialize;

use yii\web\AssetBundle;


/**
 * Asset bundle for the Materialize javascript files.
 *
 * @author Vitaly Voskobovich <vitaly@voskobovich.com>
 * @since 1.0
 */
class MaterializePluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/materialize/dist';
    public $js = [
        'js/materialize.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}