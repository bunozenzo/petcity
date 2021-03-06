<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DeliverSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deliver-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'del_id') ?>

    <?= $form->field($model, 'del_name') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'date_create') ?>

    <?= $form->field($model, 'date_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
