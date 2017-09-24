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
}