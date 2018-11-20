<!DOCTYPE html>
<html lang="en">
	<head>
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
			<div class="container">
			
				<!-- .product-section -->
				<div class="product-section" itemscope itemtype="http://schema.org/Product">
					<div class="row">
						<div class="col-md-9 col-sm-8">
							<div class="row">
								<div class="col-md-6 col-sm-5">
									<figure class="product-carousel-image">
										<a href="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-1-large.jpg" data-lightbox="product">
											<img itemprop="image" data-gallery-id="product-gallery" src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-1.jpg" data-zoom-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-1-large.jpg" alt="" />
										</a>
									</figure>
									
									<div id="product-gallery" class="product-carousel-nav bottom-space">
										<a class="active" href="#" data-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-1-large.jpg" data-zoom-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-1-large.jpg">
											<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-1-thumb.jpg" alt="" />
										</a>
										<a href="#" data-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-2-large.jpg" data-zoom-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-2-large.jpg">
											<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-2-thumb.jpg" alt="" />
										</a>
										<a href="#" data-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-3-large.jpg" data-zoom-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-3-large.jpg">
											<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-3-thumb.jpg" alt="" />
										</a>
										<a href="#" data-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-4-large.jpg" data-zoom-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-4-large.jpg">
											<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-4-thumb.jpg" alt="" />
										</a>
										<a href="#" data-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-5-large.jpg" data-zoom-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-5-large.jpg">
											<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-5-thumb.jpg" alt="" />
										</a>
										<a href="#" data-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-6-large.jpg" data-zoom-image="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-6-large.jpg">
											<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-3-6-thumb.jpg" alt="" />
										</a>
									</div>
								</div>
								
								<div class="col-lg-5 col-md-6 col-sm-7">
									<h3 class="category-title text-uppercase secondary-text">Elegant watches</h3>
									
									<h1 class="product-title" itemprop="name">Golden <strong>women dress</strong></h1>
									
									<div class="rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
										<meta itemprop="ratingValue" content="4.4" />
										
										<select class="rating-input">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
										
										<span class="text-uppercase secondary-text">Review (<span itemprop="reviewCount">5</span>)</span>
									</div>
									
									<!-- .content -->
									<div class="content">
										<p class="btn-list">
											<a data-remodal-target="compare" href="#" class="btn btn-sm btn-icon-left btn-radius btn-tertiary-to-secondary"><i class="fa fa-compass"></i> Compare</a>
											<a data-remodal-target="wishlist" href="#" class="btn btn-sm btn-icon-left btn-radius btn-tertiary-to-secondary"><i class="fa fa-heart-o"></i> Add to wishlist</a>
										</p>
										
										<div itemprop="description">
											<p>Lorem ipsum dolor sit amet, consectetuer dolorado adipiscing elit diam, sed diam
											nonumy consectetuer dolorado adipiscing elit diam.</p>
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
							<div class="product-panel" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
								<link itemprop="availability" href="http://schema.org/InStock" />
								<p class="status text-uppercase secondary-text">Availability: <span>in stock</span></p>
							
								<meta itemprop="priceCurrency" content="USD" />
								<div class="price"><span class="currency">$</span><span itemprop="price">125.00</span></div>
								
								<form id="add-to-cart">
									<div class="form-group">
										<label class="secondary-text" for="item-count">Quantity</label>
										
										<div class="input-group input-group-radius count-input">
											<input type="text" class="form-control input-sm" name="item-count" id="item-count" value="1" />
											<div class="input-group-btn">
												<button class="btn btn-sm btn-input" data-value="minus"><i class="fa fa-minus"></i></button>
												<button class="btn btn-sm btn-input" data-value="plus"><i class="fa fa-plus"></i></button>
											</div>
										</div>
										
										<label class="secondary-text" for="item-color">Color</label>
										
										<div class="select-sm select-radius">
											<select class="input-select" name="item-color" id="item-color">
												<option value="1">Dark blue</option>
												<option value="2">Black</option>
												<option value="3">White</option>
												<option value="4">Red</option>
											</select>
										</div>
									</div>
									
									<div class="form-group text-center">
										<button data-remodal-target="add-to-cart" class="btn btn-radius btn-simple-to-border btn-primary" type="submit">Add to cart</button>
									</div>
									
									<div class="form-feedback on-valid alert alert-small alert-success text-center" role="alert">
										<p>You added this item to cart.</p>
									</div>
								</form>
							</div>
							<!-- /.product-panel -->
							
							<div class="social-list">
								<div class="title">Share this:</div>
								
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /.product-section -->
				
				<div class="row" data-animate>
					
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
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
								tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
								nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
								Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
								vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
								qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>

								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
								vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
								qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi
								tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
								nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat
								tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

								<h5 class="text-uppercase">Elegant <strong>colors</strong></h5>

								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
								euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

								<div class="row">
									<div class="col-md-3 col-sm-6">
										<ul class="list-icon text-uppercase weight-bold">
											<li><i class="fa fa-check"></i> Pure platinum</li>
											<li><i class="fa fa-check"></i> Precious stone</li>
											<li><i class="fa fa-check"></i> Cheracom</li>
											<li><i class="fa fa-check"></i> Stainless steel</li>
											<li><i class="fa fa-check"></i> Rolesor</li>
										</ul>
									</div>

									<div class="col-md-3 col-sm-6">
										<ul class="list-icon text-uppercase weight-bold">
											<li><i class="fa fa-check"></i> Pure platinum</li>
											<li><i class="fa fa-check"></i> Precious stone</li>
											<li><i class="fa fa-check"></i> Cheracom</li>
											<li><i class="fa fa-check"></i> Stainless steel</li>
											<li><i class="fa fa-check"></i> Rolesor</li>
										</ul>
									</div>
								</div>
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
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.min.js"></script>
		<!-- HTML/CSS/JS framework -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/bootstrap.min.js"></script>
		<!-- Google Map API -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxYi_Sk25cIlLkMEQlM7I-jAqWYTDQj64"></script>
		<!-- Form validation -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.form-validator.min.js"></script>
		<!-- Viewport checker -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.viewportchecker.min.js"></script>
		<!-- Filter and sort layouts -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/isotope.pkgd.min.js"></script>
		<!-- Modal -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/remodal.min.js"></script>
		<!-- Images loaded -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/imagesloaded.pkgd.min.js"></script>
		<!-- Image zoom -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.elevateZoom-3.0.8.min.js"></script>
		<!-- Lightbox -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/lightbox.min.js"></script>
		<!-- Scroll navigation -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/sly.min.js"></script>
		<!-- Carousel -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/slick.min.js"></script>
		<!-- Responsive equal heights -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.matchHeight-min.js"></script>
		<!-- Countdown-->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.countdown.min.js"></script>
		<!-- Masonry -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/masonry.pkgd.min.js"></script>
		<!-- Custom select -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.selectric.min.js"></script>
		<!-- Bar rating -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.barrating.min.js"></script>
		<!-- Range slider -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/nouislider.min.js"></script>
		<!-- Number formatting -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/wNumb.js"></script>
		<!-- Counter up -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.counterup.min.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/script.min.js"></script>
	</body>
</html>