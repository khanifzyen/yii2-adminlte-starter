<?php

namespace frontend\themes\adminlte\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class InfoBoxBg extends Widget
{
    public $icon;
    public $iconClass = 'bi bi-gear-fill'; // Default icon class
    public $color = 'primary'; // Default color
    public $text;
    public $number;
    public $progress = 0; // Progress percentage (0-100)
    public $progressDescription;

    public function run()
    {
        echo Html::beginTag('div', ['class' => 'col-md-3 col-sm-6 col-12']);

        echo Html::beginTag('div', ['class' => 'info-box text-bg-' . $this->color]);

        echo Html::beginTag('span', ['class' => 'info-box-icon']);
        echo Html::tag('i', '', ['class' => $this->iconClass]);
        echo Html::endTag('span');

        echo Html::beginTag('div', ['class' => 'info-box-content']);
        echo Html::tag('span', $this->text, ['class' => 'info-box-text']);
        echo Html::tag('span', $this->number, ['class' => 'info-box-number']);

        echo Html::beginTag('div', ['class' => 'progress']);
        echo Html::tag('div', '', ['class' => 'progress-bar', 'style' => 'width: ' . $this->progress . '%']);
        echo Html::endTag('div');

        echo Html::tag('span', $this->progressDescription, ['class' => 'progress-description']);

        echo Html::endTag('div'); // End info-box-content

        echo Html::endTag('div'); // End info-box

        echo Html::endTag('div'); // End col
    }
}
