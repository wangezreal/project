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
<form class="cmxform" id="commentForm" method="post" action="">
    <fieldset>
        <legend>输入您的名字，邮箱，URL，备注。</legend>
        <p>
            <label for="cname">Name (必需, 最小两个字母)</label>
            <input id="cname" name="name" minlength="2" type="text" required>
        </p>
        <p>
            <label for="cemail">E-Mail (必需)</label>
            <input id="cemail" type="email" name="email" required>
        </p>
        <p>
            <label for="curl">URL (可选)</label>
            <input id="curl" type="url" name="url">
        </p>
        <p>
            <label for="ccomment">备注 (必需)</label>
            <textarea id="ccomment" name="comment" required></textarea>
        </p>
        <p>
            <input class="submit" type="submit" value="Submit">
        </p>
    </fieldset>
</form>
</body>
</html>