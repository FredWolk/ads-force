<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
$this->registerCssFile(Url::to(['css/index.css']), ['depends' => ['frontend\assets\AppAsset']]);

$this->registerJsFile(Url::to(['js/slick.min.js']), ['depends' => \yii\web\JqueryAsset::class]);
?>
<section class="Freelancer-Full">
    <div class="Freelancer-content-center">
        <div class="Freelancer-content-text">
            <h1 class="Font-size50">Маркетологи, дизайнеры, разработчики для вашего бизнеса!</h1>
            <p class="Font-size28">Работайте с исполнителями и заказчиками по всему миру!</p>
        </div>
        <div class="Freelancer-content-buttons">
            <div class="Freelancer-content-buttons-main">
                <a href="">
                    <button>
                        <img class="Freelancer-content-buttons-main-img" src="<?= Url::to(['img/index/iconFreelanceButton.svg']) ?>" alt="">
                        <p>Исполнителю</p>
                    </button>
                </a>
            </div>
            <div class="Freelancer-content-buttons-prev">
                <a href="">
                    <button class="button-active">
                        <p>Найти заказ</p>
                    </button>
                </a>
                <a href="">
                    <button>
                        <p>Разместить портфолио</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="Freelancer-absolute-img">
        <img src="<?= Url::to(['img/index/Freelancer.png']) ?>" alt="">
    </div>
    <div class="Meneger-absolute-img">
        <img src="<?= Url::to(['img/index/Meneger.png']) ?>" alt="">
    </div>
</section>
<section class="Main-info">
    <div class="Main-info-bg container-index">
        <div class="Main-info-items">
            <div class="Main-info-item">
                <h3 class="Font-size36">500+</h3>
                <p class="Font-size24">Специалистов на бирже</p>
            </div>
            <div class="Main-info-item">
                <h3 class="Font-size36">1900+</h3>
                <p class="Font-size24">Заказов уже выполнено</p>
            </div>
            <div class="Main-info-item">
                <h3 class="Font-size36">1710+</h3>
                <p class="Font-size24">Положительных отзывов</p>
            </div>
        </div>
    </div>
</section>
<section class="performers-container container-index">
    <div class="performers-title">
        <h1 class="Font-size36">ТОП-исполнители</h1>
        <a href="">
            <button>Хочу в ТОП</button>
        </a>
    </div>
    <div class="performers-cards">
        <div class="performers-card">
            <div class="performers-card-left">
                <img src="<?= Url::to(['img/index/performerAva.png']) ?>" alt="">
                <div class="performers-card-stars">
                    <ul>
                        <li>
                            <img src="<?= Url::to(['img/index/star.svg']) ?>" alt="">
                        </li>
                        <li>
                            <img src="<?= Url::to(['img/index/star.svg']) ?>" alt="">
                        </li>
                        <li>
                            <img src="<?= Url::to(['img/index/star.svg']) ?>" alt="">
                        </li>
                        <li>
                            <img src="<?= Url::to(['img/index/star.svg']) ?>" alt="">
                        </li>
                        <li>
                            <img src="<?= Url::to(['img/index/star.svg']) ?>" alt="">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="performers-card-right">
                <div class="performers-card-right-title">
                    <h1>Александр Иванов</h1>
                    <p>PRO</p>
                </div>
                <p class="text-italic">веб-разработчик</p>
                <p class="liked-message">1810 положительных отзывов</p>
                <ul>
                    <li>
                        <p>Проф.владение Phyton, JS</p>
                    </li>
                    <li>
                        <p>Верстка моб.приложений</p>
                    </li>
                    <li>
                        <p>Backend-разработка</p>
                    </li>
                </ul>

            </div>
            <div class="performers-card-mobile">
                <div class="performers-card-mobile-top">
                    <img src="<?= Url::to(['img/index/performerAva.png']) ?>" alt="">
                    <div>
                        <div class="performers-card-right-title">
                            <h1>Александр Иванов</h1>
                            <p>PRO</p>
                        </div>
                        <p class="text-italic">веб-разработчик</p>
                        <div class="performers-card-stars">
                            <ul>
                                <li>
                                    <img src="<?= Url::to(['img/index/star.svg']) ?>" alt="">
                                </li>
                                <li>
                                    <img src="<?= Url::to(['img/index/star.svg']) ?>" alt="">
                                </li>
                                <li>
                                    <img src="<?= Url::to(['img/index/star.svg']) ?>" alt="">
                                </li>
                                <li>
                                    <img src="<?= Url::to(['img/index/star.svg']) ?>" alt="">
                                </li>
                                <li>
                                    <img src="<?= Url::to(['img/index/star.svg']) ?>" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="performers-card-mobile-bottom">
                    <p class="liked-message">1810 положительных отзывов</p>
                    <ul>
                        <li>
                            <p>Проф.владение Phyton, JS</p>
                        </li>
                        <li>
                            <p>Верстка моб.приложений</p>
                        </li>
                        <li>
                            <p>Backend-разработка</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-index specialization-full">
    <div class="performers-title-specialization">
        <h1 class="Font-size36">Специализация</h1>
    </div>
    <div class="specialization-items">
        <a href="">
            <div class="specialization-item">
                <p class="Font-size24">Дизайн</p>
            </div>
        </a>
        <a href="">
            <div class="specialization-item">
                <p class="Font-size24">Дизайн</p>
            </div>
        </a>
        <a href="">
            <div class="specialization-item">
                <p class="Font-size24">Дизайн</p>
            </div>
        </a>
        <a href="">
            <div class="specialization-item">
                <p class="Font-size24">Дизайн</p>
            </div>
        </a>
    </div>
    <div class="arrows-slider-specialization">
        <img src="<?= Url::to(['img/index/arrowSlider.svg']) ?>" alt="">
        <img class="arrows-slider-right" src="<?= Url::to(['img/index/arrowSlider.svg']) ?>" alt="">
    </div>
