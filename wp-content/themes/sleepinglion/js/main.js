$(document).ready(function(){
	
	
	$('#myCarousel').carousel({
		  interval: 4000
		})

		$('#sl_menu_content .carousel .item').each(function(){
		  var next = $(this).next();
		  if (!next.length) {
		    next = $(this).siblings(':first');
		  }
		  next.children(':first-child').clone().appendTo($(this));
		  
		  for (var i=0;i<2;i++) {
		    next=next.next();
		    if (!next.length) {
		    	next = $(this).siblings(':first');
		  	}
		    
		    next.children(':first-child').clone().appendTo($(this));
		  }
		});	
	
	$(".no_link").click(function(){
		if($("#select_menu").is(':visible')) {
			$("#select_menu").fadeOut();
		} else {
			$("#select_menu").fadeIn();
		}
		
		return false;
	});
	


});  // Document Ready Close
