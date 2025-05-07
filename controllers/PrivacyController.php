<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

class PrivacyController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */

    public function actionIndex()
    {
        return $this->render('index', []);
    }
}
