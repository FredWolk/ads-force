<?php

use console\models\Categories;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SubCategories $model */
/** @var yii\widgets\ActiveForm $form */

$categories = Categories::find()->asArray()->select('title, id')->all();
$catArr = [];
if (!empty($categories)) {
    foreach ($categories as $cat) {
        $catArr[$cat['id']] = $cat['title'];
    }
}
?>

<div class="sub-categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categories_id')->dropDownList($catArr) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Реклама в ВК']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>