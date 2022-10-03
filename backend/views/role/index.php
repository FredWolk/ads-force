<?php

use common\models\User;
use console\models\Role;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\RoleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Роли';
$this->params['breadcrumbs'][] = $this->title;
$users = User::find()->asArray()->select('username, id')->all();
if (!empty($users)) {
    foreach ($users as $v) {
        $usersName[$v['id']] = $v['username'];
    }
}
?>
<div class="role-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать роль', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'role',
                'value' => function ($model) {
                    return Role::getRoles()[$model->role];
                }
            ],
            [
                'attribute' => 'user_id',
                'value' => function ($model) use ($usersName) {
                    return $usersName[$model->user_id];
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Role $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>