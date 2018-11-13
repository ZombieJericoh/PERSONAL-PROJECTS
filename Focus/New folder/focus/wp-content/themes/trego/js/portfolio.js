/* ================================================
----------- Trego Premium Html5 Template ---------- 
==================================================*/

(function($) {
	"use strict";
	var TregoPortfolio = {
		initialised : false,
		container : $('#portfolio-item-container'),
		init: function () {

			if(!this.initialised) {
				this.initialised = true;
			} else {
				return;
			}
			
			
			var self = this;
			if ($.fn.imagesLoaded) {

				imagesLoaded(self.container, function() {
					self.calculateWidth();
					self.isotopeActivate();
					// recall for plugin support
					self.isotopeFilter();
					self.hoverAnimation();
					self.prettyPhoto();
					self.infinitescroll();
					self.openProject();
					self.closeProject();
				});
				
			}
		},
		calculateWidth: function () {
			// Calculate items width for better responsive items
			var widthPort = $(window).width(),
                    contWidth = this.container.width(),
                    maxColumn = this.container.data('maxcolumn'),
                    itemW;

            if (widthPort > 1170) {
            	itemW = (maxColumn) ? maxColumn: 5;
            } else if (widthPort > 960) {
                itemW = (maxColumn) ? maxColumn: 4;
            } else if (widthPort > 768) {
                itemW = 3;
            } else if (widthPort > 540) {
                itemW = 2;
            } else {
                itemW = 1;
            }

            var targetItems = this.container.find('.portfolio-item');
            if (itemW >= 4 && targetItems.hasClass('wide')) {
            	this.container.find('.wide').css('width', (Math.floor(contWidth / itemW) * 2 ));
        		targetItems.not('.wide').css('width', Math.floor(contWidth / itemW ));
            } else {
            	targetItems.css('width', Math.floor(contWidth / itemW));
            }
			
		},
		isotopeActivate: function() {
			// Trigger for isotop plugin
			var container = this.container,
				layoutMode = container.data('layoutmode');

				var iso = container.isotope({
                	itemSelector: '.portfolio-item',
                	layoutMode: (layoutMode) ? layoutMode : 'masonry'
            	}).data('isotope');

				// checked layout mode via instance
				// console.log(iso);
		},
		isotopeReinit: function () {
			// Recall for isotope plugin
			this.container.isotope('destroy');
			this.isotopeActivate();
		},
		isotopeFilter: function () {
			// Isotope plugin filter handle
			var self = this,
				filterContainer = $('#portfolio-filter');
			filterContainer.find('a').on('click', function(e) {
				var $this = $(this),
					selector = $this.attr('data-filter'),
					animationclass = self.container.data('animationclass'),
					customAnimation = (animationclass) ? animationclass : 'fadeInUp';

				filterContainer.find('.active').removeClass('active');

				// Delete css Animation and class 
				// They effects filtering
				self.container.find('.portfolio-item').removeClass('animate-item '+ customAnimation);

				// And filter now
				self.container.isotope({
					filter: selector 
				});
				
				$this.addClass('active');
				e.preventDefault();
			});
		},
		elementsAnimate: function () {
			var animationclass = this.container.data('animationclass'),
				customAnimation = (animationclass) ? animationclass : 'fadeInUp';
			this.container.find('.animate-item').each(function() {
                var $this = $(this),
                    time = $this.data('animate-time');

                setTimeout(function() {
                    $this.addClass('animated ' +customAnimation);
                }, time);
            });
            
            /* relayout isotope after animation */
            this.container.isotope('layout');
		},
		hoverAnimation: function () {
			var rotate3d = this.container.data('rotateanimation'),
				rotate3dActive = ( rotate3d ) ? rotate3d : false;
				
			if ($.fn.hoverdir) {
                this.container.find('li').each(function ()  {
                    $(this).hoverdir({
                        speed: 400,
                        hoverDelay: 0,
                        hoverElem: '.portfolio-overlay',
                        rotate3d : rotate3dActive
                    });
                });
            }

		},
		prettyPhoto: function () {
			if ($.fn.prettyPhoto) {
                $("a[data-rel^='prettyPhoto']").prettyPhoto({
                    hook: 'data-rel',
                    animation_speed: 'fast',
                    slideshow: 6000,
                    autoplay_slideshow: true,
                    show_title: false,
                    deeplinking: false,
                    social_tools: '',
                    overlay_gallery: true,
                    opacity: 0.85,
                });

            }
		},
		infinitescroll: function () {
			var self = this;
			if ($.fn.infinitescroll) {
				this.container.infinitescroll({
	                navSelector  : '#page-nav',    // selector for the paged navigation 
	                nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
	                itemSelector : '.portfolio-item',     // selector for all items you'll retrieve
	                loading: {
	                finishedMsg: 'No more post to load.',
	                img: 'images/load.GIF' //images/load.gif // you need to give fullpath to gif  example -- //newsmartwave.net/html/trego/images/load.GIF
	                }
	            }, function (newElements) {

						self.container.isotope('appended', $(newElements));
						self.calculateWidth();
						self.elementsAnimate();
						self.container.isotope('layout');
						/*  Recall for hover animation and lightbox */
						self.hoverAnimation();
						self.prettyPhoto();
		                         
		            }
	        	);
			}
		},
		openProject: function () {
			// Open portfolio project with custom animations
			var targetEl = $('#portfolio-single-content'),
				targetElIn = targetEl.find('.single-portfolio');

			$('.open-btn').on('click', function (e) {

				if(targetEl.hasClass('onepage-portfolio-single')) {
					var targetPosition = ( ( targetEl.offset().top )- 80 );

					$('html, body').animate({'scrollTop' : targetPosition}, 800);
					$(targetElIn).fadeIn(1000);

				}else {
					$(targetEl).fadeIn(1000);
				}

				e.preventDefault();
			});
		},
		closeProject: function () {
			// Close Projects
			var targetEl = $('#portfolio-single-content'),
				targetElIn = targetEl.find('.single-portfolio');

			$('.portfolio-close').on('click', function (e) {

				if(targetEl.hasClass('onepage-portfolio-single')) {

					$(targetElIn).fadeOut(600);

				}else {

					$(targetEl).fadeOut(600);
				}


				e.preventDefault();
			});

		}
	};


	// Init Trego
	TregoPortfolio.init();

	// Smart Resize for webkit/ie
	if($.event.special.debouncedresize) {
		$(window).on('debouncedresize', function() {
	       TregoPortfolio.calculateWidth();
	       TregoPortfolio.isotopeReinit();          
	    });
	} else {
		$(window).on('resize', function() {
	       TregoPortfolio.calculateWidth();
	       TregoPortfolio.isotopeReinit();          
	    });
	}

	/*  check for pace loader plugin (included in html head tags )*/
	/* Animate Elements When pace page loader plugin done*/
	if(typeof Pace != 'undefined') {
		Pace.on('done', function() {
    		TregoPortfolio.elementsAnimate();
    	});
	} else { 
	/* if pace doesn't exists use window load event */
		$(window).on('load', function() {
			TregoPortfolio.elementsAnimate();
		})
	}
    
})(jQuery);