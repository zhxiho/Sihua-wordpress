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
	
	/* 鼠标点击事件 */
	$(".controlbtn nav ul li").click(function(){
		clearInterval(timer);
		var did = $(this).attr("dl");
		$("#sn").val(did);
		$(".controlbtn nav ul li").eq(did-1).attr("class","controlbtn_current");
		$(".controlbtn nav ul li").eq(did-1).siblings().attr("class","controlbtn_other");
		$(".main_control"+did).animate({
			opacity:"1"
		},"slow");
		$(".main_control"+did).siblings().animate({
			opacity:"0"
		},"slow");	 	
		autoplay();
	});
	
	/* 轮换 */
	var index = 1;
	var timer = null;
	function autoplay(){
		timer = setInterval(function(){
			index++;
			if(index<6){
				if(index<5){
					$(".controlbtn nav ul li").eq(index-1).attr("class","controlbtn_current");
					$(".controlbtn nav ul li").eq(index-1).siblings().attr("class","controlbtn_other");
					$(".main_control"+index).animate({
						opacity:"1"
					},"slow");
					$(".main_control"+index).siblings().animate({
						opacity:"0"
					},"slow");	 
					$("#sn").val(index);
					/* alert($("#sn").val()); */
				}else{
					$(".controlbtn nav ul li").eq(index-1).attr("class","controlbtn_current");
					$(".controlbtn nav ul li").eq(index-1).siblings().attr("class","controlbtn_other");
					$(".main_control"+index).animate({
						opacity:"1"
					},"slow");
					$(".main_control"+index).siblings().animate({
						opacity:"0"
					},"slow");
					index = 0;
					$("#sn").val(index);
				}	
			}
		},9000);
	}
	autoplay();	 

	/* 
	*	滑轮滚动次数控制
	*	限制一次只能切换一次
	*	日期：2015年12月28日 16:53:05
	*/
	var mouseTimer = null;
	function mouseListen(){
		mouseTimer = setInterval(function(){
			var ml= $("#ml").val();
			if(ml == "1"){
				clearInterval(timer);
				var sn= $("#sn").val();	
				sn--;
				if(sn > 0){
					$(".controlbtn nav ul li").eq(sn-1).attr("class","controlbtn_current");
					$(".controlbtn nav ul li").eq(sn-1).siblings().attr("class","controlbtn_other");
					$(".main_control"+sn).animate({
						opacity:"1"
					},"slow");
					$(".main_control"+sn).siblings().animate({
						opacity:"0"
					},"slow");				
				}else{
					sn = 6;
				}
				$("#sn").val(sn);
				autoplay();
			}else if(ml == "-1"){
				clearInterval(timer);
				var sn= $("#sn").val();	
				sn++;
				if(sn < 6){
					$(".controlbtn nav ul li").eq(sn-1).attr("class","controlbtn_current");
					$(".controlbtn nav ul li").eq(sn-1).siblings().attr("class","controlbtn_other");
					$(".main_control"+sn).animate({
						opacity:"1"
					},"slow");
					$(".main_control"+sn).siblings().animate({
						opacity:"0"
					},"slow");				
				}else{
					sn = 0;
				}
				$("#sn").val(sn);
				autoplay();	
			}
			$("#ml").val("0");
		},700);
	}
	mouseListen();
	
	/* 滑轮滚动 */
	var EventUtil={
		getEvent:function(event){return event?event:window.event;},
			//滚轮事件对象的 wheelDelta/FF DOMMouseScroll
		getWheelDelta:function(event){
			if(event.wheelDelta){//ff以外的浏览器
				//在最新版的opera中window返回undefined ， 在opera9.5中返回对象 在9.5版本之前的版本中wheelDelta的正负号颠倒的
				return (window.opera&&window.opera.version()<9.5?-event.wheelDelta:event.wheelDelta);
				}else{return -event.detail*40;}//ff
			},
		//事件处理程序
		addHandler:function(element,type,handler){
			if(element.addEventListener){element.addEventListener(type,handler,false)}//DOM2
			else if(element.attachEvent){element.attachEvent('on'+type,handler);}//ie
			else{element['on'+type]=handler;}//DOM0
			}
	}
	//EventUtil.addHandler(a,'click',function(){alert('触发了点击事件')});//注册点击事件
	EventUtil.addHandler(document,'mousewheel',handleMouseWheel);//注册ie的滚轮事件
	EventUtil.addHandler(document,'DOMMouseScroll',handleMouseWheel);//注册ff的滚轮事件
	function handleMouseWheel(e){
		e=EventUtil.getEvent(e);
		var delta=EventUtil.getWheelDelta(e);
		if(delta > 0){
			$("#ml").val("1");
		}else if(delta < 0){
			$("#ml").val("-1");
		}
	}
	
	/* 判断是否电脑 */
	var system ={  
        win : false,  
        mac : false,  
        xll : false  
    };  
    var p = navigator.platform;   
    system.win = p.indexOf("Win") == 0;  
    system.mac = p.indexOf("Mac") == 0;  
    system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);  
    //跳转语句   
    if(system.win||system.mac||system.xll){
	}else{
		$(".footer_wz7").css("display","block");
	}
});