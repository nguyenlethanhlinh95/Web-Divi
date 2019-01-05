$(document).ready(function(){
	  $('.schedule_slider').bxSlider({
	  	mode: 'horizontal',
	  	speed: 600,
	    pause: 4000,
	  	auto: true,
	  	randomStart: true,
	  	infiniteLoop: true,
	  	adaptiveHeight: false,
	  	stopAutoOnClick: false,
	  	autoHover: false,
	  	responsive:true,
	  	controls : false,
	  	minSlides: 1,
	  	maxSlides: 2
	  });

	  $('.saying_slider').bxSlider({
	  	mode: 'horizontal',
	  	speed: 600,
	    pause: 4000,
	  	auto: true,
	  	randomStart: true,
	  	infiniteLoop: true,
	  	adaptiveHeight: false,
	  	stopAutoOnClick: false,
	  	pager: false,
	  	autoHover: false,
	  	responsive:true,
	  	controls : false
	  });


	  $(".owl-carousel").owlCarousel({
			items: 1,
			loop:false,
			margin:10,
			responsiveClass:true,
			autoplay:true,
    		autoplayTimeout:4000
	  }); 


	  // scroll fix menu
	  $(window).on('scroll',function(){
		  	var position = window.scrollY;
		  	if (position>=85){
		  		$('#main-header').css({'background-color': '#36a6decc'}).addClass('menufixed');
		  		$('#main-header .et_menu_container').css({
		  			'top': '-7px'
		  		});
		  		$('header#main-header .logo_container a img#logo').css({
		  			'margin-top': '7px'
		  		});
		  	}
		  	else{
		  		$('#main-header').css({'background-color': 'transparent'}).removeClass('menufixed');
		  		$('#main-header .et_menu_container').css({
		  			'top': '38px'
		  		});
		  		$('header#main-header .logo_container a img#logo').css({
		  			'margin-top': '15px'
		  		});
		  	}
	  });
});