<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\helpers\LandingPageHelper;

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
                'only' => ['logout'],
                'rules' => [
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
        $prodsel = LandingPageHelper::productSelection();
        $herolander = LandingPageHelper::getLanderHero();
        $sec1 = LandingPageHelper::getLanderSec1();
        $sec2 = LandingPageHelper::getLanderSec2();
        $sec3 = LandingPageHelper::getLanderSec3();
        $sec4 = LandingPageHelper::getLanderSec4();
        $sec5 = LandingPageHelper::getLanderSec5();
        $sec6 = LandingPageHelper::getLanderSec6();
        // Merge Helper's Product Images and Param Data
        $product_1 = array_merge(Yii::$app->params['product_1'], $prodsel['products']['product1']);
        $product_2 = array_merge(Yii::$app->params['product_2'], $prodsel['products']['product2']);
        $product_3 = array_merge(Yii::$app->params['product_3'], $prodsel['products']['product3']);
        $loopselection = [$product_1, $product_2, $product_3,];

        return $this->render('index', compact(
            'prodsel',
            'loopselection',
            'herolander',
            'sec1',
            'sec2',
            'sec3',
            'sec4',
            'sec5',
            'sec6',
        ));
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
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
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
}
