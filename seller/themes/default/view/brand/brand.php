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
	<link href="<?php echo $this->getThemesUrl();?>/js/datatable/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $this->getThemesUrl();?>/js/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">
	<style>
	div.dataTables_wrapper div.dataTables_filter {
		text-align: -webkit-auto;
	}
	td.details-control {
		background: url('<?php echo $this->getThemesUrl();?>/js/datatable/images/details_open.png') no-repeat center center;
		cursor: pointer;
	}
	tr.shown td.details-control {
		background: url('<?php echo $this->getThemesUrl();?>/js/datatable/images/details_close.png') no-repeat center center;
	}
</style>
</head>
<body class="sticky-header">
	<section>
		<div class="left-side sticky-left-side">
			<!-- logo -->
			<?php @include_once $this->getThemesPath().'/view/common/logo.php';?>
			<div class="left-side-inner">
				<!-- menu -->
				<?php @include_once $this->getThemesPath().'/view/common/menu.php';?>   
			</div>
		</div>
		<div class="main-content" >

			<!-- top -->
			<?php @include_once $this->getThemesPath().'/view/common/top.php';?>
			<div class="page-heading">
				<h3>商品品牌管理</h3>
				<ul class="breadcrumb">
					<li>
						<a href="#">商品品牌管理</a>
					</li>
					<li class="active"> 商品品牌管理 </li>
				</ul>
			</div>

			<!-- content -->
			<div class="wrapper">
				<section class="panel panel-default">
					<header class="panel-heading">
						<h3 class="panel-title">商品品牌</h3>
					</header>
					<div class="panel-body">
						<!--基本信息-->
						<section>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-8 col-sm-8" style="display: -webkit-box;">
										<a href="#brand_dialog" data-toggle="modal" class="btn btn-warning" id="add_brand">添加商品品牌</a>
										<div id="add_category_div" class="form-inline" style="display: none">
											<input style="margin-left: 30px;" type="text" class="form-control" id="input_category_name" placeholder="商品品牌名称">&nbsp;&nbsp;
											<button class="btn btn-warning" id="add_category_btn" type="button">添加</button>
										</div>
									</div>
								</div><br>
								<div class="row">
									<div class="col-lg-10">
										<table class="display table table-bordered" id="goods_brand">
											<thead>
												<tr>
													<th>#</th>
													<th>品牌名称</th>
													<th>品牌图标</th>
													<th>品牌站点</th>
													<th>描述</th>
													<th>操作</th>
												</tr>
											</thead>
											<tbody>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</section>
						<!-- Modal -->
						<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="brand_dialog" class="modal fade">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
										<h4 class="modal-title" id="modal_title"></h4>
									</div>
									<form class="form-horizontal" role="form" id="modal_form" method="post" action="" enctype="multipart/form-data">
										<div class="modal-body">
											<div class="row">
												<div><center style="font-size: 20px;margin-bottom: 15px;color: darkgreen;font-style: oblique;"><span id="mes" style=""></span></center></div>
												<input type="hidden" name="brand_id" id="brand_id">
												<div class="form-group">
													<label for="brand_name" class="col-lg-2 col-sm-2 control-label">品牌名称</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="品牌名称">
													</div>
												</div>
												<div class="form-group">
													<label for="site_url" class="col-lg-2 col-sm-2 control-label">品牌站点</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="site_url" id="site_url" placeholder="品牌站点">
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-2 col-sm-2 control-label">品牌描述</label>
													<div class="col-sm-9">
														<textarea rows="6" class="form-control" name="brand_desc" id="brand_desc"></textarea>
													</div>
												</div>
												<div class="form-group last">
													<label class="control-label col-lg-2 col-sm-2">品牌图标</label>
													<div class="col-md-9">
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
																<img id="brand_logo_img" src="" alt="">
															</div>
															<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
															<div>
																<span class="btn btn-default btn-file">
																	<span class="fileupload-new"><i class="fa fa-paper-clip"></i>选择图片</span>
																	<span class="fileupload-exists"><i class="fa fa-undo"></i> 更改</span>
																	<input type="file" class="default" name="brand_logo" id="brand_logo">
																</span>
																<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> 移除</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
											<button type="submit" id="modal_btn" class="btn btn-success">保存</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- modal -->
					</div>
				</section>
			</div>
		</div>
		<!-- footer -->
		<?php @include_once $this->getThemesPath().'/view/common/footer.php';?>
	</div>
