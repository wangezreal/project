<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo base_url("/css/login.css")?>" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url("/js/jquery-3.2.1.min.js")?>"></script>
    <script src="<?php echo base_url("/js/login.js")?>"></script>
    <script src="<?php echo base_url("/js/jquery.validate.min.js")?>"></script>
    <script src="<?php echo base_url("/js/messages_cn.js")?>"></script>
    <title>注册账户</title>
</head>
<body>
<div class="context">
    <div class="breadcrum">
        <a href="<?php echo base_url("/admin")?>">首页</a><span>登录</span>
    </div>
</div>
<form class="registe-form" id="login-form" method="post" action="<?php echo base_url("loginIn/check")?>">
    <fieldset>
        <div class="loginFiled">
            <label>帐号</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="loginFiled">
            <label>密码</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="loginFiled">
            <input type="submit" value="登陆" id="loginBtn">
        </div>
    </fieldset>
</form>
</body>
</html>