<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="csrf-token" content="<?php echo $this->session->token(); ?>">
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>mall</title>
		<link rel="shortcut icon" href="<?php echo $this->getThemesUrl(); ?>/images/favicons/favicon.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->getThemesUrl(); ?>/images/favicons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->getThemesUrl(); ?>/images/favicons/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->getThemesUrl(); ?>/images/favicons/apple-touch-icon-144x144.png" />
		<link rel="stylesheet" href="<?php echo $this->getThemesUrl(); ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo $this->getThemesUrl(); ?>/css/style.css" />
		<script src="<?php echo $this->getThemesUrl(); ?>/js/jquery-1.10.2.min.js"></script>
		<script src="<?php echo $this->getThemesUrl(); ?>/js/app.js"></script>
		<!--[if lt IE 9]>
			<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/html5shiv.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="preloader"></div>
		<!--header-->
		<?php @include_once $this->getThemesPath().'/view/common/header.php'; ?>
		<!--end header-->
		<!-- .header-section -->
		<!-- <section class="header-section height-small middle-wrapper has-bg-layer layer-black bg-img-shop">
			<div class="middle-content">
				<div class="container">
					<h1 class="title">404</h1>

					<ul class="breadcrumb">
						<li><a href="index.html">暂无该商品</a></li>
					</ul>
				</div>
			</div>
		</section> -->
		<!-- /.header-section -->
		
		<!-- .menu-section.fullscreen-menu -->
		<?php @include_once $this->getThemesPath().'/view/common/menu.php'; ?>
		<!-- /.menu-section.fullscreen-menu -->
		
		<!-- .section.bg-secondary -->
		<section class="section">
            <div class="container">
				<form id="order-form">
					<div class="row form-content">
						<article class="col-md-9 col-sm-9">
							<div class="section-header">
								<h3 class="maintitle has-divider">收获地址</h3>
							</div>

							<div class="row" style="margin-left: 20px;">
								<div class="radio">
                                    <label class="has-success">
                                        <input type="radio" name="addr" id="addr" data-validation="required" class="valid">
                                        <span class="button"></span>
                                        <span class="text">张三</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="has-success">
                                        <input type="radio" name="addr" id="addr" data-validation="required" class="valid">
                                        <span class="button"></span>
                                        <span class="text">李四</span>
                                    </label>
                                </div>
							</div>

							<div class="section-header">
								<h3 class="maintitle has-divider">支付方式</h3>
							</div>

							<div class="row" style="margin-left: 20px;">
								<ul class="list-inline button-tab small">
                                    <li class="has-corner-line active">
                                        <div class="radio">
											<label class="has-success">
												<input type="radio" name="payment" id="payment_2" data-validation="required" class="valid">
												<span class="button"></span>
												<span class="text">支付宝</span>
											</label>
										</div>
                                    </li>
                                    <li class="has-corner-line">
                                        <div class="radio">
											<label class="has-success">
												<input type="radio" name="payment" id="payment_2" data-validation="required" class="valid">
												<span class="button"></span>
												<span class="text">微信</span>
											</label>
										</div>
                                    </li>
                                </ul>
							</div>

							<div class="section-header">
								<h3 class="maintitle has-divider">商品列表</h3>
							</div>

							<div class="row checkout-panel" style="margin-left: 20px;">
                                <ul class="list-unstyled text-uppercase">
                                    <li class="has-figure">
                                        <figure>
                                            <a href="javascript:void(0);"><img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-4-1.jpg" alt=""></a>
                                        </figure>
                                        <strong class="small">Women denim dress</strong>
                                        <div class="clearfix">
                                            <span class="pull-left small">Color: white</span>
                                            <span class="pull-right">$120.00</span>
                                        </div>
                                    </li>
                                    <li class="has-figure">
                                        <figure>
                                            <a href="javascript:void(0);"><img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-4-1.jpg" alt=""></a>
                                        </figure>
                                        <strong class="small">Women denim dress</strong>
                                        <div class="clearfix">
                                            <span class="pull-left small">Color: white</span>
                                            <span class="pull-right">$120.00</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <br>

							<div class="section-header">
								<h3 class="maintitle has-divider">发票信息</h3>
							</div>

							<div class="row" style="margin-left: 20px;">
								
							</div>

							<div class="section-header">
								<h3 class="maintitle has-divider">使用优惠</h3>
							</div>

							<div class="row" style="margin-left: 20px;">
								
							</div>
						</article>
					
                        <article class="col-md-3 col-sm-3">
                            <div class="section-header">
                                <h3 class="maintitle has-divider">留言</h3>
                            </div>

                            <div class="row" style="margin-left: 20px;">
                                <div class="form-group has-error">
								    <textarea class="form-control error" cols="15" rows="1"></textarea>
                                </div>
                            </div>

                            <div class="section-header">
                                <h3 class="maintitle has-divider">确认信息</h3>
                            </div>
                            <div class="row" style="margin-left: 20px;">
                                <div class="cart-total">
                                    <ul class="list-unstyled cart-list">
                                        <li class="clearfix"><span class="pull-left">商品总价:</span> <strong class="pull-right">$0</strong></li>
                                        <li class="clearfix"><span class="pull-left">促销折扣:</span> <strong class="pull-right">50%</strong></li>
                                        <li class="clearfix"><span class="pull-left">运费:</span> <strong class="pull-right">免运费</strong></li>
                                    </ul>
                                    <div class="form-group half">
                                        <div class="btn btn-block total-order clearfix">
                                            <span class="pull-left"><span class="weight-normal"></span>总计</span>
                                            <span class="pull-right">$0</span>
                                        </div>
                                    </div>
                                    <div class="bottom-space-2">
                                        <button class="btn btn-block btn-simple-to-border btn-primary checkout">
                                            <span class="weight-normal"></span> 去结算
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
				</form>
			</div>
		</section>
		<!-- /.section.bg-secondary -->
		
		<!-- .footer -->
		<?php @include_once $this->getThemesPath().'/view/common/footer.php'; ?>
		<!-- /.footer -->
		
		<!-- JS library -->
		<!-- HTML/CSS/JS framework -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/bootstrap.min.js"></script>
        <!-- Viewport checker -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.viewportchecker.min.js"></script>
        <!-- Custom select -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.selectric.min.js"></script>
		<!-- Custom JS -->
        <script src="<?php echo $this->getThemesUrl(); ?>/js/script.js"></script>
	</body>
</html>