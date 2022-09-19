<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SubCategories $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sub-categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categories_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
