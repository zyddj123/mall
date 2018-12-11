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
						<div class="col-md-9 col-sm-8">
							<div class="row">
								<div class="col-md-6 col-sm-5">
									<figure class="product-carousel-image">
										<a :href="'<?php echo SellerConfig::UPLOAD_GOODS;?>' + store_id + '/' + goods_img" data-lightbox="product">
											<img style="width:400px;height:400px;" itemprop="image" data-gallery-id="product-gallery" :src="'<?php echo SellerConfig::UPLOAD_GOODS;?>' + store_id + '/' + goods_img" :data-zoom-image="'<?php echo SellerConfig::UPLOAD_GOODS;?>' + store_id + '/' + goods_img" alt="" />
										</a>
									</figure>
									
									<div id="product-gallery" class="product-carousel-nav bottom-space">
										<a v-for="key in images" class="active" href="#" :data-image="'<?php echo SellerConfig::UPLOAD_GOODS;?>' + store_id + '/' + key" :data-zoom-image="'<?php echo SellerConfig::UPLOAD_GOODS;?>' + store_id + '/' + key">
											<img style="width:70px;height:70px;" :src="'<?php echo SellerConfig::UPLOAD_GOODS;?>' + store_id + '/' + key" alt="" />
										</a>
									</div>
								</div>
								
								<div class="col-lg-5 col-md-6 col-sm-7">
									<h3 class="category-title text-uppercase secondary-text">Elegant watches</h3>
									
									<h1 class="product-title" itemprop="name"> <strong><?php echo $goods['goods_name']?></strong></h1>
									
									<!-- .content -->
									<div class="content">
										<p class="btn-list">
											<a data-remodal-target="compare" href="#" class="btn btn-sm btn-icon-left btn-radius btn-tertiary-to-secondary"><i class="fa fa-compass"></i> Compare</a>
											<a data-remodal-target="wishlist" href="#" class="btn btn-sm btn-icon-left btn-radius btn-tertiary-to-secondary"><i class="fa fa-heart-o"></i> Add to wishlist</a>
										</p>
										
										<div itemprop="description">
											<p><?php echo $goods['goods_brief']?></p>
										</div>
									
										<div class="row small-gap">
											<div class="col-sm-6">
												<ul class="list-icon text-uppercase">
													<li><i class="fa fa-check"></i> Pure platinum</li>
													<li><i class="fa fa-check"></i> Precious stone</li>
													<li><i class="fa fa-check"></i> Cheracom</li>
													<li><i class="fa fa-check"></i> Stainless steel</li>
													<li><i class="fa fa-check"></i> Rolesor</li>
												</ul>
											</div>

											<div class="col-sm-6">
												<ul class="list-icon text-uppercase">
													<li><i class="fa fa-check"></i> Gold</li>
													<li><i class="fa fa-check"></i> 904L stainless steel</li>
													<li><i class="fa fa-check"></i> Rolesor</li>
													<li><i class="fa fa-check"></i> Pure platinum</li>
													<li><i class="fa fa-check"></i> Cheracom</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- /.content -->
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-4">
							<!-- .product-panel -->
							<div class="product-panel" id="sku" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
								<link itemprop="availability" href="http://schema.org/InStock" />
								<p class="status text-uppercase secondary-text">库存: <span>{{choosed.stock}}</span></p>
								<meta itemprop="priceCurrency" content="USD" />
								<div class="price"><span class="currency">$</span><span itemprop="price">{{money}}</span></div>
								
								<form id="add-to-cart">
									<div class="form-group">
										<label class="secondary-text" for="item-count">Quantity</label>
										
										<div class="input-group input-group-radius count-input">
											<input type="text" class="form-control input-sm" v-model="count" value="1" />
											<div class="input-group-btn">
												<button class="btn btn-sm btn-input" @click.prevent="countCut" data-value="minus"><i class="fa fa-minus"></i></button>
												<button class="btn btn-sm btn-input" @click.prevent="countAdd" data-value="plus"><i class="fa fa-plus"></i></button>
											</div>
										</div>
										<div v-for="(item,index) in attr_list">
											<label class="secondary-text" for="item-color">{{item.attrs_key_name}}</label>
											<div class="select-sm select-radius">
												<select class="form-control" v-model="attr[index]">
													<option v-for="key in item.attr_value" v-bind:value="key.attrs_value_id">{{key.attrs_value}}</option>
												</select>
											</div>
										</div>

									</div>
									
									<div class="form-group text-center">
										<button data-remodal-target="add-to-cart" class="btn btn-radius btn-simple-to-border btn-primary" type="submit">添加购物车</button>
									</div>
									
									<div class="form-feedback on-valid alert alert-small alert-success text-center" role="alert">
										<p>You added this item to cart.</p>
									</div>
								</form>
							</div>
							<!-- /.product-panel -->
						</div>
					</div>
				</div>
				<!-- /.product-section -->
				
				<div class="row" data-animate style="visibility:visible">
					
					<div class="col-md-3 col-sm-4">
						<!-- .sb-block -->
						<article class="sb-block">
							<h3 class="sb-title">About <strong>product</strong></h3>
							<div class="sb-content">
								<ul class="nav-list text-uppercase" role="tablist">
									<li role="presentation" class="active"><a href="#product-desc" aria-controls="product-desc" role="tab" data-toggle="tab">Description</a></li>
									<li role="presentation"><a href="#product-info" aria-controls="product-info" role="tab" data-toggle="tab">Information</a></li>
									<li role="presentation"><a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">Product review</a></li>
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
								<p><?php echo $goods['goods_desc']?></p>

								
							</div>
							<!-- /#product-desc -->

							<!-- #product-info -->
							<div role="tabpanel" class="tab-pane fade" id="product-info">
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
								vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
								qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi
								tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
								nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat
								tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							</div>
							<!-- /#product-info -->

							<!-- #product-review -->
							<div role="tabpanel" class="tab-pane fade" id="product-review">
								<p>Qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi
								tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
								nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat
								tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
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
					<h3 class="subtitle">Latest Product View</h3>
					<h2 class="maintitle">Related <strong>products</strong></h2>
					
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
		
		<!-- .remodal.modal-section -->
		<section class="remodal modal-section" data-remodal-id="add-to-cart" data-remodal-options="hashTracking: false" tabindex="-1" role="dialog">
			<!-- .container.modal-sm -->
			<div class="container modal-sm">
				<!-- .modal-content -->
				<div class="modal-content">
					<button type="button" class="close" data-remodal-action="close" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					
					<div class="modal-body product-feedback">
						<p class="feedback-title secondary-text">Added to cart:</p>
						
						<div class="row">
							<div class="col-xs-2">
								<figure>
									<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-4-3.jpg" alt="" />
								</figure>
							</div>
							
							<div class="col-xs-10">
								<p class="name">Golden <strong>women dress</strong></p>
							</div>
						</div>
						
						<a href="shopping-cart.html" class="btn btn-block btn-simple-to-border btn-primary">Go to cart</a>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.container.modal-sm -->
		</section>
		<!-- /.remodal.modal-section -->
		
		<!-- .remodal.modal-section -->
		<section class="remodal modal-section" data-remodal-id="compare" data-remodal-options="hashTracking: false" tabindex="-1" role="dialog">
			<!-- .container.modal-sm -->
			<div class="container modal-sm">
				<!-- .modal-content -->
				<div class="modal-content">
					<button type="button" class="close" data-remodal-action="close" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					
					<div class="modal-body product-feedback">
						<p class="feedback-title secondary-text">Added to compare list:</p>
						
						<div class="row">
							<div class="col-xs-2">
								<figure>
									<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-4-3.jpg" alt="" />
								</figure>
							</div>
							
							<div class="col-xs-10">
								<p class="name">Golden <strong>women dress</strong></p>
							</div>
						</div>
						
						<div class="row">
							<div class="col-xs-2">
								<figure>
									<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-4-2.jpg" alt="" />
								</figure>
							</div>
							
							<div class="col-xs-10">
								<p class="name">Casual <strong>towel</strong></p>
							</div>
						</div>
						
						<div class="row">
							<div class="col-xs-2">
								<figure>
									<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-4-1.jpg" alt="" />
								</figure>
							</div>
							
							<div class="col-xs-10">
								<p class="name">Colorful <strong>dress</strong></p>
							</div>
						</div>
						
						<a href="compare.html" class="btn btn-block btn-simple-to-border btn-primary">Go to compare</a>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.container.modal-sm -->
		</section>
		<!-- /.remodal.modal-section -->
		
		<!-- .remodal.modal-section -->
		<section class="remodal modal-section" data-remodal-id="wishlist" data-remodal-options="hashTracking: false" tabindex="-1" role="dialog">
			<!-- .container.modal-sm -->
			<div class="container modal-sm">
				<!-- .modal-content -->
				<div class="modal-content">
					<button type="button" class="close" data-remodal-action="close" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					
					<div class="modal-body product-feedback">
						<p class="feedback-title secondary-text">Added to wishlist:</p>
						
						<div class="row">
							<div class="col-xs-2">
								<figure>
									<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-4-2.jpg" alt="" />
								</figure>
							</div>
							
							<div class="col-xs-10">
								<p class="name">Casual <strong>towel</strong></p>
							</div>
						</div>
						
						<a href="wishlist.html" class="btn btn-block btn-simple-to-border btn-primary">Go to wishlist</a>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.container.modal-sm -->
		</section>
		<!-- /.remodal.modal-section -->
		
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
		
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vue.js"></script>
		<!-- Custom JS -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/script.js"></script>
		<script>
			var data = <?php echo $sku; ?>;
			var tmp = [];
			var img_arr_tmp = [];
			var img_arr = [];
			if(data){
				for(var x in data){
					img_arr_tmp.push(data[x].goods_img);
					var qq = {};
					if(JSON.stringify(tmp).indexOf(JSON.stringify(data[x].attrs_key_name))==-1){
						qq.attrs_key_id = data[x].attrs_key_id;
						qq.attrs_key_name = data[x].attrs_key_name;
						qq.attr_value = [];
						var aa = {};
						aa.attrs_value_id = data[x].attrs_value_id;
						aa.attrs_value = data[x].attrs_value;
						qq.attr_value.push(aa);
						tmp.push(qq);
					}else{
						for(var y in tmp){
							var ww = {};
							if(tmp[y].attrs_key_name == data[x].attrs_key_name){
								if(JSON.stringify(tmp[y].attr_value).indexOf(JSON.stringify(data[x].attrs_value))==-1){
									ww.attrs_value_id = data[x].attrs_value_id;
									ww.attrs_value = data[x].attrs_value;
									tmp[y].attr_value.push(ww);
								}
							}
						}
					}
				}
			}
			img_arr = unique(img_arr_tmp);
			// console.log(JSON.stringify(tmp));
			// console.log(img_arr);
			// 默认规格显示  数组 同时也为了select数据双向绑定
			var attr_default = [];
			for(var i in tmp) {
				attr_default.push(tmp[i].attr_value[0].attrs_value_id);
			}
			var vm = new Vue({
				el: '#goods',
				data: {
					list: data,
		// tmp = 
		//[{attrs_key_id:1,attrs_key_name:"颜色",attr_value:[{attrs_value_id:1,attrs_value:"银色"},{attrs_value_id:2,attrs_value:"黑色"}]},
		//{attrs_key_id:2,attrs_key_name:"内存",attr_value:[{attrs_value_id:5,attrs_value:"32G"},{attrs_value_id:6,attrs_value:"64G"}]}]
					attr_list: tmp,
					attr: attr_default,
					count: '1',
					choosed: {}, //{"store_id":"1","goods_id":"48","stock":"120","sku_id":"56"}
					price: '',
					store_id: '',
					images: img_arr,
					goods_img: ''
				},
				created: function(){
					// $.ajax({
					// 	url: "<?php echo $this->config->app_url_root.'/Index/ajax_data'; ?>",
					// 	type: "POST",
					// 	dataType:"json",
					// 	cache: false,
					// 	contentType: false,
					// 	processData: false,
					// 	success:function(e){
					// 		// e = JSON.parse(e);
					// 		// console.log(e);
					// 	}
					// });
					this.getChoosed();
				},
				updated: function(){
					this.getChoosed();
					var ss = '<?php echo SellerConfig::UPLOAD_GOODS;?>'+ this.store_id + '/' + this.goods_img;
					var asd = $('#product-gallery').find('img[src="'+ss+'"]');
					asd.click();
				},
				methods: {
					//数量减少按钮点击操作
					countCut(){
						if(parseInt(this.count)>1){
							this.count = parseInt(this.count) - 1;
						}
					},
					//数量添加按钮点击操作
					countAdd(){
						if(parseInt(this.choosed.stock)>parseInt(this.count)){
							this.count = parseInt(this.count) + 1;
						}
					},
					getChoosed(){
						for(var i in this.list){
							if(this.list[i].attr_value_id==this.attr.toString()){
								this.store_id = this.list[i].store_id;
								this.choosed.goods_id = this.list[i].goods_id;
								this.price = this.list[i].price;
								this.choosed.stock = this.list[i].stock;
								this.goods_img = this.list[i].goods_img;
								this.choosed.sku_id = this.list[i].sku_id;
							}
						}
					}
				},
				watch: {
					count: function (val, oldVal) {
      					if(parseInt(this.count)>parseInt(this.choosed.stock)){
							this.count = this.choosed.stock;
						}else{
							this.count = val;
						}
    				},
				},
				computed: {
					money: function(){
						return this.price*this.count;
					}
				}
			});

			//数组去重
			function unique(arr){
				var hash=[];
				for (var i = 0; i < arr.length; i++) {
					if(hash.indexOf(arr[i])==-1){
					hash.push(arr[i]);
					}
				}
				return hash;
			}
			
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