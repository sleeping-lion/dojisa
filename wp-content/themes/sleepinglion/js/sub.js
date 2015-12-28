$(document).ready(function(){
	$("#sub_main .social_link a").click(function(){
		window.open($(this).attr('href'), 'twitter', 'width=650, height=450');
		return false;
	});
	
	$('#myModal').on('shown.bs.modal', function () {
		  $('#myModal input:first').focus()
	});
	
	$(window).resize(tab_width);
	
	tab_width();
	
	function tab_width() {
		if($('html').width()>=768) {
			if($(".su-tabs-nav span").length) {
				var slength=$(".su-tabs-nav span").length;
				$(".su-tabs-nav span").css('width',100/slength+'%');
			}
		} else {
			var slength=$(".su-tabs-nav span").length;
			$(".su-tabs-nav span").css('width','100%');
		}
	}
	
	$("#sub_top_nav_menu .sub_menu:eq(1)>span").click(function(){
		$(this).prev().find('li.current-menu-parent a').triggerHandler("click");		
	});
	
	$("#sub_top_nav_menu .sub_menu:eq(2)>span").click(function(){
		$(this).prev().find('li.current-menu-item a').triggerHandler("click");		
	});	
	
	$("#sub_top_nav_menu .menu a").click(function(){

		if(!$(this).parent().hasClass('current-menu-parent') && !$(this).parent().hasClass('current-menu-item')) {
			return true;
		}
		
		switch($("#sub_top_nav_menu .sub_menu").index($(this).parent().parent().parent())) {
			case 1 :
				if($("#sub_top_nav_menu .sub_menu:eq(2)").hasClass('over'))
					$("#sub_top_nav_menu .sub_menu:eq(2)").removeClass('over').find('ul.menu').animate({'height':'60'},300);
				break;
			case 2 :			
				if($("#sub_top_nav_menu .sub_menu:eq(1)").hasClass('over')) {
					var ul_menu=$("#sub_top_nav_menu .sub_menu:eq(1)").removeClass('over').find('ul.menu');
					$("#sub_top_nav_menu .sub_menu:eq(1)").removeClass('over').find('ul.menu').animate({'height':'60'},300);
				}
				break;
		}
		
		if($(this).parent().parent().parent().hasClass('over')) {
			$(this).parent().parent().animate({'height':'61'},300,function(){
				$(this).parent().removeClass('over');
			}).next().removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
		} else {
			var ul_menu=$(this).parent().parent().parent().addClass('over').find('ul.menu');
			var l=ul_menu.find('li').length;
			ul_menu.animate({'height':l*57},300);
			$(this).parent().parent().next().removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
		}
		
		return false;
	});
	
});  // Document Ready Close
