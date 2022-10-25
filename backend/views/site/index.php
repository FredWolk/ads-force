<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div style="row-gap: 25px;" class="row">
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
                        <a href="<?= Url::to(['/sub-categories']) ?>" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Отзывы</h5>
                        <p class="card-text">Тут вы можете добавить или изменить информацию об отзывах</p>
                        <a href="<?= Url::to(['/reviews']) ?>" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Роли</h5>
                        <p class="card-text">Тут вы можете создать или изменить роли пользователей</p>
                        <a href="<?= Url::to(['/role']) ?>" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Истории успеха</h5>
                        <p class="card-text">Тут вы можете изменить добавить или отредактировать истории успеха AdsForce</p>
                        <a href="<?= Url::to(['/success-stories']) ?>" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Задания</h5>
                        <p class="card-text">Тут вы можете изменить добавить или отредактировать задания от заказчиков AdsForce</p>
                        <a href="<?= Url::to(['/tasks']) ?>" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Новости</h5>
                        <p class="card-text">Тут вы можете изменить добавить или отредактировать новости от AdsForce</p>
                        <a href="<?= Url::to(['/news']) ?>" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>