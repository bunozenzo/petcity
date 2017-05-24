 <?php
  use backend\models\Category;
?>
<div class="content_shop_3">
    <div class="row">
    	<div class="col-md-12">
              <img src="<?php echo $homeUrl?>/uploads/dm_chim.jpg">
        </div>
        <div class="col-md-12">
        <ul>
           <?php
          foreach ($datacat as $key => $value) {
          ?>
          <li><a href="<?php echo Yii::$app->urlManager->baseUrl?>/animal/view?slug=<?php echo $value['cat_id'];?>&parent=<?php echo $value['parent_id'];?>"><?php echo $value['cat_name'];?>
          </li>
           <?php
             }
            ?>
        </ul>
        </div>
         
    </div>
</div>