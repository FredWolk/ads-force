<?php
namespace frontend\controllers;
use yii\web\Controller;

class ProfilePerformerController extends Controller
{
    public $layout = 'profilePerformer';
    public function actionIndex()
    {
        return $this->render('index');
    }
    
}
?>