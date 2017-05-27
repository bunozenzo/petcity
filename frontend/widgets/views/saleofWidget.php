
<div id="content_right">
    <ul>
        <?php
        foreach ($datapro as $key => $value) {
            ?>
            <li>
                <a href="<?php echo Yii::$app->urlManager->baseUrl; ?>/product/view?pro_id=<?php echo $value['pro_id']; ?>">
                    <div class="pro_img">
                        <?php if (strtotime(date('Y/m/d')) >= strtotime($value['begin_date_sale_off']) && strtotime(date('Y/m/d')) <= strtotime($value['end_date_sale_off'])) { ?>
                            <div class="pro_sale"><?php echo $value['pro_sale_off'] ?> %</div>
                        <?php } ?>
                        <?php if (strtotime(date('Y/m/d', $value['date_create'])) <= strtotime(date('Y/m/d')) && strtotime(date('Y/m/d', $value['date_create'])) >= strtotime('-25 day', strtotime(date('Y/m/d')))) {

                            ?>
                            <div class="pro_new">
                                <img src="<?php echo Yii::$app->urlManager->baseUrl; ?>/uploads/newicon.png"></div>
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