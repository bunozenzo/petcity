<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Product;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-detail-index">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
            <p class="pull-right">
                <?= Html::a('Create Order Detail', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn',
                        'header'=>'STT',
                        'headerOptions'=>[
                            'style'=>'width:50px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:50px;text-align:center;'
                        ],
                    ],

//                    'order_detail_id',
                    [
                        'attribute'=>'order_detail_id',
                        'headerOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                    ],
//                    'order_id',
                    [
                        'attribute'=>'order_id',
                        'headerOptions'=>[
                            'style'=>'width:80px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:80px;text-align:center;'
                        ],
                    ],
//                    'pro_id',
                    [
                        'attribute'=>'pro_id',
                        'content'=>function($model){
                            $data=Product::findOne($model->pro_id);
                            if($data){
                                return $data['pro_name'];
                            }else{
                                return '<span class="label label-danger">Error</span>';
                            }
                        },
                        'headerOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                    ],
//                    'pro_price',
                    [
                        'attribute'=>'pro_price',
                        'headerOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                    ],
//                    'order_detail_qty',
                    [
                        'attribute'=>'order_detail_qty',
                        'headerOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                    ],
                    // 'pro_amount',
                    [
                        'attribute'=>'pro_amount',
                        'headerOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                    ],
                    // 'status',
                    [
                        'attribute'=>'status',
                        'content'=>function($model){
                            if($model->status==0){
                                return '<span class="label label-info">Thanh toán</span>';
                            }else{
                                return '<span class="label label-danger">Đặt hàng</span>';
                            }
                        },
                        'headerOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                    ],
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
                                        'data-confirm'=>'Bạn có chắc muốn xóa '.$model->order_id,
                                        'data-method'=>'post',
                                    ]);
                            },
                        ]
                    ],
                ],
            ]); ?>
        </div>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
</div>
