$(document).ready(function(){
	$("#sub_main .social_link a").click(function(){
		window.open($(this).attr('href'), 'twitter', 'width=650, height=450');
		return false;
	});
	
	$('#myModal').on('shown.bs.modal', function () {
		  $('#myModal input:first').focus()
	});
	
	$("#mobile_menu").click(function(){
		if($("#gnb").is(':visible')) {
			$("#gnb").animate({'width':'0'},'fast',function(){$(this).hide()});
		} else {
			
			$("#gnb").show().animate({'width':'50%'},'fast');
		}
		return false;		
	});	
	
	/*
	
	$("#menu-gnb>li>a").mouseover(function(){
		if($("#mobile_menu").is(':visible'))
			return false;
		
		$(this).focus(); //.triggerHandler("focus");
		show_menu($(this).parent());
	}).mouseout(function(){
		
	});
	

	
	$("#menu-gnb>li").mouseout(function(){
		if($("#mobile_menu").is(':visible'))
			return false;
		var submenu=$(this);
		submenu.show();
	});
	
	function show_menu(submenu){
		submenu.animate({'height': '350px'},'fast'); 
	}
	
	function hide_menu(submenu){
		submenu.animate({'height': '50px'},'fast'); 
	}		
	
	$("#menu-gnb>li>a").focus(function(){
		if($("#mobile_menu").is(':visible'))
			return false;		
		
		var tindex=$("#menu-gnb>li>a").index($(this));
		$("#menu-gnb>li").each(function(index,value){
			if(index!=tindex) {
				hide_menu($(value));
			}
		});
		show_menu($(this).parent());
	});

	$("#main").mouseover(function(){
		if($("#mobile_menu").is(':visible'))
			return false;		
		
		$("#menu-gnb>li").animate({'height': '50px'},'fast');
	});
	
	$("#menu-gnb li ul li a").click(function(){
		location.href=$(this).attr('href');
		return true;
		$("#main").off('mouseover');
		$('#menu-gnb>li>a').off('blur');
	});
	*/
	
});