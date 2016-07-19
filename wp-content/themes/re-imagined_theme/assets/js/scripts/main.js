+function ($) {
    'use strict';

$('.description').hide();

$('.one').hover(function() {
	$(this).children('.description').slideDown();
}, function() {
	$(this).children('.description').slideUp();
});

}(jQuery);
