<?php

use console\models\Support;
use console\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var console\models\Support $model */
/** @var yii\widgets\ActiveForm $form */

$user = User::find()->asArray()->select('username, id')->all();
foreach ($user as $i) {
    $users[$i['id']] = $i['username'];
}
?>

<div class="support-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList($users) ?>

    <?= $form->field($model, 'status')->dropDownList([Support::STATUS_OPEN => 'Открыт', Support::STATUS_CLOSE => 'Закрыт']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>