<?php

use console\models\Categories;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use yii\web\JqueryAsset;

$this->registerCssFile(Url::to(['css/performers-catalog.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/component-css/filter.css']), ['depends' => ['frontend\assets\AppAsset']]);
$js = <<< JS
    $('.2-row').find('rect').css({'fill':'#1EBBED'});
    $('.1-row').find('rect').css({'fill':'#D9D9D9'});
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
$('.2-row').click(function (e) {
    $(this).find('rect').css({'fill':'#1EBBED'});
    $('.1-row').find('rect').css({'fill':'#D9D9D9'});
    $('.category-item').css({'max-width':'350px'});
    $('.category-items').css({'flex-wrap':'nowrap'});
});
$('.1-row').click(function (e) {
    $(this).find('rect').css({'fill':'#1EBBED'});
    $('.2-row').find('rect').css({'fill':'#D9D9D9'});
    $('.category-item').css({'max-width':'none'});
    $('.category-items').css({'flex-wrap':'wrap'});
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
            <svg class="2-row" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="8" height="8" fill="#E0E0E0" />
                <rect x="9" width="8" height="8" fill="#E0E0E0" />
                <rect x="9" y="9" width="8" height="8" fill="#E0E0E0" />
                <rect y="9" width="8" height="8" fill="#E0E0E0" />
            </svg>
            <svg class="1-row" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="3.4" height="3.4" fill="#D9D9D9" />
                <rect y="4.53333" width="3.4" height="3.4" fill="#D9D9D9" />
                <rect y="9.06665" width="3.4" height="3.4" fill="#D9D9D9" />
                <rect y="13.6" width="3.4" height="3.4" fill="#D9D9D9" />
                <rect x="4.5332" width="15.8667" height="3.4" fill="#D9D9D9" />
                <rect x="4.5332" y="4.53333" width="15.8667" height="3.4" fill="#D9D9D9" />
                <rect x="4.5332" y="9.06665" width="15.8667" height="3.4" fill="#D9D9D9" />
                <rect x="4.5332" y="13.6" width="15.8667" height="3.4" fill="#D9D9D9" />
            </svg>
        </div>
    </section>
    <div class="tasks-content-main">
        <section class="filter">
            <div class="filter-close">
                &times;
            </div>
            <div class="filter-open-mobile">
                <img src="<?= Url::to(['img/tasks/filter-open.svg']) ?>" alt="">
                <p class="Font-size18">Фильтры</p>
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
        <section class="category-list">
            <div class="mobile-filter">
                <div class="mobile-filter-open">
                    <img src="<?= Url::to(['img/tasks/filter-icon.svg']) ?>" alt="">
                    <p>Фильтры</p>
                </div>
                <p>Найдено 545 заданий</p>
            </div>
            <div class="view-tasks-mobile">
                <div class="view-tasks">
                    <p class="Font-size18">Отображать по:</p>
                    <ul>
                        <li>
                            <a class="Font-size18 active-view" href="">5</a>
                        </li>
                        <li>
                            <a class="Font-size18" href="">10</a>
                        </li>
                        <li>
                            <a class="Font-size18" href="">15</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="category-items">
                <div class="category-item">
                    <h3 class="Font-size18">Таргетированная реклама</h3>
                </div>
                <div class="category-item">
                    <h3 class="Font-size18">Таргетированная реклама</h3>
                </div>
            </div>
            <div class="pagination-tasks">
                <div class="view-tasks">
                    <p class="Font-size18">Отображать по:</p>
                    <ul>
                        <li>
                            <a class="Font-size18 active-view" href="">5</a>
                        </li>
                        <li>
                            <a class="Font-size18" href="">10</a>
                        </li>
                        <li>
                            <a class="Font-size18" href="">15</a>
                        </li>
                    </ul>
                </div>
                <div class="pagination-items">
                    <a href="">
                        <img src="<?= Url::to(['img/tasks/arrow-pagination.svg']) ?>" alt="">
                    </a>
                    <ul>
                        <li>
                            <a class="active-paginate" href="">1</a>
                        </li>
                        <li>
                            <a href="">2</a>
                        </li>
                        <li>
                            <a href="">3</a>
                        </li>
                    </ul>
                    <a href="">
                        <img class="right-arrow-pagination" src="<?= Url::to(['img/tasks/arrow-pagination.svg']) ?>" alt="">
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>