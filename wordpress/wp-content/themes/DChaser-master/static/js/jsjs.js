
	setInterval("change()",500);
	function change(){
		$height = $(document).scrollTop();
		if ( $height > 10 ){
			$('.header-b').css("background-color","rgba(0,0,0,0.7)");
		}else if( $height < 10 ){
			$('.header-b').css("background-color","rgba(255,255,255,0.0)");
		}
	}
	change();

	
