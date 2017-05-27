<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderDetail */

$this->title = 'Sửa Mã CTHD : ' . $model->order_detail_id;
$this->params['breadcrumbs'][] = ['label' => 'Chi tiết hóa đơn', 'url' => ['index','id_order_detail'=> $model->order_id]];
$this->params['breadcrumbs'][] = ['label' => $model->order_detail_id, 'url' => ['view', 'id' => $model->order_detail_id]];
$this->params['breadcrumbs'][] = 'Sửa';
?>
<div class="order-detail-update">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>


</div>
