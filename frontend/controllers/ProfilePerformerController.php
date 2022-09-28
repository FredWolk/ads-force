<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class ProfilePerformerController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
?>