// Default Functions


$(document).ready(function() {
	
	//Fancybox
	$("a.fancybox").fancybox({
		'titlePosition' : 'inside'
	});
	
	
	// Scroll To
	$('a.scroll').click(function(e){
		var scroll_height = $($(this).attr('href')).offset().top - 60;
		$('html, body').stop().animate({scrollTop: (scroll_height)}, 800);
		e.preventDefault();
	});
	
	
	// Select Fields
	$('select.inputfield').change(function(){
		var optionColor = $('.inputfield').css('color');
		$(this).css('color', optionColor);
	});
	
	
	// Tabs
	$('#tab1').show();
	$('ul.tabs-nav li').click(function(){ 
		$('.tabs-wrap ul li').removeClass('active');
		$(this).addClass('active'); 
		var currentTab = $(this).find("a[href]").attr('href'); 
		$('.tab-frame').hide();
		$(currentTab).fadeIn(600);
		return false;
	});
	
	
	// Tooltips
	$('a.tooltip').click(function(e){
		e.preventDefault();
	});
	$('.tooltip').hover(
		function(){
		$(this).find('span').stop().show();
		},
		function(){
		$(this).find('span').stop().fadeOut(100);
	});
	
	
	// Mobile Nav 
	$('.mobile-nav').click(function(){
		$('header nav ul').fadeToggle(100);
	});
	$('header nav li a').click(function(){
		$('header nav ul').fadeOut(100);
	});

});// End Document Ready


