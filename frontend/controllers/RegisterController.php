<?php

namespace frontend\controllers;

use common\models\LoginForm;
use common\models\User;
use console\models\Balance;
use frontend\models\SignupForm;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class RegisterController extends Controller
{

  public function actionCheckEmail()
  {
    Yii::$app->response->format = Response::FORMAT_JSON;
    $user = User::findByEmail($_POST['email']);
    if (!$user)
      return ['status' => false, 'message' => 'Пользователь с такой почтой не найден'];
    else
      return ['status' => true];
  }

  public function actionSignup()
  {
    Yii::$app->response->format = Response::FORMAT_JSON;
    $model = new SignupForm();
    $model->username = $_POST['username'];
    $model->email = $_POST['email'];
    $model->password = $_POST['password'];
    $model->validate();
    if ($model->signup()) {
      return ['status' => true];
    } else {
      return ['status' => false, 'message' => $model->errors];
    }
  }

  public function actionSignupConfirm($email)
  {
    Yii::$app->response->format = Response::FORMAT_JSON;
    $user = User::findByEmailCheck($email);
    $user->status = User::STATUS_ACTIVE;
    if ($user->update() !== false) {
      $model = new Balance();
      $model->user_id = $user->id;
      $model->validate();
      if ($model->save()) {
        return ['status' => true];
      } else {
        return ['status' => false, 'message' => $model->errors];
      }
    } else {
      return ['status' => false, 'message' => 'Ошибка подтверждения почты'];
    }
  }


  public function actionLogin()
  {
    Yii::$app->response->format = Response::FORMAT_JSON;
    $model = new LoginForm();
    $model->email = $_POST['email'];
    $model->password = $_POST['password'];
    $model->validate();
    if ($model->login()) {
      return $this->redirect('/profile-performer');
    } else {
      return ['status' => false, 'message' => $model->errors];
    }
  }

  public function actionLogout()
  {
    Yii::$app->user->logout();
    return $this->redirect('/');
  }
}
