<?php

use console\models\Support;
use console\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\SupportSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Тех Поддержка';
$this->params['breadcrumbs'][] = $this->title;

$status = [
    1 => 'Открыт',
    2 => 'Закрыт'
];
$user = User::find()->asArray()->select('username, id')->all();
foreach ($user as $i) {
    $users[$i['id']] = $i['username'];
}
?>
<div class="support-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать Тикет', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
            //'date',
            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'response' => function ($url, $model, $key) {
                        return Html::a('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
</svg>', \yii\helpers\Url::to(['view', 'id' => $model->id]));
                    }
                ],
                'template' => "{response}<br>{update}<br>{delete}<br>"
            ],
        ],
    ]); ?>


</div>