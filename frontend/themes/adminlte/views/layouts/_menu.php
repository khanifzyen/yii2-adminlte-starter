<?php
// ... other code ...
use frontend\themes\adminlte\widgets\SidebarMenu; // Import widget class

echo SidebarMenu::widget([
    'items' => [
        [
            'label' => 'Dashboard',
            'icon' => 'bi bi-speedometer',
            'url' => '#',
            'items' => [
                ['label' => 'Dashboard v1', 'icon' => 'bi bi-circle', 'url' => ['/site/index'], 'active' => Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index', 'encode' => false], // Example active state
                ['label' => 'Contact', 'icon' => 'bi bi-circle', 'url' => ['/site/contact'], 'active' => Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'contact'],
                ['label' => 'About', 'icon' => 'bi bi-circle', 'url' => ['/site/about'], 'active' => Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'about'],
            ],
            'active' => Yii::$app->controller->id == 'site', //Active if on any dashboard page
        ],
    ],
]);
