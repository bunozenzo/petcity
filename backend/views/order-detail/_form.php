<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-detail-form">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'order_id')->textInput() ?>

            <?= $form->field($model, 'pro_id')->textInput() ?>

            <?= $form->field($model, 'pro_price')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'order_detail_qty')->textInput() ?>

            <?= $form->field($model, 'pro_amount')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'status')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
</div>