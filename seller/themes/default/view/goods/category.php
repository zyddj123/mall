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
													<th>id</th>
													<th>商品类型名称</th>
													<!-- <th>属性数量</th> -->
													<!-- <th>状态</th> -->
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
									<table class="table table-bordered table-striped table-condensed">
										<thead>
											<tr>
												<th></th>
												<th>商品类型</th>
												<th>属性名称</th>
												<th>排序</th>
												<th>操作</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>手机 </td>
												<td>制式</td>
												<td>1</td>
												<td> 编辑 | 移除</td>
											</tr>
											<tr>
												<td>2</td>
												<td>手机 </td>
												<td>蓝牙</td>
												<td>2</td>
												<td> 编辑 | 移除</td>
											</tr>
											<tr>
												<td>3</td>
												<td>手机</td>
												<td>电量</td>
												<td>3</td>
												<td> 编辑 | 移除</td>
											</tr>
										</tbody>
									</table>
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
<script>
	var table = $("#goods_category").DataTable({
		order: [
		["1", 'asc']
		], //按照发布时间降序排序
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
			data: "id",
		},{
			data: "category_name",
		},/*{
			data: "create_category_time",
		},{
			data: "ROLENAME",
		},*/{
			data: "null",
		}],
		columnDefs: [{
			targets: -1,
			data: null,
			defaultContent: "<a>编辑</a>|<a>删除</a>",
		},{ 
			"orderable": false, "targets": -1,  //设置第一列和最后一列不可排序
		}],
		createdRow: function(row, data, index) {
			$(row).data('id', data.id);
			console.log($(row).data('id'));
			// console.log(index);
		},
		"fnDrawCallback": function(){
			　　        var api = this.api();
			　　var startIndex= api.context[0]._iDisplayStart;//获取到本页开始的条数
			　　api.column(0).nodes().each(function(cell, i) {
				cell.innerHTML = startIndex + i + 1;
			　　}); 
		},
		language: {  
			// url: '<?php echo APP_HTTP_ROOT.$this->GetThemes();?>/assets/datatable/i18n/en.json'
		}
	});
</script>
</body>
</html>
