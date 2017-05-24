<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'new_cat_id')->dropDownList($dataCategory,['prompt'=>'-Danh mục-'])?>

    <?= $form->field($model, 'new_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'new_name')->textInput(['maxlength' => true]) ?>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'new_image')->textInput(['maxlength' => true,'id'=>'image-new']) ?>
            <img src="<?php echo $model->new_image;?>" id="show_img_new">
            <div>
                <button type="button" id="select-img-new" class="btn btn-primary">Chọn ảnh</button>
                <button type="button" id="remove-img-new" class="btn btn-danger">Xóa ảnh</button>
            </div>
        </div>
    </div>
    <?= $form->field($model, 'new_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'new_content')->textarea(['rows' => 6,'id'=>'content'])  ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
