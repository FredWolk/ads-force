<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Performers $model */

$this->title = 'Изменить исполнителя: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Исполнители', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="performers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
