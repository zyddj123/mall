<ul class="nav nav-pills nav-stacked custom-nav">
	<li id="index/index"><a href="<?php echo $this->config->app_url_root.'/Index'?>"><i class="fa fa-home"></i><span><?php echo $this->language['sys_left_menu_index'];?></span></a></li>
	
	
	
	
	<!-- 商品管理 -->
	<li class="menu-list"><a href=""><i class="fa fa-shopping-cart"></i><span><?php echo $this->language['sys_left_menu_goods'];?></span></a>
		<ul class="sub-menu-list">
			<li id="goods/goods_add"><a href="<?php echo $this->config->app_url_root.'/Goods/goods_add'?>"><?php echo $this->language['sys_left_menu_goods_add']?></a></li>
			<li id="goods/goods_index"><a href="<?php echo $this->config->app_url_root.'/Goods/goods_index'?>"><?php echo $this->language['sys_left_menu_goods']?></a></li>
			<li id="category/category"><a href="<?php echo $this->config->app_url_root.'/Category/category'?>">类别管理</a></li>
			<li id="brand/brand"><a href="<?php echo $this->config->app_url_root.'/Brand/brand'?>">品牌管理</a></li>
			<li id="attr/attr"><a href="<?php echo $this->config->app_url_root.'/Attr/attr'?>">规格管理</a></li>
			<li id="unit/unit"><a href="<?php echo $this->config->app_url_root.'/Unit/unit'?>">商品单位</a></li>
		</ul>
	</li>


	<!-- 运费系统 -->
	<li class="menu-list"><a href=""><i class="fa fa-shopping-cart"></i><span>运费系统</span></a>
		<ul class="sub-menu-list">
			<li id="freight/freight_add"><a href="<?php echo $this->config->app_url_root.'/Freight/freight_add'?>">新增运费模版</a></li>
			<li id="freight/freight_index"><a href="<?php echo $this->config->app_url_root.'/Freight/freight_index'?>">运费模版列表</a></li>
			<!-- <li id="freight/freight"><a href="<?php echo $this->config->app_url_root.'/Freight/category'?>">类别管理</a></li> -->
		</ul>
	</li>



	
	
	<li><a href="<?php echo $this->config->app_url_root.'/logout'?>"><i class="fa fa-sign-in"></i> <span><?php echo $this->language['sys_left_menu_logout'];?></span></a></li>
</ul>