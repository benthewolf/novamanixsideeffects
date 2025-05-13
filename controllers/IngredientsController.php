<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\helpers\LandingPageHelper;

class IngredientsController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */

    public function actionIndex()
    {
        $prodsel = LandingPageHelper::productSelection();
        $product_1 = array_merge(Yii::$app->params['product_1'], $prodsel['products']['product1']);
        $product_2 = array_merge(Yii::$app->params['product_2'], $prodsel['products']['product2']);
        $product_3 = array_merge(Yii::$app->params['product_3'], $prodsel['products']['product3']);
        $loopselection = [$product_1, $product_2, $product_3,];

        $ingred = LandingPageHelper::getLanderSec5();
        return $this->render('index', compact(
            'prodsel',
            'loopselection',
            'ingred'
        ));
    }
}
