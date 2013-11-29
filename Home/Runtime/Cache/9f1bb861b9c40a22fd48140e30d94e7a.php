<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="layouts/css/global.css" />
<link rel="stylesheet" type="text/css" href="Layouts/css/coupon.css">
<script type="text/javascript" src="Layouts/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Layouts/js/index.js"></script>
<title>优惠劵</title>
<!--[if IE 6]>
<!--背景图片透明方法-->
<script src="Layouts/js/iepng.js" type="text/javascript"></script>
<!--插入图片透明方法-->
<script type="text/javascript">
   EvPNG.fix('div, ul, img, li, input');  //EvPNG.fix('包含透明PNG图片的标签'); 多个标签之间用英文逗号隔开。
</script>
<![endif]-->
</head>
<body>
<!-- 顶部订阅分享区域 -->
	<div id="top_rss">
		<div id="top_rss_box">
			<img src="Layouts/images/cellphone.png">
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
		<a href="#"><img src="Layouts/images/logo.png" alt="惠桂林" id="logo" /></a>
		<a href="#"><img src="Layouts/images/slogan.png" alt="吃喝玩乐，惠享生活" id="slogan" /></a>
		<ul id="login">
			<li class="one"><a href="" class="one">登陆</a></li>
			<li><a href="" class="two">快速注册</a></li>
		</ul>
	</div>
