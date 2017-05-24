<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
      <?php
            $host='http://'.$_SERVER['HTTP_HOST'].'/';
            $Url= str_replace('/backend', '', Yii::$app->urlManager->baseUrl);
    ?>
</head>
<body>
<?php $this->beginBody() ?>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 title">QUẢN LÝ PETSHOP</div>
            <div class="col-md-4 logout">
            <span class="glyphicon glyphicon-home"></span>
            <?php
              echo Html::a('Trang chủ',['/site/index'],['data-method'=>'post'],['class'=>'btn btn-danger']);
             if (!Yii::$app->user->isGuest) {
                    ?>
                    <span class="glyphicon glyphicon-log-out"></span>
                    <?php
                    echo Html::a('Thoát',['/site/logout'],['data-method'=>'post']);
                    echo '('.Yii::$app->user->identity->username.')';
                        
              }else{
                    echo Html::a('Đăng nhập',['/site/login'],['data-method'=>'post']);
              }
            ?>
            </div>
        </div>
    </div>
</header>
<section id="content">
    <div class="row">
        <div class="col-md-2">
            <div id="sidebar">
                <div class="conten_title">Tổng quan</div>
                <nav id="menu-ql">
                    <ul>
                        <li><a href="<?php  echo Yii::$app->homeUrl."customer"?>">Quản lý người dùng</a></li>
                        <li><a href="<?php  echo Yii::$app->homeUrl."file"?>">Quản lý ảnh</a></li>
                        <li><a href="<?php  echo Yii::$app->homeUrl."category"?>">Danh mục sản phẩm</a></li>
                        <li><a href="<?php  echo Yii::$app->homeUrl."size"?>">Quản lý kích thước</a></li>
                        <li><a href="<?php  echo Yii::$app->homeUrl."made"?>">Quản lý chất liệu</a></li>
                        <li><a href="<?php  echo Yii::$app->homeUrl."supplier"?>">Quản lý xuất sứ</a></li>
                        <li><a href="<?php  echo Yii::$app->homeUrl."product"?>">Quản lý sản phẩm</a></li>
                        <li><a href="<?php  echo Yii::$app->homeUrl."payment"?>">Thanh toán</a></li>
                        <li><a href="<?php  echo Yii::$app->homeUrl."deliver"?>">Vận chuyển</a></li>
                        <li><a href="<?php  echo Yii::$app->homeUrl."order"?>">Hóa đơn</a></li>
                          <li><a href="<?php  echo Yii::$app->homeUrl."order-detail"?>">Chi tiết hóa đơn</a></li>
                  
                    </ul>
                </nav>
                <div class="conten_title">Thống kê</div>
                <nav id="menu-ql">
                    <ul>
                        <li><a href="<?php  echo Yii::$app->homeUrl."report"?>">Báo cáo hàng tồn trong tháng</a></li>
                        <li><a href="<?php  echo Yii::$app->homeUrl."report/banchay"?>">Báo cáo hàng bán chạy</a></li>
                        <li><a href="<?php  echo Yii::$app->homeUrl."report/turnover"?>">Thống kê doanh thu theo tháng</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-md-10">
            <div id="noidung">
                <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>   
                <?= $content ?>
            </div>
        </div>
    </div>
</section>
<footer id="footer">
    <div class="container">
        <address>
            CopyRight @ 2016 by <a href="">Đặng Mạnh Bôn</a>
        </address>
    </div>
</footer>
 <div class="modal fade" id="modal-media-image">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                     <iframe  width="100%" height="550" frameborder="0" src="<?php echo $Url?>/filemanager/dialog.php?field_id=image">
                    </iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
   <div class="modal fade" id="modal-media-image2">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                     <iframe  width="100%" height="550" frameborder="0" src="<?php echo $Url?>/filemanager/dialog.php?field_id=image2">
                    </iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
     <div class="modal fade" id="modal-media-image3">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                     <iframe  width="100%" height="550" frameborder="0" src="<?php echo $Url?>/filemanager/dialog.php?field_id=image3">
                    </iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
