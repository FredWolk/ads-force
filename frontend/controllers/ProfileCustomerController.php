<?php
namespace frontend\controllers;
use yii\web\Controller;

class ProfileCustomerController extends Controller
{
    public $layout = 'profileCustomer';
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionProfileFreelancer()
    {
        return $this->render('profile-freelancer');
    }
    public function actionProfilePrivate()
    {
        return $this->render('profile-private');
    }
    public function actionProfilePaymentInfo()
    {
        return $this->render('profile-payment-info');
    }
    public function actionProfileChat()
    {
        return $this->render('profile-chat');
    }
    public function actionProfileChatPrivate()
    {
        return $this->render('profile-chat-private');
    }
    public function actionProfileSeetings()
    {
        return $this->render('profile-seetings');
    }
    public function actionProfilePro()
    {
        return $this->render('profile-pro');
    }
    public function actionProfileTasks()
    {
        return $this->render('profile-tasks');
    }
    public function actionTechnicalSupport()
    {
        return $this->render('technical-support');
    }
    public function actionTechnicalSupportChat()
    {
        return $this->render('technical-support-chat');
    }
    public function actionTechnicalSupportSingle()
    {
        return $this->render('technical-support-single');
    }
    public function actionProfileCreateTask()
    {
        return $this->render('profile-create-task');
    }
    public function actionNewTaskPreview()
    {
        return $this->render('new-task-preview');
    }
}
?>