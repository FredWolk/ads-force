<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use console\models\Categories;
use console\models\Performers;
use console\models\Tasks;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\data\Pagination;
use yii\helpers\Url;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $categories = Categories::find()->asArray()->all();
        $performers = Performers::find()->asArray()->limit(6)->all();
        return $this->render('index', compact('categories', 'performers'));
    }

    public function actionForCustomer()
    {
        $categories = Categories::find()->asArray()->all();
        $performers = Performers::find()->asArray()->limit(6)->all();
        return $this->render('for-customer', compact('categories', 'performers'));
    }
    public function actionTasks()
    {

        $filter = ['AND'];

        // if (!empty($_POST)) {
        //     dd($_POST);
        // }
        $query = Tasks::find()
            ->asArray()
            ->where(['OR', ['status' => 'Свободен'], ['status' => 'Повышенный спрос']])
            ->andWhere(['active' => true]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => !empty($_GET['pageSize']) ? $_GET['pageSize'] : 5]);
        $tasks = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $category = Categories::find()
            ->with('subCategories')
            ->asArray()
            ->all();

        return $this->render('tasks', compact('category', 'tasks', 'pages'));
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionPerformersPage()
    {
        $categories = Categories::find()->asArray()->all();
        $performers = Performers::find()->asArray()->limit(6)->all();
        return $this->render('performers-page', compact('categories', 'performers'));
    }
    public function actionTaskPage($id)
    {
        $task = Tasks::find()
            ->where(['active' => 1])
            ->andWhere(['OR', ['status' => 'Свободен'], ['status' => 'Повышенный спрос']])
            ->andWhere(['id' => $id])
            ->one();
        if (empty($task)) {
            return $this->redirect(Url::to(['/tasks']));
        }

        if (!empty($_COOKIE['Views'])) {
            $cookie = $_COOKIE['Views'];
            $array = json_decode($cookie, true);
            if (!in_array($id, $array)) {
                $array[] = $id;
                $cookie = json_encode($array, JSON_UNESCAPED_UNICODE);
                setcookie('Views', $cookie, time() + 3600 * 24 * 365 * 10, '/');
                $task->views = $task->views + 1;
                $task->update();
            }
        } else {
            $cookLink = json_encode([$id], JSON_UNESCAPED_UNICODE);
            setcookie('Views', $cookLink, time() + 3600 * 24 * 365 * 10, '/');
            $task->views = $task->views + 1;
            $task->update();
        }

        return $this->render('task-page', compact('task'));
    }

    public function actionWhyWe()
    {
        return $this->render('why-we');
    }

    public function actionPerformersCatalog()
    {
        return $this->render('performers-catalog');
    }
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
