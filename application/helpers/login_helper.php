<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-9-7
 * Time: 下午9:56
 */
function isLoginIn()
{
    if (isset($_SESSION['name']) && isset($_SESSION['username']) && isset($_SESSION['userID'])){
        return true;
    }
    return false;
}

function returnSubDate($day)
{
	$da1 = strtotime($day);
	$nowday = date('Y-m-d');
	$da2 = strtotime($nowday);
	if ($da1<$da2){
		return;
	}else{
		$sub = ($da1-$da2)/3600/24;
		echo "距离预计日期还有".$sub."天";
	}
}
