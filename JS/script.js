$(document).ready(function(){
	$('body').css('display', 'none');
	
	$("body").fadeIn(750);

	$('a').click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$('body').fadeOut(750, redirectPage);
	});

	function redirectPage() {
		window.location = linkLocation;
	}

	$('#menulist a').mouseenter(function(){
		$(this).fadeTo('fast', 0.5);	
	});
	$('#menulist a').mouseleave(function(){
		$(this).fadeTo('fast', 1);
	});

	$('.main img').mouseenter(function(){
		$(this).fadeTo(200,0);
	});
	$('.main img').mouseleave(function(){
		$(this).fadeTo(200,1);
	});

});