<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Исполнители</h5>
                        <p class="card-text">Тут вы можете изменить информацию об исполнителях</p>
                        <a href="<?= Url::to(['/performers']) ?>" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Категории</h5>
                        <p class="card-text">Тут вы можете изменить информацию о категориях</p>
                        <a href="<?= Url::to(['/categories']) ?>" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Подкатегории</h5>
                        <p class="card-text">Тут вы можете изменить информацию о подкатегориях</p>
                        <a href="<?= Url::to(['']) ?>" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>