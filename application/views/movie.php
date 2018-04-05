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
<div class="col-md-12">

</div>
<script type="text/javascript">
	$.ajax({
		'type': "GET",
		'url': "http://api.douban.com/v2/movie/top250",
		'dataType':'jsonp',
		'success' :function (data) {
			console.log(data.subjects);
		}
	});
</script>
