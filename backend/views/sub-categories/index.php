<?php

use console\models\Categories;
use console\models\SubCategories;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\SubCategoriesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */


$this->title = 'Подкатегории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-categories-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить подкатегорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    $catNames = [];
    $categories = Categories::find()->asArray()->select('title, id')->all();
    if (!empty($categories)) {
        foreach ($categories as $cat) {
            $catNames[$cat['id']] = $cat['title'];
        }
    }
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'categories_id',
                'value' => function ($model) use ($catNames) {
                    return $catNames[$model->categories_id];
                }
            ],
            'title',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SubCategories $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>