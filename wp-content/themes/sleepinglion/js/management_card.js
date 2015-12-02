$(document).ready(function(){
	
	$(".mainfesto_category h3 a").click(function(){
		var content=$(this).parent().parent().find('.content');
		if(content.is(':visible')) {
			content.slideUp('fast',function(){
				$(this).parent().find('h3 a span').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
			});
		} else {
			content.slideDown('fast',function(){
				$(this).parent().find('h3 a span').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
			});
		}
		return false;
	});
});