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
	<div class="panel-heading">我的日志<a style="float: right" href="./log/addlog">添加日志</a></div>
	<div class="panel-body">
		<ul class="list-group">
			<li class="list-group-item"><a>Cras justo odio</a></li>
		</ul>
		<div id="example" style="text-align: right"> <ul id="pageLimit"></ul> </div>
	</div>
</div>
<script src="<?php echo base_url("/js/list.js")?>"></script>
