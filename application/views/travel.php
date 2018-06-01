<?php
/**
 * Created by PhpStorm.
 * User: 60110
 * Date: 2018/3/18
 * Time: 22:55
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<?php 	$data['title'] = $title;
$this->load->view('adminHead',$data)?>
<style>
	.doing span{
		color: red;
	}
	.done span{
		color: deepskyblue;
	}
</style>
<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">我的行程计划<a style="float: right;" id="done-btn">完成最近计划</a><a style="float: right;display: block;margin-right: 15px;" href="/travel/addtravel">添加计划</a></div>
	<div class="panel-body">
		<ul class="list-group">
			<?php foreach ($list as $value){?>
				<li class="list-group-item <?php if($value['is_do']){echo 'done';}else{echo 'doing';}?>" ><a>
						<span ><?php echo $value['pname']?></span>
						<span class="del_btn" value="<?php echo $value['user_id'].'-'.$value['cid']?>" style="float:right;width: 5%;text-align: center" >删除</span>
						<span style="float: right"><?php echo $value['p_date']?></span>
						<span style="float: right">计划日期：</span></a>
					<span style="float: right;width: 20%;text-align: center"><?php returnSubDate($value['p_date'])?></span>
				</li>
			<?php }?>
		</ul>
		<div id="example" style="text-align: right"> <ul id="pageLimit"></ul> </div>
	</div>
</div>
<script type="text/javascript">
var page = <?php echo $page;?>;
var pagecount = <?php echo $pagecount;?>;
</script>
<script src="<?php echo base_url("/js/list.js")?>"></script>
<script src="<?php echo base_url("/js/travellist.js")?>"></script>

