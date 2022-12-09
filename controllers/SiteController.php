<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\Record;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['/admin/record'],
                        'allow' => true,
                        'roles'=>['admin'],
                    ],
                    [
                        'actions' => ['record'],
                        'allow' => true,
                        'roles'=>['admin']
                    ],
                    [
                        'actions' => ['record'],
                        'allow' => true,
                        'roles'=>['@']
                    ],
                    [ // последнее правило для тех кому нельзя
                        'actions' => ['admin'],
                        'allow' => false,
                        'roles' => ['@'], // все роли
                        'denyCallback' => function($rule, $action) {
                            // и тут уже выбираем куда переадресывать
                            return $action->controller->redirect('index');
                        },
                    ],
                    [ // последнее правило для тех кому нельзя
                        'actions' => ['record'],
                        'allow' => false,
                        'roles' => ['?'], // все роли
                        'denyCallback' => function($rule, $action) {
                            // и тут уже выбираем куда переадресывать
                            return $action->controller->redirect(['/site/attention']);
                        },
                    ],
                    [
                        'actions' => ['login','error','index','succes','about','contact','serveses','attention'],
                        'allow' => true,
                    ],

                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles'=>['@']
                    ],
  

                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
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
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionError()
    {
        return $this->render('error');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['/site/admin']);
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);

        //$user->password = \Yii::$app->security->generatePasswordHash($model->password);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

     /**
     * Displays about info.
     *
     * @return string
     */

    public function actionAdmin()
    {
        $records = record::find()->all();
        return $this->render('admin', ['records' => $records]);
        
    }

    public function actionRecord()
    {
        $model = new Record();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['succes', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('record', [
            'model' => $model,
        ]);
    }

    public function actionSucces()
    {
        return $this->render('succes');
    }

    public function actionServeses()
    {
        return $this->render('serveses');
    }

    public function actionAttention()
    {
        return $this->render('attention');
    }
}
