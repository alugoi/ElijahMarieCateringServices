$(document).ready(function(){
	// $('.gallery-page>div>div>a>img').click(function(){
	// 	$('.frame').fadeIn();
		
	// });
	// $('a').tooltip({
	//     animated: 'fade',
	//     placement: 'bottom',
	//     html: true
	// });

	$('.hover').hover(function(){
		$(this).css("background-color","#080808");
		$(this).css("transition",".5s");
	},function(){
		$(this).css("background-color","transparent");
	});

	$('.hover-item').hover(function(){
		$(this).find('.view-text').fadeIn(300);
	},function(){
		$(this).find('.view-text').fadeOut(300);
	});


	$('#contact').click(function(){
		$.ajax({
			url:"contact-page.php",
			success:function(data){
				$("#page-show").html(data);
			}

		});
	});

	$('#menus').click(function(){
		$.ajax({
			url:"menu-page.php",
			success:function(data){
				$("#page-show").html(data);
			}
		});
	});


});