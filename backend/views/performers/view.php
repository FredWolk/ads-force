<?php

use console\models\Categories;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Performers $model */

$catNames = [];
$categories = Categories::find()->asArray()->select('title, id')->all();
if (!empty($categories)) {
    foreach ($categories as $cat) {
        $catNames[$cat['id']] = $cat['title'];
    }
}

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Исполнители', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="performers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить этого исполнителя?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'name',
            'position',
            'rating',
            [
                'attribute' => 'specialization_id',
                'value' => function ($model) use ($catNames) {
                    return $catNames[$model->specialization_id];
                }
            ],
            'photo',
            'skills:ntext',
        ],
    ]) ?>

</div>