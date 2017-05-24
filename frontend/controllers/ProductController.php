<?php

namespace frontend\controllers;
use backend\models\Product;
class ProductController extends \yii\web\Controller
{
    public function actionView($pro_id)
    {
        $data=new Product();
        $model=$data->getInfoProduct($pro_id);
        $random=$data->randomProduct($pro_id);
        return $this->render('view',['model'=>$model,'random'=>$random]);
    }
}
