<?php

use frontend\themes\adminlte\widgets\InfoBoxBg;

?>
<div class="row">
    <?= InfoBoxBg::widget([
        'iconClass' => 'bi bi-bookmark-fill',
        'color' => 'primary',
        'text' => 'Bookmarks',
        'number' => '41,410',
        'progress' => 70,
        'progressDescription' => '70% Increase in 30 Days',
    ]); ?>

    <?= InfoBoxBg::widget([
        'iconClass' => 'bi bi-hand-thumbs-up',
        'color' => 'success',
        'text' => 'Likes',
        'number' => '41,410',
        'progress' => 70,
        'progressDescription' => '70% Increase in 30 Days',
    ]); ?>

    <?= InfoBoxBg::widget([
        'iconClass' => 'bi bi-calendar3',
        'color' => 'warning',
        'text' => 'Events',
        'number' => '41,410',
        'progress' => 70,
        'progressDescription' => '70% Increase in 30 Days',
    ]); ?>

    <?= InfoBoxBg::widget([
        'iconClass' => 'bi bi-chat-text-fill',
        'color' => 'danger',
        'text' => 'Comments',
        'number' => '41,410',
        'progress' => 70,
        'progressDescription' => '70% Increase in 30 Days',
    ]); ?>
</div>