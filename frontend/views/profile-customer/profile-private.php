<?php

use yii\web\JqueryAsset;
use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/profile-private-cabinet.css']), ['depends' => ['frontend\assets\ProfileCustomerAsset']]);
$this->registerCssFile(Url::to(['css/component-css/task-item.css']), ['depends' => ['frontend\assets\ProfileCustomerAsset']]);
$this->registerCssFile(Url::to(['css/slick-theme.css']), ['depends' => ['frontend\assets\ProfileCustomerAsset']]);
$this->registerCssFile(Url::to(['css/slick.css']), ['depends' => ['frontend\assets\ProfileCustomerAsset']]);
$this->registerJsFile(Url::to(['js/slick.min.js']), ['depends' => JqueryAsset::class]);
$js = <<< JS
const availableScreenWidth = window.screen.availWidth;
  $('.rewiev-items').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  prevArrow: $('.prev'),
nextArrow: $('.next'),
responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

$('.rewiev-items-mobile').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  prevArrow: $('.prev-mobile'),
nextArrow: $('.next-mobile'),
responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});
$('.content-text img').click(function(e){
    if($('.content-text p').css('display') !== "none"){
        $('.content-text').append('<textarea rows="10" cols="45" name="text"> </ textarea>');
    $('.content-text textarea').text($('.content-text p').text());
    $('.content-text textarea').removeAttr('id');
    $('.content-text textarea').addClass('bg-chat');
    $('.content-text textarea').addClass('main_color_text');
    $('.content-text p').css({'display':'none'});
    $('.content-text textarea').attr('type', 'text');
    }
    else{
        $('.content-text p').css({'display':'inline'});
        $('.content-text textarea').css({'display':'none'})
    }
});
$('.information-text-profile img').click(function(e){
    if($('.information-text-profile p').css('display') !== "none"){
        $('.information-text-profile').append('<textarea rows="10" cols="45" name="text"> </ textarea>');
    $('.information-text-profile textarea').text($('.content-text p').text());
    $('.information-text-profile textarea').removeAttr('id');
    $('.information-text-profile textarea').addClass('bg-chat');
    $('.information-text-profile textarea').addClass('main_color_text');
    $('.information-text-profile p').css({'display':'none'});
    $('.information-text-profile textarea').attr('type', 'text');
    }
    else{
        $('.information-text-profile p').css({'display':'inline'});
        $('.information-text-profile textarea').css({'display':'none'})
    }
});
$('.rewiev-nav').click(function(e){
    $('.content-text').fadeOut(300);
    $('.rewiev-full').fadeIn(300);
    $('.tasks-item').fadeOut(300);
});
$('.information-nav').click(function(e){
    $('.content-text').fadeIn(300);
    $('.rewiev-full').fadeOut(300);
    $('.tasks-item').fadeOut(300);
});
$('.tasks-nav').click(function(e){
    $('.content-text').fadeOut(300);
    $('.rewiev-full').fadeOut(300);
    $('.tasks-item').fadeIn(300);
});
$('.mobile-review-text').click(function(e){
    if($(this).parent().find('.block-mobile-information-content').css('display') == "block"){
        $(this).parent().find('.block-mobile-information-content').fadeOut(300);
        $(this).find('img').css({'transform':'rotate(0deg)'})
    }
    else{
        $('.mobile-nav img').css({'transform':'rotate(0deg)'});
        $('.block-mobile-information-content').fadeOut(300);
        $(this).parent().find('.block-mobile-information-content').fadeIn(300);
        $(this).find('img').css({'transform':'rotate(-180deg) '})
$('.rewiev-items-mobile').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  prevArrow: $('.prev-mobile'),
nextArrow: $('.next-mobile'),
responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});
    }
});
$('.mobile-information-text').click(function(e){
    if($(this).parent().find('.block-mobile-information-content').css('display') == "block"){
        $(this).parent().find('.block-mobile-information-content').fadeOut(300);
        $(this).find('img').css({'transform':'rotate(0deg)'})
    }
    else{
        $('.mobile-nav img').css({'transform':'rotate(0deg)'});
        $('.block-mobile-information-content').fadeOut(300);
        $(this).parent().find('.block-mobile-information-content').fadeIn(300);
        $(this).find('img').css({'transform':'rotate(-180deg) '})
    }
})
$('.load-more-rewiev').click(function(e) {
    $('.modalReview').css({'display':'flex'});
$('.modalReviewContainer').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: $('.prev-review-modal'),
nextArrow: $('.next-review-modal')
});
});
$('.rewiev-card-close').click(function(e) {
    $('.modalReview').fadeOut(300);
});
$('.content-text-mobile img').click(function(e){
    if($('.content-text-mobile p').css('display') !== "none"){
        $('.content-text-mobile').append('<textarea rows="10" cols="45" name="text"> </ textarea>');
    $('.content-text-mobile textarea').text($('.content-text p').text());
    $('.content-text-mobile textarea').removeAttr('id');
    $('.content-text-mobile textarea').addClass('bg-chat');
    $('.content-text-mobile textarea').addClass('main_color_text');
    $('.content-text-mobile p').css({'display':'none'});
    $('.content-text-mobile textarea').attr('type', 'text');
    }
    else{
        $('.content-text-mobile p').css({'display':'inline'});
        $('.content-text-mobile textarea').css({'display':'none'})
    }
});
$('.tag-button').click(function(e){
    $('.tag-input').fadeIn(300);
});
JS;
$this->registerJs($js);
?>
<section>
    <div class="fon-custom" style="background: linear-gradient(90deg, #00D2FF 0%, #3A7BD5 100%);">
        <img src="<?= Url::to(['img/profile/private-profile/img-fon.png']) ?>" alt="">
    </div>
