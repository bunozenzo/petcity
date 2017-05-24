<?php
use yii\helpers\Html;
use frontend\widgets\menuContentWidget;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$homeUrl = str_replace('/frontend/web', '', Yii::$app->urlManager->baseUrl);
?>
<div class="content">
    <div class="row">

        <div class="col-md-3 bg_cho" id="content_left">
            <div class="animal"><img src="<?php echo $homeUrl; ?>/uploads/bg_cat_top_page.png"></div>
            <div class="cat_left">
            </div>
        </div>

        <div class="col-md-9" id="content_right">
            <ul>
                <?php
                foreach ($newpro as $key => $value) {
                    ?>
                    <li>
                        <a href="<?php echo Yii::$app->urlManager->baseUrl; ?>/product/view?pro_id=<?php echo $value['pro_id']; ?>">
                            <div class="pro_img">
                                <?php if (strtotime(date('Y/m/d')) >= strtotime($value['begin_date_sale_off']) && strtotime(date('Y/m/d')) <= strtotime($value['end_date_sale_off'])) { ?>
                                    <div class="pro_sale"><?php echo $value['pro_sale_off'] ?> %</div>
                                <?php } ?>
                                <?php if (strtotime(date('Y/m/d', $value['date_create'])) <= strtotime(date('Y/m/d')) && strtotime(date('Y/m/d', $value['date_create'])) >= strtotime('-10 day', strtotime(date('Y/m/d')))) {

                                    ?>
                                    <div class="pro_new">
                                        <img src="<?php echo $homeUrl; ?>/uploads/newicon.png"></div>
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
                                ?>
                                <input type="hidden" id="product_price"
                                       value="<?php echo number_format($value['pro_price'] * (1 - ($value['pro_sale_off']) / 100), 0, ' ', ',') ?>"/>
                                <?php
                            } else {
                                echo '$ ' . number_format($value['pro_price'], 0, ' ', ','); ?>
                                <input type="hidden" id="product_price"
                                       value="<?php echo number_format($value['pro_price'], 0, ' ', ','); ?>"/>
                                <?php
                            } ?>
                            <input type="hidden" id="pro_id" value="<?php echo $value['pro_id']; ?>"/>
                            <?php if ($value['status'] == 1) { ?>
                                <input type="hidden" id="pro_status" value="Còn hàng"/>
                                <?php
                            } else { ?>
                                <input type="hidden" id="pro_status" value="Hết hàng"/><?php
                            } ?>
                            <span class="view-fast">Xem nhanh</span>
                        </div>
                        <div class="view"><a
                                    href="<?php echo Yii::$app->urlManager->baseUrl; ?>/cart/add?slug=<?php echo $value['pro_id']; ?>"
                                    data-name="<?php echo $value['pro_name'] ?>"><i class="fa fa-cart-arrow-down fa-2x"
                                                                                    aria-hidden="true"></i> Cart</a>
                        </div>
                    </li>
                <?php } ?>

            </ul>
        </div>
        <div class="col-md-9 pull-right">
            <?php echo LinkPager::widget([
                'pagination' => $pagination]);
            ?>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-add-cart">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title add-cart-title">Thông tin đặt hàng</h4>
            </div>
            <div class="modal-body">
                <div id="alert-pro-name">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
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
</div><!-- /.modal -->
</div>
