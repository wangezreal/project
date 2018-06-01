<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<?php 	$data['title'] = $title;
		$this->load->view('adminHead',$data)?>
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.4&key=9e8f83e8e41c687d75c824e2d0270e9b"></script>
<style type="text/css">
	body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
	#container{
		height:500px;border-radius: 20px;
	}
	#travelnotice{
		margin-left: 30px;margin-bottom: 20px;
	}
	#travelnotice p{
		padding: 8px;
	}
	#giftbox{
		margin-left: 30px;
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
</style>
<?php if (isLoginIn()):?>
	<div id="travelnotice "class="col-md-6">
		<p>下个目的地：<span style="float: right"><?php if ($res){echo $res['pname'].'-'.$res['cityname'];}else{echo '暂无安排，世界那么大，去看看吧！';} ?></span></p>
		<p>预计出行日期：<span style="float: right"><?php if ($res){echo $res['p_date'];}else{echo '还在等什么呢？踩着时间的尾巴，享受青春吧！';}?></span></p>
		<div id="container" <!--class="col-md-6"-->></div>
	</div>
    <div id="giftbox" class="col-md-5"><div class="container" style="width: auto">
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
	<div style="clear: both"></div>
	<script type="text/javascript">
		var map = new AMap.Map('container',{
			pitch:75,
			viewMode:'3D',
			zoom: 17,
			expandZoomRange:true,
			zooms:[3,20],
			center: [116.39,39.9]
		});
	</script>
<?php else:?>
	<canvas id="canvas" style="margin-top:-20px " ></canvas>
	<script type="text/javascript">
		"use strict";
		var canvas = document.getElementById('canvas'),
			ctx = canvas.getContext('2d'),
			w = canvas.width = window.innerWidth,
			h = canvas.height = window.innerHeight,

			hue = 217,
			stars = [],
			count = 0,
			maxStars = 1400;

		// Thanks @jackrugile for the performance tip! http://codepen.io/jackrugile/pen/BjBGoM
		// Cache gradient
		var canvas2 = document.createElement('canvas'),
			ctx2 = canvas2.getContext('2d');
		canvas2.width = 100;
		canvas2.height = 100;
		var half = canvas2.width/2,
			gradient2 = ctx2.createRadialGradient(half, half, 0, half, half, half);
		gradient2.addColorStop(0.025, '#fff');
		gradient2.addColorStop(0.1, 'hsl(' + hue + ', 61%, 33%)');
		gradient2.addColorStop(0.25, 'hsl(' + hue + ', 64%, 6%)');
		gradient2.addColorStop(1, 'transparent');

		ctx2.fillStyle = gradient2;
		ctx2.beginPath();
		ctx2.arc(half, half, half, 0, Math.PI * 2);
		ctx2.fill();

		// End cache

		function random(min, max) {
			if (arguments.length < 2) {
				max = min;
				min = 0;
			}

			if (min > max) {
				var hold = max;
				max = min;
				min = hold;
			}

			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

		var Star = function() {

			this.orbitRadius = random(w / 2 - 50);
			this.radius = random(100, this.orbitRadius) / 10;
			this.orbitX = w / 2;
			this.orbitY = h / 2;
			this.timePassed = random(0, maxStars);
			this.speed = random(this.orbitRadius) / 100000;
			this.alpha = random(2, 10) / 10;

			count++;
			stars[count] = this;
		}

		Star.prototype.draw = function() {
			var x = Math.sin(this.timePassed + 1) * this.orbitRadius + this.orbitX,
				y = Math.cos(this.timePassed) * this.orbitRadius/2 + this.orbitY,
				twinkle = random(10);

			if (twinkle === 1 && this.alpha > 0) {
				this.alpha -= 0.05;
			} else if (twinkle === 2 && this.alpha < 1) {
				this.alpha += 0.05;
			}

			ctx.globalAlpha = this.alpha;
			ctx.drawImage(canvas2, x - this.radius / 2, y - this.radius / 2, this.radius, this.radius);
			this.timePassed += this.speed;
		}

		for (var i = 0; i < maxStars; i++) {
			new Star();
		}

		function animation() {
			ctx.globalCompositeOperation = 'source-over';
			ctx.globalAlpha = 0.8;
			ctx.fillStyle = 'hsla(' + hue + ', 64%, 6%, 1)';
			ctx.fillRect(0, 0, w, h)

			ctx.globalCompositeOperation = 'lighter';
			for (var i = 1, l = stars.length; i < l; i++) {
				stars[i].draw();
			};

			window.requestAnimationFrame(animation);
		}

		animation();
	</script>
<?php endif;?>
</html>


