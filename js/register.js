$(function(){
	"use strict"
		$("#user").click(function(){
			$("#user").next().css("display","none");
			$("#user").css("border","1px solid #dedede");
		})
		$("#user").blur(function(){
			let val=$("#user").val();
			// let ajax=null;
			// if(XMLHttpRequest){
			// 	ajax=new XMLHttpRequest;
			// }else{
			// 	ajax=new XMLHttpRequest('Microsoft.XMLHTTP');
			// }
			// ajax.open('post','../php/user.php',true);
			// ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			
			
			if($("#user").val()==""||$("#user").val()==null){
				$("#user").next().css("display","block");
				$("#user").next().html("用户名不能为空");
				$("#user").css("border","1px solid #f00");
			}
		})
		
		
		$("#passWord").click(function(){
			$("#passWord").next().css("display","none");
			$("#passWord").css("border","1px solid #dedede");
		})
		$("#passWord").blur(function(){
			if($("#passWord").val()==""||$("#passWord").val()==null){
				$("#passWord").next().css("display","block");
				$("#passWord").next().html("密码不能为空");
				$("#passWord").css("border","1px solid #f00");
			}
		})
		
// 		$("button").eq(0).click(function(){
// 			if($("#cen_rig div span").html()=='<i style="color: green;">√</i>'){
// 				document.location="../index.html";
// 			}else{
// //				alert("无法登录");
// 			}
// 		})
		
		// $("#cen_rig .aa").click(function(){
			// window.location.href="login.html";
	//		document.location="login.html";
		// })

})

