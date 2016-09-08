
	setInterval("change()",500);
	function change(){
		$height = $(document).scrollTop();
		if ( $height > 10 ){
			$('.header-b').css("background-color","#666");
			$('.header-b').css("opacity","0.9");
			$('.index').css("color","#fff");
			$('.index:hover').css("color","red");
			$('.shou').css("color","red");
		}else if( $height < 10 ){
			$('.header-b').css("background-color","#fff");
			$('.header-b').css("opacity","1");
			$('.index').css("color","#000");
			$('.index:hover').css("color","red");
			$('.shou').css("color","red");
		}
	}