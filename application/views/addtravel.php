<?php
/**
 * Created by PhpStorm.
 * User: 60110
 * Date: 2018/3/19
 * Time: 23:07
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
				<label for="date">计划日期：</label>
				<div class="input-append date"    data-date-format="Y-m-d">
					<input  type="text"id="pr_date" class="form-control" name="pr_date" value="<?php echo date('Y-m-d')?>" readonly placeholder="请选择日期">
					<span class="add-on"><i class="icon-th"></i></span>
				</div>
			</div>
			<div class="form-group">
				<div id="mapContainer" class="col-md-12" style="height: 300px;border-radius: 20px"></div>
			</div>
			<div class="form-group" id="tip">
				<label for="province">省：</label>
				<select class="form-control" name="province" id="province"onchange='search(this)' ></select>
				<label for="city">市：</label>
				<select class="form-control"  name="city" id="city" onchange='search(this)'></select>
				<label for="district">区：</label>
				<select class="form-control" name="district" id="district" onchange='search(this)'hidden></select>
				<label for="street">街道：</label>
				<select  class="form-control"name="street" id="street" onchange='search(this)'></select>
			</div>
			<input type="button" class="btn btn-default" id="sub-btn" value="提交">
		</form>
	</div>
</div>
<script  type="text/javascript" src="/js/addtravel.js"></script>

<script type="text/javascript">
	$('.date').datetimepicker({
		language: 'zh-CN',//显示中文
		format: 'yyyy-mm-dd',//显示格式
		minView: "month",//设置只显示到月份
		initialDate: new Date(),//初始化当前日期
		autoclose: true,//选中自动关闭
		todayBtn: true//显示今日按钮
	})
	var map, district, polygons = [], citycode;
	var citySelect = document.getElementById('city');
	var districtSelect = document.getElementById('district');
	var areaSelect = document.getElementById('street');

	map = new AMap.Map('mapContainer', {
		resizeEnable: true,
		center: [116.30946, 39.937629],
		zoom: 3
	});
	//行政区划查询
	var opts = {
		subdistrict: 1,   //返回下一级行政区
		showbiz:false  //最后一级返回街道信息
	};
	district = new AMap.DistrictSearch(opts);//注意：需要使用插件同步下发功能才能这样直接使用
	district.search('中国', function(status, result) {
		if(status=='complete'){
			getData(result.districtList[0]);
		}
	});
	function getData(data,level) {
		var bounds = data.boundaries;
		if (bounds) {
			for (var i = 0, l = bounds.length; i < l; i++) {
				var polygon = new AMap.Polygon({
					map: map,
					strokeWeight: 1,
					strokeColor: '#CC66CC',
					fillColor: '#CCF3FF',
					fillOpacity: 0.5,
					path: bounds[i]
				});
				polygons.push(polygon);
			}
			map.setFitView();//地图自适应
		}



		//清空下一级别的下拉列表
		if (level === 'province') {
			citySelect.innerHTML = '';
			districtSelect.innerHTML = '';
			areaSelect.innerHTML = '';
		} else if (level === 'city') {
			districtSelect.innerHTML = '';
			areaSelect.innerHTML = '';
		}

		var subList = data.districtList;
		if (subList) {
			var contentSub = new Option('--请选择--');
			var curlevel = subList[0].level;
			var curList =  document.querySelector('#' + curlevel);
			curList.add(contentSub);
			for (var i = 0, l = subList.length; i < l; i++) {
				var name = subList[i].name;
				var levelSub = subList[i].name;
				var cityCode = subList[i].citycode;
				contentSub = new Option(name);
				contentSub.setAttribute("value", levelSub);
				contentSub.center = subList[i].center;
				contentSub.adcode = subList[i].adcode;
				curList.add(contentSub);
			}
		}

	}
	function search(obj) {
		//清除地图上所有覆盖物
		for (var i = 0, l = polygons.length; i < l; i++) {
			polygons[i].setMap(null);
		}
		var option = obj[obj.options.selectedIndex];
		var keyword = option.text; //关键字
		var adcode = option.adcode;
		district.setLevel(option.value); //行政区级别
		district.setExtensions('all');
		//行政区查询
		//按照adcode进行查询可以保证数据返回的唯一性
		district.search(adcode, function(status, result) {
			if(status === 'complete'){
				getData(result.districtList[0],obj.id);
			}
		});
	}
	function setCenter(obj){
		map.setCenter(obj[obj.options.selectedIndex].center)
	}
</script>
<script type="text/javascript" src="http://webapi.amap.com/demos/js/liteToolbar.js"></script>