</section>
<?php @include_once $this->getThemesPath().'/view/common/commonjs.php';?>
<script src="<?php echo $this->getThemesUrl();?>/js/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/datatable/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/validate/jquery.validate.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/validate/messages_zh.min.js"></script>
<script>
	var table = $("#goods_brand").DataTable({
		order:[["1","desc"]],
		page: false,
		serverSide:true,
		info: true,
		autoWidth: false,
		searching:true,
		ajax: "<?php echo $this->config->app_url_root.'/Brand/ajax_brand'?>",
		columns: [{
			"data": null,
			"targets": 0
		},{
			"data": "brand_name",
		},{
			"class": "brand_logo",
			"data": "brand_logo",
		},{
			data: "site_url",
		},{
			"class": 'details-control',
			"orderable": false,
			"data": null,
			"defaultContent": ''
		},{
			"data": null,
		}],
		columnDefs: [{
			targets: -1,
			data: null,
			defaultContent: '<center><a href="#brand_dialog" class="edit_btn" data-toggle="modal"><i class="fa fa-edit"></i>编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="text-danger del_btn"><i class="fa fa-trash-o"></i>删除</a></center>',
		},{ 
			"orderable": false, "targets": [0,2,-1], //设置第1、第3、最后一列不可排序
		}],
		createdRow: function(row, data, index) {
			$(row).data('id', data.id);
			// console.log($(row).data('id'));
			// console.log(index);
			$(row).find('.brand_logo').empty().append('<img style="height:25px;" src = "<?php echo SellerConfig::BRAND_LOGO;?>'+data.brand_logo+'">');
			if(data.store_id==0){
				$(row).find('.edit_btn').attr('class','text-warning').css('cursor','not-allowed').css('text-decoration','none').attr('href','javascript:void(0)').attr('title','系统预设项不能编辑').find('i').attr('class','fa fa-ban');
				$(row).find('.del_btn').attr('class','text-warning').css('cursor','not-allowed').css('text-decoration','none').attr('title','系统预设项不能删除').find('i').attr('class','fa fa-ban');
			}
		},
		"fnDrawCallback": function(){
			　　var api = this.api();
			　　var startIndex= api.context[0]._iDisplayStart;
			　　api.column(0).nodes().each(function(cell, i) {
				cell.innerHTML = startIndex + i + 1;
			　　}); 
		},
		language: {  
			url: '<?php echo $this->getThemesUrl();?>/js/datatable/i18n/zh-cn.json'
		},
	});

	//显示附加信息
	$('#goods_brand').on('click', 'td.details-control', function () {
		var tr = $(this).closest('tr');
		var row = table.row( tr );
		if ( row.child.isShown() ) {
			row.child.hide();
			tr.removeClass('shown');
		}else {
			row.child( format(row.data()) ).show();
			tr.addClass('shown');
		}
	} );
	//附加信息模版
	function format ( d ) {
		return '<div class="text-success" style="background-color: #eff0f4;font-size:20px;">'+d.brand_desc+'</div>';
	}
	//编辑按钮事件
	$('body').on('click','.edit_btn',function(){
		var tr = $(this).closest('tr');
		var row = table.row( tr );
		view_data('编辑商品品牌','保存',row.data(),'<?php echo SellerConfig::BRAND_LOGO;?>'+row.data().brand_logo);
	});
	//添加按钮事件
	$('#add_brand').click(function(){
		var data=[];
		view_data('添加商品品牌','添加',data,'<?php echo $this->getThemesUrl();?>/images/no_image.png');
	});

	//数据视图绑定展示
	function view_data(modal_title,modal_btn,data,brand_logo){
		$('#mes').text('');
		$('#modal_title').text(modal_title);
		$('#modal_btn').text(modal_btn);
		$('#brand_id').val(data.id);
		$('#brand_name').val(data.brand_name);
		$('#site_url').val(data.site_url);
		$('#brand_desc').val(data.brand_desc);
		$('#brand_logo_img').attr('src',brand_logo);
	}

	$('#modal_form').validate({
		submitHandler: function(form) {
			var formobj =  document.getElementById("modal_form");
			var res = new FormData(formobj);
			$.ajax({
				url: "<?php echo $this->config->app_url_root.'/Brand/ajax_add_edit_brand'?>",
				type: "POST",
				dataType:"json",            
				data: res,
				cache: false,
				contentType: false,         
				processData: false,
				success: function(e) {
					if(e.mes){
						table.draw();
						$('#mes').text(e.handle+"成功");
					}else{
						$('#mes').text(e.handle+"失败，请重新"+e.handle);
					}
				}
			});
			return false;
		},
		rules: {
			brand_name: "required",
			brand_desc: "required",
			site_url: {
				required: true,
				url: true
			}
		} 
	});

	//删除操作  并不是真的删除 只是brand表中的status项由 1变为 0
	$('body').on('click','.del_btn',function(){
		var tr = $(this).closest('tr');
		var row = table.row( tr );
		var brand_id = row.data().id;
		if(confirm("确定删除该项吗？该操作不可逆")){
			$.post("<?php echo $this->config->app_url_root.'/Brand/ajax_del_brand'?>",{"brand_id":brand_id},function(e){
				if(e){
					alert("删除成功");
					table.draw();
				}else{
					alert("删除失败，请重新删除！");
				}
			});
		}
	});

</script>
</body>
</html>
