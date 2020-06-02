$(function(){
	$(".carousel").carousel({interval: 4000});
	$(".fa-chevron-up").hide();
	$(".menu").hide();

	$(".fa-chevron-down").click(function(){
		$(".fa-chevron-down").hide();
		$(".fa-chevron-up").show();
		$(".menu").slideDown('slow');
	})

	$(".fa-chevron-up").click(function(){
		$(".fa-chevron-up").hide();
		$(".fa-chevron-down").show();
		$(".menu").slideUp('slow');
	})

});