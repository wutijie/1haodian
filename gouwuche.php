<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>购物车</title>
		<link rel="stylesheet" type="text/css" href="css/gouwuche.css"/>
		<link rel="stylesheet" type="text/css" href="font_mwwkim6t18knjyvi/iconfont.css"/>
		<link rel="icon" href="img/favicon.ico" />
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
								echo "<a href='javascript:;' style='color: #f00;'>新晋　".$_SESSION['username']." </a>";
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
		<div id="bigg">
			
		
		<div id="big" style="background: #fcfcfc;" class="clearfix">
			<div id="cen_one" class="center">
				<img src="img/denglulogo.jpg"/>
				<p>配送至：<a href="javascript:;">上海</a>|<a href="javascript:;">静安区</a>|<a href="javascript:;">城区</a></p>
				<input type="text" name="" id="" value="" placeholder="请输入关键词"/>
			</div>
			<div id="cen_two" class="center">
				<span class="span1"><input type="checkbox" checked="checked" /><a href="javascript:;">全选</a></span>
				<span class="span2">商品信息</span>
				<span class="span3">单价（元）</span>
				<span class="span4">数量</span>
				<span class="span5">小计（元）</span>
				<span class="span6">操作</span>
			</div>
			<div class="big_thr center" id="cenn_thr">
				<div class="cen_thr">
					<span><input type="checkbox" checked="checked" /><a href="javascript:;">自营</a></span>
					<div>
						<span>满86元包邮（重量不超过20公斤）</span>
						<a class="aa" href="javascript:;">立即凑单</a>
					</div>
				</div>
				<div class="cen_four" style="border-bottom: 1px solid #dcdcdc;">
					<input type="checkbox" checked="checked" style="margin-top: 51px;" />
					<div class="div_four">
						<img src="img/cen_four001.jpg"/ style="float: left;">
						<a href="javascript:;"><span>生鲜</span>菲律宾 凤梨 2个装 单果重约1kg 新鲜水果</a>
						<p class="p1">39.90</p>
						<div class="div2">
							<a class="jian" href="javascript:;">-</a>
							<input class="txt" type="text" name="" id="" value="1" />
							<a class="jia" href="javascript:;">+</a>
						</div>
						<div class="div3">
							<p class="pp">39.90</p>
							<p class="pp2">3.36kg</p>
						</div>
					</div>
				</div>
				<div class="cen_four">
					<input type="checkbox" checked="checked" style="margin-top: 51px;" />
					<div class="div_four">
						<img src="img/cen_four002.jpg"/ style="float: left;">
						<a href="javascript:;">Apple iPhone 5s (A1530) 16GB 金色 移动<br />联通4G手机 活动</a>
						<p class="p1">1499.00</p>
						<div class="div2">
							<a class="jian" href="javascript:;">-</a>
							<input class="txt" type="text" name="" id="" value="1" />
							<a class="jia" href="javascript:;">+</a>
						</div>
						<div class="div3">
							<p class="pp">1499.00</p>
							<p class="pp2">0.34kg</p>
						</div>
					</div>
				</div>
			</div>
			<div class="big_thr center" id="cenn_four">
				<div class="cen_thr">
					<span><input type="checkbox" checked="checked" /><a href="javascript:;">三只松鼠旗舰店</a></span>
					<div>
						<span>满86元包邮（重量不超过20公斤）</span>
						<a class="aa" href="javascript:;">立即凑单</a>
					</div>
				</div>
				<div class="cen_four">
					<input type="checkbox" checked="checked" style="margin-top: 51px;" />
					<div class="div_four">
						<img id="dianjipic" src="img/cen_four003.jpg"/ style="float: left;">
						<a href="javascript:;">三只松鼠_夏威夷果265gx2袋零食坚果炒货干果奶油味送开口器</a>
						<p class="p1">47.90</p>
						<div class="div2">
							<a class="jian" href="javascript:;">-</a>
							<input class="txt" type="text" name="" id="" value="1" />
							<a class="jia" href="javascript:;">+</a>
						</div>
						<div class="div3">
							<p class="pp">47.90</p>
							<p class="pp2">0.53kg</p>
						</div>
					</div>
				</div>
			</div>
			<div id="fukuan" class="center">
				<div class="fu_left">
					<input type="checkbox" checked="checked" />
					<span>全选（共<b>3</b>件）</span>
					<a href="javascript:;">清除无效商品</a>
					<a href="javascript:;">批量删除</a>
				</div>
				<div class="fu_right">
					<div style="float: right;">
						<div class="dv1">
							<span>已选商品<b>3</b>件</span>
							<a href="javascript:;">预览</a>
						</div>
						<div class="dv2">
							<p>合计：<span>¥<b>1586.80</b></span></p>
						</div>
						<div class="dv3">
							<a href="javascript:;">去结算</a>
						</div>
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
		
		
		<script src="js/gouwuche.js"></script>
	</body>
</html>
