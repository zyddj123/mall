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
				<h3><?php echo $this->language['index_title'];?></h3>
			</div>

			<!-- content -->
			<div class="wrapper">
				<div class="row">


				</div>

			</div>
		</div>
		<!-- footer -->
		<?php @include_once $this->getThemesPath().'/view/common/footer.php';?>
	</div>
</section>
<?php @include_once $this->getThemesPath().'/view/common/commonjs.php';?>

</script>
</body>
</html>
