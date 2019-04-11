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
	<title>新增运费模版</title>
	<!-- header -->
	<?php @include_once $this->getThemesPath().'/view/common/header.php'; ?>
    <link href="<?php echo $this->getThemesUrl(); ?>/js/iCheck/skins/square/yellow.css" rel="stylesheet">
    <link href="<?php echo $this->getThemesUrl(); ?>/js/RegionalChoice/RegionalChoice.css" rel="stylesheet">
	<style>
	.radio {
        display: flex;
    }
    .checkbox {
        display: flex;
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
				<h3>新增运费模版</h3>
				<ul class="breadcrumb">
					<li>
						<a href="#">新增运费模版</a>
					</li>
					<li class="active"> 新增运费模版 </li>
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
									<form class="form-horizontal col-lg-offset-1 col-lg-10" role="form">
                                        <div class="form-group">
                                            <label for="freight_name" class="col-lg-2 col-sm-2 control-label">模版名称</label>
                                            <div class="col-lg-8">
                                                <input type="email" style="margin-left: 20px;" class="form-control" id="freight_name" placeholder="请输入模版名称">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="freight_name" class="col-lg-2 col-sm-2 control-label">是否包邮</label>
                                            <div class="square-yellow single-row col-lg-2 col-sm-2">
                                                <div class="radio">
                                                    <input name="is_postage" type="radio" checked><label>包邮 </label>
                                                </div>
                                            </div>
                                            <div class="square-yellow single-row col-lg-2 col-sm-2">
                                                <div class="radio">
                                                    <input name="is_postage" type="radio"><label>不包邮 </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="freight_name" class="col-lg-2 col-sm-2 control-label">计价方式</label>
                                            <div class="square-yellow single-row col-lg-2 col-sm-2">
                                                <div class="radio">
                                                    <input name="valuation_model" type="radio" checked><label>按重量 </label>
                                                </div>
                                            </div>
                                            <div class="square-yellow single-row col-lg-2 col-sm-2">
                                                <div class="radio">
                                                    <input name="valuation_model" type="radio"><label>按件数 </label>
                                                </div>
                                            </div>
                                            <div class="square-yellow single-row col-lg-2 col-sm-2">
                                                <div class="radio">
                                                    <input name="valuation_model" type="radio"><label>按体积 </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="freight_name" class="col-lg-2 col-sm-2 control-label">运送方式</label>
                                            <div style="display: grid;">
                                                <div class="square-yellow single-row col-lg-10 col-sm-10">
                                                    <div class="square-yellow single-row">
                                                        <div class="checkbox ">
                                                            <input type="checkbox" checked>
                                                            <label>快递 </label>
                                                        </div>
                                                    </div>
                                                    <div class="panel" style="border-style:double; margin-left:20px">
                                                        <div class="panel-body">
                                                            <div class="row" style="display: inline-flex;padding-left: 20px;">
                                                                默认运费：
                                                                <input class="form-control input-sm m-bot15" type="text" style="width:50px;margin-top: -5px;">  kg内
                                                                <input class="form-control input-sm m-bot15" type="text" style="width:50px;margin-top: -5px;">
                                                                元，每增加
                                                                <input class="form-control input-sm m-bot15" type="text" style="width:50px;margin-top: -5px;">
                                                                kg，增加运费
                                                                <input class="form-control input-sm m-bot15" type="text" style="width:50px;margin-top: -5px;">
                                                                元
                                                            </div>
                                                            <div class="row" style="padding:0px 10px 0px 0px;">
                                                                <table class="table table-bordered" style="margin: 0px 5px 0px 5px;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">运送到</th>
                                                                            <th class="text-center">首重(kg)</th>
                                                                            <th class="text-center">首费(元)</th>
                                                                            <th class="text-center">续重(kg)</th>
                                                                            <th class="text-center">续费(元)</th>
                                                                            <th class="text-center">操作</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><span class="areas">未添加地区</span>  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit pull-right"></i></a></td>
                                                                            <td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>
                                                                            <td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>
                                                                            <td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>
                                                                            <td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>
                                                                            <td class="text-center"><a href="javascript:void(0)"><i class="fa fa-trash-o"></i></a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><span class="areas">未添加地区</span>  <a href="javascript:void(0)"><i class="fa fa-edit pull-right"></i></a></td>
                                                                            <td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>
                                                                            <td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>
                                                                            <td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>
                                                                            <td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>
                                                                            <td class="text-center"><a href="javascript:void(0)"><i class="fa fa-trash-o"></i></a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="square-yellow single-row col-lg-10 col-sm-10">
                                                    <div class="square-yellow single-row">
                                                        <div class="checkbox ">
                                                            <input type="checkbox">
                                                            <label>EMS </label>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="square-yellow single-row col-lg-10 col-sm-10">
                                                    <div class="square-yellow single-row">
                                                        <div class="checkbox ">
                                                            <input type="checkbox">
                                                            <label>平邮 </label>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-4 col-lg-10">
                                                <button type="submit" class="btn btn-success">保存</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- 模态框（Modal） -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">
                                                        选择区域
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="test-div">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                                                    </button>
                                                    <button type="button" class="btn btn-primary btntest1">
                                                        确定
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 模态框（Modal） -->
								</div><br>
							</div>
						</section>
					</div>
				</section>
			</div>
		</div>
		<!-- footer -->
		<?php @include_once $this->getThemesPath().'/view/common/footer.php'; ?>
	</div>
</section>
<?php @include_once $this->getThemesPath().'/view/common/commonjs.php'; ?>
<script src="<?php echo $this->getThemesUrl(); ?>/js/iCheck/jquery.icheck.min.js"></script>
<script src="<?php echo $this->getThemesUrl(); ?>/js/RegionalChoice/RegionalChoice.js"></script>
<script>
	$(function(){
        $('.square-yellow input').iCheck({
            checkboxClass: 'icheckbox_square-yellow',
            radioClass: 'iradio_square-yellow',
            // increaseArea: '20%' // optional
        });
    });
    $(function () {
        //------生成地区
        GetRegionPlug();
        //------选择后确定按钮
        $(".btntest1").click(function () {
            var areas = GetChecked().join(",");//已选择的城市名
            // $(".areas").empty().html(areas);//显示在页面
            // $("#selectedareas").val(areas);//存入隐藏的input
            $('#myModal').modal('hide');//完后隐藏模态框
        })
    })
</script>
</body>
</html>
