<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Layouts/css/global.css" />
<link rel="stylesheet" type="text/css" href="Layouts/css/index.css">
<script type="text/javascript" src="Layouts/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Layouts/js/index.js"></script>
<!--[if IE 6]>
<!--背景图片透明方法-->
<script src="Layouts/js/iepng.js" type="text/javascript"></script>
<!--插入图片透明方法-->
<script type="text/javascript">
   EvPNG.fix('div, ul, img, li, input');  //EvPNG.fix('包含透明PNG图片的标签'); 多个标签之间用英文逗号隔开。
</script>
<![endif]-->
<title>惠桂林首页</title>
</head>
<body>
<!-- 顶部订阅分享区域 -->
	<div id="top_rss">
		<div id="top_rss_box">
			<img src="<?php echo ($IMAGE_URL); ?>Layouts/images/cellphone.png">
			<ul class="left_ul">
				<li class="one"><a href="">手机版</a></li>
				<li class="two"><a href="">使用帮助</a></li>
			</ul>
			<ul class="right_ul">
				<li><a href="#">订阅</a></li>
				<li class="two"><a href="">分享</a></li>
			</ul>
			
		</div>
	</div>
<!-- 顶部订阅分享区域结束 -->
<!-- Logo区域 -->
	<div id="top_logo_box">
		<a href="#"><img src="<?php echo ($IMAGE_URL); ?>Layouts/images/logo.png" alt="惠桂林" id="logo" /></a>
		<a href="#"><img src="<?php echo ($IMAGE_URL); ?>Layouts/images/slogan.png" alt="吃喝玩乐，惠享生活" id="slogan" /></a>
		<ul id="login">
			<li class="one"><a href="" class="one">登陆</a></li>
			<li><a href="" class="two">快速注册</a></li>
		</ul>
	</div>
<!-- Logo区域结束 -->
<!--  导航区域 -->
	<div id="top_nav_box">
		<div id="left_collection">
			<img class="left_img" src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_02.png" alt="" />
			<span>全部分类</span>
		</div>
		<ul id="nav">
			<li class="one"><a href="index.php">首页</a></li>
			<li><a href="<?php echo U("Coupon/coupon");?>" class="one">优惠券</a></li>
			<li><a href="<?php echo U("Card/card");?>" class="one">会员卡</a></li>
			<li class="four"><a href="" class="one">商户</a></li>
		</ul>
		<form action="" id="search_box">
			<input id="search_con" type="text" value="桂林环球美食节" />
			<input id="search_btn" type="button"/>
		</form>
	</div>
