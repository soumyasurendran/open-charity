jQuery(document).ready(function($){

	// Mobile Menu
	jQuery('.toggle-nav').click(function(e){
		e.preventDefault();
		jQuery(this).toggleClass('active');
        jQuery('.menu').slideToggle('active');
	});

	// Members Slider
	$('#members').owlCarousel({
	    loop: true,
	    margin: 10,
	    nav: false,
	    responsiveClass: true,
	    responsive: {
	        0: {
	            items:1
	        },
	        640: {
	            items:2
	        },
	        768: {
	            items:3
	        },
	        1000: {
	            items:4,
	        },
	        1200: {
	            items:5
	        }
	    }
	});

	// Blog Slider 
	$('.owl-carousel.blog').owlCarousel({
		items: 4,
	    loop: true,
	    margin: 30,
	    nav: true,
	    dots: false,
	    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	    responsiveClass: true,
	    responsive: {
	        0: {
	            items:1
	        },
	        640: {
	            items:2
	        },
	        768: {
	            items:3
	        },
	        1000: {
	            items:4
	        }
	    }
	});
	
});
