<?php

namespace voskobovich\materialize;

use yii\web\AssetBundle;


/**
 * Asset bundle for the Materialize css files.
 *
 * @author Vitaly Voskobovich <vitaly@voskobovich.com>
 * @since 1.0
 */
class MaterializeAsset extends AssetBundle
{
    public $sourcePath = '@bower/materialize/dist';
    public $css = [
        'css/materialize.css',
    ];
}