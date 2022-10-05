<?php

/** @var \yii\web\View $this */
/** @var string $content */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\ProfilePerformerAsset;

ProfilePerformerAsset::register($this);
$js = <<< JS
$('.avtorize-header').click(function (e) {
    if($(this).parent().find('.avtorize-modal').css('display') == "block"){
        $(this).parent().find('.avtorize-modal').fadeOut(300);
        $('.avtorize-content-top').find('img').css({'transform':'rotate(0deg)'})
    }
    else{
        $(this).parent().find('.avtorize-modal').fadeIn(300);
        $('.avtorize-content-top').find('img').css({'transform':'rotate(-180deg)'})
    }
})
$(document).ready(function(){
    let darkTheme = window.localStorage.getItem('dark-theme');
    if(darkTheme == 'false' || !darkTheme){
        document.documentElement.style.setProperty('--text', '#fff');
        document.documentElement.style.setProperty('--background-white', '#414C94');
        document.documentElement.style.setProperty('--background-chat-message', '#0A0B2D');
        $('body').addClass('bg-dark');
    }
    else if(darkTheme == 'true'){
        document.documentElement.style.setProperty('--text', '#1F1F1F');
        document.documentElement.style.setProperty('--background-white', '#ffffff');
        document.documentElement.style.setProperty('--background-chat-message', '#ffffff');
        $('body').removeClass('bg-dark');
    }
$('.dark-bg').click(function(e){
    let darkTheme = window.localStorage.getItem('dark-theme');
    if(darkTheme == 'false'){
        document.documentElement.style.setProperty('--text', '#1F1F1F');
        document.documentElement.style.setProperty('--background-white', '#ffffff');
        document.documentElement.style.setProperty('--background-chat-message', '#ffffff');
        localStorage.setItem('dark-theme', 'true');
        $('body').removeClass('bg-dark');
    }
    if(darkTheme == 'true'){
        document.documentElement.style.setProperty('--text', '#fff');
        document.documentElement.style.setProperty('--background-white', '#414C94');
        document.documentElement.style.setProperty('--background-chat-message', '#0A0B2D');
        localStorage.setItem('dark-theme', 'false');
        $('body').addClass('bg-dark');
    }
});
});
JS;
$this->registerJs($js);
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

                    <div class="entry dis-none-header"><!--Отключаеться когда пользователь зашел(добавить класс: dis-none-header)-->
                        <div class="login">Вход</div>
                        <div class="registration">Регистрация</div>
                    </div>
                    <div class="avtorize-modal-container">
                        <div class="avtorize-header">
                            <div class="avtorize-header-img">
                                <img src="<?= Url::to(['img/footer-header/profile-icon.svg']) ?>" alt="">
                            </div>
                            <div class="avtorize-content">
                                <div class="avtorize-content-top">
                                    <h2 class="Font-size18">Juliya</h2>
                                    <img src="<?= Url::to(['img/footer-header/arrow-icon.svg']) ?>" alt="">
                                </div>
                                <p>заказчик</p>
                            </div>
                        </div>
                        <div class="avtorize-modal">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="<?= Url::to(['img/footer-header/payment-link-icon.svg']) ?>" alt="">
                                        <p>Мой счёт:0 ₽</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?= Url::to(['img/footer-header/user-icon.svg']) ?>" alt="">
                                        <p>Мой кабинет</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?= Url::to(['img/footer-header/doc-link-icon.svg']) ?>" alt="">
                                        <p>Мой кабинет</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?= Url::to(['img/footer-header/doc-link-icon.svg']) ?>" alt="">
                                        <p>Мой кабинет</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- появляется при > 1024px-->
                    <div class="header__menu dis-none-header"> <!--Отключаеться когда пользователь зашел(добавить класс: dis-none-header)-->
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

                <div class="header-search dis-none-header">
                    <div class="search__container search">
                        <img src="<?= Url::to(['img/footer-header/search.webp']) ?>" alt="">
                        <input type="text" placeholder="Поиск">
                    </div>
                </div>

            </div>
        </header>

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
