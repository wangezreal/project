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
		$result = $this->db->query("SELECT * FROM users WHERE username = $username")->row();
		return $result;
	}
}
