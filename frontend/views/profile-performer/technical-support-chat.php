<?php

use yii\helpers\Url;

$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/technical-support-chat.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$this->registerCssFile(Url::to(['css/profile-performer/profile-chat-private.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$this->registerCssFile(Url::to(['css/profile-performer/profile-left-nav.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$js = <<< JS
$('.chat-private-show').click(function(){
    if($('.chat-private').css('display') == "none"){
        $('.chat-private').fadeIn(300);
        $(this).find('img').css({'transform':'rotate(-180deg) '})
}
    else{
        $('.chat-private').fadeOut(300);
        $(this).find('img').css({'transform':'rotate(0deg)'})
    }
})
$('.container').click(function(){
    $('.select-category-list').fadeOut(300);
});
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
                    <a class="more-news Font-size18 title_color">Еще + </a>
                </div>
            </div>
        </section>
        <div class="rigth-column">
            <div class="support-chat-title">
                <h2 class="main_color_text Font-size24">Данные обращения № 123456</h2>
            </div>
            <div class="support-chat-information">
                <div class="information-item">
                    <p class="Font-size18">Раздел:</p>
                    <b class="main_color_text">Статус PRO</b>
                </div>
                <div class="information-item">
                    <p class="Font-size18">Тема:</p>
                    <b class="main_color_text">Продление статуса</b>
                </div>
                <div class="information-item">
                    <p class="Font-size18">Дата:</p>
                    <b class="main_color_text">19.08.2022</b>
                </div>
                <div class="information-item">
                    <p class="Font-size18">Текст обращения:</p>
                    <b class="main_color_text">Здравствуйте! Не получается повторно продлить вип-статус.</b>
                </div>
            </div>
            <div class="chat-private-show">
                <h2>Посмотреть историю диалога с поддержкой</h2>
                <img src="<?= Url::to(['img/profile/profile-tasks/arrow-tehnical.svg']) ?>" alt="">
            </div>
            <div class="chat-private white_color_bg" style="display: none;">
                <div class="header-chat-private">
                    <div class="header-chat-img bg-chat-img">
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
                                    <div class="header-chat-img bg-chat-img">
                                        <img src="<?= Url::to(['img/profile/profile-chat/profile-chat-private.png']) ?>" alt="">
                                    </div>
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
                                    <div class="header-chat-img bg-chat-img">
                                        <img src="<?= Url::to(['img/profile/profile-chat/profile-chat-private.png']) ?>" alt="">
                                    </div>
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
                        <input type="text" class="bg-chat" placeholder="Сообщение">
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
        </div>
    </div>
</div>