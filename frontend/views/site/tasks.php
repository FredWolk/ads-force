<?php

use yii\helpers\Url;
use frontend\assets\AppAsset;
use yii\web\JqueryAsset;

/** @var yii\web\View $this */

$this->title = 'My.Force';
$this->registerCssFile(Url::to(['css/tasks.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/component-css/filter.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/component-css/task-item.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/component-css/slider-rage.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerJsFile(Url::to(['js/slider-range.js']), ['depends' => JqueryAsset::class]);
$js = <<< JS
let statusFilter = false
    $('.filter-item .categories-select-top').click(function (e) {
    if($(this).parent().find('.categories-select-bottom').css('display') == "block")
    $(this).parent().find('.categories-select-bottom').fadeOut(300);
    else
        $(this).parent().find('.categories-select-bottom').fadeIn(300);
})
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
        <section class="filter-full">
            <div class="title-remuneration">
                <h2 class="Font-size18">Вознаграждение</h2>
            </div>
            <div class="remuneration">
                <div class="remuneration-minmax">
                    <div class="remuneration-minmax-item">
                        <p>От 0</p>
                        <img src="<?= Url::to(['img/tasks/rub.svg']) ?>" alt="">
                    </div>
                    <div class="remuneration-minmax-item">
                        <p>До 100.000</p>
                        <img src="<?= Url::to(['img/tasks/rub.svg']) ?>" alt="">
                    </div>
                </div>
                <div class="range_container">
                    <div class="sliders_control">
                        <input id="fromSlider" type="range" value="0" min="0" max="100000" />
                        <input id="toSlider" type="range" value="100000" min="0" max="100000" />
                    </div>
                    <div class="form_control">
                        <div class="form_control_container">
                            <input class="form_control_container__time__input" type="number" id="fromInput" value="0" min="0" max="100000" />
                        </div>
                        <div class="form_control_container">
                            <input class="form_control_container__time__input" type="number" id="toInput" value="100000" min="0" max="100000" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="title-categories">
                <h2 class="Font-size18">Категория</h2>
                <a href="" class="Font-size13">Сбросить</a>
            </div>
            <div class="categories-select">
                <div class="filter-item">
                    <div class="categories-select-top">
                        <b class="Font-size18">Интернет продвижение и реклама</b>
                        <img src="<?= Url::to(['img/tasks/arrow-filter.svg']) ?>" alt="">
                    </div>
                    <div class="categories-select-bottom">
                        <ul>
                            <li>
                                <label class="custom-checkbox">
                                    <input type="checkbox" value="value-1">
                                    <span class="Font-size13">Таргетированная реклама</span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-checkbox">
                                    <input type="checkbox" value="value-1">
                                    <span class="Font-size13">Интернет-маркетинг</span>
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
                        <img src="<?= Url::to(['img/tasks/arrow-filter.svg']) ?>" alt="">
                    </div>
                    <div class="categories-select-bottom">
                        <ul>
                            <li>
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="filter-cat" value="">
                                    <span class="Font-size13">Таргетированная реклама</span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="filter-cat" value="">
                                    <span class="Font-size13">Интернет-маркетинг</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="filter-show-more">
                <a href="" class="Font-size18">Ещё +</a>
            </div>
        </section>
        <section class="task-list">
            <div class="tasks">
                <a href="">
                    <div class="task-item">
                        <div class="filter-task-item">
                            <div class="filter-task-item-main">
                                <div class="status-task">
                                    <p>Свободен</p>
                                </div>
                                <div class="filter-view filter-task-items">
                                    <img src="<?= Url::to(['img/tasks/view.svg']) ?>" alt="">
                                    <p>22</p>
                                </div>
                                <div class="filter-view filter-task-items">
                                    <img src="<?= Url::to(['img/tasks/human-icon.svg']) ?>" alt="">
                                    <p>12</p>
                                </div>
                                <div class="filter-view filter-task-items">
                                    <img src="<?= Url::to(['img/tasks/summ.svg']) ?>" alt="">
                                    <p>Договорная</p>
                                </div>
                            </div>
                            <div class="right-item-filter">
                                <p>21 сентября</p>
                            </div>
                        </div>
                        <div class="task-title">
                            <h2 class="Font-size24">Настройка рекламы ВКонтакте</h2>
                        </div>
                        <div class="task-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Nunc vulputate libero et velit interdum, ac aliq... Подробнее</p>
                        </div>
                        <div class="task-tag-list">
                            <div class="task-tag-item">
                                <p>#тег</p>
                            </div>
                            <div class="task-tag-item">
                                <p>#тег</p>
                            </div>
                            <div class="task-tag-item">
                                <p>#тег</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </div>
</div>