<!-- Logo区域结束 -->
<!--  导航区域 -->
	<div id="top_nav_box">
		<div id="left_collection">
			<img class="left_img" src="Layouts/images/ico_02.png" alt="" />
			<span>全部分类</span>
		</div>
		<ul id="nav">
			<li class="one" style="background:#ED5565"><a href="index.php" class="one">首页</a></li>
			<li style="background:#DB4453"><a href="">优惠券</a></li>
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
	<!-- 图片轮换板区域 -->
	<div id="advertising">
        <?php if(is_array($ads)): foreach($ads as $key=>$a): ?><img src="<?php echo ($a['img_path']); ?>" alt="" /><?php endforeach; endif; ?>
		<ul>
            <?php if(is_array($ads)): foreach($ads as $i=>$a): ?><li><?php echo ($i+1); ?></li><?php endforeach; endif; ?>
		</ul>
		<a href="">x</a>
	</div>
	<!-- 图片轮换板区域结束 -->
	<!-- 热门标签+地点区域 -->
	<div id="classcification">
		<ul id="lable">
			<li class="one"><p>热门商家</p></li>
			<li><a href="" class="one">江上人家</a></li>
			<li><a href="" class="two">巴山蜀水</a></li>
			<li><a href="" class="three">印象漓江</a></li>
			<li><a href="" class="four">李记米粉</a></li>
			<li><a href="" class="five">果粉甜品</a></li>
			<li><a href="" class="six">门前小馆</a></li>
		</ul>
		<ul id="location">
			<li class="one"><p>地点</p></li>
			<li><a href="" class="one">全部</a></li>
			<li><a href="">秀峰区</a></li>
			<li><a href="">景山区</a></li>
			<li><a href="">叠彩区</a></li>
			<li><a href="">雁山区</a></li>
			<li><a href="">七星区</a></li>
		</ul>
		<ul id="type" style="border:none">
			<li class="one"><p>类型</p></li>
			<li><a href="" class="one">全部</a></li>
			<li><a href="">美食</a></li>
			<li><a href="">KTV</a></li>
			<li><a href="">电影</a></li>
			<li><a href="">酒吧</a></li>
			<li><a href="">桌游</a></li>
			<li><a href="">美发美体</a></li>
			<li><a href="">旅游</a></li>
			<li><a href="">酒店</a></li>
		</ul>
	</div>
	<!-- 热门标签+地点区域结束 -->
	<!-- 排序+价格范围区域 -->
	<div id="sort">
		<p class="one">排序</p>
		<p class="two">价格范围</p>
		<ul>
			<li><a href="" class="one">默认</a></li>
			<li><a href="">优惠价格</a></li>
			<li><a href="">折扣</a></li>
		</ul>
		<select name="price" id="price_id">
			<option value="">全部</option>
			<option value="">100-200</option>
			<option value="">200-300</option>
			<option value="">300-400</option>
			<option value="">400-500</option>
		</select>
		<input type="checkbox" name="booking" value="" id="booking_id">
		<p class="three">免预约</p>
	</div>
	<!-- 排序+价格范围区域结束 -->
	<!-- 主要内容区域 -->
	<div id="main">
		<!-- 左边内容区域 -->
		<div id="left">
			<ul>
                <?php if(is_array($coupons)): foreach($coupons as $key=>$c): ?><li>
					<img class="one" src="Layouts/images/ico_11.png" alt="" />
					<a class="title" href=""><?php echo ($c['name']); ?></a>
					<a href="" class="content"><?php echo ($c['description']); ?></a>
					<a href="" class="btn">去看看</a>
					<img class="two" src=<?php echo ($c['header_path']); ?> alt="" />
					<div>
						<img src="Layouts/images/ico_10.png" alt="" />
						<p><?php echo ($c['tag']); ?></p>
					</div>
                    <?php if($c['label_type'] % 10 == 1): ?><img class="three" src="Layouts/images/mrq.png" alt="" /><?php endif; ?>
                    <?php if(number_format(($c['label_type'] % 100) / 10, 0) == 1): ?><img class="four" src="Layouts/images/myy.png" alt="" /><?php endif; ?> 
				</li><?php endforeach; endif; ?>
			</ul>
		</div>
		<!-- 左边内容区域结束 -->
		<!-- 右边内容区域 -->
		<div id="right">
			<p class="one">热门商家</p>
			<div id="hot_business">
				<p>李记米粉</p>
				<img class="one" src="Layouts/images/pic/2.png" alt="" />
				<a href="">桂林米粉产生于秦代，上面的“离合器”完完全全就是秦时的农具“耒”的形象。</a>
				<img class="two" src="Layouts/images/ico_08.png" alt="" />
				<img class="three" src="Layouts/images/ico_08.png" alt="" />
				<span class="one">优惠劵</span>
				<span class="two">会员卡</span>
				<span class="three">[ 8 ]</span>
				<span class="four">[ 2 ]</span>
			</div>
			<div id="hot_business_02">
				<p>李记米粉</p>
				<img class="one" src="Layouts/images/pic/2.png" alt="" />
				<a href="">桂林米粉产生于秦代，上面的“离合器”完完全全就是秦时的农具“耒”的形象。</a>
				<img class="two" src="Layouts/images/ico_08.png" alt="" />
				<img class="three" src="Layouts/images/ico_08.png" alt="" />
				<span class="one">优惠劵</span>
				<span class="two">会员卡</span>
				<span class="three">[ 8 ]</span>
				<span class="four">[ 2 ]</span>
			</div>
			<div id="hot_business_03">
				<p>李记米粉</p>
				<img class="one" src="Layouts/images/pic/2.png" alt="" />
				<a href="">桂林米粉产生于秦代，上面的“离合器”完完全全就是秦时的农具“耒”的形象。</a>
				<img class="two" src="Layouts/images/ico_08.png" alt="" />
				<img class="three" src="Layouts/images/ico_08.png" alt="" />
				<span class="one">优惠劵</span>
				<span class="two">会员卡</span>
				<span class="three">[ 8 ]</span>
				<span class="four">[ 2 ]</span>
			</div>
			<div id="hot_business_04">
				<p>李记米粉</p>
				<img class="one" src="Layouts/images/pic/2.png" alt="" />
				<a href="">桂林米粉产生于秦代，上面的“离合器”完完全全就是秦时的农具“耒”的形象。</a>
				<img class="two" src="Layouts/images/ico_08.png" alt="" />
				<img class="three" src="Layouts/images/ico_08.png" alt="" />
				<span class="one">优惠劵</span>
				<span class="two">会员卡</span>
				<span class="three">[ 8 ]</span>
				<span class="four">[ 2 ]</span>
			</div>
		</div>
		<!-- 右边内容区域结束 -->
		<!-- 中间内容区域 -->
		<div id="middle">
			<ul>
                <?php if(is_array($coupons_two)): foreach($coupons_two as $key=>$c): ?><li>
					<img class="one" src="Layouts/images/ico_11.png" alt="" />
					<a class="title" href=""><?php echo ($c['name']); ?></a>
					<a href="" class="content"><?php echo ($c['description']); ?></a>
					<a href="" class="btn">去看看</a>
					<img class="two" src="<?php echo ($c['picture_path']); ?>" alt="" />
					<div>
						<img src="Layouts/images/ico_10.png" alt="" />
						<p><?php echo ($c['tag']); ?></p>
					</div>
				</li><?php endforeach; endif; ?>
			</ul>
		</div>
		<!-- 中间内容区域结束 -->
	</div>

	<!-- 主要内容区域结束 -->
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
			<img src="Layouts/images/police.png" alt="" />
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