<?php
/**
 * Created by PhpStorm.
 * User: 60110
 * Date: 2018/4/21
 * Time: 17:57
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<?php 	$data['title'] = $title;
$this->load->view('adminHead',$data)?>
<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/css/default.css">
<link rel="stylesheet" type="text/css" href="/css/styles.css">
<div class="col-sm-3">
</div>
<div class="col-sm-3">
	<input type="text" class="form-control col-sm-6" id="address"name="address"value="<?php if (isset($arr['pname'])){echo $arr['pname'];}?>" placeholder="请输入要查询的地点">
</div>
<div class="col-sm-6">
	<button type="button" class="btn btn-default" id="sel-btn">查询</button>
</div>
	<ul class="card-list" style="margin-left: 12%;margin-top: 100px" id="card-weather">

	</ul>

<script type="text/javascript">
	var weather = {
		'晴':'sunny',
		'多云':'cloud',
		'阴':'cloud',
		'阵雨':'rain',
	    '雷阵雨':'rain',
		'小雨':'rain',
		'中雨':'rain',
		'大雨':'rain',
		'暴雨':'rain',
		'大暴雨':'rain',
		'特大暴雨':'rain',
		'小雪':'snow',
		'中雪':'snow',
		'大雪':'snow',
		'暴雪':'snow',
		'大暴雪':'snow',
		'特大暴雪':'snow'
	}
	function getw(pname) {
		$.ajax({
			'type': "GET",
			'url': "http://restapi.amap.com/v3/geocode/geo?address="+pname+"&output=JSON&key=101718866e3d3346a9130b2659fa0c71",
			'dataType':'json',
			'success' :function (data) {
				var adcode = data.geocodes[0].adcode;
				$.ajax({
					'type': "GET",
					'url': "http://restapi.amap.com/v3/weather/weatherInfo?city="+adcode+"&key=101718866e3d3346a9130b2659fa0c71&extensions=all",
					'dataType':'json',
					'success' :function (data) {
						if (!data.forecasts[0].casts[0]){
							pname = "<?php if (isset($arr['cityname'])){echo $arr['cityname'];}?>";
							getw(pname);
						}else {
							var html = '';
							var cdata = data.forecasts[0].casts;
							for(x in cdata){
								var lhtml = '<li class="card"><div class="card-info"><p>'+cdata[x].date+'</p><p>周'+cdata[x].week+'</p></div>';
								if(weather[cdata[x].dayweather]){
									var ahtml = '<div class="card-color color-'+weather[cdata[x].dayweather]+'"><div class="'+weather[cdata[x].dayweather]+'"></div></div>';
								}
								var inhtml = '<div class="card-info"><p>白天天气：'+cdata[x].dayweather+'</p><p>夜间天气:'+cdata[x].nightweather+'</p><p>温度：'
									+cdata[x].nighttemp+'-'+cdata[x].daytemp+'</p><p>白天风力 '+cdata[x].daypower+'</p><p>夜间风力 '+cdata[x].nightpower+'</p></div></li>';
								html = html+lhtml+ahtml+inhtml;
							}
							$("#card-weather").html(html);
						}
					}
				});
			}
		});
	}
	var pname = "<?php if (isset($arr['pname'])){echo $arr['pname'];}?>";
	if(pname){
		getw(pname);
	}else {
		alert('暂无安排的行程地区，想要查询地区天气请输入');
		$("#sel-btn").click(function () {
			pname = $("#address").val();
			getw(pname);
		})
	}
	$("#sel-btn").click(function () {
		pname = $("#address").val();
		getw(pname);
	})
</script>
