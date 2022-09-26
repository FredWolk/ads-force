<?php

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var console\models\SuccessStories $model */
/** @var yii\widgets\ActiveForm $form */

$whats = !empty($model->what_do) ? $model->what_do : '[]';

$js = <<< JS
    var whats = JSON.parse('$whats');
    function renderWhats() {
        $('#inputWhat').val('');
        $('#successstories-what_do').val(JSON.stringify(whats));
        $('.what_block').text('');
        whats.map((e, key) => {
            $('.what_block').append(`
                <div style="max-width: fit-content;" class="alert alert-dark alert-dismissible fade show">
                    `+ e +`
                    <button data-id="`+ key +`" type="button" class="btn-close removeWhat"></button>
                </div>
            `)
        })
    }
    $('#addWhat').on('click', function () {
        whats.push($('#inputWhat').val());
        renderWhats();
    })
    $('.what_block').on('click', '.removeWhat', function () {
        whats.splice($(this).attr('data-id'), 1);
        renderWhats();
    })
    renderWhats();
JS;
$this->registerJs($js);

?>

<div class="success-stories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Разработка брендинга']) ?>

    <?= $form->field($model, 'image')->widget(InputFile::className(), [
        'language'      => 'ru',
        'controller'    => 'elfinder',
        'filter'        => 'image',
        'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
        'options'       => ['class' => 'form-control', 'placeholder' => 'Выберите изображение'],
        'buttonOptions' => ['class' => 'btn btn-primary'],
        'buttonName'    => 'Выбрать',
        'multiple'      => false
    ]); ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'standard',
            'inline' => false,
        ],
    ]); ?>

    <?= $form->field($model, 'what_do')->textarea(['rows' => 2, 'readonly' => true]) ?>

    <div class="d-flex flex-wrap what_block gap-3"></div>

    <div class="input-group mb-3">
        <input type="text" id="inputWhat" class="form-control" placeholder="Продвижение в том 10 поиска гугл">
        <button class="btn btn-outline-primary" type="button" id="addWhat">Добавить</button>
    </div>

    <?= $form->field($model, 'term')->textInput(['maxlength' => true, 'placeholder' => '2 месяца']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>