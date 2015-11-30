$(document).ready(function(){
	$("#profile_tab_menu li a").click(function(){
		
		
		$("#profile_tab_menu li").removeClass('active');
		$(this).parent().addClass('active');
		
		var tindex=$("#profile_tab_menu li").index($(this).parent());
		
		$("#profile_tab_menu .et_slidecontent").hide();
		$('#profile_tab_menu .et_slidecontent eq('+tindex+')').fadeIn();
		
		return false;
	});
});