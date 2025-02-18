<?php

namespace frontend\themes\adminlte\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class InfoBox extends Widget
{
    public $icon;
    public $iconClass = 'bi bi-gear-fill'; // Default icon class
    public $color = 'primary'; // Default color
    public $text;
    public $number;
    public $numberSmall = null; // Optional small text next to the number

    public function run()
    {
        echo Html::beginTag('div', ['class' => 'col-12 col-sm-6 col-md-3']); // Outer col

        echo Html::beginTag('div', ['class' => 'info-box']);

        echo Html::beginTag('span', ['class' => 'info-box-icon text-bg-' . $this->color . ' shadow-sm']);
        echo Html::tag('i', '', ['class' => $this->iconClass]); // Icon
        echo Html::endTag('span');

        echo Html::beginTag('div', ['class' => 'info-box-content']);
        echo Html::tag('span', $this->text, ['class' => 'info-box-text']);

        echo Html::beginTag('span', ['class' => 'info-box-number']);
        echo $this->number;
        if ($this->numberSmall !== null) {
            echo Html::tag('small', $this->numberSmall);
        }
        echo Html::endTag('span');

        echo Html::endTag('div'); // End info-box-content

        echo Html::endTag('div'); // End info-box

        echo Html::endTag('div'); // End col
    }
}
