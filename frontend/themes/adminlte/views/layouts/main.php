<?php

use yii\helpers\Html;
use yii\web\View;
use frontend\themes\adminlte\AdminLteAsset; // Ganti dengan namespace asset bundle Anda

// Registrasi asset bundle AdminLTE
AdminLteAsset::register($this);

// Daftarkan meta tag
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0']);
$this->registerMetaTag(['name' => 'title', 'content' => Html::encode($this->title)]);
$this->registerMetaTag(['name' => 'author', 'content' => Yii::$app->params['author']]);
$this->registerMetaTag(['name' => 'description', 'content' => Yii::$app->params['defaultMetaDescription']]);
$this->registerMetaTag(['name' => 'keywords', 'content' => Yii::$app->params['defaultMetaKeywords']]);
$this->registerCsrfMetaTags();
// ... meta tag lainnya

// Set title jika belum di set di controller
if (empty($this->title)) {
    $this->title = 'AdminLTE v4 | Dashboard';
}

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <?php $this->beginBody() ?>
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Top Left Navbar Links-->
                <?= $this->render('_topleftnavbar'); ?>
                <!--end::Top Left Navbar Links-->
                <!--begin::Right Navbar Links-->
                <?= $this->render('_toprightnavbar'); ?>
                <!--end::Right Navbar Links-->
                <!--end::Container-->
            </div>
        </nav>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <?= $this->render('_sidebar'); ?>
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <?= $this->render('_app_main') ?>
        <!--end::App Main-->
        <!--begin::Footer-->
        <?= $this->render('_footer'); ?>
        <!--end::Footer-->
    </div>

    <!--end::App Wrapper-->
    <?php $this->endBody() ?>
</body>
<!--end::Body-->

</html>
<?php $this->endPage() ?>