<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hóa đơn';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
            <p class="pull-right">
                <?= Html::a('Tạo mới hóa đơn', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'tableOptions' => [
                    'class' => 'table table-responsive',
                    'id' => 'sortable-table',
                ],
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
//                    'order_id',
                    [
                        'attribute'=>'order_id',
                        'headerOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                    ],
//                    'customer_id',
                    [
                        'attribute'=>'customer_id',
                        'content'=>function($model){
                            if(!isset($model->customer_id)){
                                return '<span class="label label-info">No acc</span>';
                            }else{
                                return $model->customer_id;
                            }
                        },
                        'headerOptions'=>[
                            'style'=>'width:150px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:150px;text-align:center;'
                        ],
                    ],
//                    'name',
                    [
                        'attribute'=>'name',
                        'headerOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                    ],
//                    'email:email',
                    [
                        'attribute'=>'email',
                        'headerOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                    ],
//                    'phone',
                    [
                        'attribute'=>'phone',
                        'headerOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                    ],
                    // 'address',
                    // 'name_ship',
                    // 'email_ship:email',
                    // 'phone_ship',
                    // 'address_ship',
                    // 'request',
                    // 'payment_id',
                    // 'deliver_id',
                    // 'order_amount',
                    [
                        'attribute'=>'order_amount',
                        'content'=>function($model){
                            return number_format($model->order_amount,'0','',',').'VNĐ';
                        },

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
                            if($model->status==1){
                                return '<span class="label label-info">Đặt hàng</span>';
                            }else if($model->status==0){
                                return '<span class="label label-success">Giao hàng</span>';
                            }else if($model->status==2){
                                return '<span class="label label-danger">Thanh toán</span>';
                            }else{
                                return '<span class="label label-success">Hủy bỏ</span>';
                            }
                        },
                        'headerOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                    ],
                    // 'date_create',
//                    [
//                        'attribute'=>'date_create',
//                        'content'=>function($model){
//                            return date('d-m-Y',$model->date_create);
//                        },
//                        'headerOptions'=>[
//                            'style'=>'width:20px;text-align:center;'
//                        ],
//                        'contentOptions'=>[
//                            'style'=>'width:20px;text-align:center;'
//                        ],
//                    ],
                    // 'date_update',
                    ['class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update} {delete} {my_button}',
                        'buttons'=>[
                            'view'=>function($url,$model){
                                return Html::a('Xem',$url,['class'=>'btn btn-sm btn-primary']);
                            },
                            'update'=>function($url,$model){
                                return Html::a('Sửa',$url,['class'=>'btn btn-sm btn-success']);
                            },
                            'delete'=>function($url,$model){
                                return Html::a('Xóa',$url,
                                    [
                                        'class'=>'btn btn-sm btn-danger',
                                        'data-confirm'=>'Bạn có chắc muốn xóa '.$model->order_id,
                                        'data-method'=>'post',
                                    ]);
                            },
                            'my_button' => function ($url,$model) {
                                $url = Yii::$app->urlManager->createUrl(['order-detail','id_order_detail'=>$model->order_id]);
                                return Html::a('CTHD',$url,
                                    ['class'=>'btn btn-sm btn-warning']);
                            },
                        ]
                    ],
                ],
            ]); ?>
        </div>
    </div>

</div>
