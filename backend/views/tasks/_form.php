<?php

use common\models\User;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var console\models\Tasks $model */
/** @var yii\widgets\ActiveForm $form */
$users = User::find()->asArray()->select('username, id')->all();
$userArr = [];
if (!empty($users)) {
    foreach ($users as $user) {
        $userArr[$user['id']] = $user['username'];
    }
}

$tags = !empty($model->tags) ? $model->tags : '[]';
$material = !empty($model->materials) ? $model->materials : '[]';

$js = <<< JS

// TAGS ADD
var tags = JSON.parse('$tags');
function renderTags() {
    $('#tasks-tags').val(JSON.stringify(tags));
    $('#tagInput').val('');
    $('.tags_block').text('');
    tags.map((e, key) => {
        $('.tags_block').append(`
        <div class="alert alert-dark alert-dismissible fade show tag_item" style="max-width: fit-content;">
            `+ e +`
            <button data-id="`+ key +`" type="button" class="btn-close remove_tag"></button>
        </div>
        `)
    })
}
$('#tagAdd').on('click', function () {
    tags.push($('#tagInput').val());
    renderTags();
})
$('.tags_block').on('click', '.remove_tag', function () {
    tags.splice($(this).attr('data-id'), 1);
    renderTags();
})
renderTags();
// TAGS ADD END

// MATERIAL ADD
var material = JSON.parse('$material');
function renderMaterials() {
    $('#tasks-materials').val(JSON.stringify(material));
    $('#materialInputName').val('');
    $('#materialInputImage').val('');
    $('.material_block').text('');
    material.map((e, key) => {
        $('.material_block').append(`
            <div class="alert alert-dark alert-dismissible fade show material_item" style="max-width: fit-content;">
                <b>Название:</b> `+ e.name +` <b>Путь:</b> `+ e.image +`
                <button data-id="`+ key +`" type="button" class="btn-close remove_material"></button>
            </div>
        `)
    })
}
$('#addMaterial').on('click', function () {
    let obj = {
        name: $('#materialInputName').val(),
        image: $('#materialInputImage').val()
    };
    material.push(obj);
    renderMaterials();
})
$('.material_block').on('click', '.remove_material', function () {
    material.splice($(this).attr('data-id'), 1);
    renderMaterials();
})
renderMaterials();
// MATERIAL ADD END
JS;
$this->registerJs($js);
?>

<div class="tasks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'author_id')->dropDownList($userArr) ?>

    <?= $form->field($model, 'performer_id')->dropDownList($userArr) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Настройка рекламы ВКонтакте']) ?>

    <?= $form->field($model, 'about_project')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'standard',
            'inline' => false,
        ],
    ]);
    ?>

    <?= $form->field($model, 'technical_task')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'standard',
            'inline' => false,
        ],
    ]); ?>

    <?= $form->field($model, 'price')->input('number', ['placeholder' => 'Указав цену 0, вы сделаете её договорной', 'value' => !empty($model->price) ? $model->price : '']) ?>

    <?= $form->field($model, 'deadline')->textInput(['maxlength' => true, 'placeholder' => 'На пример 2 недели']) ?>

    <?= $form->field($model, 'tags')->textarea(['rows' => 2, 'readonly' => true]) ?>

    <div class="d-flex gap-3 flex-wrap tags_block"></div>

    <div class="input-group mb-3">
        <input type="text" id="tagInput" class="form-control" placeholder="Реклама">
        <button class="btn btn-outline-primary" type="button" id="tagAdd">Добавить</button>
    </div>

    <?= $form->field($model, 'status')->dropDownList(['Свободен' => 'Свободен', 'Повышенный спрос' => 'Повышенный спрос', 'В работе' => 'В работе', 'Выполнен' => 'Выполнен',], ['prompt' => 'Укажите статус']) ?>

    <?= $form->field($model, 'materials')->textarea(['rows' => 3, 'readonly' => true]) ?>

    <div class="d-flex gap-3 flex-wrap material_block"></div>

    <label class="input-group">
        Укажите название файла
        <input style="width: 100%;" type="text" id="materialInputName" class="form-control mb-2" placeholder="Чек-лист">
    </label>
    <?php echo InputFile::widget([
        'language'   => 'ru',
        'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
        'filter'     => '',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
        'name'       => 'material_image',
        'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
        'options'       => ['class' => 'form-control mb-2', 'placeholder' => 'Выберите файл', 'id' => 'materialInputImage'],
        'buttonOptions' => ['class' => 'btn btn-primary'],
        'buttonName'    => 'Выбрать'
    ]); ?>
    <button id="addMaterial" type="button" class="btn btn-primary mb-3">Добавить материал</button>

    <?= $form->field($model, 'active')->dropDownList([0 => 'Не активен', 1 => 'Активен']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>