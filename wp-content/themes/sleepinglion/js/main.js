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
	
	
	
	$("#sub_main .social_link a").click(function(){
		window.open($(this).attr('href'), 'twitter', 'width=650, height=450');
		return false;
	});
	
	$('#myModal').on('shown.bs.modal', function () {
		  $('#myModal input:first').focus()
	});
	
	/*
	$("#search_btn").click(function(){
		if($("#top_right").is(':visible')) {
			$("#top_right").hide();
		} else {
			$("#top_right").show();
			$("header form input:first").focus();
		}
		return false;
	});*/
	
	$("#menu-gnb>li>a").mouseover(function(){
		if($("#mobile_menu").is(':visible'))
			return false;
		
		$(this).focus(); //.triggerHandler("focus");
		show_menu($(this).parent());
	}).mouseout(function(){
		
	});
	
	$("#mobile_menu").click(function(){
		if($("#gnb").is(':visible')) {
			$("#gnb").animate({'width':'0'},'fast',function(){$(this).hide()});
		} else {
			
			$("#gnb").show().animate({'width':'50%'},'fast');
		}
		return false;		
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
