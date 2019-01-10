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
		<section class="header-section height-small middle-wrapper has-bg-layer layer-black bg-img-shop">
			<div class="middle-content">
				<div class="container">
					<h1 class="title">Our shop</h1>

					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li>Cart</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- /.header-section -->
		
		<!-- .menu-section.fullscreen-menu -->
		<?php @include_once $this->getThemesPath().'/view/common/menu.php'; ?>
		<!-- /.menu-section.fullscreen-menu -->
		
		<!-- .section -->
		<section class="section">
			<div class="container">
				<div class="row">
					<article class="col-md-9 col-sm-8">
					
						<div class="hidden-xs hidden-sm row collapsed">
							<div class="col-sm-6">
								<div class="block-title"><strong>产品</strong></div>
							</div>
							
							<div class="col-sm-6">
								<div class="row collapsed">
									<div class="col-sm-4">
										<div class="block-title"><strong>添加时价格</strong></div>
									</div>
									<div class="col-sm-4">
										<div class="block-title"><strong>数量</strong></div>
									</div>
									<div class="col-sm-4 text-right">
										<div class="block-title"><strong>小计</strong></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- .cart-section -->
						<div class="cart-section bottom-space-2" id="app">

							<!-- .cart-row -->
							<div class="row collapsed cart-row" v-for="(value,index) in res" :key="index">
								<div class="col-md-6">
									
									<div class="row small-gap cart-item">
										<div class="col-sm-3 col-xs-2">
											<div class="figure">
												<a class="hidden-xs" href="#">
													<img src="images/pictures/items/item-4-2.jpg" alt="" />
												</a>
												<button type="button" class="close" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										</div>
										<div class="col-sm-9 col-xs-10">
											<div class="content">
												<h5 style="margin-top:20px;" class="title"><a href="">asfd<strong></strong></a></h5>
												
												<div class="text" style="margin-top:5px;">
													dasafaf
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="col-md-6">
									<div class="row collapsed top-space">
										<div class="col-xs-4"><span class="visible-sm visible-xs">Price:</span> 
											<strong class="cell-text" style="color:#ff7f00;font-size:22px;">
												$175
											</strong>
										</div>
										<div class="col-xs-4">
											<div class="input-group count-input">
												<div class="input-group-btn">
													<button class="btn" data-value="minus">-</button>
												</div>
												<input type="text" class="form-control" value="1" readonly />
												<div class="input-group-btn">
													<button class="btn" data-value="plus">+</button>
												</div>
											</div>
										</div>
										<div class="col-xs-4 text-right"><span class="visible-sm visible-xs">Total:</span> <strong class="cell-text">$175.00</strong></div>
									</div>
								</div>
							</div>
							<!-- /.cart-row -->
							
							
						</div>
						<!-- /.cart-section -->
						
					</article>
					
					<div class="col-md-3 col-sm-4">
						<h4 class="block-title">Cart <strong>total</strong></h4>
						
						<!-- .cart-total -->
						<div class="cart-total">
							<ul class="list-unstyled cart-list">
								<li class="clearfix">
									<span class="pull-left">Sub Total:</span>
									<strong class="pull-right">$130.00</strong>
								</li>
								<li class="clearfix">
									<span class="pull-left">Shipping charge:</span>
									<strong class="pull-right">Free Shipping</strong>
								</li>
								<li class="clearfix">
									<span class="pull-left">Promo Discount:</span>
									<strong class="pull-right">50%</strong>
								</li>
							</ul>
							
							<div class="form-group half">
								<div class="btn btn-block total-order clearfix">
									<span class="pull-left"><span class="weight-normal">Order</span> Total</span>
									<span class="pull-right">$115.00</span>
								</div>
							</div>

							<div class="bottom-space-2">
								<a href="checkout.html" class="btn btn-block btn-simple-to-border btn-primary checkout"><span class="weight-normal">Proced to</span> checkout</a>
							</div>

							<h4 class="block-title no-border">Coupon <strong>code</strong></h4>

							<form id="coupon-code">
								<div class="form-group has-feedback validate-feedback">
									<input type="text" class="form-control" placeholder="ENTER CODE" data-validation="length" data-validation-length="5"  data-validation-error-msg="Enter a valid coupon code." />
									<span class="form-control-feedback feedback-success" aria-hidden="true"><i class="fa fa-check"></i></span>
									<span class="form-control-feedback feedback-error" aria-hidden="true"></span>
								</div>
								
								<div class="bottom-space-2">
									<button type="submit" class="btn btn-simple-to-border btn-secondary">Apply <strong>code</strong></button>
								</div>
							</form>

							<h4 class="block-title no-border">Calculated <strong>shipping+</strong></h4>
						</div>
						<!-- /.cart-total -->
						
					</div>
				</div>
			</div>
		</section>
		<!-- /.section -->
		
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
        <script src="<?php echo $this->getThemesUrl(); ?>/js/vue.js"></script>
		<!-- Custom JS -->
        <script src="<?php echo $this->getThemesUrl(); ?>/js/script.js"></script>

		<script>
			var data = <?php echo $cart?>;
			var app = new Vue({
				el:'#app',
				data(){
					return {
						res:data,
					}
				}
			});
		</script>
	</body>
</html>