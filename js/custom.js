$ (function(){
	$('#toggle').on('click',function(){
		$('#overlay-menu').animate({width:'show'},(300));
	});
	$('#toggle').on('click',function(){
		$('.section-2').animate({left:'24%'});
	});
	

	
	 /*if ($("body").css("max-width") <= "570"){
	 	$('#toggle').on('click',function(){
		$('.section-2').animate({left:'60%'});
	});
	 }else{
		 	$('#toggle').on('click',function(){
			$('.section-2').animate({left:'24%'});
		});
	 }*/
	
});
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});

function on() {
	$("#overlay").animate({width:'show'},(300)).css({display: "block"});
}

function off() {

	$("#overlay").css({display: "none"});
	$('.section-2').animate({left:'0px'});
	
}
