<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pro_id') ?>

    <?= $form->field($model, 'pro_name') ?>

    <?= $form->field($model, 'pro_image') ?>

    <?= $form->field($model, 'pro_image1') ?>

    <?= $form->field($model, 'pro_image2') ?>

    <?php // echo $form->field($model, 'pro_price') ?>

    <?php // echo $form->field($model, 'pro_sale_off') ?>

    <?php // echo $form->field($model, 'pro_cat_id') ?>

    <?php // echo $form->field($model, 'pro_supplier_id') ?>

    <?php // echo $form->field($model, 'pro_made_id') ?>

    <?php // echo $form->field($model, 'pro_size_id') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'begin_date_sale_off') ?>

    <?php // echo $form->field($model, 'end_date_sale_off') ?>

    <?php // echo $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'date_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
