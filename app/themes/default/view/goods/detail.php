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
		<style type="text/css">
			.sku {
				color: #000;
				height:32px;
				margin-left:5px;
				margin-right:5px;
				background:none;
				font-weight: bold;
				border-style: solid;
				border-width: 2px;
				border-color: #CCCCCC;
				cursor:pointer;
			}
			.bh-sku-selected {
				color: #ff7f00;
				border-color: #ff7f00;
				border-style: solid;
				cursor:pointer;
			}
		</style>
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
						<li>Shop</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- /.header-section -->
		
		<!-- .menu-section.fullscreen-menu -->
		<?php @include_once $this->getThemesPath().'/view/common/menu.php'; ?>
		<!-- /.menu-section.fullscreen-menu -->
		
		<!-- .section.bg-secondary -->
		<section class="section bg-secondary">
			<div class="container" id="goods">
			
				<!-- .product-section -->
				<div class="product-section" itemscope>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<figure class="product-carousel-image">
										<a id="big_images" href="<?php echo SellerConfig::UPLOAD_GOODS.$goods['store_id'];?>/<?php echo $goods['goods_img'];?>" data-lightbox="product">
											<img style="width:400px;height:400px;" itemprop="image" data-gallery-id="product-gallery" src="<?php echo SellerConfig::UPLOAD_GOODS.$goods['store_id'];?>/<?php echo $goods['goods_img'];?>" alt="" />
										</a>
									</figure>
									
									<div id="product-gallery" class="product-carousel-nav bottom-space">
										<a class="" id="goods_pic" href="#" data-image="<?php echo SellerConfig::UPLOAD_GOODS.$goods['store_id'];?>/<?php echo $goods['goods_img'];?>" data-zoom-image="<?php echo SellerConfig::UPLOAD_GOODS.$goods['store_id'];?>/<?php echo $goods['goods_img'];?>">
											<img style="width:70px;height:70px;" src="<?php echo SellerConfig::UPLOAD_GOODS.$goods['store_id'];?>/<?php echo $goods['goods_img'];?>" alt="" />
										</a>
										<?php $sku_img = json_decode($sku,true);?>
										<?php foreach($sku_img as $key=>$value):?>
											<a class="" href="#" data-image="<?php echo SellerConfig::UPLOAD_GOODS.$goods['store_id'];?>/<?php echo $value['goods_img'];?>" data-zoom-image="<?php echo SellerConfig::UPLOAD_GOODS.$goods['store_id'];?>/<?php echo $value['goods_img'];?>">
												<img style="width:70px;height:70px;" src="<?php echo SellerConfig::UPLOAD_GOODS.$goods['store_id'];?>/<?php echo $value['goods_img'];?>" alt="" />
											</a>
										<?php endforeach;?>
									</div>
								</div>
								
								<div class="col-lg-8 col-md-8 col-sm-8">
									<!-- <h3 class="category-title text-uppercase secondary-text">Elegant watches</h3> -->
									
									<!-- <h1 class="product-title" itemprop="name"> <strong><?php echo $goods['goods_name']; ?></strong></h1> -->
									
									<!-- .content -->
									<div class="content">
									
										<div class="row small-gap">
											<div class="col-sm-12">
												<!-- .product-panel -->
												<div class="panel" id="sku" style="height: 500px;padding:20px 20px 10px 30px;">
													<h2 class="product-title" itemprop="name"> <strong><?php echo $goods['goods_name']; ?></strong></h2>
													<meta itemprop="priceCurrency" content="USD" />
													<div class="price" style="height:100px;"><h2><strong><span class="currency">$</span><span itemprop="price" id="price">0</span></strong></h2></div>
												
													<!-- <p class="btn-list">
														<a href="#" class="btn btn-sm btn-icon-left btn-radius btn-tertiary-to-secondary"><i class="fa fa-heart-o"></i> 收藏</a>
													</p> -->
													<div id="add-to-cart" style="display:grid;">
														<div class="form-group" style="margin-bottom: 0px;display:inline-grid;" id="attr_div">

														</div>
														<div class="form-group" style="margin-bottom: 0px; display:-webkit-inline-box;">
															<label class="required" style="margin-top:4px">数量</label>
															<input type="text" id="num" class="form-control input-sm" style="width:12%;margin-left:25px;border-width:1px;border-color:#CCCCCC;" value="1" />
															<div class="input-group-btn">
																<button class="btn btn-sm btn-input" id="cut"><i class="fa fa-minus"></i></button>
																<button class="btn btn-sm btn-input" id="add"><i class="fa fa-plus"></i></button>
															</div>
															<div style="margin-top:5px;margin-left:20px;"><span>库存: <span id="stock">--</span></span></div>
														</div>
														<br />
														<br />
														<div class="form-group row" style="margin-bottom:30px;">
															<input type="hidden" id="sku_id" value="">
															<button data-remodal-target="add-to-cart" id="add_to_cart" class="btn btn-radius" style="margin-left:10%">添加购物车</button>
															<!-- btn btn-block btn-angular btn-sm btn-border-to-simple btn-light-gray -->
															<button id="buy_btn" class="btn btn-radius btn-simple-to-border btn-primary" style="margin-left:10%">立刻购买</button>
															<div id="err" style="margin: 20px 20px 50px 75px;color:red;"></div>
														</div>
													</div>
												</div>
												<!-- /.product-panel -->
											</div>
										</div>
									</div>
									<!-- /.content -->
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
				<!-- /.product-section -->
				
				<div class="row" data-animate style="visibility:visible">
					
					<div class="col-md-3 col-sm-4">
						<article class="sb-block">
							<h3 class="sb-title"><strong>XXX</strong>的店铺</h3>
							<div class="sb-content">
								店铺介绍/信用等等
							</div>
						</article>
						<!-- .sb-block -->
						<article class="sb-block">
							<h3 class="sb-title">关于 <strong>商品</strong></h3>
							<div class="sb-content">
								<ul class="nav-list text-uppercase" role="tablist">
									<li role="presentation" class="active"><a href="#product-desc" aria-controls="product-desc" role="tab" data-toggle="tab">商品描述</a></li>
									<li role="presentation"><a href="#product-info" aria-controls="product-info" role="tab" data-toggle="tab">商品详情</a></li>
									<li role="presentation"><a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">商品评论</a></li>
								</ul>
							</div>
						</article>
						<!-- /.sb-block -->
					</div>
					
					<!-- .tab-content -->
					<div class="col-md-9 col-sm-8">
						<div class="tab-content content-section">
							<!-- #product-desc -->
							<div role="tabpanel" class="tab-pane fade in active" id="product-desc">
								<div class="row small-gap">
									<h4 class="maintitle">商品 <strong>详细描述</strong></h4>
								</div>
								<br>
								<p><?php echo $goods['goods_desc']; ?></p>

								
							</div>
							<!-- /#product-desc -->

							<!-- #product-info -->
							<div role="tabpanel" class="tab-pane fade" id="product-info">
								<div class="row small-gap">
									<h4 class="maintitle">商品 <strong>详细参数</strong></h4>
								</div>
								<br>
								<div class="row small-gap">
									<div class="col-sm-2"></div>
									<div class="col-sm-10">
										<ul class="list-icon text-uppercase">
										<?php foreach ($tmp as $key => $value):?>
											<li class="clearfix">
												<div class="row">
													<div class="col-sm-3">
														<strong class="pull-right"><?php echo $value['tmp_key']; ?></strong>
													</div>
													<div class="col-sm-8">
														<span class="pull-left"><?php echo $value['value']; ?></span>
													</div>
												</div>
											</li>
										<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</div>
							<!-- /#product-info -->

							<!-- #product-review -->
							<div role="tabpanel" class="tab-pane fade" id="product-review">
								<div class="row small-gap">
									<h4 class="maintitle">商品 <strong>买家评价</strong></h4>
								</div>
								<br>
								<p>买家评价.</p>
							</div>
							<!-- /#product-review -->
						</div>
					</div>
					<!-- .tab-content -->
					
				</div>
				<!-- /.row -->
			</div>
		</section>
		<!-- /.section.bg-secondary -->
		
		<!-- .section -->
		<section class="section">
			<div class="container">
				<div class="section-header text-center bottom-space-2">
					<h2 class="maintitle">相关 <strong>商品</strong></h2>
					<div class="divider type-2"></div>
				</div>
				
				<!-- .row -->
				<div class="row">
					<div class="col-md-3 col-sm-4" data-animate>
						<!-- .item-box -->
						<div class="item-box">
							<a href="#" class="figure">
								<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-1-1.jpg" alt="" />
							</a>

							<div class="content">
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>

								<h5 class="title"><a href="shop-detail.html">Casual <strong>women dress</strong></a></h5>

								<div class="price">Price: $99.15</div>
							</div>
						</div>
						<!-- .item-box -->
					</div>

					<div class="col-md-3 col-sm-4" data-animate>
						<!-- .item-box -->
						<div class="item-box">
							<a href="#" class="figure">
								<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-1-2.jpg" alt="" />
							</a>

							<div class="content">
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>

								<h5 class="title"><a href="shop-detail.html">Casual <strong>women dress</strong></a></h5>

								<div class="price">Price: $99.15</div>
							</div>
						</div>
						<!-- .item-box -->
					</div>

					<div class="col-md-3 col-sm-4" data-animate>
						<!-- .item-box -->
						<div class="item-box">
							<a href="#" class="figure">
								<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-1-3.jpg" alt="" />
							</a>

							<div class="content">
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>

								<h5 class="title"><a href="shop-detail.html">Casual <strong>women dress</strong></a></h5>

								<div class="price">Price: $99.15</div>
							</div>
						</div>
						<!-- .item-box -->
					</div>

					<div class="col-md-3 col-sm-4" data-animate>
						<!-- .item-box -->
						<div class="item-box">
							<a href="#" class="figure">
								<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-1-4.jpg" alt="" />
							</a>

							<div class="content">
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>

								<h5 class="title"><a href="shop-detail.html">Casual <strong>women dress</strong></a></h5>

								<div class="price">Price: $99.15</div>
							</div>
						</div>
						<!-- .item-box -->
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
		<!-- Image zoom -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.elevateZoom-3.0.8.min.js"></script>
		<!-- Custom select -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.selectric.min.js"></script>
		<!-- Lightbox -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/lightbox.min.js"></script>
		<!-- Carousel -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/slick.min.js"></script>
		<!-- Custom JS -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/script.js"></script>
		<script>
			var startTime = new Date().getTime(); //用于下面初始化sku时间
			var sku = <?php echo $sku; ?>; //后台传过来的sku数据
			var fk_attr_sku = <?php echo $fk_attr_sku; ?>; //后台传过来的规格名称及id
			var store_id = <?php echo $goods['store_id']?>; //店铺id
			var upload_goods_path = '<?php echo SellerConfig::UPLOAD_GOODS; ?>';
			//var attr_sku = 
			// [
			// 		{attrs_key_id:7,attrs_key_name:"尺寸",attr_value:[
			// 											{attrs_value_id:19,attrs_value:"27英寸"},
			// 											{attrs_value_id:21,attrs_value:"34英寸"},
			// 											{attrs_value_id:22,attrs_value:"43英寸"},
			// 											{attrs_value_id:23,attrs_value:"48.9英寸"}
			// 										]
			// 		},
			// 		{attrs_key_id:8,attrs_key_name:"频率",attr_value:[
			// 											{attrs_value_id:24,attrs_value:"60HZ"},
			// 											{attrs_value_id:25,attrs_value:"144HZ"}
			// 										]
			// 		}
			// ]
			var attr_sku = [];  //用于存放sku需要的数据格式
			for(var x in fk_attr_sku){
				var qq = {};
				if(JSON.stringify(attr_sku).indexOf(JSON.stringify(fk_attr_sku[x]['attrs_key_name']))==-1){
					qq.attrs_key_id = fk_attr_sku[x].attrs_key_id;
					qq.attrs_key_name = fk_attr_sku[x].attrs_key_name;
					qq.attr_value = [];
					var aa = {};
					aa.attrs_value_id = fk_attr_sku[x].attrs_value_id;
					aa.attrs_value = fk_attr_sku[x].attrs_value;
					qq.attr_value.push(aa);
					attr_sku.push(qq);
				}else{
					for(var y in attr_sku){
						var ww = {};
						if(attr_sku[y].attrs_key_name == fk_attr_sku[x].attrs_key_name){
							if(JSON.stringify(attr_sku[y].attr_value).indexOf(JSON.stringify(fk_attr_sku[x].attrs_value))==-1){
								ww.attrs_value_id = fk_attr_sku[x].attrs_value_id;
								ww.attrs_value = fk_attr_sku[x].attrs_value;
								attr_sku[y].attr_value.push(ww);
							}
						}
					}
				}
			}
			// console.log(attr_sku);
			// [
			// 	{attrs_key_id: "7", attrs_key_name: "尺寸", attr_value: Array(4)},
			// 	{attrs_key_id: "8", attrs_key_name: "频率", attr_value: Array(2)}
			// ]

			//填充商品规格html
			var str = '';
			for(var x in attr_sku){
				str += '<div class="sku_fname input-one form-list" style="display:inline-flex;">';
				str += '<label class="required" style="margin-top:4px;margin-right:20px;">'+attr_sku[x].attrs_key_name+'</label>';
				for(var y in attr_sku[x].attr_value){
					str += '<input type="button" class="sku" attr_id="'+attr_sku[x].attr_value[y].attrs_value_id+'" value="'+attr_sku[x].attr_value[y].attrs_value+'"/>';
				}
				str += '</div>';
			}
			$('#attr_div').empty().append(str);

			// var keys = [['19', '21','22','23'], ['24', '25']];
			var keys = [];  //用于sku需要的键名称
			for(var x in attr_sku){
				var aa = [];
				for(var y in attr_sku[x].attr_value){
					aa.push(attr_sku[x].attr_value[y].attrs_value_id);
				}
				keys.push(aa);
			}

			// var data = {
			// 			"19,24": {price: 300, count: 0},
			// 			"21,24": {price: 400, count: 40}, 
			// 			"21,25": {price: 500, count: 50},
			// 			"22,24": {price: 600, count: 60},
			// 			"22,25": {price: 700, count: 70},
			// 			"23,24": {price: 800, count: 80},
			// 			"23,25": {price: 900, count: 90},
			// 		};
			var data = {};  //用于sku的数据字典
			var goods_images = []; //用于商品图片展示
			for(var x in sku){
				goods_images.push(sku[x].goods_img);
				var aa = {};
				aa.sku_id = sku[x].id
				aa.price = sku[x].price;
				aa.stock = parseInt(sku[x].stock);
				aa.goods_img = sku[x].goods_img;
				data[sku[x].attr_value_id] = aa;
			}
			//商品图片展示
			// var str2 = '';
			// for(var x in goods_images){
			// 	str2 += '<a class="" href="#" ';
			// 	str2 += ' data-image="'+ upload_goods_path + store_id + '/' + goods_images[x] +'"';
			// 	str2 += ' data-zoom-image="'+ upload_goods_path + store_id + '/' + goods_images[x] +'"';
			// 	str2 += '<img style="width:70px;height:70px;" src="'+ upload_goods_path + store_id + '/' + goods_images[x] +'" alt="" />';
			// 	str2 += '</a>';
			// }
			// $('#product-gallery').empty().append(str2);

			//保存最后的组合结果信息
			var SKUResult = {};
			//获得对象的key
			function getObjKeys(obj) {
				if (obj !== Object(obj)) throw new TypeError('Invalid object');
				var keys = [];
				for (var key in obj)
					if (Object.prototype.hasOwnProperty.call(obj, key))
						keys[keys.length] = key;
				return keys;
			}

			//把组合的key放入结果集SKUResult
			function add2SKUResult(combArrItem, sku) {
				var key = combArrItem.join(",");
				if(SKUResult[key]) {//SKU信息key属性·
					SKUResult[key].stock += sku.stock;
					SKUResult[key].prices.push(sku.price);
					SKUResult[key].sku_id = sku.sku_id;
					SKUResult[key].goods_img = sku.goods_img;
				} else {
					SKUResult[key] = {
						stock : sku.stock,
						prices : [sku.price],
						goods_img : sku.goods_img,
						sku_id : sku.sku_id
					};
				}
			}

			//初始化得到结果集
			function initSKU() {
				var i, j, skuKeys = getObjKeys(data);
				for(i = 0; i < skuKeys.length; i++) {
					var skuKey = skuKeys[i];//一条SKU信息key
					var sku = data[skuKey];	//一条SKU信息value
					var skuKeyAttrs = skuKey.split(","); //SKU信息key属性值数组
					skuKeyAttrs.sort(function(value1, value2) {
						return parseInt(value1) - parseInt(value2);
					});

					//对每个SKU信息key属性值进行拆分组合
					var combArr = combInArray(skuKeyAttrs);
					for(j = 0; j < combArr.length; j++) {
						add2SKUResult(combArr[j], sku);
					}

					//结果集接放入SKUResult
					SKUResult[skuKeyAttrs.join(",")] = {
						stock:sku.stock,
						prices:[sku.price],
						goods_img : sku.goods_img,
						sku_id : sku.sku_id
					}
				}
			}

			/**
			 * 从数组中生成指定长度的组合
			 * 方法: 先生成[0,1...]形式的数组, 然后根据0,1从原数组取元素，得到组合数组
			 */
			function combInArray(aData) {
				if(!aData || !aData.length) {
					return [];
				}

				var len = aData.length;
				var aResult = [];

				for(var n = 1; n < len; n++) {
					var aaFlags = getCombFlags(len, n);
					while(aaFlags.length) {
						var aFlag = aaFlags.shift();
						var aComb = [];
						for(var i = 0; i < len; i++) {
							aFlag[i] && aComb.push(aData[i]);
						}
						aResult.push(aComb);
					}
				}
				
				return aResult;
			}


			/**
			 * 得到从 m 元素中取 n 元素的所有组合
			 * 结果为[0,1...]形式的数组, 1表示选中，0表示不选
			 */
			function getCombFlags(m, n) {
				if(!n || n < 1) {
					return [];
				}

				var aResult = [];
				var aFlag = [];
				var bNext = true;
				var i, j, iCnt1;

				for (i = 0; i < m; i++) {
					aFlag[i] = i < n ? 1 : 0;
				}

				aResult.push(aFlag.concat());

				while (bNext) {
					iCnt1 = 0;
					for (i = 0; i < m - 1; i++) {
						if (aFlag[i] == 1 && aFlag[i+1] == 0) {
							for(j = 0; j < i; j++) {
								aFlag[j] = j < iCnt1 ? 1 : 0;
							}
							aFlag[i] = 0;
							aFlag[i+1] = 1;
							var aTmp = aFlag.concat();
							aResult.push(aTmp);
							if(aTmp.slice(-n).join("").indexOf('0') == -1) {
								bNext = false;
							}
							break;
						}
						aFlag[i] == 1 && iCnt1++;
					}
				}
				return aResult;
			} 



			//初始化用户选择事件
			$(function() {
				initSKU();
				var endTime = new Date().getTime();
				// $('#init_time').text('init sku time: ' + (endTime - startTime) + " ms");
				console.log('init sku time: ' + (endTime - startTime) + " ms");
				$('.sku').each(function() {
					var self = $(this);
					var attr_id = self.attr('attr_id');
					if(!SKUResult[attr_id]) {
						self.attr('disabled', 'disabled').css('border-style','dotted');
					}
				}).click(function() {
					var self = $(this);

					//选中自己，兄弟节点取消选中
					self.toggleClass('bh-sku-selected').siblings().removeClass('bh-sku-selected');
					
					//已经选择的节点
					var selectedObjs = $('.bh-sku-selected');

					if(selectedObjs.length) {
						//获得组合key价格
						var selectedIds = [];
						selectedObjs.each(function() {
							selectedIds.push($(this).attr('attr_id'));
						});
						selectedIds.sort(function(value1, value2) {
							return parseInt(value1) - parseInt(value2);
						});
						var len = selectedIds.length;
						var prices = SKUResult[selectedIds.join(',')].prices;
						var maxPrice = Math.max.apply(Math, prices);
						var minPrice = Math.min.apply(Math, prices);

						$('#price').text(maxPrice > minPrice ? minPrice + "-" + maxPrice : maxPrice);
						$('#stock').text(SKUResult[selectedIds.join(',')].stock);
						$('#sku_id').val(SKUResult[selectedIds.join(',')].sku_id);
						console.log(SKUResult[selectedIds.join(',')]);
						$('#product-gallery a').each(function(){
							if($(this).attr('data-image').indexOf(SKUResult[selectedIds.join(',')].goods_img)>-1){
								$(this).click();
							}
						});

						// console.log(maxPrice > minPrice ? minPrice + "-" + maxPrice : maxPrice);
						// console.log(SKUResult[selectedIds.join(',')].stock);
						//用已选中的节点验证待测试节点 underTestObjs
						$(".sku").not(selectedObjs).not(self).each(function() {
							var siblingsSelectedObj = $(this).siblings('.bh-sku-selected');
							var testAttrIds = [];//从选中节点中去掉选中的兄弟节点
							if(siblingsSelectedObj.length) {
								var siblingsSelectedObjId = siblingsSelectedObj.attr('attr_id');
								for(var i = 0; i < len; i++) {
									(selectedIds[i] != siblingsSelectedObjId) && testAttrIds.push(selectedIds[i]);
								}
							} else {
								testAttrIds = selectedIds.concat();
							}
							testAttrIds = testAttrIds.concat($(this).attr('attr_id'));
							testAttrIds.sort(function(value1, value2) {
								return parseInt(value1) - parseInt(value2);
							});
							if(!SKUResult[testAttrIds.join(',')]) {
								$(this).attr('disabled', 'disabled').removeClass('bh-sku-selected').css('border-style','dotted');
							} else {
								$(this).removeAttr('disabled').css('border-style','solid');
							}
						});
					} else {
						//设置默认价格
						$('#price').text('0');
						$('#stock').text('--');
						$('#goods_pic').click();
						//设置属性状态
						$('.sku').each(function() {
							SKUResult[$(this).attr('attr_id')] ? $(this).removeAttr('disabled').css('border-style','solid') : $(this).attr('disabled', 'disabled').removeClass('bh-sku-selected').css('border-style','dotted');
						})
					}
				});
			});
			
			//数量添加按钮点击操作
			$('#add').click(function(){
				$('#num').val(parseInt($('#num').val()) + 1);
			});
			//数量减少按钮点击操作
			$('#cut').click(function(){
				if(parseInt($('#num').val())>1){
					$('#num').val(parseInt($('#num').val()) - 1);
				}
			});

			//购买按钮点击事件
			$('#buy_btn').click(function(){
				var sku_id = $('#sku_id').val();
				var goods_id = '<?php echo $goods["id"]?>';
				var quantity = $('#num').val();
				var choSkuL = 0; //选中的属性数量
				var SkuL = 0; //属性行数
				$('.sku').each(function(i,d){
					if($(this).hasClass('bh-sku-selected')){
						choSkuL++;
					}
				})
				$('.sku_fname').each(function(i,d){
					SkuL++;
				});
				if(sku_id!=''&&choSkuL===SkuL){
					$.post("<?php echo $this->config->app_url_root.'/Index/ajax_buy_goods'; ?>",{"goods_id":goods_id,"sku_id":sku_id,"quantity":quantity},function(e){
						e = JSON.parse(e);
						var flag = e.sta;
						var mes = e.mes;
						if(flag==0){
							//不存在该商品属性
							$('#err').empty().text('不存在该商品属性，请不要擅自修改不该修改的内容');
						}else if(flag==1){
							//成功
							$('#err').empty();
						}else if(flag==2){
							//该商品规格库存为0
							$('#err').empty().text('该规格已经售罄');
						}
					});
				}
			});

			//添加购物车按钮点击事件
			$('#add_to_cart').click(function(){
				var sku_id = $('#sku_id').val();
				var goods_id = '<?php echo $goods["id"]?>';
				var quantity = $('#num').val();
				var store_id = '<?php echo $goods["store_id"]?>';
				var choSkuL = 0; //选中的属性数量
				var SkuL = 0; //属性行数
				$('.sku').each(function(i,d){
					if($(this).hasClass('bh-sku-selected')){
						choSkuL++;
					}
				})
				$('.sku_fname').each(function(i,d){
					SkuL++;
				});
				if(sku_id!=''&&choSkuL===SkuL){
					$.post("<?php echo $this->config->app_url_root.'/Cart/ajax_insert_cart'; ?>",{"goods_id":goods_id,"sku_id":sku_id,"quantity":quantity,"store_id":store_id},function(e){
						e = JSON.parse(e);
						var flag = e.sta;
						var mes = e.mes;
						if(flag==0){
							//不存在该商品属性
							$('#err').empty().text('不存在该商品属性，请不要擅自修改不该修改的内容');
						}else if(flag==1){
							//成功
							$('#err').empty();
						}else if(flag==2){
							//该商品规格库存为0
							$('#err').empty().text('该规格已经售罄');
						}
					});
				}
			});
			
			// Gallery with zoom
			var galleryImage = $('[data-gallery-id]');
			galleryImage.each(function() {
				var $this = $(this),
				galleryId = $this.data('gallery-id');
				$this.elevateZoom({
					zoomType: 'lens',
					easing: 'zoom',
					cursor: 'pointer',
					responsive: true,
					gallery: galleryId,
					galleryActiveClass: 'active',
				});
			});
			galleryImage.closest('a').on('click', function() {
				var $this = $(this),
				galleryId = $this.find('img').data('gallery-id'),
				currentImg	= $('#' + galleryId).find('.active').data('zoom-image');
				$this.attr('href', currentImg);
			});
			// Product thumbnails
			$('.product-carousel-nav').slick({
				slidesToShow: 5,
				slidesToScroll: 1,
				dots: false,
				focusOnSelect: true,
				responsive: [{
					breakpoint: 992,
					settings: {
						slidesToShow: 3,
					}
				}]
			});
		</script>
	</body>
</html>