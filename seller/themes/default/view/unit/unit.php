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
	<title>商品单位管理</title>
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
				<h3>商品单位管理</h3>
				<ul class="breadcrumb">
					<li>
						<a href="#">商品单位管理</a>
					</li>
					<li class="active"> 商品单位管理 </li>
				</ul>
			</div>

			<!-- content -->
			<div class="wrapper">
				<section class="panel panel-default">
					<header class="panel-heading">
						<h3 class="panel-title">商品单位</h3>
					</header>
					<div class="panel-body">
						<!--基本信息-->
						<section>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-8 col-sm-8" style="display: -webkit-box;">
										<a href="javascript:void(0);" class="btn btn-warning" id="add_unit">添加商品单位</a>
										<div id="add_unit_div" class="form-inline" style="display: none">
											<input style="margin-left: 30px;" type="text" class="form-control" id="input_unit_name" placeholder="商品单位名称">&nbsp;&nbsp;
											<button class="btn btn-warning" id="add_unit_btn" type="button">添加</button>
										</div>
									</div>
								</div><br>
								<div class="row">
									<div class="col-lg-10">
										<table class="table table-bordered table-striped table-condensed" id="goods_unit">
											<thead>
												<tr>
													<th>#</th>
													<th>单位名称</th>
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
						<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="unit_dialog" class="modal fade">
							<div class="modal-dialog modal-md">
								<div class="modal-content">
									<div class="modal-header">
										<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
										<h4 class="modal-title">修改单位名称</h4>
									</div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div><center style="font-size: 20px;margin-bottom: 15px;color: darkgreen;font-style: oblique;"><span id="mes" style=""></span></center></div>
                                            <div class="form-group">
                                                <input type="hidden" id="yuan_unit_name" value="">
                                                <input type="hidden" id="id" value="">
                                                <label for="unit_name" class="col-lg-3 col-sm-3 control-label" style="margin-top:5px;">单位名称</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="unit_name" placeholder="单位名称">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                        <button type="submit" id="modal_btn" class="btn btn-success">保存</button>
                                    </div>
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
	var table = $("#goods_unit").DataTable({
		order:[["1","desc"]],
		page: false,
		serverSide:true,
		info: true,
		autoWidth: false,
		searching:true,
		ajax: "<?php echo $this->config->app_url_root.'/Unit/ajax_unit'?>",
		columns: [{
			"data": null,
			"targets": 0
		},{
			"data": "unit_name",
		},{
			"data": null,
		}],
		columnDefs: [{
			targets: -1,
			data: null,
			defaultContent: '<center><a href="#unit_dialog" class="edit_btn" data-toggle="modal"><i class="fa fa-edit"></i>编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="text-danger del_btn"><i class="fa fa-trash-o"></i>删除</a></center>',
		},{ 
			"orderable": false, "targets": [0,-1], //设置第1、最后一列不可排序
		}],
		createdRow: function(row, data, index) {
			$(row).data('id', data.id);
			// console.log($(row).data('id'));
			// console.log(index);
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

    //添加商品类别事件
	$('#add_unit').click(function(){
		$('#add_unit_div').toggle('slow');
	});

    //商品类别按钮事件
	$('#add_unit_btn').click(function(){
		var input_unit_name = $('#input_unit_name').val();
		if(input_unit_name!=''){
			$.post("<?php echo $this->config->app_url_root.'/Unit/ajax_add_unit'?>",{"input_unit_name":input_unit_name},function(e){
				if(e){
					alert("添加成功");
					$('#input_unit_name').val('');
					table.draw();
				}else{
					alert("添加失败，请重新添加！");
				}
			});
		}
	});

    //编辑按钮事件
	$('body').on('click','.edit_btn',function(){
		var tr = $(this).closest('tr');
		var row = table.row( tr );
        console.log(row.data());
        $('#unit_name').val('').val(row.data().unit_name);
        $('#id').val(row.data().id);
        $('#yuan_unit_name').val(row.data().unit_name);
	});

    //编辑保存按钮事件
    $('#modal_btn').click(function(){
        var id = $('#id').val();
        var unit_name = $('#unit_name').val();
        var yuan_unit_name = $('#yuan_unit_name').val();
        if(unit_name!=''&&unit_name!=yuan_unit_name){
            $.post("<?php echo $this->config->app_url_root.'/Unit/ajax_edit_unit'?>",{"id":id,"unit_name":unit_name},function(e){
                if(e==1){
                    $('#mes').text("修改成功！");
                    $('#unit_name').val('');
                    table.draw();
                }else{
                    $('#mes').text("修改失败！");
                }
            });
        }
    });

	//删除操作  并不是真的删除 只是unit表中的status项由 1变为 0
	$('body').on('click','.del_btn',function(){
		var tr = $(this).closest('tr');
		var row = table.row( tr );
		var unit_id = row.data().id;
		if(confirm("确定删除该项吗？该操作不可逆")){
			$.post("<?php echo $this->config->app_url_root.'/Unit/ajax_del_unit'?>",{"unit_id":unit_id},function(e){
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
