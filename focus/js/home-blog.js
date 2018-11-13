/* ================================================
----------- Trego Premium Html5 Template ---------- 
==================================================*/

(function($) {
	"use strict";
	var TregoHomeBlog = {
		initialised : false,
		container : $('#articles-container'),
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
					self.hoverAnimation();
					self.prettyPhoto();
					self.infinitescroll();
				});
				
			}
		},
		calculateWidth: function () {
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

			this.container.find('.article').css('width', Math.floor(contWidth / itemW));
		},
		isotopeActivate: function() {
			var container = this.container,
				layoutMode = container.data('layoutmode');

				var iso = container.isotope({
                	itemSelector: '.article',
                	layoutMode: (layoutMode) ? layoutMode : 'masonry'
            	}).data('isotope');

				// checked layout mode via instance
				// console.log(iso);
		},
		isotopeReinit: function() {
			this.container.isotope('destroy');
			this.isotopeActivate();
		},
		elementsAnimate: function () {
			var animationclass = this.container.data('animationclass'),
				customAnimation = (animationclass) ? animationclass : 'fadeInUp';
				
			this.container.find('.article').each(function() {
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
                        hoverElem: '.overlay',
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
	                itemSelector : '.article',     // selector for all items you'll retrieve
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
		}
	};


	// Init Trego
	TregoHomeBlog.init();
	
    // Smart Resize for webkit/ie
	if($.event.special.debouncedresize) {
		$(window).on('debouncedresize', function() {
	       TregoHomeBlog.calculateWidth();
	       TregoHomeBlog.isotopeReinit();          
	    });
	} else {
		$(window).on('resize', function() {
	       TregoHomeBlog.calculateWidth();
	       TregoHomeBlog.isotopeReinit();          
	    });
	}

	/*  check for pace loader plugin (included in html head tags )*/
	/* Animate Elements When pace page loader plugin done*/
	if(typeof Pace != 'undefined') {
		Pace.on('done', function() {
    		TregoHomeBlog.elementsAnimate();
    	});
	} else { 
	/* if pace doesn't exists use window load event */
		$(window).on('load', function() {
			TregoHomeBlog.elementsAnimate();
		})
	}
    
})(jQuery);