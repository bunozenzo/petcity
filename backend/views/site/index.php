<?php

/* @var $this yii\web\View */

$this->title = 'Pet shop admin';
?>
<div class="site-index">
<div class="alert alert-info">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Chào mừng</strong> <?php 
	echo '('.Yii::$app->user->identity->username.')';
	?>
</div>
<img src="<?php echo Yii::$app->urlManager->baseUrl;?>./assets/thucung.jpg" alt="" style="width: 100%">
</div>
