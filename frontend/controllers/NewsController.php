<?php

namespace frontend\controllers;
use backend\models\Category;
use backend\models\News;

class NewsController extends \yii\web\Controller
{
    public function actionIndex($slug)
    {
        $model=new Category();
        $cat=$model->getNewCategory();
        $model1=new News();
        $data=$model1->getNews($slug);
        $pagination=$model1->getPagerNews($slug);
        return $this->render('index',['datacat'=>$cat,'datanew'=>$data,'pagination'=>$pagination]);
    }
    public function actionView($new_id)
    {
        $model=new Category();
        $cat=$model->getNewCategory();
        $model1=new News();
        $data=$model1->getNew($new_id);
        return $this->render('view',['datacat'=>$cat,'datanew'=>$data]);
    }
}
