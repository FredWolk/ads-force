<?php

use yii\helpers\Url;
use frontend\assets\AppAsset;
use yii\web\JqueryAsset;

$this->registerCssFile(Url::to(['css/task-page.css']), ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile(Url::to(['css/component-css/task-item.css']), ['depends' => ['frontend\assets\AppAsset']]);
AppAsset::register($this);
?>
<div class="container-index">
    <div class="task-page-full">
        <div class="link-back">
            <a style="cursor: pointer;" onclick="history.back()"><img src="<?= Url::to(['img/task-page/arrow-task.svg']) ?>" /> Вернуться назад</a>
        </div>
        <div class="task-card">
            <div class="filter-task-item">
                <div class="filter-task-item-main">
                    <div class="status-task">
                        <p>Свободен</p>
                    </div>
                    <div class="filters-list">
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
                </div>
                <div class="right-item-filter">
                    <p>21 сентября</p>
                </div>
            </div>
            <div class="task-title">
                <h2 class="Font-size24">Настройка рекламы ВКонтакте</h2>
            </div>
            <div class="task-text-about-project">
                <p class="Font_size18">
                    <b>О проекте:</b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
                </p>
            </div>
            <div class="tehnical-text">
                <p class="Font_size18"><b>Техническое задание:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
                    Curabitur vel bibendum lorem.
                    Curabitur vel bibendum lorem.
                    Curabitur vel bibendum lorem.
                    Curabitur vel bibendum lorem.
                    Curabitur vel bibendum lorem.
                </p>
            </div>
            <div class="file-block">
                <img src="<?= Url::to(['img/task-page/file-icon.svg']) ?>" alt="">
                <div class="file-list">
                    <ul>
                        <li>
                            <a href="" target="_blank">Файл 1.png</a>
                        </li>
                        <li>
                            <a href="" target="_blank">Файл 1.png</a>
                        </li>
                        <li>
                            <a href="" target="_blank">Файл 1.png</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <p><b>Срок выполнения:</b> 1 месяц</p>
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
        <div class="task-button">
            <button class="Font-size28">Откликнуться</button>
        </div>
    </div>
</div>