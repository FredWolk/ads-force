<?php

use console\models\Categories;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use yii\web\JqueryAsset;

$this->registerCssFile(Url::to(['css/component-css/filter.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/component-css/slider-range.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/performers-page.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerJsFile(Url::to(['js/slider-range.js']), ['depends' => JqueryAsset::class]);
$js = <<< JS
let statusFilter = false
$('.select-popular p').click(function (e) {
    if($('.select-list').css('display') === "block")
        $('.select-list').fadeOut(300);
    else
        $('.select-list').fadeIn(300);
});
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
    <section>
        <div class="title-performers">
            <h2 class="Font-size24">Контекстная реклама</h2>
            <p class="Font-size18">Лучшие маркетологи здесь!</p>
        </div>
    </section>
    <section class="select-filter">
        <div class="mobile-filter-open">
            <img src="<?= Url::to(['img/tasks/filter-icon.svg']) ?>" alt="">
            <p>Фильтры</p>
        </div>
        <div class="select-popular">
            <p class="Font-size18">Сортировать по:
                <span>рекомендациям </span>
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L13 1" stroke="#1EBBED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </p>
            <div class="justify-select">
                <div class="select-list">
                    <ul>
                        <li class="Font-size18">Новизне</li>
                        <li class="Font-size18">Рекомендуемые</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="main-content">
        <section class="filter">
            <div class="filter-close">
                &times;
            </div>
            <div class="filter-open-mobile">
                <img src="<?= Url::to(['img/tasks/filter-open.svg']) ?>" alt="">
                <p class="Font-size18">Фильтры</p>
            </div>
            <div class="remuneration">
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
            </div>
        </section>
        <div class="performers-full">
            <div class="performers-cards">
                <?php if (!empty($performers)) : ?>
                    <?php foreach ($performers as $performer) : ?>
                        <div class="performers-card">
                            <div class="performers-card-left">
                                <img src="<?= Url::to([$performer['photo']]) ?>" alt="">
                                <div class="performers-card-stars">
                                    <div style="background-image: url(<?= Url::to(['img/index/stars.png']) ?>); height: 20px; background-repeat: no-repeat;" class="stars">
                                        <div style="background-image: url(<?= Url::to(['img/index/yellowStars.png']) ?>); height: 20px; background-repeat: no-repeat; width: <?= $performer['rating'] ?>%" class="yellow_stars"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="performers-card-right">
                                <div class="performers-card-right-title">
                                    <h2 class="Font-size20"><?= $performer['name'] ?></h2>
                                    <p><?= $performer['position'] ?></p>
                                </div>
                                <?php
                                $category = Categories::find()->asArray()->where(['id' => $performer['specialization_id']])->select('title')->one();
                                $skils = json_decode($performer['skills'], 1);
                                ?>
                                <p class="text-italic"><?= $category['title'] ?></p>
                                <p class="liked-message">1810 положительных отзывов</p>
                                <ul>
                                    <?php if ($skils) : ?>
                                        <?php foreach ($skils as $skill) : ?>
                                            <li>
                                                <p class="Font-size20"><?= $skill ?></p>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <div class="performers-card-mobile">
                                <div class="performers-card-mobile-top">
                                    <img src="<?= Url::to([$performer['photo']]) ?>" alt="">
                                    <div>
                                        <div class="performers-card-right-title">
                                            <h2 class="Font-size20"><?= $performer['name'] ?></h2>
                                            <p><?= $performer['position'] ?></p>
                                        </div>
                                        <p class="text-italic"><?= $category['title'] ?></p>
                                        <div class="performers-card-stars">
                                            <ul>
                                                <li>
                                                    <div class="yellowStar"></div>
                                                </li>
                                                <li>
                                                    <div class="yellowStar"></div>
                                                </li>
                                                <li>
                                                    <div class="yellowStar"></div>
                                                </li>
                                                <li>
                                                    <div class="yellowStar"></div>
                                                </li>
                                                <li>
                                                    <div class="yellowStar"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="performers-card-mobile-bottom">
                                    <p class="liked-message">1810 положительных отзывов</p>
                                    <ul>
                                        <?php if ($skils) : ?>
                                            <?php foreach ($skils as $skill) : ?>
                                                <li>
                                                    <p class="Font-size20"><?= $skill ?></p>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
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
    </div>
</div>