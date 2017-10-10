<head>
    <meta charset="utf-8">
    <title>心语心愿-记录你的故事</title>
    <link href=<?php echo base_url('/css/admin.css')?> rel="stylesheet" type="text/css">
</head>
<header>
    <div id="user-buttun">
        <div id="meun-buttun"></div>
        <?php if (!isLoginIn()):?>
            <div id="login-box"><a href="<?php echo base_url("loginIn")?>">登录</a><a href="<?php echo base_url("register")?>">注册</a></div>
        <?php else:?>
            <div id="login-box"><a href="#">登录</a><a href="#">注册</a></div>
        <?php endif;?>
        <div class="clear"></div>
    </div>
    <div id="user-header">welocme to 你的心灵花园</div>
</header>
