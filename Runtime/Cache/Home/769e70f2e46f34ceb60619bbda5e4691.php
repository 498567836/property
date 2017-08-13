<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<meta name="viewport" content="width=device-width,intical-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" href="/wwwroot/Public/static/css/style.css" tppabs="http://www.17sucai.com/preview/67626/2016-01-12/wuye/css/style.css">
	<link rel="stylesheet" type="text/css" href="/wwwroot/Public/static/css/swiper.min.css" tppabs="http://www.17sucai.com/preview/67626/2016-01-12/wuye/css/swiper.min.css" />
	<!--<link href="/wwwroot/Public/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

	<script src="/wwwroot/Public/static/js/jquery.js" tppabs="http://www.17sucai.com/preview/67626/2016-01-12/wuye/js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="/wwwroot/Public/static/js/swiper.min.js" tppabs="http://www.17sucai.com/preview/67626/2016-01-12/wuye/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<header id="header">
	<a href="javascript:history.back(-1)"><img class="headleft" src="/wwwroot/Public/static/images/images/backjt.png" tppabs="http://www.17sucai.com/preview/67626/2016-01-12/wuye/images/backjt.png"></a>
	<span class="center">生活服务</span>
	<a href="###" class="rt_searchIcon"><img class="headright" src="/wwwroot/Public/static/images/images/search.png" tppabs="http://www.17sucai.com/preview/67626/2016-01-12/wuye/images/search.png"></a>
</header>
<div id="adver">
	<!-- <img src="/wwwroot/Public/static/images/images/adver.png" alt=""> -->
	<div id="module_1" class="swiper-container">
		<div class="swiper-wrapper">
			<div class="two swiper-slide"><img src="/wwwroot/Public/static/images/images/adver.png" tppabs="http://www.17sucai.com/preview/67626/2016-01-12/wuye/images/adver.png" style="width: 100%; height: 100%;" /></div>
			<div class="two swiper-slide"><img src="/wwwroot/Public/static/images/images/adver.png" tppabs="http://www.17sucai.com/preview/67626/2016-01-12/wuye/images/adver.png" style="width: 100%; height: 100%;" /></div>
			<div class="two swiper-slide"><img src="/wwwroot/Public/static/images/images/adver.png" tppabs="http://www.17sucai.com/preview/67626/2016-01-12/wuye/images/adver.png" style="width: 100%; height: 100%;" /></div>
			<div class="two swiper-slide"><img src="/wwwroot/Public/static/images/images/adver.png" tppabs="http://www.17sucai.com/preview/67626/2016-01-12/wuye/images/adver.png" style="width: 100%; height: 100%;" /></div>
			<div class="two swiper-slide"><img src="/wwwroot/Public/static/images/images/adver.png" tppabs="http://www.17sucai.com/preview/67626/2016-01-12/wuye/images/adver.png" style="width: 100%; height: 100%;" /></div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination" style="text-align: right;"></div>
		<script>
				var swiper = new Swiper('#module_1.swiper-container', {
					pagination: '.swiper-pagination',
					paginationClickable: true,
					loop: true,
					loopAdditionalSlides: 0,
					autoplay: 1000, //可选选项，自动滑动
					autoplayDisableOnInteraction: false
				});
			</script>
	</div>
</div>
<div class="home">
	<div class="row">
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="<?php echo U('/Notice/index');?>">
					<hgroup>
						<h2 class="title">社区新闻</h2>
						<h3 class="small_title">小区通知</h3>
					</hgroup>
		    	</a></li>
		    </ul>
		</div>
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
						<h3 class="small_title">社区商家</h3>
		    	</a></li>
		    </ul>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
					<h3 class="small_title">小区团购</h3>
		    	</a></li>
		    </ul>
		</div>
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
					<h3 class="small_title">周边配套</h3>
		    	</a></li>
		    </ul>
		</div>
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
					<h3 class="small_title">票务中心</h3>
		    	</a></li>
		    </ul>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
					<hgroup>
						<h2 class="title">便民服务</h2>
						<h3 class="small_title">方便民众为宗旨</h3>
					</hgroup>
		    	</a></li>
		    </ul>
		</div>
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
					<h3 class="small_title">房屋租售</h3>
		    	</a></li>
		    </ul>
		</div>
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
					<h3 class="small_title">家政服务</h3>
		    	</a></li>
		    </ul>
		</div>
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="<?php echo U('/Repair/add');?>">
					<h3 class="small_title">在线报修</h3>
		    	</a></li>
		    </ul>
		</div>
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
					<h3 class="small_title">汽车服务</h3>
		    	</a></li>
		    </ul>
		</div>
	</div>


	<div class="row">
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
					<h3 class="small_title">开锁服务</h3>
		    	</a></li>
		    </ul>
		</div>
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
					<h3 class="small_title">四点半教室</h3>
		    	</a></li>
		    </ul>
		</div>
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
					<h3 class="small_title">除甲醛服务</h3>
		    	</a></li>
		    </ul>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
					<h3 class="small_title">社区食堂</h3>
		    	</a></li>
		    </ul>
		</div>
		<div class="col">
			<ul>
		    	<li class="r01 b1"><a href="###">
					<hgroup>
						<h2 class="title">其他服务</h2>
						<h3 class="small_title">更多服务供您体验</h3>
					</hgroup>
		    	</a></li>
		    </ul>
		</div>
	</div>
	<!--导航部分-->
	<nav class="navbar navbar-default navbar-fixed-bottom">
		<div class="container-fluid text-center">
			<div class="col-xs-3">
				<p class="navbar-text"><a href="index.html" class="navbar-link">首页</a></p>
			</div>
			<div class="col-xs-3">
				<p class="navbar-text"><a href="fuwu.html" class="navbar-link">服务</a></p>
			</div>
			<div class="col-xs-3">
				<p class="navbar-text"><a href="faxian.html" class="navbar-link">发现</a></p>
			</div>
			<div class="col-xs-3">
				<p class="navbar-text"><a href="my.html" class="navbar-link">我的</a></p>
			</div>
		</div>
	</nav>
	<!--导航结束-->
</div>
</body>
</html>