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
															<option value="">请选择</option>
															<?php foreach($brand as $key => $value) :?>
																<option value="<?php echo $value['id'];?>"><?php echo $value['brand_name'];?></option>
															<?php endforeach;?>
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
															<option value="">请选择</option>
															<?php foreach($unit as $key => $value) :?>
																<option value="<?php echo $value['id'];?>"><?php echo $value['unit_name'];?></option>
															<?php endforeach;?>
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
															<a href="javascript:void(0)">规格管理</a>
														</span>&nbsp;&nbsp;&nbsp;
														<span id="add_attr_btn"><i class="fa fa-plus"></i><a href="javascript:void(0)">添加规格</a></span>
													</div>
												</div><br>
												<div class="row" id="attr">
													<div class="col-lg-4 col-sm-4 attr1">
														<div class="col-lg-8 col-sm-8 select2_d1">
															<select class="select2 form-control attr_select1" style="width:60%">
																<option value="">请选择</option>
																<?php foreach($attr_key as $key => $value) :?>
																	<option value="<?php echo $value['id'];?>"><?php echo $value['attr_key_name'];?></option>
																<?php endforeach;?>
															</select>
														</div>
														<div class="col-lg-8 col-sm-8 attr_value1">

														</div>
													</div>

													<div class="col-lg-4 col-sm-4 attr2">
														<div class="col-lg-8 col-sm-8 select2_d2">
															<select class="select2 form-control attr_select2" style="width:60%">
																<option value="">请选择</option>
																<?php foreach($attr_key as $key => $value) :?>
																	<option value="<?php echo $value['id'];?>"><?php echo $value['attr_key_name'];?></option>
																<?php endforeach;?>
															</select>
														</div>
														<div class="col-lg-8 col-sm-8 attr_value2">

														</div>
													</div>


												</div>

												<div class="row" style="margin-top: 30px;" id="edit_attr">

													<div class="col-lg-8 col-sm-8">
														<table class="table table-bordered table-striped table-condensed" id="table_data">
															
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
															<option value="">请选择</option>
															<?php foreach($category as $key => $value) :?>
																<option value="<?php echo $value['id'];?>"><?php echo $value['category_name'];?></option>
															<?php endforeach;?>
														</select><br>
														<p style="color: #65cea7">请选择商品类型完善商品属性</p><br>
													</div>
													<div class="col-lg-4">
														<span><i class="fa fa-hand-o-right"></i>跳转到
															<a href="#">商品类别</a>
														</span>
													</div>
												</div>
											</div>
											<center></center>
											<!--用于不同类型的模版展示-->
											<div class="row" >
												<div class="col-lg-3 col-sm-3"></div>
												<div class="col-lg-5 col-sm-5" id="tmp">
													
												</div>
												<div class="col-lg-4 col-sm-4"></div>
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
				$('#edit_attr').show();
				var attr_id1 = $('.attr_select1').val();
				var data_attr_value1 = get_value(attr_id1);
				var str = '';
				$.each(data_attr_value1,function(index, el) {
					str += '<div class="radio">';
					str += '<input type="checkbox" class="icheckbox" value="'+el.id+'" checked><label>'+el.value+'</label></div>';
				});
				$('.attr_value1').empty().append(str).show();
				$('.radio input').iCheck({
					checkboxClass: 'icheckbox_flat-yellow',
					radioClass: 'iradio_flat-yellow'
				});
				table_data();
			});

			$('.attr2').show();
			$('.attr_value2').hide();
			$('.attr_select2').change(function(){
				$('#edit_attr').show();
				var attr_id2 = $('.attr_select2').val();
				var data_attr_value2 = get_value(attr_id2);
				var str = '';
				$.each(data_attr_value2,function(index, el) {
					str += '<div class="radio">';
					str += '<input type="checkbox" class="icheckbox" value="'+el.id+'" checked><label>'+el.value+'</label></div>';
				});
				$('.attr_value2').empty().append(str).show();
				$('.radio input').iCheck({
					checkboxClass: 'icheckbox_flat-yellow',
					radioClass: 'iradio_flat-yellow'
				});
				table_data();
			});
		}else{
			$('.attr1').hide();
			$('.attr2').hide();
			$('#edit_attr').hide();
		}
	}

	//ajax获取规格值
	function get_value(attr_id){
		var data;
		$.ajaxSettings.async = false;
		$.post("/Goods/ajax_get_attr_value",{'attr_id':attr_id},function(e){
			data = $.parseJSON(e);
		});
		$.ajaxSettings.async = true;
		return (data)?data:false;
	}

	//规格值的组合并填充表格
	function table_data(){
		var str = '';
		str += '<thead><tr>';
		str += '<th></th>';
		str += '<th>'+$('.attr_select1 option:selected').text()+'</th>';
		str += '<th>'+$('.attr_select2 option:selected').text()+'</th>';
		str += '<th>规格编号</th>';
		str += '<th>图片</th>';
		str += '<th>操作</th>';
		str += '</tr></thead>';
		str += '<tbody>';
		//具体规格的组合排列
		str += '<tr><td></td></tr>';
		str += '</tbody>';
		$('#table_data').empty().append(str);
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

	//添加规格按钮点击事件
	$('#add_attr_btn').click(function(){
		
	});

	/******************第二步 商品属性*****************************/
	$('#goods_category').change(function(){
		var category_id = $('#goods_category').val();
		if(category_id!=0){
			$.post("/Goods/ajax_get_templet_key",{"category_id":category_id},function(e){
				var data = $.parseJSON(e);
				if(data){
					var str = '';
					$.each(data,function(index, el) {
						str += '<div class="form-group">';
						str += '<label class="col-lg-4 col-sm-4 control-label" style="padding-top: 5px;text-align: right;">'+el.tmp_key+'</label>';
						str += '<div class="col-lg-8">';
						str += '<input type="text" class="form-control input-sm m-bot15" id="'+el.id+'"></div></div>';
					});
					$('#tmp').empty().append(str);
				}else{
					$('#tmp').empty().append("<center>此商品类型下暂无商品属性，请添加</center>");
				}
			});
		}else{
			$('#tmp').empty();	
		}
	});

</script>
</body>
</html>