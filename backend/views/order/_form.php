<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'customer_id')->textInput() ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'name_ship')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email_ship')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone_ship')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'address_ship')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'request')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'payment_id')->textInput() ?>

            <?= $form->field($model, 'deliver_id')->textInput() ?>

            <?= $form->field($model, 'order_amount')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'status')->radioList(array(1 => 'Đặt hàng', 0 =>'Giao hàng',2 =>'Thanh toán',3=>'Hủy bỏ'), array('class' => 'i-checks'))  ?>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
</div>
