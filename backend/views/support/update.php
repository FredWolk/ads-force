<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var console\models\Support $model */

$this->title = 'Изменить тикет: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Тех Поддержка', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="support-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>