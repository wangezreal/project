<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-9-18
 * Time: 下午9:06
 */
class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function getpd($username)
	{
		$result = $this->db->query("SELECT * FROM users WHERE user_name = '$username'")->result_array();
		return $result[0];
	}
	public function insertUser($data)
	{
		$cname = '';
		$cvalue = '';
		foreach ($data as $key=>$value){
			$cname .="$key,";
			$cvalue .="'$value',";
		}
		$cname = substr($cname,0,strlen($cname)-1);
		$cvalue = substr($cvalue,0,strlen($cvalue)-1);
		$this->db->query("insert into users ($cname)VALUES($cvalue)");
		return $this->db->affected_rows();
	}
}
