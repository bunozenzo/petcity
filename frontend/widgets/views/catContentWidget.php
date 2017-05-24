 <?php
  use backend\models\Category;
?>
<div class="content_shop_2">
    <div class="row">
        <div class="col-md-6">
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
        <div class="col-md-6">
              <img src="<?php echo $homeUrl?>/uploads/dm_meo.jpg">
        </div>
            <!-- <p>&nbsp;</p>
            <strong class="font15">Thông tin hữu ích:</strong>
            <div class="space2"></div>
            <div class="list_info_pet line_height22">
                <a href="/cac-benh-thuong-gap-ve-mat-o-cho-ban-can-phai-biet/a423.html">» Các bệnh thường gặp về mắt ở chó bạn cần phải biết</a><br>
                0
                <a href="/canxi-va-nhung-dieu-can-biet-khi-nuoi-cho/a422.html">» Canxi và những điều cần biết khi nuôi chó</a><br>
                <!--1-->
    </div>
</div>
  