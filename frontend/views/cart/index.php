<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
$this->title='Shopping cart';
/* @var $this yii\web\View */
?>
<div class="container">
	<div class="cart-link">
		<?php echo Html::a('Tiếp tục mua sản phẩm',['/site'],['class'=>'btn btn-defaul cart-button']); ?>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-7 ">
		<span class="cart-tt">Giỏ hàng của tôi</span>
			<?php if($cartstore): $n=1;?>
		<table class="table table-hover tb_cart">
		<thead>
			<tr>
				<th>Ảnh</th>
				<th>Tên sản phẩm</th>
				<th>Số lượng</th>
				<th>Giá</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($cartstore as $item) :?>
			<?php $form = ActiveForm::begin(
				[
					'action'=>Url::to(['/cart/update-cart']),
					'options'=>[
							'class'=>'form-inline pull-left'
							]
				]
			); ?>
			<tr>
				<td class="tb-cart-img"><img src="<?php echo $item->pro_image?>"></td>
				<td><?php echo $item->pro_name; ?></td>
				<td><input type="number" name="qtt" min="1" max="5" value="<?php echo  $item->qtt;?>" size="4" class="form-control" style="width: 70px"></td>	
				<td>
				<?php
				if(strtotime(date('Y/m/d'))>=strtotime($item->begin_date_sale_off)&&strtotime(date('Y/m/d'))<=strtotime($item->end_date_sale_off)){
					echo number_format($item->pro_price*(1-($item->pro_sale_off)/100),0,' ',',') ; 
				}else{
					echo number_format($item->pro_price,0,' ',',') ;
				}  ?> VNĐ</td>
				<td>
			
			
					<input type="hidden" name="pro_id" value="<?php echo  $item->pro_id;?>">	
					<input type="submit" name="update" id="cart_update" value="sửa" class="btn btn-sm btn-info">
					<?php echo Html::a('Xóa',['/cart/remove','slug'=>$item->pro_id],['class'=>'btn btn-sm btn-warning']); ?>
			

				</td>
			</tr>
						<?php ActiveForm::end(); ?>
				<?php $n++; endforeach; ?>
				<!-- <td><?php echo $total; ?></td></tr> -->
				</tbody>
			</table>
		<?php else: ?>
			<div class="alert alert-warning">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Thông báo!</strong> Giỏ hàng của bạn đang rỗng ... <?php echo Html::a('Tiếp tục mua hàng',['/site'],['class'=>'btn btn-success']); ?>
			</div>
		<?php endif; ?>
		</div>
		<div class="col-md-5">
			<span class="cart-tt2">Thông tin đơn hàng</span>
			<table class="table table-hover tb_cart2">
			<tr>
			<td align="center" class="success">Tạm tính</td>
                <td><?php echo number_format($cost,0,' ',','); ?> VNĐ</td>
			</tr>
			<tr>
			<td align="center" class="danger">Tổng tiền</td>
			    <td><?php echo number_format($cost,0,' ',','); ?> VNĐ</td>
			</tr>
			</table>
			<div class="cart-action clearfix pull-right">
				<?php echo Html::a('Xóa giỏ hàng',['/cart/clear'],['class'=>'btn btn-danger']); ?>
				<?php echo Html::a('Tiến hành thanh toán',['/order/index'],['class'=>'btn btn-warning']); ?>
			</div>
		</div>
	</div>
</div>
	