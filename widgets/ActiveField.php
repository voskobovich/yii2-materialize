<?php

namespace voskobovich\materialize\widgets;

use voskobovich\materialize\helpers\Html;


/**
 * Class ActiveField
 * @package voskobovich\materialize\widgets
 */
class ActiveField extends \yii\widgets\ActiveField
{
    /**
     * @var array
     */
    public $options = ['class' => 'input-field'];

    /**
     * @var string
     */
    public $template = "{input}\n{label}\n{hint}\n{error}";

    /**
     * @var array
     */
    public $labelOptions = [];

    /**
     * @var array
     */
    public $inputOptions = [];


    /**
     * @param array $options
     * @param bool $enclosedByLabel
     * @return static
     */
    public function checkbox($options = [], $enclosedByLabel = false)
    {
        $this->options = [];
        if (!empty($options['parentOptions'])) {
            $this->options = $options['parentOptions'];
            unset($options['parentOptions']);
        }

        return parent::checkbox($options, $enclosedByLabel);
    }

    /**
     * @param array $options
     * @param bool $enclosedByLabel
     * @return static
     */
    public function radio($options = [], $enclosedByLabel = false)
    {
        $this->options = [];
        if (!empty($options['parentOptions'])) {
            $this->options = $options['parentOptions'];
            unset($options['parentOptions']);
        }

        return parent::radio($options, $enclosedByLabel);
    }

    /**
     * Переопределен ради класса HTML
     * @param array $items
     * @param array $options
     * @return $this
     */
    public function radioList($items, $options = [])
    {
        if (!empty($options['template'])) {
            $this->template = $options['template'];
            unset($options['template']);
        } else {
            $this->template = "{label}\n{input}\n{hint}\n{error}";
        }

        $this->options = ['class' => 'radioList-field'];
        if (!empty($options['parentOptions'])) {
            $this->options = $options['parentOptions'];
            unset($options['parentOptions']);
        }

        $this->adjustLabelFor($options);
        $this->parts['{input}'] = Html::activeRadioList($this->model, $this->attribute, $items, $options);

        return $this;
    }

    /**
     * @param array $items
     * @param array $options
     * @return $this
     */
    public function checkboxList($items, $options = [])
    {
        if (!empty($options['template'])) {
            $this->template = $options['template'];
            unset($options['template']);
        } else {
            $this->template = "{label}\n{input}\n{hint}\n{error}";
        }

        $this->options = ['class' => 'checkboxList-field'];
        if (!empty($options['parentOptions'])) {
            $this->options = $options['parentOptions'];
            unset($options['parentOptions']);
        }

        $this->adjustLabelFor($options);
        $this->parts['{input}'] = Html::activeCheckboxList($this->model, $this->attribute, $items, $options);

        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function fileInput($options = [])
    {
        $this->label(false);
        $this->options = ['class' => 'file-field input-field'];
        if (!empty($options['parentOptions'])) {
            $this->options = $options['parentOptions'];
            unset($options['parentOptions']);
        }

        $options = array_merge($this->inputOptions, $options);
        $this->adjustLabelFor($options);
        $this->parts['{input}'] = Html::activeFileInput($this->model, $this->attribute, $options);

        return $this;
    }
}