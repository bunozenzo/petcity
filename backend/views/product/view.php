<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->pro_name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
            <p class="pull-right">
                <?= Html::a('Update', ['update', 'id' => $model->pro_id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->pro_id], [
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
                    'pro_id',
                    'pro_name',
                    'pro_image',
                    'pro_image1',
                    'pro_image2',
                    'pro_price',
                    'pro_sale_off',
                    'pro_cat_id',
                    'pro_supplier_id',
                    'pro_made_id',
                    'pro_size_id',
                    'description:ntext',
                    'status',
                    'begin_date_sale_off',
                    'end_date_sale_off',
                    'date_create',
                    'date_update',
                ],
            ]) ?>

        </div>
    </div>

    <h1></h1>

   
</div>
