// var nav_top_a=document.getElementById("nav_top_a");
// if(document.cookie){
// 	var arr=document.cookie.split(";");
// 	var arr1=arr[0].split("=");
	
// 	nav_top_a.children[0].innerHTML='';
// 	nav_top_a.children[1].innerHTML='hi,<a href="javascript:;">'+arr1[1]+'</a><a id="a2" href="javascript:;">新晋</a>';
// 	nav_top_a.children[2].innerHTML='';
// }else{
// 	nav_top_a.children[0].innerHTML='Hi,请';
// 	nav_top_a.children[1].innerHTML='登录';
// 	nav_top_a.children[2].innerHTML='注册';
// }


var hisTory=document.getElementById("history");
var hisrigAs=hisTory.querySelectorAll("a");
console.log(hisrigAs)
var txt1=document.getElementById("txt1");
for(var i=0;i<hisrigAs.length;i++){
	hisrigAs[i].onclick=function(){
		console.log(this.innerHTML)
		txt1.value=this.innerHTML;
	}
}
txt1.onclick=function(ev){
	ev.cancelBubble=true;
	hisTory.style.display='block';
}


//顶部
var head=document.getElementById("head");
var top0=document.getElementById("top");
var centera=document.getElementById("center");
head.onmouseenter=function(){
	move(centera,{top:-80},1000,'linear');
	move(head,{top:80},1000,'linear',function(){
		top0.style.zIndex="99";
	});
}

top0.onmouseleave=function(){
	top0.style.zIndex="-2";
	move(centera,{top:-244},1000,'linear');
	move(head,{top:0},1000,'linear');
}

//收货地址
var songHuoId=document.getElementById("songHuoId");
var aa=document.getElementById("aa");
var cityPut=document.getElementById("cityPut");
var aaEm=aa.querySelector("em");
var div2As=songHuoId.querySelectorAll("a")
aa.onclick=function(ev){
	ev.cancelBubble=true;
	cityPut.value="";
	songHuoId.style.display="block";
}
cityPut.onclick=function(ev){
	ev.cancelBubble=true;
}
cityPut.onblur=function(){
	aaEm.innerHTML=this.value;
}

for(var i=0;i<div2As.length;i++){
	div2As[i].onclick=function(){
		aaEm.innerHTML=this.innerHTML;
	}
}
document.onclick=function(){
	songHuoId.style.display="none";
	hisTory.style.display='none';
}


//轮播图
var box=document.getElementById("box");
var banMidUl=document.getElementById("ban_mid");
var banAsa=box.querySelectorAll("a");
var banPspan=box.querySelectorAll("p span");
var banLis=banMidUl.querySelectorAll("li");
var timer;
timer=setInterval(movebanLis,3000);
banAsa[0].onclick=function(){
	clearInterval(timer);
	removeStyle(num);
	if(num==0){
		num=banPspan.length;
	}
	num--;
	addStyle(num);
}
banAsa[1].onclick=function(){
	clearInterval(timer);
	movebanLis();
}
var num=0;
for(var i=0;i<banPspan.length;i++){
	banPspan[i].index=i;
	banPspan[i].onmouseover=function(){
		removeStyle(num);
		addStyle(this.index);
		num=this.index;
	}
}

function removeStyle(n){
	banLis[n].style.display="none";
	banPspan[n].removeAttribute("class");
}
function addStyle(n){
	banLis[n].style.display="block";
	banPspan[n].className="active";
}


function movebanLis(){
	removeStyle(num);
	num++;
	if(num==banPspan.length){
		num=0;
	}
	addStyle(num);
}


banMidUl.onmouseenter=function(){
	clearInterval(timer);
}
banMidUl.onmouseleave=function(){
	timer=setInterval(movebanLis,3000);
}


//倒计时
var banFoot=document.getElementById("ban_foot");
var banAspan=banFoot.querySelectorAll(".ban_a span");
var timera;
var timer1c;
var n=59;
var m=5;
timera=setInterval(function(){
	if(n<0){
		n=59;
		banAspan[2].innerHTML=n;
	}else if(n>=0&&n<10){
		banAspan[2].innerHTML='0'+n;
	}else{
		banAspan[2].innerHTML=n;
	}
	n--;
},1000);