</section>
<section class="progressBar">
    <div class="progressBarTitle container-index">
        <h2 class="Font-size36">Как начать работу с ADSFORCE</h2>
        <button class="progressBarButton">
            <img src="<?= Url::to(['img/index/iconFreelanceButton.svg']) ?>" alt="">
            <p>Исполнителю</p>
        </button>
    </div>
    <div class="progress-bar-content container-index">
        <div class="progress-bar-img">
            <img src="<?= Url::to(['img/index/imgProgressBar.png']) ?>" alt="">
        </div>
        <div>
            <ul>
                <li>
                    <div>
                        <h1 class="Font-size24">Опубликуйте заказ</h1>
                        <p>Расскажите о задаче и опубликуйте в каталоге</p>
                    </div>
                </li>
                <li>
                    <div>
                        <h1 class="Font-size24">Опубликуйте заказ</h1>
                        <p>Расскажите о задаче и опубликуйте в каталоге</p>
                    </div>
                </li>
                <li>
                    <div>
                        <h1 class="Font-size24">Опубликуйте заказ</h1>
                        <p>Расскажите о задаче и опубликуйте в каталоге</p>
                    </div>
                </li>
                <li>
                    <div>
                        <h1 class="Font-size24">Опубликуйте заказ</h1>
                        <p>Расскажите о задаче и опубликуйте в каталоге</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="rewiev-full container-index">
    <div class="rewiew-title">
        <h2 class="Font-size36">Отзывы</h2>
    </div>
    <div class="rewiev-items">
        <div class="rewiev-card">
            <div class="rewiev-card-top">
                <img src="<?= Url::to(['img/index/rewievImg.png']) ?>" alt="">
                <div class="rewiev-card-title">
                    <h2>Дарья Агапова</h2>
                    <p>Заказчик</p>
                </div>
            </div>
            <div class="rewiev-card-content">
                <p>ADSFORCE — мой облачный офис с сотрудниками. Я владею юридическим сайтом «Автозаконы» и бывает, что мне нужны исполнители на одну конкретную задачу. В шт... читать далее</p>
            </div>
        </div>
        <div class="rewiev-card">
            <div class="rewiev-card-top">
                <img src="<?= Url::to(['img/index/rewievImg.png']) ?>" alt="">
                <div class="rewiev-card-title">
                    <h2>Дарья Агапова</h2>
                    <p>Заказчик</p>
                </div>
            </div>
            <div class="rewiev-card-content">
                <p>ADSFORCE — мой облачный офис с сотрудниками. Я владею юридическим сайтом «Автозаконы» и бывает, что мне нужны исполнители на одну конкретную задачу. В шт... читать далее</p>
            </div>
        </div>
        <div class="rewiev-card">
            <div class="rewiev-card-top">
                <img src="<?= Url::to(['img/index/rewievImg.png']) ?>" alt="">
                <div class="rewiev-card-title">
                    <h2>Дарья Агапова</h2>
                    <p>Заказчик</p>
                </div>
            </div>
            <div class="rewiev-card-content">
                <p>ADSFORCE — мой облачный офис с сотрудниками. Я владею юридическим сайтом «Автозаконы» и бывает, что мне нужны исполнители на одну конкретную задачу. В шт... читать далее</p>
            </div>
        </div>
    </div>
    <div class="arrows-slider">
        <img src="<?= Url::to(['img/index/arrowSlider.svg']) ?>" alt="">
        <img class="arrows-slider-right" src="<?= Url::to(['img/index/arrowSlider.svg']) ?>" alt="">
    </div>
</section>