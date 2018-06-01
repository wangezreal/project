<?php ?>
<head>
	<title><?php echo $title?></title>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="/css/vivify.min.css" rel="stylesheet">
	<link href="/css/noticejs.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("/css/swiper-3.4.2.min.css")?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("/css/bootstrap-datetimepicker.min.css")?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("/css/bootstrap-select.min.css")?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/css/jquery.fileupload.css">
	<link rel="stylesheet" href="/css/jquery.fileupload-ui.css">
	<!-- CSS adjustments for browsers with JavaScript disabled -->
	<link rel="stylesheet" href="/css/jquery.fileupload-noscript.css">
	<link rel="stylesheet" href="/css/jquery.fileupload-ui-noscript.css">
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url("/js/swiper-3.4.2.jquery.min.js")?>"></script>
	<script src="<?php echo base_url("/js/bootstrap-paginator.js")?>"></script>
	<script src="<?php echo base_url("/js/bootstrap-datetimepicker.min.js")?>"></script>
	<script src="<?php echo base_url("/js/bootstrap-datetimepicker.zh-CN.js")?>"></script>
	<script src="<?php echo base_url("/js/bootstrap-select.min.js")?>"></script>
	<script src="/js/vendor/jquery.ui.widget.js"></script>
	<script src="/js/jquery.iframe-transport.js"></script>
	<script src="/js/jquery.fileupload.js"></script>
	<script src="/js/notice.js"></script>
	<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.4&key=9e8f83e8e41c687d75c824e2d0270e9b"></script>
	<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.5&key=9e8f83e8e41c687d75c824e2d0270e9b&plugin=AMap.DistrictSearch"></script>
</head>
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#example-navbar-collapse">
				<span class="sr-only">切换导航</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand ball" href="/admin">秘密花园</a>
		</div>
		<div class="collapse navbar-collapse" id="example-navbar-collapse">
			<?php if (isLoginIn()):?>
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle ball" data-toggle="dropdown">
							日志 <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/log">我的日志</a></li>
							<li class="divider"></li>
							<li><a href="/log/index/1">旅行日志</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle ball" data-toggle="dropdown">
							旅行计划 <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/travel">我的旅行安排</a></li>
							<li class="divider"></li>
							<li><a href="#">最近出行攻略</a></li>
							<li class="divider"></li>
							<li><a href="/travel/weather">最近出行天气</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle ball" data-toggle="dropdown">
							兴趣提醒订阅 <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">美食推荐</a></li>
							<li class="divider"></li>
							<li><a href="/interest/movie">电影推荐</a></li>
							<li class="divider"></li>
							<li><a href="#">图书推荐</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle ball" data-toggle="dropdown">
							重要日程提醒 <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">重要日程提醒</a></li>
							<li class="divider"></li>
							<li><a href="#">星语心愿</a></li>
							<li class="divider"></li>
							<li><a href="#">礼物推荐</a></li>
						</ul>
					</li>
				</ul>
			<ul class="nav navbar-nav navbar-right ball">
				<li><a href="/user/index/<?php echo $_SESSION['userID']?>"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name']?></a></li>
				<li><a href="/user/loginout"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
			</ul>
			<?php else: ?>
			<ul class="nav navbar-nav navbar-right ball">
				<li><a href="/user/register"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
				<li><a href="/user/login"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
			</ul>
			<?php endif;?>
		</div>
	</div>
</nav>


