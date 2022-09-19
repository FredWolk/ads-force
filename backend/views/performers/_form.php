<?php

use app\models\Categories;
use common\models\User;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Performers $model */
/** @var yii\widgets\ActiveForm $form */

$categories = Categories::find()->asArray()->select('title, id')->all();
$catArr = [];
if (!empty($categories)) {
    foreach ($categories as $cat) {
        $catArr[$cat['id']] = $cat['title'];
    }
}

$users = User::find()->asArray()->select('username, id')->all();
$userArr = [];
if (!empty($users)) {
    foreach ($users as $user) {
        $userArr[$user['id']] = $user['username'];
    }
}

if (!empty($model->skills)) {
    $skil = $model->skills;
} else {
    $skil = '[]';
}

$js = <<< JS

let obj = '$skil',
    arr = JSON.parse(obj);

$('#performers-skills').val(obj);

function renderSpec() {
    obj = JSON.stringify(arr);
    $('#performers-skills').val(obj);
    $('.spec_block').html('');
    arr.map((e, key) => {
        $('.spec_block').append(`
            <div class="alert alert-dark alert-dismissible fade show">
                ` + e + `
                <button data-id="`+ key +`" type="button" class="btn-close"></button>
            </div>
        `)
    });
}
renderSpec();

$('#addSpec').on('click', function () {
    arr.push($('#specAdd').val());
    $('#specAdd').val('');
    renderSpec();
});

$('.spec_block').on('click', '.btn-close', function () {
    let id = $(this).attr('data-id');
    arr.splice(id, 1);
    renderSpec();
})
JS;

$this->registerJs($js);
?>

<div class="performers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList($userArr) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Вася Васечкин Пупкин']) ?>

    <?= $form->field($model, 'position')->dropDownList(['Базовый', 'Продвинутый', 'Профи']) ?>

    <?= $form->field($model, 'rating')->input('number') ?>

    <?= $form->field($model, 'specialization_id')->dropDownList($catArr) ?>

    <?= $form->field($model, 'photo')->widget(InputFile::className(), [
        'language'      => 'ru',
        'controller'    => 'elfinder',
        'path'          => 'image',
        'filter'        => 'image',
        'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
        'options'       => ['class' => 'form-control'],
        'buttonOptions' => ['class' => 'btn btn-outline-primary'],
        'multiple'      => false
    ]); ?>

    <?= $form->field($model, 'skills')->textarea(['rows' => 6, 'readonly' => true]) ?>

    <div class="spec_block" style="display: flex; flex-wrap: wrap; gap: 10px"></div>

    <div class="input-group mb-3">
        <input type="text" id="specAdd" class="form-control" placeholder="Разработка на laravel">
        <button class="btn btn-outline-primary" type="button" id="addSpec">Добавить</button>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>