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
	<title>商品规格管理</title>
	<!-- header -->
	<?php @include_once $this->getThemesPath().'/view/common/header.php';?>
	<link href="<?php echo $this->getThemesUrl();?>/js/datatable/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<style>
	div.dataTables_wrapper div.dataTables_filter {
		text-align: -webkit-auto;
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
				<h3>商品规格管理</h3>
				<ul class="breadcrumb">
					<li>
						<a href="#">商品规格管理</a>
					</li>
					<li class="active"> 商品规格管理 </li>
				</ul>
			</div>

			<!-- content -->
			<div class="wrapper">
				<section class="panel panel-default">
					<header class="panel-heading">
						<h3 class="panel-title">商品规格</h3>
					</header>
					<div class="panel-body">
						<!--基本信息-->
						<section>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-8 col-sm-8" style="display: -webkit-box;">
										<button class="btn btn-warning" id="add_attr_key" type="button">添加商品规格</button>
										<div id="add_attr_key_div" class="form-inline" style="display: none">
											<input style="margin-left: 30px;" type="text" class="form-control" id="input_attr_key_name" placeholder="商品规格名称">&nbsp;&nbsp;
											<button class="btn btn-warning" id="add_attr_key_btn" type="button">添加</button>
										</div>
									</div>
								</div><br>
								<div class="row">
									<div class="col-lg-8">
										<table class="table table-bordered table-striped table-condensed" id="goods_attr">
											<thead>
												<tr>
													<th>#</th>
													<th>规格名称</th>
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
					</div>
				</section>
				<!-- Modal -->
				<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="attr_dialog" class="modal fade">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
								<h4 class="modal-title">规格值列表</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-10 col-sm-10" style="display: -webkit-box;">
										<button class="btn btn-warning" id="add_attr_value" type="button">添加规格值</button>
										<div id="add_attr_value_div" class="form-inline" style="display: none">
											<input style="margin-left: 30px;" type="text" class="form-control" id="input_attr_value_name" placeholder="规格值">
											<button class="btn btn-warning" id="add_attr_value_btn" type="button">添加</button>
										</div>
									</div>
								</div><br>
								<div class="row" style="padding-left: 20px;padding-right: 20px;">
									<input type="hidden" id="hidden_attr_key_id" value="">
									<table class="table table-bordered table-striped table-condensed">
										<thead>
											<tr>
												<th>#</th>
												<th>规格名称</th>
												<th>规格值</th>
												<th>操作</th>
											</tr>
										</thead>
										<tbody id="attr_table">
											
										</tbody>  
									</table>
									<center><div class="pagination" id="pagination2"></div></center>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
							</div>
						</div>
					</div>
				</div>
				<!-- modal -->
			</div>
		</div>
		<!-- footer -->
		<?php @include_once $this->getThemesPath().'/view/common/footer.php';?>
	</div>
</section>
<?php @include_once $this->getThemesPath().'/view/common/commonjs.php';?>
<script src="<?php echo $this->getThemesUrl();?>/js/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/datatable/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/jqPaginator.js"></script>
<script>
	var table = $("#goods_attr").DataTable({
		order:[],
		page: false,
		serverSide:true,
		info: true,
		autoWidth: false,
		searching:true,
		ajax: "<?php echo $this->config->app_url_root.'/Attr/ajax_goods_attr'?>",
		columns: [{
			data: null,
			targets: 0
		},{
			data: "attr_key_name",
		},{
			data: "null",
		}],
		columnDefs: [{
			targets: -1,
			data: null,
			defaultContent: '<center><a href="#attr_dialog" class="edit_btn" data-toggle="modal"><i class="fa fa-edit"></i>编辑规格值</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="text-danger del_btn"><i class="fa fa-trash-o"></i>删除</a></center>',
		},{ 
			"orderable": false, "targets": [0,-1],
		}],
		createdRow: function(row, data, index) {
			$(row).data('id', data.id);
			// console.log($(row).data('id'));
			// console.log(index);
			if(data.store_id==0){
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
		}
	});

	//编辑规格值点击事件
	$('body').on("click",".edit_btn",function(){
		$('#attr_table').empty();
		$('#pagination2').empty();
		var attr_key_id = $(this).closest('tr').data('id');
		$('#hidden_attr_key_id').val(attr_key_id);
		ajax_get_tmp_key(attr_key_id);
	});

	//编辑规格值 编辑按钮操作(模态框内部)
	$('body').on("click",".edit_tmp_key_btn",function(){
		var category_id = $('#hidden_attr_key_id').val();
		var td_tmp_key = $(this).closest('tr').find('.tmp_key');
		var td_tmp_key_val = td_tmp_key.text();
		var td_edit_tmp_key_btn = $(this).closest('tr').find('.edit_tmp_key_btn');
		td_edit_tmp_key_btn.attr('class','save_tmp_key_btn').html('<i class="fa fa-check"></i>保存');
		$(this).closest('tr').find('.del_tmp_key_btn').attr('class','cancel_edit_tmp_key_btn').html('<i class="fa fa-times"></i>取消');
		td_tmp_key.empty().append('<input type="text" class="tmp_key_input" value="'+td_tmp_key_val+'">');
		$('body').on('click','.save_tmp_key_btn',function(){
			var tmp_key_id = $(this).closest('tr').attr('id');
			var input_tmp_key = $(this).closest('tr').find('.tmp_key_input');
			var input_tmp_key_val = input_tmp_key.val();
			var td_save_tmp_key_btn = $(this).closest('tr').find('.save_tmp_key_btn');
			if(input_tmp_key_val!=''){
				$.post("<?php echo $this->config->app_url_root.'/Attr/ajax_edit_attr_value'?>",{"tmp_key_id":tmp_key_id,"tmp_key":input_tmp_key_val},function(e){
					if(e){
						td_tmp_key.empty().append(input_tmp_key_val);
						td_save_tmp_key_btn.attr('class','edit_tmp_key_btn').html('<i class="fa fa-edit"></i>编辑');
						ajax_get_tmp_key(category_id);
					}else{
						alert("修改失败，请重新保存");
					}
				});
			}else{
				alert("输入不能为空！");
			}
		});
		$('body').on('click','.cancel_edit_tmp_key_btn',function(){
			td_tmp_key.empty().append(td_tmp_key_val);
			$(this).closest('tr').find('.save_tmp_key_btn').attr('class','edit_tmp_key_btn').html('<i class="fa fa-edit"></i>编辑');
			$(this).attr('class','del_tmp_key_btn').addClass('text-danger').html('<i class="fa fa-trash-o"></i>删除');
		});

	});

	//属性模版的取值填充
	function ajax_get_tmp_key(attr_id){
        $('#attr_table').empty();
		$.post("<?php echo $this->config->app_url_root.'/Attr/ajax_attr_key_count'?>",{"attr_id":attr_id},function(tot){
			tot = Number(tot);
			if(tot==0){
				$('#pagination2').empty().append('此商品类型下暂无商品属性，请添加');
			}else{
				$.jqPaginator('#pagination2', {
					totalCounts:tot,
					pageSize:5,
					onPageChange: function (num, type,pageSize) {
						var start = (num-1)*pageSize;
						$.post("<?php echo $this->config->app_url_root.'/Attr/ajax_attr_key'?>",{"attr_id":attr_id,"start":start,"ppc":pageSize},function(e){
							e = JSON.parse(e);
							var str = '';
							if(e){
								var i = 1;
								for(v in e){
									str += '<tr id="'+e[v].id+'">';
									str += '<td>'+i+'</td>';
									str += '<td>'+e[v].attr_key_name+'</td>';
									str += '<td class="tmp_key">'+e[v].value+'</td>';
									str += '<td><center>';
									if(e[v].store_id==0){
										str += '<a href="javascript:void(0)" style="cursor:not-allowed;text-decoration:none;" class="text-warning" title="系统预设项不能编辑"><i class="fa fa-ban"></i>编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="text-warning" style="cursor:not-allowed;text-decoration:none;" title="系统预设项不能删除"><i class="fa fa-ban"></i>删除</a>';
									}else{
										str += '<a href="javascript:void(0)" class="edit_tmp_key_btn"><i class="fa fa-edit"></i>编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="text-danger del_tmp_key_btn"><i class="fa fa-trash-o"></i>删除</a>';
									}
									str += '</center></td>';
									str += '</tr>';
									i++;
								}
								$('#attr_table').empty().append(str);
							}else{
								$('#pagination2').empty().append('此商品类型下暂无商品属性，请添加');
							}
						});
					}
				});
			}
		});
	}

	//添加规格名称
	$('#add_attr_key').click(function(){
		$('#add_attr_key_div').toggle('slow');
	});
	//添加规格名称按钮事件
	$('#add_attr_key_btn').click(function(){
		var input_attr_key_name = $('#input_attr_key_name').val();
		if(input_attr_key_name!=''){
			$.post("<?php echo $this->config->app_url_root.'/Attr/ajax_add_attr_key'?>",{"input_attr_key_name":input_attr_key_name},function(e){
				if(e){
					alert("添加成功");
					$('#input_attr_key_name').val('');
					table.draw();
				}else{
					alert("添加失败，请重新添加！");
				}
			});
		}
	});
	//添加规格值事件
	$('#add_attr_value').click(function(){
		$('#add_attr_value_div').toggle('slow');
	});
	//添加商品规格值按钮事件
	$('#add_attr_value_btn').click(function(){
		var input_attr_value_name = $('#input_attr_value_name').val();
		var attr_key_id = $('#hidden_attr_key_id').val();
		if(input_attr_value_name!=''){
			$.post("<?php echo $this->config->app_url_root.'/Attr/ajax_add_attr_value'?>",{"attr_key_id":attr_key_id,"input_attr_value_name":input_attr_value_name},function(e){
				if(e){
					alert("添加成功");
					$('#input_attr_value_name').val('');
					ajax_get_tmp_key(attr_key_id);
				}else{
					alert("添加失败，请重新添加！");
				}
			});
		}
	});

	//删除商品规格名称事件
	$('body').on('click','.del_btn',function(){
		var attr_key_id = $(this).closest('tr').data('id');
		if(confirm("确定删除该项吗？该操作不可逆")){
			$.post("<?php echo $this->config->app_url_root.'/Attr/ajax_del_attr_key'?>",{"attr_key_id":attr_key_id},function(e){
				if(e==1){
					alert("删除成功");
					table.draw();
				}else{
					alert("删除失败，请重新删除！");
				}
			});
		}
	});
	//删除商品规格值事件
	$('body').on('click','.del_tmp_key_btn',function(){
		var attr_key_id = $('#hidden_attr_key_id').val();
		var attr_value_id = $(this).closest('tr').attr('id');
		if(confirm("确定删除该项吗？该操作不可逆")){
			$.post("<?php echo $this->config->app_url_root.'/Attr/ajax_del_attr_value'?>",{"attr_value_id":attr_value_id},function(e){
				if(e){
					alert("删除成功");
					ajax_get_tmp_key(attr_key_id);
				}else{
					alert("删除失败，请重新删除！");
				}
			});
		}
	});
</script>
</body>
</html>
