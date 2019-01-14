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
				<div class="row" id="app">
					<article class="col-md-9 col-sm-8">
					
						<div class="hidden-xs hidden-sm row collapsed">
							<div class="col-sm-1">
								<div class="block-title">
										<div class="checkbox" style="margin-top:0px;margin-bottom:0px">
											<label>
												<input type="checkbox" id="choose_all"  @click="checkAll($event)">
												<span class="button"></span>
											</label>
										</div>
								</div>
							</div>

							<div class="col-sm-5">
								<div class="block-title"><strong>产品</strong></div>
							</div>
							
							<div class="col-sm-6">
								<div class="row collapsed">
									<div class="col-sm-3">
										<div class="block-title"><strong>添加时价格</strong></div>
									</div>
									<div class="col-sm-3">
										<div class="block-title"><strong>数量</strong></div>
									</div>
									<div class="col-sm-3 text-right">
										<div class="block-title"><strong>小计</strong></div>
									</div>
									<div class="col-sm-3 text-right">
										<div class="block-title"><strong>操作</strong></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- .cart-section -->
						<div class="cart-section bottom-space-2">

							<!-- .cart-row -->
							<div class="row collapsed cart-row" v-for="(value,index) in res" :key="index">
								<div class="col-md-1">
									<div class="checkbox">
										<label>
											<input type="checkbox" :value="index" v-model="checkData" class="goods_li">
											<span class="button"></span>
										</label>
									</div>
								</div>

								<div class="col-md-5">
									
									<div class="row small-gap cart-item">
										<div class="col-sm-3 col-xs-2">
											<div class="figure">
												<a class="hidden-xs" href="#">
													<img :src="upload_file+'/'+value.store_id+'/'+value.goods_sku.goods_img" alt="" />
												</a>
											</div>
										</div>
										<div class="col-sm-9 col-xs-10">
											<div class="content">
												<h5 style="margin-top:20px;" class="title"><a href="">{{value.goods.goods_name}}<strong></strong></a></h5>
												
												<div class="text" style="margin-top:5px;">
													<span v-for="(item ,i) in value.attrs_value" :key="i">{{item}}&nbsp;</span>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="col-md-6">
									<div class="row collapsed top-space">
										<div class="col-xs-3"><span class="visible-sm visible-xs">Price:</span> 
											<strong v-if="value.add_price==value.goods_sku.price" class="cell-text" style="color:#ff7f00;font-size:22px;">
												${{value.goods_sku.price}}
											</strong>
											<strong v-if="value.add_price!=value.goods_sku.price" class="cell-text" style="color:#ff7f00;font-size:22px;">
												${{value.goods_sku.price}}<del style="font-size:15px;color:rgb(187, 171, 160);">${{value.add_price}}</del>
											</strong>
										</div>
										<div class="col-xs-3">
											<div class="input-group count-input">
												<div class="input-group-btn">
													<button class="btn" @click="cut(index)" data-value="minus">-</button>
												</div>
												<input type="text" class="form-control" @input="checkInput(index)" v-model="value.quantity" />
												<div class="input-group-btn">
													<button class="btn" @click="add(index)" data-value="plus">+</button>
												</div>
											</div>
										</div>
										<div class="col-xs-3 text-right"><span class="visible-sm visible-xs">Total:</span> <strong class="cell-text">${{small_total(index)}}</strong></div>
										<div class="col-xs-3 text-right">
											<button type="button" class="close" style="color:red;font-weight:900;opacity: 1;" aria-label="Close" @click="del_cert_goods(index)">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /.cart-row -->
							
							
						</div>
						<!-- /.cart-section -->
						
					</article>
					
					<div class="col-md-3 col-sm-4">
						<h4 class="block-title">购物车 <strong>总计</strong></h4>
						
						<!-- .cart-total -->
						<div class="cart-total">
							<ul class="list-unstyled cart-list">
								<li class="clearfix">
									<span class="pull-left">商品总价:</span>
									<strong class="pull-right">${{cart_total}}</strong>
								</li>
								<li class="clearfix">
									<span class="pull-left">促销折扣:</span>
									<strong class="pull-right">50%</strong>
								</li>
								<li class="clearfix">
									<span class="pull-left">运费:</span>
									<strong class="pull-right">免运费</strong>
								</li>
							</ul>
							
							<div class="form-group half">
								<div class="btn btn-block total-order clearfix">
									<span class="pull-left"><span class="weight-normal"></span>总计</span>
									<span class="pull-right">${{total_price}}</span>
								</div>
							</div>

							<div class="bottom-space-2">
								<a href="checkout.html" class="btn btn-block btn-simple-to-border btn-primary checkout"><span class="weight-normal"></span> 去结算</a>
							</div>

							<!-- <h4 class="block-title no-border"> 优惠 <strong>码</strong></h4>

							<form id="coupon-code">
								<div class="form-group has-feedback validate-feedback">
									<input type="text" class="form-control" placeholder="ENTER CODE" data-validation="length" data-validation-length="5"  data-validation-error-msg="Enter a valid coupon code." />
									<span class="form-control-feedback feedback-success" aria-hidden="true"><i class="fa fa-check"></i></span>
									<span class="form-control-feedback feedback-error" aria-hidden="true"></span>
								</div>
								
								<div class="bottom-space-2">
									<button type="submit" class="btn btn-simple-to-border btn-secondary">应用 <strong>优惠码</strong></button>
								</div>
							</form> -->

							<!-- <h4 class="block-title no-border">Calculated <strong>shipping+</strong></h4> -->
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
						upload_file : '<?php echo SellerConfig::UPLOAD_GOODS?>',
						checkData:[],
					}
				},
				methods:{
					add(i){
						if(parseInt(this.res[i].quantity)<parseInt(this.res[i].goods_sku.stock)){
							this.res[i].quantity++;
						}
					},
					cut(i){
						if(this.res[i].quantity>1){
							this.res[i].quantity--;
						}
					},
					checkInput(i){
						if(this.res[i].quantity<0||parseInt(this.res[i].quantity)>parseInt(this.res[i].goods_sku.stock)){
							this.res[i].quantity = 1;
						}
					},
					// 点击全选事件函数
					checkAll(e){
						var checkObj = document.querySelectorAll('.goods_li'); 
						if(e.target.checked){ 
							for(var i=0;i<checkObj.length;i++){
								if(!checkObj[i].checked){ 
									this.checkData.push(checkObj[i].value);
								}
							}
						}else {
							this.checkData = [];
						}
					},
					//删除购物车中的一件商品
					del_cert_goods(i){
						this.checkData = [];
						this.res.splice(i,1);
					}
				},
				computed:{
					//小计
					small_total: function(){
						return function(i){
							return this.res[i].quantity*this.res[i].goods_sku.price;
						};
  					},
					//商品总价
					cart_total: function(){
						var total = 0;
						for(var y in this.checkData){
							total = total+this.res[this.checkData[y]].quantity*this.res[this.checkData[y]].goods_sku.price;
						}	
						return total;
					},
					//总计 商品总价*折扣+运费
					total_price: function(){
						return this.cart_total;
					}
				},
				watch: {
					checkData: {
						handler(){ 
							if(this.checkData.length == document.querySelectorAll('.goods_li').length){
								document.querySelector('#choose_all').checked = true;
							}else {
								document.querySelector('#choose_all').checked = false;
							}
						},
						deep: true 
					}
				},
			});
		</script>
	</body>
</html>