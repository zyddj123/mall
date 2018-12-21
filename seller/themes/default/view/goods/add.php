<?php
if (!defined('CO_BASE_CHECK')) {
    header('HTTP/1.1 404 Not Found');
    header('Status: 404 Not Found');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- meta -->
	<?php @include_once $this->getThemesPath().'/view/common/meta.php'; ?>
	<title>添加商品</title>
	<!-- header -->
	<?php @include_once $this->getThemesPath().'/view/common/header.php'; ?>
	<link href="<?php echo $this->getThemesUrl(); ?>/js/select2/select2.min.css" rel="stylesheet">
	<link href="<?php echo $this->getThemesUrl(); ?>/js/iCheck/skins/flat/_all.css" rel="stylesheet">
	<link href="<?php echo $this->getThemesUrl(); ?>/css/jquery.stepy.css" rel="stylesheet">
	<link href="<?php echo $this->getThemesUrl();?>/js/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">
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
			<?php @include_once $this->getThemesPath().'/view/common/logo.php'; ?>
			<div class="left-side-inner">
				<!-- menu -->
				<?php @include_once $this->getThemesPath().'/view/common/menu.php'; ?>   
			</div>
		</div>
		<div class="main-content" >

			<!-- top -->
			<?php @include_once $this->getThemesPath().'/view/common/top.php'; ?>
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
						<form id="stepy_form" enctype="multipart/form-data">
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
														<select class="form-control" name="goods_brand" id="goods_brand">
															<option value="">请选择</option>
															<?php foreach ($brand as $key => $value) :?>
																<option value="<?php echo $value['id']; ?>"><?php echo $value['brand_name']; ?></option>
															<?php endforeach; ?>
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
													<label style="float:left; margin-top: 7px;"><span class="star">*</span>上架下架</label>
													<div class="col-lg-6" style="display: inline-flex;">
														<div class="flat-yellow single-row">
															<div class="radio ">
																<input tabindex="3" type="radio" checked="checked" value="1"  name="is_on_sale">
																<label>上架</label>
															</div>
														</div>
														<div class="flat-red single-row">
															<div class="radio ">
																<input tabindex="3" type="radio" value="0"  name="is_on_sale">
																<label>下架</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-4">
													<label style="float:left; margin-top: 7px;"><span class="star">*</span>选择单位</label>
													<div class="col-lg-6">
														<select class="form-control" name="goods_unit" id="goods_unit">
															<option value="">请选择</option>
															<?php foreach ($unit as $key => $value) :?>
																<option value="<?php echo $value['id']; ?>"><?php echo $value['unit_name']; ?></option>
															<?php endforeach; ?>
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
									<!--展示图片-->
									<section>
										<header class="panel-heading"> 展示图片 </header>
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-4 col-sm-4">
													<div class="col-md-9">
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
																<img id="goods_img" src="" alt="">
															</div>
															<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
															<div>
																<span class="btn btn-default btn-file">
																	<span class="fileupload-new"><i class="fa fa-paper-clip"></i>选择图片</span>
																	<span class="fileupload-exists"><i class="fa fa-undo"></i> 更改</span>
																	<input type="file" class="default" name="goods_img" id="goods_img">
																</span>
																<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> 移除</a>
															</div>
														</div>
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
														<span style="margin-left: 10px;color: #f8ac59">商品多规格</span>
														<span><i class="fa fa-hand-o-right"></i>跳转到
															<a href="javascript:void(0)">规格管理</a>
														</span>&nbsp;&nbsp;&nbsp;
														<span id="add_attr_btn"><i class="fa fa-plus"></i><a href="javascript:void(0)">添加规格</a></span>&nbsp;&nbsp;&nbsp;
														<span><i class="fa fa-plus"></i><a href="#model" data-toggle="modal">批量添加库存/售价</a></span>
													</div>
												</div><br>
												<div class="row" id="attr">
													<!-- <div class="col-lg-4 col-sm-4 attr1">
														<div class="col-lg-8 col-sm-8 select2_d1">
															<select class="select2 form-control attr_select1" style="width:60%">
																<option value="">请选择</option>
																<?php foreach ($attr_key as $key => $value) :?>
																	<option value="<?php echo $value['id']; ?>"><?php echo $value['attr_key_name']; ?></option>
																<?php endforeach; ?>
															</select>
														</div>
														<div class="col-lg-8 col-sm-8 attr_value1">

														</div>
													</div>-->


												</div>

												<div class="row" style="margin-top: 30px;" id="edit_attr">
													
													<div class="col-lg-10 col-sm-10">
														<table class="table table-bordered table-striped table-condensed" id="table_data">
															
														</table>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</fieldset>
							<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="model" class="modal fade" style="display: none;">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
											<h4 class="modal-title">批量添加库存/售价</h4>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label for="piliang_stock" class="col-lg-2 col-sm-2 control-label" style="margin-top:8px;">批量库存</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" id="piliang_stock">
												</div>
											</div><br><br>
											<div class="form-group">
												<label for="piliang_price" class="col-lg-2 col-sm-2 control-label" style="margin-top:8px;">批量售价</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" id="piliang_price">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
											<button type="button" id="piliang_add_btn" class="btn btn-success">添加</button>
										</div>
									</div>
								</div>
							</div>
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
													<div class="col-lg-6" style="margin-left: 12px;">
														<select class="form-control" name="goods_category" id="goods_category">
															<option value="">请选择</option>
															<?php foreach ($category as $key => $value) :?>
																<option value="<?php echo $value['id']; ?>"><?php echo $value['category_name']; ?></option>
															<?php endforeach; ?>
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
														<textarea rows="6" class="form-control" name="goods_brief"></textarea>
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
														<textarea rows="10" class="form-control" name="goods_desc"></textarea>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</fieldset>
							<button type="submit" id="sub_btn" class="finish btn btn-info btn-extend"> 提交 </button>
						</form>
					</div>
				</section>
			</div>
		</div>
		<!-- footer -->
		<?php @include_once $this->getThemesPath().'/view/common/footer.php'; ?>
	</div>
</section>
<?php @include_once $this->getThemesPath().'/view/common/commonjs.php'; ?>
<script src="<?php echo $this->getThemesUrl(); ?>/js/select2/select2.full.min.js"></script>
<script src="<?php echo $this->getThemesUrl(); ?>/js/select2/zh-CN.js"></script>
<script src="<?php echo $this->getThemesUrl(); ?>/js/iCheck/jquery.icheck.min.js"></script>
<script src="<?php echo $this->getThemesUrl(); ?>/js/jquery.stepy.js"></script>
<script src="<?php echo $this->getThemesUrl(); ?>/js/validate/jquery.validate.min.js"></script>
<script src="<?php echo $this->getThemesUrl(); ?>/js/validate/messages_zh.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script>
	$('#kucun').spinner({value:0, step: 5, min: 0, max: 10000});

	var attr_count = 1;
	var attr_data = {'attr_key':{},'attr_value':{}};
	$('.radio input').iCheck({
		checkboxClass: 'icheckbox_flat-yellow',
		radioClass: 'iradio_flat-yellow'
	});

	//添加规格按钮点击事件
	$('#add_attr_btn').click(function(){
		draw_attr_div(attr_count);
		draw_attr_value_div(attr_count);
		++attr_count;
	});

	//绘制规格名称选择框
	function draw_attr_div(id){
		str = '<div class="col-lg-3 col-sm-3 m-bot15 attr'+id+'">';
		str += '<div class="col-lg-8 col-sm-8 select2_d'+id+'">';
		str += '<select class="select2 form-control attr_select'+id+'" style="width:60%">';
		str += '<option value="">请选择</option>';
		str += '<?php foreach ($attr_key as $key => $value) :?>';
		str += '<option value="<?php echo $value['id']; ?>"><?php echo $value['attr_key_name']; ?></option>';
		str += '<?php endforeach; ?>';
		str += '</select></div>';
		str += '<div class="col-lg-8 col-sm-8 attr_value'+id+'">';
		str += '</div></div>';
		$('#attr').append(str);
		$('.select2').select2({
			'language':'zh-CN'
		});
	}

	//绘制规格名称选择框下的具体规格值
	function draw_attr_value_div(id){
		$('.attr_select'+id).change(function(){
			var attr_id = $('.attr_select'+id).val();
			var data_attr_value = get_value(attr_id);
			var str = '';
			str += '<div id="insert_attr_value'+id+'"><input type="text" style="width:50%; margin-top: 5px;"> <a>添加</a></div>';
			$.each(data_attr_value,function(index, el) {
				str += '<div class="radio">';
				str += '<input type="checkbox" class="icheckbox attr_value_icheckbox" value="'+el.id+'" attr_id='+attr_id+' checked><label>'+el.value+'</label></div>';
			});
			str += '&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" id="create_attr_table_btn'+id+'" style="margin-bottom:5px;">确定</a>';

			$('.attr_value'+id).empty().append(str).css('background-color','#eff0f4').css('padding-bottom','10px').show();

			$('.radio input').iCheck({
				checkboxClass: 'icheckbox_flat-yellow',
				radioClass: 'iradio_flat-yellow'
			});

			$('#edit_attr').show();

			//确认按钮按下操作
			$('#create_attr_table_btn'+id).click(function(){
				$('#insert_attr_value'+id).hide();//添加属性的div隐藏
				$('#create_attr_table_btn'+id).hide();//确定按钮隐藏
				$('.attr_value'+id+' .attr_value_icheckbox:not(:checked)').each(function(){
					$(this).closest('.radio').remove(); //移除未选中项
				});
				$('.attr_value'+id).css('background-color','#FFF');//背景颜色变回正常
				$('.attr_value'+id+' .attr_value_icheckbox:checked').each(function(i,e){
					var _attr_num = $(this).closest('.attr'+id).find('option:selected').val();
					var _attr_key = $(this).closest('.attr'+id).find('option:selected').text();
					var _attr_value_num = $(this).val();
					var _attr_value = $(this).closest('.icheckbox_flat-yellow').next('label').text();
					attr_data.attr_key[_attr_num]= _attr_key;
					if(!attr_data.attr_value[_attr_num]) attr_data.attr_value[_attr_num] = {};
					attr_data.attr_value[_attr_num][_attr_value_num] = _attr_value;
					$(this).closest('.icheckbox_flat-yellow').remove(); //移除icheckbox
				});

				//attr_data = {'attr_key':{'1':'颜色','2':'内存','3':'尺码'},'attr_value':{'1':{'1':'银色','2':'黑色','3':'蓝色','4':'红色'},'2':{'5':'32G','6':'64G'},'3':{'8': "36码", '9': "37码", '10': "38码"}}};
				
				//处理数据
				var mm = data_handle(attr_data,attr_count-1);
				// console.log(mm);
				var str = '';
				str += '<thead><tr>';
				// str += '<th>#</th>';
				for(var p in attr_data.attr_key){
					str += '<th class="attr_key_aaa" attr_key_id='+p+'>'+attr_data.attr_key[p]+'</th>';
				}
				str += '<th>库存</th>';
				str += '<th>售价</th>';
				str += '<th>图片</th>';
				str += '<th>操作</th>';
				str += '</tr></thead>';
				str += '<tbody id="table_data_tbody">';
				// var t = 1;
				for( var k in mm){
					var key = k.split('_');
					var value = mm[k].split('_');
					str += '<tr attr_value_id_arr='+key+' attr_value_arr='+value+'>';
					// str += '<td>'+t+'</td>';
					for(var j in key){
						str += '<td>'+value[j]+'</td>';
					}
					str += '<td style="width:10%"><input type="text" class="stock"></td>';
					str += '<td style="width:10%"><input type="text" class="price"></td>';
					str += '<td style="display:-webkit-box;height:47px;"><input type="file" class="attr_img" value="上传"><div class="result" style="margin-top:-10px;margin-bottom:-10px;height:45px;"></div></td>';
					str += '<td><center><button class="btn btn-danger btn-xs remove_btn" type="button">移除</button></center></td>';
					str += '</tr>';
					// t++;
				}
				str += '</tbody>';
				$('#table_data').empty().append(str);
			});
			
		});
	}

	//上传图片并展示
	$('body').on("change",".attr_img",function(){
		var file = $(this)[0].files[0];
		var res_div = $(this)[0];
		if(!/image\/\w+/.test(file.type)){  
			alert("看清楚，这个需要图片！");  
			return false;
		}
		if(file.size>10485760){
			alert("图片不能超过10M");
			return false;
		}
		var reader = new FileReader();
    	//将文件以Data URL形式读入页面  
    	reader.readAsDataURL(file);  
    	reader.onload=function(e){
    		$(res_div).next('.result').empty().append('<img style="height:45px;width:45px" src="' + this.result +'" alt="" />');
    	}
    });

	//移除按钮操作
	$('body').on("click",".remove_btn",function(){
		$(this).closest('tr').remove();
	});

	//批量操作按钮
	$('#piliang_add_btn').click(function(event) {
		var piliang_price = $('#piliang_price').val();
		var piliang_stock = $('#piliang_stock').val();
		$('.stock').val(piliang_stock);
		$('.price').val(piliang_price);
	});

	//处理数据
	// function data_handle(data,attr_count){
	// 	var dad = [];
	// 	$.each(data.attr_value,function(index, el) {
	// 		dad.push(el);
	// 	});
	// 	var tmp_a = [];
	// 	tmp_a = dad[0];
	// 	var res = [];
	// 	switch(attr_count){
	// 		case 1:
	// 		res = tmp_a;
	// 		break;
	// 		case 2:
	// 		var tmp_b = [];
	// 		tmp_b = dad[1];
	// 		$.each(tmp_a,function(index, el) {
	// 			$.each(tmp_b,function(x, e) {
	// 				res[index+'_'+x] = el+'_'+e;
	// 			});
	// 		});
	// 		break;
	// 		case 3:
	// 		var tmp_b = [];
	// 		tmp_b = dad[1];
	// 		var tmp_c = [];
	// 		tmp_c = dad[2];
	// 		$.each(tmp_a,function(index, el) {
	// 			$.each(tmp_b,function(x, e) {
	// 				$.each(tmp_c,function(k, v) {
	// 					res[index+'_'+x+'_'+k] = el+'_'+e+'_'+v;
	// 				});
	// 			});
	// 		});
	// 		// case 4:
	// 		default:
	// 	}
	// 	return res;
	// }
	
	//处理数据
	function data_handle(data){
		function had(){
			var args=arguments;
			var ret=[];
			for(var i=0;i<args.length;i++){
				ret.push(args[i]);
			}
			return ret.reduce(function (a,b){
				var ret=[];
				for (var i in a) {
					for (var j in b) {
						var tmp=i+'_'+j;
						ret[tmp]=a[i]+'_'+b[j];	
					}		
				}
				return ret;
			});
		}
		var mm =data.attr_value;
		var ret=[];
		for(var i in mm){
			ret.push(mm[i]);
		}
		return had.apply(this,ret);	
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
			validate: true
		});
		
		$('#stepy_form').validate({
			rules: {
				
			},
			submitHandler: function(form) {
				var formobj =  document.getElementById("stepy_form");
				var res = new FormData(formobj);
				var attr_value_id_arr = []; 		//第一步商品规格详情 table内的数据包
				var attr_key_id_arr_tmp = [];
				var attr_key_name_arr_tmp = [];
				$('.attr_key_aaa').each(function(){
					attr_key_id_arr_tmp.push($(this).attr('attr_key_id'));
					attr_key_name_arr_tmp.push($(this).text());
				});
				$('#table_data_tbody tr').each(function(){
					var aa = {};
					aa.attr_value_id = $(this).attr('attr_value_id_arr'); //  "3,7"
					aa.attr_value_arr = $(this).attr('attr_value_arr'); //   "银色,32G"
					aa.attr_key_id_arr = attr_key_id_arr_tmp;
					aa.attr_key_name_arr = attr_key_name_arr_tmp;
					aa.stock = $(this).find('.stock').val();
					aa.price = $(this).find('.price').val();
					aa.img = $(this).find('img').attr('src');
					if(typeof aa.img=='undefined'){
						aa.img = '';
					}
					attr_value_id_arr.push(aa);
				});
				var tmp_value_arr = [];                  //第二步商品类型数据包
				$('#tmp input').each(function(){
					var bb = {};
					bb.tmp_value_id = $(this).attr('id');
					bb.tmp_value = $(this).val();
					tmp_value_arr.push(bb);
				});
				res.append('goods_sku',JSON.stringify(attr_value_id_arr));
				res.append('goods_tmp',JSON.stringify(tmp_value_arr));
				$.ajax({
					url: "<?php echo $this->config->app_url_root.'/Goods/ajax_goods_add'; ?>",
					type: "POST",
					dataType:"json",
					data: res,
					cache: false,
					contentType: false,
					processData: false,
					success:function(e){
						if(e){
							alert("添加成功");
							window.location.href = '<?php echo $this->config->app_url_root.'/Goods/goods_index'; ?>';
						}else{
							alert("添加失败，请重新添加");
						}
					}
				});
			},
		});
	});
</script>
</body>
</html>