jQuery(document).ready(function(){
    
	"use strict";
	
	/* ---------------------------------------------------------------------- */
    /*  FlexSlider
    /* ---------------------------------------------------------------------- */
	jQuery('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  jQuery('body').removeClass('loading');
		}
	});
	
});	