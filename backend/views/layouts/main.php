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
<body class="hold-transition skin-blue sidebar-mini">
	<?php $this->beginBody() ?>
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="index2.html" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>P</b>ET</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>PETSHOP</b></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<?php

					if (!Yii::$app->user->isGuest) {
						?>
						<ul class="nav navbar-nav">
							<!-- Messages: style can be found in dropdown.less-->

							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<!--    <img src="" class="user-image" alt="User Image"> -->
									<span class="hidden-xs" style="font-size: 17px;text-transform: uppercase;"><?php 
										echo Yii::$app->user->identity->username;
										?></span>
									</a>
									<ul class="dropdown-menu">
										<!-- User image -->
										<li class="user-header">

											<p><?php 
												echo Yii::$app->user->identity->username;
												?><small></small>
											</p>
										</li>
										<!-- Menu Body -->
                      <!--       <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <!-- </li> -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                	<div class="pull-left">
                                		<a href="#" class="btn btn-default btn-flat">Profile</a>
                                	</div>
                                	<div class="pull-right">
                                		<?php  echo Html::a('Thoát',['/site/logout'],['data-method'=>'post','class'=>'btn btn-success btn-flat']); ?>
                                	</div>
                                </li>
                            </ul>
                        </li>


                        <!-- User Account: style can be found in dropdown.less -->

                        <!-- Control Sidebar Toggle Button -->

                    </ul>
                    <?php         
                }else{
                	echo Html::a('Đăng nhập',['/site/login'],['data-method'=>'post']);
                }
                ?>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">

    	<section class="sidebar">
    		<!-- Sidebar user panel -->
    		<!-- /.search form -->
    		<!-- sidebar menu: : style can be found in sidebar.less -->
    		<ul class="sidebar-menu">
    			<li class="header">MENU</li>
    			<li class="active treeview">
    				<a href="<?php echo Yii::$app->homeUrl; ?>">
                        <i class="fa fa-home" aria-hidden="true"></i> <span>Trang chủ</span>
    				</a>
    			</li>
    			<li class="treeview">
    				<a href="#">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
    					<span>Quản lý người dùng</span>
    					<span class="pull-right-container">
    						<i class="fa fa-angle-left pull-right"></i>
    					</span>
    				</a>
    				<ul class="treeview-menu">
    					<li><a href="<?php  echo Yii::$app->homeUrl."customer" ?>"><i class="fa fa-circle-o"></i>Danh sách người dùng</a></li>
    					<!-- <li><a href="#"><i class="fa fa-circle-o"></i>Thêm Danh Mục</a></li> -->
    				</ul>
    			</li>
                <li class="treeview">
    				<a href="#">
    					<i class="fa fa-files-o"></i>
    					<span>Quản lý tin tức</span>
    					<span class="pull-right-container">
    						<i class="fa fa-angle-left pull-right"></i>
    					</span>
    				</a>
    				<ul class="treeview-menu">
    					<li><a href="<?php  echo Yii::$app->homeUrl."news" ?>"><i class="fa fa-circle-o"></i>Quản lý tin tức</a></li>
    					<!-- <li><a href="#"><i class="fa fa-circle-o"></i>Thêm Danh Mục</a></li> -->
    				</ul>
    			</li>
    			<li class="treeview">
    				<a href="#">
                        <i class="fa fa-edit"></i>
    					<span>Quản lý sản phẩm</span>
    					<span class="pull-right-container">
    						<i class="fa fa-angle-left pull-right"></i>
    					</span>
    				</a>
    				<ul class="treeview-menu">
    					<li><a href="<?php  echo Yii::$app->homeUrl."category"?>"><i class="fa fa-circle-o"></i> Danh mục sản phẩm</a> </li>
    					<li><a href="<?php  echo Yii::$app->homeUrl."size"?>"><i class="fa fa-circle-o"></i> Kích thước</a></li>
    					<li><a href="<?php  echo Yii::$app->homeUrl."made"?>"><i class="fa fa-circle-o"></i> Chất liệu</a></li>
    					<li><a href="<?php  echo Yii::$app->homeUrl."supplier"?>"><i class="fa fa-circle-o"></i>Xuất sứ</a></li>
						<li><a href="<?php  echo Yii::$app->homeUrl."product"?>"><i class="fa fa-circle-o"></i>Thông tin sản phẩm</a></li>
    				</li>
                     <!--    <li><a href="#"><i class="fa fa-circle-o"></i> Media
                                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Thêm </a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Hiển Thị Bài Viết</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </li>
                <li class="treeview">
                	<a href="#">
                	<i class="fa fa-money" aria-hidden="true"></i> <span>Đơn hàng</span>
                		<span class="pull-right-container">
                			<i class="fa fa-angle-left pull-right"></i>
                		</span>
                	</a>
                	<ul class="treeview-menu">
                		<li><a href="<?php  echo Yii::$app->homeUrl."payment"?>"><i class="fa fa-circle-o"></i>Thanh toán</a></li>
                		<li><a href="<?php  echo Yii::$app->homeUrl."deliver"?>"><i class="fa fa-circle-o"></i>Vận chuyển</a></li>
                		<li><a href="<?php  echo Yii::$app->homeUrl."order"?>"><i class="fa fa-circle-o"></i> Hóa đơn</a></li>
<!--                		<li><a href="--><?php // echo Yii::$app->homeUrl."order-detail"?><!--"><i class="fa fa-circle-o"></i> Chi tiết hóa đơn</a></li>-->
                	</ul>
                </li>
                    <li class="treeview">
                	<a href="#">
                        <i class="fa fa-laptop"></i> <span>Báo cáo-Thống kê</span>
                		<span class="pull-right-container">
                			<i class="fa fa-angle-left pull-right"></i>
                		</span>
                	</a>
                	<ul class="treeview-menu">
                		<li><a href="<?php  echo Yii::$app->homeUrl."report"?>"><i class="fa fa-circle-o"></i>Hàng tồn trong tháng</a></li>
                		<li><a href="<?php  echo Yii::$app->homeUrl."report/banchay"?>"><i class="fa fa-circle-o"></i>Hàng bán chạy</a></li>
                		<li><a href="<?php  echo Yii::$app->homeUrl."report/turnover"?>"><i class="fa fa-circle-o"></i>Doanh thu theo tháng</a></li>
                	</ul>
                </li>

            </ul>
        </section>
        <!-- /.end menu left -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    	<!-- Main content -->
    	<section class="content">
    		<?= Breadcrumbs::widget([
    			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    			]) ?>
    			<?= Alert::widget() ?>   
    			<?= $content ?>
    		</section>
    		<!-- /.content -->
    	</div>
    	<!-- /.content-wrapper -->
    	<footer class="main-footer">
    		<div class="pull-right hidden-xs">

    		</div>
    		<strong>Copyright &copy; 2017 .</strong> All rights
    		reserved.
    	</footer>
    	<!-- Control Sidebar -->

    	<!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
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
    <div class="modal fade" id="modal-media-image-new">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <iframe  width="100%" height="550" frameborder="0" src="<?php echo $Url?>/filemanager/dialog.php?field_id=image-new">
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
