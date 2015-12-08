$(document).ready(function(){
	$("#profile_tab_menu li a").click(function(){
		$("#profile_tab_menu li").removeClass('active');
		$(this).parent().addClass('active');
		
		var tindex=$("#profile_tab_menu li").index($(this).parent());
		$('#profile .et_slidecontent').hide();
		$('#profile .et_slidecontent').eq(tindex).fadeIn();
		
		return false;
	});
});