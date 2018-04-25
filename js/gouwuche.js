var bigg=document.getElementById("bigg");
var pigg=document.getElementById("pigg");
var top_rig=document.querySelector("#top_rig .div1");
// if(!document.cookie){
// 	bigg.style.display='none';
// 	pigg.style.display='block';
// 	top_rig.innerHTML='<a href="register.html" style="color: #f00;">登录 </a><a href="login.html">注册</a>';
// }else{
// 	bigg.style.display='block';
// 	pigg.style.display='none';
// 	var arr=document.cookie.split(";");
// 	var arr1=arr[0].split("=");
// 	top_rig.innerHTML='hi,<a href="javascript:;">'+arr1[1]+'</a><a id="a2" href="javascript:;">新晋</a>';




	var cenThr=document.getElementById("cenn_thr");
	var fuKuan=document.getElementById("fukuan");
	var cenThrinpA=cenThr.querySelector(".cen_thr input[type=checkbox]");
	var cenThrinpAb=cenThr.querySelectorAll(".cen_four input[type=checkbox]");
	var allSpan=fuKuan.querySelector(".fu_left span b");
	
	
	
	//全选
	var fuLeftInput=document.querySelector(".fu_left input[type=checkbox]");
	var cenTwoInput=document.querySelector("#cen_two input[type=checkbox]");
	var inputs=document.querySelectorAll("input[type=checkbox]")
	cenTwoInput.onclick=function(){
		for(var i=1;i<inputs.length;i++){
			inputs[i].checked=this.checked;
			var abc=parseInt(allSpan.innerHTML);
			this.checked?abc=3:abc=0;
			allSpan.innerHTML=abc;
		}
	}
	
	fuLeftInput.onclick=function(){
		for(var i=0;i<inputs.length-1;i++){
			inputs[i].checked=this.checked;
			var abc=parseInt(allSpan.innerHTML);
			this.checked?abc=3:abc=0;
			allSpan.innerHTML=abc;
		}
	}
	
	//单
	cenThrinpA.onclick=function(){
		var abc=parseInt(allSpan.innerHTML);
		this.checked?abc+=2:abc-=2;
		allSpan.innerHTML=abc;
		for(var i=0;i<cenThrinpAb.length;i++){
			cenThrinpAb[i].checked=this.checked;
		}
		if(cenThrinpA.checked&&cenFourinpA.checked){
			cenTwoInput.checked=true;
			fuLeftInput.checked=true;
		}else{
			cenTwoInput.checked=false;
			fuLeftInput.checked=false;
		}
	}
	for(var i=0;i<cenThrinpAb.length;i++){
		cenThrinpAb[i].onclick=function(){
			var abc=parseInt(allSpan.innerHTML);
			this.checked?abc++:abc--;
			allSpan.innerHTML=abc;
			if(cenThrinpAb[0].checked&&cenThrinpAb[1].checked){
				cenThrinpA.checked=true;
			}else{
				cenThrinpA.checked=false;
			}
			if(cenThrinpA.checked&&cenFourinpA.checked){
				cenTwoInput.checked=true;
				fuLeftInput.checked=true;
			}else{
				cenTwoInput.checked=false;
				fuLeftInput.checked=false;
			}
		}
	}
	
	
	
	
	var cenFour=document.getElementById("cenn_four");
	var cenFourinpA=cenFour.querySelector(".cen_thr input[type=checkbox]");
	var cenFourinpAb=cenFour.querySelector(".cen_four input[type=checkbox]");
	
	
	cenFourinpA.onclick=function(){
		cenFourinpAb.checked=this.checked;
		var abc=parseInt(allSpan.innerHTML);
		this.checked?abc++:abc--;
		allSpan.innerHTML=abc;
		if(cenThrinpA.checked&&cenFourinpA.checked){
			cenTwoInput.checked=true;
			fuLeftInput.checked=true;
		}else{
			cenTwoInput.checked=false;
			fuLeftInput.checked=false;
		}
	}
	cenFourinpAb.onclick=function(){
		cenFourinpA.checked=this.checked;
		var abc=parseInt(allSpan.innerHTML);
		this.checked?abc++:abc--;
		allSpan.innerHTML=abc;
		if(cenThrinpA.checked&&cenFourinpA.checked){
			cenTwoInput.checked=true;
			fuLeftInput.checked=true;
		}else{
			cenTwoInput.checked=false;
			fuLeftInput.checked=false;
		}
	}
	
	
	
	//右边
	
	
	var danjia=document.querySelectorAll("#big .p1");
	
	var jian=document.querySelectorAll("#big .jian");
	var jia=document.querySelectorAll("#big .jia");
	var txt=document.querySelectorAll("#big .txt");
	
	var xiaoji=document.querySelectorAll("#big .pp");
	var heji=fukuan.querySelector(".fu_right .dv2 b");
	var jianshu=fukuan.querySelector(".fu_right .dv1 b");
	
	var numm=0;
	for(var i=0;i<jia.length;i++){
		jia[i].index=i;
		jia[i].onclick=function(){
			this.parentNode.parentNode.previousElementSibling.checked="checked";
			if(cenThrinpAb[0].checked&&cenThrinpAb[1].checked){
				cenThrinpA.checked=true;
			}else{
				cenThrinpA.checked=false;
			}
			if(cenFourinpAb.checked){
				cenFourinpA.checked=true;
			}else{
				cenFourinpA.checked=false;
			}
			if(cenThrinpA.checked&&cenFourinpA.checked){
				cenTwoInput.checked=true;
				fuLeftInput.checked=true;
			}else{
				cenTwoInput.checked=false;
				fuLeftInput.checked=false;
			}
			
			
			numm=txt[this.index].value;
			numm++;
			if(numm==1){
				var abc=parseInt(allSpan.innerHTML);
				abc+=1;
				allSpan.innerHTML=abc;
			}
			txt[this.index].value=numm;
			xiaoji[this.index].innerHTML=(parseFloat(danjia[this.index].innerHTML)*numm).toFixed(2);
			var zong=parseFloat(xiaoji[0].innerHTML)+parseFloat(xiaoji[1].innerHTML)+parseFloat(xiaoji[2].innerHTML);
			heji.innerHTML=zong.toFixed(2);
			jianshu.innerHTML=parseInt(txt[0].value)+parseInt(txt[1].value)+parseInt(txt[2].value);
		}
		
		
		jian[i].index=i;
		jian[i].onclick=function(){
			numm=txt[this.index].value;
			numm--;
			if(numm==0){
				this.parentNode.parentNode.previousElementSibling.checked="";
				cenTwoInput.checked=false;
				fuLeftInput.checked=false;
				if(!cenThrinpAb[0].checked||!cenThrinpAb[1].checked){
					cenThrinpA.checked=false;
				}
				if(!cenFourinpAb.checked){
					cenFourinpA.checked=false;
				}
				var abc=parseInt(allSpan.innerHTML);
				abc-=1;
				allSpan.innerHTML=abc;
			}else{
				this.parentNode.parentNode.previousElementSibling.checked="checked";
			}
			if(numm<0){
				numm=0;
			}
			txt[this.index].value=numm;
			xiaoji[this.index].innerHTML=(parseFloat(danjia[this.index].innerHTML)*numm).toFixed(2);
			var zong=parseFloat(xiaoji[0].innerHTML)+parseFloat(xiaoji[1].innerHTML)+parseFloat(xiaoji[2].innerHTML);
			heji.innerHTML=zong.toFixed(2);
			jianshu.innerHTML=parseInt(txt[0].value)+parseInt(txt[1].value)+parseInt(txt[2].value);
		}
	}
	
	
	
	var dianjipic=document.getElementById("dianjipic");
	dianjipic.onclick=function(){
		document.location="xiangqingye.html";
	}



// }
