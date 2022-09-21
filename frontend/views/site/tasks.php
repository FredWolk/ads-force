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
<div class="container-index">
    <section class="filter-full">
        <div class="title-categories">
            <h2 class="Font-size18">Категория</h2>
            <p class="Font-size13">Сбросить</p>
        </div>
        <div class="categories-select">
            <div class="categories-select-top">
                <b class="Font-size18">Интернет продвижение и реклама</b>
                <img src="<?= Url::to(['img/tasks/arrow-filter.svg']) ?>" alt="">
            </div>
            <div class="categories-select-bottom">
                <ul>
                    <li>
                        <label class="custom-checkbox">
                            <input type="checkbox" value="value-1">
                            <span class="Font-size13">Таргетированная реклама</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox">
                            <input type="checkbox" value="value-1">
                            <span class="Font-size13">Интернет-маркетинг</span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>