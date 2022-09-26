<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var console\models\Tasks $model */

$this->title = 'Добавить задание';
$this->params['breadcrumbs'][] = ['label' => 'Задания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
