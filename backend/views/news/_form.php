<?php

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var console\models\News $model */
/** @var yii\widgets\ActiveForm $form */

$js = <<< JS
    function createLink ( str ) {
        var ru = {
            'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd',
            'е': 'e', 'ё': 'e', 'ж': 'j', 'з': 'z', 'и': 'i',
            'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n', 'о': 'o',
            'п': 'p', 'р': 'r', 'с': 's', 'т': 't', 'у': 'u',
            'ф': 'f', 'х': 'h', 'ц': 'c', 'ч': 'ch', 'ш': 'sh',
            'щ': 'shch', 'ы': 'y', 'э': 'e', 'ю': 'u', 'я': 'ya'
        }, n_str = [];
        str = str.replace(/[ъь]+/g, '').replace(/й/g, 'i');
        for ( var i = 0; i < str.length; ++i ) {
            n_str.push(
                ru[ str[i] ]
                || ru[ str[i].toLowerCase() ] === undefined && str[i]
                || ru[ str[i].toLowerCase() ].replace(/^(.)/, function ( match ) { return match.toUpperCase() })
            );
        }
        return n_str.join('');
    }

    $('#news-title').on('input',function() {
        var j = createLink($(this).val());
        j = j.replace(/ /g, '-');
        j = j.replace(/,-/g, '-');
        j = j.replace(/\//g, '-');
        $('#news-link').val(j.toLowerCase());
    });
JS;

$this->registerJs($js);

?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Как реклама влияет на продажи?']) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true, 'placeholder' => 'kak-reklama-vliyaet-na-prodagi']) ?>

    <?= $form->field($model, 'subtitle')->textInput(['maxlength' => true, 'placeholder' => 'Реклама очень сильно влияет на продажи потому что...']) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'standard',
            'inline' => false,
        ],
    ]); ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true, 'placeholder' => 'Мирослав Масальский']) ?>

    <?= $form->field($model, 'source')->textInput(['maxlength' => true, 'placeholder' => 'Источник']) ?>

    <?= $form->field($model, 'image')->widget(InputFile::className(), [
        'language'      => 'ru',
        'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
        'path'          => 'image', // будет открыта папка из настроек контроллера с добавлением указанной под деритории 
        'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
        'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
        'options'       => ['class' => 'form-control'],
        'buttonOptions' => ['class' => 'btn btn-warning'],
        'multiple'      => false
    ]); ?>

    <div style="display: none;">
        <?= $form->field($model, 'date')->textInput(['value' => date('Y-m-d H:i:s')]) ?>
    </div>

    <?= $form->field($model, 'OG_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OG_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OG_image')->widget(InputFile::className(), [
        'language'      => 'ru',
        'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
        'path'          => 'image', // будет открыта папка из настроек контроллера с добавлением указанной под деритории 
        'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
        'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
        'options'       => ['class' => 'form-control'],
        'buttonOptions' => ['class' => 'btn btn-warning'],
        'multiple'      => false
    ]); ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>