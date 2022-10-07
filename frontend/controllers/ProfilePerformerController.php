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
    public function actionProfilePrivate()
    {
        return $this->render('profile-private');
    }
    public function actionProfileTasks()
    {
        return $this->render('profile-tasks');
    }
    public function actionProfileChat()
    {
        return $this->render('profile-chat');
    }
    public function actionProfileChatPrivate()
    {
        return $this->render('profile-chat-private');
    }
    public function actionProfileFreelancer()
    {
        return $this->render('profile-freelancer');
    }
    public function actionProfilePaymentInfo()
    {
        return $this->render('profile-payment-info');
    }
    public function actionProfilePro()
    {
        return $this->render('profile-pro');
    }
    public function actionTechnicalSupport()
    {
        return $this->render('technical-support');
    }
}
?>