<?php ?>
<head>
	<title><?php echo $title?></title>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
			<a class="navbar-brand" href="#">秘密花园</a>
		</div>
		<div class="collapse navbar-collapse" id="example-navbar-collapse">
			<ul class="nav navbar-nav">
				<li c><a href="#">第一功能</a></li>
				<li><a href="#">第二功能</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						日志 <!--<b class="caret"></b>-->
					</a>
					<!--<ul class="dropdown-menu">
						<li><a href="#">jmeter</a></li>
						<li><a href="#">EJB</a></li>
						<li><a href="#">Jasper Report</a></li>
						<li class="divider"></li>
						<li><a href="#">分离的链接</a></li>
						<li class="divider"></li>
						<li><a href="#">另一个分离的链接</a></li>
					</ul>-->
				</li>
			</ul>
			<?php if (isLoginIn()):?>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']?></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
			</ul>
			<?php else: ?>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
			</ul>
			<?php endif;?>
		</div>
	</div>
</nav>


