(function ($) {
	
	'use strict';
	
	
	var animationTime = 1000;
	
	var countdownText = {
		days:		'Days',
		hours:		'Hours',
		minutes:	'Minutes',
		seconds:	'Seconds'
	}
	
	var location = {
		latitude:	47.5361691,
		longitude:	19.0705495
	}

	
	var fn = {
		
		/*
			Launch
		*/
		
		Launch: function () {
			fn.FormValidate();
			fn.Carousels();
			fn.Masonry();
			fn.Countdown();
			fn.CounterUp();
			fn.CountInput();
			fn.RangeSlider();
			fn.Progressbars();
			fn.Map();
			fn.Apps();
			fn.Header();
			fn.HeaderSearch();
			fn.Menu();
		},
		
		
		
		/*
			Form validation
		*/
		
		FormValidate: function () {
			function showFeedback($feedback) {
				$feedback.fadeIn(500);
				
				setTimeout(function () {
					$feedback.fadeOut(500);
				}, 6000);
			}
			
			// Comment form
			$.validate({
				form: '#comment-form',
				borderColorOnError: '',
				scrollToTopOnError: false,
				onSuccess: function(form) {
					$.ajax({
						url: './php/comment.php',
						type: 'POST',
						timeout: 15000,
						data: $(form).serialize(),
						error: function(jqXHR, textStatus) {
							showFeedback($(form).find('.form-feedback.on-error'));
						},
						success: function(data) {
							var $form = $(form);
							
							if (data == 'success') {
								showFeedback($form.find('.form-feedback.on-valid'));
								$form.get(0).reset();
							} else {
								showFeedback($form.find('.form-feedback.on-error'));
							}
						}
					});
					
					return false;
				}
			});
			
			// Contact form
			$.validate({
				form: '#contact-form',
				borderColorOnError: '',
				scrollToTopOnError: false,
				onSuccess: function(form) {
					$.ajax({
						url: './php/contact.php',
						type: 'POST',
						timeout: 15000,
						data: $(form).serialize(),
						error: function(jqXHR, textStatus) {
							showFeedback($(form).find('.form-feedback.on-error'));
						},
						success: function(data) {
							var $form = $(form);
							
							if (data == 'success') {
								showFeedback($form.find('.form-feedback.on-valid'));
								$form.get(0).reset();
							} else {
								showFeedback($form.find('.form-feedback.on-error'));
							}
						}
					});					
					
					return false;
				}
			});
			
			// Order form
			$.validate({
				form: '#order-form',
				borderColorOnError: '',
				scrollToTopOnError: false,
				onSuccess: function(form) {
					$.ajax({
						url: './php/order.php',
						type: 'POST',
						timeout: 15000,
						data: $(form).serialize(),
						error: function(jqXHR, textStatus) {
							showFeedback($(form).find('.form-feedback.on-error'));
						},
						success: function(data) {
							var $form = $(form);
							
							if (data == 'success') {
								showFeedback($form.find('.form-feedback.on-valid'));
								
								$form.get(0).reset();
								$form.find('.form-feedback.on-valid').fadeIn(500);
								$form.find('.form-content').fadeOut(500);
							} else {
								showFeedback($form.find('.form-feedback.on-error'));
							}
						}
					});
					
					return false;
				}
			});
			
			// Cart form
			$.validate({
				form: '#add-to-cart',
				borderColorOnError: '',
				scrollToTopOnError: false,
				onSuccess: function(form) {
					$.ajax({
						url: './php/cart.php',
						type: 'POST',
						timeout: 15000,
						data: $(form).serialize(),
						success: function(data) {
							if (data == 'success') {
								showFeedback($(form).find('.form-feedback.on-valid'));
							}
						}
					});					
					
					return false;
				}
			});
			
			// Coupon code
			$.validate({
				form: '#coupon-code',
				borderColorOnError: '',
				scrollToTopOnError: false,
				onSuccess: function(form) {
					$.ajax({
						url: './php/coupon.php',
						type: 'POST',
						timeout: 15000,
						data: $(form).serialize(),
						success: function(data) {
							if (data == 'success') {
								$(form).find('.has-feedback').addClass('has-success');
							}
						}
					});					
					
					return false;
				}
			});
		},
		
		
		
		/*
			Carousels
		*/
		
		Carousels: function () {
			
			// Slideshow
			$('.slideshow .sliders').each(function() {

				var $this			= $(this),
					$itemSliderNav	= $this.data('slider-nav');

				$this.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
					var i = (currentSlide ? currentSlide : 0) + 1;
					$('#' + $itemSliderNav).attr('data-slide-count', (i + '/' + slick.slideCount + ' '));
				});

				$this.slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
					autoplay: true,
					appendDots: $('#' + $itemSliderNav),
					prevArrow: $('.slideshow .slick-prev'),
					nextArrow: $('.slideshow .slick-next')
				});

			});
			
			// Partners
			$('.partner-carousel').slick({
				slidesToShow: 5,
				slidesToScroll: 1,
				arrows: false,
				autoplay: true,
				autoplaySpeed: 2000,
				responsive: [
					{
						breakpoint: 1300,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});
			
			// Review
			$('.reviews-carousel').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				dots: true,
				autoplay: true,
				autoplaySpeed: 5000
			});
			
			// Reviews - multiple columns
			$('.reviews-carousel-2').slick({
				slidesToShow: 3,
				slidesToScroll: 3,
				arrows: false,
				dots: true,
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				]
			});
			
			// Posts list
			$('.posts-carousel').each(function() {	
				var $postsCarousel		= $(this),
					$postsCarouselNav	= $('#' + $postsCarousel.data('carousel-nav'));

				$postsCarousel.slick({
					slidesToShow: 5,
					slidesToScroll: 1,
					arrows: false,
					dots: false,
					autoplay: true,
					autoplaySpeed: 3000,
					responsive: [
						{
							breakpoint: 1600,
							settings: {
								slidesToShow: 4
							}
						},
						{
							breakpoint: 1300,
							settings: {
								slidesToShow: 3
							}
						},
						{
							breakpoint: 992,
							settings: {
								slidesToShow: 2
							}
						},
						{
							breakpoint: 768,
							settings: {
								slidesToShow: 1
							}
						}
					]
				});

				$postsCarousel.on('beforeChange', function(event, slick, currentSlide, nextSlide){
					$postsCarouselNav[0].noUiSlider.set(nextSlide);
				});
				
				noUiSlider.create($postsCarouselNav[0], {
					start: 0,
					step: 1,
					connect: true,
					range: {
						'min': 0,
						'max': parseInt($postsCarousel.find('.slick-slide:not(.slick-cloned)').length - 1)
					}
				});

				$postsCarouselNav[0].noUiSlider.on('update', function (values) {
					$postsCarousel[0].slick.slickGoTo(parseInt(values));
				});
			});
			
			// Item box
			$('.item-slider').each(function() {

				var $this			= $(this),
					$itemSliderNav	= $this.data('slider-nav'),
					$showArrows		= (typeof $this.data('slider-arrows') !== 'undefined') ? true : false;
				
				$this.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
					var i = (currentSlide ? currentSlide : 0) + 1;
					$('#' + $itemSliderNav).attr('data-slide-count', (i + '/' + slick.slideCount + ' '));
				});

				$this.slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: $showArrows,
					dots: true,
					//autoplay: true,
					//autoplaySpeed: (15 + Math.floor(Math.random() * 26)) * 500,
					appendDots: $('#' + $itemSliderNav)
				});

			});

			// Featured item
			$('.featured-slider').each(function() {

				var $this			= $(this),
					$itemSliderNav	= $this.data('slider-nav');

				$this.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
					var i = (currentSlide ? currentSlide : 0) + 1;
					$('#' + $itemSliderNav).attr('data-slide-count', (i + '/' + slick.slideCount + ' '));
				});

				$this.slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: true,
					dots: true,
					appendDots: $('#' + $itemSliderNav),
					centerMode: true,
					centerPadding: '145px',
					responsive: [
						{
							breakpoint: 768,
							settings: {
								centerPadding: '90px'
							}
						}
					]
				});

			});

			// Item multiple rows
			$('.item-list-slider').each(function() {

				var $this				= $(this),
					$itemSliderArrow	= $this.data('slider-arrow');

				$this.slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: true,
					dots: false,
					rows: 3,
					prevArrow: $('#' + $itemSliderArrow).find('.prev'),
					nextArrow: $('#' + $itemSliderArrow).find('.next')
				});

			});
			
			// Product thumbnails
			$('.product-carousel-nav').slick({
				slidesToShow: 5,
				slidesToScroll: 1,
				dots: false,
				focusOnSelect: true,
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 3,
						}
					}
				]
			});
		},
		
		
		
		/*
			Masonry
		*/
		
		Masonry: function () {
			var $filterSection = $('.filter-section');
			
			$filterSection.imagesLoaded(function() {
				var $masonry = $filterSection.isotope({
					itemSelector: '.item',
					percentPosition: true
				});
				
				$masonry.on('arrangeComplete', function() {
					$(window).trigger('scroll');
				});
			});
			
			
			// Filter tab list
			$('[data-filter-tab]').on('click', 'a', function(event) {
				event.preventDefault();

				var $this			= $(this),
					$wrapper		= $this.closest('[data-filter-tab]'),
					$parent			= $this.parent(),
					$section		= $wrapper.data('filter-tab'),
					$filterValue	= $this.attr('href').substring(1);

				if ($filterValue.length > 0) {
					$filterValue = '.' + $filterValue;
				}

				$('#' + $section).isotope({ filter: $filterValue });

				$wrapper.find('li').removeClass('active');
				$parent.addClass('active');
			});
		},
		
		
		
		/*
			Countdown
		*/
		
		Countdown: function () {
			$('.countdown').each(function() {
				var $countdown		= $(this),
					$countdownTime	= $countdown.data('final-date');

				$countdown.countdown($countdownTime, function(event) {
					$countdown.html(event.strftime(''
						+ '<div class="column">'
						+ 	'<div class="count">%D</div>'
						+ 	'<div class="name">' + countdownText.days + '</div>'
						+ '</div>'
						+ '<div class="column">'
						+ 	'<div class="count">%H</div>'
						+ 	'<div class="name">' + countdownText.hours + '</div>'
						+ '</div>'
						+ '<div class="column">'
						+ 	'<div class="count">%M</div>'
						+ 	'<div class="name">' + countdownText.minutes + '</div>'
						+ '</div>'
						+ '<div class="column">'
						+ 	'<div class="count">%S</div>'
						+ 	'<div class="name">' + countdownText.seconds + '</div>'
						+ '</div>'));
				});
			});
		},
		
		
		
		/*
			Input with count button
		*/
		
		CountInput: function () {
			$('.count-input').on('click', '.btn', function(event) {
				event.preventDefault();

				var $button			= $(this),
					$formControl	= $button.closest('.count-input').find('.form-control'),
					$oldValue		= $formControl.val(),
					$newValue		= 0;

				if ($button.data('value') == 'plus') {
					$newValue = parseFloat($oldValue) + 1;
				} else if ($oldValue > 0) {
					$newValue = parseFloat($oldValue) - 1;
				}

				$formControl.val($newValue);
			});
		},
		
		
		
		/*
			Counter Up
		*/
		
		CounterUp: function () {
			$('.counter-up').each(function() {
				var $counterUp		= $(this),
					$counterValue	= $counterUp.text(),
					$customAnimTime	= animationTime;
				
				if(typeof $counterUp.attr('data-percentage') !== 'undefined') {
					$customAnimTime = $counterValue * ($customAnimTime / 100);
				} else if($customAnimTime > 0) {
					$customAnimTime = $counterUp.data('animtime');
				}
				
				$counterUp.viewportChecker({
					callbackFunction: function(elem, action){
						$counterUp.prop('counter', 0).animate({
							counter: $counterValue
						}, {
							duration: $customAnimTime,
							easing: 'linear',
							step: function (now) {
								$counterUp.text(Math.ceil(now));
							}
						});
					}
				});
				
			});
		},
		
		
		
		/*
			Progressbars
		*/
		
		Progressbars: function () {
			// Progress sqare
			var progressSquare = function(className) {
				$(className).each(function() {
					var $this				= $(this),
						$progressFill		= $this.find('.bar.fill'),
						$progressPercent	= parseInt($this.attr('data-percent')),
						$progressWidth		= parseInt($this.parent('.progress-square').css('width')),
						$progressHeight		= $progressWidth,
						$progressLength		= parseInt(($progressWidth + $progressHeight) * 2);

					$this.find('.bar').css({
						strokeDasharray: $progressLength + 'px',
						strokeDashoffset: $progressLength + 'px',
					});


					$progressFill.animate({
						strokeDashoffset: $progressLength - ($progressLength / (100 / $progressPercent)) + 'px'
					}, {
						duration: $progressPercent * (animationTime / 100),
						easing: 'linear'
					});
				});
			}
			
			var progresSquareClass = '.progress-square svg';
			
			$(progresSquareClass).viewportChecker({
				callbackFunction: function(elem, action) {
					progressSquare(progresSquareClass);	
				}
			});	

			$(window).on('resize', function() {
				clearTimeout(window.resizedFinished);

				window.resizedFinished = setTimeout(function(){
					progressSquare(progresSquareClass);
				}, 250);	
			});
			
			// Progress bar
			$('.progress-bar').each(function() {
				var $progressBar	= $(this),
					$progressValue	= $progressBar.data('percent');
				
				$progressBar.viewportChecker({
					callbackFunction: function(elem, action){
						$progressBar.animate({
							width: $progressValue + '%'
						}, {
							duration: $progressValue * (animationTime / 100),
							easing: 'linear'
						});
					}
				});
			});
		},
		
		
		
		/*
			Range slider
		*/
		
		RangeSlider: function () {
			var rangeSlider = $('.range-slider');

			for ( var i = 0; i < rangeSlider.length; i++ ) {
				var slider = rangeSlider[i],
					min = parseInt(slider.getAttribute('data-min')),
					max = parseInt(slider.getAttribute('data-max'));

				if(slider.getAttribute('data-before')) {
					var before = slider.getAttribute('data-before');
				}

				if(slider.getAttribute('data-after')) {
					var after = slider.getAttribute('data-after');
				}

				noUiSlider.create(slider, {
					start: [ min, max ],
					step: 1,
					tooltips: true,
					connect: true,
					range: {
						'min': [ min ],
						'max': [ max ]
					},
					format: wNumb({
						decimals: 0,
						thousand: ' ',
						prefix: before,
						postfix: after
					})
				});
			};
		},
		
		
		
		/*
			Map
		*/
		
		Map: function () {
			var wb_routing_gmap = {
				directionsService: '',
				map: '',
				routingContainer: ''
			};
			
			if($('#map_canvas').length && $('#routing_container').length) {
				wb_routing_gmap.directionsService = new google.maps.DirectionsService();
				wb_routing_gmap.routingContainer = new google.maps.DirectionsRenderer();
				
				var markerPosition = new google.maps.LatLng(location.latitude,location.longitude);
				var stylesArray = [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"administrative","elementType":"labels","stylers":[{"saturation":"-100"}]},{"featureType":"administrative","elementType":"labels.text","stylers":[{"gamma":"0.75"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"lightness":"-37"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f9f9f9"}]},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"saturation":"-100"},{"lightness":"40"},{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"labels.text.fill","stylers":[{"saturation":"-100"},{"lightness":"-37"}]},{"featureType":"landscape.natural","elementType":"labels.text.stroke","stylers":[{"saturation":"-100"},{"lightness":"100"},{"weight":"2"}]},{"featureType":"landscape.natural","elementType":"labels.icon","stylers":[{"saturation":"-100"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"saturation":"-100"},{"lightness":"80"}]},{"featureType":"poi","elementType":"labels","stylers":[{"saturation":"-100"},{"lightness":"0"}]},{"featureType":"poi.attraction","elementType":"geometry","stylers":[{"lightness":"-4"},{"saturation":"-100"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"},{"visibility":"on"},{"saturation":"-95"},{"lightness":"62"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road","elementType":"labels","stylers":[{"saturation":"-100"},{"gamma":"1.00"}]},{"featureType":"road","elementType":"labels.text","stylers":[{"gamma":"0.50"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"saturation":"-100"},{"gamma":"0.50"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"},{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"lightness":"-13"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"lightness":"0"},{"gamma":"1.09"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"},{"saturation":"-100"},{"lightness":"47"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"lightness":"-12"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"saturation":"-100"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"},{"lightness":"77"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"lightness":"-5"},{"saturation":"-100"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"saturation":"-100"},{"lightness":"-15"}]},{"featureType":"transit.station.airport","elementType":"geometry","stylers":[{"lightness":"47"},{"saturation":"-100"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]},{"featureType":"water","elementType":"geometry","stylers":[{"saturation":"53"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"lightness":"-42"},{"saturation":"17"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"lightness":"61"}]}];

				var myOptions = {
					zoom: 14,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					center: markerPosition,
					scrollwheel: false,
					panControl: false,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false,
					rotateControl: false
				}

				wb_routing_gmap.map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
				wb_routing_gmap.map.setOptions({styles: stylesArray});

				var marker = new google.maps.Marker({
					position: markerPosition,
					map: wb_routing_gmap.map,
				});

				wb_routing_gmap.routingContainer.setMap(wb_routing_gmap.map);
				wb_routing_gmap.routingContainer.setPanel(parent.document.getElementById("routing_container"));
			}
			
			$('.route-form .btn').on('click', function(event) {
				event.preventDefault();
				
				var startAddress		= $('#start_point').val(),
					destinationAddress	= $('#end_point').val(),
					travelMode			= $(this).data('routing');
				
				if (travelMode == 'DRIVING') {
					travelMode = google.maps.DirectionsTravelMode.DRIVING;
				} else if (travelMode == 'WALKING') {
					travelMode = google.maps.DirectionsTravelMode.WALKING;
				} else if (travelMode == 'TRANSIT') {
					travelMode = google.maps.DirectionsTravelMode.TRANSIT;
				}
				
				var request = {
					origin: startAddress,
					destination: destinationAddress,
					travelMode: travelMode
				};
				
				wb_routing_gmap.directionsService.route(request, function(response, status) {
					if (status == google.maps.DirectionsStatus.OK) {
						wb_routing_gmap.routingContainer.setDirections(response);
					}
				});
			});
		},
		
		
		
		/*
			Apps
		*/
		
		Apps: function () {
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
			
			// Modal
			$document.on('opened', '.remodal', function () {
				$('.product-carousel-nav').slick('setPosition', 0);
				
				var carouselImg = $('.product-carousel-image .zoomWrapper');
				
				carouselImg.css({
					width: carouselImg.find('img').width(),
					height: carouselImg.find('img').height(),
				});
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
			
			// Custom select
			$('.input-select').selectric({
				responsive: true,
				customClass: {
					prefix: 'custom-select'
				}
			});
			
			// Rating
			$('.rating-input').barrating({
				theme: 'icon-rating'
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
			
			// Item view chooser
			var itemViewContainer	= $('#item-view-container'),
				itemViewChooser		= $('.item-view-chooser'),
				activeItemView		= itemViewChooser.find('.button.active').data('view'),
				incPath				= './inc/';
			
			itemViewContainer.load(incPath + activeItemView + '.html');

			itemViewChooser.on('click', '.button', function(event) {
				event.preventDefault();
				
				var $this = $(this);
				
				itemViewChooser.find('.button').removeClass('active');
				$this.addClass('active');
				
				itemViewContainer.load(incPath + $this.data('view') + '.html');
			});
			
			// Gallery with zoom
			var galleryImage = $('[data-gallery-id]');
			
			galleryImage.each(function() {
				var $this		= $(this),
					galleryId	= $this.data('gallery-id');
				
				$this.elevateZoom({
					zoomType: 'inner',
					easing: 'zoom',
					cursor: 'crosshair',
					responsive: true,
					gallery: galleryId,
					galleryActiveClass: 'active',
					imageCrossfade: true,
					zoomWindowFadeIn: 500,
					zoomWindowFadeOut: 500
				});
			});
			
			galleryImage.closest('a').on('click', function() {
				var $this		= $(this),
					galleryId	= $this.find('img').data('gallery-id'),
					currentImg	= $('#' + galleryId).find('.active').data('zoom-image');
				
				$this.attr('href', currentImg);
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
		},
		
		
		
		/*
			Header
		*/
		
		Header: function () {
			var $window = $(window);
			
			$window.on('resize', function () {
				var headerSticky		= $('.header.sticky'),
					headerTopPosition	= (headerSticky.length) ? headerSticky.offset().top : 0;
				
				$window.on('scroll', function () {
					var body		= $('body'),
						scrollPx	= $(this).scrollTop(),
						header		= $('.header');

					if (headerTopPosition && (scrollPx >= headerTopPosition)) {
						header.addClass('on-top');
						body.css('padding-top', header.outerHeight());
					} else {
						header.removeClass('on-top');
						body.css('padding-top', 0);
					}

					if (scrollPx > 30) {
						body.addClass('scrolled');
					} else {
						body.removeClass('scrolled');
					}
				}).trigger('scroll');
			}).trigger('resize');
		},
		
		
		
		/*
			Header search
		*/
		
		HeaderSearch: function () {
			$('.header-search').on('click', '.option-icon, input[type="text"]', function (event) {
				event.stopPropagation();
				
				$(event.delegateTarget).addClass('active');
			});

			$(window).on('click', function() {
				$('.header-search').removeClass('active');
			});
		},
		
		
		
		/*
			Menu
		*/
		
		Menu: function () {
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
		},
		
	};
	
	
	
	fn.Launch();
	
})(jQuery);