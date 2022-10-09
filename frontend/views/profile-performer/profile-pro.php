<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/profile-pro-acount.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$this->registerCssFile(Url::to(['css/profile-performer/profile-left-nav.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$js = <<< JS
    $('.nopro-click').click(function(){
        $('.no-pro-content').removeClass('d-none');
        $('.pro-content').addClass('d-none');
        $(this).addClass('active-item');
        $('.pro-click').removeClass('active-item');
    })
    $('.pro-click').click(function(){
        $('.no-pro-content').addClass('d-none');
        $('.pro-content').removeClass('d-none');
        $(this).addClass('active-item');
        $('.nopro-click').removeClass('active-item');
    })
JS;
$this->registerJs($js);
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
                    <img src="<?= Url::to(['img/profile/profile-meneger/sun-icon.svg']) ?>" class="dark-bg sun" alt="">
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
                        <a href="<?= Url::to(['profile-chat']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-chat' || Yii::$app->controller->action->id === 'profile-chat-private' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/message-link-icon.svg']) ?>" alt="">Сообщения</a>
                        <div class="circle-message">
                            <p class="white_color">12</p>
                        </div>
                    </li>
                    <li>
                        <a href="<?= Url::to(['profile-freelancer']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-freelancer' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/performers-link-icon.svg']) ?>" alt="">Мои исполнители</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['profile-payment-info']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-payment-info' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/payment-link-icon.svg']) ?>" alt="">Финансы</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['profile-pro']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-pro' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/partners-link-icon.svg']) ?>" alt="">Партнерская программа</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['technical-support']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'technical-support-chat' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/help-link-icon.svg']) ?>" alt="">Служба поддержки</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['profile-seetings']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-seetings' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/seetings-link-icon.svg']) ?>" alt="">Настройки</a>
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
        <div class="rigth-column">
            <p class="Font-size24 main_color_text">Бальная система для пользователя без PRO - аккаунта или % от комиссии системы за покупку PRO - аккаунта</p>
            <div class="main-content-pro">
                <div class="content-pro-title">
                    <div class="content-pro-title-item nopro-click active-item item-border-right">
                        <h2 class="Font-size36">Без PRO</h2>
                    </div>
                    <div class="content-pro-title-item pro-click">
                        <h2 class="Font-size36">С PRO</h2>
                    </div>
                </div>
                <div class="content-pro-text no-pro-content">
                    <b class="Font-size18 main_color_text">Начислим Вам 5 баллов за каждого приведенного пользователя.</b>
                    <div class="content-text-before">
                        <p class="Font-size18 main_color_text">Просто <b>разместите</b> на своем ресурсе (сайте, канале, блоге, странице в соц.сети) специальную <b>реферальную ссылку</b> или <a href="">отправьте приглашение</a> пользователю напрямую.</p>
                        <p class="Font-size18 main_color_text">Вы можете использовать Промо-материалы и видеть приглашенных Вами пользователей. </p>
                    </div>
                    <div class="links-content-text">
                        <div class="link-content">
                            <p class="Font-size18 main_color_text">Реферальная ссылка: http://referalochka=0011</p>
                            <img src="<?= Url::to(['img/profile/private-profile/copy-icon.svg']) ?>" alt="">
                        </div>
                        <div class="link-content">
                            <p class="Font-size18 main_color_text">Реферальная ссылка: http://referalochka=0011</p>
                            <img src="<?= Url::to(['img/profile/private-profile/copy-icon.svg']) ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-pro-text pro-content d-none">
                    <b class="Font-size18 main_color_text">xzxsadasd</b>
                    <div class="content-text-before">
                        <p class="Font-size18 main_color_text">Просто <b>разместите</b> на своем ресурсе (сайте, канале, блоге, странице в соц.сети) специальную <b>реферальную ссылку</b> или <a href="">отправьте приглашение</a> пользователю напрямую.</p>
                        <p class="Font-size18 main_color_text">Вы можете использовать Промо-материалы и видеть приглашенных Вами пользователей. </p>
                    </div>
                    <div class="links-content-text">
                        <div class="link-content">
                            <p class="Font-size18 main_color_text">Реферальная ссылка: http://referalochka=0011</p>
                            <img src="<?= Url::to(['img/profile/private-profile/copy-icon.svg']) ?>" alt="">
                        </div>
                        <div class="link-content">
                            <p class="Font-size18 main_color_text">Реферальная ссылка: http://referalochka=0011</p>
                            <img src="<?= Url::to(['img/profile/private-profile/copy-icon.svg']) ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-about">
                <p class="Font-size18 main_color_text">Баллы помогают достигать определенный уровень исполнителя/ заказчика, также их можно использовать для оплаты на сайте.</p>
            </div>
            <div class="content-button">
                <button>Стать партнером</button>
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
        </div>
    </div>
</div>