</section>
<div class="modalReview">
    <div class="modalReviewContainer">
        <div class="rewiev-card white_color_bg">
            <div class="rewiev-card-close">
                &times;
            </div>
            <div class="rewiev-card-top">

                <img src="<?= Url::to(['img/index/rewievImg.png']) ?>" alt="">
                <div class="rewiev-card-title">
                    <h2 class="Font_size24 main_color_text">Дарья Агапова</h2>
                    <p class="main_color_text">Заказчик</p>
                </div>
            </div>
            <div class="rewiev-card-content">
                <p class="main_color_text">ADSFORCE — мой облачный офис с сотрудниками. Я владею юридическим сайтом «Автозаконы» и бывает, что мне нужны исполнители на одну конкретную задачу. В шт... читать далее</p>
            </div>
        </div>
        <div class="rewiev-card white_color_bg">
            <div class="rewiev-card-close">
                &times;
            </div>
            <div class="rewiev-card-top">
                <img src="<?= Url::to(['img/index/rewievImg.png']) ?>" alt="">
                <div class="rewiev-card-title">
                    <h2 class="Font_size24 main_color_text">Дарья Агапова</h2>
                    <p class="main_color_text">Заказчик</p>
                </div>
            </div>
            <div class="rewiev-card-content">
                <p class="main_color_text">ADSFORCE — мой облачный офис с сотрудниками. Я владею юридическим сайтом «Автозаконы» и бывает, что мне нужны исполнители на одну конкретную задачу. В шт... читать далее</p>
            </div>
        </div>
    </div>
    <div class="arrows-slider container-index">
        <img class="prev-review-modal" src="<?= Url::to(['img/index/arrowSlider.svg']) ?>" alt="">
        <img class="arrows-slider-right next-review-modal" src="<?= Url::to(['img/index/arrowSlider.svg']) ?>" alt="">
    </div>
