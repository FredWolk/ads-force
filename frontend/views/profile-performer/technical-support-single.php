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