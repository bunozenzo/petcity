<?php
$this->title="Quản lý hình ảnh";
$Url= str_replace('/backend', '', Yii::$app->urlManager->baseUrl);
?>
<div class="file-index">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo $this->title?></h3>
		</div>
		<div class="panel-body">
		  <iframe  width="100%" height="550" frameborder="0" src="<?php echo $Url?>/filemanager/dialog.php">
                    </iframe>
          </iframe>
		</div>
	</div>
</div>