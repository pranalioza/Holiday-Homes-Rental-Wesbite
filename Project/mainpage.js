$(window).scroll(function() {
	var currentPos = $(this).scrollTop();
	var topNav = $('.top-nav');
	var searchbar = $('#search-bar');
	if(currentPos >= searchbar.offset().top)
	{
		topNav.addClass('active');
	}
	else{

	$(this).removeClass('active');	
	}

});




