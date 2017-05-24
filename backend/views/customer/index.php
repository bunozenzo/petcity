<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Khách hàng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
            <p class="pull-right">
                <?= Html::a('Tạo danh mục', ['create'], ['class' => 'btn btn-success']) ?>
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
            [
                'attribute'=>'id',
                'headerOptions'=>[
                    'style'=>'width:15px;text-align:center;'
                ],
                'contentOptions'=>[
                    'style'=>'width:15px;text-align:center;'
                ],
            ],
             [
                'attribute'=>'username',
                'headerOptions'=>[
                    'style'=>'width:150px;text-align:center;'
                ],
                'contentOptions'=>[
                    'style'=>'width:150px;text-align:center;'
                ],
            ],
            // 'full_name',
            [
                'attribute'=>'full_name',
                'headerOptions'=>[
                    'style'=>'width:200px;text-align:center;'
                ],
                'contentOptions'=>[
                    'style'=>'width:200px;text-align:center;'
                ],
            ],
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
             [
                'attribute'=>'email',
                'headerOptions'=>[
                    'style'=>'width:200px;text-align:center;'
                ],
                'contentOptions'=>[
                    'style'=>'width:200px;text-align:center;'
                ],
            ],
            // 'phone',
               [
                'attribute'=>'phone',
                'headerOptions'=>[
                    'style'=>'width:200px;text-align:center;'
                ],
                'contentOptions'=>[
                    'style'=>'width:200px;text-align:center;'
                ],
            ],
            // 'address',
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
            // 'created_at',
            //   [
            //     'attribute'=>'created_at',
            //     'content'=>function($model){
            //         return date('d-m-Y',$model->created_at);
            //     },
            //     'headerOptions'=>[
            //         'style'=>'width:20px;text-align:center;'
            //     ],
            //     'contentOptions'=>[
            //         'style'=>'width:20px;text-align:center;'
            //     ],
            //  ],
            // 'updated_at',

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
                            'data-confirm'=>'Bạn có chắc muốn xóa '.$model->username,
                            'data-method'=>'post',
                        ]);
                },
            ]
            ],
        ],
    ]); ?>
        </div>
    </div>
   
</div>
