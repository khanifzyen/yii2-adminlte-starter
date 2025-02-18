<?php

namespace frontend\themes\adminlte\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class SmallBox extends Widget
{
    public $title;
    public $number;
    public $icon;
    public $color = 'primary'; // Default color
    public $footerLink;
    public $footerText = 'More info';

    public function run()
    {
        echo Html::beginTag('div', ['class' => 'col-lg-3 col-6']); // Outer col

        echo Html::beginTag('div', ['class' => 'small-box text-bg-' . $this->color]);

        echo Html::beginTag('div', ['class' => 'inner']);
        echo Html::tag('h3', $this->number);
        echo Html::tag('p', $this->title);
        echo Html::endTag('div');

        echo Html::tag('svg', $this->icon, [
            'class' => 'small-box-icon',
            'fill' => 'currentColor',
            'viewBox' => '0 0 24 24',
            'xmlns' => 'http://www.w3.org/2000/svg',
            'aria-hidden' => 'true',
        ]);

        if ($this->footerLink) {
            echo Html::a(
                $this->footerText . ' <i class="bi bi-link-45deg"></i>',
                $this->footerLink,
                ['class' => 'small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover']
            );
        }

        echo Html::endTag('div'); // End small-box

        echo Html::endTag('div'); // End col
    }
}
