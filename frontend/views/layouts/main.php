<?php

/* @var $this \yii\web\View */
/* @var $content string */
date_default_timezone_set('Asia/Ho_Chi_Minh');
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\topNavWidget;
use frontend\widgets\loginWidget;
use frontend\widgets\cartWidget;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php
        $host='http://'.$_SERVER['HTTP_HOST'].'/';
        $homeUrl= str_replace('/frontend/web', '', Yii::$app->urlManager->baseUrl);
    ?>
    <script type="text/javascript" charset="utf-8" async defer>
        function root(){
            return '<?php echo $homeUrl  ?>'
        }
    </script>
</head>
<body>
<?php $this->beginBody()?>
<div class="top">
    <div class="container">
    <div class="row">
        <div class="col-md-4">
               <?= loginWidget::widget(); ?>
        </div>
        <div class="col-md-8">
            <div class="top_left">
            <span class="r top_free_ship"></span>
                <?= cartWidget::widget(); ?>
            </div>
        </div>
    </div>
    
    </div>
</div>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo Yii::$app->urlManager->baseUrl; ?>/site/index"><img src="<?php echo $homeUrl?>/uploads/logo_logo.png"></a>
            </div>
            <div class="col-md-9" >
                <div class="row demo">
                    <div class="col-md-6" id="search">
                       <form action="<?php echo Yii::$app->urlManager->baseUrl;?>/search/name" method="get">
                        <div class="input-group">
                          <input type="text" name="searchproduct" class="form-control">
                          <span class="input-group-btn">
                          <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                          </span>
                        </div>  
                        </form>
                </div>
                    </div>
                    <div class="col-md-12">
                         <?= topNavWidget::widget(['message' => Yii::$app->urlManager->baseUrl]); ?>
                    </div>
                </div>
                <div class="top_menu">
                    <ul>
                        <li class="mt"><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Trợ giúp</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div>
</header>
<div class="content_top">
    <div class="container">
        <div class="row">
            <div class="col-md-6"  id="sale_policy">
                <ul>
                    <li>
                        <a href="#" title="Petcity áp dụng hình thức COD thanh toán khi nhận hàng"><i class="bg icon_policy1"></i> <span>THANH TOÁN</span><br>khi nhận hàng</a>
                    </li>
                    <li>
                        <a href="#" title="Petcity giao hàng miễn phí nhanh nhất"><i class="bg icon_policy2"></i> <span>MIỄN PHÍ</span><br>giao hàng</a>
                    </li>
                    <li>
                        <a href="#" title="Quý khách có thể đổi trả hàng trong 30 NGÀY"><i class="bg icon_policy3"></i> 30 NGÀY<br><span>đổi trả</span></a>
                    </li>
                    <li>
                        <a href="#" title="Nhiều ưu đãi dành cho khách hàng VIP tại Petcity"><i class="bg icon_policy4"></i>KHÁCH HÀNG<br><span>VIP</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6"  id="sale_new">
                <a href="#" class="bg" id="deal_week"></a>
                <a href="#"><img src="<?php echo $homeUrl?>/uploads/petcity_pick2.png"></a>
            </div>
        </div>

    </div>
</div>
<section id="content">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
         <?= $content ?>
    </div>
</section>
<footer id="footer">
    <div class="container">
        <div class="row seven">
            <div class="col-md-3 address">
                <div class="title_footer"><span>Địa Chỉ Liên Hệ</span></div>
                <div class="title_footer_bot"></div>
                <div class="content-footer">
                    <i class="fa fa-phone" aria-hidden="true"></i><span>Mr.Bon - 0969388193</span>
                    <p>8.00 đến 20.00 từ thứ 2 đến thứ 7</p>
                </div>
                <div class="content-footer-bot">
                    <i class="fa fa-home" aria-hidden="true"></i><span>15, ngõ 238/29 Hoàng Quốc Việt,HN</span>
                    <p>Click để xem bản đồ</p>
                </div>
            </div>
            <div class="col-md-3 aboutus">
                <div class="title_footer"><p>Chính Sách</p></div>
                <div class="title_footer_bot"></div>
                <ul class="footer-nav">
                    <li>
                        <a href="#">Vận Chuyển</a>
                    </li>
                    <li>
                        <a href="#">Trả Hàng</a>
                    </li>
                    <li>
                        <a href="#">Đổi Hàng</a>
                    </li>
                    <li>
                        <a href="#">Khuyến Mại</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3  product-bottom">

                <div class="title_footer"><p>Dich vụ</p></div>
                <div class="title_footer_bot"></div>
                <ul class="footer-nav">
                   <li>
                        <a href="#">Mua hàng online</a>
                    </li>
                    <li>
                        <a href="#">Tặng quà</a>
                    </li>
                    <li>
                        <a href="#">Chăm sóc pet</a>
                    </li>
                    <li>
                        <a href="#">Tư vấn</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 contact">

                <div class="title_footer"><p> Nhận Khuyến Mại</p></div>
                <div class="title_footer_bot"></div>
                <div class="content-contact">
                    <form class="form-horizontal">
                        <input type="text" class="form-control" placeholder="Tài Khoản gmail.."/>
                        <button type="submit" class="btn btn-danger">Đăng Ký</button>
                    </form>
                    <span>mạng xã hội</span>
                    <div id="sosical">
                        <a href="http://www.facebook.com" title="Facebook">
                            <img src="<?php echo $homeUrl?>/uploads/sosical1.png" alt="Facebook"/>
                        </a>
                        <a href="http://www.gmail.com" title="Email">
                            <img src="<?php echo $homeUrl?>/uploads/sosical2.png" alt="Email"/>
                        </a>
                        <a href="#" title="Google +">
                            <img src="<?php echo $homeUrl?>/uploads/sosical3.png" alt="Google +"/>
                        </a>
                        <a href="#" title="Youtube">
                            <img src="<?php echo $homeUrl?>/uploads/sosical4.png" alt="Youtube"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 footer">
                <div class="textwidget"><a
                            href="http://www.dmca.com/Protection/Status.aspx?ID=f4b94973-7201-4c6a-b007-39ac902698f3&amp;refurl=http://hoabanfood.com/"
                            title="DMCA.com Protection Status" class="dmca-badge"> <img
                                src="//images.dmca.com/Badges/dmca-badge-w200-5x1-07.png?ID=f4b94973-7201-4c6a-b007-39ac902698f3"
                                alt="DMCA.com Protection Status"></a>
                    © 2017 PETSPACE
                </div>
            </div>
        </div>
</footer>
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
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
