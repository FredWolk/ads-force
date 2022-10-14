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