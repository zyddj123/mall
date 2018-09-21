<?php
if(!defined('CO_BASE_CHECK')){
	header("HTTP/1.1 404 Not Found");
	header("Status: 404 Not Found");
	exit();
};
?>
<!DOCTYPE html>
<html>
<head>
	<!-- meta -->
	<?php @include_once $this->getThemesPath().'/view/common/meta.php';?>
	<title><?php echo $this->language['index_title']?></title>
	<!-- header -->
	<?php @include_once $this->getThemesPath().'/view/common/header.php';?>
	<style>
	.star{
		color: #ff0000;
		margin-right: 5px;
	}
</style>
</head>
<body class="sticky-header">
	<section>
		<div class="left-side sticky-left-side">
			<!-- logo -->
			<?php @include_once $this->getThemesPath().'/view/common/logo.php';?>
			<div class="left-side-inner">
				<!-- menu_user -->
				<?php @include_once $this->getThemesPath().'/view/common/menu_user.php';?>
				<!-- menu -->
				<?php @include_once $this->getThemesPath().'/view/common/menu.php';?>   
			</div>
		</div>
		<div class="main-content" >

			<!-- top -->
			<?php @include_once $this->getThemesPath().'/view/common/top.php';?>
			<div class="page-heading">
				<h3>商品管理</h3>
				<ul class="breadcrumb">
					<li>
						<a href="#">商品管理</a>
					</li>
					<li class="active"> 添加商品 </li>
				</ul>
			</div>

			<!-- content -->
			<div class="wrapper">
				<section class="panel">
					<header class="panel-heading custom-tab">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#goods_mes" data-toggle="tab">
									<i class="fa fa-globe"></i>
									通用信息
								</a>
							</li>
							<li>
								<a href="#goods_detal" data-toggle="tab">
									<i class="fa fa-pencil-square"></i>
									详细描述
								</a>
							</li>
							<li class="">
								<a href="#goods_img" data-toggle="tab">
									<i class="fa fa-picture-o"></i>
									商品相册
								</a>
							</li>
						</ul>
					</header>
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane active" id="goods_mes">
								<form action="">
									<div class="form-group">
										<!--基本信息-->
										<section>
											<header class="panel-heading"> 基本信息 </header>
											<div class="panel-body">
												<div class="row">
													<div class="col-lg-4 col-sm-4">
														<label style="float:left; margin-top: 7px;"><span class="star">*</span>商品名称</label>
														<div class="col-lg-8">
															<input type="text" class="form-control" name="goods_name" id="goods_name" placeholder="">
															<p class="goods_name"></p>
														</div>
													</div>
													<div class="col-lg-4 col-sm-4">
														<label style="float:left; margin-top: 7px;"><span class="star">*</span>商品类别</label>
														<div class="col-lg-6">
															<select class="form-control">
																<option>数码</option>
																<option>服饰</option>
																<option>食品</option>
															</select>
														</div>
														<div class="col-lg-4">
															<span><i class="fa fa-hand-o-right"></i>跳转到
																<a href="#">商品类别</a>
															</span>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-4 col-sm-4">
														<label style="float:left; margin-top: 7px;"><span class="star">*</span>商品货号</label>
														<div class="col-lg-8">
															<input type="text" class="form-control" name="goods_name" id="goods_name" placeholder="">
															<p class="goods_name"></p>
														</div>
													</div>
													
													<div class="col-lg-4 col-sm-4">
														<label style="float:left; margin-top: 7px;"><span class="star">*</span>商品品牌</label>
														<div class="col-lg-6">
															<select class="form-control">
																<option>小米</option>
																<option>苹果</option>
																<option>华为</option>
															</select>
														</div>
														<div class="col-lg-4">
															<span><i class="fa fa-hand-o-right"></i>跳转到
																<a href="#">商品品牌</a>
															</span>
														</div>
													</div>
												</div>
											</div>
										</section>
										<!--单位-->
										<section>
											<header class="panel-heading"> 单位 </header>
											<div class="panel-body">
												<div class="row">
													<div class="col-lg-4 col-sm-4">
														<label style="float:left; margin-top: 7px;"><span class="star">*</span>添加库存</label>
														<div class="col-lg-8">
															<div id="kucun">
																<div class="input-group" style="width:150px;">
																	<div class="spinner-buttons input-group-btn">
																		<button type="button" class="btn spinner-up btn-primary">
																			<i class="fa fa-plus"></i>
																		</button>
																	</div>
																	<input type="text" class="spinner-input form-control" maxlength="3">
																	<div class="spinner-buttons input-group-btn">
																		<button type="button" class="btn spinner-down btn-warning">
																			<i class="fa fa-minus"></i>
																		</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-sm-4">
														<label style="float:left; margin-top: 7px;"><span class="star">*</span>选择单位</label>
														<div class="col-lg-6">
															<select class="form-control">
																<option>件</option>
																<option>部</option>
																<option>台</option>
															</select>
														</div>
														<div class="col-lg-4">
															<span><i class="fa fa-hand-o-right"></i>跳转到
																<a href="#">单位管理</a>
															</span>
														</div>
													</div>
												</div>
											</div>
										</section>

										
									</div>
								</form>
							</div>
							<div class="tab-pane" id="goods_detal">
								详细描述
							</div>
							<div class="tab-pane" id="goods_img">
								商品相册
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<!-- footer -->
		<?php @include_once $this->getThemesPath().'/view/common/footer.php';?>
	</div>
</section>
<?php @include_once $this->getThemesPath().'/view/common/commonjs.php';?>
<script src="<?php echo $this->getThemesUrl();?>/js/spinner/js/spinner.min.js"></script>
<script>
	$('#kucun').spinner({value:0, step: 5, min: 0, max: 10000});
</script>
</body>
</html>
