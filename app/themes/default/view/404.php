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
		<section class="header-section height-small middle-wrapper has-bg-layer layer-black bg-img-shop">
			<div class="middle-content">
				<div class="container">
					<h1 class="title">404</h1>

					<ul class="breadcrumb">
						<li><a href="index.html">暂无该商品</a></li>
					</ul>
				</div>
			</div>
		</section>
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
		<!-- Custom JS -->
		<script>
            function init(){
                var $window		= $(window),
                    $document	= $($document);
                
                // Fullscreen section
                $window.on('resize', function () {
                    var windowHeight = $(this).height();
                    
                    $('.fullscreen-section').css('height', windowHeight);
                }).trigger('resize');

                // Scroll down button
                $('.scroll-down').on('click', function(event) {
                    event.preventDefault();

                    $('html, body').animate({
                        scrollTop: $window.height()
                    }, 500);
                });
                
                // Tooltip 
                $('[rel="tooltip"]').tooltip({
                    trigger: 'hover'
                });
                
                
                // Accordion
                var $accordion = $('.accordion');
                
                $accordion.on('show.bs.collapse', function(e) {
                    $(e.target).parent('.panel').addClass('active');
                });

                $accordion.on('hide.bs.collapse', function(e) {
                    $(e.target).parent('.panel').removeClass('active');
                });
                
                // Equalize height
                $accordion.closest('.equalized-section').on('shown.bs.collapse', function(e) {
                    $.fn.matchHeight._update();
                });
                
                // Cart submenu, Cart section
                $('.cart-submenu .cart-item, .cart-section .cart-row').on('click', '.close', function(event) {
                    event.preventDefault();
                    
                    var $item = $(event.delegateTarget);
                    
                    $item.fadeOut(500, function() {
                        $item.remove();
                        
                        $.ajax({
                            url: './php/cart.php',
                            type: 'POST'
                        });	
                    });
                });
                
                
                // Go to top
                var goToTopBtn = $('.go-to-top');
                
                $window.on('scroll', function() {
                    var scrollPx = $(this).scrollTop();
                    
                    if(scrollPx > 100) {
                        goToTopBtn.addClass('active');
                    } else {
                        goToTopBtn.removeClass('active');
                    }
                });
                
                goToTopBtn.on('click', function(event) {
                    event.preventDefault();
                    
                    $('html, body').stop().animate({
                        scrollTop: 0
                    }, 500);
                });
                
                // Animated content loader
                $('[data-animate]').each(function() {
                    var $this		= $(this),
                        classToAdd	= ($this.data('animate') === '') ? 'fadeIn' : $this.data('animate');
                    
                    $this.addClass('visibility-hidden').viewportChecker({
                        classToAdd: 'visibility-visible animated ' + classToAdd,
                        offset: 100
                    });
                });
                
                // Tabs
                $('a[data-toggle="tab"]').on('shown.bs.tab', function() {
                    $window.trigger('resize');
                });
                
                // Preloader
                $window.on('load', function() {
                    $('.preloader').fadeOut('slow');
                    $('body').addClass('loaded');
                });
                
                //menu
                $('.menu-button').on('click', function(event) {
				    event.preventDefault();

                    var $this				= $(this),
                        menuButtons			= $('.menu-button'),
                        menuButtonPosition	= $this.offset(),
                        menuButtonPadding	= parseInt($this.css('padding-top'));

				    $('.menu-section').toggleClass('active');

                    menuButtons.toggleClass('active');
                    menuButtons.children('i').toggleClass('fa-bars fa-close');

                    $('.fullscreen-menu .menu-button').css({
                        'top': (menuButtonPosition.top + menuButtonPadding) - $(window).scrollTop() + 'px',
                        'left': menuButtonPosition.left,
                    });
			    });
			
                $('.menu-section .menu, .default-menu').each(function() {
                    var $this = $(this);
                    
                    $this.find('.has-children > a').append('<i class="fa fa-angle-down"></i>');
                });
                
                $('.menu-section .menu .has-children > a').on('click', function(event) {
                    event.preventDefault();
                    
                    var $this = $(this);
                    
                    $this.parent('.has-children').toggleClass('show-children');
                });
            }
            init();
        </script>
	</body>
</html>