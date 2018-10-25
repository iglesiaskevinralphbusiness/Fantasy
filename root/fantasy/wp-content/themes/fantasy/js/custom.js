jQuery(document).ready(function($){



  $("#slider3").responsiveSlides({
    auto: true,
    pager:false,
    nav:true,
    speed: 500,
    namespace: "callbacks",
    before: function () {
      $('.events').append("<li>before event fired.</li>");
    },
    after: function () {
      $('.events').append("<li>after event fired.</li>");
    }
  });

  $("#lightGallery").lightGallery({
		mode:"fade",
		speed:800,
		caption:true,
		desc:true,
		mobileSrc:true
	});

  $("#owl-demo").owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    autoPlay : true,
    navigation :true,
		items : 4,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
	});

  $(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});

    $().UItoTop({ easingType: 'easeOutQuart' });

    // reorder
    var input = $('.input__field').detach();
    $('.wpcf7-form-control-wrap').not('.your-message').remove();
    $('.input--ichiro').each(function(i, el){
      $(el).prepend(input[i]);
    });

});
