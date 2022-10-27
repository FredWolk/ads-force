<?php

use console\models\SupportMessage;
use console\models\User;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var console\models\Support $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Тикеты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$css = <<< CSS
    .message__block {
        margin-bottom: 20px;
        border: 1px solid #ced4da;
        border-radius: 10px;
        padding: 10px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        max-height: 600px;
        overflow-y: scroll;
    }
    .messages {
        padding: 10px;
        display: flex;
        align-items: start;
        justify-content: space-between;
        gap: 10px;
        border: 1px solid #ced4da;
        max-width: 500px;
        width: 100%;
        border-radius: 5px;
    }
    .message__support {
        margin-left: auto;
        background-color: #ced4da;
    }
CSS;
$this->registerCss($css);
$status = [
    1 => 'Открыт',
    2 => 'Закрыт'
];
$user = User::find()->asArray()->select('username, id')->all();
foreach ($user as $i) {
    $users[$i['id']] = $i['username'];
}
$messages = SupportMessage::find()->asArray()->where(['dialog_id' => $model->id])->all();

$js = <<< JS
$(".message__block").scrollTop($(".message__block")[0].scrollHeight);
$('.send_message').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
        url: 'send-message',
        type: 'POST',
        dataType: 'JSON',
        data: $(this).serialize(),
    }).done(function (r) {
        let mes = $('#messages').val(),
            date = new Date();
        $('.message__block').append(`
            <div class="messages message__support">
                <p>`+ mes +`</p>
                <p>`+ date.getHours()+':'+ date.getMinutes() +`</p>
            </div>
        `);
        $('#messages').val('');
        $(".message__block").scrollTop($(".message__block")[0].scrollHeight);
    })
})
JS;
$this->registerJs($js);
?>
<div class="support-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотете удалить этот тикет?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'user_id',
                'value' => function ($model) use ($users) {
                    return $users[$model->user_id];
                }
            ],
            // 'support_id',
            'theme',
            [
                'attribute' => 'status',
                'value' => function ($model) use ($status) {
                    return $status[$model->status];
                }
            ],
            'date',
        ],
    ]) ?>

    <div class="message__block">
        <?php if (!empty($messages)) : ?>
            <?php foreach ($messages as $mes) : ?>
                <div class="messages <?= $mes['is_support'] == 1 ? 'message__user' : 'message__support' ?>">
                    <p><?= $mes['text'] ?></p>
                    <p><?= date('d.m.Y H:i', strtotime($mes['date'])) ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <?= Html::beginForm('', 'post', ['class' => 'send_message']) ?>
    <input type="hidden" name="support_id" value="<?= $model->id ?>">
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="messages" name="messages" placeholder="Введите сообщение" aria-label="Введите сообщение" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" id="button-addon2">Отправить</button>
    </div>
    <?= Html::endForm(); ?>

</div>