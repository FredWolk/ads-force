<?php

namespace frontend\controllers;

use console\models\News;
use console\models\User;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

class ProfileCustomerController extends Controller
{
    public $layout = 'profileCustomer';

    public function actionIndex()
    {
        $user = User::find()->where(['id' => Yii::$app->getUser()->getId()])
            ->asArray()
            ->one();

        return $this->render('index', compact('user'));
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
    public function actionProfileMessage()
    {
        return $this->render('profile-message');
    }
    public function actionProfileNews()
    {
        $filter = ['AND'];

        if (!empty($_POST['date'])) {
            if ($_POST['date'] == 'all') {
                $filter = [];
            }
            if ($_POST['date'] == 'day') {
                $filter = ['>=', 'date', date('Y-m-d H:i:s', strtotime('-1 day'))];
            }
            if ($_POST['date'] == 'week') {
                $filter = ['>=', 'date', date('Y-m-d H:i:s', strtotime('-1 week'))];
            }
        }

        $query = News::find()->asArray()->where($filter);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 7]);
        $news = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('profile-news', compact('news', 'pages'));
    }
    public function actionProfileNewsPrivate($link)
    {
        $news = News::findOne(['link' => $link]);
        $newses = News::find()->asArray()->where(['!=', 'id', $news->id])->limit(3)->all();
        return $this->render('profile-news-private', compact('news', 'newses'));
    }
}
