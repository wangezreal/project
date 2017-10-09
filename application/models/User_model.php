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

    public function insertUser($data)
    {
        return $this->db->insert('users', $data);
    }

    public function getData()
    {
        return $this->db->get_where('users',array("user_id"=>1))->row_array();
    }

    public function checkUser($data , $checkPassword = false)
    {
        if ($checkPassword){
            $sql = "select user_id ,user_name,name from users WHERE user_name = ? AND password = ?";
            return $this->db->query($sql , array($data['username'] ,$data['password']))->row_array();
        }  else  {
            $sql = "select user_id from users WHERE user_name = ? ";
            return $this->db->query($sql , array($data['username']))->row_array();
        }
    }
}