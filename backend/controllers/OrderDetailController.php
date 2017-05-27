<?php

namespace backend\controllers;

use Yii;
use backend\models\OrderDetail;
use backend\models\OrderDetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderDetailController implements the CRUD actions for OrderDetail model.
 */
class OrderDetailController extends Controller
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
     * Lists all OrderDetail models.
     * @return mixed
     */
    public function actionIndex($id_order_detail)
    {
        $searchModel = new OrderDetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$id_order_detail);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OrderDetail model.
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
     * Creates a new OrderDetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OrderDetail();
        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                Yii::$app->session->setFlash('info',"Thêm mới thành công");
                return $this->redirect(['index','id_order_detail'=>$model->order_id]);
            }else{
                Yii::$app->session->setFlash('info',"Thêm mới không thành công");
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing OrderDetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                Yii::$app->session->setFlash('info',"Thêm mới thành công");
                return $this->redirect(['index','id_order_detail'=>$model->order_id]);
            }else{
                Yii::$app->session->setFlash('info',"Thêm mới không thành công");
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
            return $this->redirect(['view', 'id' => $model->order_detail_id]);
        } else {
            return $this->render('update',[
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing OrderDetail model.
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
     * Finds the OrderDetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OrderDetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OrderDetail::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
