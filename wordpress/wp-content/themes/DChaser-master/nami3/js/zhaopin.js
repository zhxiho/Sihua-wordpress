$(document).ready(function(){
	/* 导航js */
	$(".dnav_right nav ul li").mouseover(function(){
		var n = $(this).attr("dl");
		if(n === "2"){
			$(".dnav_right nav ul li img").eq(1).attr("src","images/hzgy.png");
		}else if(n === "3"){
			$(".dnav_right nav ul li img").eq(2).attr("src","images/qxrk.png");			
		}else if(n === "1"){
			$(".dnav_right nav ul li img").eq(0).attr("src","images/about.png");			
		}else{}
	}).mouseout(function(){
		var n = $(this).attr("dl");
		if(n === "2"){
			if($("#hdv").val() === "2"){
				$(".dnav_right nav ul li img").eq(1).attr("src","images/hzgy.png");
			}else{
				$(".dnav_right nav ul li img").eq(1).attr("src","images/hzgy2.png");
			}
		}else if(n === "3"){
			if($("#hdv").val() === "3"){
				$(".dnav_right nav ul li img").eq(2).attr("src","images/qxrk.png");
			}else{
				$(".dnav_right nav ul li img").eq(2).attr("src","images/qxrk2.png");
			}
					
		}else if(n === "1"){
			if($("#hdv").val() === "1"){
				$(".dnav_right nav ul li img").eq(0).attr("src","images/about.png");
			}else{
				$(".dnav_right nav ul li img").eq(0).attr("src","images/about2.png");
			}			
		}else{}		
	});
	
	$(".XInfo-bar ul li").click(function(){
		$(this).parent().children().removeClass("XInfo-bar-bk");
		var dl = $(this).attr("dl");
		$(this).addClass("XInfo-bar-bk");
		if( dl == '1' ){
			$("#Info1").css("display","block");
			$("#Info2").css("display","none");
			$("#Info3").css("display","none");
			$("#Info4").css("display","none");
			$("#Info5").css("display","none");
			$("#Info6").css("display","none");
			$("#Info7").css("display","none");
		}
		if( dl == '2' ){
			$("#Info1").css("display","none");
			$("#Info2").css("display","block");
			$("#Info3").css("display","none");
			$("#Info4").css("display","none");
			$("#Info5").css("display","none");
			$("#Info6").css("display","none");
			$("#Info7").css("display","none");
		}
		if( dl == '3' ){
			$("#Info1").css("display","none");
			$("#Info2").css("display","none");
			$("#Info3").css("display","block");
			$("#Info4").css("display","none");
			$("#Info5").css("display","none");
			$("#Info6").css("display","none");
			$("#Info7").css("display","none");
		}
		if( dl == '4' ){
			$("#Info1").css("display","none");
			$("#Info2").css("display","none");
			$("#Info3").css("display","none");
			$("#Info4").css("display","block");
			$("#Info5").css("display","none");
			$("#Info6").css("display","none");
			$("#Info7").css("display","none");
		}
		if( dl == '5' ){
			$("#Info1").css("display","none");
			$("#Info2").css("display","none");
			$("#Info3").css("display","none");
			$("#Info4").css("display","none");
			$("#Info5").css("display","block");
			$("#Info6").css("display","none");
			$("#Info7").css("display","none");
		}
		if( dl == '6' ){
			$("#Info1").css("display","none");
			$("#Info2").css("display","none");
			$("#Info3").css("display","none");
			$("#Info4").css("display","none");
			$("#Info5").css("display","none");
			$("#Info6").css("display","block");
			$("#Info7").css("display","none");
		}
		if( dl == '7' ){
			$("#Info1").css("display","none");
			$("#Info2").css("display","none");
			$("#Info3").css("display","none");
			$("#Info4").css("display","none");
			$("#Info5").css("display","none");
			$("#Info6").css("display","none");
			$("#Info7").css("display","block");
		}
	});

	if ( document.body.clientWidth < 850 ) {
		window.resizeTo(800,600);
	}
})



























