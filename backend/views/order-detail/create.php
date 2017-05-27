<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\OrderDetail */

$this->title = 'Tạo mới CTHD';
$this->params['breadcrumbs'][] = ['label' => 'Chi tiết hóa đơn', 'url' => ['index','id_order_detail'=> $model->order_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
