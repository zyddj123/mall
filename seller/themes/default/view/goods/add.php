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
	<link href="<?php echo $this->getThemesUrl();?>/js/switchery/switchery.css" rel="stylesheet">
	<link href="<?php echo $this->getThemesUrl();?>/js/select2/select2.min.css" rel="stylesheet">
	<link href="<?php echo $this->getThemesUrl();?>/js/iCheck/skins/flat/_all.css" rel="stylesheet">
	<link href="<?php echo $this->getThemesUrl();?>/css/jquery.stepy.css" rel="stylesheet">
	<style>
	.star{
		color: #ff0000;
		margin-right: 5px;
	}
	.radio{
		display: flex;
	}
	.stepy_form-buttons{
		position: fixed;
		bottom: 50px;
		margin-left: 70%;
	}
	.button-back{
		margin-right: 50px;
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
				<section class="panel panel-default">
					<header class="panel-heading">
						<h3 class="panel-title">添加商品</h3>
					</header>
					<div class="panel-body box-widget">
						<div class="widget-head clearfix">
							<div id="top_tabby" class="block-tabby">
							</div>
						</div>
						<form id="stepy_form" action="">
							<fieldset title="第一步">
								<legend>通用信息</legend>
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
											<div class="row">
												<div class="col-lg-4 col-sm-4">
													<label style="float:left; margin-top: 7px;"><span class="star">*</span>商品货号</label>
													<div class="col-lg-8">
														<input type="text" class="form-control" name="goods_name" id="goods_name" placeholder="">
														<p class="goods_name"></p>
													</div>
												</div>

												<div class="col-lg-4 col-sm-4">
													<label style="float:left; margin-top: 7px;"><span class="star">*</span>上架下架</label>
													<div class="col-lg-6" style="display: inline-flex;">
														<div class="flat-yellow single-row">
															<div class="radio ">
																<input tabindex="3" type="radio" checked="checked"  name="demo-radio">
																<label>上架</label>
															</div>
														</div>
														<div class="flat-red single-row">
															<div class="radio ">
																<input tabindex="3" type="radio"  name="demo-radio">
																<label>下架</label>
															</div>
														</div>
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

									<!--规格-->
									<section>
										<header class="panel-heading"> 规格 </header>
										<div class="panel-body">
											<div class="row">
												<div class="row">
													<div class="col-lg-4 col-sm-4">
														<input type="checkbox" id="is_more_attr" class="js-switch"  /><span style="margin-left: 10px;color: #f8ac59">此商品有多规格</span>
														<span><i class="fa fa-hand-o-right"></i>跳转到
															<a href="#">规格管理</a>
														</span>
													</div>
												</div><br>
												<div class="row" id="attr">
													<div class="col-lg-4 col-sm-4 attr1">
														<div class="col-lg-8 col-sm-8 select2_d1">
															<select class="select2 form-control attr_select1" style="width:60%">
																<option value="">请选择</option>
																<option value="颜色">颜色</option>
																<option value="内存">内存</option>
															</select>
														</div>
														<div class="col-lg-8 col-sm-8 attr_value1">
															<div class="radio">
																<input type="checkbox" class="icheckbox" checked><label>Yellow</label>
															</div>
															<div class="radio">
																<input type="checkbox" class="icheckbox" checked><label>blue</label>
															</div>
															<div class="radio">
																<input type="checkbox" class="icheckbox" checked><label>green</label>
															</div>
														</div>
													</div>


												</div>

												<div class="row" style="margin-top: 30px;" id="edit_attr">

													<div class="col-lg-8 col-sm-8">
														<table class="table table-bordered table-striped table-condensed">
															<thead>
																<tr>
																	<th></th>
																	<th>颜色</th>
																	<th>内存</th>
																	<th>规格编号</th>
																	<th>图片</th>
																	<th>操作</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>黄色 </td>
																	<td>$1.38</td>
																	<td>-0.01</td>
																	<td>-0.36%</td>
																	<td>$1.39</td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>黄色 </td>
																	<td>$1.15</td>
																	<td>  +0.02</td>
																	<td>1.32%</td>
																	<td>$1.14</td>
																</tr>
																<tr>
																	<td>3</td>
																	<td>蓝色</td>
																	<td>$0.72</td>
																	<td>0.00</td>
																	<td>0.00%</td>
																	<td>$0.73</td>
																</tr>

															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</fieldset>
							<fieldset title="第二步">
								<legend>详细属性</legend>
								<div class="form-group">
									<!--商品属性模版-->
									<section>
										<header class="panel-heading"> 商品类型 </header>
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-4 col-sm-4"></div>
												<div class="col-lg-4 col-sm-4">
													<label style="float:left; margin-top: 7px;"><span class="star">*</span>商品类别</label>
													<div class="col-lg-6">
														<select class="form-control" id="goods_category">
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
											<!--用于不同类型的模版展示-->
											<div class="row" id="tmp">

											</div>
										</div>
									</section>
								</div>
							</fieldset>
							<fieldset title="第三步">
								<legend>商品描述</legend>
								<div class="form-group">
									<!--商品描述-->
									<section>
										<header class="panel-heading"> 商品简单描述 </header>
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-2 col-sm-2"></div>
												<div class="col-lg-8 col-sm-8">
													<label style="float:left; margin-top: 7px;"><span class="star">*</span>简单描述</label>
													<div class="col-lg-8">
														<textarea rows="6" class="form-control"></textarea>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section>
										<header class="panel-heading"> 商品详细描述 </header>
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-2 col-sm-2"></div>
												<div class="col-lg-8 col-sm-8">
													<label style="float:left; margin-top: 7px;"><span class="star">*</span>详细描述</label>
													<div class="col-lg-8">
														<textarea rows="10" class="form-control"></textarea>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</fieldset>
							<button type="submit" class="finish btn btn-info btn-extend"> 提交 </button>
						</form>
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
<script src="<?php echo $this->getThemesUrl();?>/js/switchery/switchery.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/select2/select2.full.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/select2/zh-CN.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/iCheck/jquery.icheck.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/jquery.stepy.js"></script>
<script>
	$('#kucun').spinner({value:0, step: 5, min: 0, max: 10000});

	var elem = document.querySelector(".js-switch");
	var switchery= new Switchery( elem,{color : '#f8ac59'});
	change_attr_view();
	$('#is_more_attr').change(function(event) {
		change_attr_view();
	});

	$('.radio input').iCheck({
		checkboxClass: 'icheckbox_flat-yellow',
		radioClass: 'iradio_flat-yellow'
	});

	$('.select2').select2({
		'language':'zh-CN'
	});
	//判断是否有多规格
	function change_attr_view(){
		if($('#is_more_attr').prop('checked')){	
			$('.attr1').show();
			$('.attr_value1').hide();
			$('.attr_select1').change(function(){
				$('.attr_value1').show();
			});
		}else{
			$('.attr1').hide();
		}
	}

	$(function() {
		$('#stepy_form').stepy({
			backLabel: '上一步',
			nextLabel: '下一步',
			errorImage: true,
			block: true,
			description: true,
			legend: false,
			titleClick: true,
			titleTarget: '#top_tabby',
			// validate: true
		});
		// $('#stepy_form').validate({
		// 	errorPlacement: function(error, element) {
		// 		$('#stepy_form div.stepy-error').append(error);
		// 	},
		// 	rules: {
		// 		'name': 'required',
		// 		'email': 'required'
		// 	},
		// 	messages: {
		// 		'name': {
		// 			required: 'Name field is required!'
		// 		},
		// 		'email': {
		// 			required: 'Email field is requerid!'
		// 		}
		// 	}
		// });
	});


</script>
</body>
</html>
