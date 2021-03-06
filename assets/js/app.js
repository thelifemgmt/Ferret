// @codekit-prepend 'fancybox.min.js';
// @codekit-prepend 'placeholder.min.js';

// Default Functions


(function($){
	
	// Scroll To
	$('a.scroll').on('click', function(e){
		var scroll_height = $($(this).attr('href')).offset().top - 60;
		$('html, body').stop().animate({scrollTop: (scroll_height)}, 800);
		e.preventDefault();
	});
	
	
	// Select Fields
	$('select.inputfield').on('change', function(){
		var optionColor = $('.inputfield').css('color');
		$(this).css('color', optionColor);
	});
	
	
	// Tabs
	$('#tab1').show();
	$('ul.tabs-nav li').on('click', function(){
		$('.tabs-wrap ul li').removeClass('active');
		$(this).addClass('active');
		var currentTab = $(this).find('a[href]').attr('href');
		$('.tab-frame').hide();
		$(currentTab).fadeIn(600);
		return false;
	});

	
	// Mobile Nav 
	var mobileNav = function(){
		var $nav = $('.mobile-nav'),
			$menu = $('header nav ul'),
			$menuLink = $('header nav li a');
		
		$nav.on('click', function(){
			$nav.toggleClass('active');
			$menu.fadeToggle(100);
		});
		
		$menuLink.on('click', function(){
			$nav.removeClass('active');
			$menu.hide();
		});
	};
	
	
	//Fancybox
	$("a.fancybox").fancybox();
	
	
	// Function Calls
	mobileNav();
})(jQuery);
