<script src="<?php echo $this->getThemesUrl();?>/js/jquery-ui.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/bootstrap.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/modernizr.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/jquery.nicescroll.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/scripts.js"></script>
<script>
$(function(){
	//计算当前左侧导航栏位置
	var _menu_action="<?php echo $this->session->Get('left_menu_action')?>";
	if(!_menu_action) return;
	$(".sub-menu-list li").each(function(i,e){
		if(e.id==_menu_action){
			$(e).addClass("active");
			$(e).parents(".menu-list").addClass("nav-active");
			return false;
		}
	});
	//如果二级菜单都没权限看，上级菜单也需要隐藏
	$(".menu-list").each(function(){
		if($(this).find(".sub-menu-list li").length==0) $(this).hide();
	});
});
</script>