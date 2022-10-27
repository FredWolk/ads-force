<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var console\models\Support $model */

$this->title = 'Создать тикет';
$this->params['breadcrumbs'][] = ['label' => 'Тех Поддержка', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="support-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
