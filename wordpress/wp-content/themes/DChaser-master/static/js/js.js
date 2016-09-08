jQuery(document).ready(function(){

	setInterval("change()",100);
	function change(){

		alert('jj');
		$height = $(document).scrollTop();
		if ( $height > 10 ){
			$('.header-b').css("background-color","#999");
			$('.header-b').css("opacity","0.9");
			$('.index').css("color","#fff");
			$('.shou').css("color","red");
		}else if( $height < 10 ){
			$('.header-b').css("background-color","#fff");
			$('.header-b').css("opacity","1");
		}
	}
	

	$('.partner-prev').click(function(){
		$('.partner-page01').css("display","block");
		$('.partner-page02').css("display","none");
		$('.partner-prev').css("width","22px");
		$('.partner-prev').css("height","22px");
		$('.partner-prev').css("border-radius","11px");
		$('.partner-prev').css("background-color","red");
		$('.partner-next').css("width","20px");
		$('.partner-next').css("height","20px");
		$('.partner-next').css("border-radius","10px");
		$('.partner-next').css("background-color","#999");
	});

	$('.partner-next').click(function(){
		$('.partner-page02').css("display","block");
		$('.partner-page01').css("display","none");
		$('.partner-next').css("width","22px");
		$('.partner-next').css("height","22px");
		$('.partner-next').css("border-radius","11px");
		$('.partner-next').css("background-color","red");
		$('.partner-prev').css("width","20px");
		$('.partner-prev').css("height","20px");
		$('.partner-prev').css("border-radius","10px");
		$('.partner-prev').css("background-color","#999");
	});

});