</div>
<div class="Profile-container" style="max-width: 1110px; padding:0px 20px;">
    <div class="back-link">
        <a onclick="history.back()" style="cursor:pointer;" class="Font-size18"><img src="<?= Url::to(['img/profile/private-profile/back-profile.svg']) ?>" alt="">Вернуться назад</a>
    </div>
    <div class="profile-full">
        <div class="profile-left">
            <section class="profile-info">
                <div class="img-profile-full">
                    <div class="img-profile">
                        <?php if(!empty($info['photo'])): ?>
                            <img src="<?= Url::to([$info['photo']]) ?>" alt="">
                        <?php else: ?>
                            <img src="<?= Url::to(['img/profile/private-profile/profile-img.png']) ?>" alt="">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="profile-text">
                    <div class="profile-name">
                        <h2 class="Font-size24 main_color_text"><?= !empty($info['fio']) ? $info['fio'] : 'Имя не указано' ?></h2>
                        <img src="<?= Url::to(['img/profile/private-profile/confirm-icon.svg']) ?>" alt="">
                        <a href="<?= Url::to(['profile-seetings']) ?>"><img src="<?= Url::to(['img/profile/private-profile/pen.svg']) ?>" alt=""></a>
                    </div>
                    <p class="main_color_text">заказчик</p>
                    <div class="performers-card-stars">
                        <div style="background-image: url(<?= Url::to(['img/index/stars.png']) ?>); height: 20px; background-repeat: no-repeat; max-width:140px; width:100%;" class="stars">
                            <div style="background-image: url(<?= Url::to(['img/index/yellowStars.png']) ?>); height: 20px; background-repeat: no-repeat; width: <?= !empty($info['rating']) ? $info['rating'] : 0 ?>%" class="yellow_stars"></div>
                        </div>
                        <p class="Font-size24 main_color_text"><?= !empty($info['rating']) ? $info['rating'] : 0 ?></p>
                    </div>
                    <div class="profile-date">
                        <p>На сайте с <?= date('d.m.Y', strtotime($info['date'])) ?></p>
                    </div>
                </div>
            </section>
            <section class="information-text-profile white_color_bg">
                <div>
                    <p class="Font-size24 main_color_text"><b>Обо мне:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                </div>
                <img class="pen-abs" src="<?= Url::to(['img/profile/private-profile/pen.svg']) ?>" alt="">
            </section>
        </div>
        <div class="profile-right">
            <section class="skills-user">
                <p class="mobile-title-skills">Категории работы:</p>
                <div class="skills-user-items">
                    <div class="skills-item white_color_bg">
                        <p class="Font-size24 main_color_text">SEO</p>
                    </div>
                    <div class="skills-item white_color_bg">
                        <p class="Font-size24 main_color_text">SEO</p>
                    </div>
                    <div class="skills-item white_color_bg">
                        <p class="Font-size24 main_color_text">SEO</p>
                    </div>
                    <div class="skills-item white_color_bg">
                        <p class="Font-size24 main_color_text">SEO</p>
                    </div>
                </div>
                <input type="text" style="display:none;" class="tag-input main_color_text white_color_bg" placeholder="Добавить тег" name="tag">
                <a class="white_color tag-button">Добавить
                </a>
            </section>
        </div>
    </div>
    <section class="all-information-table white_color_bg">
        <div class="top-nav">
            <div class="nav-item rewiev-nav">
                <h2 class="Font-size24 main_color_text">ОТЗЫВЫ</h2>
            </div>
            <div class="nav-item information-nav">
                <h2 class="Font-size24 main_color_text">Информация</h2>
            </div>
            <div class="nav-item tasks-nav">
                <h2 class="Font-size24 main_color_text">Свободные задания</h2>
            </div>
        </div>
        <div class="content">
            <div class="content-item content-text">
                <p class="Font-size24 main_color_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.</p>
                <img class="pen-abs" src="<?= Url::to(['img/profile/private-profile/pen.svg']) ?>" alt="">
            </div>
            <section class="rewiev-full">
                <div class="rewiev-items container-index">
                    <div class="rewiev-card">
                        <div class="rewiev-card-top">
                            <img src="<?= Url::to(['img/index/rewievImg.png']) ?>" alt="">
                            <div class="rewiev-card-title">
                                <h2 class="Font_size24 main_color_text">Дарья Агапова</h2>
                                <p class="main_color_text">Заказчик</p>
                            </div>
                        </div>
                        <div class="rewiev-card-content">
                            <p class="main_color_text">ADSFORCE — мой облачный офис с сотрудниками. Я владею юридическим сайтом «Автозаконы» и бывает, что мне нужны исполнители на одну конкретную задачу. В шт... <span class="load-more-rewiev" style="color:#F535DA; cursor:pointer;">читать далее</span></p>
                        </div>
                    </div>
                    <div class="rewiev-card">
                        <div class="rewiev-card-top">
                            <img src="<?= Url::to(['img/index/rewievImg.png']) ?>" alt="">
                            <div class="rewiev-card-title">
                                <h2 class="Font_size24 main_color_text">Дарья Агапова</h2>
                                <p class="main_color_text">Заказчик</p>
                            </div>
                        </div>
                        <div class="rewiev-card-content">
                            <p class="main_color_text">ADSFORCE — мой облачный офис с сотрудниками. Я владею юридическим сайтом «Автозаконы» и бывает, что мне нужны исполнители на одну конкретную задачу. В шт... <span class="load-more-rewiev" style="color:#F535DA; cursor:pointer;">читать далее</span></p>
                        </div>
                    </div>
                    <div class="rewiev-card">
                        <div class="rewiev-card-top">
                            <img src="<?= Url::to(['img/index/rewievImg.png']) ?>" alt="">
                            <div class="rewiev-card-title">
                                <h2 class="Font_size24 main_color_text">Дарья Агапова</h2>
                                <p class="main_color_text">Заказчик</p>
                            </div>
                        </div>
                        <div class="rewiev-card-content">
                            <p class="main_color_text">ADSFORCE — мой облачный офис с сотрудниками. Я владею юридическим сайтом «Автозаконы» и бывает, что мне нужны исполнители на одну конкретную задачу. В шт... <span class="load-more-rewiev" style="color:#F535DA; cursor:pointer;">читать далее</span></p>
                        </div>
                    </div>
                </div>
                <div class="arrows-slider container-index">
                    <img class="prev" src="<?= Url::to(['img/index/arrowSlider.svg']) ?>" alt="">
                    <img class="arrows-slider-right next" src="<?= Url::to(['img/index/arrowSlider.svg']) ?>" alt="">
                </div>
            </section>
            <div class="tasks tasks-item">
                <a data-pjax="0" href="<?= Url::to(['new-task-preview']) ?>">
                    <div class="task-item">
                        <div class="filter-task-item">
                            <div class="filter-task-item-main">
                                <div class="hi-order">
                                    <p>Свободен</p>
                                    <img src="<?= Url::to(['img/tasks/smite.svg']) ?>" alt="">
                                </div>
                                <div class="filters-list">
                                    <div class="filter-view filter-task-items">
                                        <img src="<?= Url::to(['img/tasks/view.svg']) ?>" alt="">
                                        <p>0</p>
                                    </div>
                                    <div class="filter-view filter-task-items">
                                        <img src="<?= Url::to(['img/tasks/human-icon.svg']) ?>" alt="">
                                        <p>12</p>
                                    </div>
                                    <div class="filter-view filter-task-items">
                                        <img src="<?= Url::to(['img/tasks/summ.svg']) ?>" alt="">
                                        <p>5000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="right-item-filter">
                                <p>29 сентября</p>
                                <img src="<?= Url::to(['img/profile/private-profile/pen.svg']) ?>" alt="">
                                <img src="<?= Url::to(['img/profile/private-profile/close-task.svg']) ?>" alt="">
                            </div>
                        </div>
                        <div class="task-title">
                            <h2 class="Font-size24 main_color_text">вк</h2>
                        </div>
                        <div class="task-text main_color_text">
                            <span style="color: #F535DA">... Подробнее</span>
                        </div>
                        <div class="task-tag-list">
                            <div class="task-tag-item">
                                <p>#тег</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="pagination-links">
                    <p>Показано 3 из 20</p>
                    <a href="<?= Url::to(['profile-create-task']) ?>" class="add-mobile-task">Добавить</a>
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
        </div>
    </section>
    <section class="mobile-information-table">
        <div class="mobile-rewiev">
            <div class="mobile-review-text mobile-nav white_color_bg">
                <h2 class="Font-size18 main_color_text">ОТЗЫВЫ</h2>
                <img src="<?= Url::to(['img/profile/private-profile/arrow-mobile.svg']) ?>" style="transform:rotate(-180deg)" alt="">
            </div>
            <div class="block-mobile-information-content">
                <section class="rewiev-full">
                    <div class="rewiev-items-mobile container-index">
                        <div class="rewiev-card">
                            <div class="rewiev-card-top">
                                <img src="<?= Url::to(['img/index/rewievImg.png']) ?>" alt="">
                                <div class="rewiev-card-title">
                                    <h2 class="Font_size24 main_color_text">Дарья Агапова</h2>
                                    <p class="main_color_text">Заказчик</p>
                                </div>
                            </div>
                            <div class="rewiev-card-content">
                                <p class="main_color_text">ADSFORCE — мой облачный офис с сотрудниками. Я владею юридическим сайтом «Автозаконы» и бывает, что мне нужны исполнители на одну конкретную задачу. В шт... <span class="load-more-rewiev" style="color:#F535DA; cursor:pointer;">читать далее</span></p>
                            </div>
                        </div>
                        <div class="rewiev-card">
                            <div class="rewiev-card-top">
                                <img src="<?= Url::to(['img/index/rewievImg.png']) ?>" alt="">
                                <div class="rewiev-card-title">
                                    <h2 class="Font_size24 main_color_text">Дарья Агапова</h2>
                                    <p class="main_color_text">Заказчик</p>
                                </div>
                            </div>
                            <div class="rewiev-card-content">
                                <p class="main_color_text">ADSFORCE — мой облачный офис с сотрудниками. Я владею юридическим сайтом «Автозаконы» и бывает, что мне нужны исполнители на одну конкретную задачу. В шт... <span class="load-more-rewiev" style="color:#F535DA; cursor:pointer;">читать далее</span></p>
                            </div>
                        </div>
                        <div class="rewiev-card">
                            <div class="rewiev-card-top">
                                <img src="<?= Url::to(['img/index/rewievImg.png']) ?>" alt="">
                                <div class="rewiev-card-title">
                                    <h2 class="Font_size24 main_color_text">Дарья Агапова</h2>
                                    <p class="main_color_text">Заказчик</p>
                                </div>
                            </div>
                            <div class="rewiev-card-content">
                                <p class="main_color_text">ADSFORCE — мой облачный офис с сотрудниками. Я владею юридическим сайтом «Автозаконы» и бывает, что мне нужны исполнители на одну конкретную задачу. В шт... <span class="load-more-rewiev" style="color:#F535DA; cursor:pointer;">читать далее</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="arrows-slider container-index">
                        <img class="prev-mobile" src="<?= Url::to(['img/index/arrowSlider.svg']) ?>" alt="">
                        <img class="arrows-slider-right next-mobile" src="<?= Url::to(['img/index/arrowSlider.svg']) ?>" alt="">
                    </div>
                </section>
            </div>
        </div>
        <div class="mobile-information">
            <div class="mobile-information-text mobile-nav white_color_bg">
                <h2 class="Font-size18 main_color_text">ИНФОРМАЦИЯ</h2>
                <img src="<?= Url::to(['img/profile/private-profile/arrow-mobile.svg']) ?>" alt="">
            </div>
            <div class="block-mobile-information-content mobile-hide-info">
                <div class="content-item text-information content-text-mobile">
                    <p class="Font-size24 main_color_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.</p>
                    <img class="pen-abs" src="<?= Url::to(['img/profile/private-profile/pen.svg']) ?>" alt="">
                </div>
            </div>
        </div>
        <div class="mobile-task">
            <div class="mobile-information-text mobile-nav white_color_bg">
                <h2 class="Font-size18 main_color_text">СВОБОДНЫЕ ЗАДАНИЯ</h2>
                <img src="<?= Url::to(['img/profile/private-profile/arrow-mobile.svg']) ?>" alt="">
            </div>
            <div class="block-mobile-information-content  mobile-hide-info">
                <div class="tasks tasks-item">
                    <a data-pjax="0" href="<?= Url::to(['new-task-preview']) ?>">
                        <div class="task-item white_color_bg">
                            <div class="filter-task-item">
                                <div class="filter-task-item-main">
                                    <div class="hi-order">
                                        <p>Свободен</p>
                                        <img src="<?= Url::to(['img/tasks/smite.svg']) ?>" alt="">
                                    </div>
                                    <div class="filters-list">
                                        <div class="filter-view filter-task-items">
                                            <img src="<?= Url::to(['img/tasks/view.svg']) ?>" alt="">
                                            <p>0</p>
                                        </div>
                                        <div class="filter-view filter-task-items">
                                            <img src="<?= Url::to(['img/tasks/human-icon.svg']) ?>" alt="">
                                            <p>12</p>
                                        </div>
                                        <div class="filter-view filter-task-items">
                                            <img src="<?= Url::to(['img/tasks/summ.svg']) ?>" alt="">
                                            <p>5000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-item-filter">
                                    <p>29 сентября</p>
                                    <img src="<?= Url::to(['img/profile/private-profile/pen.svg']) ?>" alt="">
                                    <img src="<?= Url::to(['img/profile/private-profile/close-task.svg']) ?>" alt="">
                                </div>
                            </div>
                            <div class="task-title">
                                <h2 class="Font-size24 main_color_text">вк</h2>
                            </div>
                            <div class="task-text main_color_text">
                                dasdas
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
                <div class="pagination-links">
                    <p>Показано 3 из 20</p>
                    <a href="<?= Url::to(['profile-create-task']) ?>" class="add-mobile-task">Добавить</a>
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
        </div>
    </section>
</div>