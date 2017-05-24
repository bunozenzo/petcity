<?php

namespace frontend\controllers;
use backend\models\Product;

class NewproController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model=new Product();
        $newpro=$model->getNewproduct();
        $pagination=$model->getPagerNewproduct();
        return $this->render('index',[
            'newpro'=>$newpro,
            'pagination'=>$pagination
        ]);
    }

}