timer1c=setInterval(function(){
	m--;
	if(m<0){
		m=5;
	}
	banAspan[1].innerHTML='0'+m;
},60000);




//无缝滚动
var wuFeng=document.getElementById("wufeng");
var wuSpans=wuFeng.querySelectorAll("span")
var wuUl=wuFeng.querySelector("ul");
var timer2;
var a=0;

wuUl.innerHTML+=wuUl.innerHTML;
var wuLis=wuFeng.querySelectorAll("li");
var w=parseInt(getComputedStyle(wuLis[0]).width);

wuUl.style.width=w*wuLis.length+"px";

timer2=setInterval(pic,6000);
function pic(){
	a++;
	move(wuUl,{left:-1000*a},1000,'linear',function(){
		if(a==wuLis.length/2){
			wuUl.style.left=0;
			a=0;
		}
	});
}

for(var i=0;i<wuLis.length;i++){
	wuLis[i].onmouseover=function(){
		clearInterval(timer2);
	}
	wuLis[i].onmouseout=function(){
		timer2=setInterval(pic,6000);
	}
}




//图片动
var cenTwoImgs=document.querySelectorAll(".cen_two img");
var wuFengImgs=wuFeng.querySelectorAll("img");
var fourImgrs=document.querySelectorAll(".cen_four .four_rig_rig img");
var fiveImgms=document.querySelectorAll(".cen_five .fiv_mid img");
var sixImgms=document.querySelectorAll(".cen_six .dv3 img");
var fourRigdivs=document.querySelectorAll(".cen_four .four_rig .dvdv img");
moveImgs(cenTwoImgs);
moveImgs(wuFengImgs);
moveImgs(fourImgrs);
moveImgs(fiveImgms);
moveImgs(sixImgms);
moveImgs(fourRigdivs);

function moveImgs(obj){
	for(var i=0;i<obj.length;i++){
		obj[i].onmouseenter=function(){
			move(this,{right:10},100,'linear');
		}
		obj[i].onmouseout=function(){
			move(this,{right:0},100,'linear');
		}
	}
}



/*//div动
var fourRigdivs2=document.querySelectorAll(".cen_four .four_rig .dv02")
var w1=fourRigdivs2[0].offsetWidth;
var h1=fourRigdivs2[0].offsetHeight;
for(var i=0;i<fourRigdivs2.length;i++){
	fourRigdivs2[i].onmouseenter=function(){
//		move(this,{width:})
		this.style.width=w1+20+'px';
		this.style.height=h1+20+'px';
	}
	fourRigdivs2[i].onmouseout=function(){
		this.style.width=w1+'px';
		this.style.height=h1+'px';
	}
}*/





//选项卡
var twoRight=document.getElementById("twoRight");
var twoRigAs=twoRight.querySelectorAll(".aaa");
var twoRigUls=twoRight.querySelectorAll("ul li ul");

console.log(twoRigAs)
for(var i=0;i<twoRigAs.length;i++){
	twoRigAs[i].index=i;
	twoRigAs[i].onmouseover=function(){
		for(var i=0;i<twoRigAs.length;i++){
			twoRigAs[i].id="";
			twoRigUls[i].style.display="none";
		}
		this.id="acti";
		twoRigUls[this.index].style.display="block";
	}
}



//侧边栏
var fixe=document.getElementById("fix");
var fix2s=fixe.querySelectorAll('.dd2');
var fixDiv2s=fixe.querySelectorAll('.dd2 div');
for(var i=0;i<fix2s.length;i++){
	fix2s[i].index=i;
	fix2s[i].onmouseenter=function(){
		fixDiv2s[this.index].style.display="block";
		move(fixDiv2s[this.index],{left:-60},500,'linear');
	}
	fix2s[i].onmouseleave=function(){
		move(fixDiv2s[this.index],{left:0},500,'linear',function(){
			this.style.display="none";
		});
	}
}




//固定
var topfixed=document.getElementById("topfixed");
var clentHeight=document.documentElement.clientHeight;
window.onscroll=function(){
	var h=document.body.scrollTop||document.documentElement.scrollTop;
	if(h>=clentHeight){
		topfixed.style.display="block";
	}else{
		topfixed.style.display="none";
	}
}
