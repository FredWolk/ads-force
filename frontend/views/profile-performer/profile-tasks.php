<?php

use yii\helpers\Url;

$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/profile-tasks.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$this->registerCssFile(Url::to(['css/profile-performer/profile-left-nav.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$this->registerCssFile(Url::to(['css/component-css/task-item.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
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
        <div class="profile-right">
            <div class="profile-empty display-none">
                <h2 class="Font-size24 gray_color">Не найдено ни одного взятого в работу заказа :(</h2>
                <button class="Font-size18">Разместить заказ</button>
            </div>
        <div class="tasks">
            <a data-pjax="0" href="">
                <div class="task-item white_color_bg">
                    <div class="filter-task-item">
                        <div class="filter-task-item-main">
                            <div class="hi-order">
                                <p>Свободен</p>
                                <img src="<?= Url::to(['img/tasks/smite.svg']) ?>" alt="">
                            </div>
                            <div class="filters-list">
                                <div class="filter-view filter-task-items">
                                    <img src="<?= Url::to(['img/profile/profile-tasks/message-icon.svg']) ?>" alt="">
                                </div>
                                <div class="filter-view filter-task-items">
                                    <img src="<?= Url::to(['img/profile/profile-tasks/profile-icon.svg']) ?>" alt="">
                                </div>
                                <div class="filter-view filter-task-items">
                                    <img src="<?= Url::to(['img/tasks/summ.svg']) ?>" alt="">
                                    <p>5000</p>
                                </div>
                            </div>
                        </div>
                        <div class="right-item-filter">
                            <p>29 сентября</p>
                        </div>
                    </div>
                    <div class="task-title">
                        <h2 class="Font-size24 main_color_text">вк</h2>
                    </div>
                    <div class="task-text main_color_text">
                        <p>
                            main_color_text
                        </p>
                        <span style="color: #F535DA">... Подробнее</span>
                    </div>
                    <div class="task-tag-list">
                        <div class="task-tag-item">
                            <p>#тег</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        </div>
    </div>
</div>