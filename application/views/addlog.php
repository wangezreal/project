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
	<div class="panel-heading">添加日志</div>
	<div class="panel-body ball">
		<form role="form">
			<div class="form-group">
				<label for="date">日期</label>
				<div class="input-append date" id="date"   data-date-format="Y-m-d">
					<input  type="text" class="form-control" value="<?php echo date('Y-m-d')?>" readonly placeholder="请选择日期">
					<span class="add-on"><i class="icon-th"></i></span>
				</div>
			</div>
			<label for="heart">心情</label>
			<div class="form-group">
				<select class="selectpicker" id="heart" name="heart" data-live-search="true">
					<option value="happy">开心</option>
					<option value="boring">无聊</option>
					<option value="nervous">烦躁</option>
					<option value="angry">生气</option>
				</select>
			</div>
			<div class="from-group">
				<div class="row fileupload-buttonbar">
					<div class="col-md-8">
						<!-- The fileinput-button span is used to style the file input field as button -->
						<span class="btn btn-success fileinput-button" style="padding: 3px">
                    <i class=" col-md-8 glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                   	 <input type="file" name="files[]" multiple></span>
					</div>
				</div>
				<!-- The table listing the files available for upload/download -->
				<table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
			</div>

			<div class="from-group">
			</div>
			<input type="button" class="btn btn-default" id="sub-btn" value="提交">
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
	$(function () {
		$('#fileupload').fileupload({
			dataType: 'json',
			done: function (e, data) {
				$.each(data.result.files, function (index, file) {
					$('<p/>').text(file.name).appendTo(document.body);
				});
			}
		});
	});
</script>

