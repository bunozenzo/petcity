<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = 'Sửa thông tin sản phẩm: ' . $model->pro_name;
$this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pro_id, 'url' => ['view', 'id' => $model->pro_id]];
$this->params['breadcrumbs'][] = 'Sửa';
?>
<div class="product-update">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
		</div>
		<div class="panel-body">
			  <?= $this->render('_form', [
			        'model' => $model,
			        'dataCategory'=>$dataCategory,
			        'dataSize'=>$dataSize,
			        'dataMade'=>$dataMade,
			        'dataSupplier'=>$dataSupplier
			    ]) ?>
		</div>
	</div>

  

</div>
