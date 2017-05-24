<?php 
	$this->title="Thông tin đặt hàng";
	use yii\helpers\Html;
 ?>
<div class="container">
	<div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Thông báo!</strong> Bạn đã mua hàng thành công. chúng tôi sẽ sớm liên hệ với bạn ... <?php echo Html::a('Tiếp tục mua hàng',['/site'],['class'=>'btn btn-success']); ?>
	</div>
</div>