$(document).ready(function(){

	// $height = window.screen.availHeight;
	// alert($height);
	$('.nav-more').click(function(){
		$('.more-menu').show("slow");
	});
	$('.index').click(function(){
		$('#more-li').show("slow");
	});

	//banner 切换
	$(".banner-roll .prev").click(function(){
		clearInterval(timer);
		$id = $(this).attr("dl");
		if($id == '1'){
			$("#banner1").css("margin-left","0");
			$("#li1").addClass("line1").siblings().removeClass("line1");
		}else if($id == '2'){
			$("#banner1").css("margin-left","-50%");
			$("#li2").addClass("line1").siblings().removeClass("line1");
		}
	}).mouseup(function(){
		autopaly();
	});

	$n = $(".banner-btn .banner-btn-line").length;
	var index = 0;
	var timer = null;
	function autopaly(){
		timer = setInterval(function(){
			index++;
			if(index < $n){
				$(".banner-btn .banner-btn-line").eq(index).addClass("line1").siblings().removeClass("line1");
				if(index+1 == '1'){
					$("#banner1").css("margin-left","0");
				}else if(index+1 == '2'){
					$("#banner1").css("margin-left","-50%");
				}
			}else{
				index=-1;
			}
		},3000);
	}
	autopaly();

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