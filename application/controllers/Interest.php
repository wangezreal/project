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
		$this->load->model('travel_model');
	}

	public function movie()
	{
		$data['title'] = '豆瓣电影推荐';
		$this->load->view("movie",$data);
	}
}
