<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<?php 	$data['title'] = $title;
		$this->load->view('adminHead',$data)?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=uTOLOThd1UH2MZE8tcTuWuQFgY23kdVI"></script>
<style type="text/css">
	body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
	#allmap{
		width: 45%;height: 60%;margin-left: 30px;border-radius: 20px;float: left;
	}
	#travelnotice{
		width: 45%;height: 120px;margin-left: 30px;margin-bottom: 20px;float: left;
	}
	#travelnotice p{
		padding: 8px;
	}
	#giftbox{
		width: 45%;height: 80%;margin-right: 30px;float: right;
	}
	a:hover,a:focus{
		outline: none;
		text-decoration: none;
	}
	.tab .nav-tabs{
		padding-left: 15px;
		border-bottom: 4px solid #692f6c;
	}
	.tab .nav-tabs li a{
		color: #fff;
		padding: 10px 20px;
		margin-right: 10px;
		background: #692f6c;
		text-shadow: 1px 1px 2px #000;
		border: none;
		border-radius: 0;
		opacity: 0.5;
		position: relative;
		transition: all 0.3s ease 0s;
	}
	.tab .nav-tabs li a:hover{
		background: #692f6c;
		opacity: 0.8;
	}
	.tab .nav-tabs li.active a{
		opacity: 1;
	}
	.tab .nav-tabs li.active a,
	.tab .nav-tabs li.active a:hover,
	.tab .nav-tabs li.active a:focus{
		color: #fff;
		background: #692f6c;
		border: none;
		border-radius: 0;
	}
	.tab .nav-tabs li a:before,
	.tab .nav-tabs li a:after{
		content: "";
		border-top: 42px solid transparent;
		position: absolute;
		top: -2px;
	}
	.tab .nav-tabs li a:before{
		border-right: 15px solid #692f6c;
		left: -15px;
	}
	.tab .nav-tabs li a:after{
		border-left: 15px solid #692f6c;
		right: -15px;
	}
	.tab .nav-tabs li a i,
	.tab .nav-tabs li.active a i{
		display: inline-block;
		padding-right: 5px;
		font-size: 15px;
		text-shadow: none;
	}
	.tab .nav-tabs li a span{
		display: inline-block;
		font-size: 14px;
		letter-spacing: -9px;
		opacity: 0;
		transition: all 0.3s ease 0s;
	}
	.tab .nav-tabs li a:hover span,
	.tab .nav-tabs li.active a span{
		letter-spacing: 1px;
		opacity: 1;
		transition: all 0.3s ease 0s;
	}
	.tab .tab-content{
		padding: 30px;
		background: #fff;
		font-size: 16px;
		color: #6c6c6c;
		line-height: 25px;
	}
	.tab .tab-content h3{
		font-size: 24px;
		margin-top: 0;
	}
	@media only screen and (max-width: 479px){
		.tab .nav-tabs li{
			width: 100%;
			margin-bottom: 5px;
			text-align: center;
		}
		.tab .nav-tabs li a span{
			letter-spacing: 1px;
			opacity: 1;
		}
	}
	.container{
		width: auto;
	}
</style>
<?php if (isLoginIn()):?>
	<div id="travelnotice">
		<p>下个目的地：<span style="float: right">上海</span></p>
		<p>预计出行日期：<span style="float: right">2012-12-02</span></p>
		<p>实际出行日期：<span style="float: right">2012-12-03</span></p>
	</div>
    <div id="giftbox"><div class="container">
			<div class="row">
				<div class="col-md-offset-3 col-md-6" style="margin-left: 0">
					<div class="tab" role="tabpanel">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-home"></i><span>lover</span></a></li>
							<li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-globe"></i><span>friend</span></a></li>

						</ul>
						<!-- Tab panes -->
						<div class="tab-content tabs">
							<div role="tabpanel" class="tab-pane fade in active" id="Section1">
								<h3>Section 1</h3>
								<p>选项卡一的内容</p>
								<p>选项卡一的内容</p>
								<p>选项卡一的内容</p>
								<p>选项卡一的内容</p>
								<p>选项卡一的内容</p>
								<p>选项卡一的内容</p>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="Section2">
								<h3>Section 2</h3>
								<p>选项卡二的内容</p>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="Section3">
								<h3>Section 3</h3>
								<p>选项卡三的内容</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div></div>
    <div id="allmap"></div>
	<div style="clear: both"></div>
<?php else:?>
<p></p>
<?php endif;?>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");    // 创建Map实例
	map.centerAndZoom('上海', 11);  // 初始化地图,设置中心点坐标和地图级别
	//添加地图类型控件
	map.addControl(new BMap.MapTypeControl({
		mapTypes:[
			BMAP_NORMAL_MAP,
			BMAP_HYBRID_MAP
		]}));
	map.setCurrentCity("上海");          // 设置地图显示的城市 此项是必须设置的
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>
</audio>
</html>


