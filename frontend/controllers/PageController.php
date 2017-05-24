<?php

namespace frontend\controllers;
use Yii;

class PageController extends \yii\web\Controller
{
    public function actionIndex()
    {
        Yii::$app->session->setFlash('success', "Hello");
        return $this->render('index');
    }
    public function actionLienhe()
    {

        Yii::$app->session->setFlash('success', "Your message to display");
        return $this->render('lienhe');
    }


}
