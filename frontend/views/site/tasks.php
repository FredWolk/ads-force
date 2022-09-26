<?php

use yii\helpers\Url;
use frontend\assets\AppAsset;
use yii\web\JqueryAsset;

/** @var yii\web\View $this */

$arrMonth = [
    1 => 'января',
    2 => 'февраля',
    3 => 'марта',
    4 => 'апреля',
    5 => 'мая',
    6 => 'июня',
    7 => 'июля',
    8 => 'августа',
    9 => 'сентября',
    10 => 'октября',
    11 => 'ноября',
    12 => 'декабря',
];

$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/tasks.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/component-css/filter.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/component-css/task-item.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/component-css/slider-range.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerJsFile(Url::to(['js/slider-range.js']), ['depends' => JqueryAsset::class]);
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
    <!--title-task-->
    <section class="title-tasks">
        <div class="title-text">
            <h2 class="Font-size36">Каталог заданий</h2>
            <img src="<?= Url::to(['img/tasks/faq.svg']) ?>" alt="">
        </div>
        <div class="message-title">
            <p>В данном разделе вы можете найти подходящие своему опыту и уровню желаемой оплаты задания! Для вашего удобства воспользуйтесь фильтрами по заданиям!</p>
        </div>
    </section>
    <!--filter-text-->
    <section class="filter-inputs">
        <div class="filter-inputs-minus">
            <h2 class="Font-size18">Минус - слова</h2>
            <div class="filter-inputs-text">
                <p>UI/UX-дизайн / дизайн сайтов</p>
                <img src="<?= Url::to(['img/tasks/clear.svg']) ?>" alt="">
            </div>
        </div>
        <div class="filter-inputs-plus">
            <h2 class="Font-size18">Минус - слова</h2>
            <div class="filter-inputs-text">
                <p>UI/UX-дизайн / дизайн сайтов</p>
                <img src="<?= Url::to(['img/tasks/clear.svg']) ?>" alt="">
            </div>
        </div>
    </section>
    <div class="tasks-content-main">
        <!--filter-->
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
                <?php foreach ($category as $val) : ?>
                    <div class="categories-select">
                        <div class="filter-item">
                            <div class="categories-select-top">
                                <b class="Font-size18"><?= $val['title'] ?></b>
                                <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L13 1" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="categories-select-bottom">
                                <ul>
                                    <?php foreach ($val['subCategories'] as $i) : ?>
                                        <li>
                                            <label class="custom-checkbox">
                                                <input type="checkbox" value="value-1">
                                                <span class="Font-size18"><?= $i['title'] ?></span>
                                            </label>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="filter-show-more">
                    <a href="" class="Font-size18">Ещё +</a>
                </div>
                <div class="review-switch">
                    <label><input type="checkbox" class="ios-switch bigswitch" checked />
                        <div>
                            <div></div>
                        </div>
                    </label>
                    <p class="Font-size18">Только с отзывами</p>
                </div>
                <div class="level-task">
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
        <div class="mobile-filter">
            <div class="mobile-filter-open">
                <img src="<?= Url::to(['img/tasks/filter-icon.svg']) ?>" alt="">
                <p>Фильтры</p>
            </div>
            <p>Найдено 545 заданий</p>
        </div>
        <section class="task-list">
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
            <div class="tasks">
                <?php foreach ($tasks as $task) : ?>
                    <?php dump($task) ?>
                    <a href="<?= Url::to(['/task-page/' . $task['id']]) ?>">
                        <div class="task-item">
                            <div class="filter-task-item">
                                <div class="filter-task-item-main">
                                    <?php if ($task['status'] == 'Свободен') : ?>
                                        <div class="status-task">
                                            <p><?= $task['status'] ?></p>
                                        </div>
                                    <?php else : ?>
                                        <div class="hi-order">
                                            <p>Повышенный спрос</p>
                                            <img src="<?= Url::to(['img/tasks/smite.svg']) ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <div class="filters-list">
                                        <div class="filter-view filter-task-items">
                                            <img src="<?= Url::to(['img/tasks/view.svg']) ?>" alt="">
                                            <p><?= $task['views'] ?></p>
                                        </div>
                                        <div class="filter-view filter-task-items">
                                            <img src="<?= Url::to(['img/tasks/human-icon.svg']) ?>" alt="">
                                            <p><?= $task['responded'] ?></p>
                                        </div>
                                        <div class="filter-view filter-task-items">
                                            <img src="<?= Url::to(['img/tasks/summ.svg']) ?>" alt="">
                                            <p><?= $task['price'] > 0 ? $task['price'] : 'Договорная' ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-item-filter">
                                    <p><?= date('d', strtotime($task['date_public'])) . ' ' . $arrMonth[date('n', strtotime($task['date_public']))] ?></p>
                                </div>
                            </div>
                            <div class="task-title">
                                <h2 class="Font-size24"><?= $task['title'] ?></h2>
                            </div>
                            <div class="task-text">
                                <?= mb_substr($task['about_project'], 0, 180) ?> <span style="color: #F535DA">... Подробнее</span>
                            </div>
                            <div class="task-tag-list">
                                <?php $tags = !empty($task['tags']) ? json_decode($task['tags'], 1) : [] ?>
                                <?php foreach ($tags as $tag) : ?>
                                    <div class="task-tag-item">
                                        <p>#<?= $tag ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
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