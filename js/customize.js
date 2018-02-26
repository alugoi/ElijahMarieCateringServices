$(document).ready(function(){
	$('.gallery-page>div>div>a>img').click(function(){
		$('.frame').fadeIn();
		
	});
	$('a').tooltip({
	    animated: 'fade',
	    placement: 'bottom',
	    html: true
	});
});