<?php

namespace frontend\controllers;
use backend\models\Product;
use backend\models\ProductSearch;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class SearchController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionName($searchproduct)
    {
    	$data=new Product();
    	$datasearch=$data->getSearch($searchproduct);
    	$pagination=$data->getPagerProduct($searchproduct);
  //   	$query = Product::findBysql("select * from product where status=1 and pro_name like '%$pro%'");
		// $count = $query->count();
		// $pagination = new Pagination(['totalCount' => $count,'pageSize'=>'1']);
		// $articles = $query->offset($pagination->offset)
	 //    ->limit($pagination->limit)
	 //    ->all();
	      return $this->render('name',[
	        	'datasearch'=>$datasearch,
	            'pagination'=>$pagination
	        	]);
    }

}
