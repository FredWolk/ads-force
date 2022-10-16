<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/create-portfolio.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
?>
<section>
    <div class="fon-custom" style="background: linear-gradient(90deg, #00D2FF 0%, #3A7BD5 100%);">
        <img src="<?= Url::to(['img/profile/private-profile/img-fon.png']) ?>" alt="">
    </div>
</section>
<div class="FormPortfolio">
    <div class="back-link">
        <a href="" class="Font-size18"><img src="<?= Url::to(['img/profile/private-profile/back-profile.svg']) ?>" alt="">Вернуться назад</a>
    </div>
    <div class="form-main-container">
        <div class="form-main-bg">
            <svg width="86" height="78" viewBox="0 0 86 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.5428 75.8512L38.2483 47.9991C39.9115 46.327 40.7431 45.491 41.7021 45.1778C42.5457 44.9022 43.4543 44.9022 44.2979 45.1778C45.2568 45.491 46.0885 46.3271 47.7518 47.9991L75.2725 75.6654M51.4 51.6667L63.4482 39.5547C65.1115 37.8826 65.9431 37.0466 66.9021 36.7333C67.7457 36.4578 68.6543 36.4578 69.4979 36.7333C70.4568 37.0466 71.2885 37.8826 72.9518 39.5547L85 51.6667M34.6 26.3333C34.6 30.9971 30.8392 34.7778 26.2 34.7778C21.5608 34.7778 17.8 30.9971 17.8 26.3333C17.8 21.6696 21.5608 17.8889 26.2 17.8889C30.8392 17.8889 34.6 21.6696 34.6 26.3333ZM21.16 77H64.84C71.8967 77 75.425 77 78.1203 75.6194C80.4911 74.405 82.4187 72.4673 83.6267 70.0839C85 67.3743 85 63.8273 85 56.7333V21.2667C85 14.1727 85 10.6257 83.6267 7.91612C82.4187 5.53273 80.4911 3.59498 78.1203 2.38058C75.425 1 71.8967 1 64.84 1H21.16C14.1033 1 10.575 1 7.87972 2.38058C5.50888 3.59498 3.58132 5.53273 2.37332 7.91612C1 10.6257 1 14.1727 1 21.2667V56.7333C1 63.8273 1 67.3743 2.37332 70.0839C3.58132 72.4673 5.50888 74.405 7.87972 75.6194C10.575 77 14.1033 77 21.16 77Z" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
    </div>
</div>