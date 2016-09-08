
	setInterval("change()",500);
	function change(){
		$height = $(document).scrollTop();
		if ( $height > 10 ){
			$('.header-b').css("background-color","rgba(0,0,0,0.5)");
		}else if( $height < 10 ){
			$('.header-b').css("background-color","rgba(255,255,255,0.0)");
		}
	}

	$('#prev').click(function(){
		$("#pic1").animate({
			left:'50px',
			opacity:'0.5'
		},"slow"});
		$("#pic2").animate({
			left:'50px',
			opacity:'1'
		},"slow"});
	});
	$('#next').click(function(){
		
	});