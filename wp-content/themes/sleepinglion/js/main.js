$(document).ready(function(){
	var menu_focus=false;
	$("#menu-gnb>li>a").mouseover(function(){			
		$(this).focus().triggerHandler("focus");
	});
	
	$("#menu-gnb>li>a").focus(function(){
		$("#menu-gnb>li>a").each(function(index,value){
			if($(value).is(":focus"))
				menu_focus=true;
		});
		
		if(!menu_focus)
			$("#gnb").animate({'height': '350px'}, 300);
	});
	/*
	$("html").click(function(){		
		if(menu_focus)
			$("#gnb").animate({'height': '60px'}, 300);
		
		menu_focus=false;
	});*/
	
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
			});
		} else {
			$(this).parent().parent().parent().addClass('over').find('ul.menu').animate({'height':'300'},300);
		}
		
		return false;
	});
	
});  // Document Ready Close