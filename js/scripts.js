
(function($){
    // all jquery code goes in here
    $(document).ready(function(){ 

		// smoothScroll

 		$('a[href*=#]:not([href=#])').click(function() {
           if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
             var target = $(this.hash);
             target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
             if (target.length) {
               $('html,body').animate({
                 scrollTop: target.offset().top
               }, 1000);
               return false;
             }
           }
       });

 		// homepage slider
 		$('.bxslider-home').bxSlider({
 			auto: true,
 			nextSelector: '#slider-next',
 			prevSelector: '#slider-prev',
 			nextText: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
 			prevText: '<i class="fa fa-chevron-left" aria-hidden="true"></i>'
 		}); // end bxslider


 		$('.bxslider-work').bxSlider({
 			nextSelector: '#slider-next',
 			prevSelector: '#slider-prev',
 			nextText: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
 			prevText: '<i class="fa fa-chevron-left" aria-hidden="true"></i>'
 		}); // end bxslider

 		
 		$('.mobileNavIcon').on('click', function(){
 		$('.mobileNavIcon').addClass('is-visible');
 		   $('.mobile').slideToggle(500);
 		  }); 

 		$(window).on('resize', function(){
 		if($('.mobileNavIcon').hasClass('is-visible') && $(window).width() > 1025)
 		{
 		$('.mobileNavIcon').removeClass('is-visible');
 		   $('.mobile').slideToggle(500);
 		}
 		}); 

 		// Team Image and Description
 		$('.team-images').click(function() {

 			var get_parent_attr = $(this).data('parent');
      if ( $(window).width() > 1025 ) {
        $('.team-description').each(function(){
          var get_child_attr = $(this).data('desktop-child');

          if (get_child_attr == get_parent_attr) {
            $(this).slideToggle();
          } else { 
            $(this).slideUp();
          }
        });
      } else {
          $('.team-description').each(function(){
          var get_child_attr = $(this).data('child');

          if (get_child_attr == get_parent_attr) {
            $(this).slideToggle();
          } else { 
            $(this).slideUp();
          }
        });
      }

 		});




    });
})(jQuery);