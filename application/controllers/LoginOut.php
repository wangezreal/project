<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-10-14
 * Time: 下午8:29
 */
class LoginOut extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }

    public function index()
    {
        $this->session->set_userdata('username');
        $this->session->set_userdata('name');
        $this->session->set_userdata('userID');
    }
}