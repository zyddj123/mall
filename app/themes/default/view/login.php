<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="csrf-token" content="<?php echo $this->session->token(); ?>">
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>mall</title>
		<link rel="shortcut icon" href="<?php echo $this->getThemesUrl(); ?>/images/favicons/favicon.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->getThemesUrl(); ?>/images/favicons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->getThemesUrl(); ?>/images/favicons/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->getThemesUrl(); ?>/images/favicons/apple-touch-icon-144x144.png" />
		<link rel="stylesheet" href="<?php echo $this->getThemesUrl(); ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo $this->getThemesUrl(); ?>/css/style.css" />
		<script src="<?php echo $this->getThemesUrl(); ?>/js/jquery-1.10.2.min.js"></script>
		<script src="<?php echo $this->getThemesUrl(); ?>/js/app.js"></script>
		<!--[if lt IE 9]>
			<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/html5shiv.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="preloader"></div>
		<!--header-->
		<?php @include_once $this->getThemesPath().'/view/common/header.php'; ?>
		<!--end header-->
		<!-- .header-section -->
		<!-- .section -->
		<section class="section">
			<div class="container">
                <div class="form-feedback on-valid text-center">
                    <div class="alert alert-success" role="alert">
                        <p>You successfully sent your order.</p>
                    </div>
                    
                    <a class="btn btn-angular btn-border-to-simple btn-secondary" href="#">Back to shop</a>
                </div>
                
                <div class="row form-content">
                    <article class="col-md-8 col-sm-6">
                        
                    </article>

                    <article class="col-md-4 col-sm-6">
                        <!-- .checkout-panel -->
                        <div class="checkout-panel">
                            <div class="section-header">
                                <center><h3 class="maintitle"><strong>登录</strong></h3></center>
                            </div>
                            <div class="row">
                                <form id="login_form" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="username">用户名 *</label>
                                        <div>
                                            <div class="form-group">
                                                <input class="form-control input-lg" type="text" id="username" name="username" placeholder="请输入用户名" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">密码 *</label>
                                        <div>
                                            <div class="form-group">
                                                <input class="form-control input-lg" type="password" id="password" name="password" placeholder="请输入密码" />
                                            </div>
                                        </div>
                                    </div>
									<center><div id="mes" style="margin-bottom: 20px;color: red;font-size: 18px;"></div></center>
									<button type="submit" id="login_btn" class="btn btn-lg btn-block btn-angular btn-simple-to-border btn-primary">登录</button>
                                </form>
                            </div>
                            
                        </div>
                        <!-- /.checkout-panel -->
                    </article>
                </div>
			</div>
		</section>
		<!-- /.section -->
		<!-- /.header-section -->
		
		<!-- .menu-section.fullscreen-menu -->
		<?php @include_once $this->getThemesPath().'/view/common/menu.php'; ?>
		<!-- /.menu-section.fullscreen-menu -->
		
		<!-- .section.bg-secondary -->
		<section class="section bg-secondary">

		</section>
		<!-- /.section.bg-secondary -->
		
		<!-- .footer -->
		<?php @include_once $this->getThemesPath().'/view/common/footer.php'; ?>
		<!-- /.footer -->
		
		<!-- JS library -->
		<!-- HTML/CSS/JS framework -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/bootstrap.min.js"></script>
        <!-- Viewport checker -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.viewportchecker.min.js"></script>
        <!-- Custom select -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.selectric.min.js"></script>
        <!-- validate select -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/jquery.validate.min.js"></script>
		<!-- Custom JS -->
        <script src="<?php echo $this->getThemesUrl(); ?>/js/script.js"></script>
        <script>
            $('#login_form').validate({
                rules:{
                    username:"required",
                    password:"required",
                },
				messages:{
					username:"必须输入用户名",
                    password:"必须输入密码",
    			},
                submitHandler: function(form){
					var formobj =  document.getElementById("login_form");    //用原生的js语法获取form表单dom
					var res = new FormData(formobj);
                    $.ajax({
						url: "<?php echo $this->config->app_url_root.'/Login/login'; ?>",
						type: "POST",
						dataType:"json",
						data: res,
						cache: false,
						contentType: false,
						processData: false,
						success:function(e){
							if(e==1){
								$('#mes').empty();
								history.go(-1);
							}else if(e==2){
								$('#mes').empty().text("用户名或者密码错误");
							}else if(e==3){
								$('#mes').empty().text("该用户已被冻结");
							}
						}
					});  
                }
            });
        </script>
	</body>
</html>