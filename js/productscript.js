

var $ = jQuery.noConflict();

$(document).ready(function() {	
	// mobile menu
	$('nav#mainmenu > ul').mobileMenu({
	    defaultText: 'Navigation',
	    subMenuDash: '&ndash;'
	});
	$('.select-menu').wrap('<div class="sexyselect" />');
	
	
	//  dropdownmenu
	$('.children, .sub-menu').hide();
	$('nav ul li:has(ul)').mouseenter(function() {
		$(this).find('a').addClass('active-parent');
		$(this).find('> .children, > .sub-menu').slideDown('fast');	
	}).mouseleave(function() {
		$(this).find('a').removeClass('active-parent');
		$(this).find('> .children, > .sub-menu').hide();	
	});
	
});

$(window).load(function() {	
	
});




