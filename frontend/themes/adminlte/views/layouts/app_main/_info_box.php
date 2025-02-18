<?php

use frontend\themes\adminlte\widgets\InfoBox;

?>
<div class="row">
    <?= InfoBox::widget([
        'iconClass' => 'bi bi-gear-fill', // Or use $icon to pass the full SVG
        'color' => 'primary',
        'text' => 'CPU Traffic',
        'number' => '10',
        'numberSmall' => '%',
    ]); ?>

    <?= InfoBox::widget([
        'iconClass' => 'bi bi-cart-fill',
        'color' => 'success',
        'text' => 'Sales',
        'number' => '760',
    ]); ?>

    <?= InfoBox::widget([
        'iconClass' => 'bi bi-people-fill',
        'color' => 'warning',
        'text' => 'New Members',
        'number' => '2,000',
    ]); ?>

    <?= InfoBox::widget([
        'iconClass' => 'bi bi-hand-thumbs-up-fill',
        'color' => 'danger',
        'text' => 'Likes',
        'number' => '41,410',
    ]); ?>
</div>