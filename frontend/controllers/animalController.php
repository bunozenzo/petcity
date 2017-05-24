<?php

namespace frontend\controllers;
use backend\models\Category;
use backend\models\Product;
class AnimalController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
      public function actionView($slug,$parent)
    {
		$model=new Category();
    	$cat=$model->getCategorybyParent($parent);
        $model1=new Product();
        $data=$model1->getProduct($slug);
        $pagination=$model1->getPagerProduct1($slug);
        return $this->render('view',['datacat'=>$cat,'parent_id'=>$parent,'datapro'=>$data,'pagination'=>$pagination]);
    }

}
