
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div id="signup">
        <span>Đăng nhập</span>
        <div class="sig-bot"></div>
        <div class="sig-title">Cảm ơn quý khách đã vào mua sắm tại Petcity. Vui lòng đăng nhập tài khoản mua hàng để quản lý đơn hàng và đặt mua một cách dễ dàng, chuyên nghiệp nhất.</div>
                <div class="row">
                  <div class="col-md-5 sig-content">
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'username','id'=>'sig-width']) ?>
                        
                        <?= $form->field($model, 'password')->passwordInput(['id'=>'sig-width1']) ?>

                        <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    <?= Html::a(' Quên mật khẩu', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Đăng nhập', ['class' => 'btn btn-primary pull-right', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
                    </div>

                    </div>
                </div>
                </div>

            
</div>
