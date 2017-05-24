<?php

namespace frontend\controllers;
use backend\models\Product;

class HotproductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model=new Product();
        $hotpro=$model->getHotproduct();
        $pagination=$model->getPagerHotproduct();
        return $this->render('index',[
            'hotpro'=>$hotpro,
            'pagination'=>$pagination
        ]);
    }

}
