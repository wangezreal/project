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
<style>
	.swiper-container{
		width: 40%;
		margin: auto;
	}
</style>
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
                   	 <input type="file" name="files[]" multiple id="fileUpload"></span>
					</div>
				</div>
				<!-- The table listing the files available for upload/download -->
				<table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
			</div>

			<div class="from-group">
				<div class="swiper-container " style="margin-bottom: 10px">
					<div class="swiper-wrapper" id="image_holder">
					</div>
					<!-- 如果需要分页器 -->
					<div class="swiper-pagination"></div>

					<!-- 如果需要导航按钮 -->
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>

					<!-- 如果需要滚动条 -->
					<!-- <div class="swiper-scrollbar"></div>-->
				</div>
			</div>
			<div class="from-group col-md-6 ">
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
	$("#fileUpload").on('change', function () {

		if (typeof (FileReader) != "undefined") {

			var image_holder = $("#image_holder");
			image_holder.empty();
			var i;
			for (i=0;i<event.target.files.length;i++){
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
						"class": "thumb-image swiper-slide"
					}).appendTo(image_holder);
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[i]);
				var mySwiper = new Swiper ('.swiper-container', {
					direction: 'horizontal',
					loop: true,
					watchSlidesProgress : true,
					speed:1500,
					autoplay:1,
					paginationClickable:true,

					// 如果需要分页器
					pagination: '.swiper-pagination',

					// 如果需要前进后退按钮
					nextButton: '.swiper-button-next',
					prevButton: '.swiper-button-prev',



					// 如果需要滚动条
					/*  scrollbar: '.swiper-scrollbar',*/
				})
			}
		} else {
			alert("你的浏览器不支持FileReader.");
		}
	});
</script>

