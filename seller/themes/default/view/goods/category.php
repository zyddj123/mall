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
				<h3>商品类别管理</h3>
				<ul class="breadcrumb">
					<li>
						<a href="#">商品类别管理</a>
					</li>
					<li class="active"> 商品类别管理 </li>
				</ul>
			</div>

			<!-- content -->
			<div class="wrapper">
				<section class="panel panel-default">
					<header class="panel-heading">
						<h3 class="panel-title">商品类别</h3>
					</header>
					<div class="panel-body">
						<!--基本信息-->
						<section>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<button class="btn btn-warning" id="btn4" type="button">添加商品类别</button>
									</div>
								</div><br>
								<div class="row">
									<div class="col-lg-8">
										<table class="table table-bordered table-striped table-condensed" id="goods_category">
											<thead>
												<tr>
													<th>#</th>
													<th>商品类型名称</th>
													<!-- <th>属性数量</th> -->
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
								<h4 class="modal-title">属性列表</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<button class="btn btn-warning" id="btn4" type="button">添加属性</button>
									</div>
								</div><br>
								<div class="row" style="padding-left: 20px;padding-right: 20px;">
									<input type="hidden" id="hidden_category_id" value="">
									<table class="table table-bordered table-striped table-condensed">
										<thead>
											<tr>
												<th>#</th>
												<th>商品类型</th>
												<th>属性名称</th>
												<th>排序</th>
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
								<button type="button" class="btn btn-success">保存</button>
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
	var table = $("#goods_category").DataTable({
		order:[],
		page: false,
		serverSide:true,
		info: true,
		autoWidth: false,
		searching:true,
		ajax: "<?php echo $this->config->app_url_root.'/Goods/ajax_goods_category'?>",
		columns: [{
			data: null,
			targets: 0
		},{
			data: "category_name",
		},
		// {
		// 	data: "",
		// },
		{
			data: "null",
		}],
		columnDefs: [{
			targets: -1,
			data: null,
			defaultContent: '<center><a href="#attr_dialog" class="edit_btn" data-toggle="modal"><i class="fa fa-edit"></i>编辑属性模版</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="text-danger"><i class="fa fa-trash-o"></i>删除</a></center>',
		},{ 
			"orderable": false, "targets": [0,-1],
		}],
		createdRow: function(row, data, index) {
			$(row).data('id', data.id);
			// console.log($(row).data('id'));
			// console.log(index);
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

	//编辑属性模版点击事件
	$('body').on("click",".edit_btn",function(){
		$('#attr_table').empty();
		$('#pagination2').empty();
		var category_id = $(this).closest('tr').data('id');
		$('#hidden_category_id').val(category_id);
		ajax_get_tmp_key(category_id);
	});
	function ajax_get_tmp_key(category_id){
		$.post("<?php echo $this->config->app_url_root.'/Goods/ajax_category_get_templet_key_count'?>",{"category_id":category_id},function(tot){
			tot = Number(tot);
			$.jqPaginator('#pagination2', {
				totalCounts:tot,
				pageSize:10,
				onPageChange: function (num, type,pageSize) {
					var start = (num-1)*pageSize;
					$.post("<?php echo $this->config->app_url_root.'/Goods/ajax_category_get_templet_key'?>",{"category_id":category_id,"start":start,"ppc":pageSize},function(e){
						e = JSON.parse(e);
						var str = '';
						if(e){
							var i = 1;
							for(v in e){
								str += '<tr id="'+e[v].id+'">';
								str += '<td>'+i+'</td>';
								str += '<td>'+e[v].category_name+'</td>';
								str += '<td>'+e[v].tmp_key+'</td>';
								str += '<td>'+e[v].sort+'</td>';
								str += '<td><center><a href="#"><i class="fa fa-edit"></i>编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="text-danger"><i class="fa fa-trash-o"></i>删除</a></center></td>';
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
		});
	}
</script>
</body>
</html>
