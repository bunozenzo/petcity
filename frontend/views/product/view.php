<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

date_default_timezone_set('Asia/Ho_Chi_Minh');
//	$this->title=($model) ? $model ->pro_name :'Not Found';
$homeUrl = str_replace('/frontend/web', '', Yii::$app->urlManager->baseUrl);
?>
<hr/>
<div class="row product_detail">
    <?php if ($model): ?>
    <?php foreach ($model as $model): ?>
    <div class="col-md-5 product_detail_img">
        <img src="<?php echo $model['pro_image'] ?>" id="show_img" data-zoom-image="<?php echo $model['pro_image'] ?>">
        <div class="product_detail_img_list">
            <img class="1" src="<?php echo $model['pro_image']; ?>">
            <img src="<?php echo $model['pro_image'] ?>">
            <img src="<?php echo $model['pro_image2'] ?>">
        </div>
        <div class="product_detail_description">
            <h
            <?php echo $model['description'] ?>
        </div>
    </div>
    <div class="col-md-7 product_content">
        <span class="product_title"><?php echo $model['pro_name'] ?></span>
        <div class="like"></div>
        <hr/>
        <div class="row">
            <div class="col-md-6 product_info">
                <h4>Tình trạng:<span><?php if ($model['status'] == 1) {
                            echo " Còn hàng";
                        } else {
                            echo " Hết hàng";
                        } ?></span></h4>
                <h4>Giá bán: <?php
                    if (strtotime(date('Y/m/d')) >= strtotime($model['begin_date_sale_off']) && strtotime(date('Y/m/d')) <= strtotime($model['end_date_sale_off'])) {
                        echo "<span>" . number_format($model['pro_price'] * (1 - ($model['pro_sale_off'] / 100)), 0, ' ', ',') . "đ</span>";
                        echo "<span id='price-old'>" . number_format($model['pro_price'], 0, ' ', ',') . "đ</span>";
                    } else {
                        echo "<span>" . number_format($model['pro_price'], 0, ' ', ',') . "đ</span>";
                    } ?></h4>
                <div class="product_info_name">
                    <h5>Công ty sản xuất:<span><?php echo $model['sup_name'] ?></span></h5>
                    <h5>Chất liệu:<span><?php echo $model['made_name'] ?></span></h5>
                </div>
            </div>
            <div class="col-md-6 petcity">
                <img src="<?php echo $homeUrl; ?>/uploads/petcity.png" alt="">
                <p>PetCity.vn được ra đời với sứ mệnh cung cấp tất cả các sản phẩm trọn gói dành cho thú cưng: từ thức
                    ăn, quần áo, đồ dùng, đồ chơi, mỹ phẩm, chuồng trại và linh phụ kiện khác…đến từ các nhà sản xuất uy
                    tín trên thế giới như: ABC, Forcans, Royal Canin, Whiskas, Davis, Virbac, PetAg, Fido’s,
                    Pedigree…</p>
            </div>
        </div>
        <hr/>
        <div class="product_order">
            <?php $form = ActiveForm::begin(
                [
                    'action' => Url::to(['/cart/add-cart']),
                    'options' => [
                        'class' => 'form-inline pull-left'
                    ]
                ]
            ); ?>
            <div class="row">
                <div class="col-md-6">
                    <span class="sl"> Số lượng:</span> <select name="qtt">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-md-6">

                    <input type="hidden" name="pro_id" value="<?php echo $model['pro_id']; ?>">
                    <input type="submit" value="Thêm vào giỏ hàng" class="btn btn-warning">

                </div>

            </div>
            <?php ActiveForm::end(); ?>
        </div>

        <div class="fb-comments"
             data-href="localhost<?php echo Yii::$app->urlManager->baseUrl; ?>/product/view?pro_id=<?php echo $model['pro_id']; ?>"
             data-colorscheme="light" data-numposts="5" data-width="100%"></div>
        <div class="product_show">
            <h4>Sản phẩm gợi ý cho bạn</h4>
            <hr/>
            <div id="content_right" class="test">
                <div class="slide-holder">
                    <div class="slide-pager">
                        <div class="slide-control-prev">«</div>
                        <div class="slide-control-next">»</div>
                    </div>
                    <div class="slide-container">
                        <div class="slide-stage">
                            <?php foreach ($random as $key => $value){?>
                                <div class="slide-image">
                                    <a href="<?php echo Yii::$app->urlManager->baseUrl; ?>/product/view?pro_id=<?php echo $value['pro_id']; ?>">
                                        <div class="pro_img">
                                            <?php if (strtotime(date('Y/m/d')) >= strtotime($value['begin_date_sale_off']) && strtotime(date('Y/m/d')) <= strtotime($value['end_date_sale_off'])) { ?>
                                                <div class="pro_sale"><?php echo $value['pro_sale_off'] ?> %</div>
                                            <?php } ?>
                                            <?php if (strtotime(date('Y/m/d', $value['date_create'])) <= strtotime(date('Y/m/d')) && strtotime(date('Y/m/d', $value['date_create'])) >= strtotime('-10 day', strtotime(date('Y/m/d')))) {

                                                ?>
                                                <div class="pro_new">
                                                    <img src="<?php echo Yii::$app->urlManager->baseUrl; ?>/uploads/newicon.png">
                                                </div>
                                            <?php } ?>
                                            <img src="<?php echo $value['pro_image'] ?>" alt="">
                                        </div>
                                    </a>
                                    <div class="pro_name">
                                        <?php echo $value['pro_name'] ?>
                                    </div>
                                    <div class="pro_price">
                                        <?php
                                        if (strtotime(date('Y/m/d')) >= strtotime($value['begin_date_sale_off']) && strtotime(date('Y/m/d')) <= strtotime($value['end_date_sale_off'])) {
                                            echo '$ ' . number_format($value['pro_price'] * (1 - ($value['pro_sale_off']) / 100), 0, ' ', ',');
                                        } else {
                                            echo '$ ' . number_format($value['pro_price'], 0, ' ', ',');
                                        } ?>
                                        <span class="glyphicon glyphicon-heart"></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php endforeach; ?>
<?php else : ?>
    <div class="alert alert-danger">
        <button type="button" class="btn btn-primary"></button>
        <strong>Error 404!</strong> Không có thông tin sản phẩm
    </div>
<?php endif; ?>
</div>