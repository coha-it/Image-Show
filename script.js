// PanZoom 
var owl;
var owlDelay = 400;

jQuery(document).ready(function($){

	// Owl
	owl = $('.owl-carousel');
	owl.owlCarousel({
	  	loop:true,
	  	nav: false,
	  	lazyLoad: true,
	  	center: true,

	  	singleItem: true,
	  	// autoWidth: true,
	  	items: 1,
	  	
	  	// Thumbnails
	  	thumbs: true,
	  	// thumbImage: true,
	  	thumbsPrerendered: true,

	  });

	// Pan
	$(".pan").pan();

});

/* keyboard navigation */
$(document.documentElement).keyup(function(event) {    
    if (event.keyCode == 37) { /*left key*/
        owl.trigger('prev.owl.carousel', [owlDelay]);
    } else if (event.keyCode == 39) { /*right key*/
        owl.trigger('next.owl.carousel', [owlDelay]);
    }
});