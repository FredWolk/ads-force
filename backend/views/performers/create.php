<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Performers $model */

$this->title = 'Добавить исполнителя';
$this->params['breadcrumbs'][] = ['label' => 'Исполнители', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="performers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
