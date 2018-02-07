<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<?php 	$data['title'] = $title;
$this->load->view('adminHead',$data)?>
<div>
	<form class="form-horizontal" role="form">
		<div class="form-group ball">
			<label for="username" class="col-sm-2 control-label">账号</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="username"name="username" placeholder="请输入账号">
			</div>
		</div>
		<div class="form-group ball">
			<label for="password" class="col-sm-2 control-label">密码</label>
			<div class="col-sm-6">
				<input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
			</div>
		</div>
		<div class="form-group ball">
			<label for="password1" class="col-sm-2 control-label">重复密码</label>
			<div class="col-sm-6">
				<input type="password" class="form-control" id="password1" name="password1" placeholder="请重新输入密码">
			</div>
		</div>
		<div class="form-group ball">
			<label for="name" class="col-sm-2 control-label">昵称</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="name" name="name" placeholder="请输入昵称">
			</div>
		</div>
		<div class="form-group ball">
			<label for="sex" class="col-sm-2 control-label">性别</label>
			<div class="col-sm-6">
				<label class="radio-inline">
					<input type="radio" name="sex" id="sex" value="1"> 男
				</label>
				<label class="radio-inline">
					<input type="radio" name="sex" id="inlineRadio2" value="0"> 女
				</label>
			</div>
		</div>
		<div class="form-group ball">
			<label for="idcard" class="col-sm-2 control-label">身份证号</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="idcard" name="idcard" placeholder="请输入身份证号">
			</div>
		</div>
		<div class="form-group ball">
			<label for="mail" class="col-sm-2 control-label">电子邮箱</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="mail" name="mail" placeholder="请输入电子邮箱">
			</div>
		</div>
		<div class="form-group ball">
			<label for="phone" class="col-sm-2 control-label">电话号码</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="phone" name="phone" placeholder="请输入电话号码">
			</div>
		</div>
		<div class="form-group jumpInRight">
			<div class="col-sm-offset-2 col-sm-3">
				<button type="button" class="btn btn-default driveInBottom" id="res-btn">注册</button>
			</div>
		</div>
	</form>
</div>
<script  type="text/javascript" src="/js/register.js"></script>
</html>
