<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<link rel="stylesheet" type="text/css" href="font_mwwkim6t18knjyvi/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="font_nb9ha8m57qwu3di/iconfont.css"/>
		<link rel="icon" href="img/favicon.ico" />
		<script src="js/move.js"></script>
	</head>
	<body>
		<div id="top">
			<div id="top_01">
				<div class="center">
					<a href="javascript:;"><img style="width: 1200px;" src="img/top_02.jpg"/></a>
				</div>
			</div>
		</div>
		<div id="center">
			<div id="head">
				<div id="top_02">
					<div class="center">
						<a href="javascript:;"><img style="width: 1200px;" src="img/top_01.png"/></a>
					</div>
				</div>
			</div>
			<div style="background: #f5f5f5;position: relative;z-index: 5;">
				<div id="nav">
					<div id="nav_top">
						<div class="center">
							<a id="aa" href="javascript:;">
								<i class="iconfont icon-dizhi" style="color: #f00;"></i>
								<span>送货地址：</span>
								<em>上海</em>
							</a>
							<div id="songHuoId">
								<div class="div1">
									<span>搜索城市：</span>
									<input type="text" name="" id="cityPut" value="" placeholder="请输入城市名称"/>
								</div>
								<div class="div2">
									<span>热门城市：</span>
									<a href="javascript:;">上海市</a>
									<a href="javascript:;">北京市</a>
									<a href="javascript:;">广州市</a>
									<a href="javascript:;">深圳市</a>
									<a href="javascript:;">南京市</a>
									<a href="javascript:;">杭州市</a>
									<a href="javascript:;">武汉市</a>
									<a href="javascript:;">成都市</a>
									<a href="javascript:;">重庆市</a>
									<a href="javascript:;">苏州市</a>
									<a href="javascript:;">天津市</a>
									<a href="javascript:;">合肥市</a>
									<a href="javascript:;">温州市</a>
									<a href="javascript:;">无锡市</a>
									<a href="javascript:;">宁波市</a>
									<a href="javascript:;">常州市</a>
								</div>
							</div>
							<div id="nav_top_a">
								<?php
									session_start();
									if(empty($_SESSION['username'])){
										echo "<span>Hi,请</span>";
										echo "<a href='register.html' style='color: #f00;'>登录</a>";
										echo "<a href='login.html'>注册</a>";
									}else{
										echo "<span></span>";
										echo "<a href='javascript:;' style='color: #f00;'>新晋　".$_SESSION['username']." </a>";
										echo "<a href='php/3.php'>注销</a>";
									}
								?>
								<!-- <span>Hi,请</span> -->
								<!-- <a href="register.html" style="color: #f00;">登录 </a>
								<a href="login.html">注册</a>  -->
								<a href="javascript:;"><i class="iconfont icon-icon37" style="font-size: 14px;"></i>我的订单</a>
								<a href="javascript:;">客户服务</a>
								<a href="javascript:;">企业服务</a>
							</div>
						</div>
					</div>
					<div id="nav_cen">
						<div class="center">
							<a href="#"><img style="width: 200px;float: left;" src="img/nav_cen01.gif"/></a>
							<div id="navlef">
								<input type="text" name="txt1" id="txt1" value="" placeholder="清洁用品部分满199减100"/>
								<div id="history">
									<div class="hislef">
										历史记录
									</div>
									<div class="hisrig">
										<p>正在热搜中</p>
										<a href="javascript:;">多喜爱</a>
										<a href="javascript:;">格兰仕</a>
										<a href="javascript:;">脐橙</a>
										<a href="javascript:;">西柚</a>
										<a href="javascript:;">蛇皮袋</a>
										<a href="javascript:;">医药箱</a>
										<a href="javascript:;">启赋4</a>
										<a href="javascript:;">华米</a>
										<a href="javascript:;">沐浴乳</a>
										<a href="javascript:;">黑色酱油</a>
									</div>
								</div>
								<button id="btn1" class="iconfont icon-sousuo"></button>
								<?php
									if(!empty($_SESSION['username'])){
										$a=$_SESSION['username'];
										echo "<a class='bb' href='gouwuche.php?username=$a'>";
									}else{
										echo "<a class='bb' href='konggouwuche.php'>";
									}
								?>
								<i class="iconfont icon-gouwuchekong" style="padding-right: 15px;"></i>购物车</a>
								<p class="nav_p1">
									<a href="javascript:;">4件套</a>
									<a href="javascript:;">光波炉</a>
									<a href="javascript:;">脐橙</a>
									<a href="javascript:;">西柚</a>
									<a href="javascript:;">袋子</a>
									<a href="javascript:;">塑料箱</a>
									<a href="javascript:;">小安素</a>
									<a href="javascript:;">卫宝</a>
									<a href="javascript:;">黑色酱油</a>
									<a href="javascript:;">凯浦林</a>
								</p>
								<p class="nav_p2">
									<a href="javascript:;">1号抢购</a>
									<a href="javascript:;">1号团</a>
									<a href="javascript:;">领券中心</a>
									<a href="javascript:;">商城优选</a>
									<a href="javascript:;">全球进口</a>
									<a href="javascript:;">1号生鲜</a>
									<a href="javascript:;">美妆馆</a>
									<a href="javascript:;">家居馆</a>
									<a href="javascript:;">电器城</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div id="banner" class="clearfix">
					<div id="ban_mid" class="clearfix">
						<ul>
							<li style="display: block;"><img src="img/banner1.jpg"/></li>
							<li><img src="img/banner2.jpg"/></li>
							<li><img src="img/banner3.jpg"/></li>
							<li><img src="img/banner4.jpg"/></li>
							<li><img src="img/banner5.jpg"/></li>
						</ul>
					</div>
					<div id="box" class="center">
						<a href="javascript:;"><</a>
						<a href="javascript:;">></a>
						<p>
							<span class="active"></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</p>
					</div>
					<div class="center clearfix">
						<div id="banleft" class="clearfix">
							<ul>
								<li>
									<i class="iconfont icon-quanqiujinkou"></i>
									<a href="javascript:;">全球进口</a>
									<ul>
										<li>
											<a class="jiacu" href="javascript:;">乳品生鲜 ></a>
											<a class="colo" href="javascript:;">牛奶</a>
											<a href="javascript:;">成人奶粉</a>
											<a href="javascript:;">酸奶</a>
											<a href="javascript:;">豆奶</a>
											<a href="javascript:;">奶酪</a>
											<a href="javascript:;">黄油/奶油</a>
											<a href="javascript:;">水果</a>
											<a href="javascript:;">肉类</a>
											<a href="javascript:;">海鲜 </a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">饼干糕点 ></a>
											<a href="javascript:;">饼干</a>
											<a href="javascript:;">曲奇</a>
											<a href="javascript:;">威化</a>
											<a href="javascript:;">夹心饼干</a>
											<a href="javascript:;">苏打饼干</a>
											<a href="javascript:;">糕点</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">酒水饮料 ></a>
											<a class="colo" href="javascript:;">葡萄酒</a>
											<a href="javascript:;">啤酒</a>
											<a href="javascript:;">洋酒</a>
											<a href="javascript:;">起泡酒</a>
											<a href="javascript:;">饮用水</a>
											<a href="javascript:;">碳酸饮料</a>
											<a href="javascript:;">果蔬汁</a>
											<a href="javascript:;">咖啡</a>
											<a href="javascript:;">果味饮料</a>
											<a href="javascript:;">茶饮料</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">休闲零食 ></a>
											<a class="colo" href="javascript:;">坚果</a>
											<a href="javascript:;">果干</a>
											<a href="javascript:;">海苔</a>
											<a href="javascript:;">膨化</a>
											<a href="javascript:;">巧克力</a>
											<a href="javascript:;">糖果</a>
											<a href="javascript:;">果冻/布丁</a>
											<a href="javascript:;">海味零食</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">粮油调味 ></a>
											<a class="colo" href="javascript:;">橄榄油</a>
											<a href="javascript:;">大米</a>
											<a href="javascript:;">便面</a>
											<a href="javascript:;">方罐头</a>
											<a href="javascript:;">食用油</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">茶冲咖啡 ></a>
											<a href="javascript:;">速溶咖啡</a>
											<a href="javascript:;">咖啡伴侣</a>
											<a href="javascript:;">咖啡豆/粉</a>
											<a href="javascript:;">白咖啡</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">母婴玩具 ></a>
											<a class="colo" href="javascript:;">奶粉</a>
											<a href="javascript:;">尿裤湿巾</a>
											<a href="javascript:;">洗护清洁</a>
											<a href="javascript:;">哺育喂养</a>
											<a href="javascript:;">童车童床</a>
											<a href="javascript:;">辅食</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">美妆个护 ></a>
											<a href="javascript:;">洁面卸妆</a>
											<a href="javascript:;">面膜</a>
											<a href="javascript:;">彩妆</a>
											<a href="javascript:;">香水</a>
											<a class="colo" href="javascript:;">洗发</a>
											<a href="javascript:;">护发套装</a>
											<a href="javascript:;">沐浴</a>
											<a href="javascript:;">洗手液</a>
											<a href="javascript:;">牙膏牙刷</a>
											<a href="javascript:;">漱口水</a>
											<a href="javascript:;">卫生巾</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">家居清洁 ></a>
											<a href="javascript:;">水具</a>
											<a href="javascript:;">锅具</a>
											<a href="javascript:;">刀具</a>
											<a href="javascript:;">乳胶枕</a>
											<a href="javascript:;">宠物用品</a>
										</li>
									</ul>
								</li>
								<li>
									<i class="iconfont icon-icon1"></i>
									<a href="javascript:;">食品/酒/生鲜</a>
									<ul>
										<li>
											<a class="jiacu" href="javascript:;">休闲零食 ></a>
											<a href="javascript:;">坚果</a>
											<a href="javascript:;">膨化食品</a>
											<a href="javascript:;">糖果</a>
											<a href="javascript:;">巧克力</a>
											<a href="javascript:;">肉干肉脯/豆制品</a>
											<a href="javascript:;">海味零食</a>
											<a href="javascript:;">蜜饯/枣类/果干</a>
											<a href="javascript:;">布丁/果冻</a>
											<a href="javascript:;">龟苓膏 </a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">饼干糕点 ></a>
											<a href="javascript:;">饼干</a>
											<a href="javascript:;">曲奇</a>
											<a href="javascript:;">威化</a>
											<a href="javascript:;">西式糕点</a>
											<a href="javascript:;">传统糕点</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">酒水/饮料 ></a>
											<a href="javascript:;">白酒</a>
											<a class="colo" href="javascript:;">葡萄酒</a>
											<a href="javascript:;">洋酒</a>
											<a href="javascript:;">啤酒</a>
											<a href="javascript:;">黄酒</a>
											<a href="javascript:;">茶饮料</a>
											<a href="javascript:;">功能饮料</a>
											<a href="javascript:;">果汁</a>
											<a href="javascript:;">碳酸饮料</a>
											<a href="javascript:;">咖啡</a>
											<a href="javascript:;">植物蛋白饮料</a>
											<a href="javascript:;">饮用水</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">牛奶乳品 ></a>
											<a href="javascript:;">纯牛奶</a>
											<a href="javascript:;">儿童奶</a>
											<a href="javascript:;">酸奶</a>
											<a href="javascript:;">豆奶</a>
											<a href="javascript:;">羊奶</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">茶冲咖啡 ></a>
											<a href="javascript:;">麦片</a>
											<a class="colo" href="javascript:;">速溶咖啡</a>
											<a href="javascript:;">成人奶粉</a>
											<a href="javascript:;">普洱茶</a>
											<a href="javascript:;">绿茶</a>
											<a href="javascript:;">红茶</a>
											<a href="javascript:;">乌龙茶</a>
											<a href="javascript:;">柚子茶</a>
											<a href="javascript:;">花草茶</a>
											<a href="javascript:;">蜂蜜</a>
											<a href="javascript:;">奶茶</a>
											<a href="javascript:;">可可粉</a>
											<a href="javascript:;">　　　　　　　豆奶粉</a>
											<a href="javascript:;">芝麻糊</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">粮油干货 ></a>
											<a href="javascript:;">食用油</a>
											<a href="javascript:;">枸杞</a>
											<a href="javascript:;">菌菇</a>
											<a href="javascript:;">银耳</a>
											<a href="javascript:;">桂圆</a>
											<a href="javascript:;">莲子/枣子</a>
											<a href="javascript:;">干海产</a>
											<a href="javascript:;">大米</a>
											<a href="javascript:;">面粉</a>
											<a href="javascript:;">杂粮</a>
											<a href="javascript:;">面条</a>
											<a href="javascript:;">粉丝</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">方便速食 ></a>
											<a href="javascript:;">罐头</a>
											<a class="colo" href="javascript:;">火腿肠</a>
											<a href="javascript:;">年糕</a>
											<a href="javascript:;">意大利面</a>
											<a href="javascript:;">粽子</a>
											<a href="javascript:;">腊制品</a>
											<a href="javascript:;">方便面</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">厨房调料 ></a>
											<a href="javascript:;">糖</a>
											<a class="colo" href="javascript:;">酱油</a>
											<a href="javascript:;">调味料</a>
											<a href="javascript:;">调味酱</a>
											<a href="javascript:;">淀粉</a>
											<a href="javascript:;">烘焙辅料</a>
											<a href="javascript:;">盐</a>
											<a href="javascript:;">果酱</a>
											<a href="javascript:;">料酒</a>
											<a href="javascript:;">鸡精/味精</a>
											<a href="javascript:;">腐乳</a>
											<a href="javascript:;">炼乳</a>
											<a href="javascript:;">酱菜</a>
											<a href="javascript:;">醋</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">乳品速食 ></a>
											<a href="javascript:;">火锅食材</a>
											<a href="javascript:;">冷冻蔬菜</a>
											<a href="javascript:;">半成品</a>
											<a href="javascript:;">冰淇淋</a>
											<a href="javascript:;">低温酸奶</a>
											<a href="javascript:;">鲜奶</a>
											<a href="javascript:;">低温饮品</a>
											<a href="javascript:;">黄油</a>
											<a href="javascript:;">奶酪</a>
											<a href="javascript:;">水饺馄饨</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">肉蛋海鲜 ></a>
											<a href="javascript:;">牛肉</a>
											<a href="javascript:;">鱼</a>
											<a href="javascript:;">虾类</a>
											<a class="colo" href="javascript:;">海参</a>
											<a href="javascript:;">猪肉</a>
											<a href="javascript:;">羊肉</a>
											<a href="javascript:;">蛋类</a>
											<a href="javascript:;">鸡肉</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">新鲜蔬果 ></a>
											<a href="javascript:;">牛油果</a>
											<a href="javascript:;">桃</a>
											<a href="javascript:;">芒果</a>
											<a href="javascript:;">火龙果</a>
											<a href="javascript:;">奇异果</a>
											<a href="javascript:;">橙</a>
											<a href="javascript:;">根茎类</a>
											<a href="javascript:;">叶类</a>
											<a href="javascript:;">菌菇类</a>
										</li>
									</ul>
								</li>
								<li>
									<i class="iconfont icon-4"></i>
									<a href="javascript:;">母婴/玩具/童装</a>
									<ul>
										<li>
											<a class="jiacu" href="javascript:;">奶粉 ></a>
											<a href="javascript:;">1段奶粉</a>
											<a href="javascript:;">2段奶粉</a>
											<a class="colo" href="javascript:;">3段奶粉</a>
											<a href="javascript:;">4段奶粉</a>
											<a href="javascript:;">妈妈奶粉</a>
											<a href="javascript:;">婴儿奶粉</a>
											<a href="javascript:;">特殊配方奶粉</a>
											<a href="javascript:;">牛奶粉</a>
											<a href="javascript:;">羊奶粉 </a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">婴幼食品 ></a>
											<a href="javascript:;">米粉粥</a>
											<a class="colo" href="javascript:;">果蔬/肉泥</a>
											<a href="javascript:;">面条</a>
											<a href="javascript:;">饼干/磨牙棒</a>
											<a href="javascript:;">肉松</a>
											<a href="javascript:;">果汁饮料</a>
											<a href="javascript:;">零食</a>
											<a href="javascript:;">调味品</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">童装/童鞋 ></a>
											<a href="javascript:;">袜子</a>
											<a href="javascript:;">家居服</a>
											<a href="javascript:;">外套/大衣</a>
											<a href="javascript:;">羽绒服</a>
											<a class="colo" href="javascript:;">连体衣/爬服 </a>
											<a href="javascript:;">裤子</a>
											<a href="javascript:;">亲子装</a>
											<a href="javascript:;">运动鞋</a>
											<a href="javascript:;">学步鞋/步前鞋</a>
											<a href="javascript:;">宝宝连体衣</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">尿裤湿巾 ></a>
											<a class="colo" href="javascript:;">纸尿裤</a>
											<a href="javascript:;">拉拉裤</a>
											<a href="javascript:;">婴儿湿巾</a>
											<a href="javascript:;">成人纸尿裤</a>
											<a href="javascript:;">NB</a>
											<a href="javascript:;">S</a>
											<a href="javascript:;">M</a>
											<a href="javascript:;">L</a>
											<a href="javascript:;">XL</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">妈妈专区 ></a>
											<a href="javascript:;">妈咪包/背婴带</a>
											<a href="javascript:;">产后塑身</a>
											<a href="javascript:;">文胸/内裤</a>
											<a href="javascript:;">防辐射服</a>
											<a href="javascript:;">孕妈装</a>
											<a href="javascript:;">孕期营养</a>
											<a href="javascript:;">待产护理</a>
											<a class="colo" href="javascript:;">防溢乳垫</a>
											<a href="javascript:;">储奶器</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">宝宝服饰 ></a>
											<a href="javascript:;">婴儿外出服</a>
											<a href="javascript:;">婴儿内衣</a>
											<a href="javascript:;">婴儿礼盒</a>
											<a href="javascript:;">婴儿鞋帽袜</a>
											<a href="javascript:;">安全防护</a>
											<a href="javascript:;">睡袋/抱被</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">童车安全 ></a>
											<a class="colo" href="javascript:;">安全座椅</a>
											<a href="javascript:;">婴儿手推车</a>
											<a href="javascript:;">餐椅摇椅</a>
											<a href="javascript:;">婴儿床</a>
											<a href="javascript:;">学步车</a>
											<a href="javascript:;">三轮车</a>
											<a href="javascript:;">提篮式座椅</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">宝宝喂养 ></a>
											<a href="javascript:;">牙胶安抚</a>
											<a href="javascript:;">水壶水具</a>
											<a href="javascript:;">儿童餐具</a>
											<a href="javascript:;">暖奶消毒</a>
											<a href="javascript:;">吸奶器</a>
											<a class="colo" href="javascript:;">奶瓶奶嘴</a>
											<a href="javascript:;">奶瓶刷/奶嘴刷</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">洗护清洁 ></a>
											<a href="javascript:;">宝宝护肤</a>
											<a href="javascript:;">理发</a>
											<a href="javascript:;">口腔清洗</a>
											<a href="javascript:;">洗衣皂/洗衣液</a>
											<a href="javascript:;">坐便器/盆</a>
											<a href="javascript:;">奶瓶清洗</a>
											<a href="javascript:;">洗发/护发</a>
											<a class="colo" href="javascript:;">沐浴露</a>
											<a href="javascript:;">儿童洗手液</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">营养品 ></a>
											<a class="colo" href="javascript:;">钙铁锌</a>
											<a href="javascript:;">维生素</a>
											<a href="javascript:;">益生菌</a>
											<a href="javascript:;">牛初乳</a>
											<a href="javascript:;">葡萄糖</a>
											<a href="javascript:;">蛋白粉</a>
											<a href="javascript:;">鱼肝油</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">玩具乐器 ></a>
											<a href="javascript:;">0到1岁</a>
											<a href="javascript:;">1到3岁</a>
											<a href="javascript:;">3到6岁</a>
											<a href="javascript:;">6岁以上</a>
											<a href="javascript:;">模型玩具</a>
											<a href="javascript:;">益智玩具</a>
											<a class="colo" href="javascript:;">积木拼插</a>
											<a href="javascript:;">遥控电动</a>
											<a href="javascript:;">绘画DIY</a>
											<a href="javascript:;">娃娃玩具</a>
											<a href="javascript:;">　　　　　　　毛绒布艺</a>
										</li>
									</ul>
								</li>
								<li>
									<i class="iconfont icon-qingjie"></i>
									<a href="javascript:;">宠物/纸巾/厨卫清洁</a>
									<ul>
										<li>
											<a class="jiacu" href="javascript:;">宠物生活 ></a>
											<a href="javascript:;">水族世界</a>
											<a href="javascript:;">狗粮</a>
											<a href="javascript:;">猫粮</a>
											<a class="colo" href="javascript:;">猫罐头/湿粮</a>
											<a href="javascript:;">狗零食</a>
											<a href="javascript:;">猫零食</a>
											<a href="javascript:;">医疗保健</a>
											<a class="colo" href="javascript:;">猫狗玩具</a>
											<a href="javascript:;">宠物服饰 </a>
											<a href="javascript:;">猫狗窝 </a>
											<a href="javascript:;">洗护美容 </a>
											<a href="javascript:;">　　　　　　　猫砂/猫砂盆 </a>
											<a href="javascript:;">狗厕所/尿垫 </a>
											<a href="javascript:;">宠物牵引 </a>
											<a href="javascript:;">食具水具 </a>
											<a href="javascript:;">小宠用品 </a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">绿植园艺 ></a>
											<a href="javascript:;">绿植盆栽</a>
											<a href="javascript:;">多肉植物</a>
											<a href="javascript:;">花卉</a>
											<a href="javascript:;">苗木</a>
											<a href="javascript:;">种子种球</a>
											<a href="javascript:;">花盆花器</a>
											<a href="javascript:;">园艺土肥</a>
											<a href="javascript:;">园艺工具</a>
											<a href="javascript:;">园林机械</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">一次性 ></a>
											<a href="javascript:;">保鲜袋</a>
											<a class="colo" href="javascript:;">垃圾袋</a>
											<a href="javascript:;">纸杯/塑杯</a>
											<a href="javascript:;">牙签</a>
											<a href="javascript:;">密实袋 </a>
											<a href="javascript:;">一次性餐具</a>
											<a href="javascript:;">保鲜膜/铝箔</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">纸品湿巾 ></a>
											<a href="javascript:;">厨房用纸</a>
											<a href="javascript:;">平板卫生纸</a>
											<a href="javascript:;">手帕纸</a>
											<a href="javascript:;">湿巾</a>
											<a href="javascript:;">卷筒纸</a>
											<a class="colo" href="javascript:;">抽纸</a>
											<a href="javascript:;">商务纸</a>
											<a href="javascript:;">湿厕纸</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">家庭清洁 ></a>
											<a href="javascript:;">洗洁精</a>
											<a href="javascript:;">消毒液</a>
											<a href="javascript:;">油污清洁剂</a>
											<a href="javascript:;">浴缸瓷砖清洁剂</a>
											<a class="colo" href="javascript:;">除臭芳香</a>
											<a href="javascript:;">地板清洁护理</a>
											<a href="javascript:;">家私清洁皮具护</a>
											<a href="javascript:;">多用途清洁剂</a>
											<a href="javascript:;">　　　　　　　家电清洁剂</a>
											<a href="javascript:;">管道疏通</a>
											<a href="javascript:;">驱虫防霉防蛀</a>
											<a href="javascript:;">鞋用品</a>
											<a href="javascript:;">马桶清洁剂</a>
											<a href="javascript:;">水垢清洁</a>
											<a href="javascript:;">玻璃清洁</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">衣物清洁 ></a>
											<a href="javascript:;">洗衣粉</a>
											<a href="javascript:;">洗衣皂</a>
											<a href="javascript:;">洗衣液/凝珠</a>
											<a href="javascript:;">柔顺剂</a>
											<a href="javascript:;">衣物除菌液</a>
											<a href="javascript:;">衣领净</a>
											<a href="javascript:;">彩漂</a>
											<a href="javascript:;">去渍剂</a>
											<a class="colo" href="javascript:;">天然皂粉</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">清洁用具 ></a>
											<a href="javascript:;">钢丝球</a>
											<a href="javascript:;">抹布百洁布</a>
											<a href="javascript:;">除尘工具</a>
											<a href="javascript:;">擦窗器</a>
											<a href="javascript:;">拖把</a>
											<a href="javascript:;">垃圾桶</a>
											<a href="javascript:;">肥皂盒</a>
											<a href="javascript:;">防滑垫</a>
											<a href="javascript:;">家务手套</a>
											<a href="javascript:;">脸盆水桶</a>
											<a class="colo" href="javascript:;">滚毛粘</a>
											<a href="javascript:;">　　　　　　　扫把/簸箕</a>
											<a href="javascript:;">拖把</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">驱虫除湿 ></a>
											<a href="javascript:;">防霉防蛀除湿</a>
											<a href="javascript:;">樟脑樟木</a>
											<a href="javascript:;">除螨仪除螨剂</a>
											<a class="colo" href="javascript:;">空气清新剂</a>
											<a href="javascript:;">除臭消毒</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">皮具护理 ></a>
											<a href="javascript:;">擦鞋器</a>
											<a href="javascript:;">鞋刷</a>
											<a href="javascript:;">鞋油</a>
											<a href="javascript:;">皮鞋靴护理/a>
											<a href="javascript:;">皮衣皮包护理</a>
											<a href="javascript:;">家具皮革护理</a>
										</li>
									</ul>
								</li>
								<li>
									<i class="iconfont icon-jujia"></i>
									<a href="javascript:;">家居/家纺/家装</a>
									<ul>
										<li>
											<a class="jiacu" href="javascript:;">床上用品 ></a>
											<a href="javascript:;">电热毯/电热垫</a>
											<a href="javascript:;">床褥</a>
											<a href="javascript:;">被子</a>
											<a href="javascript:;">毯子/毛巾毯</a>
											<a href="javascript:;">枕头枕芯</a>
											<a href="javascript:;">床品套件</a>
											<a href="javascript:;">儿童床品</a>
											<a class="colo" href="javascript:;">秋冬被</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">家纺布艺 ></a>
											<a href="javascript:;">马桶套</a>
											<a href="javascript:;">毛巾面巾</a>
											<a href="javascript:;">沙发垫</a>
											<a href="javascript:;">浴巾浴袍</a>
											<a href="javascript:;">靠垫坐垫</a>
											<a href="javascript:;">地毯地垫</a>
											<a href="javascript:;">桌布</a>
											<a href="javascript:;">防尘罩</a>
											<a href="javascript:;">围裙</a>
											<a href="javascript:;">擦手巾</a>
											<a href="javascript:;">家居拖鞋</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">收纳洗晒 ></a>
											<a href="javascript:;">压缩袋/泵</a>
											<a href="javascript:;">鞋架</a>
											<a class="colo" href="javascript:;">收纳箱</a>
											<a href="javascript:;">衣物收纳</a>
											<a href="javascript:;">卫浴收纳 </a>
											<a href="javascript:;">收纳层架</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">居家日用 ></a>
											<a href="javascript:;">杯垫/锅垫</a>
											<a href="javascript:;">防潮垫/抽屉垫</a>
											<a href="javascript:;">雨伞雨具</a>
											<a href="javascript:;">驱虫防虫</a>
											<a href="javascript:;">挂钩粘钩</a>
											<a href="javascript:;">炭包/除测甲醛</a>
											<a href="javascript:;">口罩</a>
											<a class="colo" href="javascript:;">暖宝贴</a>
											<a href="javascript:;">热水袋</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">家饰 ></a>
											<a href="javascript:;">相册相簿</a>
											<a href="javascript:;">摆挂件</a>
											<a href="javascript:;">创意礼品</a>
											<a href="javascript:;">香薰蜡烛</a>
											<a href="javascript:;">节庆用品</a>
											<a href="javascript:;">花瓶花艺</a>
											<a href="javascript:;">装饰画</a>
											<a href="javascript:;">十字绣</a>
											<a href="javascript:;">钟饰</a>
											<a href="javascript:;">装饰贴</a>
											<a href="javascript:;">防油贴</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">餐具水具 ></a>
											<a href="javascript:;">筷子</a>
											<a href="javascript:;">碗碟盘</a>
											<a href="javascript:;">刀叉匙</a>
											<a href="javascript:;">果盘托盘</a>
											<a href="javascript:;">保鲜盒</a>
											<a href="javascript:;">餐具套装</a>
											<a href="javascript:;">保温饭盒</a>
											<a href="javascript:;">水具水壶</a>
											<a href="javascript:;">滤水壶</a>
											<a href="javascript:;">茶具</a>
											<a class="colo" href="javascript:;">保温杯</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">厨具锅具 ></a>
											<a href="javascript:;">炒锅</a>
											<a href="javascript:;">奶锅</a>
											<a class="colo" href="javascript:;">蒸锅</a>
											<a href="javascript:;">压力锅</a>
											<a href="javascript:;">平底锅</a>
											<a href="javascript:;">烧水壶</a>
											<a href="javascript:;">套装锅</a>
											<a href="javascript:;">砧板</a>
											<a href="javascript:;">刀具剪刀</a>
											<a href="javascript:;">烘焙工具</a>
											<a href="javascript:;">厨房铲勺</a>
											<a href="javascript:;">煲/砂锅</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">家具 ></a>
											<a href="javascript:;">柜子</a>
											<a href="javascript:;">床垫/席梦思</a>
											<a href="javascript:;">桌子</a>
											<a href="javascript:;">茶几</a>
											<a href="javascript:;">床</a>
											<a href="javascript:;">沙发</a>
											<a href="javascript:;">凳</a>
											<a href="javascript:;">椅</a>
											<a href="javascript:;">架类</a>
											<a href="javascript:;">儿童家具</a>
											<a href="javascript:;">成套家具</a>
											<a href="javascript:;">屏风</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">家装建材 ></a>
											<a href="javascript:;">墙纸</a>
											<a href="javascript:;">地板</a>
											<a href="javascript:;">地暖/暖气片</a>
											<a href="javascript:;">灯饰/a>
											<a href="javascript:;">五金</a>
											<a href="javascript:;">镜子</a>
											<a href="javascript:;">厨房装修</a>
											<a href="javascript:;">卫浴装修</a>
											<a href="javascript:;">灯管灯泡</a>
											<a href="javascript:;">涂料</a>
											<a href="javascript:;">集成吊顶</a>
										</li>
									</ul>
								</li>
								<li>
									<i class="iconfont icon-meizhuang"></i>
									<a href="javascript:;">美妆个人清洁</a>
									<ul>
										<li>
											<a class="jiacu" href="javascript:;">美发护发 ></a>
											<a href="javascript:;">染发</a>
											<a href="javascript:;">定型造型</a>
											<a href="javascript:;">洗发水</a>
											<a class="colo" href="javascript:;">护发/润发</a>
											<a href="javascript:;">洗护套装</a>
											<a href="javascript:;">弹力素</a>
											<a href="javascript:;">旅行装</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">面部护理 ></a>
											<a href="javascript:;">洁面</a>
											<a class="colo" href="javascript:;">面膜</a>
											<a href="javascript:;">爽肤水</a>
											<a href="javascript:;">乳液</a>
											<a href="javascript:;">面霜</a>
											<a href="javascript:;">精华</a>
											<a href="javascript:;">眼霜/眼膜/眼罩</a>
											<a href="javascript:;">卸妆</a>
											<a href="javascript:;">唇部护理</a>
											<a href="javascript:;">喷雾</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">女性护理 ></a>
											<a href="javascript:;">女性湿巾</a>
											<a href="javascript:;">私处洗液</a>
											<a href="javascript:;">组合套装</a>
											<a href="javascript:;">卫生巾</a>
											<a href="javascript:;">护垫 </a>
											<a class="colo" href="javascript:;">卫生棉条</a>
											<a href="javascript:;">裤型卫生巾</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">口腔护理 ></a>
											<a href="javascript:;">口喷</a>
											<a href="javascript:;">牙线</a>
											<a href="javascript:;">牙粉牙贴</a>
											<a href="javascript:;">漱口水</a>
											<a href="javascript:;">牙刷</a>
											<a href="javascript:;">牙膏</a>
											<a href="javascript:;">电动牙刷</a>
											<a href="javascript:;">儿童牙刷</a>
											<a href="javascript:;">儿童牙膏</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">沐浴清洁 ></a>
											<a href="javascript:;">沐浴露</a>
											<a href="javascript:;">香皂</a>
											<a href="javascript:;">洗手液</a>
											<a href="javascript:;">浴盐/液</a>
											<a href="javascript:;">搓泥浴宝</a>
											<a class="colo" href="javascript:;">沐浴套装</a>
											<a href="javascript:;">棉签</a>
											<a href="javascript:;">浴帽</a>
											<a href="javascript:;">耳勺</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">身体护理 ></a>
											<a href="javascript:;">脱毛</a>
											<a class="colo" href="javascript:;">手部护理</a>
											<a href="javascript:;">身体乳</a>
											<a href="javascript:;">足部护理</a>
											<a href="javascript:;">颈部护理</a>
											<a href="javascript:;">美体塑身</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">男士护理 ></a>
											<a href="javascript:;">洁面</a>
											<a href="javascript:;">面部护理</a>
											<a href="javascript:;">男士套装</a>
											<a class="colo" href="javascript:;">剃须护理</a>
											<a href="javascript:;">男士香水</a>
											<a href="javascript:;">沐浴露</a>
											<a href="javascript:;">洗护发</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">缤纷彩妆 ></a>
											<a href="javascript:;">眼影</a>
											<a href="javascript:;">眼线笔/液</a>
											<a href="javascript:;">睫毛膏</a>
											<a href="javascript:;">腮红</a>
											<a href="javascript:;">指甲油</a>
											<a href="javascript:;">隔离/妆前乳</a>
											<a href="javascript:;">彩妆套装</a>
											<a class="colo" href="javascript:;">女士香水</a>
											<a href="javascript:;">唇笔</a>
											<a href="javascript:;">口红</a>
											<a href="javascript:;">唇彩/唇釉</a>
											<a href="javascript:;">　　　　　　　遮瑕</a>
											<a href="javascript:;">高光</a>
											<a href="javascript:;">散粉</a>
											<a href="javascript:;">BB霜/气垫</a>
											<a href="javascript:;">粉饼</a>
											<a href="javascript:;">粉底</a>
											<a href="javascript:;">眉笔/粉</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">美容工具 ></a>
											<a href="javascript:;">修眉</a>
											<a href="javascript:;">双眼皮贴</a>
											<a href="javascript:;">分装瓶</a>
											<a href="javascript:;">面膜工具/a>
											<a href="javascript:;">化妆棉</a>
											<a class="colo" href="javascript:;">美甲</a>
											<a href="javascript:;">化妆刷</a>
											<a href="javascript:;">梳子</a>
											<a href="javascript:;">睫毛夹</a>
										</li>
									</ul>
								</li>
								<li>
									<i class="iconfont icon-1"></i>
									<a href="javascript:;">女装/男装/内衣/珠宝</a>
									<ul>
										<li>
											<a class="jiacu" href="javascript:;">女装 ></a>
											<a class="colo" href="javascript:;">羽绒服</a>
											<a href="javascript:;">棉服</a>
											<a href="javascript:;">外套</a>
											<a href="javascript:;">连衣裙</a>
											<a href="javascript:;">卫衣</a>
											<a href="javascript:;">风衣</a>
											<a href="javascript:;">针织衫</a>
											<a href="javascript:;">毛呢大衣</a>
											<a href="javascript:;">西装</a>
											<a href="javascript:;">半身裙</a>
											<a href="javascript:;">T恤</a>
											<a href="javascript:;">衬衫</a>
											<a href="javascript:;">雪纺衫</a>
											<a href="javascript:;">　　　　　牛仔裤</a>
											<a href="javascript:;">休闲裤</a>
											<a href="javascript:;">打底裤</a>
											<a href="javascript:;">皮衣</a>
											<a href="javascript:;">皮草</a>
											<a href="javascript:;">吊带/背心</a>
											<a href="javascript:;">婚纱</a>
											<a href="javascript:;">大码女装</a>
											<a href="javascript:;">中老年服饰</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">男装 ></a>
											<a href="javascript:;">羽绒服</a>
											<a href="javascript:;">休闲裤</a>
											<a href="javascript:;">棒球服</a>
											<a href="javascript:;">卫衣</a>
											<a href="javascript:;">针织衫</a>
											<a href="javascript:;">运动裤</a>
											<a href="javascript:;">牛仔裤</a>
											<a href="javascript:;">西服套装</a>
											<a href="javascript:;">棉衣</a>
											<a href="javascript:;">风衣</a>
											<a href="javascript:;">夹克</a>
											<a href="javascript:;">西服</a>
											<a href="javascript:;">西裤</a>
											<a href="javascript:;">　　　　　马甲/背心</a>
											<a href="javascript:;">衬衫</a>
											<a href="javascript:;">T恤</a>
											<a href="javascript:;">Polo衫</a>
											<a href="javascript:;">中老年男装</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">内衣内裤 ></a>
											<a href="javascript:;">文胸</a>
											<a href="javascript:;">抹胸</a>
											<a href="javascript:;">文胸套装</a>
											<a href="javascript:;">保暖衣裤</a>
											<a href="javascript:;">塑身衣 </a>
											<a href="javascript:;">男式内裤</a>
											<a href="javascript:;">女式内裤</a>
											<a href="javascript:;">女士吊带</a>
											<a href="javascript:;">男士背心</a>
											<a href="javascript:;">秋衣秋裤</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">睡衣配件 ></a>
											<a href="javascript:;">睡衣套装</a>
											<a href="javascript:;">睡裙</a>
											<a href="javascript:;">睡袍</a>
											<a href="javascript:;">领带/领结</a>
											<a href="javascript:;">丝袜/连裤袜</a>
											<a class="colo" href="javascript:;">棉袜</a>
											<a href="javascript:;">女袜</a>
											<a href="javascript:;">船袜</a>
											<a href="javascript:;">睡衣/睡裤</a>
											<a href="javascript:;">手套</a>
											<a href="javascript:;">丝巾</a>
											<a href="javascript:;">男士围巾</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">珠宝饰品 ></a>
											<a class="colo" href="javascript:;">黄金</a>
											<a href="javascript:;">k金</a>
											<a href="javascript:;">铂金</a>
											<a href="javascript:;">金银投资</a>
											<a href="javascript:;">碧玺</a>
											<a href="javascript:;">彩宝</a>
											<a href="javascript:;">水晶玛瑙</a>
											<a href="javascript:;">项链</a>
											<a href="javascript:;">戒指</a>
											<a href="javascript:;">手镯/手链</a>
											<a href="javascript:;">耳饰</a>
											<a href="javascript:;">发饰</a>
											<a href="javascript:;">饰品配件</a>
											<a href="javascript:;">　　　　　　　翡翠玉石</a>
											<a href="javascript:;">银饰</a>
											<a href="javascript:;">钻石</a>
											<a href="javascript:;">纪念币</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">钟表/眼镜 ></a>
											<a href="javascript:;">瑞士表</a>
											<a class="colo" href="javascript:;">国表</a>
											<a href="javascript:;">配件</a>
											<a href="javascript:;">太阳镜</a>
											<a href="javascript:;">老花镜</a>
											<a href="javascript:;">眼镜架</a>
											<a href="javascript:;">打火机</a>
											<a href="javascript:;">烟具</a>
											<a href="javascript:;">男表</a>
											<a href="javascript:;">女表</a>
											<a href="javascript:;">儿童表</a>
										</li>
									</ul>
								</li>
								<li>
									<i class="iconfont icon-xiangbao"></i>
									<a href="javascript:;">鞋靴/箱包/户外运动</a>
									<ul>
										<li>
											<a class="jiacu" href="javascript:;">男鞋 ></a>
											<a href="javascript:;">帆布鞋</a>
											<a href="javascript:;">商务鞋</a>
											<a href="javascript:;">男靴</a>
											<a href="javascript:;">工装鞋</a>
											<a href="javascript:;">定制鞋</a>
											<a href="javascript:;">休闲鞋</a>
											<a href="javascript:;">布洛克</a>
											<a href="javascript:;">网鞋</a>
											<a href="javascript:;">乐福鞋</a>
											<a href="javascript:;">高帮鞋</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">女鞋 ></a>
											<a href="javascript:;">帆布鞋</a>
											<a href="javascript:;">雪地靴</a>
											<a href="javascript:;">女靴</a>
											<a href="javascript:;">休闲鞋</a>
											<a href="javascript:;">妈妈鞋</a>
											<a href="javascript:;">高跟鞋</a>
											<a href="javascript:;">松糕鞋</a>
											<a href="javascript:;">马丁靴</a>
											<a href="javascript:;">平底鞋</a>
											<a href="javascript:;">乐福鞋</a>
											<a href="javascript:;">小白鞋</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">运动鞋服 ></a>
											<a class="colo" href="javascript:;">跑步鞋</a>
											<a href="javascript:;">篮球鞋</a>
											<a href="javascript:;">板鞋/休闲鞋</a>
											<a href="javascript:;">帆布鞋</a>
											<a href="javascript:;">综合训练鞋 </a>
											<a href="javascript:;">足球鞋</a>
											<a href="javascript:;">羽毛球鞋</a>
											<a href="javascript:;">网球鞋</a>
											<a href="javascript:;">拖鞋</a>
											<a href="javascript:;">运动T恤</a>
											<a href="javascript:;">　　　　　　　运动卫衣</a>
											<a href="javascript:;">运动套装</a>
											<a href="javascript:;">运动背心</a>
											<a href="javascript:;">运动裤</a>
											<a href="javascript:;">运动球服</a>
											<a href="javascript:;">运动包</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">户外装备 ></a>
											<a href="javascript:;">帐篷</a>
											<a href="javascript:;">户外照明</a>
											<a href="javascript:;">户外背包</a>
											<a href="javascript:;">垂钓装备</a>
											<a href="javascript:;">野餐烧烤</a>
											<a class="colo" href="javascript:;">户外鞋</a>
											<a href="javascript:;">军迷用品</a>
											<a href="javascript:;">冲锋衣</a>
											<a href="javascript:;">速干衣裤/a>
											<a href="javascript:;">抓绒/软壳衣裤</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">健身球具 ></a>
											<a href="javascript:;">羽毛球</a>
											<a href="javascript:;">篮球</a>
											<a href="javascript:;">棋牌益智</a>
											<a href="javascript:;">游泳</a>
											<a class="colo" href="javascript:;">瑜伽</a>
											<a href="javascript:;">乒乓球</a>
											<a href="javascript:;">足球</a>
											<a href="javascript:;">轮滑</a>
											<a href="javascript:;">自行车</a>
											<a href="javascript:;">动感单车</a>
											<a href="javascript:;">跑步机</a>
											<a href="javascript:;">健身车</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">女包 ></a>
											<a href="javascript:;">单肩包</a>
											<a class="colo" href="javascript:;">手提包</a>
											<a href="javascript:;">斜挎包</a>
											<a href="javascript:;">化妆包</a>
											<a href="javascript:;">双肩包</a>
											<a href="javascript:;">真皮包</a>
											<a href="javascript:;">PU包</a>
											<a href="javascript:;">链条包</a>
											<a href="javascript:;">水桶包</a>
											<a href="javascript:;">菱格包</a>
											<a href="javascript:;">帆布包</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">男包 ></a>
											<a href="javascript:;">手拿包</a>
											<a href="javascript:;">单肩包/斜挎包</a>
											<a class="colo" href="javascript:;">双肩包</a>
											<a href="javascript:;">商务手提包</a>
											<a href="javascript:;">男士胸包/腰包</a>
											<a href="javascript:;">手拿包</a>
											<a href="javascript:;">真皮包</a>
											<a href="javascript:;">帆布包</a>
											<a href="javascript:;">休闲</a>
											<a href="javascript:;">公文包</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">功能箱包 ></a>
											<a class="colo" href="javascript:;">拉杆箱</a>
											<a href="javascript:;">拉杆包</a>
											<a href="javascript:;">旅行包</a>
											<a href="javascript:;">电脑包</a>
											<a href="javascript:;">双肩包</a>
											<a href="javascript:;">万向轮</a>
											<a href="javascript:;">登机箱</a>
											<a href="javascript:;">儿童书包</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">钱包 ></a>
											<a href="javascript:;">男士钱包</a>
											<a href="javascript:;">女士钱包</a>
											<a href="javascript:;">短款钱包</a>
											<a href="javascript:;">长款钱包</a>
											<a href="javascript:;">钥匙包</a>
											<a href="javascript:;">卡包</a>
										</li>
									</ul>
								</li>
								<li>
									<i class="iconfont icon-iconshouji"></i>
									<a href="javascript:;">手机/数码/电脑办公</a>
									<ul>
										<li>
											<a class="jiacu" href="javascript:;">手机 ></a>
											<a class="colo" href="javascript:;">手机</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">手机配件 ></a>
											<a class="colo" href="javascript:;">苹果配件</a>
											<a href="javascript:;">蓝牙耳机</a>
											<a href="javascript:;">手机储存卡</a>
											<a href="javascript:;">手机耳机</a>
											<a href="javascript:;">自拍杆</a>
											<a href="javascript:;">数据线</a>
											<a href="javascript:;">充电器</a>
											<a href="javascript:;">手机壳</a>
											<a href="javascript:;">手机贴膜</a>
											<a href="javascript:;">手机电池</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">摄影影像 ></a>
											<a href="javascript:;">单反相机</a>
											<a href="javascript:;">微单</a>
											<a class="colo" href="javascript:;">运动相机</a>
											<a href="javascript:;">拍立得</a>
											<a href="javascript:;">数码相机</a>
											<a href="javascript:;">镜头</a>
											<a href="javascript:;">摄像机</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">影音电教 ></a>
											<a href="javascript:;">耳机及耳麦</a>
											<a href="javascript:;">音箱</a>
											<a class="colo" href="javascript:;">电子书</a>
											<a href="javascript:;">录音笔</a>
											<a href="javascript:;">点读机 </a>
											<a href="javascript:;">学生平板</a>
											<a href="javascript:;">电子词典</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">智能设备 ></a>
											<a href="javascript:;">智能手环</a>
											<a class="colo" href="javascript:;">智能手表</a>
											<a href="javascript:;">智能家居系统</a>
											<a href="javascript:;">无人机</a>
											<a href="javascript:;">网络机顶盒</a>
											<a href="javascript:;">体感车</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">数码配件 ></a>
											<a class="colo" href="javascript:;">移动电源</a>
											<a href="javascript:;">滤镜</a>
											<a href="javascript:;">闪光灯/手柄</a>
											<a href="javascript:;">相机清洁</a>
											<a href="javascript:;">镜头附件</a>
											<a href="javascript:;">充电电池</a>
											<a href="javascript:;">存储卡</a>
											<a href="javascript:;">三脚架/云台</a>
											<a href="javascript:;">相机包</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">电脑整机 ></a>
											<a href="javascript:;">笔记本</a>
											<a href="javascript:;">平板电脑</a>
											<a href="javascript:;">游戏本</a>
											<a href="javascript:;">一体机</a>
											<a href="javascript:;">台式机</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">网络外设 ></a>
											<a href="javascript:;">鼠标</a>
											<a href="javascript:;">键盘</a>
											<a href="javascript:;">鼠标垫</a>
											<a href="javascript:;">电脑清洁</a>
											<a href="javascript:;">键鼠套装</a>
											<a href="javascript:;">电脑包</a>
											<a href="javascript:;">路由器</a>
											<a href="javascript:;">网卡</a>
											<a href="javascript:;">4G/3G上网</a>
											<a href="javascript:;">交换机</a>
											<a href="javascript:;">摄像头</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">办公设备 ></a>
											<a href="javascript:;">碎纸机</a>
											<a href="javascript:;">塑封机</a>
											<a href="javascript:;">投影机</a>
											<a href="javascript:;">装订机</a>
											<a href="javascript:;">复印机</a>
											<a href="javascript:;">一体机</a>
											<a href="javascript:;">考勤机</a>
											<a href="javascript:;">点钞机</a>
										</li>
									</ul>
								</li>
								<li>
									<i class="iconfont icon-jiayongdianqi"></i>
									<a href="javascript:;">家用电器/汽车用品</a>
									<ul>
										<li>
											<a class="jiacu" href="javascript:;">厨房小电 ></a>
											<a href="javascript:;">微波炉</a>
											<a href="javascript:;">电饭煲</a>
											<a href="javascript:;">电水壶</a>
											<a href="javascript:;">豆浆机</a>
											<a href="javascript:;">料理机</a>
											<a href="javascript:;">榨汁机</a>
											<a href="javascript:;">空气炸锅</a>
											<a href="javascript:;">咖啡机</a>
											<a href="javascript:;">电饼铛</a>
											<a href="javascript:;">酸奶机</a>
											<a href="javascript:;">电压力锅</a>
											<a class="colo" href="javascript:;">　　　　　　　养生锅</a>
											<a href="javascript:;">电烤箱</a>
											<a href="javascript:;">面包机</a>
											<a href="javascript:;">电炖锅</a>
											<a href="javascript:;">煮蛋器</a>
											<a href="javascript:;">多用途锅</a>
											<a href="javascript:;">果蔬解毒机</a>
											<a href="javascript:;">电烧烤炉</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">生活电器 ></a>
											<a href="javascript:;">吸尘器</a>
											<a href="javascript:;">智能扫地机</a>
											<a href="javascript:;">蒸汽拖把</a>
											<a class="colo" href="javascript:;">空气净化器</a>
											<a href="javascript:;">除湿机</a>
											<a href="javascript:;">净水设备</a>
											<a href="javascript:;">加湿器</a>
											<a href="javascript:;">饮水机</a>
											<a href="javascript:;">挂烫机/熨斗</a>
											<a href="javascript:;">干衣机</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">个护健康 ></a>
											<a href="javascript:;">剃须刀</a>
											<a href="javascript:;">电吹风</a>
											<a href="javascript:;">按摩枕/按摩垫</a>
											<a href="javascript:;">按摩椅</a>
											<a href="javascript:;">足浴盆 </a>
											<a href="javascript:;">美发器</a>
											<a href="javascript:;">美眼仪</a>
											<a href="javascript:;">按摩肩带</a>
											<a href="javascript:;">甩脂机</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">电视空调 ></a>
											<a href="javascript:;">4K电视</a>
											<a href="javascript:;">智能电视</a>
											<a href="javascript:;">曲面电视</a>
											<a href="javascript:;">壁挂式空调</a>
											<a href="javascript:;">柜式空调</a>
											<a href="javascript:;">中央空调</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">厨卫大电 ></a>
											<a href="javascript:;">燃气热水器</a>
											<a href="javascript:;">电热水器</a>
											<a href="javascript:;">油烟机</a>
											<a href="javascript:;">燃气灶</a>
											<a href="javascript:;">洗碗机</a>
											<a href="javascript:;">消毒柜</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">冰箱 ></a>
											<a href="javascript:;">单门</a>
											<a class="colo" href="javascript:;">双门</a>
											<a href="javascript:;">三门冰箱</a>
											<a href="javascript:;">冰吧/冷柜</a>
											<a href="javascript:;">酒柜</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">洗衣机 ></a>
											<a href="javascript:;">波轮洗衣机</a>
											<a href="javascript:;">滚筒洗衣机</a>
											<a href="javascript:;">洗烘一体机</a>
											<a href="javascript:;">双缸洗衣机</a>
											<a href="javascript:;">迷你洗衣机</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">维修保养 ></a>
											<a href="javascript:;">机油</a>
											<a href="javascript:;">轮胎</a>
											<a href="javascript:;">滤清器</a>
											<a href="javascript:;">火花塞</a>
											<a href="javascript:;">雨刷</a>
											<a href="javascript:;">轮毂</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">车载产品 ></a>
											<a href="javascript:;">行车记录仪</a>
											<a href="javascript:;">净化器</a>
											<a href="javascript:;">车载电源</a>
											<a href="javascript:;">倒车雷达</a>
											<a href="javascript:;">汽车装饰</a>
										</li>
									</ul>
								</li>
								<li>
									<i class="iconfont icon-pingzi"></i>
									<a href="javascript:;">医药/保健滋补/成人</a>
									<ul>
										<li>
											<a class="jiacu" href="javascript:;">营养健康 ></a>
											<a href="javascript:;">美体瘦身</a>
											<a href="javascript:;">调节免疫</a>
											<a href="javascript:;">缓解疲劳</a>
											<a href="javascript:;">改善睡眠</a>
											<a href="javascript:;">明目益智</a>
											<a href="javascript:;">肝脏养护</a>
											<a href="javascript:;">增骨密度</a>
											<a href="javascript:;">肠胃养护</a>
											<a href="javascript:;">清咽利喉</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">营养成分 ></a>
											<a href="javascript:;">蛋白粉</a>
											<a class="colo" href="javascript:;">鱼油</a>
											<a href="javascript:;">益生菌</a>
											<a href="javascript:;">维生素</a>
											<a href="javascript:;">钙片</a>
											<a href="javascript:;">叶酸</a>
											<a href="javascript:;">胶原蛋白</a>
											<a href="javascript:;">左旋肉碱</a>
											<a href="javascript:;">葡萄籽</a>
											<a href="javascript:;">酵素</a>
											<a href="javascript:;">玛卡</a>
											<a href="javascript:;">泡腾片</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">传统滋补 ></a>
											<a href="javascript:;">人参/西洋参</a>
											<a href="javascript:;">冬虫夏草</a>
											<a href="javascript:;">灵芝</a>
											<a class="colo" href="javascript:;">燕窝</a>
											<a href="javascript:;">药食同源 </a>
											<a href="javascript:;">三七</a>
											<a href="javascript:;">石斛/枫斗</a>
											<a href="javascript:;">阿胶</a>
											<a href="javascript:;">鹿茸</a>
											<a href="javascript:;">花胶/鱼胶</a>
											<a href="javascript:;">雪蛤</a>
											<a href="javascript:;">　　　　　　　珍珠粉</a>
											<a href="javascript:;">养生茶饮</a>
											<a href="javascript:;">灵芝孢子粉</a>
											<a href="javascript:;">当归</a>
											<a href="javascript:;">黄芩</a>
											<a href="javascript:;">红景天</a>
											<a href="javascript:;">藏红花</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">成人用品 ></a>
											<a href="javascript:;">男用器具</a>
											<a href="javascript:;">女用器具</a>
											<a href="javascript:;">情趣内衣</a>
											<a class="colo" href="javascript:;">避孕套</a>
											<a href="javascript:;">验孕/排卵</a>
											<a href="javascript:;">震动棒</a>
											<a href="javascript:;">润滑液</a>
											<a href="javascript:;">男用延时</a>
											<a href="javascript:;">飞机杯</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">家用器械 ></a>
											<a href="javascript:;">创可贴</a>
											<a href="javascript:;">体温计</a>
											<a class="colo" href="javascript:;">血压计</a>
											<a href="javascript:;">血糖仪</a>
											<a href="javascript:;">制氧机</a>
											<a href="javascript:;">雾化器</a>
											<a href="javascript:;">助听器</a>
											<a href="javascript:;">轮椅助行</a>
											<a href="javascript:;">艾灸</a>
											<a href="javascript:;">按摩理疗</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">隐形眼镜 ></a>
											<a href="javascript:;">护理液</a>
											<a href="javascript:;">润眼液</a>
											<a href="javascript:;">隐形伴侣</a>
											<a href="javascript:;">美瞳</a>
											<a class="colo" href="javascript:;">透明隐形</a>
										</li>
									</ul>
								</li>
								<li>
									<i class="iconfont icon-tushu"></i>
									<a href="javascript:;">图书</a>
									<ul>
										<li>
											<a class="jiacu" href="javascript:;">少儿 ></a>
											<a href="javascript:;">0－2岁</a>
											<a href="javascript:;">3－6岁</a>
											<a href="javascript:;">7－10岁</a>
											<a href="javascript:;">11－14岁</a>
											<a href="javascript:;">儿童文学</a>
											<a href="javascript:;">绘本</a>
											<a href="javascript:;">科普</a>
											<a href="javascript:;">幼儿启蒙</a>
											<a href="javascript:;">手工游戏</a>
											<a href="javascript:;">智力开发</a>
											<a href="javascript:;">少儿英语</a>
											<a href="javascript:;">　　　　　卡通动漫</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">教育 ></a>
											<a href="javascript:;">教材</a>
											<a href="javascript:;">中小学辅导</a>
											<a href="javascript:;">考试</a>
											<a href="javascript:;">外语学习</a>
											<a href="javascript:;">字典词典</a>
											<a href="javascript:;">课外读物</a>
											<a href="javascript:;">英语四六级</a>
											<a href="javascript:;">会计类考试</a>
											<a href="javascript:;">国家公务员</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">文艺 ></a>
											<a href="javascript:;">小说</a>
											<a href="javascript:;">文学</a>
											<a href="javascript:;">青春文学</a>
											<a href="javascript:;">传记</a>
											<a href="javascript:;">动漫 </a>
											<a href="javascript:;">艺术</a>
											<a href="javascript:;">摄影</a>
											<a href="javascript:;">书法</a>
											<a href="javascript:;">音乐</a>
											<a href="javascript:;">绘画</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">经管励志 ></a>
											<a href="javascript:;">管理</a>
											<a href="javascript:;">金融与投资</a>
											<a href="javascript:;">经济</a>
											<a href="javascript:;">励志与成功</a>
											<a href="javascript:;">市场营销</a>
											<a href="javascript:;">股票</a>
											<a href="javascript:;">智能经济</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">人文社科 ></a>
											<a href="javascript:;">历史</a>
											<a href="javascript:;">心理学</a>
											<a href="javascript:;">政治军事</a>
											<a href="javascript:;">国学古籍</a>
											<a href="javascript:;">哲学/宗教</a>
											<a href="javascript:;">社会科学</a>
											<a href="javascript:;">法律</a>
											<a href="javascript:;">文化</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">生活 ></a>
											<a href="javascript:;">育儿家教</a>
											<a href="javascript:;">孕产/胎教</a>
											<a href="javascript:;">健身保健</a>
											<a href="javascript:;">旅游/地图</a>
											<a href="javascript:;">美食</a>
											<a href="javascript:;">时尚美妆</a>
											<a href="javascript:;">家居</a>
											<a href="javascript:;">手工DIY</a>
											<a href="javascript:;">两性</a>
											<a href="javascript:;">体育</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">科技 ></a>
											<a href="javascript:;">计算机与互联网</a>
											<a href="javascript:;">科普</a>
											<a href="javascript:;">建筑</a>
											<a href="javascript:;">工业科技</a>
											<a href="javascript:;">电子通信</a>
											<a href="javascript:;">医学</a>
											<a href="javascript:;">科学与自然</a>
											<a href="javascript:;">农林</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">刊/原版 ></a>
											<a href="javascript:;">杂志期刊</a>
											<a href="javascript:;">英文原版书</a>
											<a href="javascript:;">港台图书</a>
										</li>
										<li>
											<a class="jiacu" href="javascript:;">音像 ></a>
											<a href="javascript:;">音乐</a>
											<a href="javascript:;">影视</a>
											<a href="javascript:;">教育音像</a>
											<a href="javascript:;">游戏</a>
											<a href="javascript:;">影视/动漫周边</a>
											<a href="javascript:;">在线教育</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div id="ban_foot" class="clearfix">
							<div class="ban_a">
								<p>本场剩余</p>
								<span>00</span> :
								<span>05</span> :
								<span>59</span>
							</div>
							<div id="wufeng" class="clearfix">
								<ul>
									<li>
										<div class="ddiv" style="border-left-color: #fff;">
											<div>
												<p>维他 柠檬茶</p>
												<p>250ml*24盒 整</p>
												<p>￥51.9</p>
												<p>参考价：￥60</p>
											</div>
											<img src="img/ban_f01.jpg"/>
										</div>
										<div class="ddiv">
											<div>
												<p>优奥(YOUAO)</p>
												<p>萌小阳纸杯 一</p>
												<p>￥19.9</p>
												<p>参考价：￥30.6</p>
											</div>
											<img src="img/ban_f02.jpg"/>
										</div>
										<div class="ddiv">
											<div>
												<p>宝路 宠物幼犬</p>
												<p>狗粮 全犬种通</p>
												<p>￥159</p>
												<p>参考价：￥239</p>
											</div>
											<img src="img/ban_f03.jpg"/>
										</div>
										<div class="ddiv">
											<div>
												<p>卫新 薰衣草</p>
												<p>洗衣液 2kg</p>
												<p>￥26.8</p>
												<p>参考价：￥36.9</p>
											</div>
											<img src="img/ban_f04.jpg"/>
										</div>
									</li>
									<li>
										<div class="ddiv" style="border-left-color: #fff;">
											<div>
												<p>中鼎 一级大豆</p>
												<p>油 5L食用油 责</p>
												<p>￥33.8</p>
												<p>参考价：￥58</p>
											</div>
											<img src="img/ban_f05.jpg"/>
										</div>
										<div class="ddiv">
											<div>
												<p>养元六个核桃</p>
												<p>易智优＋核桃乳</p>
												<p>￥61.89</p>
												<p>参考价：￥84</p>
											</div>
											<img src="img/ban_f06.jpg"/>
										</div>
										<div class="ddiv">
											<div>
												<p>曼秀雷敦</p>
												<p>（Mentholatum）</p>
												<p>￥29.5</p>
												<p>参考价：￥44.9</p>
											</div>
											<img src="img/ban_f07.jpg"/>
										</div>
										<div class="ddiv">
											<div>
												<p>美德乐</p>
												<p>（Medela）瑞士</p>
												<p>￥1799</p>
												<p>参考价：￥1999</p>
											</div>
											<img src="img/ban_f08.jpg"/>
										</div>
									</li>
									<li>
										<div class="ddiv" style="border-left-color: #fff;">
											<div>
												<p>湾仔码头 上汤</p>
												<p>小云吞 三鲜口</p>
												<p>￥22.8</p>
												<p>参考价：￥29.8</p>
											</div>
											<img src="img/ban_f09.jpg"/>
										</div>
										<div class="ddiv">
											<div>
												<p>森王晶珍 黑米</p>
												<p>1kg (东北 五谷</p>
												<p>￥9.9</p>
												<p>参考价：￥29.8</p>
											</div>
											<img src="img/ban_f10.jpg"/>
										</div>
										<div class="ddiv">
											<div>
												<p>苏泊尔(SUPOR)</p>
												<p>破壁机家用多功</p>
												<p>￥799</p>
												<p>参考价：￥1599</p>
											</div>
											<img src="img/ban_f11.jpg"/>
										</div>
										<div class="ddiv">
											<div>
												<p>云南白药 环保</p>
												<p>牙膏4支装 益生</p>
												<p>￥56</p>
												<p>参考价：￥119</p>
											</div>
											<img src="img/ban_f12.jpg"/>
										</div>
									</li>
									<li>
										<div class="ddiv" style="border-left-color: #fff;">
											<div>
												<p>合生元</p>
												<p>（BIOSTIME）</p>
												<p>￥263</p>
												<p>参考价：￥296</p>
											</div>
											<img src="img/ban_f13.jpg"/>
										</div>
										<div class="ddiv">
											<div>
												<p>马天尼</p>
												<p>（Martini）洋酒</p>
												<p>￥69</p>
												<p>参考价：￥89</p>
											</div>
											<img src="img/ban_f14.jpg"/>
										</div>
										<div class="ddiv">
											<div>
												<p>瑞士莲</p>
												<p>（Lindt）软心</p>
												<p>￥139</p>
												<p>参考价：￥199</p>
											</div>
											<img src="img/ban_f15.jpg"/>
										</div>
										<div class="ddiv">
											<div>
												<p>立白 天然皂液</p>
												<p>（含椰子油精</p>
												<p>￥88.8</p>
												<p>参考价：￥119.8</p>
											</div>
											<img src="img/ban_f16.jpg"/>
										</div>
									</li>
								</ul>
								<!--<span style="left: 0;"><</span>
								<span style="right: 0;">></span>-->
							</div>
						</div>
					</div>
				</div>
				<div id="cen_one" class="center clearfix">
					<a style="display: inline-block;margin-top: 40px;" href="javascript:;"><img src="img/cen_one.jpg" style="width: 1200px;"/></a>
					<div id="cen_one_fir">
						<div>
							<a href="xiangqingye.php"><img src="img/cen_one01.jpg"/></a>
						</div>
						<div>
							<a href="javascript:;"><img src="img/cen_one02.jpg"/></a>
						</div>
						<div>
							<a href="javascript:;"><img src="img/cen_one03.jpg"/></a>
						</div>
						<div>
							<a href="javascript:;"><img src="img/cen_one04.jpg"/></a>
						</div>
						<div>
							<a href="javascript:;"><img src="img/cen_one05.jpg"/></a>
						</div>
						<div>
							<a href="javascript:;"><img src="img/cen_one06.jpg"/></a>
						</div>
						<div>
							<a href="javascript:;"><img src="img/cen_one07.jpg"/></a>
						</div>
						<div>
							<a href="javascript:;"><img src="img/cen_one08.jpg"/></a>
						</div>
						<div>
							<a href="javascript:;"><img src="img/cen_one09.jpg"/></a>
						</div>
						<div>
							<a href="javascript:;"><img src="img/cen_one10.jpg"/></a>
						</div>
					</div>
				</div>
				<div class="cen_two center clearfix">
					<div class="two_left">
						<a href="javascript:;"><img src="img/two_left.jpg" style="width: 261px;"/></a>
					</div>
					<div class="two_mid">
						<p class="p1"><span>团购</span></p>
						<a href="javascript:;"><img src="img/two_mid01.jpg" style="height: 350px;float: left;"/></a>
						<div class="min_rig">
							<div class="rig_top">
								<p><a class="a2" href="javascript:;">蓝月亮</a></p>
								<p><a href="javascript:;">部分2件5折</a></p>
								<a href="javascript:;"><img src="img/two_mid02.jpg" style="width: 100px;"/></a>
							</div>
							<div class="rig_foot">
								<p><a class="a2" href="javascript:;">粮油调味</a></p>
								<p><a href="javascript:;">满99减30</a></p>
								<a href="javascript:;"><img src="img/two_mid03.jpg" style="width: 100px;"/></a>
							</div>
						</div>
					</div>
					<div class="two_right" id="twoRight">
						<p class="p1"><span>排行版</span></p>
						<ul>
							<li>
								<a class="aaa" href="javascript:;" id="acti">清洁用品</a>
								<ul style="display: block;">
									<li>
										<div>
											<div>
												<img src="img/two_rig01.jpg"/>
												<span>1.8折</span>
											</div>
											<a href="javascript:;">五月花 纸巾 厕纸</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig02.jpg"/>
												<span>3.2折</span>
											</div>
											<a href="javascript:;">金纺 衣物护理柔顺</a>
										</div>
									</li>
									<li style="margin-right: 0;">
										<div>
											<div>
												<img src="img/two_rig03.jpg"/>
												<span>3.4折</span>
											</div>
											<a href="javascript:;">优洁士小白鞋清洁</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig04.jpg"/>
												<span>3.5折</span>
											</div>
											<a href="javascript:;">澳格菲</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig05.jpg"/>
												<span>3.5折</span>
											</div>
											<a href="javascript:;">居乐优品 【/共配2</a>
										</div>
									</li>
									<li style="margin-right: 0;">
										<div>
											<div>
												<img src="img/two_rig06.jpg"/>
												<span>3.8折</span>
											</div>
											<a href="javascript:;">顺清柔 抽纸 纯净</a>
										</div>
									</li>
								</ul>
							</li>
							<li>
								<a class="aaa" href="javascript:;">粮油调味</a>
								<ul>
									<li>
										<div>
											<div>
												<img src="img/two_rig001.jpg"/>
												<span>1.3折</span>
											</div>
											<a href="javascript:;">粮田世家 精品 黑</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig002.jpg"/>
												<span>2.6折</span>
											</div>
											<a href="javascript:;">美农美季 黄小米谷</a>
										</div>
									</li>
									<li style="margin-right: 0;">
										<div>
											<div>
												<img src="img/two_rig003.jpg"/>
												<span>3.1折</span>
											</div>
											<a href="javascript:;">方家铺子 五谷杂粮</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig004.jpg"/>
												<span>3.1折</span>
											</div>
											<a href="javascript:;">澳格菲</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig005.jpg"/>
												<span>3.3折</span>
											</div>
											<a href="javascript:;">【砀山馆】背个果</a>
										</div>
									</li>
									<li style="margin-right: 0;">
										<div>
											<div>
												<img src="img/two_rig006.jpg"/>
												<span>3.6折</span>
											</div>
											<a href="javascript:;">黑土优选 东北五谷</a>
										</div>
									</li>
								</ul>
							</li>
							<li>
								<a class="aaa" href="javascript:;">进口食品</a>
								<ul>
									<li>
										<div>
											<div>
												<img src="img/two_rig0a1.jpg"/>
												<span>2.2折</span>
											</div>
											<a href="javascript:;">百事可乐蓝色梅子</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig0a2.jpg"/>
												<span>2.8折</span>
											</div>
											<a href="javascript:;">黛尼（DalySol）</a>
										</div>
									</li>
									<li style="margin-right: 0;">
										<div>
											<div>
												<img src="img/two_rig0a3.jpg"/>
												<span>3.3折</span>
											</div>
											<a href="javascript:;">德国 进口牛奶 好</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig0a4.jpg"/>
												<span>3.4折</span>
											</div>
											<a href="javascript:;">【沃尔玛】如乐 法</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig0a5.jpg"/>
												<span>3.7折</span>
											</div>
											<a href="javascript:;">Del Monte地扪美</a>
										</div>
									</li>
									<li style="margin-right: 0;">
										<div>
											<div>
												<img src="img/two_rig0a6.jpg"/>
												<span>4.0折</span>
											</div>
											<a href="javascript:;">香港进口 Lafei拉</a>
										</div>
									</li>
								</ul>
							</li>
							<li>
								<a class="aaa" href="javascript:;">休闲食品</a>
								<ul>
									<li>
										<div>
											<div>
												<img src="img/two_rig0b1.jpg"/>
												<span>2.6折</span>
											</div>
											<a href="javascript:;">稻香村</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig0b2.jpg"/>
												<span>2.6折</span>
											</div>
											<a href="javascript:;">达利园好吃点甄好</a>
										</div>
									</li>
									<li style="margin-right: 0;">
										<div>
											<div>
												<img src="img/two_rig0b3.jpg"/>
												<span>3.0折</span>
											</div>
											<a href="javascript:;">新农哥 _甜糯板栗</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig0b4.jpg"/>
												<span>3.2折</span>
											</div>
											<a href="javascript:;">良品铺子 风味猪肉</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig0b5.jpg"/>
												<span>3.8折</span>
											</div>
											<a href="javascript:;">可可哥 精武鸭脖鸭</a>
										</div>
									</li>
									<li style="margin-right: 0;">
										<div>
											<div>
												<img src="img/two_rig0b6.jpg"/>
												<span>3.8折</span>
											</div>
											<a href="javascript:;">好想你 红枣干 枣</a>
										</div>
									</li>
								</ul>
							</li>
							<li>
								<a class="aaa" href="javascript:;">饮料冲调</a>
								<ul>
									<li>
										<div>
											<div>
												<img src="img/two_rig0c1.jpg"/>
												<span>2.4折</span>
											</div>
											<a href="javascript:;">芬尼湾</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig0c2.jpg"/>
												<span>2.5折</span>
											</div>
											<a href="javascript:;">谷养密计 大麦若叶</a>
										</div>
									</li>
									<li style="margin-right: 0;">
										<div>
											<div>
												<img src="img/two_rig0c3.jpg"/>
												<span>3.0折</span>
											</div>
											<a href="javascript:;">宜养 发酵型乳酸菌</a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig0c4.jpg"/>
												<span>3.2折</span>
											</div>
											<a href="javascript:;">新希望（new </a>
										</div>
									</li>
									<li>
										<div>
											<div>
												<img src="img/two_rig0c5.jpg"/>
												<span>3.4折</span>
											</div>
											<a href="javascript:;">【买2减10】蜂蜜</a>
										</div>
									</li>
									<li style="margin-right: 0;">
										<div>
											<div>
												<img src="img/two_rig0c6.jpg"/>
												<span>3.4折</span>
											</div>
											<a href="javascript:;">倍丽 柠檬味 苏打</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="cen_two cen_thr center clearfix">
					<div class="two_left">
						<a href="javascript:;"><img src="img/thr_left.jpg" style="width: 261px;"/></a>
					</div>
					<div class="two_mid">
						<p class="p1"><span>耍大牌</span></p>
						<a href="javascript:;"><img src="img/thr_mid01.jpg" style="height: 350px;float: left;"/></a>
						<div class="min_rig">
							<div class="thr_rig_top">
								<p><a class="a2" href="javascript:;">FION菲安妮</a></p>
								<p><a href="javascript:;">换新 满减红包</a></p>
								<a href="javascript:;"><img src="img/thr_mid02.jpg"/></a>
							</div>
							<div class="thr_rig_mid">
								<p><a class="a2" href="javascript:;">格力GREE</a></p>
								<p><a href="javascript:;">钜惠取暖 超值</a></p>
								<a href="javascript:;"><img src="img/thr_mid03.jpg"/></a>
							</div>
							<div class="thr_rig_foot">
								<p><a class="a2" href="javascript:;">宝路狗粮</a></p>
								<p><a href="javascript:;">满199减40</a></p>
								<a href="javascript:;"><img src="img/thr_mid04.jpg"/></a>
							</div>
						</div>
					</div>
					<div class="two_right">
						<p class="p1" style="margin-top: 0;"><span>生活派</span></p>
						<div class="a1">
							<p><a href="javascript:;">品质厨房</a></p>
							<p><a class="a3" href="javascript:;">进口美味199减100</a></p>
						</div>
						<div class="diva">
							<p><a href="javascript:;">秋冬换新机</a></p>
							<p><a class="a3" href="javascript:;">好货清单</a></p>
							<img src="img/thr_rig02.jpg" style="width: 90px"/>
						</div>
						<div class="diva" style="margin-bottom: 15px;">
							<p><a href="javascript:;">冬日暖心早餐</a></p>
							<p><a class="a3" href="javascript:;">早晨新动力</a></p>
							<img src="img/thr_rig03.jpg" style="width: 90px"/>
						</div>
						<div class="aa1">
							<p><a href="javascript:;">萌宝福利社</a></p>
							<p><a href="javascript:;">go</a></p>
						</div>
						<div class="aa2">
							<p><a href="javascript:;">你好，旧时光</a></p>
							<p><a href="javascript:;">go</a></p>
						</div>
					</div>
				</div>
				<div class="cen_four center clearfix">
					<h4>全球进口<span>></span></h4>
					<div class="four_left">
						<a href="javascript:;">进口饼干</a>
						<a href="javascript:;">进口坚果</a>
						<a href="javascript:;">进口糖巧</a>
						<a href="javascript:;">进口咖啡</a>
						<a href="javascript:;">进口水饮</a>
						<a href="javascript:;">进口方便面</a>
					</div>
					<div class="four_rig">
						<div class="dv01" style="margin-right: 1px;">
							<img src="img/cenfour_rig01.jpg" style="width: 405px; margin: 0;"/>
						</div>
						<div class="dv02 dvdv">
							<p class="p01">进口休闲零食</p>
							<p class="p02">满99元减50</p>
							<a href="xiangqingye2.php"><img src="img/cenfour_rig02.jpg"/></a>
						</div>
						<div class="dv03 dvdv">
							<p class="p01">进口粮油</p>
							<p class="p02">满99元减50</p>
							<img src="img/cenfour_rig03.jpg"/>
						</div>
						<div class="dv03 dvdv">
							<p class="p01">进口坚果</p>
							<p class="p02">满188元减100</p>
							<img src="img/cenfour_rig04.jpg"/>
						</div>
						<div class="dv02 dvdv" style="margin-top: 1px;">
							<p class="p01">进口水饮冲调</p>
							<p class="p02">满99减50</p>
							<img src="img/cenfour_rig05.jpg"/>
						</div>
					</div>
					<div class="four_rig_rig">
						<div style="background: rgb(255, 230, 238);">
							<p class="pp01" style="color: rgb(240, 98, 145);">冬日护肤计</p>
							<p class="pp02">2件8折</p>
							<span style="background: rgb(240, 98, 145);"></span>
							<img src="img/cenfourigr01.png"/>
						</div>
						<div style="background: rgb(255, 243, 228);">
							<p class="pp01" style="color: rgb(238, 152, 50);">进口母婴</p>
							<p class="pp02">MOM&BABY</p>
							<span style="background: rgb(238, 152, 50);"></span>
							<img src="img/cenfourigr02.png"/>
						</div>
						<div style="background: rgb(233, 251, 240);">
							<p class="pp01" style="color: rgb(84, 164, 114);">进口生鲜</p>
							<p class="pp02">FRESH</p>
							<span style="background: rgb(84, 164, 114);"></span>
							<img src="img/cenfourigr03.png"/>
						</div>
						<div style="background: rgb(249, 238, 233);">
							<p class="pp01" style="color: rgb(73, 125, 98);">进口家居</p>
							<p class="pp02">HOME</p>
							<span style="background: rgb(73, 125, 98);"></span>
							<img src="img/cenfourigr04.png"/>
						</div>
						<div style="background: rgb(240, 248, 255);">
							<p class="pp01" style="color: rgb(70, 139, 203);">厨卫清洁进口馆</p>
							<p class="pp02">CLEANING</p>
							<span style="background: rgb(70, 139, 203);"></span>
							<img src="img/cenfourigr05.png"/>
						</div>
						<div style="background: rgb(226, 248, 242);">
							<p class="pp01" style="color: rgb(84, 164, 114);">进口保健品</p>
							<p class="pp02">HEALTH</p>
							<span style="background: rgb(84, 164, 114);"></span>
							<img src="img/cenfourigr06.png"/>
						</div>
					</div>
				</div>
				<div class="cen_five center clearfix">
					<div class="fiv_lef">
						<a href="javascript:;">国产食品 ></a>
						<p>国产食品</p>
						<div class="dv1">
							<p class="p1">三只松鼠</p>
							<p class="p2">满199减100</p>
							<img src="img/fivelef01.jpg"/>
						</div>
						<div class="dv2">
							<div class="le"></div>
							<div class="ri"></div>
						</div>
					</div>
					<div class="fiv_mid">
						<p><a href="javascript:;">坚果炒货</a> | <a href="javascript:;">饼干蛋糕</a> | <a href="javascript:;">粮油调味</a> | <a href="javascript:;">方便速食</a> | <a href="javascript:;">糖果/巧克力</a> | <a href="javascript:;">蜂蜜</a></p>
						<div class="mid00">
							<p class="p01">吃货嘉年华</p>
							<p class="p02">满199减100</p>
							<img src="img/fivmid01.jpg"/>
						</div>
						<div class="mid00">
							<p class="p01">三只松鼠5周年店庆</p>
							<p class="p02">满199减120</p>
							<img src="img/fivmid02.jpg"/>
						</div>
						<div class="mid00">
							<p class="p01">1号零食</p>
							<p class="p02">满199减100</p>
							<img src="img/fivmid03.png"/>
						</div>
						<div class="mid00">
							<p class="p01">厨房调味</p>
							<p class="p02">低至5折</p>
							<img src="img/fivmid04.jpg"/>
						</div>
						<div class="mid00">
							<p class="p01">营养保健</p>
							<p class="p02">两件八折</p>
							<img src="img/fivmid05.jpg"/>
						</div>
						<div class="mid06">
							<img src="img/fivm01.jpg"/>
							<img src="img/fivm02.jpg"/>
							<img src="img/fivm03.jpg"/>
							<img src="img/fivm04.jpg"/>
							<img src="img/fivm05.jpg"/>
							<img src="img/fivm06.jpg"/>
						</div>
					</div>
					<div class="fiv_rig">
						<p class="p1">热门商品</p>
						<div>
							<img src="img/fivrig01.jpg"/>
							<a href="javascript:;">福临门 食用油 浓香压榨一级 花生油4L 中粮出品</a>
							<p>￥79.90</p>
						</div>
						<div>
							<img src="img/fivrig02.jpg"/>
							<a href="javascript:;">崇明岛 2017新米 大米10Kg （20斤）【1号店</a>
							<p>￥108.80</p>
						</div>
						<div>
							<img src="img/fivrig03.jpg"/>
							<a href="javascript:;">金龙鱼 食用油 葵花籽食用调和油5L</a>
							<p>￥45.90</p>
						</div>
						<div>
							<img src="img/fivrig04.jpg"/>
							<a href="javascript:;">洽洽 坚果炒货 每日坚果 内含开果器 夏威夷</a>
							<p>￥16.90</p>
						</div>
						<div>
							<img src="img/fivrig05.jpg"/>
							<a href="javascript:;">福临门 食用油 温情献礼套装（玉米油</a>
							<p>￥79.90</p>
						</div>
					</div>
				</div>
				<div class="cen_six center clearfix">
					<div class="six_left">
						<div class="dv1">
							<a href="javascript:;">1号生鲜 ></a>
							<div>
								<a href="javascript:;">新鲜水果</a>|<a href="javascript:;">大闸蟹</a>|<a href="javascript:;">低温乳品</a>|<a href="javascript:;">品质牛肉</a>|<a href="javascript:;">冷冻速食</a>
							</div>
						</div>
						<div class="dv2">
							<p class="pp1">橙意满满</p>
							<p class="pp2">爆款直降</p>
							<span></span><span></span><span></span>
							<img src="img/sixlef01.jpg"/>
						</div>
						<div class="dv3">
							<div>
								<p class="p1">水果集市</p>
								<p class="p2">爆款直降</p>
								<img src="img/sixlef02.jpg"/>
							</div>
							<div>
								<p class="p1">时蔬直降</p>
								<p class="p2">沙窝萝卜29.9</p>
								<img src="img/sixlef03.jpg"/>
							</div>
							<div>
								<p class="p1">海鲜盛典</p>
								<p class="p2">59元3件</p>
								<img src="img/sixlef04.jpg"/>
							</div>
							<div>
								<p class="p1">生鲜蔬菜</p>
								<p class="p2">美味次日达</p>
								<img src="img/sixlef05.jpg"/>
							</div>
						</div>
					</div>
					<div class="six_left six_rig">
						<div class="dv1">
							<a href="javascript:;">酒水饮料 ></a>
							<div>
								<a href="javascript:;">牛奶乳品</a>|<a href="javascript:;">酒水</a>|<a href="javascript:;">饮料饮品</a>|<a href="javascript:;">饮用水</a>|<a href="javascript:;">咖啡/奶茶</a>|<a href="javascript:;">茗茶</a>
							</div>
						</div>
						<div class="dv2">
							<p class="pp1">酒水分会场</p>
							<p class="pp2">满199减100</p>
							<span></span><span></span><span></span>
							<img src="img/sixrig01.jpg"/>
						</div>
						<div class="dv3">
							<div>
								<p class="p1">水饮冲调</p>
								<p class="p2">低至1元秒</p>
								<img src="img/sixrig02.jpg"/>
							</div>
							<div>
								<p class="p1">酒水会场</p>
								<p class="p2">爆款直降</p>
								<img src="img/sixrig03.jpg"/>
							</div>
							<div>
								<p class="p1">牛奶中心</p>
								<p class="p2">满99减30</p>
								<img src="img/sixrig04.jpg"/>
							</div>
							<a href="javascript:;" class="dvi1">
								<img src="img/sixrig05.jpg"/>
								<img src="img/sixrig06.jpg"/>
								<img src="img/sixrig07.jpg"/>
								<img src="img/sixrig08.jpg"/>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div id="footer" style="background: #fff;">
				<div id="foot_one" class="center">
					<div>
						<img src="img/foot_one01.jpg"/>
						<p class="p1">正品保障</p>
						<p>正品行货 放心选购</p>
					</div>
					<div>
						<img src="img/foot_one02.jpg"/>
						<p class="p1">满86包邮</p>
						<p>满86元 免运费</p>
					</div>
					<div>
						<img src="img/foot_one03.jpg"/>
						<p class="p1">售后无忧</p>
						<p>7天无理由退货</p>
					</div>
					<div>
						<img src="img/foot_one04.jpg"/>
						<p class="p1">准时送达</p>
						<p>收货时间由你做主</p>
					</div>
				</div>
				<div id="foot_two" class="center clearfix">
					<div>
						<p>新手入门</p>
						<a href="javascript:;">购物流程</a><br />
						<a href="javascript:;">会员制度</a><br />
						<a href="javascript:;">订单查询</a><br />
						<a href="javascript:;">发票制度</a>
					</div>
					<div>
						<p>支付方式</p>
						<a href="javascript:;">货到付款</a><br />
						<a href="javascript:;">网上支付</a><br />
						<a href="javascript:;">银行转账</a><br />
						<a href="javascript:;">礼品卡支付</a><br />
						<a href="javascript:;">其它支付</a>
					</div>
					<div>
						<p>配送服务</p>
						<a href="javascript:;">配送进度查询</a><br />
						<a href="javascript:;">商品验货与签收</a>
					</div>
					<div>
						<p>售后保障</p>
						<a href="javascript:;">退换货政策</a><br />
						<a href="javascript:;">联系客服</a>
					</div>
					<div>
						<p>APP更优惠</p>
						<img src="img/foot_two01.png" style="width: 90px;"/>
					</div>
					<div>
						<p>加微信查订单</p>
						<img src="img/foot_two02.jpg"/>
					</div>
				</div>
				<div id="foot_thr" class="center">
					<p><a href="javascript:;">沪ICP备16050468号</a> | <a href="javascript:;">经营证照</a> | <a href="javascript:;">互联网药品信息服务资格证</a> | <a href="javascript:;">违法和不良信息举报电话：0527-88100253</a> | <a href="javascript:;">沪B2-20170039</a></p>
					<p>Copyright© 1号店网上超市 2007-2017，All Rights Reserved</p>
				</div>
				<div id="foot_four" class="center">
					<div>
						<img src="img/foot_four01.jpg"/>
						<img src="img/foot_four02.jpg"/>
						<img src="img/foot_four03.jpg"/>
						<img src="img/foot_four04.jpg"/>
						<img src="img/foot_four05.jpg"/>
						<img src="img/foot_four06.jpg"/>
						<img src="img/foot_four07.jpg"/>
						<img src="img/foot_four08.png"/>
					</div>
				</div>
			</div>
		</div>
		<div id="fix">
			<div class="d1 dd2">
				<i class="iconfont icon-gerenzhongxin2"></i>
				<div>个人中心</div>
			</div>
			<?php
				if(!empty($_SESSION['username'])){
					$a=$_SESSION['username'];
					echo "<a class='aa11' href='gouwuche.php'>";
				}else{
					echo "<a class='aa11' href='konggouwuche.php'>";
				}
			?>
			<i style="font-weight: normal;" class="iconfont icon-gouwuchekong"></i><br />购<br />物<br />车</a>
			<div class="d2 dd2">
				<i class="iconfont icon-gerenzhongxin-diyongquan"></i>
				<div>抵用券</div>
			</div>
			<div class="d3">
				<div class="d2 dd2">
					<i style="font-weight: normal;" class="iconfont icon-yonghufankui"></i>
					<div>用户反馈</div>
				</div>
				<div class="d2 dd2">
					<i style="font-weight: normal;" class="iconfont icon-erweima"></i>
					<div style="width: 0px;height: 0px;"></div>
				</div>
				<div class="d2 dd2">
					<i class="iconfont icon-fanhuidingbu"></i>
					<div><a class="aa22" href="#">返回顶部</a></div>
				</div>
			</div>
		</div>
		<div id="topfixed">
			<div class="center">
				<a href="index.php"><img style="margin-right: 50px;" src="img/denglulogo.jpg"/></a>
				<input type="text" style="vertical-align: middle;" id="txt2" value="" placeholder="清洁用品部分满199减100"/>
				<button id="btn2" style="vertical-align: middle;" class="iconfont icon-sousuo"></button>
			</div>
		</div>
		
		
		<script src="js/index.js"></script>
	</body>
</html>
