<?php
/**
 * Created by PhpStorm.
 * User: 60110
 * Date: 2018/3/26
 * Time: 21:39
 */
class Interest extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('login');
		$this->load->library('session');
	}

	public function movie()
	{
		if(!isLoginIn()){
			header("location:http://localhost/admin");
		}
		$data['title'] = '豆瓣电影推荐';
		$this->load->view("movie",$data);
	}
}
