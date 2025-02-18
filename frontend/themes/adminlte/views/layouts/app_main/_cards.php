<?php

use frontend\themes\adminlte\widgets\Card;

?>

<div class="row g-4 mb-4">
    <?= Card::widget([
        'title' => 'Expandable',
        'color' => 'primary',
        'outline' => false, // Set to true for card-outline
        'bg' => false, // Set to true for text-bg-*
        'collapsible' => true,
        'body' => 'The body of the card',
        'collapsed' => true, // Initial collapsed state
    ]); ?>

    <?= Card::widget([
        'title' => 'Collapsable',
        'color' => 'success',
        'collapsible' => true,
        'body' => 'The body of the card',
    ]); ?>

    <?= Card::widget([
        'title' => 'Removable',
        'color' => 'warning',
        'removable' => true,
        'body' => 'The body of the card',
    ]); ?>

    <?= Card::widget([
        'title' => 'Maximizable',
        'color' => 'danger',
        'maximizable' => true,
        'body' => 'The body of the card',
    ]); ?>

    <?= Card::widget([
        'title' => 'Outlined Card',
        'color' => 'primary',
        'outline' => true,
        'collapsible' => true,
        'body' => 'The body of the card',
    ]); ?>

    <?= Card::widget([
        'title' => 'BG Card',
        'color' => 'primary',
        'bg' => true,
        'collapsible' => true,
        'body' => 'The body of the card',
    ]); ?>
</div>