<?php

namespace frontend\controllers;
use backend\models\Product;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class SaleofController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model=new Product();
    	$saleof=$model->getSaleof();
    	$pagination=$model->getPagerSaleof();
	 	return $this->render('index',[
	    	'saleof'=>$saleof,
	        'pagination'=>$pagination
	    	]);
    }

}
