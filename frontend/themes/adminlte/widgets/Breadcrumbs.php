<?php

namespace frontend\themes\adminlte\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use Yii;

class Breadcrumbs extends Widget
{
    public $links = [];

    public function run()
    {
        echo Html::beginTag('ol', ['class' => 'breadcrumb float-sm-end']);

        // Render home link if not explicitly provided
        if (empty($this->links) || (!isset($this->links[0]['label']) || $this->links[0]['label'] != 'Home')) {
            echo Html::beginTag('li', ['class' => 'breadcrumb-item']);
            echo Html::a('Home', Yii::$app->homeUrl); // Link to your home URL
            echo Html::endTag('li');
        }

        foreach ($this->links as $i => $link) { // Use $i for index
            $options = isset($link['options']) ? $link['options'] : [];
            $itemClass = 'breadcrumb-item';
            $active = isset($link['active']) && $link['active'];

            if ($active) {
                $itemClass .= ' active';
                $options['aria-current'] = 'page';
            }

            echo Html::beginTag('li', ['class' => $itemClass]);

            if (isset($link['url']) && !$active) { // Only create link if not active
                echo Html::a($link['label'], $link['url'], $options);
            } else {
                echo Html::tag('span', $link['label'], $options); // For the active item or no URL
            }

            echo Html::endTag('li');
        }

        echo Html::endTag('ol');
    }
}
