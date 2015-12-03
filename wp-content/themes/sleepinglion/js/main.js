$(document).ready(function(){
	$("#sub_main .social_link a").click(function(){
		window.open($(this).attr('href'), 'twitter', 'width=650, height=450');
		return false;
	});
	
	var menu_focus=false;
	$("#menu-gnb>li>a").mouseover(function(){
		$(this).focus().triggerHandler("focus");
	});
	
	$("#menu-gnb>li>a").focus(function(){
		$("#menu-gnb>li>a").each(function(index,value){
			if($(value).is(":focus")) {
				menu_focus=true;
			}
		});
		
	
		if(menu_focus) {
			if($("#gnb").height()!=300) {
				$("#gnb").animate({'height': '300px'}, 300);
			}
		} else {
			$("#gnb").animate({'height': '300px'}, 300);
		}
	});
		
	$("#menu-gnb>li>a").blur(function(){
		//console.log('blur-handle');
	});
	
	
	$("html").click(function(){		
		if(menu_focus)
			$("#gnb").animate({'height': '60px'}, 300);
		
		menu_focus=false;
	});
	
	$("#gnb a").click(function(){
		$("html").off("click");
	});
	
	$("#sub_top_nav_menu .sub_menu>span").click(function(){
		$(this).prev().find('li:visible a').triggerHandler("click");
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
				if($("#sub_top_nav_menu .sub_menu:eq(1)").hasClass('over'))
					$("#sub_top_nav_menu .sub_menu:eq(1)").removeClass('over').find('ul.menu').animate({'height':'60'},300);					
				break;
		}
		
		if($(this).parent().parent().parent().hasClass('over')) {
			$(this).parent().parent().animate({'height':'61'},300,function(){
				$(this).parent().removeClass('over');
			}).next().removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
		} else {
			$(this).parent().parent().parent().addClass('over').find('ul.menu').animate({'height':'300'},300);
			$(this).parent().parent().next().removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
		}
		
		return false;
	});
	
});  // Document Ready Close
