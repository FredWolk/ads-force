<?php

use yii\helpers\Url;

/** @var yii\web\View $this */
$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/technical-support-single.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$this->registerCssFile(Url::to(['css/profile-performer/profile-left-nav.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$js = <<< JS
$('.select-category-text').click(function(){
    if($('.select-category-list').css('display') == "none"){
        $('.select-category-list').fadeIn(300);
        $(this).find('img').css({'transform':'translate(0%, -50%) rotate(-180deg) '})
}
    else{
        $('.select-category-list').fadeOut(300);
        $(this).find('img').css({'transform':'translate(0%, -50%) rotate(0deg)'})
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
                    <p class="more-news Font-size18 title_color">Еще + </p>
                </div>
            </div>
        </section>
        <div class="profile-right">
            <div class="support-single-title">
                <h2 class="main_color_text Font-size24">Создание обращения № 123456</h2>
            </div>
            <div class="support-single">
                <div class="select-category-title">
                    <b class="main_color_text">Категория</b>
                    <div class="select-category">
                        <div class="select-category-text white_color_bg">
                            <p>Выберите категорию</p>
                            <img src="<?= Url::to(['img/profile/profile-tasks/arrow-tehnical.svg']) ?>" alt="">
                        </div>
                        <div class="select-category-list">
                            <ul>
                                <li>
                                    <label class="container Font-size18 main_color_text">One
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container Font-size18 main_color_text">One
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tema-tehnical">
                    <b class="main_color_text">Тема</b>
                    <div class="tema-tehnical-text white_color_bg">
                        <p class="main_color_text">Возврат денег</p>
                    </div>
                </div>
                <div class="text-area">
                    <b class="main_color_text">Сообщение</b>
                    <div class="text-area-text">
                        <textarea class="main_color_text white_color_bg" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="link-file">
                    <div class="link-add">
                        <img src="<?= Url::to(['img/profile/profile-chat/post-file-icon.svg']) ?>" alt="">
                        <p>Добавить вложения</p>
                    </div>
                    <ul>
                        <li>
                            <a href="" class="main_color_text">Файл 1.png</a>
                        </li>
                        <li>
                            <a href="" class="main_color_text">Файл 2.txt</a>
                        </li>
                        <li>
                            <a href="" class="main_color_text">Файл 3.pdf</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="support-single-button">
                <button>Отправить</button>
            </div>
        </div>
    </div>
</div>