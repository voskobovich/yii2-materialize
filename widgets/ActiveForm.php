<?php

namespace voskobovich\materialize\widgets;

use voskobovich\materialize\MaterializeWidgetAsset;
use voskobovich\materialize\MaterializeWidgetPluginAsset;


/**
 * Class ActiveForm
 * @package voskobovich\materialize\widgets
 */
class ActiveForm extends \yii\widgets\ActiveForm
{
    /**
     * @var string the default field class name when calling [[field()]] to create a new field.
     * @see fieldConfig
     */
    public $fieldClass = 'voskobovich\materialize\widgets\ActiveField';

    /**
     * Runs the widget.
     */
    public function run()
    {
        $view = $this->getView();
        MaterializeWidgetAsset::register($view);
        MaterializeWidgetPluginAsset::register($view);

        echo parent::run();
    }
}