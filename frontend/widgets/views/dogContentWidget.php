 <?php
  use backend\models\Category;
?>
<div class="content_shop_1">
    <div class="row">
        <div class="col-md-6">
        <ul>
           <?php
          foreach ($datacat as $key => $value) {
          ?>
          <li><a href="<?php echo Yii::$app->urlManager->baseUrl?>/animal/view?slug=<?php echo $value['cat_id'];?>&parent=<?php echo $value['parent_id'];?>"><?php echo $value['cat_name'];?></a></a>
          </li>
           <?php
             }
            ?>
        </ul>
        </div>
         <div class="col-md-6">
              <img src="<?php echo $homeUrl?>/uploads/dm_cho.jpg">
        </div>
    </div>
</div>