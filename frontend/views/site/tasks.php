<?php

use yii\helpers\Url;
use frontend\assets\AppAsset;
use yii\web\JqueryAsset;

/** @var yii\web\View $this */

$this->title = 'My.Force';
$this->registerCssFile(Url::to(['css/tasks.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/component-css/filter.css']), ['depends' => ['frontend\assets\AppAsset']]);
AppAsset::register($this);
?>
<section class="filter-full">
    <div class="title-categories">
        <h2>Категория</h2>
        <p>Сбросить</p>
    </div>
</section>
