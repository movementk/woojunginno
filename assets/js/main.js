(function($) {
	$('#introduce .intro-slider').bxSlider({
		mode: 'fade',
		controls: false,
		auto: true,
		autoControls: true,
		autoControlsCombine: true,
		autoHover: true,
		pause: 8000,
		startText: '<i class="icon-play"></i>',
		stopText: '<i class="icon-pause"></i>',
		buildPager: function(slideIndex) {
			return "<span class='sr-only'>"+slideIndex+"</span>";
		},
		onSliderLoad: function(currentIndex) {
			window.setTimeout(function() {
				$('#introduce .intro-slider .intro-item').eq(currentIndex).addClass('active');
			}, 1000);
		},
		onSlideAfter: function($slideElement, oldIndex, newIndex) {
			$('#introduce .intro-slider .intro-item').removeClass('active');
			$slideElement.addClass('active');
		}
	});

	$('#news .news-list ul').bxSlider({
		mode: "vertical",
		pager: false,
		auto: true,
		autoHover: true,
		prevText: "<i class='icon-up-micro'></i>",
		nextText: "<i class='icon-down-micro'></i>",
	});
    
	$('#products .product-list ul').bxSlider({
		pager: false,
		auto: true,
		autoHover: true,
		prevText: "<i class='icon-left-open-big'></i>",
		nextText: "<i class='icon-right-open-big'></i>",
	});	
    
    $('#pr-video .pr-list').bxSlider({
		auto: false
	});
})(jQuery);