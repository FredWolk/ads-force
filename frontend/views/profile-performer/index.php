<?php

use console\models\Categories;
use yii\helpers\Url;
use frontend\assets\AppAsset;

/** @var yii\web\View $this */

$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/profile-meneger.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/component-css/profile-left-nav.css']), ['depends' => ['frontend\assets\AppAsset']]);
AppAsset::register($this);
?>
<div class="Profile-container">
    <h1 class="title_color Font-size36">Личный кабинет заказчика</h1>
    <div class="Profile-full">
        <section class="left-navbar">
            <div class="left-navbar-top">
                <div class="hello-user">
                    <img src="<?= Url::to(['img/profile/profile-meneger/hand.svg']) ?>" alt="">
                    <h2 class="Font-size24 main_color_text">Привет, Juliya!</h2>
                    <img src="<?= Url::to(['img/profile/profile-meneger/night.svg']) ?>" alt="">
                </div>
                <div class="balance-user">
                    <p class="Font-size18 main_color_text">Баланс: 0 руб.</p>
                </div>
                <button class="button-add-balance Font-size18">Пополнить</button>
            </div>
            <div class="left-navbar-bottom">
                <ul>
                    <li>
                        <a href="" class="Font-size24 main_color_text"><img src="<?= Url::to(['img/profile/profile-meneger/user-icon.svg']) ?>" alt="">Моя страница</a>
                        <div class="circle-message">
                            <p class="white_color">12</p>
                        </div>
                    </li>
                    <li>
                        <a href="" class="Font-size24 main_color_text"><img src="<?= Url::to(['img/profile/profile-meneger/user-icon.svg']) ?>" alt="">Моя страница</a>
                    </li>
                </ul>
            </div>
            <div class="left-nav-bar-news">
                <div class="news-title">
                    <img src="<?= Url::to(['img/profile/profile-meneger/news-icon.svg']) ?>" alt="">
                    <h2 class="Font-size24 main_color_text">Новости проекта</h2>
                </div>
                <div class="news-list">
                    <ul>
                        <li>
                            <p class="date-news Font-size18 white_color">18.08</p>
                            <p class="Font-size18 main_color_text">Статья «Как реклама влияет на продажи?»</p>
                        </li>
                        <li>
                            <p class="date-news Font-size18 white_color">18.08</p>
                            <p class="Font-size18 main_color_text">Запланированы технические работы с 23:00</p>
                        </li>
                        <li>
                            <p class="date-news Font-size18 white_color">28.09</p>
                            <p class="Font-size18 main_color_text">Статья «SMM: что это такое и как работает»</p>
                        </li>
                    </ul>
                    <p class="more-news Font-size18 title_color">Еще + </p>
                </div>
            </div>
        </section>
        <section class="right-column">
            <div class="right-column-level background_color_level">
                <h2 class="Font-size24 white_color">У вас 0 баллов, ваш уровень заказчика <b>Новичок</b></h2>
                <div class="level-container">
                    <div class="level-container-left">

                    </div>
                    <div class="level-container-middle">

                    </div>
                    <div class="level-container-right">

                    </div>
                    <div class="circle-level">

                    </div>
                </div>
                <div class="level-text">
                    <div class="level-item">
                        <p class="white_color Font-size18">Базовый</p>
                    </div>
                    <div class="level-item">
                        <p class="white_color Font-size18">Продвинутый</p>
                    </div>
                    <div class="level-item">
                        <p class="white_color Font-size18">Профи</p>
                    </div>
                </div>
                <div class="link-level">
                    <a href="">
                        <img src="<?= Url::to(['img/profile/profile-meneger/info-icon.svg']) ?>" alt="">
                        <p class="white_color Font-size18">Как это работает?</p> 
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>