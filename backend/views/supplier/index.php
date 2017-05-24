<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
              <p class="pull-right">
                <?= Html::a('Create Supplier', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn',
                              'header'=>'STT',
                         'headerOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                    ],

                    //'sup_id',
                     [
                        'attribute'=>'sup_id',
                        'headerOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:px;text-align:center;'
                        ],
                    ],
                    // 'sup_name',
                      [
                        'attribute'=>'sup_name',
                        'headerOptions'=>[
                            'style'=>'width:200px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:200px;text-align:center;'
                        ],
                    ],
                    // 'mobile',
                      [
                        'attribute'=>'mobile',
                        'headerOptions'=>[
                            'style'=>'width:200px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:200px;text-align:center;'
                        ],
                    ],
                    // 'address',
                      [
                        'attribute'=>'address',
                        'headerOptions'=>[
                            'style'=>'width:200px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:200px;text-align:left;'
                        ],
                    ],
                    // 'status',
                     [
                        'attribute'=>'status',
                        'content'=>function($model){
                            if($model->status==0){
                                return '<span class="label label-danger">Không kích hoạt</span>';
                            }else{
                                return '<span class="label label-warning">Kích hoạt</span>';
                            }
                        },
                        'headerOptions'=>[
                            'style'=>'width:200px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:200px;text-align:center;'
                        ],
                    ],
                    // 'date_create',
                    // 'date_update',

                    ['class' => 'yii\grid\ActionColumn',
                     'buttons'=>[
                'view'=>function($url,$model){
                    return Html::a('View',$url,['class'=>'btn btn-sm btn-primary']);
                },
                'update'=>function($url,$model){
                    return Html::a('Edite',$url,['class'=>'btn btn-sm btn-success']);
                },
                'delete'=>function($url,$model){
                    return Html::a('<span class="glyphicon glyphicon-remove"></span>Delete',$url,
                        [
                            'class'=>'btn btn-sm btn-danger',
                            'data-confirm'=>'Bạn có chắc muốn xóa '.$model->sup_name,
                            'data-method'=>'post',
                        ]);
                },
            ]],
                ],
            ]); ?>
        </div>
    </div>
</div>
