<?php 
use yii\helpers\Html;
 ?>
<div class="cart-show">
  <ul>
  <li>
     <a href="<?php echo Yii::$app->urlManager->baseUrl; ?>/cart/index" class="r bg_cart"></a>
    <ul>
     <?php if($cartstore): $n=1;?>
      <div class="cart-header"><span>Bạn hiện có </span><?php echo $total ?><span> sản phấm</span></div>
      <div class="cart-content">
     <?php foreach ($cartstore as $item) :?>   
      <li>
      <div id="cart-cont">
        <div class="cart-cont-img">
          <?php echo Html::a('',['/cart/remove','slug'=>$item->pro_id],['class'=>'glyphicon glyphicon-remove']); ?>
          <img src="<?php echo $item->pro_image?>">
        </div>
        <div class="cart-cont-tt">
          <span><?php echo $item->pro_name; ?></span>
          <div id="cart-cont-price">
            <?php
            if(strtotime(date('Y/m/d'))>=strtotime($item->begin_date_sale_off)&&strtotime(date('Y/m/d'))<=strtotime($item->end_date_sale_off)){
              echo number_format($item->pro_price*(1-($item->pro_sale_off)/100),0,' ',',') ; 
            }else{
              echo number_format($item->pro_price,0,' ',',') ;
            }  ?> VNĐ
          </div>
          <div> Số lượng: <?php echo $item->qtt; ?></div>
        </div>
      </div>
      </li>
      <?php $n++; endforeach; ?>
      </div>
      <div class="cart-cost">
        <div class="pull-left cart-cost-1"><span>Tổng tiền</span></div>
        <div class="pull-right cart-cost-2"><?php echo number_format($cost,0,' ',','); ?> VND</div>
      </div>
      <div class="cart-bottom"><?php echo Html::a('Đặt hàng',['/order/index'],['class'=>'btn btn-danger']); ?></div>
      <?php else: ?>
       <div class="cart-header"><span>Bạn hiện không có sản phấm</span></div>
      <?php endif; ?>
    </ul>
  </li>
  </ul>
</div>
