<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-8-27
 * Time: 上午10:59
 */
class Admin extends CI_Controller
{
    public function __construct()
	{
        parent::__construct();
    }

    public function index()
    {
        $this->load->helper('login');
        $this->load->library('session');
        $data['title'] = '秘密花园';
		$this->session->set_userdata('username','aaaaa');
		$this->session->set_userdata('name','aaaaa');
		$this->session->set_userdata('userID','aaaaa');
        $this->load->view('admin',$data);
    }
}
