<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var console\models\Role $model */

$this->title = 'Создать роль';
$this->params['breadcrumbs'][] = ['label' => 'Роли', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
