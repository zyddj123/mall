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
										<button class="btn btn-warning" id="add_category" type="button">添加商品品牌</button>
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
<script>
	var table = $("#goods_brand").DataTable({
		order:[],
		page: false,
		serverSide:true,
		info: true,
		autoWidth: false,
		searching:true,
		ajax: "<?php echo $this->config->app_url_root.'/Goods/ajax_goods_brand'?>",
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
			defaultContent: '<center><a href="#attr_dialog" class="edit_btn" data-toggle="modal"><i class="fa fa-edit"></i>编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="text-danger del_btn"><i class="fa fa-trash-o"></i>删除</a></center>',
		},{ 
			"orderable": false, "targets": [0,2,-1],
		}],
		createdRow: function(row, data, index) {
			$(row).data('id', data.id);
			// console.log($(row).data('id'));
			// console.log(index);
			$(row).find('.brand_logo').empty().append('<img style="height:25px;" src = "<?php echo SellerConfig::BRAND_LOGO;?>'+data.brand_logo+'">');
			if(data.store_id==0){
				$(row).find('.del_btn').attr('class','text-warning').css('cursor','default').css('text-decoration','none').attr('title','系统预设项不能删除').find('i').attr('class','fa fa-ban');
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
	/* Formatting function for row details - modify as you need */
	function format ( d ) {
		return '<div class="text-success" style="background-color: #eff0f4;font-size:20px;">'+d.brand_desc+'</div>';
	}

</script>
</body>
</html>
