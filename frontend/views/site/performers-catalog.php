<?php

use console\models\Categories;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use yii\web\JqueryAsset;
$this->registerCssFile(Url::to(['css/performers-catalog.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/component-css/filter.css']), ['depends' => ['frontend\assets\AppAsset']]);
$js = <<< JS
let statusFilter = false
    $('.filter-item .categories-select-top').click(function (e) {
    if($(this).parent().find('.categories-select-bottom').css('display') == "block"){
        $(this).parent().find('.categories-select-bottom').fadeOut(300);
        $(this).find('svg').css({'transform':'translate(0%, -50%) rotate(0deg)'})
    }
    else{
        $(this).parent().find('.categories-select-bottom').fadeIn(300);
        $(this).find('svg').css({'transform':'translate(0%, -50%) rotate(-180deg) '})
    }
})
$('.mobile-filter-open').click(function (e) {
    $('.filter').fadeIn(300);
    $('body').css({'overflow':'hidden'})
});

$('.filter-close').click(function (e) {
    $('.filter').fadeOut(300);
    $('body').css({'overflow':'auto'})
});
JS;
$this->registerJs($js);
AppAsset::register($this);
?>
<div class="container-index">
    <section class="title-tasks">
        <div class="title-text">
            <h2 class="Font-size36">Каталог исполнителей</h2>
            <img src="<?= Url::to(['img/tasks/faq.svg']) ?>" alt="">
        </div>
        <div class="message-title">
            <p>В данном разделе вы можете найти подходящего исполнителя в соответсвии с желаемым опытом и оплатой работ. Для удобства воспользуйтесь фильтрами!</p>
        </div>
    </section>
    <section class="category-title">
        <h2 class="Font-size24">Интернет продвижение и реклама</h2>
        <p class="Font-size18">Пусть о вашем бизнесе узнают новые клиенты</p>
    </section>
    <section class="filter-view-full">
        <div class="filter-view-category">
            <img src="<?= Url::to(['img/category-performers/1-row-icon.svg']) ?>" alt="">
            <img src="<?= Url::to(['img/category-performers/2-row-icon.svg']) ?>" alt="">
        </div>
    </section>
<section class="filter">
            <div class="filter-close">
                &times;
            </div>
            <div class="filter-open-mobile">
                <img src="<?= Url::to(['img/tasks/filter-open.svg']) ?>" alt="">
                <p class="Font-size18">Фильтры</p>
            </div>
            <div class="filter-text-mobile">
                <div class="filter-text-item">
                    <h2 class="Font-size18">Выбрано</h2>
                    <div class="filter-inputs-text">
                        <p>UI/UX-дизайн / дизайн сайтов</p>
                        <img src="<?= Url::to(['img/tasks/clear.svg']) ?>" alt="">
                    </div>
                </div>
                <div class="filter-text-item f-end">
                    <h2 class="Font-size18">Ключевые слова</h2>
                    <div class="filter-inputs-text">
                        <p>UI/UX-дизайн / дизайн сайтов</p>
                        <img src="<?= Url::to(['img/tasks/clear.svg']) ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="remuneration block-hidden-desctop">
                <div class="title-remuneration">
                    <h2 class="Font-size18">Вознаграждение</h2>
                </div>
                <div class="remuneration-minmax">
                    <div class="remuneration-minmax-item">
                        <div class="form_control_container">
                            <p>От</p>
                            <input class="form_control_container__time__input" type="number" id="fromInput" value="0" min="0" max="100000" />
                        </div>
                        <img src="<?= Url::to(['img/tasks/rub.svg']) ?>" alt="">
                    </div>
                    <div class="remuneration-minmax-item">
                        <div class="form_control_container">
                            <p>До</p>
                            <input class="form_control_container__time__input" type="number" id="toInput" value="100000" min="0" max="100000" />
                        </div>
                        <img src="<?= Url::to(['img/tasks/rub.svg']) ?>" alt="">
                    </div>
                </div>
                <div class="range_container">
                    <div class="sliders_control">
                        <input id="fromSlider" type="range" value="0" min="0" max="100000" />
                        <input id="toSlider" type="range" value="100000" min="0" max="100000" />
                    </div>
                    <div class="form_control">
                        <p>0</p>
                        <p>100000</p>
                    </div>
                </div>
            </div>
            <div class="filter-full">
                <div class="title-categories">
                    <h2 class="Font-size18">Категория</h2>
                    <a href="" class="Font-size18">Сбросить</a>
                </div>
                <div class="categories-select">
                    <div class="filter-item">
                        <div class="categories-select-top">
                            <b class="Font-size18">Интернет продвижение и реклама</b>
                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L13 1" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="categories-select-bottom">
                            <ul>
                                <li>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" value="value-1">
                                        <span class="Font-size18">Таргетированная реклама</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" value="value-1">
                                        <span class="Font-size18">Интернет-маркетинг</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="categories-select">
                    <div class="filter-item">
                        <div class="categories-select-top">
                            <b class="Font-size18">Интернет продвижение и реклама</b>
                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L13 1" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="categories-select-bottom">
                            <ul>
                                <li>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="filter-cat" value="">
                                        <span class="Font-size18">Таргетированная реклама</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="filter-cat" value="">
                                        <span class="Font-size18">Интернет-маркетинг</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="filter-show-more">
                    <a href="" class="Font-size18">Ещё +</a>
                </div>
                <div class="review-switch block-hidden-desctop">
                    <label><input type="checkbox" class="ios-switch bigswitch" checked />
                        <div>
                            <div></div>
                        </div>
                    </label>
                    <p class="Font-size18">Только с отзывами</p>
                </div>
                <div class="level-task block-hidden-desctop">
                    <h2 class="Font-size18">Выбор уровня сложности</h2>
                    <ul>
                        <li>
                            <p>Легкий</p>
                        </li>
                        <li>
                            <p>Средний</p>
                        </li>
                        <li>
                            <p>Сложный</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
</div>