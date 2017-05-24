<?php 
    $this->title="Thông tin đặt hàng";
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;
    $model->amount=$cost;
 ?>
 <div class="order-content">
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <span>Đăng kí tài khoản mua hàng</span>/<?php echo Html::a('Đăng nhập',['site/login']) ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Xác nhận đơn hàng</h3>
                </div>
                <div class="panel-body">
                      <?php if($cartstore): $n=1;?>
                <table class="table table-hover tb_cart">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cartstore as $item) :?>
                        <tr>
                            <td  class="success"><?php echo $item->pro_name; ?></td>
                            <td><?php echo $item->qtt; ?></td>
                            <td><?php echo number_format($item->pro_price,0,' ',',') ; ?></td>
                            <td><?php echo number_format($item->pro_price* $item->qtt*(1-($item->pro_sale_off)/100),0,' ',',');?></td>
                        </tr>
                    <?php $n++; endforeach; ?>
                    <tr><td colspan="3" align="right">Tổng tiền</td><td class="danger"><?php echo number_format($cost,0,' ',','); ?> VND</td>
                    <!-- <td><?php echo $total; ?></td></tr> -->
                    </tbody>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Thông tin đặt hàng</h3>
                </div>
                <div class="panel-body">
                   
                     <?= $form->field($model, 'name')->textInput(['autofocus' => true,'placeholder'=>'Họ và tên người mua','id'=>'name']) ?>
                    
                    <?= $form->field($model, 'email')->textInput(['placeholder'=>'Email','id'=>'email']) ?>
                     <?= $form->field($model, 'phone')->textInput(['autofocus' => true,'placeholder'=>'Điện thoại','id'=>'phone']) ?>
                    <?= $form->field($model, 'address')->textInput(['placeholder'=>'Địa chỉ','id'=>'address']) ?>
                    <input type="checkbox" name="" value="" placeholder=""> Thông tin đặt hàng giống với thông tin người nhận
                </div>
            </div> 
        </div>
        <div class="col-md-4">
          <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Thông tin người nhận</h3>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'name_ship')->textInput(['autofocus' => true,'placeholder'=>'Họ và tên người nhận','id'=>'name_ship']) ?>
                    
                    <?= $form->field($model, 'email_ship')->textInput(['placeholder'=>'Email','id'=>'email_ship']) ?>
                     <?= $form->field($model, 'phone_ship')->textInput(['autofocus' => true,'placeholder'=>'Điện thoại','id'=>'phone_ship']) ?>
                    <?= $form->field($model, 'address_ship')->textInput(['placeholder'=>'Địa chỉ','id'=>'address_ship']) ?>
                </div>
            </div> 
        </div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Phương thức thanh toán - vận chuyển</h3>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'payment')->radioList(
                        array('1' => 'Chuyển khoản qua ngân hàng',
                            '2'=>'Thanh toán bằng thẻ ATM nội địa',
                                '3' => 'Thanh toán trực tiếp','4' => 'Xuất hóa đơn tài chính',), array('class' => 'i-checks')) ?>
                    <?= $form->field($model, 'deliver')->radioList(
                        array('1' => 'Giao hàng tận nhà', '2' =>'Chuyển phát nhanh', '3'=>'Dịch vụ quà tặng'), array('class' => 'i-checks')) ?>

                </div>

            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Ghi chú</h3>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'request')->textarea(['placeholder'=>'Ghi chú']) ?>
                    <?= $form->field($model, 'amount')->hiddenInput() ?>
                </div>
            </div>
             <?= $form->field($model, 'amount')->hiddenInput() ?>
                     <div class="form-group">
                        <?= Html::submitButton('Thanh toán', ['class' => 'btn btn-warning pull-right demo1', 'name' => 'signup-button']) ?>
                    </div> 
                      <?php ActiveForm::end(); ?>    
           
         </div>
    </div>
  
    
   
   
   
</div>