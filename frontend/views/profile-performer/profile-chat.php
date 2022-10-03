<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/profile-chat.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$this->registerCssFile(Url::to(['css/profile-performer/profile-left-nav.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
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
        <section class="rigth-column">
            <div class="chat-list">
                <a href="">
                    <div class="chat-item">
                        <div class="chat-item-img">
                            <img src="<?= Url::to(['img/profile/profile-chat/profile-chat-icon.png']) ?>" alt="">
                        </div>
                        <div class="chat-item-content">
                            <div class="chat-item-content-top">
                                <h2 class="Font-size24 main_color_text">Александр Иванов</h2>
                                <div class="chat-item-content-time">
                                    <img src="<?= Url::to(['img/profile/profile-chat/chat-status.svg']) ?>" alt="">
                                    <p class="gray_color">21:27</p>
                                </div>
                            </div>
                            <p class="skill-list main_color_text">Редизайн</p>
                            <div class="text-message">
                                <p class="text-message-prev">Текст сообщения Текст сообщения...</p>
                                <p class="message-number-absolute">1</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="chat-item">
                        <div class="chat-item-img">
                            <img src="<?= Url::to(['img/profile/profile-chat/profile-chat-icon.png']) ?>" alt="">
                        </div>
                        <div class="chat-item-content">
                            <div class="chat-item-content-top">
                                <h2 class="Font-size24 main_color_text">Александр Иванов</h2>
                                <div class="chat-item-content-time">
                                    <img src="<?= Url::to(['img/profile/profile-chat/chat-status.svg']) ?>" alt="">
                                    <p class="gray_color">21:27</p>
                                </div>
                            </div>
                            <p class="skill-list main_color_text">Редизайн</p>
                            <p class="text-message-prev">Текст сообщения Текст сообщения...</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="left-nav-bar-news news-mobile">
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
    </div>
</div>