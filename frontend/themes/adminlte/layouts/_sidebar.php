|<?php

    use yii\bootstrap5\Nav;
    use yii\bootstrap5\NavBar;

    ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Yii::$app->homeUrl ?>" class="brand-link">
        <img src="<?= Yii::getAlias('@web/themes/adminlte/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 4</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= Yii::getAlias('@web/themes/adminlte/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo Nav::widget([
                'options' => ['class' => 'nav nav-pills nav-sidebar flex-column', 'data-widget' => 'treeview', 'role' => 'menu'],
                'items' => [
                    ['label' => 'Dashboard', 'url' => ['/site/index'], 'icon' => 'tachometer-alt'],
                    ['label' => 'Widgets', 'url' => ['#'], 'icon' => 'th'],
                    [
                        'label' => 'Layout Options',
                        'icon' => 'layout',
                        'items' => [
                            ['label' => 'Default Sidebar', 'url' => ['#']],
                            ['label' => 'Fixed Sidebar', 'url' => ['#']],
                            ['label' => 'Fixed Header', 'url' => ['#']],
                        ],
                    ],
                    ['label' => 'UI Elements', 'url' => ['#'], 'icon' => 'paint-brush'],
                    ['label' => 'Forms', 'url' => ['#'], 'icon' => 'edit'],
                    ['label' => 'Tables', 'url' => ['#'], 'icon' => 'table'],
                    ['label' => 'Auth', 'url' => ['#'], 'icon' => 'user-lock'],
                    ['label' => 'Documentation', 'url' => ['#'], 'icon' => 'book'],
                ],
                'encodeLabels' => false,
            ]);
            ?>
        </nav>
    </div>
</aside>