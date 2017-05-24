<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div id="signup">
        <span>Đăng kí tài khoản</span>
        <div class="sig-bot"></div>
        <div class="sig-title">Cảm ơn quý khách đã vào mua sắm tại Petcity. Vui lòng đăng ký tài khoản mua hàng để quản lý đơn hàng và đặt mua một cách dễ dàng, chuyên nghiệp nhất.</div>
         <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <div class="row">
                  <div class="col-md-5 sig-content">
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'Username','id'=>'sig-width']) ?>
                        
                        <?= $form->field($model, 'password')->passwordInput(['id'=>'sig-width1','placeholder'=>'Password']) ?>
                        <?= $form->field($model, 'email')->textInput(['id'=>'sig-width2','placeholder'=>'Email']) ?>
                        <?= $form->field($model, 'full_name')->textInput(['autofocus' => true,'placeholder'=>'Họ và tên']) ?>
                        <?= $form->field($model, 'gender', ['radioTemplate' => '<label class="gender-head">{label}</label><label class="signup-radio">{input}</label>'])->inline()->radioList([1 => 'Nam', 0 => 'Nữ'], ['separator' => '', 'tabindex' => 3]); ?>

                        <?= $form->field($model, 'birth')->textInput(['placeholder'=>'Ngày sinh','id'=>'sig-width3']) ?>
                      
                        
                        <?= $form->field($model, 'phone')->textInput(['autofocus' => true,'placeholder'=>'Điện thoại','id'=>'sig-width4']) ?>
                        <?= $form->field($model, 'address')->textInput(['autofocus' => true,'placeholder'=>'Địa chỉ','id'=>'sig-width5']) ?>
                     <div class="form-group">
                        <?= Html::submitButton('Đăng kí', ['class' => 'btn btn-danger pull-right', 'name' => 'signup-button']) ?>
                    </div>

                    </div>
                </div>
                </div>

               
                <?php ActiveForm::end(); ?>
</div>
