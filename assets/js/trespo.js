$(document).ready(function(){
	$(".botonHamburguesa").click(function(){
		$(this).find(".linea").toggleClass("equis");
		$(".trespo-nav-container-center").toggleClass("in");
	})

	var slide = $('.main-slide');
	slide.owlCarousel({
		
		items:1,
	    loop:true,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    autoplay:true,
	    autoplayTimeout:6000,
    	autoplayHoverPause:true,
	})
	var fame = $('.halloffame-trespo');
	fame.owlCarousel({
		margin:10,
		items:5,
	    loop:true,
	    nav:false,
	    responsiveClass:true,
    	responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
	})
})

