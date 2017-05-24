<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Supplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-form">

    
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
		</div>
		<div class="panel-body">
			<?php $form = ActiveForm::begin(); ?>

		    <?= $form->field($model, 'sup_name')->textInput(['maxlength' => true]) ?>

		    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

		    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

		    <?= $form->field($model, 'status')->checkbox() ?>
		    <div class="form-group">
		        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
		    </div>

		    <?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
