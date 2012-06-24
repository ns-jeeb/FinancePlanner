/**
 * @author Jeeb
 */
$(document).ready( function() {
	
	setMainContentSize();
});

$(window).resize( function() {
	setMainContentSize();
});

function setMainContentSize() {
	
	$min_height = 500;
	$window_height = $(window).height();
	if ($window_height > $min_height) {
		$('#main_content').css('height', $window_height - 200);
	}
}