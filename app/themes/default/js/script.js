function init() {
	var $window = $(window),
		$document = $($document);

	// Fullscreen section
	$window.on('resize', function () {
		var windowHeight = $(this).height();

		$('.fullscreen-section').css('height', windowHeight);
	}).trigger('resize');

	// Scroll down button
	$('.scroll-down').on('click', function (event) {
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

	$accordion.on('show.bs.collapse', function (e) {
		$(e.target).parent('.panel').addClass('active');
	});

	$accordion.on('hide.bs.collapse', function (e) {
		$(e.target).parent('.panel').removeClass('active');
	});

	// Equalize height
	$accordion.closest('.equalized-section').on('shown.bs.collapse', function (e) {
		$.fn.matchHeight._update();
	});

	// Cart submenu, Cart section
	$('.cart-submenu .cart-item, .cart-section .cart-row').on('click', '.close', function (event) {
		event.preventDefault();

		var $item = $(event.delegateTarget);

		$item.fadeOut(500, function () {
			$item.remove();

			$.ajax({
				url: './php/cart.php',
				type: 'POST'
			});
		});
	});


	// Go to top
	var goToTopBtn = $('.go-to-top');

	$window.on('scroll', function () {
		var scrollPx = $(this).scrollTop();

		if (scrollPx > 100) {
			goToTopBtn.addClass('active');
		} else {
			goToTopBtn.removeClass('active');
		}
	});

	goToTopBtn.on('click', function (event) {
		event.preventDefault();

		$('html, body').stop().animate({
			scrollTop: 0
		}, 500);
	});

	// Animated content loader
	$('[data-animate]').each(function () {
		var $this = $(this),
			classToAdd = ($this.data('animate') === '') ? 'fadeIn' : $this.data('animate');

		$this.addClass('visibility-hidden').viewportChecker({
			classToAdd: 'visibility-visible animated ' + classToAdd,
			offset: 100
		});
	});

	// Tabs
	$('a[data-toggle="tab"]').on('shown.bs.tab', function () {
		$window.trigger('resize');
	});

	// Preloader
	$window.on('load', function () {
		$('.preloader').fadeOut('slow');
		$('body').addClass('loaded');
	});

	//menu
	$('.menu-button').on('click', function (event) {
		event.preventDefault();

		var $this = $(this),
			menuButtons = $('.menu-button'),
			menuButtonPosition = $this.offset(),
			menuButtonPadding = parseInt($this.css('padding-top'));

		$('.menu-section').toggleClass('active');

		menuButtons.toggleClass('active');
		menuButtons.children('i').toggleClass('fa-bars fa-close');

		$('.fullscreen-menu .menu-button').css({
			'top': (menuButtonPosition.top + menuButtonPadding) - $(window).scrollTop() + 'px',
			'left': menuButtonPosition.left,
		});
	});

	$('.menu-section .menu, .default-menu').each(function () {
		var $this = $(this);

		$this.find('.has-children > a').append('<i class="fa fa-angle-down"></i>');
	});

	$('.menu-section .menu .has-children > a').on('click', function (event) {
		event.preventDefault();
		var $this = $(this);
		$this.parent('.has-children').toggleClass('show-children');
	});
}
init();