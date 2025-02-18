<?php

namespace frontend\themes\adminlte\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class SidebarMenu extends Widget
{
    public $items = [];

    public function run()
    {
        echo Html::beginTag('ul', ['class' => 'nav sidebar-menu flex-column', 'data-lte-toggle' => 'treeview', 'role' => 'menu', 'data-accordion' => 'false']);
        foreach ($this->items as $item) {
            echo $this->renderItem($item);
        }
        echo Html::endTag('ul');
    }

    protected function renderItem($item)
    {
        $options = isset($item['options']) ? $item['options'] : [];
        $linkOptions = isset($item['linkOptions']) ? $item['linkOptions'] : [];
        $active = isset($item['active']) && $item['active'];

        $itemClass = 'nav-item';
        if (isset($item['items'])) { // Dropdown
            $itemClass .= ' ' . ($active ? 'menu-open' : ''); // Add menu-open class if active
        }

        echo Html::beginTag('li', ['class' => $itemClass]);

        $linkContent = '';
        if (isset($item['icon'])) {
            $linkContent .= Html::tag('i', '', ['class' => 'nav-icon ' . $item['icon']]);
        }
        $linkContent .= Html::tag('p', $item['label'] . (isset($item['items']) ? Html::tag('i', '', ['class' => 'nav-arrow bi bi-chevron-right']) : ''));

        $linkOptions['class'] = 'nav-link' . ($active ? ' active' : '');
        echo Html::a($linkContent, isset($item['url']) ? $item['url'] : '#', $linkOptions);


        if (isset($item['items'])) { // Render dropdown items
            echo Html::beginTag('ul', ['class' => 'nav nav-treeview']);
            foreach ($item['items'] as $subItem) {
                echo $this->renderItem($subItem);
            }
            echo Html::endTag('ul');
        }

        echo Html::endTag('li');
    }
}
