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
		$this->load->model('travel_model');
    }

    public function index()
    {
		$data['title'] = '秘密花园';
		if(isLoginIn()){
			$res = $this->travel_model->getlist($_SESSION['userID'],1);
			if ($res){
				$data['res'] = $res[0];
			}else{
				$data['res']='';
			}
		}
        $this->load->view('admin',$data);
    }
}
