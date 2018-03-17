<?php?>
<html>
<head>
	<title>首页</title>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="/css/vivify.min.css" rel="stylesheet">
	<link href="/css/noticejs.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("/css/swiper-3.4.2.min.css")?>" rel="stylesheet" type="text/css">
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url("/js/swiper-3.4.2.jquery.min.js")?>"></script>
	<script src="/js/notice.js"></script>
</head>
<body>
<div class="swiper-container ">
    <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
    </div>
    <!-- 如果需要分页器 -->
    <div class="swiper-pagination"></div>

    <!-- 如果需要导航按钮 -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- 如果需要滚动条 -->
   <!-- <div class="swiper-scrollbar"></div>-->
</div>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal',
        loop: true,
        watchSlidesProgress : true,
        speed:3000,
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
    mySwiper.progress;
    mySwiper.slides[2].progress;
</script>
<audio  controls="controls"autoplay="autoplay" loop="loop" hidden>
	<source src="http://mp3.qqmusic.cc/yq/4884947.mp3" type="audio/mpeg" />
</audio>
</body>
</html>
