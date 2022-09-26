<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\TasksSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tasks-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'author_id') ?>

    <?= $form->field($model, 'performer_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'about_project') ?>

    <?php // echo $form->field($model, 'technical_task') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'deadline') ?>

    <?php // echo $form->field($model, 'tags') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'responded') ?>

    <?php // echo $form->field($model, 'materials') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'views') ?>

    <?php // echo $form->field($model, 'date_public') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
