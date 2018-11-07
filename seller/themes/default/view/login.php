<?php
if(!defined('CO_BASE_CHECK')){
	header("HTTP/1.1 404 Not Found");
	header("Status: 404 Not Found");
	exit;
};
/**
 * 后台系统登录页面
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta -->
<?php @include_once $this->getThemesPath().'/view/common/meta.php';?>
<title>后台管理系统</title>
<!-- header -->
<?php @include_once $this->getThemesPath().'/view/common/header.php';?>
</head>
<body class="login-body">
<div class="container">
    <form class="form-signin" action="<?php echo $this->config->app_url_root;?>/Login/login" method="post">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">后台管理系统</h1>
        </div>
        <div class="login-wrap">
            <input type="hidden" name="CSRF-TOKEN" value="<?php echo $this->session->token(); ?>">
            <input type="text" class="form-control" placeholder="<?php echo $this->language['login_label_id'];?>" autofocus name="uid">
            <input type="password" class="form-control" placeholder="<?php echo $this->language['login_label_pwd'];?>" name="password">
            <?php 
            	if($cfg_login_auth_code!="0"){
            		echo '<input type="text" class="form-control" placeholder="'.$this->language['login_label_auth_code'].'" name="auth_code">';
            		echo '<a href="javascript:void(0);" id="auth_code_img">';
            		echo '<img src="'.APP_URL_ROOT.'/login/auth_code" title="'.$this->language['login_label_auth_code_again'].'" align="absmiddle" id="auth_img">';
            		echo '</a>';
            	}
            ?>
            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i> <?php echo $this->language['login_button_login'];?>
            </button>
        </div>
    </form>
</div>
<script src="<?php echo $this->getThemesUrl();?>/js/bootstrap.min.js"></script>
<script src="<?php echo $this->getThemesUrl();?>/js/modernizr.min.js"></script>
</body>
<script>
$("#auth_img").click(function(){
    $(this).attr("src",'<?php echo $this->config->app_url_root;?>/login/auth_code/&r=' + Math.random());
  });
</script>
</html>