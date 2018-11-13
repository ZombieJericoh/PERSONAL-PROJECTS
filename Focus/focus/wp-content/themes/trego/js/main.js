/* ================================================
----------- Trego Premium Html5 Template ---------- 
==================================================*/
(function ($) {
	"use strict";
	var Trego = {
		initialised: false,
		version: 1.0,
		mobile: false,
		menuCollapse: false,
		init: function () {

			if(!this.initialised) {
				this.initialised = true;
			} else {
				return;
			}
			
			// Call Trego Functions
			this.checkMobile();
			this.checkPlaceholder();
			this.menuHover();
			this.customScrollbar();
			this.tregoMenu();
			this.menuBtn();
			this.responsiveToggle();
			this.uniqueMenu();
			this.twitterFeed();
			this.flexSliders();
			this.registerCarousels();
			this.productZoomImage();
			this.animateTop();
			this.prettyPhoto();
			this.productRatings();
			this.productColorbox();
			this.flickrFeed();
			this.responsiveVideos();
			this.collapseIcons();
			this.priceSlider();
			this.selectBox();
			this.appearAnimation();
			this.parallax();
			this.searchInput();

		},
		checkMobile: function () {
			/* Mobile Detect*/
			if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				this.mobile = true;
			} else {
				this.mobile = false;
			}
		},
		checkPlaceholder: function () {
			/* Check for placeholder support */
			$.support.placeholder = (function(){
				var i = document.createElement('input');
				return 'placeholder' in i;
			})();

			// if Placeholder is not supported call plugin
			if (!$.support.placeholder && $.fn.placeholder) {
				$('input, textarea').placeholder();
			}
		},
		menuHover: function () {
				// Sub menu show/hide with hoverIntent plugin
				if ($.fn.hoverIntent) {
					$('ul.menu').hoverIntent({
						over: function() {
						if ($(window).width() > 768) {
							$(this).children('ul, .mega-menu').addClass('active-menu-item');
							$(this).addClass('active');
						} else {
							return
						}

						},
						out: function() {
							if ($(window).width() > 768) {
								$(this).children('ul, .mega-menu').removeClass('active-menu-item');
								$(this).removeClass('active');
								
							} else {
								return
							}
						},
						selector: 'li',
						timeout: 145,
						interval: 55
					});
				}
		},
		customScrollbar: function () {
			/* Custom scrollbar with nicescroll plugin */
			if ($.fn.niceScroll) {
				$('html').niceScroll({
					zindex: 9999,
					autohidemode: true,
					background: 'rgba(0,0,0, 0.04)' ,
					cursorcolor: '#45484a',
					cursorwidth: '7px',
					cursorborder: '1px solid #ccc',
					cursorborderradius: '4px'
				});
			}
		},
		tregoMenu: function () {
			var self = this,
				headerWrapper = $('#header-wrapper'),
				headerFooter = $('#header-footer'),
				menuBtn = $('#menu-btn'),
				menu = $('.menu'),
				winHeight = $(window).height(),
				winWidth = $(window).width();

				if (winWidth > 979) {
					if (winHeight < 800) {

					menuBtn.addClass('block');
					menu.fadeOut();
					self.menuCollapse = true;
					
					} else {
						menuBtn.removeClass('block');
						menu.fadeIn();
						self.menuCollapse = false;
						if(headerFooter.hasClass('relative')) {
							headerFooter.removeClass('relative');
						}
					}

					$('.nav-container').css({'left': 0 , 'width' : '100%'});

					if(menu.hasClass('responsive-menu')) {
						menu.removeClass('responsive-menu');
					}
					
					// After resize check for submenus
					if (menu.is(':hidden') || menu.find('ul, .mega-menu').is(':hidden')) {
						menu.fadeIn().find('ul, .mega-menu').fadeIn();
					}

				} else if (winWidth < 979 && winWidth > 768 ){
					var leftDistance = ( winWidth - 728) /2;
					menuBtn.removeClass('block');
					menu.fadeIn();
					self.menuCollapse = false;

					$('.nav-container').css({'left': - leftDistance, 'width' : winWidth});
					if(menu.hasClass('responsive-menu')) {
						menu.removeClass('responsive-menu');
					}

					// After resize check for submenus
					if (menu.is(':hidden') || menu.find('ul, .mega-menu').is(':hidden')) {
						menu.fadeIn().find('ul, .mega-menu').fadeIn();
					}
				} else {

					$('.nav-container').css({'left': 0 , 'width' : '100%'});

					menuBtn.addClass('block');
					menu.fadeOut().addClass('responsive-menu');

					menu.find('li, .col-2, .col-3, .col-4, .col-5').each(function () {
						var $this = $(this);
						if($this.find('ul').length || $this.find('.mega-menu').length) {
							if($this.find('.responsive-toggle').length) {
								
							} else {
								$('<span class="responsive-toggle"></span>').appendTo($this.find('a').first());
							}
						}
					});

					self.menuCollapse = true;
				}
				
				
		},
		menuBtn : function () {
			var self = this,
				menuBtn = $('#menu-btn'),
				menu = $('.menu'),
				headerFooter = $('#header-footer');

			menuBtn.on('click', function (e) {
				var winWidth = $(window).width();
				if (winWidth > 768) {
					if (self.menuCollapse) {
						menu.fadeIn(0, function () {
							self.menuCollapse = false;
							menuBtn.addClass('open');
						});
						headerFooter.addClass('relative');

					} else {
						menu.fadeOut(0, function () {
							self.menuCollapse = true;
							menuBtn.removeClass('open');
						});
						if(headerFooter.hasClass('relative')) {
							headerFooter.removeClass('relative');
						}
					}
				} else {

					if (self.menuCollapse) {
						$('.nav-container').addClass('active');
						menu.slideDown(500, function () {
							self.menuCollapse = false;
							menuBtn.addClass('open');
						});

					} else {
						$('.nav-container').removeClass('active');
						menu.slideUp(400, function () {
							self.menuCollapse = true;
							menuBtn.removeClass('open');
						});
					}
				}
				e.preventDefault();
			});
		},
		responsiveToggle : function () {
			// Responsive Menu Btn
			$('.menu.responsive-menu').find('.responsive-toggle').on('click', function(e) {
				var $this = $(this),
					parentEl = $this.closest('li, .col-2, .col-3, .col-4, .col-5'),
					firstUl = parentEl.find('ul, .mega-menu').first();
					
					if($this.hasClass('open') || parentEl.hasClass('open')) {
						
						firstUl.slideUp();
						$this.removeClass('open');
						parentEl.removeClass('open');

					} else {
						firstUl.slideDown();
						$this.addClass('open');
						parentEl.addClass('open');
					}

					e.preventDefault();
			});
		},
		uniqueMenu: function () {
			var self = this,
				uniqueMenu = $('.unique-menu, .unique-menu-tab'),
				uniqueEl = uniqueMenu.find('a'),
				uniqueBtn = $('#unique-menu-btn'),
				uniqueContentContainer = $('#unique-menu-content-container'),
				uniqueContent = uniqueContentContainer.find('#unique-menu-content'),
				contentSlider = $('.unique-menu-slider'),
				tabTitleEl = uniqueContent.find('.unique-menu-title'),
				navBtnPrev = uniqueContent.find('#unique-menu-prev'),
				navBtnNext = uniqueContent.find('#unique-menu-next'),
				closeBtn = uniqueContent.find('#unique-menu-close-btn'),
				contentOpen = false;


				// Open Content
				uniqueEl.on('click', function (e) {
					var $this = $(this);

					if ($(window).width() > 979) {
						if (($this.hasClass('active') || !uniqueContentContainer.is(':hidden'))) {
							return;
						} else {
							var targetId = $this.attr('href'),
								targetEl = $(targetId),
								tabTitle = $this.attr('title');

							// add menu active class
							$this.addClass('active');

							// add loading class to the content container
							if(!uniqueContent.hasClass('loading')) {
								uniqueContent.addClass('loading');
							}

							uniqueContentContainer.fadeIn(500, function () {
								// After window opened -- callback
								// if target elem is not undefined ...
								if (targetEl.length && targetEl.is(':hidden'))  {
									tabTitleEl.text(tabTitle);

									// remove loading class before loading contents
									if(uniqueContent.hasClass('loading')) {
										uniqueContent.removeClass('loading');
									}

									contentOpen = true;

									// load slider contents
									targetEl.fadeIn(500);
									targetEl.addClass('active').siblings().removeClass('active');;
								} else {
									return;
								}
							});
						}

					} else {

						var targetId = $this.attr('href'),
							targetEl = $(targetId),
							tabTitle = $this.attr('title');

						// add menu active class
						$this.addClass('active').closest('li').siblings().find('a').removeClass('active');

						if (targetEl.length && targetEl.is(':hidden'))  {

							// remove loading class before loading contents
							if(uniqueContent.hasClass('loading')) {
								uniqueContent.removeClass('loading');
							}

							contentOpen = true;

							uniqueContent.find('.unique-menu-slider.active').fadeOut(300, function () {
								// load slider contents
								targetEl.fadeIn(500);
								targetEl.addClass('active').siblings().removeClass('active');
							});
							
						} else {
							return;
						}

					}

					e.preventDefault();
				});

				uniqueBtn.on('click', function (e) {

					if (!uniqueContentContainer.is(':hidden')) {
						return;
					} else {

						// add loading class to the content container
						if(!uniqueContent.hasClass('loading')) {
							uniqueContent.addClass('loading');
						}

						contentOpen = true;

						uniqueContentContainer.fadeIn(500, function () {
							// After window opened -- callback
							// if target elem is not undefined ...
							var firstSlide = contentSlider.first();
								firstSlide.fadeIn(400);
								tabTitleEl.text('Latest Products');

								// remove loading class before loading contents
								if(uniqueContent.hasClass('loading')) {
									uniqueContent.removeClass('loading');
								}

								firstSlide.addClass('active').siblings().removeClass('active');
						});

					}

					e.preventDefault();
				});
				
				// Next Nav
				navBtnNext.on('click', function (e) {
					var $this = $(this),
						activeSlider = $('.unique-menu-slider.active'),
						contentRows = activeSlider.find('.row'),
						countRows = contentRows.length,
						activeRow = activeSlider.find('.row.active'),
						activeRowIndex = activeRow.index(),
						activeRowHeight = activeRow.outerHeight();

						if ((activeRowIndex +1) < countRows) {
							activeSlider.animate({'margin-top': '-=' + activeRowHeight}, 480);

							contentRows.removeClass('active').eq(activeRowIndex + 1).addClass('active');

							if (navBtnPrev.hasClass('disabled')) {
								navBtnPrev.removeClass('disabled');
							}

							if(activeRowIndex + 2 >= countRows) {
								$this.addClass('disabled');
							}

						}					

					e.preventDefault();
				});

				// Prev Nav
				navBtnPrev.on('click', function (e) {
					var $this = $(this),
						activeSlider = $('.unique-menu-slider.active'),
						contentRows = activeSlider.find('.row'),
						countRows = contentRows.length,
						activeRow = activeSlider.find('.row.active'),
						activeRowIndex = activeRow.index(),
						activeRowHeight = activeRow.outerHeight();

						if (activeRowIndex  != 0) {
							activeSlider.animate({'margin-top': '+=' + activeRowHeight}, 480);

							contentRows.removeClass('active').eq(activeRowIndex - 1).addClass('active');

							if (navBtnNext.hasClass('disabled')) {
								navBtnNext.removeClass('disabled');
							}

							if (activeRowIndex-1 == 0) {
								$this.addClass('disabled');
							}

						}
						

					e.preventDefault();
				});

				// Close Content
				closeBtn.on('click', function (e) {
					if(!uniqueContentContainer.is(':hidden')) {
						uniqueContentContainer.fadeOut(500, function () {
							// Clear menu active classes
							uniqueEl.removeClass('active');
							contentSlider.fadeOut(0).removeClass('active');
							tabTitleEl.text('');

							contentOpen = false;

							if (navBtnNext.hasClass('disabled')) {
								navBtnNext.removeClass('disabled');
							}

							if (!navBtnPrev.hasClass('disabled')) {
								navBtnPrev.addClass('disabled');
							}
						});
					}
					e.preventDefault();
				});

				$('html').on('click', function (event) {
					if(contentOpen && $(event.target).hasClass('overlay-cell')) {
						if(!uniqueContentContainer.is(':hidden')) {
							uniqueContentContainer.fadeOut(500, function () {
								// Clear menu active classes
								uniqueEl.removeClass('active');
								contentSlider.fadeOut(0).removeClass('active');
								tabTitleEl.text('');

								contentOpen = false;

								if (navBtnNext.hasClass('disabled')) {
									navBtnNext.removeClass('disabled');
								}

								if (!navBtnPrev.hasClass('disabled')) {
									navBtnPrev.addClass('disabled');
								}
							});
						}
					}
				});

		},
		prettyPhoto: function () {
			/* PrettyPhoto Lightbox Plugin */
			if ($.fn.prettyPhoto) {
				$("a[data-rel^='prettyPhoto']").prettyPhoto({
					hook: 'data-rel',
					animation_speed: 'fast',
					slideshow: 6000,
					autoplay_slideshow: true,
					show_title: false,
					deeplinking: false,
					social_tools: '',
					overlay_gallery: true
				});

			}
		},
		twitterFeed: function () {
			/* Footer Twitter Feed */
			if ($.fn.tweet && $('.twitter_feed').length) {
				$('.twitter_feed').tweet({
					modpath: './js/twitter/',
					avatar_size: '',
					count: 2,
					query: "themeforest",// write feed/search query here
					loading_text: "Waiting for twitter...",// loading placeholder text
					join_text: "",
					template: "{join}{text}{time}"
				});
			}
		},
		scrollBtn: function () {
			var windowTop = $(window).scrollTop(),
            	scrollTop = $('#scroll-top');

	        if (windowTop >= 200) {
	            scrollTop.addClass('fixed');
	        } else {
	            scrollTop.removeClass('fixed');
	        }
		},
		animateTop: function () {
			// Smooth scroll animation // Scroll top button
			$('#scroll-top').on('click', function (e) {
				$('html, body').animate({'scrollTop' : 0}, 600); // Change 600 for your own animation speed
				e.preventDefault();
			});
		},
		flexSliders: function () {
			if ($.fn.flexslider) {
				/* --  Category/Sidebar Bestseller Slider -- */
				$('.flexslider.sidebar-bestsellers').flexslider({
					animation: "slide",
					controlNav: false, // false
					slideshowSpeed: 10800,
					smoothHeight: true
				});

				/* --  Sidebar Testimonials Slider -- */
				$('.flexslider.sidebar-testimonials').flexslider({
					animation: "fade",
					controlNav: false, // false
					slideshowSpeed: 8200,
					smoothHeight: true
				});

				/* --  Sidebar Recent Posts Slider -- */
				$('.flexslider.sidebar-recent-posts').flexslider({
					animation: "slide",
					controlNav: false, // false
					slideshowSpeed: 10000,
					smoothHeight: true
				});

				/* --  Sidebar Post Gallery Slider -- */
				$('.flexslider.post-gallery-slider').flexslider({
					animation: "slide",
					controlNav: false, // false
					slideshowSpeed: 7800,
					smoothHeight: true
				});

				/* --  Sidebar Recent Posts Slider -- */
				$('.flexslider.banner-slider').flexslider({
					animation: "fade",
					directionNav: false,
					slideshowSpeed: 9500,
					smoothHeight: true
				});

				/* --  Testimonials -- */
				$('.flexslider.testimonials-slider').flexslider({
					animation: "fade",
					directionNav: false,
					controlNav: true, // false
					slideshowSpeed: 9000,
					smoothHeight: true
				});
			}
		},
		registerCarousels: function () {
			var self = this;
			if($.fn.owlCarousel) {

				// About us page team members carousel
				if($('.owl-carousel.team-carousel').length) {
					$('.owl-carousel.team-carousel').owlCarousel({
			            items: 3,
			            itemsDesktop : [1199,3],
			            itemsDesktopSmall: [979,3],
			            itemsTablet: [768,2],
			            itemsMobile : [479,1],
			            slideSpeed: 400,
			            autoPlay: 9200,
			            stopOnHover: true,
			            navigation: false,
			            pagination: false,
			            responsive: true,
			            autoHeight : true,
			            lazyLoad : true
			        }).data('carouselNavBtns', ['#team-carousel-prev', '#team-carousel-next']);
			        // data important to select custom nav buttons
				}

				// Product page related carousel
				if($('.owl-carousel.related-products-carousel').length) {
					$('.owl-carousel.related-products-carousel').owlCarousel({
			            items: 4,
			            itemsDesktop : [1199,4],
			            itemsDesktopSmall: [979,3],
			            itemsTablet: [768,2],
			            itemsMobile : [479,1],
			            slideSpeed: 400,
			            autoPlay: 9200,
			            stopOnHover: true,
			            navigation: false,
			            pagination: false,
			            responsive: true,
			            autoHeight : true,
			            lazyLoad : true
			        }).data('carouselNavBtns', ['#related-products-carousel-prev', '#related-products-carousel-next']);
			        // data important to select custom nav buttons
				}

				// Single Portfolio page recent carousel
				if($('.owl-carousel.recent-portfolio-carousel').length) {
					$('.owl-carousel.recent-portfolio-carousel').owlCarousel({
			            items: 4,
			            itemsDesktop : [1199,4],
			            itemsDesktopSmall: [979,3],
			            itemsTablet: [768,2],
			            itemsMobile : [479,1],
			            slideSpeed: 400,
			            autoPlay: 9200,
			            stopOnHover: true,
			            navigation: false,
			            pagination: false,
			            responsive: true,
			            autoHeight : true,
			            lazyLoad : true
			        }).data('carouselNavBtns', ['#recent-portfolio-carousel-prev', '#recent-portfolio-carousel-next']);
			        // data important to select custom nav buttons
				}

				// Product page acordion carousel
				if($('.owl-carousel.accordion-carousel').length) {
					$('.owl-carousel.accordion-carousel').owlCarousel({
			            items: 3,
			            itemsDesktop : [1199,3],
			            itemsDesktopSmall: [979,2],
			            itemsTablet: [768,2],
			            itemsMobile : [479,1],
			            slideSpeed: 400,
			            autoPlay: 18000,
			            stopOnHover: true,
			            navigation: false,
			            pagination: false,
			            responsive: true,
			            autoHeight : true,
			            lazyLoad : true
			        }).data('carouselNavBtns', ['#accordion-carousel-prev', '#accordion-carousel-next']);
			        // data important to select custom nav buttons
				}

				// Product page product gallery/zoom
				if($('.owl-carousel.product-gallery').length) {
					$('.owl-carousel.product-gallery').owlCarousel({
			            items: 3,
			            itemsDesktop : [1199,3],
			            itemsDesktopSmall: [979,3],
			            itemsTablet: [768,3],
			            itemsMobile : [479,3],
			            slideSpeed: 400,
			            autoPlay: 11000,
			            stopOnHover: true,
			            navigation: false,
			            pagination: false,
			            responsive: true,
			            autoHeight : true,
			            lazyLoad : true
			        }).data('carouselNavBtns', ['#product-gallery-carousel-prev', '#product-gallery-carousel-next']);
			        // data important to select custom nav buttons
				}

				// Onepage team members carousel
				if($('.owl-carousel.section-team-carousel').length) {
					$('.owl-carousel.section-team-carousel').owlCarousel({
			            items: 4,
			            itemsDesktop : [1199,4],
			            itemsDesktopSmall: [979,3],
			            itemsTablet: [768,2],
			            itemsMobile : [479,1],
			            slideSpeed: 700,
			            autoPlay: 9200,
			            stopOnHover: true,
			            navigation: false,
			            pagination: false,
			            responsive: true,
			            autoHeight : true,
			            lazyLoad : true
			        }).data('carouselNavBtns', ['#section-team-carousel-prev', '#section-team-carousel-next']);
			        // data important to select custom nav buttons
				}


				// Handle for owl carousels custom navigation buttons
				$('.owl-carousel').each(function() {
					var $this = $(this),
						owlCarousel = $this.data('owlCarousel'),
						owlBtns = $this.data('carouselNavBtns'),
						prevBtn, nextBtn;

					if (typeof owlCarousel === 'undefined' || typeof owlBtns === 'undefined') {
						return;
					}

					for(var key in owlBtns) {
						if (owlBtns[key].indexOf('next') == -1) {
							prevBtn = $(owlBtns[key]);
						}else {
							nextBtn = $(owlBtns[key]);
						}
					}

					prevBtn.on('click touchstart', function(e) {
				        owlCarousel.prev();
				        e.preventDefault();
					});

					nextBtn.on('click touchstart', function(e) {
				        owlCarousel.next();
				        e.preventDefault();
					});

					// If mousewhell plugin is inclueded
					// On Mousewheel event handle carousel move
					if($.fn.mousewheel && !self.mobile) {
						$this.on('mousewheel', function (e) {

							if (e.deltaY>0) {
								owlCarousel.next();
							} else {
								owlCarousel.prev();
							}

							return false;
						});
					}

				});
				
		    }
		},
		productRatings: function () {
			// Product Ratings
			$('.ratings').each(function () {
				var $this = $(this),
					newWidth = $this.data('rating'),
					containerWidth = $('.ratings-container').width(),
					calculatedWidth = ( containerWidth/containerWidth )

					$this.css('width', newWidth + '%' );
			});
		},
		productColorbox: function () {
			// Product color filter - small square boxes
			$('.colorbox').each(function () {
				var $this = $(this),
					newBgcolor = $this.data('bgcolor');

					$this.css('background-color', '#' + newBgcolor);
			});
		},
		responsiveVideos: function () {
			/* -- Check for fitVids plugin -- */
			if ($.fn.fitVids) {
				$('.video-container').fitVids();
			}
		},
		flickrFeed: function () {
			/* --  Flickr feed plugin - Sidebar  -- */
			if ($.fn.jflickrfeed) {
				$('ul.flickrfeed').jflickrfeed({
					limit: 6,
					qstrings: {
						id: '52617155@N08' // Replace with your id
					},
					itemTemplate: '<li>' + '<a data-rel="prettyPhoto[gallery-flickr]" href="{{image}}" title="{{title}}">' + '<img src="{{image_s}}" alt="{{title}}" />' + '<div class="flickr-overlay">&#43;</div></a>' + '</li>'
				}, function() {
					if ($.fn.prettyPhoto) {
						/* update prettyphoto plugin for feeds */
						$("a[data-rel^='prettyPhoto']").prettyPhoto({
							hook: 'data-rel',
			                animation_speed: 'fast',
			                slideshow: 6000,
			                autoplay_slideshow: true,
			                show_title: false,
			                deeplinking: false,
			                social_tools: '',
			                overlay_gallery: true
						});

					}

					if ($.fn.hoverdir) {
			        	$('ul.flickrfeed').find('li').each(function ()  {
			        		$(this).hoverdir({
			        			speed: 400,
			        			hoverDelay: 0,
			        			hoverElem: '.flickr-overlay',
			        			rotate3d: true
			        		});
			        	});
		        	}
				});
			}
		},
		priceSlider: function() {
			// Jslider For category pages / filter price
			if ($.fn.jslider) {
				$(".price-slider").slider({
					from: 0,
					to: 1200,
					step: 100, 
					dimension: '$'
				});
			}
		},
		productZoomImage: function () {
			var self = this;
			// Product page zoom plugin settings
			if ($.fn.elevateZoom) {
				$('#product-zoom').elevateZoom({
					responsive: true, // simple solution for zoom plugin down here // it can cause bugs at resize
					zoomType: ( self.mobile || $(window).width() < 768 ) ? 'inner' : 'window',
					borderColour: '#d0d0d0',
					zoomWindowPosition: 1,
					zoomWindowOffetx: 30,
					cursor: "crosshair",
					zoomWindowFadeIn: 400,
					zoomWindowFadeOut: 250,
					lensBorderSize: 3,
					lensOpacity: 1,
					lensColour: 'rgba(255, 255, 255, 0.25)'
				});

				$('.product-gallery').find('a').on('click', function (e) {
					var ez = $('#product-zoom').data('elevateZoom'),
						smallImg = $(this).data('image'),
						bigImg = $(this).data('zoom-image');

						ez.swaptheimage(smallImg, bigImg);
					e.preventDefault();
				});
			}
		},
		selectBox: function () {
			//Custom select box via selectbox plugin
			if ($.fn.selectbox) {
				$('.selectbox').selectbox({
					effect: "fade",
					onChange: function (value, inst) {
						
					}
				});
			}
			
		},
		appearAnimation: function () {

			
			if ($.fn.appear) {

				// Progress Bar Animation
				$('.progress-appear').appear();
				$('.progress-appear').on('appear', function () {
					var $this = $(this),
						progressVal =  $this.data('value'),
						animationTime = $this.data('animation-delay'),
						progressCount = $this.find('.progress-count');

					setTimeout(function() {
						$this.animate({ 'width' : progressVal + '%'}, 300, function () {
							progressCount.addClass('active');
							$this.removeClass('progress-appear');
						});
						
					}, animationTime)
					
				});

				// Apear animation
				$('.appear-animation').appear();
				$('.appear-animation').on('appear', function () {
					var $this = $(this),
						appearClass =  $this.data('appear-class'),
						animationTime = $this.data('animation-delay');

					setTimeout(function() {
						$this.removeClass('appear-animation').addClass('animated ' +appearClass);
						
					}, animationTime)
					
				});

				} else {

					// Callbacks if appear plugin is not inclueded
					$('.progress').each(function () {
						var $this = $(this),
							progressVal =  $this.data('value'),
							progressCount = $this.find('.progress-count');

						$this.css({ 'width' : progressVal + '%'});
						progressCount.addClass('active');
					});

					// Callbacks if appear plugin is not inclueded
					$('.appear-animation').each(function () {
						$(this).removeClass('appear-animation');
					})
				}

		},
		parallax: function () {
			// Parallax effect for bg // Onepage page
			if (!this.mobile && $.fn.parallax) {
				$('.fun-facts').addClass('parallax').parallax("50%", 0.3);
				$('.testimonials').addClass('parallax').parallax("50%", 0.3);
				$('.ourskills').addClass('parallax').parallax("50%", 0.3);
				$('.latest-tweets').addClass('parallax').parallax("50%", 0.3);
			}
		},
		collapseIcons: function () {
			// Change accordion/collapse icons with adding class
			$('.panel').each(function () {
				var $this= $(this),
					accordionBtn = $this.find('.accordion-btn'),
					accordionBody = $this.find('.accordion-body');

				if (accordionBtn.length) {
					accordionBody.on('shown.bs.collapse', function () {

						if (!accordionBtn.hasClass('open')) {
							accordionBtn.addClass('open');
						}
						
					}).on('hidden.bs.collapse', function () {
						if (accordionBtn.hasClass('open')) {
							accordionBtn.removeClass('open');
						}
						
					});
				}
				
			});

		},
		searchInput: function () {
			// Input animation for small devices < 767px
			var inputEl = $('#search').find('input');

			$('#search-btn').on('click', function (e) {
				var winWidth = $(window).width();

				if (!inputEl.hasClass('active') && winWidth <= 768) {
					inputEl.addClass('active');
				}else if (inputEl.hasClass('active') && winWidth <= 768){
					return;
				}

				e.preventDefault();

			});
			
		}

	};


	// Init Trego
	Trego.init();


	$(window).on('scroll', function () {
		Trego.scrollBtn();
	});

	// Smart Resize for webkit/ie
	if($.event.special.debouncedresize) {
		$(window).on('debouncedresize', function() {
	       Trego.tregoMenu();          
	    });
	} else {
		$(window).on('resize', function() {
	       Trego.tregoMenu();         
	    });
	}

})(jQuery);


/*----------------------------------------------------*/
//* Google javascript api v3  -- map */
/*----------------------------------------------------*/
(function () {
    "use strict";

    function initialize() {
        /* change your with your coordinates */
        var myLatLng = new google.maps.LatLng(51.520068, -0.156299), // Your coordinates
            mappy = {
                center: myLatLng,
                zoom: 15,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{
                    "elementType": "geometry",
                    "stylers": [{
                        "hue": "#000"
                    }, {
                        "weight": 1
                    }, {
                        "saturation": -200
                    }, {
                        "gamma": 0.70
                    }, {
                        "visibility": "on"
                    }]
                }]
            };
        var map = new google.maps.Map(document.getElementById("map"), mappy);

        new google.maps.Marker({
            position: myLatLng,
            map: map,
            animation: google.maps.Animation.DROP,
            title: 'Trego' // Title for marker
        });
    }

    if (document.getElementById("map")) {
        google.maps.event.addDomListener(window, 'load', initialize);
    }

}());