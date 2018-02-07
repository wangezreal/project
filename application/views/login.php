<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<?php 	$data['title'] = $title;
$this->load->view('adminHead',$data)?>
<div>
	<form class="form-horizontal ball" role="form">
		<div class="form-group">
			<label for="username" class="col-sm-2 control-label">账号</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="username"name="username" placeholder="请输入账号">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-2 control-label">密码</label>
			<div class="col-sm-6">
				<input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-6">
				<div class="checkbox">
					<label>
						<input type="checkbox" id="remember">请记住我
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-6">
				<button type="button" class="btn btn-default" id="login-btn">登录</button>
			</div>
		</div>
	</form>
</div>
<script  type="text/javascript" src="/js/login.js"></script>
</html>
