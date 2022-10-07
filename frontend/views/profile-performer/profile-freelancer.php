<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/profile-chat.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$this->registerCssFile(Url::to(['css/profile-performer/profile-left-nav.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$this->registerCssFile(Url::to(['css/component-css/performers-card.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
$this->registerCssFile(Url::to(['css/profile-performer/profile-freelancer.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
?>
<div class="Profile-container">
    <h1 class="title_color Font-size36">Личный кабинет заказчика</h1>
    <div class="Profile-full">
        <section class="left-navbar">
            <div class="left-navbar-top">
                <div class="hello-user">
                    <img src="<?= Url::to(['img/profile/profile-meneger/hand.svg']) ?>" alt="">
                    <h2 class="Font-size24 main_color_text">Привет, Juliya!</h2>
                    <img src="<?= Url::to(['img/profile/profile-meneger/night.svg']) ?>" class="dark-bg" alt="">
                    <img src="<?= Url::to(['img/profile/profile-meneger/sun-icon.svg']) ?>" class="dark-bg sun" alt="">
                </div>
                <div class="balance-user">
                    <p class="Font-size18 main_color_text">Баланс: 0 руб.</p>
                </div>
                <button class="button-add-balance Font-size18">Пополнить</button>
            </div>
            <div class="left-navbar-bottom">
                <ul>
                    <li>
                        <a href="<?= Url::to(['index']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'index' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/user-icon.svg']) ?>" alt="">Моя страница</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['profile-performer/profile-tasks']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-tasks' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/doc-link-icon.svg']) ?>" alt="">Мои заказы</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['profile-chat']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-chat' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/message-link-icon.svg']) ?>" alt="">Сообщения</a>
                        <div class="circle-message">
                            <p class="white_color">12</p>
                        </div>
                    </li>
                    <li>
                        <a href="<?= Url::to(['profile-performer/profile-freelancer']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-freelancer' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/performers-link-icon.svg']) ?>" alt="">Мои исполнители</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['index']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-tasks' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/payment-link-icon.svg']) ?>" alt="">Финансы</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['index']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-tasks' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/partners-link-icon.svg']) ?>" alt="">Партнерская программа</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['index']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-tasks' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/help-link-icon.svg']) ?>" alt="">Служба поддержки</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['index']) ?>" class="Font-size24 main_color_text <?= Yii::$app->controller->action->id === 'profile-tasks' ? 'active-link' : '' ?>"><img src="<?= Url::to(['img/profile/profile-meneger/seetings-link-icon.svg']) ?>" alt="">Настройки</a>
                    </li>
                </ul>
            </div>
            <div class="left-nav-bar-news">
                <div class="news-title">
                    <img src="<?= Url::to(['img/profile/profile-meneger/news-icon.svg']) ?>" alt="">
                    <h2 class="Font-size24 main_color_text">Новости проекта</h2>
                </div>
                <div class="news-list">
                    <ul>
                        <li>
                            <p class="date-news Font-size18 white_color">18.08</p>
                            <p class="Font-size18 main_color_text">Статья «Как реклама влияет на продажи?»</p>
                        </li>
                        <li>
                            <p class="date-news Font-size18 white_color">18.08</p>
                            <p class="Font-size18 main_color_text">Запланированы технические работы с 23:00</p>
                        </li>
                        <li>
                            <p class="date-news Font-size18 white_color">28.09</p>
                            <p class="Font-size18 main_color_text">Статья «SMM: что это такое и как работает»</p>
                        </li>
                    </ul>
                    <p class="more-news Font-size18 title_color">Еще + </p>
                </div>
            </div>
        </section>
        <div class="profile-right">
            <div class="performers-cards">
                <div class="performers-card">
                    <div class="performers-card-left">
                        <img src="<?= Url::to(['img/index/Freelancer.png']) ?>" alt="">
                        <div class="performers-card-stars">
                            <div style="background-image: url(<?= Url::to(['img/index/stars.png']) ?>); height: 20px; background-repeat: no-repeat;" class="stars">
                                <div style="background-image: url(<?= Url::to(['img/index/yellowStars.png']) ?>); height: 20px; background-repeat: no-repeat; width: 40%" class="yellow_stars"></div>
                            </div>
                        </div>
                    </div>
                    <div class="performers-card-right">
                        <div class="performers-card-right-title">
                            <h2 class="Font-size20 main_color_text">name</h2>
                            <p>position</p>
                        </div>
                        <p class="text-italic main_color_text">title</p>
                        <p class="liked-message main_color_text">1810 положительных отзывов</p>
                        <ul>
                            <li>
                                <p class="Font-size20 main_color_text">skill</p>
                            </li>
                        </ul>
                    </div>

                    <div class="performers-card-mobile">
                        <div class="performers-card-mobile-top">
                            <img src="<?= Url::to(['img/index/Freelancer.png']) ?>" alt="">
                            <div>
                                <div class="performers-card-right-title">
                                    <h2 class="Font-size20 main_color_text">name</h2>
                                    <p class="main_color_text">position</p>
                                </div>
                                <p class="text-italic main_color_text">title</p>
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
                            <p class="liked-message main_color_text">1810 положительных отзывов</p>
                            <ul>
                                <li>
                                    <p class="Font-size20 main_color_text">skill</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="performers-card">
                    <div class="performers-card-left">
                        <img src="<?= Url::to(['img/index/Freelancer.png']) ?>" alt="">
                        <div class="performers-card-stars">
                            <div style="background-image: url(<?= Url::to(['img/index/stars.png']) ?>); height: 20px; background-repeat: no-repeat;" class="stars">
                                <div style="background-image: url(<?= Url::to(['img/index/yellowStars.png']) ?>); height: 20px; background-repeat: no-repeat; width: 40%" class="yellow_stars"></div>
                            </div>
                        </div>
                    </div>
                    <div class="performers-card-right">
                        <div class="performers-card-right-title">
                            <h2 class="Font-size20 main_color_text">name</h2>
                            <p>position</p>
                        </div>
                        <p class="text-italic main_color_text">title</p>
                        <p class="liked-message main_color_text">1810 положительных отзывов</p>
                        <ul>
                            <li>
                                <p class="Font-size20 main_color_text">skill</p>
                            </li>
                        </ul>
                    </div>

                    <div class="performers-card-mobile">
                        <div class="performers-card-mobile-top">
                            <img src="<?= Url::to(['img/index/Freelancer.png']) ?>" alt="">
                            <div>
                                <div class="performers-card-right-title">
                                    <h2 class="Font-size20 main_color_text">name</h2>
                                    <p class="main_color_text">position</p>
                                </div>
                                <p class="text-italic main_color_text">title</p>
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
                            <p class="liked-message main_color_text">1810 положительных отзывов</p>
                            <ul>
                                <li>
                                    <p class="Font-size20 main_color_text">skill</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!--Пагинация-->
            <div class="navigation-task">
                <button>Разместить заказ</button>
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
            <div class="left-nav-bar-news news-mobile">
                <div class="news-title">
                    <img src="<?= Url::to(['img/profile/profile-meneger/news-icon.svg']) ?>" alt="">
                    <h2 class="Font-size24 main_color_text">Новости проекта</h2>
                </div>
                <div class="news-list">
                    <ul>
                        <li>
                            <p class="date-news Font-size18 white_color">18.08</p>
                            <p class="Font-size18 main_color_text">Статья «Как реклама влияет на продажи?»</p>
                        </li>
                        <li>
                            <p class="date-news Font-size18 white_color">18.08</p>
                            <p class="Font-size18 main_color_text">Запланированы технические работы с 23:00</p>
                        </li>
                        <li>
                            <p class="date-news Font-size18 white_color">28.09</p>
                            <p class="Font-size18 main_color_text">Статья «SMM: что это такое и как работает»</p>
                        </li>
                    </ul>
                    <p class="more-news Font-size18 title_color">Еще + </p>
                </div>
            </div>
        </div>
    </div>
</div>