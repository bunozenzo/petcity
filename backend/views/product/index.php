<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
             <p class="pull-right">
                <?= Html::a('Tạo mới', ['create'], ['class' => 'btn btn-success']) ?>
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

                    // 'pro_id',
                          [
                                'attribute'=>'pro_id',
                                'headerOptions'=>[
                                    'style'=>'width:15px;text-align:center;'
                                ],
                                'contentOptions'=>[
                                    'style'=>'width:15px;text-align:center;'
                                ],
                            ],
                    // 'pro_name',
                                [
                                    'attribute'=>'pro_name',
                                    'headerOptions'=>[
                                        'style'=>'width:300px;text-align:center;'
                                    ],
                                    'contentOptions'=>[
                                        'style'=>'width:300px;text-align:center;'
                                    ],
                                ],
                    // 'pro_image',
                                   [
                               'attribute'=>'pro_image',
                                'content'=>function($model){
                                        $a= "<img src=".$model->pro_image." style='height:60px; width: 40px'>";
                                        return $a;
                                },
                                'headerOptions'=>[
                                    'style'=>'width:100px;text-align:center;'
                                ],
                                'contentOptions'=>[
                                    'style'=>'width:100px;text-align:center;'
                                ],
                            ],
                    // 'pro_image1',
                    // 'pro_image2',
                    // 'pro_price',
                                [
                                    'attribute'=>'pro_price',
                                    'headerOptions'=>[
                                        'style'=>'width:100px;text-align:center;'
                                    ],
                                    'contentOptions'=>[
                                        'style'=>'width:100px;text-align:center;'
                                    ],
                                ],
                    // 'pro_sale_off',
                    // 'pro_cat_id',
                    // 'pro_supplier_id',
                    // 'pro_made_id',
                    // 'pro_size_id',
                    // 'description:ntext',
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
                                        'style'=>'width:50px;text-align:center;'
                                    ],
                                    'contentOptions'=>[
                                        'style'=>'width:50px;text-align:center;'
                                    ],
                                ],
                    // 'begin_date_sale_off',
                    // 'end_date_sale_off',
                    // 'date_create',
                    // 'date_update',

                  ['class' => 'yii\grid\ActionColumn',
               'buttons'=>[
                'view'=>function($url,$model){
                    return Html::a('Xem',$url,['class'=>'btn btn-sm btn-info']);
                },
                'update'=>function($url,$model){
                    return Html::a('Sửa',$url,['class'=>'btn btn-sm btn-warning']);
                },
                'delete'=>function($url,$model){
                    return Html::a('Xóa',$url,
                        [
                            'class'=>'btn btn-sm btn-danger',
                            'data-confirm'=>'Bạn có chắc muốn xóa '.$model->pro_id,
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
