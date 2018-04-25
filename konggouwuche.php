<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>购物车</title>
		<link rel="stylesheet" type="text/css" href="font_mwwkim6t18knjyvi/iconfont.css"/>
		<link rel="icon" href="img/favicon.ico" />
		<style>
			body,p,section,nav,header,h2,h3,h4,h5{
				margin: 0;
			}
			ul{
				margin: 0;
				padding: 0;
				list-style: none;
			}
			ul li{
				list-style: none;
			}
			input{
				margin: 0;
				padding: 0;
				vertical-align: middle;
			}
			img{
				border: none;
				vertical-align: middle;
			}
			.clearfix:after{
				content: '';
				display: block;
				clear: both;
			}
			body{
				font-size: 14px;
				font-family: "微软雅黑";
			}
			em{
				font-style: normal;
			}
			.center{
				width: 1200px;
				margin: 0 auto;
			}
			a{
				vertical-align: top;
			}




			#top{
				border-bottom: 1px solid #e5e5e5;
				border-top: 1px solid #e5e5e5;
			}
			#top_cen{
				width: 980px;
				height: 30px;
				margin: 0 auto;
			}
			#top_cen a{
				color: #666;
				font-size: 12px;
				text-decoration: none;
				line-height: 30px;
			}
			#top_cen a:hover{
				color: #ff4040;
			}
			#top_rig{
				float: right;
				color: #666;
			}
			#top_rig div{
				width: 66px;
				height: 28px;
				padding: 0 10px;
				border: 1px solid transparent;
				line-height: 30px;
				float: left;
			}
			#top_rig .div1{
				font-size: 12px;
				width: 170px;
			}
			#top_rig .div1 #a2{
				text-decoration: none;
				display: inline-block;
				width: 24px;
				height: 18px;
				padding: 0 8px;
				border-radius: 9px;
				background: #ff4040;
				color: #fff;
				font-size: 12px;
				line-height: 18px;
				text-align: center;
				margin-top: 5px;
				margin-left: 5px;
			}
			#pigg{
				width: 550px;
				height: 300px;
				margin: 0 auto;
				margin-top: 150px;
			}
			#pigg img{
				width: 300px;
				float: left;
			}
			#pigg .pidiv1 div{
				float: left;
				padding-top: 100px;
			}
			#pigg .pidiv1 div a{
				display: inline-block;
				width: 75px;
			    height: 26px;
			    margin: 0 5px;
			    border: 1px solid #ff5e5e;
			    border-radius: 2px;
			    background-color: #ff6c6c;
			    color: #fff;
			    line-height: 26px;
			    text-align: center;
			    text-decoration: none;
			    font-size: 12px;
			    margin-top: 20px;
			}

		</style>
	</head>
	<body>
		<div id="top">
			<div id="top_cen">
				<a href="index.php"><i></i>1号店首页</a>
				<div id="top_rig">
					<div class="div1">
						<?php
							session_start();
							if(empty($_SESSION['username'])){
								echo "<span>Hi,请</span>";
								echo "<a href='register.html' style='color: #f00;'>　登录　</a>";
								echo "<a href='login.html'>　注册　</a>";
							}else{
								echo "<span></span>";
								echo "<a href='javascript:;' style='color: #f00;'>新晋".$_SESSION['username']." </a>";
								echo "<a href='php/3.php'>注销</a>";
							}
						?>
						<!-- hi,<a href="javascript:;">wutijie1437254076</a><a id="a2" href="javascript:;">新晋</a> -->
					</div>
					<div>
						<a href="javascript:;"><i class="iconfont icon-icon37" style="font-size: 14px;"></i>我的订单</a>
					</div>
					<div>
						<a href="javascript:;">客户服务</a>
					</div>
					<div>
						<a href="javascript:;">企业服务</a>
					</div>
				</div>
			</div>
		</div>
		<div id="pigg">
			<div class="pidiv1">
				<img src="img/imgimg.gif"/>
				<div>
					<p>您还没有登录</p>
					<a href="register.html">登录</a>
					<a href="login.html">注册</a>
				</div>
			</div>
		</div>
		<script src="js/konggouwuche.js"></script>
	</body>
</html>
