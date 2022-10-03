<?php

use common\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Reviews $model */
/** @var yii\widgets\ActiveForm $form */

$users = User::find()->asArray()->select('username, id')->all();
if (!empty($users)) {
    foreach ($users as $v) {
        $userArr[$v['id']] = $v['username'];
    }
}
?>

<div class="reviews-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList($userArr) ?>

    <?= $form->field($model, 'about_id')->dropDownList($userArr) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>