<?php

/** @var \yii\web\View $this */
/** @var string $content */

use console\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\ProfileCustomerAsset;

$this->registerCssFile(Url::to(['css/profile-performer/profile-news.css']), ['depends' => ['frontend\assets\ProfileCustomerAsset']]);
?>


<div class="right-column">
    <div class="news-title">
        <h2 class="Font-size36 main_color_text">Новости проекта</h2>
    </div>
    <div class="news-list">
        <div class="news-item">
            <div class="news-date">28.09</div>
            <a href="<?=Url::to(['profile-news-private'])?>" class="Font-size24">Статья «Как реклама влияет на продажи?»</a>
        </div>
        <div class="news-item">
            <div class="news-date">28.09</div>
            <a href="<?=Url::to(['profile-news-private'])?>" class="Font-size24">Статья «Как реклама влияет на продажи?»</a>
        </div>
        <div class="news-item">
            <div class="news-date">28.09</div>
            <a href="<?=Url::to(['profile-news-private'])?>" class="Font-size24">Статья «Как реклама влияет на продажи?»</a>
        </div>
        <div class="pagination-items">
            <a href="">
                <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 1L1 4.5L4.5 8" class="arrow-color" stroke="#1F1F1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9 1L5.5 4.5L9 8" class="arrow-color" stroke="#1F1F1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <ul>
                <li>
                    <a class="active-paginate main_color_text" href="">1</a>
                </li>
                <li>
                    <a href="" class="main_color_text">2</a>
                </li>
                <li>
                    <a href="" class="main_color_text">3</a>
                </li>
            </ul>
            <a href="">
                <svg class="right-arrow-pagination" width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 1L1 4.5L4.5 8" class="arrow-color" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9 1L5.5 4.5L9 8" class="arrow-color" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>
</div>