/*var bigg=document.getElementById("bigg");
var pigg=document.getElementById("pigg");*/
// var top_rig=document.querySelector("#top_rig .div1");
// if(!document.cookie){
	/*bigg.style.display='none';
	pigg.style.display='block';*/
// 	top_rig.innerHTML='<a href="register.html" style="color: #f00;">登录 </a><a href="login.html">注册</a>';
// }else{
	/*bigg.style.display='block';
	pigg.style.display='none';*/
	// var arr=document.cookie.split(";");
	// var arr1=arr[0].split("=");
	// top_rig.innerHTML='hi,<a href="javascript:;">'+arr1[1]+'</a><a id="a2" href="javascript:;">新晋</a>';


	
	var box1=document.getElementById("box1");
	var box2=document.getElementById("box2");
	var div=box1.getElementsByTagName("div");
	var img=box2.getElementsByTagName("img");
	
	
	box1.onmouseover=function(){
		div[0].style.display="block";
		box2.style.display="block";
	}
	box1.onmouseout=function(){
		div[0].style.display="none";
		box2.style.display="none";
	}
	box1.onmousemove=function(ev){
		var l=ev.pageX-div[0].offsetWidth/2-260;
		var t=ev.pageY-div[0].offsetHeight/2-240;
		
		if(l<0){
			l=0;
		}else if(l>box1.offsetWidth-div[0].offsetWidth){
			l=box1.offsetWidth-div[0].offsetWidth;
		}
		
		if(t<0){
			t=0;
		}else if(t>box1.offsetHeight-div[0].offsetHeight){
			t=box1.offsetHeight-div[0].offsetHeight;
		}
		
		var blx=l/(box1.offsetWidth-div[0].offsetWidth);
		var bly=t/(box1.offsetHeight-div[0].offsetHeight);
		
		img[0].style.left=-blx*(img[0].offsetWidth-box2.offsetWidth)+"px";
		img[0].style.top=-bly*(img[0].offsetHeight-box2.offsetHeight)+"px";
		
		div[0].style.left=l+"px";
		div[0].style.top=t+"px";
	}
	
	
	
	
	
	
	var box4=document.getElementById("box4");
	var divas=box4.getElementsByTagName("div");
	
	for(var i=0;i<divas.length;i++){
		divas[i].onmouseenter=function(){
			for(var i=0;i<divas.length;i++){
				divas[i].className="";
			}
			this.className="act";
			box2.innerHTML=this.innerHTML;
			box1.innerHTML=this.innerHTML+"<div></div>";
			console.log(box1.innerHTML)
		}
	}
	
	
	
	
	//+  -
	var jiajianNeirog=document.querySelector("#box3 .dd6 .db1 .lef");
	var jiajain=document.querySelectorAll("#box3 .dd6 .db1 .rig div");
	var nn=1;
	//+
	jiajain[0].onclick=function(){
		nn++;
		jiajianNeirog.innerHTML=nn;
	}
	//-
	jiajain[1].onclick=function(){
		nn--;
		if(nn<1){
			nn=1;
		}
		jiajianNeirog.innerHTML=nn;
	}
	



}