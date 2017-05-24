<?php
$homeUrl = str_replace('/frontend/web', '', Yii::$app->urlManager->baseUrl);
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<div class="content">
    <div class="row">

        <div class="col-md-3 bg_cho" id="content_left">
            <div class="animal"><img src="<?php echo $homeUrl; ?>/uploads/bg_cat_top_page.png"></div>
            <div class="cat_left">
                <ul>
                    <?php
                    foreach ($datacat as $key => $value) {
                        ?>
                        <li>
                            <a href="<?php echo Yii::$app->urlManager->baseUrl;?>/news/index?slug=<?php echo $value['cat_id']; ?>"><?php echo $value['cat_name']; ?></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-md-9 bg_cho" id="content_right_new">
            <?php foreach ($datanew as $item): ?>
                <div class="rơw">
                    <div class="test">
                        <div class="col-md-3 new-img"><img src="<?php echo $item['new_image'];?>" alt="" class="img-thumbnail"></div>
                        <div class="col-md-9 new-info"><h4> <a href="<?php echo Yii::$app->urlManager->baseUrl;?>/news/view?new_id=<?php echo $item['new_id'];?>"><?php echo $item['new_title'];?></a></h4>
                            <p><?php echo date('Y-m-d h:i:sa',$item['date_create']);?></p>
                            <span><?php echo $item['new_description'];?></span>
                        </div>

                    </div>

                </div>
            <?php endforeach;?>
        </div>
        <div class="col-md-9 pull-right">
            <?php echo LinkPager::widget([
                'pagination' => $pagination]);
            ?>
        </div>
    </div>

</div>
