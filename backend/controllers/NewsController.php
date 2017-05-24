<?php

namespace backend\controllers;

use Yii;
use backend\models\News;
use backend\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Category;
/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();
        $category=new Category();
        $dataCategory=$category->getAllCategorynew();
        if ($model->load(Yii::$app->request->post())) {
            $model->date_create=time();
            $model->date_update=time();
            if($model->save(false)){
                Yii::$app->session->setFlash('success','thêm mới thành công');
                return $this->redirect(['view', 'id' => $model->new_id]);
            }else{
                Yii::$app->session->setFlash('success','thêm mới thành công');
                return $this->redirect('create',[
                    'model'=>$model,
                    'dataCategory'=>$dataCategory,
                  ]);
            }
            return $this->redirect(['view', 'id' => $model->new_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'dataCategory'=>$dataCategory,
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $category=new Category();
        $dataCategory=$category->getAllCategory();
        if ($model->load(Yii::$app->request->post())) {
            $model->date_create=time();
            $model->date_update=time();
            if($model->save(false)){
                Yii::$app->session->setFlash('success','thay đổi thành công');
                return $this->redirect(['view', 'id' => $model->new_id]);
            }else{
                Yii::$app->session->setFlash('success','thay đổi thành công');
                return $this->redirect('update',[
                    'model'=>$model,
                    'dataCategory'=>$dataCategory,
                ]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'dataCategory'=>$dataCategory,
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
