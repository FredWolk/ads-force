<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/profile-chat-private.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
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
            <div class="chat-private white_color_bg">
                <div class="header-chat-private">
                    <div class="header-chat-img">
                        <img src="<?= Url::to(['img/profile/profile-chat/profile-chat-private.png']) ?>" alt="">
                    </div>
                    <div class="header-chat-content">
                        <div class="header-chat-name">
                            <h2 class="main_color_text">Дарья Агапова</h2>
                            <div class="header-chat-online"></div>
                        </div>
                        <p class="header-chat-status">в сети</p>
                    </div>
                </div>
                <div class="chat-body-message">
                    <div class="chat-body-main">
                        <div class="message-container">
                            <div class="message-user">
                                <div class="message-user-header">
                                    <img src="<?= Url::to(['img/profile/profile-chat/profile-chat-private.png']) ?>" alt="">
                                    <h2 class="main_color_text">Дарья Агапова</h2>
                                    <p>исполнитель</p>
                                </div>
                                <div class="message-list">
                                    <div class="message-text bg-chat">
                                        <p class="main_color_text">Текст сообщения</p>
                                        <p class="time-message main_color_text">14:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="message-user">
                                <div class="message-user-header">
                                    <img src="<?= Url::to(['img/profile/profile-chat/profile-chat-private.png']) ?>" alt="">
                                    <h2 class="main_color_text">Дарья Агапова</h2>
                                    <p>исполнитель</p>
                                </div>
                                <div class="message-list">
                                    <div class="message-text my-message">
                                        <p>Текст сообщения</p>
                                        <p class="time-message">14:00</p>
                                    </div>
                                    <div class="message-text my-message">
                                        <p>Текст сообщения</p>
                                        <p class="time-message">14:00</p>
                                    </div>
                                    <div class="message-text my-message">
                                        <p>Текст сообщения Текст сообщения Текст сообщения Текст сообщения Текст сообщения Текст сообщения Текст сообщения</p>
                                        <p class="time-message">14:00</p>
                                    </div>
                                    <div class="message-text my-message">
                                        <p>Текст сообщения</p>
                                        <p class="time-message">14:00</p>
                                    </div>
                                    <div class="message-text my-message">
                                        <p>Текст сообщения</p>
                                        <p class="time-message">14:00</p>
                                    </div>
                                    <div class="message-text my-message">
                                        <p>Текст сообщения Текст сообщения Текст сообщения Текст сообщения Текст сообщения Текст сообщения Текст сообщения</p>
                                        <p class="time-message">14:00</p>
                                    </div>
                                    <div class="message-text my-message">
                                        <p>Текст сообщения</p>
                                        <p class="time-message">14:00</p>
                                    </div>
                                    <div class="message-text my-message">
                                        <p>Текст сообщения</p>
                                        <p class="time-message">14:00</p>
                                    </div>
                                    <div class="message-text my-message">
                                        <p>Текст сообщения Текст сообщения Текст сообщения Текст сообщения Текст сообщения Текст сообщения Текст сообщения</p>
                                        <p class="time-message">14:00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-body-input">
                        <input type="text" placeholder="Сообщение">
                        <div class="buttons-message">
                            <div class="left-buttons">
                                <img src="<?= Url::to(['img/profile/profile-chat/chat-smile.svg']) ?>" alt="">
                            </div>
                            <div class="right-buttons">
                                <img src="<?= Url::to(['img/profile/profile-chat/img-send.svg']) ?>" alt="">
                                <img src="<?= Url::to(['img/profile/profile-chat/send-message.svg']) ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>