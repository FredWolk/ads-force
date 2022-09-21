<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var console\models\SuccessStories $model */

$this->title = 'Изменить историю успеха: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Истории успеха', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="success-stories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>