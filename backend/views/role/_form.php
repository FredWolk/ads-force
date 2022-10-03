<?php

use common\models\User;
use console\models\Role;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var console\models\Role $model */
/** @var yii\widgets\ActiveForm $form */
$users = User::find()->asArray()->select('username, id')->all();
foreach ($users as $val) {
    $usersArr[$val['id']] = $val['username'];
}
?>

<div class="role-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'role')->dropDownList(Role::getRoles()) ?>

    <?= $form->field($model, 'user_id')->dropDownList($usersArr) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>