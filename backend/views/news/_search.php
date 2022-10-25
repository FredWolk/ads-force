<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\NewsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'link') ?>

    <?= $form->field($model, 'subtitle') ?>

    <?= $form->field($model, 'author') ?>

    <?php // echo $form->field($model, 'source') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'OG_title') ?>

    <?php // echo $form->field($model, 'OG_description') ?>

    <?php // echo $form->field($model, 'OG_image') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
