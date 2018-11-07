<div class="header-section">
<a class="toggle-btn"><i class="fa fa-bars"></i></a>

<form class="searchform" action="#" method="post">
	<input type="text" class="form-control" name="keyword" placeholder="搜索..." />
</form>

<div class="menu-right">
	<ul class="notification-menu">
		<li>
			<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<?php echo $_SESSION['seller']['seller_name'];?>
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu dropdown-menu-usermenu pull-right">
				<li><a href="<?php echo $this->config->app_url_root.'/Adminuser/profile'?>"><i class="fa fa-user"></i> 个人资料</a></li>
				<li><a href="<?php echo $this->config->app_url_root.'/Login/logout'?>"><i class="fa fa-sign-out"></i> 退出</a></li>
			</ul>
		</li>
	</ul>
</div>
</div>