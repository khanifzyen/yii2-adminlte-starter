<?php

use yii\bootstrap5\Nav;
use yii\bootstrap5\NavItem;
use yii\helpers\Url; // Jika Anda menggunakan URL helper

?>

<?= Nav::widget([
    'options' => ['class' => 'navbar-nav'], // Opsi untuk navbar-nav
    'items' => [
        [
            'label' => '<i class="bi bi-list"></i>', // Gunakan icon Bootstrap Icons
            'encode' => false, // Jangan encode HTML icon
            'options' => [
                'class' => 'nav-item',
            ],
            'linkOptions' => [
                'data-lte-toggle' => 'sidebar',
                'href' => '#',
                'role' => 'button',
            ],
        ],
        [
            'label' => 'Home',
            'url' => Url::to(['/site/index']), // Ganti dengan URL yang sesuai
            'options' => [
                'class' => 'nav-item d-none d-md-block', // Class untuk responsive
            ],
        ],
        [
            'label' => 'Contact',
            'url' => Url::to(['/site/contact']), // Ganti dengan URL yang sesuai
            'options' => [
                'class' => 'nav-item d-none d-md-block', // Class untuk responsive
            ],
        ],
        // Tambahkan item menu lainnya di sini
    ],
]); ?>