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
		$this->load->helper('login');
		$this->load->library('session');
    }

    public function index()
    {
        $data['title'] = '秘密花园';
        $this->load->view('admin',$data);
    }
}
