<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Made */

$this->title = $model->made_name;
$this->params['breadcrumbs'][] = ['label' => 'Mades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="made-view">


    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
                <p class="pull-right">
        <?= Html::a('Update', ['update', 'id' => $model->made_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->made_id], [
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
            'made_id',
            'made_name',
            'status',
            'date_create',
            'date_update',
        ],
    ]) ?>
        </div>
    </div>
</div>
