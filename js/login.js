$(function(){
	"use strict"
	
	$("input").each(function(i){
		$("input").eq(i).val("");
		$("input").eq(3).val("获取验证码");
	})
	$("#user").click(function(){
		$("label").eq(0).css("left",-80);
		$("#center div i").eq(0).html("");
		$("#center div span").eq(1).css("display","none");
		$("#center div span").eq(0).css("display","block");
		$("#center div span").eq(2).css("display","none");
		$("#user").css("border","1px solid #dedede");
	});
	$("#user").blur(function(){
		let re1=/^[\u4e00-\u9fa50-9a-zA-Z_\-]{4,20}$/;
		if($("#user").val()==""||$("#user").val()==null){
			$("#center div span").eq(0).css("display","none");
			$("#center div span").eq(1).css("display","block");
			$("#user").css("border","1px solid #f00");
		}else if(!re1.test($("#user").val())){
			$("#center div span").eq(0).css("display","none");
			$("#center div span").eq(1).css("display","none");
			$("#center div span").eq(2).css("display","block");
			$("#user").css("border","1px solid #f00");
		}else{
			$("#center div span").eq(0).css("display","none");
			$("#center div span").eq(1).css("display","none");
			$("#center div span").eq(2).css("display","none");
			$("#center div i").eq(0).html("√");
		}
	});
	
	$("#phone").click(function(){
		$("label").eq(1).css("left",-80);
		$("#center div i").eq(1).html("");
		$("#center div span").eq(4).css("display","none");
		$("#center div span").eq(3).css("display","block");
		$("#phone").css("border","1px solid #dedede");
	})
	$("#phone").blur(function(){
		let re1=/^1[3|4|5|7|8][0-9]\d{8}$/;
		if($("#phone").val()==""||$("#phone").val()==null){
			$("#center div span").eq(3).css("display","none");
			$("#center div span").eq(4).css("display","block");
			$("#phone").css("border","1px solid #f00");
		}else if(!re1.test($("#phone").val())){
			$("#center div span").eq(3).css("display","none");
			$("#center div span").eq(4).css("display","block");
			$("#phone").css("border","1px solid #f00");
		}else{
			$("#center div span").eq(3).css("display","none");
			$("#center div span").eq(4).css("display","none");
			$("#center div i").eq(1).html("√");
		}
	})
	
	
	//验证码
	
	/*let numb=0;
	let timers;
	$("#btna").click(function(){
		if($("#btna").val()=='获取验证码'){
			clearInterval(timers);
			let numc=30;
			numb=parseInt(Math.round(Math.random()*8999)+1000);
			alert(numb);
			timers=setInterval(function(){
				numc--;
				if(numc<0){
					$("#btna").val('获取验证码');
					return;
				}
				$("#btna").val(numc+'s');
			},1000);
		}
	})*/
	
	$("#duanxin").click(function(){
		$("label").eq(2).css("left",-110);
		$("#center div i").eq(2).html("");
		$("#center div span").eq(6).css("display","none");
		$("#center div span").eq(5).css("display","block");
		$("#duanxin").css("border","1px solid #dedede");
	})
	$("#duanxin").blur(function(){
		if($("#duanxin").val()==""||$("#duanxin").val()==null){
			$("#center div span").eq(5).css("display","none");
			$("#center div span").eq(6).css("display","block");
			$("#duanxin").css("border","1px solid #f00");
		}else if($("#duanxin").val()!=pass[1]){
			$("#center div span").eq(5).css("display","none");
			$("#center div span").eq(6).css("display","block");
			$("#duanxin").css("border","1px solid #f00");
		}else{
			$("#center div span").eq(5).css("display","none");
			$("#center div span").eq(6).css("display","none");
			$("#center div i").eq(2).html("√");
		}
	})
	
	$("#passWord1").click(function(){
		$("label").eq(3).css("left",-95);
		$("#center div i").eq(3).html("");
		$("#center div span").eq(9).css("display","none");
		$("#center div span").eq(8).css("display","none");
		$("#center div span").eq(7).css("display","block");
		$("#passWord1").css("border","1px solid #dedede");
	})
	$("#passWord1").blur(function(){
		var re1=/^[\x21-\x7E]{6,20}$/;
		if(this.value==""||this.value==null){
			$("#center div span").eq(7).css("display","none");
			$("#center div span").eq(8).css("display","block");
			$("#center div span").eq(9).css("display","none");
			$("#passWord1").css("border","1px solid #f00");
		}else if(!re1.test($("#passWord1").val())){
			$("#center div span").eq(7).css("display","none");
			$("#center div span").eq(8).css("display","none");
			$("#center div span").eq(9).css("display","block");
			$("#passWord1").css("border","1px solid #f00");
		}else{
			$("#center div span").eq(7).css("display","none");
			$("#center div span").eq(8).css("display","none");
			$("#center div span").eq(9).css("display","none");
			$("#center div i").eq(3).html("√");
		}
	})
	
	$("#passWord2").click(function(){
		$("label").eq(4).css("left",-95);
		$("#center div i").eq(4).html("");
		$("#center div span").eq(11).css("display","none");
		$("#center div span").eq(10).css("display","block");
		$("#passWord2").css("border","1px solid #dedede");
	})
	$("#passWord2").blur(function(){
		if($("#passWord2").val()==""||$("#passWord2").val()==null){
			$("#center div span").eq(10).css("display","block");
			$("#center div span").eq(11).css("display","none");
			$("#passWord2").css("border","1px solid #f00");
		}else if($("#passWord2").val()!=$("#passWord1").val()){
			$("#center div span").eq(10).css("display","none");
			$("#center div span").eq(11).css("display","block");
			$("#passWord2").css("border","1px solid #f00");
		}else{
			$("#center div span").eq(10).css("display","none");
			$("#center div span").eq(11).css("display","none");
			$("#center div i").eq(4).html("√");
		}
	})
	$("button").eq(0).click(function(){
		if(
			$("#center div i").html()=="√"){
				alert("注册成功");
//			document.cookie="userName="+$("#user").val();
//			document.cookie="passWord="+$("#passWord1").val();
//			window.location.href="register.html";
	//		document.location="register.html";
		}else{
			alert("注册失败");
		}
	})
	
	
	
})
