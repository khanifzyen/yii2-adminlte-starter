<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AdminLteAsset;

AdminLteAsset::register($this);

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <?php
    $this->registerMetaTag(['charset' => 'utf-8']);
    $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0']);
    $this->registerMetaTag(['name' => 'title', 'content' => Html::encode($this->title)]);
    $this->registerMetaTag(['name' => 'author', 'content' => Yii::$app->params['author']]);
    $this->registerMetaTag(['name' => 'description', 'content' => Yii::$app->params['defaultMetaDescription']]);
    $this->registerMetaTag(['name' => 'keywords', 'content' => Yii::$app->params['defaultMetaKeywords']]);
    $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>

</body>

</html>