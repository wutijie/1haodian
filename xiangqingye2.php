<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>详情页巧克力</title>
		<link rel="stylesheet" type="text/css" href="css/xiangqingye2.css"/>
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
			
			<div id="nav_cen">
				<div class="center">
					<a href="index.html"><img style="width: 190px;float: left;" src="img/nav_cen01.gif"/></a>
					<div id="navlef">
						<input type="text" name="txt1" id="txt1" value="" />
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
			<div id="bigg">
			<div id="centerr" class="center clearfix">
				<div id="cenone" class="center clearfix">
					<div id="box1fu">
						<div id="box1" class="clearfix">
							<img src="img/xqybox200.jpg"/>
							<div></div>
						</div>
					</div>
					<div id="box2fu">
						<div id="box2" class="clearfix">
							<img src="img/xqybox200.jpg"/>
						</div>
					</div>
					<div id="box3">
						<div class="dd1">
							意大利进口 雀巢芭喜 榛仁夹心巧克力12粒爱之书礼盒加送欢乐熊玩偶表白套装
						</div>
						<div class="dd2">
							<span class="da1">价格</span><span class="da2">¥286.00</span>
						</div>
						<div class="dd3">
							<a href="javascript:;">好评率<strong>96%</strong></a>
							<a href="javascript:;">[评论<strong>1200+</strong>条]</a>
						</div>
						<div class="dd4">
							<div class="v1">
								促销
							</div>
							<div class="v2">
								<div>
									<span class="pa1">限制</span>
									<span>此价格不与套装优惠同时享受</span>
									<a class="a1a" href="javascript:;">共<b>1</b>项，展开查看</a>
								</div>
								<div>
									<span class="pa1">满减</span>
									<span>满199元减100元</span>
									<a href="javascript:;">立即参加</a>
									<a class="a1a" href="javascript:;">共<b>1</b>项，展开查看</a>
								</div>
							</div>
						</div>
						<div class="dd5">
							<div class="v1">
								送货至
							</div>
							<div class="v2">
								<p>
									<input type="text" name="" id="" value="上海静安区城区" />
									<strong>有货</strong>
									<span> 15:00前下单,可预约今晚送达</span>
								</p>
								<p class="p2">由 1号店 发货，并提供售后服务      支持   <span>86元免基础生鲜商品运费(10kg内)</span></p>
							</div>
						</div>
						<div class="dd6">
							<div class="db1">
								<div class="lef">
									1
								</div>
								<div class="rig">
									<div>+</div>
									<div>-</div>
								</div>
							</div>
							<?php
								if(!empty($_SESSION['username'])){
									echo "<a class='db2' href='gouwuche.php'>";
								}else{
									echo "<a class='db2' href='konggouwuche.php'>";
								}
							?>
							加入购物车</a>
						</div>
						<div class="dd8">
							<div class="dd7">
								<span>保障</span>
								<span><i>x</i>不支持7天无理由退货</span>
							</div>
						</div>
					</div>
				</div>
				<div id="centwo" class="center">
					<div id="box4" class="clearfix">
						<div class="act">
							<img src="img/xqybox200.jpg"/>
						</div>
						<div>
							<img src="img/box2302.jpg"/>
						</div>
						<div>
							<img src="img/box2303.jpg"/>
						</div>
						<div>
							<img src="img/box2304.jpg"/>
						</div>
						<div>
							<img src="img/box2305.jpg"/>
						</div>
					</div>
				</div>
				<div id="centhr" class="center clearfix">
					<div class="dd00">
						<div class="d001">
							洋货铺
						</div>
						<div class="thrleft">
							<div class="d002">
								<span class="spa1">联系卖家：</span>
								<a class="a11" href="javascript::">联系客服</a>
								<div class="d2">
									<div class="d1">
										9.70
									</div>
									<div>
										<p><span>商品评价</span><span>9.72</span></p>
										<p><span>服务态度</span><span>9.65</span></p>
										<p><span>物流速度</span><span>9.66</span></p>
									</div>
								</div>
								<a class="aa2" href="javascript:;">进入店铺</a>
							</div>
							<div class="d003">
								<p>看了本商品的用户最终购买了</p>
							</div>
							<div class="d004">
								<img src="img/thrd2001.jpg"/>
								<p class="p01">意大利进口 雀巢芭喜（Baci） 榛</p>
								<p class="p02">¥111.00</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="d004">
								<img src="img/thrd2002.jpg"/>
								<p class="p01">意大利进口 雀巢Nestle芭喜Baci</p>
								<p class="p02">¥166.00</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="d004">
								<img src="img/thrd2003.jpg"/>
								<p class="p01">意大利进口 雀巢Nestle芭喜Bac</p>
								<p class="p02">¥78.00</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="d004">
								<img src="img/thrd2004.jpg"/>
								<p class="p01">比利时进口 Guylian吉利莲 金贝</p>
								<p class="p02">¥76.00</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="d004">
								<img src="img/thrd2005.jpg"/>
								<p class="p01">芭喜 Baci进口巧克力礼盒装171g</p>
								<p class="p02">¥148.90</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="d004">
								<img src="img/thrd2006.jpg"/>
								<p class="p01">意大利进口 雀巢Nestle芭喜Bac</p>
								<p class="p02">¥119.00</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="d004">
								<img src="img/thrd2007.jpg"/>
								<p class="p01">KDV俄罗斯进口巧克力休闲零食</p>
								<p class="p02">¥19.90</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="d004">
								<img src="img/thrd2008.jpg"/>
								<p class="p01">【瑞士进口】爱普诗（Alpes d'Or</p>
								<p class="p02">¥32.00</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="d004">
								<img src="img/thrd2009.jpg"/>
								<p class="p01">Ferrero Rocher费列罗榛果威化糖</p>
								<p class="p02">¥129.00</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="d004">
								<img src="img/thrd2010.jpg"/>
								<p class="p01">Ferrero Rocher费列罗榛果威化糖</p>
								<p class="p02">¥56,00</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="d004">
								<img src="img/thrd2011.jpg"/>
								<p class="p01">费列罗巧克力礼盒装糖果生日礼</p>
								<p class="p02">¥89.00</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="d004">
								<img src="img/thrd2012.jpg"/>
								<p class="p01">瑞士进口SwissToblerone瑞士三</p>
								<p class="p02">¥22.50</p>
								<a href="javascript:;">查看详情</a>
							</div>
						</div>
					</div>
					<div class="ddd000">
						<div class="thrrig">
							<div class="dd01">
								<i></i><span>顾客最喜爱商品排行榜</span>
							</div>
							<div class="dd02">
								<div>1</div>
								<img src="img/thrdr2001.jpg"/>
								<p class="p01">德国进口RitterSport瑞特斯波德全榛子黑巧克力100g</p>
								<p class="p02">¥18.90</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="dd02">
								<div>2</div>
								<img src="img/thrdr2002.jpg"/>
								<p class="p01">波兰进口 Flis爱芙 休闲零食 手指形牛奶巧克力棒 120g/盒</p>
								<p class="p02">¥12.80</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="dd02">
								<div>3</div>
								<img src="img/thrdr2003.jpg"/>
								<p class="p01">意大利进口 Galatine佳乐锭/阿拉丁牛奶片 100g</p>
								<p class="p02">¥19.90</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="dd02">
								<div>4</div>
								<img src="img/thrdr2004.jpg"/>
								<p class="p01">泰国进口 京都念慈菴枇杷糖 60g 润喉糖 水果味糖果零食 硬糖</p>
								<p class="p02">¥16.90</p>
								<a href="javascript:;">查看详情</a>
							</div>
							<div class="dd02">
								<div>5</div>
								<img src="img/thrdr2005.jpg"/>
								<p class="p01">马来西亚进口 Alfredo爱芙 99%香浓黑巧克力礼盒装 100g/盒</p>
								<p class="p02">¥25.90</p>
								<a href="javascript:;">查看详情</a>
							</div>
						</div>
						<div class="thrrmi">
							<a class="a1a1" href="javascript:;">商品介绍</a>
							<a href="javascript:;">评价  35万+</a>
							<a href="javascript:;">规格及包装</a>
							<a href="javascript:;">售后服务</a>
						</div>
						<div class="thrfoot">
							<p>规格参数<a href="javascript:;">查看更多 »</a></p>
							<div>
								<span style="width: 310px;display: inline-block;">品牌：芭喜（BACI）</span>
								<span>商品名称：意大利进口 雀巢芭喜 榛仁夹心巧克力12粒　　</span>
								<span>商品编号：5910144</span>
								<br /><span style="width: 310px;display: inline-block;">商品毛重：321.00g</span>
								<span>商品产地：中国大陆</span>
							</div>
							<div class="fotfot clearfix">
								<img src="img/xqthrrf2001.jpg"/>
								<img src="img/xqthrrf2002.jpg"/>
								<img src="img/xqthrrf2003.jpg"/>
								<img src="img/xqthrrf2004.jpg"/>
								<img src="img/xqthrrf2005.jpg"/>
								<img src="img/xqthrrf2006.jpg"/>
								<img src="img/xqthrrf2007.jpg"/>
								<img src="img/xqthrrf2008.jpg"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="footer" class="clearfix" style="background: #fff;">
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
		<script src="js/xiangqingye2.js"></script>
	</body>
</html>
