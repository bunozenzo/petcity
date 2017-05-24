 <?php
  use backend\models\Category;
?>
 <div class="bot_menu">
    <div id="menu">
        <ul>
           <?php
          foreach ($datacat as $key => $value) {
              if($value['cat_name']=='Tin tức'){
                  ?>
                  <li><a><?php echo $value['cat_name']; ?></a>
                      <ul class="sub-menu">
                          <?php
                          $modelsub1 = new Category();
                          $catsub1 = $modelsub1->getCategorybyParent($value['cat_id']);
                          foreach ($catsub1 as $key => $value) {
                              ?>
                              <li>
                                  <a href="<?php echo $homeUrl ?>/news/index?slug=<?php echo $value['cat_id']; ?>"><?php echo $value['cat_name']; ?></a>
                              </li>
                              <?php
                          }
                          ?>
                      </ul>
                  </li>
                  <?php
              }else {
                  ?>
                  <li><a><?php echo $value['cat_name']; ?></a>
                      <ul class="sub-menu">
                          <?php
                          $modelsub1 = new Category();
                          $catsub1 = $modelsub1->getCategorybyParent($value['cat_id']);
                          foreach ($catsub1 as $key => $value) {
                              ?>
                              <li>
                                  <a href="<?php echo $homeUrl ?>/animal/view?slug=<?php echo $value['cat_id']; ?>&parent=<?php echo $value['parent_id']; ?>"><?php echo $value['cat_name']; ?></a>
                              </li>
                              <?php
                          }
                          ?>
                      </ul>
                  </li>
                  <?php
              }
             }
            ?>
        </ul>
  </div>
</div>