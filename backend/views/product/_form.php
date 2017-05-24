<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pro_name')->textInput(['maxlength' => true]) ?>

   <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'pro_image')->textInput(['maxlength' => true,'id'=>'image'])?>
            <img src="<?php echo $model->pro_image;?>" id="show_img">
            <div>
            <button type="button" id="select-img" class="btn btn-primary">Chọn ảnh</button>
            <button type="button" id="remove-img" class="btn btn-danger">Xóa ảnh</button>
            </div>
        </div>
        <div class="col-md-4">
             <?= $form->field($model, 'pro_image1')->textInput(['maxlength' => true, 'id'=>'image2']) ?>
            <img src="<?php echo $model->pro_image1;?>" id="show_img2">
            <div>
            <button type="button" id="select-img2" class="btn btn-primary">Chọn ảnh</button>
            <button type="button" id="remove-img2" class="btn btn-danger">Xóa ảnh</button>
            </div>  
        </div>
          <div class="col-md-4">
            <?= $form->field($model, 'pro_image2')->textInput(['maxlength' => true, 'id'=>'image3']) ?>
            <img src="<?php echo $model->pro_image2;?>" id="show_img3">
            <div>
            <button type="button" id="select-img3" class="btn btn-primary">Chọn ảnh</button>
            <button type="button" id="remove-img3" class="btn btn-danger">Xóa ảnh</button>
            </div>  
        </div>
    </div>


    <?= $form->field($model, 'pro_price')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'pro_cat_id')->dropDownList($dataCategory,['prompt'=>'-Danh mục-'])?>

    <?= $form->field($model, 'pro_supplier_id')->dropDownList($dataSupplier,['prompt'=>'-Công ty-']) ?>

    <?= $form->field($model, 'pro_made_id')->dropDownList($dataMade,['prompt'=>'-Chất liệu-']) ?>

    <?= $form->field($model, 'pro_size_id')->dropDownList($dataSize,['prompt'=>'-Kích thước-']) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6,'id'=>'content']) ?>

    <?= $form->field($model, 'pro_sale_off')->textInput() ?>

    <?= $form->field($model, 'begin_date_sale_off')->textInput() ?>

    <?= $form->field($model, 'end_date_sale_off')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox() ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
