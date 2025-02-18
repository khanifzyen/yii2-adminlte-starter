<?php

namespace frontend\themes\adminlte\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Card extends Widget
{
    public $title;
    public $color = 'primary'; // Default color
    public $outline = false; // Whether to use card-outline
    public $bg = false; // Whether to use text-bg-*
    public $collapsible = false;
    public $removable = false;
    public $maximizable = false;
    public $collapsed = false; // Initial collapsed state
    public $body;

    public function run()
    {
        $cardClass = 'card';
        if ($this->outline) {
            $cardClass .= ' card-outline';
        }
        if ($this->bg) {
            $cardClass .= ' text-bg-' . $this->color;
        } else {
            $cardClass .= ' card-' . $this->color;
        }
        if ($this->collapsed) {
            $cardClass .= ' collapsed-card';
        }

        echo Html::beginTag('div', ['class' => 'col-md-3']);
        echo Html::beginTag('div', ['class' => $cardClass]);

        echo Html::beginTag('div', ['class' => 'card-header']);
        echo Html::tag('h3', $this->title, ['class' => 'card-title']);

        $cardTools = [];
        if ($this->collapsible) {
            $cardTools[] = Html::button(Html::tag('i', '', ['data-lte-icon' => 'expand', 'class' => 'bi bi-plus-lg']) .
                Html::tag('i', '', ['data-lte-icon' => 'collapse', 'class' => 'bi bi-dash-lg']), [
                'class' => 'btn btn-tool',
                'data-lte-toggle' => 'card-collapse',
            ]);
        }
        if ($this->removable) {
            $cardTools[] = Html::button(Html::tag('i', '', ['class' => 'bi bi-x-lg']), [
                'class' => 'btn btn-tool',
                'data-lte-toggle' => 'card-remove',
            ]);
        }
        if ($this->maximizable) {
            $cardTools[] = Html::button(Html::tag('i', '', ['data-lte-icon' => 'maximize', 'class' => 'bi bi-fullscreen']) .
                Html::tag('i', '', ['data-lte-icon' => 'minimize', 'class' => 'bi bi-fullscreen-exit']), [
                'class' => 'btn btn-tool',
                'data-lte-toggle' => 'card-maximize',
            ]);
        }

        if (!empty($cardTools)) {
            echo Html::beginTag('div', ['class' => 'card-tools']);
            foreach ($cardTools as $tool) {
                echo $tool;
            }
            echo Html::endTag('div');
        }

        echo Html::endTag('div'); // card-header

        echo Html::beginTag('div', ['class' => 'card-body']);
        echo $this->body;
        echo Html::endTag('div'); // card-body

        echo Html::endTag('div'); // card

        echo Html::endTag('div'); // col-md-3
    }
}
