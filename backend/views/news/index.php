<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
            <p class="pull-right">
                <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
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

//            'new_id',
                    [
                        'attribute'=>'new_id',
                        'headerOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:15px;text-align:center;'
                        ],
                    ],
//            'new_cat_id',
                    [
                        'attribute'=>'new_cat_id',
                        'headerOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                    ],
//            'new_title',
//                    [
//                        'attribute'=>'new_title',
//                        'headerOptions'=>[
//                            'style'=>'width:15px;text-align:center;'
//                        ],
//                        'contentOptions'=>[
//                            'style'=>'width:15px;text-align:center;'
//                        ],
//                    ],
                    [
                        'attribute'=> 'new_name',
                        'headerOptions'=>[
                            'style'=>'width:300px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:300px;text-align:center;'
                        ],
                    ],
                    [
                        'attribute'=>'pro_image',
                        'content'=>function($model){
                            $a= "<img src=".$model->new_image." style='height:60px; width: 40px'>";
                            return $a;
                        },
                        'headerOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                    ],
                    // 'new_description',
                    // 'new_content:ntext',
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
                    // 'date_create',
                    [
                        'attribute'=>'date_create',
                        'content'=>function($model){
                            return date('d-m-Y',$model->date_create);
                        },
                        'headerOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:100px;text-align:center;'
                        ],
                    ],
                    // 'date_update',

                    ['class' => 'yii\grid\ActionColumn',
                        'buttons'=>[
                            'view'=>function($url,$model){
                                return Html::a('View',$url,['class'=>'btn btn-sm btn-info']);
                            },
                            'update'=>function($url,$model){
                                return Html::a('Edite',$url,['class'=>'btn btn-sm btn-warning']);
                            },
                            'delete'=>function($url,$model){
                                return Html::a('<span class="glyphicon glyphicon-remove"></span>Delete',$url,
                                    [
                                        'class'=>'btn btn-sm btn-danger',
                                        'data-confirm'=>'Bạn có chắc muốn xóa '.$model->new_id,
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
