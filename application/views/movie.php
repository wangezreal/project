<?php
/**
 * Created by PhpStorm.
 * User: 60110
 * Date: 2018/3/26
 * Time: 23:14
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<?php 	$data['title'] = $title;
$this->load->view('adminHead',$data)?>
<meta name="referrer" content="never">
<style>
	#cbody img{
		width: 270px;
		height: 400px;
	}
	.caption{
		text-align: center;
	}
	.mblock{
		border-radius: 10px;
		margin: 0 0 3px 0;
	}
</style>
<div class="form-group">
	<label for="typename">选择类型</label>
	<select class="form-control" id="typename" >
		<option>top250</option>
		<option>即将上映</option>
		<option>正在热映</option>
	</select>
</div>
<div class="col-md-12" id="cabody">
<div class="col-md-12" id="cbody">

</div>
	<div style="clear: both">
	</div>
	<div id="example col-md-12 " style="text-align: right"> <ul id="pageLimit"></ul> </div>
</div>

<script type="text/javascript">
	var urls = {
		top250:'http://api.douban.com/v2/movie/top250',
		'即将上映':'http://api.douban.com/v2/movie/coming_soon',
		'正在热映':'http://api.douban.com/v2/movie/in_theaters'
	}
	var tpage = 1;
	var pagesize = 20;
	var name=$("#typename ").val();
	var url = urls[name];
	$("#typename").change(function () {
		var name = $("#typename ").val();
		var url = urls[name];
		var tpage = 1;
		getdata(tpage,20,url);
	})
</script>
<script src="<?php echo base_url("/js/interestlist.js")?>"></script>
<script type="text/javascript">
	getdata(tpage,20,url);
</script>

