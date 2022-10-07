<?php

use yii\helpers\Url;

/** @var yii\web\View $this */
$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/technical-support.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
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
                    <img src="<?= Url::to(['img/profile/profile-meneger/night.svg']) ?>" class="dark-bg" alt="">
                </div>
                <div class="balance-user">
                    <p class="Font-size18 main_color_text">Баланс: 0 руб.</p>
                </div>
                <button class="button-add-balance Font-size18">Пополнить</button>
            </div>
            <div class="left-navbar-bottom">
                <ul>
                    <li>
                        <a href="<?= Url::to(['index']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'index' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/user-icon.svg']) ?>" alt="">Моя страница</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['profile-performer/profile-tasks']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-tasks' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/doc-link-icon.svg']) ?>" alt="">Мои заказы</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['index']) ?>" class="Font-size24 main_color_text"><img src="<?= Url::to(['img/profile/profile-meneger/message-link-icon.svg']) ?>" alt="">Сообщения</a>
                        <div class="circle-message">
                            <p class="white_color">12</p>
                        </div>
                    </li>
                    <li>
                        <a href="<?= Url::to(['index']) ?>" class="Font-size24 main_color_text"><img src="<?= Url::to(['img/profile/profile-meneger/performers-link-icon.svg']) ?>" alt="">Мои исполнители</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['index']) ?>" class="Font-size24 main_color_text"><img src="<?= Url::to(['img/profile/profile-meneger/payment-link-icon.svg']) ?>" alt="">Финансы</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['index']) ?>" class="Font-size24 main_color_text"><img src="<?= Url::to(['img/profile/profile-meneger/partners-link-icon.svg']) ?>" alt="">Партнерская программа</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['index']) ?>" class="Font-size24 main_color_text"><img src="<?= Url::to(['img/profile/profile-meneger/help-link-icon.svg']) ?>" alt="">Служба поддержки</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['index']) ?>" class="Font-size24 main_color_text"><img src="<?= Url::to(['img/profile/profile-meneger/seetings-link-icon.svg']) ?>" alt="">Настройки</a>
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
                    <a class="more-news Font-size18 title_color">Еще + </a>
                </div>
            </div>
        </section>
        <div class="rigth-column">
            <div class="technical-support-title">
                <h2  class="main_color_text">Список обращений</h2>
                <div class="review-switch">
                    <label><input type="checkbox" class="ios-switch bigswitch" checked />
                        <div>
                            <div></div>
                        </div>
                    </label>
                    <p class="Font-size18 main_color_text">Показывать архив</p>
                </div>
            </div>
            <div class="call-tehnical-list">
                <div class="call-tehnical-item white_color_bg">
                    <div class="call-tehnical-item-img">
                        <img src="<?= Url::to(['img/profile/profile-chat/avatar-icon.svg']) ?>" alt="">
                    </div>
                    <div class="call-tehnical-item-text">
                        <b class="main_color_text">Владислав Редс</b>
                        <p>Техническая поддержка</p>
                        <a class="main_color_text" href="">Тикет №123456 Заголовок — Тема</a>
                    </div>
                    <p class="date-call-tehnical">19 ноября</p>
                </div>
                <div class="call-tehnical-item white_color_bg">
                    <div class="call-tehnical-item-img">
                        <img src="<?= Url::to(['img/profile/profile-chat/avatar-icon.svg']) ?>" alt="">
                    </div>
                    <div class="call-tehnical-item-text">
                        <b class="main_color_text">Владислав Редс</b>
                        <p>Техническая поддержка</p>
                        <a class="main_color_text" href="">Тикет №123456 Заголовок — Тема</a>
                    </div>
                    <p class="date-call-tehnical">19 ноября</p>
                </div>
            </div>
        </div>
    </div>
</div>