<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\helpers\LandingPageHelper;

class ScienceController extends Controller
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

        $scisec1 = LandingPageHelper::getScienceSec1();
        $scisec2 = LandingPageHelper::getScienceSec2();
        $scisec3 = LandingPageHelper::getScienceSec3();
        $scisec4 = LandingPageHelper::getScienceSec4();
        $scisec5 = LandingPageHelper::getScienceSec5();
        $scisec6 = LandingPageHelper::getScienceSec6();
        return $this->render('index', compact(
            'prodsel',
            'loopselection',
            'scisec1',
            'scisec2',
            'scisec3',
            'scisec4',
            'scisec5',
            'scisec6',
        ));
    }
}
