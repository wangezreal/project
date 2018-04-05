<?php
/**
 * Created by PhpStorm.
 * User: 60110
 * Date: 2018/3/25
 * Time: 1:52
 */
class Travel_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function getmcid($uid)
	{
		$result = $this->db->query("SELECT * FROM citys WHERE user_id = '$uid' order by cid DESC ")->result_array();
		if (sizeof($result)){
			return $result[0]['cid']+1;
		}else{
			return 1;
		}
	}
	public function inserttravel($data)
	{
		$cname = '';
		$cvalue = '';
		foreach ($data as $key=>$value){
			$cname .="$key,";
			$cvalue .="'$value',";
		}
		$cname = substr($cname,0,strlen($cname)-1);
		$cvalue = substr($cvalue,0,strlen($cvalue)-1);
		$this->db->query("insert into citys ($cname)VALUES($cvalue)");
		return $this->db->affected_rows();
	}

	public function getlist($uid ,$page=1,$flag=false)
	{
		if ($flag){
			return $this->db->query("SELECT count(*)as num FROM citys WHERE user_id = '$uid' ")->result_array();
		}
		$page_size = 10;
		$page = $page-1;
		$num = $page_size*$page;
		return $this->db->query("SELECT * FROM citys WHERE user_id = '$uid' ORDER BY create_date DESC limit $num,$page_size")->result_array();
	}
}
