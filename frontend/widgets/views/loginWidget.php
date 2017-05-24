  
  <?php 
 	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
  ?>
  <img src="<?php echo Yii::$app->urlManager->baseUrl?>/uploads/blue-user-icon.png" class="my_list1 pull-left">
  <div id="my_list"> 
                 
                    <?php if(!Yii::$app->user->isGuest):?>
                        <div class="btn-group">
                      		<span class="username"><?php echo Yii::$app->user->identity->username ?></span>
                            <span class="caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                          <ul class="dropdown-menu">
                            <li><a href="#">Thông tin cá nhân</a></li>
                            <li><a href="#">Đơn hàng</a></li>
                            <li role="separator" class="divider"></li>
                            <li><?php echo Html::a('Thoát',['/site/logout'],['data-method'=>'post']) ?></li>
                          </ul>
                         </div>
                    <?php else: ?>
                        <div class="login">
                            <a data-toggle="modal" href='#modal-id-login'>Đăng nhập</a> 
                        </div>
                    <?php endif; ?>
 </div>
<div class="modal fade" id="modal-id-login">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                   		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Đăng nhập</h4>
                    </div>
                    <div class="modal-body">
	                    		<form action="" method="POST" role="form">
	                    			<div class="form-group frm">
	                    				<input type="text" class="form-control" id="username" placeholder="Username">
	                    			</div>
	                    			<div class="form-group frm">
	                    				<input type="password" class="form-control" id="password" placeholder="Password">
	                    			</div>
	                    			<span id="login-title"></span>
	                    			<div class="form-group frm">
	                    				<input type="checkbox" name="" value="" placeholder="">Ghi nhớ
		                    			<a href="<?php echo Yii::$app->urlManager->baseUrl;?>/site/request-password-reset" type="submit" class="pull-right" id="reset">Quên mật khẩu!</a>
	                    			</div>
	                    			<div class="form-group frm-login">
		                    			<a href="<?php echo Yii::$app->urlManager->baseUrl;?>/login/login" type="submit" class="btn btn-danger" id="login">Đăng nhập</a>
	                    			</div>
	                    			<div class="form-group frm">
		                    			<a href="<?php echo Yii::$app->urlManager->baseUrl;?>/site/signup" type="submit">Chưa có tài khoản? Đăng kí ngay</a>
	                    			</div>
	                    		</form>
	                    	</div>
	                   
                </div>
            </div>
</div>
