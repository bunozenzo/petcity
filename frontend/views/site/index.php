<?php

/* @var $this yii\web\View */
use frontend\widgets\dogContentWidget;
use frontend\widgets\catContentWidget;
use frontend\widgets\birdContentWidget;
use frontend\widgets\fishContentWidget;
use frontend\widgets\animalContentWidget;
use frontend\widgets\saleofWidget;
use frontend\widgets\newproWidget;
use frontend\widgets\hotproductWidget;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$homeUrl = str_replace('/frontend/web', '', Yii::$app->urlManager->baseUrl);
$this->title = 'My Yii Application';
?>
<div id="commit_home">
    <div><img src="<?php echo $homeUrl; ?>/uploads/banner_pet.jpg" style="width: 100%;"></div>
    <div id="title_commit_home" class="bg_pet"></div>
    <ul>
        <li><i class="bg_pet icon_list_commit"></i><a href="#">Siêu thị Petcity giao hàng miễn phí trên toàn quốc</a>
        </li>
        <li><i class="bg_pet icon_list_commit"></i><a href="#">Quý khách có thể đổi - trả hàng trong vòng 30 ngày</a>
        </li>
        <li><i class="bg_pet icon_list_commit"></i><a href="#">Quý khách có thể thanh toán khi nhận hàng (COD)</a></li>
        <li><i class="bg_pet icon_list_commit"></i><a href="#">Chương trình dành cho khách hàng VIP tại Petcity.vn</a>
        </li>
    </ul>
</div>
<div class="list_home_shop">
    <div class="row">
        <div class="col-md-6 shop_1">
            <div class="title_shop title_shop_1 bg_pet"></div>
            <?= dogContentWidget::widget(['message' => $homeUrl]); ?>
        </div>
        <div class="col-md-6 shop_1">
            <div class="title_shop title_shop_2 bg_pet"></div>
            <?= catContentWidget::widget(['message' => $homeUrl]); ?>
        </div>
        <div class="col-md-4 shop_1">
            <div class="title_shop title_shop_3 bg_pet"></div>
            <?= birdContentWidget::widget(['message' => $homeUrl]); ?>
        </div>
        <div class="col-md-4 shop_1">
            <div class="title_shop title_shop_4 bg_pet"></div>
            <?= fishContentWidget::widget(['message' => $homeUrl]); ?>
        </div>
        <div class="col-md-4 shop_1">
            <div class="title_shop title_shop_5 bg_pet"></div>
            <?= animalContentWidget::widget(['message' => $homeUrl]); ?>
        </div>
    </div>
</div>
<hr/>
<div class="content_bottom">
    <div class="list_product">
        <div class="sale"><i class="bg_pet icon_title_sale"></i> Sản phẩm Sale-Off<a
                    href="<?php echo Yii::$app->urlManager->baseUrl; ?>/saleof" class="btn_view_all_hot">Xem hết</a>
        </div>
        <div>
            <?= saleofWidget::widget(); ?>
        </div>
    </div>
</div>
<div class="content_bottom">
    <div class="list_product">
        <div class="list_product">
            <div class="sale"><i class="bg_pet icon_title_new"></i> Sản phẩm mới<a href="<?php echo Yii::$app->urlManager->baseUrl; ?>/newpro"
                                                                                   class="btn_view_all_hot">Xem hết &gt;&gt;</a>
            </div>
        </div>
        <?= newproWidget::widget(); ?>
    </div>
</div>
<div class="content_bottom">
    <div class="list_product">
        <div class="list_product">
            <div class="sale"><img src="<?php echo $homeUrl; ?>/assets/hot_bg_pet.png"> Sản phẩm mua nhiều nhất<a href="<?php echo Yii::$app->urlManager->baseUrl; ?>/hotproduct"
                                                                                   class="btn_view_all_hot">Xem hết &gt;&gt;</a>
            </div>
        </div>
        <?= hotproductWidget::widget(); ?>
    </div>
</div>
</div>
<div class="modal fade" id="view-fast">
    <div class="modal-dialog view-fast-dialog">
        <div class="modal-content view-fast-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body row">
                <div class="col-md-5 product_detail_img">
                    <img src="" id="show_img" data-zoom-image="">
                </div>
                <div class="col-md-7 product_content">
                    <span class="product_title"></span>
                    <hr/>
                    <div class="row">
                        <div class="col-md-6 product_info">
                            <h4>Tình trạng:<span class="pro_status"></span></h4>
                            <h4>Giá bán:<span class="product_price-info"></span></h4>
                        </div>

                        <div class="col-md-6 petcity">
                            <img src="<?php echo $homeUrl; ?>/uploads/petcity.png" alt="">
                            <p>PetCity.vn được ra đời với sứ mệnh cung cấp tất cả các sản phẩm trọn gói dành cho thú
                                cưng: từ thức
                                ăn, quần áo, đồ dùng, đồ chơi, mỹ phẩm, chuồng trại và linh phụ kiện khác…đến từ các
                                nhà sản xuất uy
                                tín trên thế giới như: ABC, Forcans, Royal Canin, Whiskas, Davis, Virbac, PetAg,
                                Fido’s,
                                Pedigree…</p>
                        </div>
                    </div>
                    <hr/>
                </div>
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

                            <input type="hidden" name="pro_id" id="product_id" value="">
                            <input type="submit" value="Thêm vào giỏ hàng" class="btn btn-warning">

                        </div>

                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>