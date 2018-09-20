<ul class="nav nav-pills nav-stacked custom-nav">
	<li id="index/index"><a href="<?php echo APP_URL_ROOT.'/index'?>"><i class="fa fa-home"></i><span><?php echo $this->language['sys_left_menu_index'];?></span></a></li>
	
	
	
	
	<!-- 商品管理 -->
	<li class="menu-list"><a href=""><i class="fa fa-male"></i><span><?php echo $this->language['sys_left_menu_goods'];?></span></a>
		<ul class="sub-menu-list">
			<li id="goods/goods_add"><a href="<?php echo $this->config->app_url_root.'/Goods/goods_add'?>"><?php echo $this->language['sys_left_menu_goods_add']?></a></li>
			<li id="goods/goods_index"><a href="<?php echo $this->config->app_url_root.'/Goods/goods_index'?>"><?php echo $this->language['sys_left_menu_goods']?></a></li>
		</ul>
	</li>

<!-- 	<li class="menu-list"><a href=""><i class="fa fa-male"></i><span><?php echo $this->language['sys_left_menu_adminuser'];?></span></a>
		<ul class="sub-menu-list">
			<li id="adminuser/profile"><a href="<?php echo APP_URL_ROOT.'/adminuser/profile'?>"><?php echo $this->language['sys_left_menu_adminuser_profile']?></a></li>
		</ul>
	</li> -->


	
	
	<li><a href="<?php echo APP_URL_ROOT.'/logout'?>"><i class="fa fa-sign-in"></i> <span><?php echo $this->language['sys_left_menu_logout'];?></span></a></li>
</ul>