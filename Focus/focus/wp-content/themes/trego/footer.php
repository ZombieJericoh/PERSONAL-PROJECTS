<!-- Scroll Top Button -->
    <a id="scroll-top" href="#" title="Go to Top">Top</a>

	<!-- END -->
    <script src="<?php echo bloginfo("template_url") ?>/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo bloginfo("template_url") ?>/js/jquery.fitvids.js"></script>
    <script src="<?php echo bloginfo("template_url") ?>/js/retina.min.js"></script>
    <script src="<?php echo bloginfo("template_url") ?>/js/jquery.placeholder.js"></script>
    <script src="<?php echo bloginfo("template_url") ?>/js/jquery.hoverIntent.min.js"></script>
    <script src="<?php echo bloginfo("template_url") ?>/js/dropdown.js"></script>
    <script src="<?php echo bloginfo("template_url") ?>/js/twitter/jquery.tweet.min.js"></script>
    <script src="<?php echo bloginfo("template_url") ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo bloginfo("template_url") ?>/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo bloginfo("template_url") ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo bloginfo("template_url") ?>/js/main.js"></script>

    <script>
        $(function() {
            // BxSlider
            var calCulateHeight = function() {

                var newHeight = $(window).height();
                $('.bx-viewport').css('height', newHeight);
                $('.bxslider').find('li').css('height', newHeight);

            };

            $('.bxslider').bxSlider({
                mode: 'fade',
                captions: false,
                speed: 1000,
                auto: true,
                pause: 7000,
                pager:false,
                onSliderLoad: function(){
                    calCulateHeight();
                },
                onSlideBefore: function(currentSlide) {
                
                },
                onSlideAfter: function(currentSlide){
                    
                },
                onSliderResize: function() {
                    calCulateHeight();
                }
            });

        });
    </script>
    </body>
</html>