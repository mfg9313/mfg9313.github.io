// Menu Appear
    $(document).ready(function() {
        var headerTop = $('.scrolldown').offset().top;
        var headerBottom = headerTop + 120; // Sub-menu should appear after this distance from top.
	        $(window).scroll(function () {
	            var scrollTop = $(window).scrollTop(); // Current vertical scroll position from the top
	            if (scrollTop > headerBottom) { // Check to see if we have scrolled more than headerBottom
	                if (($(".menuBar").is(":visible") === false)) {
	                    $('.menuBar').fadeIn('slow');
	                }
	            } else {
	                if ($(".menuBar").is(":visible")) {
	                    $('.menuBar').hide();
	                }
	            }
	        });
    	});
// End Menu Appear

// Text Rotator
    $('.rotate').each(function(){
        var el = $(this);
        var text = $(this).html().split(",");
        el.html(text[0]);
        setInterval(function() {
            el.animate({
            textShadowBlur:20,
            opacity: 0
        }, 500 , function() {
            index = $.inArray(el.html(), text)
            if((index + 1) == text.length) index = -1
            el.text(text[index + 1]).animate({
                textShadowBlur:0,
                opacity: 1
            }, 500 );
        });
        }, 2000);
    });
// End Text Rotator

// Scroll Down Link
    $('.scrolldown').click(function() {
        var targetOffset = $('h1.topStories').offset().top-50;
        $('html,body').animate({scrollTop: targetOffset}, 1000);
    });
// End Scroll Down Link


