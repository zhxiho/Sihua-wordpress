$(document).ready(function(){

	// $height = document.body.clientWidth;
	// alert($height);
	$("#myCarousel").carousel('cycle');
	$('.more-pic').click(function(){
		$('.more-menu').fadeToggle("fast");
	});
	$('.more-li .menu-l').click(function(){
		$id = $(this).attr("dl");
		if($id == '1'){
			$('#list1').fadeToggle("fast");
			$('#list2').hide("fast");
			$('#list3').hide("fast");
			$('#list4').hide("fast");
		}else if($id == '2'){
			$('#list1').hide("fast");
			$('#list2').fadeToggle("fast");
			$('#list3').hide("fast");
			$('#list4').hide("fast");
		}
		// else if($id == '3'){
		// 	$('#list1').hide("fast");
		// 	$('#list2').hide("fast");
		// 	$('#list3').fadeToggle("fast");
		// 	$('#list4').hide("fast");
		// }else if($id == '4'){
		// 	$('#list1').hide("fast");
		// 	$('#list2').hide("fast");
		// 	$('#list3').hide("fast");
		// 	$('#list4').fadeToggle("fast");
		// }
	});

	//partner 切换
	$(".partner-next-button .partner-point").click(function(){
		$id = $(this).attr("dl");
		$(this).addClass("point").siblings().removeClass("point");
		if($id == '1'){
			$(".partner-page01").css("display","block");
			$(".partner-page02").css("display","none");
			$(".partner-page03").css("display","none");
		}else if($id == '2'){
			$(".partner-page01").css("display","none");
			$(".partner-page02").css("display","block");
			$(".partner-page03").css("display","none");
		}else if($id == '3'){
			$(".partner-page01").css("display","none");
			$(".partner-page02").css("display","none");
			$(".partner-page03").css("display","block");
		}
	});
});