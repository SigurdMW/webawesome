</div><!--/container-->
<footer>
    <div class="container">
        <?php 
        //$numSidebar = wp_get_sidebars_widgets();
        //$numSidebarCnt = count($numSidebar['sidebar-1']);
        get_sidebar(); ?>
    </div>
    <div class="container footer-bottom-text">
        &copy;webAwesome 2015
    </div>
</footer>
<a href="#" class="scrollToTop"></a>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/jquery.animsition.min.js"></script>

<script>
    //fixed onscroll header, thanks to http://www.webdesignerdepot.com/2014/05/how-to-create-an-animated-sticky-header-with-css3-and-jquery/
    $(window).scroll(function() {
    if ($(this).scrollTop() > 240){  
        $('.page-header').addClass("sticky-header");
        //$('.main-content').addClass("scroll-margin");
      }
      else{
        $('.page-header').removeClass("sticky-header");
        //$('.main-content').removeClass("scroll-margin");
      }
    });
    
//fit text js thanks to https://github.com/davatron5000/FitText.js
/*!
* FitText.js 1.2
*
* Copyright 2011, Dave Rupert http://daverupert.com
* Released under the WTFPL license
* http://sam.zoy.org/wtfpl/
*
* Date: Thu May 05 14:23:00 2011 -0600
*/

(function( $ ){

  $.fn.fitText = function( kompressor, options ) {

    // Setup options
    var compressor = kompressor || 1,
        settings = $.extend({
          'minFontSize' : Number.NEGATIVE_INFINITY,
          'maxFontSize' : Number.POSITIVE_INFINITY
        }, options);

    return this.each(function(){

      // Store the object
      var $this = $(this);

      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };

      // Call once to set.
      resizer();

      // Call on resize. Opera debounces their resize by default.
      $(window).on('resize.fittext orientationchange.fittext', resizer);

    });

  };

})( jQuery );

//append to project
//jQuery(".post-title").fitText();
jQuery(".post-title").fitText(1,{ minFontSize: '16px', maxFontSize: '50px' });
    
//scroll to top - thanks to http://www.adriantomic.se/development/scroll-to-the-top-with-jquery/
$(document).ready(function(){	
    $(window).scroll(function(){
        if($(window).scrollTop() > 0){
            $(".scrollToTop").fadeIn(300);
        } else {
            $(".scrollToTop").fadeOut(300);
        }
    });
    $(".scrollToTop").click(function(){
        event.preventDefault();
        $("html, body").animate({
            scrollTop:0
        },"slow");
    });
});
    
//page loading animation thanks to http://git.blivesta.com/animsition/
$(document).ready(function() {
  
  $(".animsition").animsition({
  
    inClass               :   'fade-in',
    outClass              :   'fade-out',
    inDuration            :    500,
    outDuration           :    800,
    linkElement           :   '.animsition-link',
    // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
    loading               :    true,
    loadingParentElement  :   'body', //animsition wrapper element
    loadingClass          :   'animsition-loading',
    unSupportCss          : [ 'animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
    //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    
    overlay               :   false,
    
    overlayClass          :   'animsition-overlay-slide',
    overlayParentElement  :   'body'
  });
});
</script>
<?php wp_footer(); ?>

</body>
</html>
