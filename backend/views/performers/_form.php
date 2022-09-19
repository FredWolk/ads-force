<?php

use app\models\Categories;
use common\models\User;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Performers $model */
/** @var yii\widgets\ActiveForm $form */

$users = User::find()->asArray()->select('username, id')->all();
$userArr = [];
if (!empty($users)) {
    foreach ($users as $user) {
        $userArr[$user['id']] = $user['username'];
    }
}
$categories = Categories::find()->asArray()->select('title, id')->all();
$catArr = [];
if (!empty($categories)) {
    foreach ($categories as $cat) {
        $catArr[$cat['id']] = $cat['title'];
    }
}

?>

<div class="performers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList($userArr) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Пупкин Иван Петрович']) ?>

    <?= $form->field($model, 'position')->dropDownList(['1' => 'Базовый', '2' => 'Продвинутый', '3' => 'Профи']) ?>

    <?= $form->field($model, 'rating')->input('number') ?>

    <?= $form->field($model, 'specialization_id')->dropDownList($catArr) ?>

    <?= $form->field($model, 'photo')->widget(InputFile::className(), [
        'language'      => 'ru',
        'controller'    => 'elfinder',
        'path'          => 'image',
        'filter'        => 'image',
        'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
        'options'       => ['class' => 'form-control'],
        'buttonOptions' => ['class' => 'btn btn-warning'],
        'multiple'      => false
    ]); ?>

    <?= $form->field($model, 'skills')->textarea(['rows' => 6, 'readonly' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>