<!-- 导航区域结束-->
<!-- 内容区域 -->
	<div id="main">
		<!-- 左边内容区域 -->
		<div id="main_left">
			<ul id="nav_content">
				<li><a href="">美食</a></li>
				<li class="two"><a href="">休闲娱乐</a></li>
				<li class="three"><a href="">生活便民</a></li>
				<li class="four"><a href="">旅游酒店</a></li>
				<li class="five"><a href="">打折信息</a></li>
			</ul>
			<p>小道消息</p>
			<ul id="msg_content">
            <?php if(is_array($news)): foreach($news as $key=>$n): ?><li><a href="" class="one"><?php echo ($n['words']); ?></a></li><?php endforeach; endif; ?>
			</ul>
		</div>
		<!-- 左边内容区域结束 -->
		<!-- 中间内容区域 -->
		<div id="main_middle">
			<div id="ad">
                <?php if(is_array($ads)): foreach($ads as $key=>$a): ?><img src="<?php echo ($IMAGE_URL); echo ($a['img_path']); ?>" /><?php endforeach; endif; ?>
				<ul>
                <?php if(is_array($ads)): foreach($ads as $i=>$a): if($i == 0): ?><li class="hover">1</li>
                    <?php else: ?>
                    <li><?php echo ($i+1); ?></li><?php endif; endforeach; endif; ?>
				</ul>	
			</div>
			<p class="one">惠字头吃货小分队</p>
			<div id="map">
				<img class="bg_bus" src="<?php echo ($IMAGE_URL); ?>Layouts/images/bg_bus.png">
				<img class="bus" src="<?php echo ($IMAGE_URL); ?>Layouts/images/bus.png">
				<div id="map_imgs">
					<img class="light01" src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_09.png">
					<img class="light02" src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_09.png">
					<img class="light03" src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_09.png">
					<img class="light04" src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_09.png">
					<img class="light05" src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_09.png">
					<img class="light06" src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_09.png">
					<img class="light07" src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_09.png">
					<img class="light08" src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_09.png">
					<img class="light09" src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_09.png">
				</div>	
				<p class="map_102">102路</p>
				<p class="map_title">线路介绍</p>
				<p class="map_comment">春记烧鹅独家签约，会员卡免费办理，即刻享受9折优惠，机会难得!</p>
                <?php if(is_array($partners)): foreach($partners as $key=>$p): ?><a class="one" href=""><?php echo ($p['name']); ?></a><?php endforeach; endif; ?>
				<a class="seven" href="">欢乐KTV</a>
				<a class="two" href="">一碗水茶楼</a>
				<a class="six" href="">乐满地游乐园</a>
				<a class="five" href="">十二星座量贩</a>
				<a class="three" href="">Lion Coffee Shop</a>
				<a class="four" href="">丹麦风情餐馆</a>
				<a class="nine" href="">Sophie Shop</a>
				<a class="eight" href="">梧桐雨Cafe</a>
			</div>

			<div id="tj_content">
				<p class="two">惠字头小编推荐</p>
				<ul>
                <?php if(is_array($recommends)): foreach($recommends as $key=>$r): ?><li>
						<img src="<?php echo ($IMAGE_URL); echo ($r['picture_path']); ?>">
						<div>
							<img src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_10.png">
							<span><?php echo ($r['tag']); ?></span>
						</div>
						<a><?php echo ($r['name']); ?></a>
						<img class="ico" src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_08.png">
						<p class="three">推荐理由:</p>
						<p class="four"><?php echo ($r['description']); ?></p>
					</li><?php endforeach; endif; ?>
				</ul>
			</div>
			<p class="comment">惠字头号外评论</p>
			<div id="comment_content">
				<ul>
                <?php if(is_array($evaluations)): foreach($evaluations as $key=>$e): ?><li>
						<p class="bold"><?php echo ($e['nickname']); ?>@</p>
						<a href="" class="red"><?php echo ($e['name']); ?></a>
						<p class="env">环境:<?php echo ($e['environment_rate']); ?></p>
						<p class="taste">口味:<?php echo ($e['taste_rate']); ?></p>
						<p class="service">服务:<?php echo ($e['server_rate']); ?></p>
						<p class="time"><?php echo ($e['createtime']); ?></p>
						<p class="p_bottom"><?php echo ($e['evaluation']); ?></p>
					</li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div>
		<!-- 中间内容区域结束 -->
		<!-- 右边内容区域 -->
		<div id="main_right">
			<div id="app">
				<p>扫一下,关注惠桂林微信</p>
				<img src="<?php echo ($IMAGE_URL); ?>Layouts/images/barcode.png" alt="二维码">
				<a>点击下载手机APP</a>
			</div>
			<div class="hot_box">
				<p class="rqw">人气王</p>
				<ul>
                    <?php if(is_array($hot_partners)): foreach($hot_partners as $key=>$h): ?><li>
						<a href="" class="title"><?php echo ($h['name']); ?></a>
						<img class="ico" src="<?php echo ($IMAGE_URL); ?>Layouts/images/ico_08.png" alt="" />
						<p class="yhj">优惠劵</p>
						<p class="hyk">会员卡</p>
						<p class="one">[8]</p>
						<p class="two">[2]</p>
						<p class="vip">VIP</p>
					</li><?php endforeach; endif; ?>

				</ul>
			</div>
			<div class="hot_box">
				<p class="rqw">热门优惠劵</p>
				<ul>
                <?php if(is_array($coupon)): foreach($coupon as $key=>$co): ?><li>
						<a href="" class="title"><?php echo ($co['name']); ?></a>
						<p class="content"><?php echo ($co['description']); ?></p>
					</li><?php endforeach; endif; ?>
				</ul>
			</div>
			<div class="hot_box">
				<p class="rqw">热门会员卡</p>
				<ul>
                <?php if(is_array($card)): foreach($card as $key=>$ca): ?><li>
						<a href="" class="title title2"><?php echo ($ca['name']); ?></a>
						<p class="six"><?php echo ($ca['description']); ?></p>
						<div>
							<img class="ico2"src="<?php echo ($IMAGE_URL); ?>Layouts/images/vip.png" alt="" />
						</div>
					</li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div>
		<!-- 右边内容区域结束 -->		
	</div>
<!-- 内容区域结束 -->
<!-- 最底部区域 -->
	<div id="bottom_info">
		<div id="bottom_box">
			<div class="p_box">
				<p>版权归惠桂林所有，未经书面授权禁止复制或建立镜像。 Email：<a href="mailto:service@huigl.com">service@huigl.com</a></p>
				<p>惠桂林网客服电话：（0773）2853120 2852488 传真：（0773）2853265 </p>
				<p>地址：桂林市中山中路39号南方大厦9-5号</p>
				<p>经营许可证：桂B2-20040001</p>
			</div>
			<img src="<?php echo ($IMAGE_URL); ?>Layouts/images/police.png" alt="" />
			<ul>
				<li class="one"><a href="">关于我们</a></li>
				<li><a href="">网站地图</a></li>
				<li><a href="">网站客服</a></li>
				<li><a href="">商务合作</a></li>
				<li><a href="">法律声明</a></li>
				<li class="six"><a href="">保护隐私权</a></li>
			</ul>
			
		</div>
		
	</div>


<!-- 最底部区域结束 -->
</body>
</html>