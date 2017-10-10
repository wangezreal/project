<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo base_url("/css/register.css")?>" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url("/js/jquery-3.2.1.min.js")?>"></script>
    <script src="<?php echo base_url("/js/register.js")?>"></script>
    <script src="<?php echo base_url("/js/jquery.validate.min.js")?>"></script>
    <script src="<?php echo base_url("/js/messages_cn.js")?>"></script>
    <title>注册账户</title>
</head>
<body>
<div class="context">
    <div class="breadcrum">
        <a href="<?php echo base_url("/admin")?>">首页</a><span>注册用户</span>
    </div>
</div>
<form class="registe-form" id="registe-form" method="post" action="<?php echo base_url("Register/registe")?>">
    <fieldset>
        <legend style="text-align: center">请输入你的个人信息</legend>
        <p>
            <label for="user_name">账号 (必需, 最小八个字母)</label>
            <input id="user_name" name="user_name" minlength="8" type="text" required>
        </p>
        <p>
            <label for="name">昵称 (必需, 最小八个字母)</label>
            <input id="name" name="name" minlength="2" type="text" required>
        </p>
        <p>
            <label for="password">密码 (必需, 最小八个字母)</label>
            <input id="password" name="password" minlength="8" type="password" required>
        </p>
        <p>
            <label for="re-password">重复密码</label>
            <input id="re-password" name="re-password" minlength="8" type="password" required>
        </p>
        <p>
            <label for="sex">性别</label>
            <select id="sex" name="sex">
                <option value="0">男</option>
                <option value="1">女</option>
            </select>
        </p>
        <p>
            <label for="email">E-Mail (必需)</label>
            <input id="email" type="email" name="email" maxlength="20" required>
        </p>
        <p>
            <label for="phone-number">手机号码 (必需)</label>
            <input id="phone-number" type="text" name="phone-number" minlength="11" maxlength="15" required>
        </p>
        <p>
            <label for="id-card">身份证号 (必需)</label>
            <input id="id-card" type="text" name="id-card" minlength="15" maxlength="18" required>
        </p>
        <p>
            <input class="submit" type="submit" value="Submit">
        </p>
    </fieldset>
</form>
</body>
</html>