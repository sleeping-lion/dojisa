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
});  // Document Ready Close