<?php
/**
 * Created by PhpStorm.
 * User: 60110
 * Date: 2018/3/10
 * Time: 0:33
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<?php 	$data['title'] = $title;
$this->load->view('adminHead',$data)?>
<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">添加日志<div style="float: right"id="addblock">添加模块</div></div>
	<div class="panel-body">
		<form role="form">
			<div class="form-group">
				<label for="date">日期</label>
				<div class="input-append date" id="date"  data-date-format="dd-mm-yyyy">
					<input  type="text" class="form-control"  readonly placeholder="请选择日期">
					<span class="add-on"><i class="icon-th"></i></span>
				</div>
			</div>
			<button type="submit" class="btn btn-default">提交</button>
		</form>
	</div>
</div>
<script type="text/javascript">
	$('#date').datetimepicker({
		language: 'zh-CN',//显示中文
		format: 'yyyy-mm-dd',//显示格式
		minView: "month",//设置只显示到月份
		initialDate: new Date(),//初始化当前日期
		autoclose: true,//选中自动关闭
		todayBtn: true//显示今日按钮
	})
</script>

