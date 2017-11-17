$(document).ready(function() {
	
	
	
	$('.blockstext').mouseenter(ata);
	
	function ata(){
		$(this).parent(this).prepend('<div id="ata"></div>');
		$(this).css('color','#000');
		$('#ata').fadeIn(500);
	}
	
	$('.blockstext').mouseleave(ata2);
	
	
	function ata2(){
		$('#ata').fadeOut(500);
		$('#ata').removeAttr('id');
		$(this).css('color','#fff');
	}	
	$('.blockstextside').mouseenter(changingcolor);
	$('.blockstextside').mouseleave(changingcolorback);
	
	function changingcolor(){
		
		$(this).css('color','#1165AA');
		$(this).css('backgroundColor','#e3e3e3');
		
	}
		function changingcolorback(){
		
		$(this).css('color','brown');
		$(this).css('backgroundColor','transparent');
		
	}
	
	
	$('.buttonright').click(pic);
	$('.buttonleft').click(pic2);
	
	function pic(){
		
	
			$('#1').animate({marginRight:"-=33.3333%"},5000,"swing");
			
	}
		function pic2(){
		
	
			$('#1').animate({marginRight:"+=33.3333%"},5000,"swing");
			
	}
	
	
	
	
	
	
	
});