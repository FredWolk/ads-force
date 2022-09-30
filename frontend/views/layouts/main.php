<?php

/** @var \yii\web\View $this */
/** @var string $content */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;

$js = <<< JS

$('.Modal-close').click(function(e) {
    $('.modalRegister').fadeOut(300);
    $('body').css({'overflow':'auto'})
});

$('.registration').click(function(e) {
    $('.modalRegister').css({'display':'flex'});
    $('body').css({'overflow':'hidden'})
});

$('.Modal-login-close').click(function(e) {
    $('.modalLogin').fadeOut(300);
    $('body').css({'overflow':'auto'})
});

$('.login').click(function(e) {
    $('.modalLogin').css({'display':'flex'});
    $('body').css({'overflow':'hidden'})
});

$('.swap-modal').click(function(e) {
    if($('.modalLogin').css('display') == "flex"){
        $('.modalLogin').css({'display':'none'});
        $('.modalRegister').css({'display':'flex'})
    }
    else
        if($('.modalRegister').css('display') == "flex"){
            $('.modalRegister').css({'display':'none'});
            $('.modalLogin').css({'display':'flex'})
        }
});
JS;
$this->registerJs($js);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <header>
            <div class="header__container">
                <div class="header-main">
                    <div class="logo-lang">
                        <div class="logo">ADSFORCE</div>
                        <div class="language">
                            <span>Eng</span> <span>|</span> <img src="<?= Url::to(['img/footer-header/language-en.webp']) ?>" alt="logo">
                        </div>
                    </div>

                    <div class="links">
                        <div class="link">
                            <a href="">Заказчику</a>
                        </div>
                        <div class="link">
                            <a href="">Исполнителю</a>
                        </div>
                        <div class="link">
                            <a href="">Почему ADS.FORCE</a>
                        </div>
                        <div class="link">
                            <a href="">Разместить заказ</a>
                        </div>

                    </div>

                    <div class="entry">
                        <div class="login">Вход</div>
                        <div class="registration">Регистрация</div>
                    </div>

                    <!-- появляется при > 1024px-->
                    <div class="header__menu">
                        <input id="menu__toggle" type="checkbox">
                        <label class="menu__btn" for="menu__toggle">
                            <span></span>
                        </label>
                        <ul class="menu__box">
                            <input id="menu__toggle-inner" type="checkbox" checked>
                            <label class="menu__btn" for="menu__toggle">
                                <span></span>
                            </label>
                            <div class="entry">
                                <div class="login">Вход</div>
                                <div class="registration">Регистрация</div>
                            </div>
                            <li>
                                <a class="menu__item" href="">Заказчику</a>
                            </li>
                            <li>
                                <a class="menu__item" href="">Исполнителю</a>
                            </li>
                            <li>
                                <a class="menu__item" href="">Почему ADS.FORCE</a>
                            </li>
                            <li>
                                <a class="menu__item" href="">Разместить заказ</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="header-search">
                    <div class="search__container search">
                        <img src="<?= Url::to(['img/footer-header/search.webp']) ?>" alt="">
                        <input type="text" placeholder="Поиск">
                    </div>
                </div>

            </div>
        </header>
        <div class="modalRegister">
            <div class="modalBlock">
                <div class="Modal-close">
                    <p>&times;</p>
                </div>
                <h2 class="Font-size24">Добро пожаловать!</h2>
                <div class="modalForm">
                    <form action="">
                        <input type="email" required placeholder="Номер телефона или e-mail" name="email">
                        <input type="password" required placeholder="Придумайте пароль" name="password">
                        <input type="password" required placeholder="Повторите пароль" name="second-pass">
                        <button class="Font-size24">Зарегистрироваться</button>
                    </form>
                    <div class="alternative-registration">
                        <div class="alternative-registration-block">
                            <p class="Font-size18">Регистрация с помощью</p>
                            <ul>
                                <li><a href=""><img src="<?= Url::to(['img/index/yandex-logo.svg']) ?>" alt=""></a></li>
                                <li><a href=""><img src="<?= Url::to(['img/index/google-icon.svg']) ?>" alt=""></a></li>
                                <li><a href=""><img src="<?= Url::to(['img/index/vk-icon.svg']) ?>" alt=""></a></li>
                                <li><a href=""><img src="<?= Url::to(['img/index/email-icon.svg']) ?>" alt=""></a></li>
                            </ul>
                            <p class="swap-modal Font-size18">Вход</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modalLogin">
            <div class="modalBlock">
                <div class="Modal-login-close">
                    <p>&times;</p>
                </div>
                <h2 class="Font-size24">Добро пожаловать!</h2>
                <div class="modalForm">
                    <form action="">
                        <input type="email" placeholder="Логин" required name="Login">
                        <input type="password" placeholder="Пароль" required name="password">
                        <a class="password-link">Забыл пароль?</a>
                        <button class="Font-size24">Войти</button>
                    </form>
                    <div class="alternative-registration">
                        <div class="alternative-registration-block">
                            <p class="Font-size18">Войти с помощью</p>
                            <ul>
                                <li><a href=""><img src="<?= Url::to(['img/index/yandex-logo.svg']) ?>" alt=""></a></li>
                                <li><a href=""><img src="<?= Url::to(['img/index/google-icon.svg']) ?>" alt=""></a></li>
                                <li><a href=""><img src="<?= Url::to(['img/index/vk-icon.svg']) ?>" alt=""></a></li>
                                <li><a href=""><img src="<?= Url::to(['img/index/email-icon.svg']) ?>" alt=""></a></li>
                            </ul>
                            <p class="swap-modal Font-size18">Регистрация</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main role="main" class="flex-shrink-0">
            <?= $content ?>
        </main>

        <footer class="mt-auto">
            <div class="footer__container">
                <div class="footer-main">
                    <div class="logo-feedback">
                        <div class="logo-lang">
                            <div class="logo">ADSFORCE</div>
                            <div class="language">
                                <span>Eng</span> <span>|</span> <img src="<?= Url::to(['img/footer-header/language-en.webp']) ?>" alt="logo">
                            </div>
                        </div>
                        <div class="contacts-mobile">
                            <div class="contacts-mobile__phone">
                                <img src="<?= Url::to(['img/footer-header/phone-mobile.webp']) ?>" alt="">
                                <a href="tel:8 945 118 39 34" class="contacts__tel">8 945 118 39 34</a>
                            </div>
                            <div class="contacts-mobile__email">
                                <img src="<?= Url::to(['img/footer-header/email-mobile.webp']) ?>" alt="">
                                <a href="mailto:general@myforce.ru" class="contacts__email">general@myforce.ru</a>
                            </div>
                        </div>
                        <div class="feedback-text">Если у вас возникли какие-либо вопросы, мы с радостью поможем</div>
                        <button class="footer-btn">Обратная связь</button>
                        <div class="personal-data">
                            *отправляя формы на данном сайте, вы даёте согласие на обработку персональных данных
                            в соответствии с 152-ФЗ
                        </div>
                    </div>

                    <div class="footer__links">
                        <div class="links__left-column">
                            <div class="link">
                                <a href="">Заказчику</a>
                            </div>
                            <div class="link">
                                <a href="">Исполнителю</a>
                            </div>
                            <div class="link">
                                <a href="">Почему ADS.FORCE</a>
                            </div>
                            <div class="link">
                                <a href="">Быстрый старт</a>
                            </div>
                        </div>

                        <div class="links__right-column">
                            <div class="link">
                                <a href="">ТОП — исполнителей</a>
                            </div>
                            <div class="link">
                                <a href="">Каталог исполнителей</a>
                            </div>
                            <div class="link">
                                <a href="">Специализации</a>
                            </div>
                            <div class="link">
                                <a href="">Отзывы</a>
                            </div>
                        </div>

                    </div>

                    <div class="info__other">
                        <div class="entry">
                            <div class="login">Вход</div>
                            <div class="registration">Регистрация</div>
                        </div>
                        <div class="info__contacts">
                            <a href="tel:8 945 118 39 34" class="contacts__tel">8 945 118 39 34</a>
                            <a href="mailto:general@myforce.ru" class="contacts__email">general@myforce.ru</a>
                            <div class="contacts-icons">
                                <a href="https://t.me/gsilver27" target="_blank">
                                    <img src="<?= Url::to(['img/footer-header/telegram.webp']) ?>" alt="Telegram">
                                </a>
                                <a href="" target="_blank">
                                    <img src="<?= Url::to(['img/footer-header/instagram.webp']) ?>" alt="Instagram">
                                </a>
                            </div>
                        </div>
                        <div class="info__other">
                            <div>ИНН: 6167130086</div>
                            <div>ОГРН: 1156196049415</div>
                            <div class="policy">
                                <a href="">Политика конфиденциальности</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
