<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderDetail */

$this->title = $model->order_detail_id;
$this->params['breadcrumbs'][] = ['label' => 'Chi tiết hóa đơn', 'url' => ['index','id_order_detail'=> $model->order_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-detail-view">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
            <p class="pull-right">
                <?= Html::a('Sửa', ['update', 'id' => $model->order_detail_id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Xóa', ['delete', 'id' => $model->order_detail_id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'order_detail_id',
                    'order_id',
                    'pro_id',
                    'pro_price',
                    'order_detail_qty',
                    'pro_amount',
                    'status',
                ],
            ]) ?>

        </div>
    </div>
</div>
