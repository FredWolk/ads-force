<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/profile-left-nav.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$this->registerCssFile(Url::to(['css/profile-performer/profile-payment.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);

$js = <<< JS

$('.add-button').click(function(e) {
    $('.ModalPuyment').css({'display':'flex'});
    $('body').css({'overflow':'hidden'});
});
$('.Modal-close').click(function(e) {
    $('.ModalPuyment').fadeOut(300);
    $('body').css({'overflow':'auto'})
});
$('.closeModalButton').click(function(e) {
    $('.ModalPuyment').fadeOut(300);
    $('body').css({'overflow':'auto'})
});
JS;
$this->registerJs($js);
?>
<div class="ModalPuyment" style="display: none;">
    <div class="modalBlock">
        <div class="Modal-close">
            <p>&times;</p>
        </div>
        <h2 class="Font-size24">Пополнение баланса</h2>
        <div class="modalBlockForm">
            <form action="">
                <p>Сумма</p>
                <input type="number" placeholder="Минимальная сумма пополнения 5000 руб.">
                <div class="formCheckbox">
                    <input type="checkbox">
                    <p>Подтверждаю согласие с условиями обработки данных</p>
                </div>
                <button class="puymentModalButton">Оплатить</button>
                <button class="closeModalButton">Отмена</button>
            </form>
        </div>
    </div>
</div>
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
        <div class="profile-right">
            <div class="main-info-payment">
                <div class="main-info-balance">
                    <h2 class="main_color_text Font-size24">Ваш баланс</h2>
                    <p class="main_color_text Font-size24">4500 руб.</p>
                </div>
                <div class="main-info-buttons">
                    <button class="add-button">Пополнить</button>
                    <button class="withdraw-button main_color_text">Вывести</button>
                </div>
            </div>
            <div class="history-payment">
                <h2 class="Font-size24 main_color_text">История операций</h2>
                <div class="table-payment">
                    <div class="table-title">
                        <ul>
                            <li>
                                <h2 class="Font-size18 main_color_text">Дата операций</h2>
                            </li>
                            <li>
                                <h2 class="Font-size18 main_color_text text-center">Тип</h2>
                            </li>
                            <li>
                                <h2 class="Font-size18 main_color_text text-right">Баланс</h2>
                            </li>
                        </ul>
                    </div>
                    <div class="table-body">
                        <ul>
                            <li>
                                <p class="Font-size18 main_color_text">16.07.2021</p>
                            </li>
                            <li>
                                <p class="Font-size18 main_color_text text-center">Начисление</p>
                            </li>
                            <li>
                                <p class="Font-size18 main_color_text text-right summ-table">+1000 руб.</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <p class="Font-size18 main_color_text">16.07.2021</p>
                            </li>
                            <li>
                                <p class="Font-size18 main_color_text text-center">Начисление</p>
                            </li>
                            <li>
                                <p class="Font-size18 main_color_text text-right summ-table">+1000 руб.</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <p class="Font-size18 main_color_text">16.07.2021</p>
                            </li>
                            <li>
                                <p class="Font-size18 main_color_text text-center">Отмена списания</p>
                            </li>
                            <li>
                                <p class="Font-size18 main_color_text text-right summ-table">+1000 руб.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="success-tasks-list">
                <h2 class="Font-size24 main_color_text">Акты выполненых работ</h2>
                <div class="success-calendar-filter">
                    <form action="">
                        <div class="main-content-form">
                            <p class="main_color_text">C</p>
                            <input type="date">
                            <p class="main_color_text">по</p>
                            <input type="date">
                            <img src="<?= Url::to(['img/profile/profile-meneger/close-icon.svg']) ?>" alt="">
                        </div>
                        <div class="button-form">
                            <button>Показать</button>
                        </div>
                    </form>
                </div>
                <div class="empty-success-task">
                    <p>Акты не найдены</p>
                </div>
                <div class="act-lists">
                    <div class="act-items white_color_bg">
                        <div class="act-items-title">
                            <h2 class="main_color_text">Акт выполненной работы №1234</h2>
                        </div>
                        <div class="act-items-img">
                            <img src="<?= Url::to(['img/profile/profile-meneger/watch-icon.svg']) ?>" alt="">
                            <img src="<?= Url::to(['img/profile/profile-meneger/install-icon.svg']) ?>" alt="">
                        </div>
                    </div>
                    <div class="act-items white_color_bg">
                        <div class="act-items-title">
                            <h2 class="main_color_text">Акт выполненной работы №1234</h2>
                        </div>
                        <div class="act-items-img">
                            <img src="<?= Url::to(['img/profile/profile-meneger/watch-icon.svg']) ?>" alt="">
                            <img src="<?= Url::to(['img/profile/profile-meneger/install-icon.svg']) ?>" alt="">
                        </div>
                    </div>
                    <div class="act-items white_color_bg">
                        <div class="act-items-title">
                            <h2 class="main_color_text">Акт выполненной работы №1234</h2>
                        </div>
                        <div class="act-items-img">
                            <img src="<?= Url::to(['img/profile/profile-meneger/watch-icon.svg']) ?>" alt="">
                            <img src="<?= Url::to(['img/profile/profile-meneger/install-icon.svg']) ?>" alt="">
                        </div>
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