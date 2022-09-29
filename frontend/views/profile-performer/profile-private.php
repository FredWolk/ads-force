<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/profile-private-cabinet.css']), ['depends' => ['frontend\assets\ProfilePerformerAsset']]);
?>