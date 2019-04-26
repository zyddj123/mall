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
						<h3 class="panel-title">新增运费模版</h3>
					</header>
					<div class="panel-body">
						<!--基本信息-->
						<section>
							<div class="panel-body">
								<div class="row">
									<form class="form-horizontal col-lg-offset-1 col-lg-10" id="freightForm" action="#" method="post" role="form">
                                        <input type="hidden" name="CSRF-TOKEN" value="<?php echo $this->session->token(); ?>">
                                        <div class="form-group">
                                            <label for="freight_name" class="col-lg-2 col-sm-2 control-label">模版名称</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="freight_name" style="margin-left: 20px;" class="form-control" id="freight_name" placeholder="请输入模版名称">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="is_postage" class="col-lg-2 col-sm-2 control-label">是否包邮</label>
                                            <div class="square-yellow single-row col-lg-2 col-sm-2">
                                                <div class="radio">
                                                    <input name="is_postage" class="is_postage" id="postaged" type="radio" value="1"><label>包邮 </label>
                                                </div>
                                            </div>
                                            <div class="square-yellow single-row col-lg-2 col-sm-2">
                                                <div class="radio">
                                                    <input name="is_postage" class="is_postage" id="unpostaged" value="2" type="radio"><label>不包邮 </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!--计价方式start-->
                                        <div class="form-group" id="valuation_model">
                                            
                                        </div>
                                        <!--计价方式end-->
                                        <!--运送方式start-->
                                        <div class="form-group" id="carry_model">
                                            
                                        </div>
                                        <!--运送方式end-->
                                        
                                        <!--指定条件包邮start-->
                                        <div class="form-group" id="is_postage_by_if_div">
                                            
                                        </div>
                                        <!--指定条件包邮end-->
                                        <div class="form-group">
                                            <div class="col-lg-offset-5 col-lg-10">
                                                <button type="button" class="btn btn-success" id="submit_btn">保存</button>
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
<script src="<?php echo $this->getThemesUrl(); ?>/js/RegionalChoice/regional.json"></script>
<script src="<?php echo $this->getThemesUrl(); ?>/js/RegionalChoice/RegionalChoice.js"></script>
<script src="<?php echo $this->getThemesUrl(); ?>/js/validate/jquery.form.js"></script>
<script src="<?php echo $this->getThemesUrl(); ?>/js/layer/layer.js"></script>
<script>
	$(function(){
        $('.is_postage').iCheck({
            checkboxClass: 'icheckbox_square-yellow',
            radioClass: 'iradio_square-yellow',
            // increaseArea: '20%' // optional
        });
    });

    //是否包邮str
    var valuation_model_str = '';
    valuation_model_str += '<label for="valuation_model" class="col-lg-2 col-sm-2 control-label">计价方式</label>';
    valuation_model_str += '<div class="square-yellow single-row col-lg-2 col-sm-2">';
    valuation_model_str += '<div class="radio">';
    valuation_model_str += '<input name="valuation_model" class="valuation_model" id="valuation_model_kg" value="1" type="radio"><label>按重量 </label>';
    valuation_model_str += '</div>';
    valuation_model_str += '</div>';
    valuation_model_str += '<div class="square-yellow single-row col-lg-2 col-sm-2">';
    valuation_model_str += '<div class="radio">';
    valuation_model_str += '<input name="valuation_model" class="valuation_model" id="valuation_model_num" value="2" type="radio"><label>按件数 </label>';
    valuation_model_str += '</div>';
    valuation_model_str += '</div>';
    valuation_model_str += '<div class="square-yellow single-row col-lg-2 col-sm-2">';
    valuation_model_str += '<div class="radio">';
    valuation_model_str += '<input name="valuation_model" class="valuation_model" id="valuation_model_m" value="3" type="radio"><label>按体积 </label>';
    valuation_model_str += '</div>';
    valuation_model_str += '</div>';

    //计价方式str

    var carry_model_str = '';
    carry_model_str += '<label for="carry_model" class="col-lg-2 col-sm-2 control-label">运送方式</label>';
    carry_model_str += '<div style="display: grid;">';
    carry_model_str += '<div class="col-lg-10 col-sm-10">';
    carry_model_str += '<label class="text-success" style="margin-left: 20px;margin-top: 7px;">除指定地区外，其它地区的运费采用"默认运费" </label>';
    carry_model_str += '</div>';
    carry_model_str += '<div class="square-yellow single-row col-lg-10 col-sm-10">';
    carry_model_str += '<div class="carry_model_father">';
    carry_model_str += '<div class="checkbox ">';
    carry_model_str += '<input type="checkbox" class="carry_model" value="1" name="carry_model" id="parcel">';
    carry_model_str += '<label>快递 </label>';
    carry_model_str += '</div>';
    carry_model_str += '</div>';
    carry_model_str += '<div class="panel carry_model_panel">';                                                   
    carry_model_str += '</div>';
    carry_model_str += '</div>';
    carry_model_str += '<div class="square-yellow single-row col-lg-10 col-sm-10">';
    carry_model_str += '<div class="carry_model_father">';
    carry_model_str += '<div class="checkbox ">';
    carry_model_str += '<input type="checkbox" class="carry_model" value="2" name="carry_model" id="ems">';
    carry_model_str += '<label>EMS </label>';
    carry_model_str += '</div>';
    carry_model_str += '</div>';
    carry_model_str += '<div class="panel carry_model_panel">';
    carry_model_str += '</div>';
    carry_model_str += '</div>';
    carry_model_str += '<div class="square-yellow single-row col-lg-10 col-sm-10">';
    carry_model_str += '<div class="carry_model_father">';
    carry_model_str += '<div class="checkbox ">';
    carry_model_str += '<input type="checkbox" class="carry_model" value="3" name="carry_model" id="surface_mall">';
    carry_model_str += '<label>平邮 </label>';
    carry_model_str += '</div>';
    carry_model_str += '</div>';
    carry_model_str += '<div class="panel carry_model_panel">'; 
    carry_model_str += '</div>';
    carry_model_str += '</div>';
    carry_model_str += '</div>';


    //生成是否指定条件包邮str
    var is_postage_by_if_str = '';
    is_postage_by_if_str += '<hr>';
    is_postage_by_if_str += '<label for="freight_name" class="col-lg-2 col-sm-2 control-label"></label>';
    is_postage_by_if_str += '<div style="display: grid;">';
    is_postage_by_if_str += '<div class="col-lg-10 col-sm-10">';
    is_postage_by_if_str += '</div>';
    is_postage_by_if_str += '<div class="square-yellow single-row col-lg-10 col-sm-10">';
    is_postage_by_if_str += '<div class="carry_model_father">';
    is_postage_by_if_str += '<div class="checkbox ">';
    is_postage_by_if_str += '<input name="is_postage_by_if" class="is_postage_by_if" id="is_postage_by_if" value="1" type="checkbox"><label>指定条件包邮(可选) </label>';
    is_postage_by_if_str += '</div>';
    is_postage_by_if_str += '</div>';
    is_postage_by_if_str += '<div class="panel is_postage_by_if_panel">';  
    is_postage_by_if_str += '<div class="panel-body" style="border-style: ridge; margin-left: 20px;">';
    is_postage_by_if_str += '<div class="row" style="padding:0px 10px 0px 0px;">';
    is_postage_by_if_str += '<table class="table table-bordered" style="margin: 0px 5px 0px 5px;">';
    is_postage_by_if_str += '<thead>';
    is_postage_by_if_str += '<tr>';
    is_postage_by_if_str += '<th class="text-center">选择地区</th>';
    is_postage_by_if_str += '<th class="text-center">选择运送方式</th>';
    is_postage_by_if_str += '<th class="text-center">选择快递</th>';
    is_postage_by_if_str += '<th class="text-center">设置包邮条件</th>';
    is_postage_by_if_str += '<th class="text-center">操作</th>';
    is_postage_by_if_str += '</tr>';
    is_postage_by_if_str += '</thead>';
    is_postage_by_if_str += '<tbody>';
    is_postage_by_if_str += '<tr>';
    is_postage_by_if_str += '<td><span class="areas">未添加地区</span>  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit pull-right"></i></a></td>';
    is_postage_by_if_str += '<td class="text-center"><center><select class="form-control"><option value="1">快递</option><option value="2">EMS</option><option value="3">平邮</option></select></center></td>';
    is_postage_by_if_str += '<td class="text-center"><center> </center></td>';
    is_postage_by_if_str += '<td class="text-center"><center>';
    is_postage_by_if_str += '<select name="set_postage_by_if_select" id="set_postage_by_if_select" class="form-control">';
    is_postage_by_if_str += '<option value="1">数量</option>';
    is_postage_by_if_str += '<option value="2">金额</option>';
    is_postage_by_if_str += '<option value="3">重量</option>';
    is_postage_by_if_str += '<option value="4">重量+金额</option>';
    is_postage_by_if_str += '</select><br />';
    is_postage_by_if_str += '<div id="postage_by_if_down_div" style="display: inline-flex;">在数量为<input class="form-control input-sm" type="text" style="width:40px;margin-top:-5px;">件以上包邮</div>';
    is_postage_by_if_str += '</center></td>';
    is_postage_by_if_str += '<td class="text-center"><a href="javascript:void(0)"><i class="fa fa-trash-o"></i></a></td>';
    is_postage_by_if_str += '</tr>';
    is_postage_by_if_str += '</tbody>';
    is_postage_by_if_str += '</table>';
    is_postage_by_if_str += '</div>';
    is_postage_by_if_str += '</div>';                                                 
    is_postage_by_if_str += '</div>';
    is_postage_by_if_str += '</div>';
    is_postage_by_if_str += '</div>';


    //运费模版str
    function make_carry_model_panel_str(choose){
        var attr = '';
        var attr_zh = '';
        var carry_model_panel_str = '';
        switch (choose) {
            case 1:
                attr = '千克';
                attr_zh = '重';
                break;
            case 2:
                attr = '件';
                attr_zh = '件数';
                break;
            case 3:
                attr = '立方米';
                attr_zh = '体积';
                break;
            default:
                break;
        }
        carry_model_panel_str += '<div class="panel-body">';
        carry_model_panel_str += '<div class="row" style="display: inline-flex;padding-left: 20px;">';
        carry_model_panel_str += '默认运费：';
        carry_model_panel_str += '<input class="form-control input-sm m-bot15 attr_num" type="text" style="width:50px;margin-top: -5px;"> '+attr+'内';
        carry_model_panel_str += '<input class="form-control input-sm m-bot15 money_num" type="text" style="width:50px;margin-top: -5px;">';
        carry_model_panel_str += '元，每增加';
        carry_model_panel_str += '<input class="form-control input-sm m-bot15 attr_per" type="text" style="width:50px;margin-top: -5px;">';
        carry_model_panel_str += attr+'，增加运费';
        carry_model_panel_str += '<input class="form-control input-sm m-bot15 money_per" type="text" style="width:50px;margin-top: -5px;">';
        carry_model_panel_str += '元';
        carry_model_panel_str += '</div>';
        carry_model_panel_str += '<div class="row" style="padding:0px 10px 0px 0px;">';
        carry_model_panel_str += '<table class="table table-bordered" style="margin: 0px 5px 0px 5px;">';
        carry_model_panel_str += '<thead>';
        carry_model_panel_str += '<tr>';
        carry_model_panel_str += '<th class="text-center">运送到</th>';
        carry_model_panel_str += '<th class="text-center">首'+attr_zh+'('+attr+')</th>';
        carry_model_panel_str += '<th class="text-center">首费(元)</th>';
        carry_model_panel_str += '<th class="text-center">续'+attr_zh+'('+attr+')</th>';
        carry_model_panel_str += '<th class="text-center">续费(元)</th>';
        carry_model_panel_str += '<th class="text-center">操作</th>';
        carry_model_panel_str += '</tr>';
        carry_model_panel_str += '</thead>';
        carry_model_panel_str += '<tbody>';
        carry_model_panel_str += '<tr>';
        carry_model_panel_str += '<td><span class="freight_areas">未添加地区</span>  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit pull-right"></i></a></td>';
        carry_model_panel_str += '<td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>';
        carry_model_panel_str += '<td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>';
        carry_model_panel_str += '<td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>';
        carry_model_panel_str += '<td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>';
        carry_model_panel_str += '<td class="text-center"><a href="javascript:void(0)"><i class="fa fa-plus add_tr"></i></a></td>';
        carry_model_panel_str += '</tr>';
        carry_model_panel_str += '</tbody>';
        carry_model_panel_str += '</table>';
        carry_model_panel_str += '</div>';
        carry_model_panel_str += '</div>';
        return carry_model_panel_str;
    }

    //添加“运送到”表格
    $('body').on('click','.add_tr',function(){
        var str = '';
        str += '<tr>';
        str += '<td><span class="freight_areas">未添加地区</span>  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit pull-right"></i></a></td>';
        str += '<td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>';
        str += '<td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>';
        str += '<td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>';
        str += '<td class="text-center"><center><input class="form-control input-sm" type="text" style="width:40px;"></center></td>';
        str += '<td class="text-center"><a href="javascript:void(0)"><i class="fa fa-plus add_tr"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)"><i class="fa fa-trash-o del_tr"></i></a></td>';
        str += '</tr>';
        $(this).closest('tbody').append(str);
    });

    //删除“运送到”表格
    $('body').on('click','.del_tr',function(){
        $(this).closest('tr').remove();
    });

    //包邮
    $('#postaged').on('ifChecked',(e)=>{
        $('#valuation_model').empty();
        $('#carry_model').empty();
        $('#is_postage_by_if_div').empty();
    });
    //不包邮
    $('#unpostaged').on('ifChecked',(e)=>{
        $('#valuation_model').empty().append(valuation_model_str);

        $('.valuation_model').iCheck({
            checkboxClass: 'icheckbox_square-yellow',
            radioClass: 'iradio_square-yellow',
        });

        //计价方式选中
        $('.valuation_model').on('ifChecked',(e)=>{
            $('#carry_model').empty().append(carry_model_str);
            $('#is_postage_by_if_div').empty().append(is_postage_by_if_str);
            $('.carry_model').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
            });
            $('.is_postage_by_if').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
            });
            var str = make_carry_model_panel_str(parseInt(e.target.value));
            //运送方式选中
            $('.carry_model').on('ifChecked',(e)=>{
                $(e.target).closest('.carry_model_father').next('.carry_model_panel').empty().append(str).css({'border-style':'double','margin-left':'20px'});
                
                
                
            });

            //运送方式取消选中
            $('.carry_model').on('ifUnchecked',(e)=>{
                $(e.target).closest('.carry_model_father').next('.carry_model_panel').empty().css({'border-style':'none','margin-left':'20px'});
            });

            //指定条件包邮 设置包邮条件select事件
            $('#set_postage_by_if_select').change((e)=>{
                var postage_by_if_down_div_str = '';
                switch (parseInt(e.target.value)) {
                    case 1:
                        postage_by_if_down_div_str = '在数量为<input class="form-control input-sm" type="text" style="width:40px;margin-top:-5px;">件以上包邮';
                        break;
                    case 2:
                        postage_by_if_down_div_str = '在金额为<input class="form-control input-sm" type="text" style="width:40px;margin-top:-5px;">元以上包邮';
                        break;
                    case 3:
                        postage_by_if_down_div_str = '在重量为<input class="form-control input-sm" type="text" style="width:40px;margin-top:-5px;">千克以下包邮';
                        break;
                    case 4:
                        postage_by_if_down_div_str = '<input class="form-control input-sm" type="text" style="width:40px;margin-top:-5px;">千克以下<input class="form-control input-sm" type="text" style="width:40px;margin-top:-5px;">元以上包邮';
                        break;
                    default:
                        break;
                }
                $('#postage_by_if_down_div').empty().append(postage_by_if_down_div_str);
            });

            //省市插件初始化
            GetRegionPlug();
            //------选择后确定按钮
            $(".btntest1").click(() => {
                var areas = GetChecked();//已选择的城市名
                // console.log(areas);
                $(".freight_areas").empty().html(areas.CheckedName.join(',')).data('areas_ids',areas.CheckedId);
                $('#myModal').modal('hide');//完后隐藏模态框
            });
        });
    });

    $('#submit_btn').click(()=>{
        var flag = false;
        var freight_name = $.trim($('#freight_name').val());
        if(freight_name==''||freight_name==null) {
            layer.msg("运费模版名称不能为空！");
            flag = false;
            return false;
        }
        var is_postage = $('input[name=is_postage]:checked').val();
        if(is_postage==null||is_postage=='undefined'){
            layer.msg("是否包邮为必选项！");
            flag = false;
            return false;
        }else if(is_postage=='1'){
            flag = true;
        }else if(is_postage=='2'){
            var valuation_model = $('input[name=valuation_model]:checked').val();
            if(valuation_model==null||valuation_model=='undefined'){
                layer.msg("计价方式为必选项！");
                flag = false;
                return false;
            }else{
                var carry_model = [];
                var flag_neibu = false;
                $.each($('input[name=carry_model]'),(i,d)=>{
                    if(d.checked){
                        var attr_num = $(d).closest('.square-yellow').find('.attr_num').first().val();
                        var money_num = $(d).closest('.square-yellow').find('.money_num').first().val();
                        var attr_per = $(d).closest('.square-yellow').find('.attr_per').first().val();
                        var money_per = $(d).closest('.square-yellow').find('.money_per').first().val();

                        var aa = {};
                        aa.cm = parseInt(d.value);
                        aa.attr_num = attr_num;
                        aa.money_num = money_num;
                        aa.attr_per = attr_per;
                        aa.money_per = money_per
                        carry_model.push(aa);

                        // if(){
                        //     var freight_areas = $(d).closest('.square-yellow').find('.freight_areas').first().text();
                        // }

                        if(attr_num==''||money_num==''||attr_per==''||money_per==''){
                            layer.msg("选中的默认运费为必填项！");
                            flag_neibu = false;
                            return false;
                        }else{
                            flag_neibu = true;
                        }
                    }
                });
                flag = flag_neibu?true:false;
                console.log(carry_model);
                if(carry_model.length==0){
                    layer.msg("运送方式为必选项！");
                    flag = false;
                    return false;
                }
            }
        }
        if(flag){
            $('#freightForm').ajaxSubmit({
                url:"<?php echo $this->config->app_url_root.'/Freight/freight_add_ajax'?>",
                type: 'post',
                dataType: 'json',
                success:(e)=>{
                    
                },
                error:(err)=>{

                }
            });
        }
    });


</script>
</body>
</html>
