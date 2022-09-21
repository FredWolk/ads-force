<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var console\models\SuccessStories $model */

$this->title = 'Добавить историю успеха';
$this->params['breadcrumbs'][] = ['label' => 'Истории успеха', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="success-stories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
