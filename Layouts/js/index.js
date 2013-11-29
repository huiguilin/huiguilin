$(function(){

	//图片轮换板特效
	var timer = setInterval(autoRun,5000);
	var sta = 0;//记录当前展示到哪张图片了
	function autoRun(){
	 	sta++;//sta自增
	 	sta = (sta == 5)?0:sta;//判断是不是到最后一张了，如果是，就切换到第一张
	 	change(sta);//切换效果
	 }

	 $('#main #main_middle #ad ul li').hover(function(){
	 	clearInterval(timer);//清理定时器
	 	sta = $(this).index();//获得鼠标移入到第几个li上了
	 	change(sta);//切换效果
	 },function(){
	 	timer = setInterval(autoRun,5000);//恢复定时器
	 })

	 function change(num){//用来控制切换图片和下标样式的函数
	 	$('#main #main_middle #ad img').hide();//先把所有的图片隐藏
	 	$('#main #main_middle #ad img').eq(num).fadeIn(200);//让对应的图片显示出来
	 	$('#main #main_middle #ad ul li').removeClass('hover');//移除掉所有li上面的hover样式
	 	$('#main #main_middle #ad ul li').eq(num).addClass('hover');//给对应的li加上hover样式
	 }
	//图片轮换板特效结束

	//惠字头小分队特效
	var autobus_timer=setInterval(autobus,1000);
	var i = 0;
	var index=0;
	function autobus(){
		i++;
		i = (i == 9)?0:i;
		autochange(i);
	}
	function autochange(i){
		$('#main #main_middle #map #map_imgs img').removeClass('display');
		$('#main #main_middle #map #map_imgs img').eq(i).addClass('display');
		$('#main #main_middle #map a').removeClass('hover');
		$('#main #main_middle #map a').eq(i).addClass('hover');
	}
	$('#main #main_middle #map a').hover(function() {
		clearInterval(autobus_timer);//清理定时器
		$('#main #main_middle #map a').removeClass('hover');
		$('#main #main_middle #map #map_imgs img').removeClass('display');
	}, function() {
		autobus_timer=setInterval(autobus,1000);
	});
	//惠字头小分队特效结束

	//小编推荐内容特效
	$('#main #main_middle #tj_content ul li').hover(function() {
		$(this).find('p').css('color', '#4FC1E9');
		$(this).find('p').css('text-decoration', 'underline');
		$(this).find('a').css('color', '#4FC1E9');
		$(this).find('div').addClass('display')
		$(this).addClass('hide')
	}, function() {
		$(this).find('a').css('color', '#ED5565');
		$(this).find('p').css('color', '#434A54');
		$(this).find('div').removeClass('display')
		$(this).removeClass('hide')
	});
	//小编推荐内容特效结束

	//搜索框特效
	$('#top_nav_box #search_box #search_con').focus(function(){
		$(this).val('');
	})
	$('#top_nav_box #search_box #search_con').blur(function(){
		$(this).val('桂林环球美食节');
	})
	//搜索框特效结束

	// 优惠劵页面左边主要内容特效
	$('#main #left ul li').hover(function() {
		$(this).find('div').addClass('display')
		$(this).find('a.content').css('color', '#4466A3');
		$(this).find('a.content').css('text-decoration', 'underline');
		$(this).find('a.title').css('color', '#4466A3');
	}, function() {
		$(this).find('div').removeClass('display')
		$(this).find('a.content').css('color', 'black');
		$(this).find('a.content').css('text-decoration', 'none');
		$(this).find('a.title').css('color', '#ED5565');
		
	});
	$('#main #left ul li a.btn').hover(function() {
		$(this).css('background', '#F6808B');
	}, function() {
		$(this).css('background', '#ED5565');
	});
	// 优惠劵页面左边主要内容特效结束
	// 优惠劵页面中间主要内容特效
	$('#main #middle ul li').hover(function() {
		$(this).find('a.content').css('color', '#4466A3');
		$(this).find('a.content').css('text-decoration', 'underline');
		$(this).find('a.title').css('color', '#4466A3');
		$(this).find('div').addClass('display')
	}, function() {
		$(this).find('a.content').css('color', 'black');
		$(this).find('a.content').css('text-decoration', 'none');
		$(this).find('a.title').css('color', '#ED5565');
		$(this).find('div').removeClass('display')
	});
	$('#main #middle ul li a.btn').hover(function() {
		$(this).css('background', '#F6808B');
	}, function() {
		$(this).css('background', '#ED5565');
	});
	// 优惠劵页面中间主要内容特效结束
	// 优惠劵页面图片轮换板特效
	$('#advertising a').click(function() {
		$('#advertising').hide();
		return false;
	});

	var timer_coupon = setInterval(autoRun_coupon,5000);
	var sta_coupon = 0;//记录当前展示到哪张图片了
	function autoRun_coupon(){
	 	sta_coupon++;//sta自增
	 	sta_coupon = (sta_coupon == 3)?0:sta_coupon;//判断是不是到最后一张了，如果是，就切换到第一张
	 	change_coupon(sta_coupon);//切换效果
	 }

	 $('#advertising ul li').hover(function(){
	 	clearInterval(timer_coupon);//清理定时器
	 	sta_coupon = $(this).index();//获得鼠标移入到第几个li上了
	 	change_coupon(sta_coupon);//切换效果
	 },function(){
	 	timer_coupon = setInterval(autoRun_coupon,5000);//恢复定时器
	 })

	 function change_coupon(num){//用来控制切换图片和下标样式的函数
	 	$('#advertising img').hide();//先把所有的图片隐藏
	 	$('#advertising img').eq(num).fadeIn(200);//让对应的图片显示出来
	 	$('#advertising ul li').removeClass('hover');//移除掉所有li上面的hover样式
	 	$('#advertising ul li').eq(num).addClass('hover');//给对应的li加上hover样式
	 }
	// 优惠劵页面图片轮换板特效结束
	// 会员卡左边内容区域hover特效
	$('#main #left_card ul li').hover(function() {
		$(this).addClass('hover');
		$(this).find('a.two').css('display', 'block');
	}, function() {
		$(this).removeClass('hover');
		$(this).find('a.two').css('display', 'none');
	});
	$('#main #left_card ul li a.two').hover(function() {
		$(this).css('background', '#F6808B');
	}, function() {
		$(this).css('background', '#ED5565');
	});
	// 会员卡左边内容区域hover特效结束

	// 会员卡中间内容区域hover特效
	$('#main #middle_card ul li').hover(function() {
		$(this).addClass('hover');
		$(this).find('a.two').css('display', 'block');
	}, function() {
		$(this).removeClass('hover');
		$(this).find('a.two').css('display', 'none');
	});

	$('#main #middle_card ul li a.two').hover(function() {
		$(this).css('background', '#F6808B');
	}, function() {
		$(this).css('background', '#ED5565');
	});
	// 会员卡中间内容区域hover特效结束
})